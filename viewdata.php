<?php 
session_start();
include("conection.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
	    <h2>Get Inventory data</h2>
      </div><!--close header-->		  
      <div id="content">
        <div class="content_item">
          <h1>Get the information of Inventory by searching</h1>
          <article class="post">
<p>


</p>
<header class="postheader">
<h2>Enter GDC Number</h2>
</header>
<p>

</p>
<form name="form1" method="post" action="result.php">
  <p>
    <label for="textfield2">GDC ID</label>
    <input type="text" name="gdc_id" id="gdc_id">
  </p>
  <p>
    <input type="submit" name="button2" id="button2" value="Submit">
  </p>
</form>
</article>
<p>


</p>

		</div><!--close content_item-->	
	      
		<div class="sidebar_container">   		  
		  <div class="sidebar">
            <div class="sidebar_item">
              
            </div><!--close sidebar_item--> 
          </div><!--close sidebar-->  
        </div><!--close sidebar_container-->	
       <br style="clear:both;" />
      </div><!--close content-->	
    </div><!--close site_content-->	
    <div id="footer">  
			
	  </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
