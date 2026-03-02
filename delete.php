<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('includes/session.php');
include('includes/header.html');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 if (!isset($_SESSION['username'])){
   header("location: login.php");
    exit;
}
else 
{
    $user=$_SESSION['username'];
// Create connection

// Check connection

// sql to delete a record
$sql = "DELETE FROM users WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
include('includes/footer.html');
?>  
       