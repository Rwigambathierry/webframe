# Use official Ubuntu with PHP-FPM
FROM ubuntu:22.04

# Set environment variables
ENV DEBIAN_FRONTEND=noninteractive
ENV DB_SERVER=localhost
ENV DB_USERNAME=root
ENV DB_PASSWORD=rootpassword
ENV DB_NAME=miniproject

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    php8.1 \
    php8.1-fpm \
    php8.1-mysql \
    php8.1-mysqli \
    php8.1-pdo-mysql \
    php8.1-curl \
    php8.1-gd \
    php8.1-xml \
    nginx \
    mysql-server \
    supervisor \
    curl \
    wget \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy application files
COPY . .

# Create necessary directories
RUN mkdir -p /var/log/supervisor /var/run/php-fpm /var/run/mysqld \
    && chown -R www-data:www-data /var/www/html \
    && chown -R mysql:mysql /var/lib/mysql /var/run/mysqld

# Copy supervisor configuration
COPY ./supervisord.conf /etc/supervisor/supervisord.conf

# Copy nginx configuration
COPY ./nginx.conf /etc/nginx/sites-available/default

# Initialize MySQL
RUN service mysql start && \
    mysql -e "CREATE DATABASE IF NOT EXISTS miniproject;" && \
    mysql miniproject < /var/www/html/database.txt; exit 0

# Expose ports
EXPOSE 80

# Start supervisord
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
