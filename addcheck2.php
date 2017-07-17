

<?php //use for add and retrieve data from database phpmyadmin back to php page
$link = mysqli_connect("localhost","root","","datatot");
$link->set_charset("utf8");
if($link === false){
  die("Error: Cannot connect." . mysqli_connect_error());
}


$exchange_name = mysqli_real_escape_string($link, $_REQUEST['exchange_name']); //for some case using $_POST to add variable to another form
$pothole_name= mysqli_real_escape_string($link, $_REQUEST['pothole_name']);
$latitude_ex = mysqli_real_escape_string($link, $_REQUEST['latitude_ex']);
$longitude_ex = mysqli_real_escape_string($link, $_REQUEST['longitude_ex']);
$type_name = mysqli_real_escape_string($link, $_REQUEST['type_name']);
$street_name = mysqli_real_escape_string($link, $_REQUEST['street_name']);
$survey_name = mysqli_real_escape_string($link, $_REQUEST['survey_name']);
$date_time = mysqli_real_escape_string($link,$_REQUEST['date_time']);

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
