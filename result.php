<?php 
include("conection.php");
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
if(isset($_GET['resid']))
{
$rid =	$_GET['resid'];
}
else
{
	$rid =	$_POST['gdc_id'];
}
$result1="";
$result= mysql_query("SELECT instrument_name,instrument_id FROM zdevice_id");
$query2= "SELECT gdc_name,gdc_id FROM zstate_id_table WHERE gdc_id='$rid' ";
$result2=mysql_query($query2,$con);
while($row1=mysql_fetch_array($result2))
{
$gdc_name= $row1['gdc_name'];
$gdc_id1= $row1['gdc_id'];
}
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

<div style="position: absolute; top:50; right=100; text-align:left;">
<a href="#" download>Download</a></div>
</head>

<body>

<form name="form1" method="post" action="">
  <p>
    <label for="textfield">GDC Name : </label>
 <?php echo $gdc_name; ?> </p>
  <p>
    <label for="textfield2">GDC ID: </label> 
 <?php echo $gdc_id1; ?>
  </p>

  <hr>
    </tr>
     <?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hardware", $con);
/*$result1="SELECT * FROM andhrapradesh,assamandnagaland,bihar,chhattisgarh,eastuttarpradesh,grb,gujratanddamandiu,himachalpradesh,indianinstituteofsurveyingandmapping,jammuandkashmir,jharkhand,karnataka,kerelaandlakshdweep,madhyapradesh,maharaandgoa,meghalayaandarunachalpradesh,orissa,punjabharayanaandchandigarh,rajasthan,surveyairanddelhi,tamilnadupuducherryandamannicobarislands,trmanipurandmizoram,ukandwestup,westbengalandsikkim WHERE 'gdc_id'='$rid' ";
//$result1="SELECT * FROM total"; */
if(strcmp($rid,"APGDC"))
{
$result1="SELECT * FROM andhrapradesh";
}
elseif(strcmp($rid,"AS&NGGDC"))
{
$result1= "SELECT * FROM assamandnagaland";
}elseif(strcmp($rid,"BGDC"))
{
$result1="SELECT * FROM bihar";
}elseif(strcmp($rid,"CHHGDC"))
{
$result1="SELECT * FROM chhattisgarh";
}elseif(strcmp($rid,"EUPGDC"))
{
$result1="SELECT * FROM eastuttarpradesh";
}elseif(strcmp($rid,"GD&DGDC"))
{
$result1="SELECT * FROM gujratanddamandiu";
}
elseif(strcmp($rid,"HPGDC"))
{
$result1="SELECT * FROM himachalpradesh";
}elseif(strcmp($rid,"J&KGDC"))
{
$result1="SELECT * FROM jammuandkashmir";
}elseif(strcmp($rid,"JHGDC"))
{
$result1="SELECT * FROM jharkhand";
}elseif(strcmp($rid,"KGDC"))
{
$result1= "SELECT * FROM karnataka";
}elseif(strcmp($rid,"K&LGDC"))
{
$result1= "SELECT * FROM kerelaandlakshdweep";
}elseif(strcmp($rid,"MPGDC"))
{
$result1="SELECT * FROM madhyapradesh";
}elseif(strcmp($rid,"MH&GGDC"))
{
$result1= "SELECT * FROM maharaandgoa";
}elseif(strcmp($rid,"MEG&ARGDC"))
{
$result1="SELECT * FROM meghalayaandarunachalpradesh";
}elseif(strcmp($rid,"OGDC"))
{
$result1="SELECT * FROM orissa";
}elseif(strcmp($rid,"PH&CGDC"))
{
$result1="SELECT * FROM punjabharayanaandchandigarh";
}elseif(strcmp($rid,"RGDC"))
{
$result1= "SELECT * FROM rajasthan";
}elseif(strcmp($rid,"SA&DGDC"))
{
$result1= "SELECT * FROM surveyairanddelhi";
}elseif(strcmp($rid,"TNP&ANGDC"))
{
$result1="SELECT * FROM tamilnadupuducherryandandamannicobarislands";
}elseif(strcmp($rid,"TRMN&MZGDC"))
{
$result1= "SELECT * FROM trmanipurandmizoram";
}elseif(strcmp($rid,"UK&WUPGDC"))
{
$result1= "SELECT * FROM ukandwestup";
}elseif(strcmp($rid,"WB&SKGDC"))
{
$result1="SELECT * FROM westbengalandsikkim";
}elseif(strcmp($rid,"G&RB"))
{
$result1= "SELECT * FROM g&rb";
}elseif(strcmp($rid,"IISM"))
{
$result1= "SELECT * FROM indianinstituteofsurveyingandmapping";
}
$fetch=mysql_query($result1,$con);
if (!$fetch)
  {
  die('Error in mysql: ' . mysql_error());
  }
  else{

     echo "<table border=1>
    <tr>
      <th> DEVICE NAME</th>
      <th> NUMBER OF UNITS</th>
    </tr>";
while($record=mysql_fetch_array($fetch)){
echo "<tr>";
echo "<td>" . $record['instrument_id']."</td>";
echo "<td>" . $record['number']."</td>";
echo "</tr>";
}
}
  ?>
</form>
</body>
</html>
