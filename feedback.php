<?php
// Include config file
include('includes/header.html');
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
<script language="javascript">
function checkField(f1, tbl1, tbl2)
{
	if((f1.name.value=="") )
	{
	  document.getElementById(tbl1).style.display = '';
          return false;
	 }
	else if((f1.email.value=="") )
        {
	  document.getElementById(tbl2).style.display = '';
           return false;
        }		
	else return true;
}
</script>

<style type="text/css">

.button {
    float:center;
    background-color: #4CAF50;
    border: 5px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
    border: 2px solid #4CAF50;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    }
    .button:hover {
    background-color: blue; /* Blue */
    color: white;

}
</style>

</head>
<body>
<div id="container">
<div>
<br><br><br><br><br><br>
<form name="f1" method="post" action="sendmail.php">
<table width="522" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:15pt;">
   <tr>
    <td height="25">&nbsp;</td>
    <td height="25">Subject*</td>
    <td height="25"><strong>:&nbsp;</strong></td>
    <td height="25"><input name="sub" type="text" id="subject"  maxlength="47"size="52" required /></td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="95">&nbsp;</td>
    <td height="95">Message*</td>
    <td height="95"><strong>:&nbsp;</strong></td>
    <td height="95" colspan="2"><textarea name="message" cols="50" rows="10" id="message" required>&nbsp;</textarea></td>
  </tr>
  <tr>
    <td height="25" colspan="2">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25" colspan="2">&nbsp;&nbsp;&nbsp;<input name="" type="submit" value="Submit" onclick="return checkField(f1,'tbl1','tbl2');" class="button"/>  
    &nbsp;
    <input name="input4" type="reset" value="Reset" class="button"/></td>
  </tr>
</table>
</form>
<?php
include('includes/footer.html');
?>
</div>
</div>
</body>
</html>
