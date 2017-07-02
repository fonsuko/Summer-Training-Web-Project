<?php require_once('connect.php'); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี


$host="localhost"; // กำหนด host
$username="root"; // กำหนด username
$pass_word=""; // กำหนด Password
$db="record_1"; // กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$username,$pass_word) or die ("Error Connection Wit Database");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn);
mysql_select_db($db) or die("Can not find database"); // เลือกฐานข้อมูล
//--->
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$geography = $_POST["geography"];
	$province = $_POST["province"];
	$exchange = $_POST["exchange"];
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];
	$streetName = $_POST["streetName"];
	$surveyBy = $_POST["surveyBy"];



	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO `rec1`(`geography`, `province`, `exchange`, `latitude`, `longitude`, `streetName`, `surveyBy`) VALUES (`$geography`,`$province`,`$exchange`,`$latitude`,`$longtitude`,`$streetName`,`$surveyBy`)";

	/*$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());*/

	$result= mysqli_connect("localhost","root","") or die("Error: " . mysqli_error($con));

	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Record Successfilly');";
	echo "window.location = 'add1.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to record system again');";
	echo "</script>";
}
?>
