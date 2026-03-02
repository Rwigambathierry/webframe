
<?php
// Initialize the session
include('includes/session.php');
 
// Check if the user is logged in, otherwise redirect to login page
 if (!isset($_SESSION['username'])){
   header("location: login.php");
    exit;
}
 ?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
  
<body>
<?php  
if (!isset($_SESSION['username'])){
   header("location: login.php");
    exit;
}
    $user=$_SESSION["username"];
    $sub= $_REQUEST["sub"];
    $message = $_REQUEST["message"];
 
    $todayis = date("l, F j, Y, g:i a") ; 
    $subject = "Feedback from your website Visitor " ;
    $to= "info@gtmrc.com";
    $msg="";
$msg.= "<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:10pt; border:1px solid #ccc;'> ";
$msg.= "<tr>";
$msg.= "<td width='16' height='25'>&nbsp;</td>";
$msg.= "<td width='96'>Username</td>";
$msg.= "<td width='10' height='25'><strong>:</strong></td>";
$msg.= "<td height='25'>$user</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>Email Id </td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>&nbsp;</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>Subject</td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'><strong>:</strong></td>";
$msg.= "<td height='25' bgcolor='#F5F5F5'>$sub</td>";
$msg.= "</tr>";
$msg.= "<tr>";
$msg.= "<td height='95'>&nbsp;</td>";
$msg.= "<td height='95'>Message</td>";
$msg.= "<td height='95'><strong>:</strong></td>";
$msg.= "<td height='95'>$message</td>";
$msg.= "</tr>";
$msg.= "</table>";
 
$headers = "From: $user < $user >."; 
$headers .= "\r\nContent-Type: text/html; charset=ISO-8859-1\r\n"; 
 
mail($to, $subject, $msg, $headers) ;
mail($user,'Your request successfully sent',' We have received your request, we will come to you soon! TTB Team.\n\n','From: info@gtmrc.com');
 
echo "<center><div align='center'>";
echo "<h1 style='font-family:arial, verdana; font-size:15pt;'>Your enquiry has been sent successfully!</h1>";
echo "  <br /> ";
?>
<center><i><p align="justify" style="font-family:Trebuchet MS;font-size:16px;color:#FFFFFF; font-weight:normal;">
Click here <a href="../index.php">to go Home </a> </P><br /></i></center>
</body>
</html>
