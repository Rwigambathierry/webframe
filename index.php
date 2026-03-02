
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
?>
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="img" style="height:100px;"><img src="images/me.jpg"></img></div>
     </div>
    
    <div class="side">
    <p> This company  is the forefront of promoting the usage of ICT for IT professionals, Tourism and Business Current Trends.</p>
    <h3>You will find here some useful Information about: </h3>
    <p>Technology, Tourism, and Business.</p>
    <div class="img" style="height:100px;"><img src="images/technology.jpeg"></div><br>
    <div class="img" style="height:100px;"><img src="images/tourism.jpeg"></div><br>
    <div class="img" style="height:100px;"><img src="images/business.jpeg"></div>
  </div>
  <div class="main">
      <?php
         
        if (isset($_SESSION['username'])){
             $user=$_SESSION["username"];
        ?>
    <p>Dear  <b><i><?php echo $user ?></i></b>, you are the most welcome to this web site which mainly focuses on Technology, Tourism, and Business. Click Below to Manage your Account.</p>
     <?php
        }
        else
        {
            ?>
            Dear <b><i>Visitor</i></b>, you are the most welcome to this web site which mainly focuses on Technology, Tourism, and Business. Click here to<i> <b><a href="login.php"> Login with with your Account  </a>  
        <?php
                    }
    ?>
    <br>
     <h2>User Area</h2>
    <p>
    <a href="login.php"> Login</a> <a href="logout.php" class="right">Logout</a>
    </p>
    <p>
    <a href="register.php">  Register </a>  
    <p>
     <a href="reset-password.php"> Forgot My Password</a>
     </p>
     <p>
    <a href="delete.php">  Delete my Account </a>
    </p>
    <p>
    <a href="policies.php"> Policies</a>
     </p>
    <p>
    <a href="feedback.php"> Your Feedback </a>
</p>
  </article>
</section>

  </div>
</div>

<?php
include('includes/footer.html');
?>
</body>
</html>

