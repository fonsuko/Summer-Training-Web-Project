<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<title>ส่วนปฏิบัติการท่อร้อยสาย </title>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<link rel="stylesheet" href="default.css">
	</head>


	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("datatot");
		mysql_query("SET NAMES UTF8");
	?>




	<body>


	<div id="wrapper">
		<div id="div_header">
			ระบบปฏิบัติการท่อร้อยสาย
		</div>
	<div id="div_subhead">
		<ul id="menu">
			
			<li><a href="main.php"> หน้าหลัก </a></li>
			<li><a href="add1.php">บันทึกข้อมูลชุมสาย</a></li>
			<li><a href="add2.php">บันทึกข้อมูลโครงสร้างบ่อพัก</a></li>
			<li><a href="add3.php">บันทึกข้อมูลการเชื่อมต่อ</a></li>
			<li><a href="record.php">ข้อมูลชุมสาย</a></li>

		</ul>
	</div>

	<div id="div_main">
		<div id="div_left">

		</div>
		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->


				</form>
		</div> <!-- end div_content -->

	</div> <!-- end div_main -->

	<div id="div_footer">

	</div>

</div>
</body>
</html>
<?php
	mysql_close();
?>
