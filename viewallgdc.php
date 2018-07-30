<?php 
include("conection.php");
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
html {background:#1C1C1C; height:100%; width:100%;}
body {background:#f4f4f4; width:500px; margin:25px auto 25px; text-align:center; display:block; border:solid 1px #ccc; font:normal 14px "Trebuchet MS", Arial, Helvetica, sans-serif; line-height:22px; padding:50px;}
a {color:#F60;}
</style>
<div style="position: absolute; top:30; left=100; text-align:right;">
<a href="#" onclick="window.print();return false;">Print the Report</a>
</div>
<strong>

<h1>REPORT</h1>
</strong>

<div style="position: absolute; top:40; right=100; text-align:left;">
<a href="#" download>Download</a></div>
</head>

<body>
<form name="form1" method="post" action="">
<p>

</p>
     <?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
$result1="SELECT * FROM zstate_id_table";

$fetch=mysql_query($result1,$con);
if (!$fetch)
  {
  die('Error in mysql: ' . mysql_error());
  }
  else{

     echo "<p></p><table border=1>
    <tr>
      <th> GDC NAME</th>
      <th> GDC ID</th>
    </tr>";
while($record=mysql_fetch_array($fetch)){
echo "<tr>";
echo "<td>" . $record['gdc_name']."</td>";
echo "<td>" . $record['gdc_id']."</td>";
echo "</tr>";
}
}
  ?>
</form>
</body>
</html>
