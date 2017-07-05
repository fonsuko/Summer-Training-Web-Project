

<?php //use for add and retrieve data from database phpmyadmin back to php page
$link = mysqli_connect("localhost","root","","datatot");
$link->set_charset("utf8");
if($link === false){
  die("Error: Cannot connect." . mysqli_connect_error());
}


$geography = mysqli_real_escape_string($link, $_REQUEST['geography']); //for some case using $_POST to add variable to another form
$province= mysqli_real_escape_string($link, $_REQUEST['province']);
$exchange = mysqli_real_escape_string($link, $_REQUEST['exchange']);
$latitude = mysqli_real_escape_string($link, $_REQUEST['latitude']);
$longitude = mysqli_real_escape_string($link, $_REQUEST['longitude']);
$streetName = mysqli_real_escape_string($link, $_REQUEST['streetName']);
$surveyBy = mysqli_real_escape_string($link, $_REQUEST['surveyBy']);

$sql = "INSERT INTO rec1 (geography, province, exchange, latitude, longitude, streetName,
 surveyBy) VALUES ('$geography', '$province', '$exchange', '$latitude', '$longitude','$streetName'
 ,'$surveyBy') ";
mysql_query("SET NAMES UTF8");

if(mysqli_query($link, $sql)){
  echo"<script type'text/javascript'>
    alert('เพิ่มข้อมูลสำเร็จ');
    </script>";
  echo"<script type'text/javascript'>
      window.location = 'record.php';
      </script>";
}
else{
  echo "Error : cannot execute the $sql." . mysqli_error($link);
}

mysqli_close($link);
?>
