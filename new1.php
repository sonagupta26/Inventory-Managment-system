<html>
<head>
  <title>Inventory Management System</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
</head>

<body>
  <div id="main">	
    <div id="site_content">  
	  <div id="menubar">
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="new1.php">Admin</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
	  </div><!--close menubar-->
      <div id="header">  
        <h1><span>Inventory Management System</span></h1>	
	    <h2>Get Inventory data</h2>
      </div><!--close header-->		  
      <div id="content">
        <div class="content_item">
<article class="post">
  <header class="postheader">
  <h2><u align="center">Admin Login</u></h2>
  </header>
  <section class="entry">
<form name="form1" method="post" action="dashboard.php">
<table width="100" border="0" align="center" cellpadding="4" cellspacing="30">
  <tr>
    <td colspan="5">
	</td>
  </tr>
  <tr>
    <td width="300"><div align="center">Admin ID(required)</div></td>
    <td width="300"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="center">Password(required)</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="left"></div></td>
    <td><input name="submit" type="submit" /></td>
  </tr>
</table>

<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
$sql="SELECT * FROM admin WHERE password='$password' AND username='$username'";
$well=mysql_query($sql, $con);
if ($row1=mysql_fetch_array($well))
{
header("location: dashboard.php");
} else {
echo "Username or Password is invalid";
}
exit();
}
?>
</form>


</div><!--close content_item-->	
	      
			
       <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">  
			
	  </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
