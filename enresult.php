<?php
session_start();
include("modal.php");
include("conection.php");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

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
	    <h2>Enter The Inventory information</h2>
      </div><!--close header-->		
      <div id="content">
        <div class="clear"></div>
        <div class="content_item">
          <h2>INSERT NEW DETAILS</h2>
<p>

</p>
          <form action=enresult.php method="post" class="form">
              <p class ="textfield">
              <lable for "author" 
                    <strong> GDC ID* </strong>
              </lable>
              <input type="text" name="gdc_id" size="30" tabindex="5">
                  <p class ="textfield">
              <lable for "author"
                    <strong> Instrument Name* </strong>
              </lable>
              <input type="text" name="instrument_name" size="30" tabindex="5">
              <p class ="textfield">
              <lable for "author"
                    <strong> Instrument ID* </strong>
              </lable>
              <input type="text" name="instrument_id" size="30" tabindex="5">
                  <p class ="textfield">
              <lable for "author"
                    <strong> Quantity* </strong>
              </lable>
              <input type="number" name="number" size="30" tabindex="5">
  
           <p>
              <input name="submit" id="submit" tabindex="5" type="submit" />
              <input name="comment_post_ID" value="1" type="hidden"/>
   </p>
</form>
       (* required fields)

<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
if(isset($_POST['submit']))
{
$gdc_id=mysql_real_escape_string($_POST["gdc_id"]);
$instrument_name=mysql_real_escape_string($_POST["instrument_name"]);
$instrument_id=mysql_real_escape_string($_POST["instrument_id"]);$number=mysql_real_escape_string($_POST["number"]);
}
$query="INSERT INTO znewdetails(gdc_id,instrument_name,instrument_id,number) VALUES('$gdc_id','$instrument_name','$instrument_id','$number')";
if (!mysql_query($query,$con))
  {
  die('Error in mysql: ' . mysql_error());
  }
  else
  {
echo "Data inserted Successfully...<br /><p></p>";
  }


?>

</div><!--close content_item-->		
       <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">  
			
	  </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>