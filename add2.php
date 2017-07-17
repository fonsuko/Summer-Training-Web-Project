<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ส่วนปฏิบัติการท่อร้อยสาย </title>
	<link rel="stylesheet" href="default.css">
	</head>


	<?php
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("datatot");
		mysql_query("SET character_set_results=tis620");
		mysql_query("SET character_set_client=tis620");
		mysql_query("SET character_set_connection=tis620");
	?>



	<body>

	<div id="wrapper">
		<div id="div_header">
			ระบบปฏิบัติการท่อร้อยสาย
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="add1.php">บันทึกข้อมูลชุมสาย</a></li>
		<li><a href="add2.php">บันทึกข้อมูลโครงสร้างบ่อพัก</a></li>
		<li><a href="record.php">ข้อมูลชุมสาย</a></li>
		<li><a href="record2.php">ข้อมูลบ่อพัก</a></li>
		</ul>
	</div>

	<div id="div_main">
		<div id="div_left">

		</div>
		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->

			<form method="post" action="record2.php" >
					<h2>บันทึกข้อมูลโครงสร้างบ่อพัก</h2>
					<label>ชื่อชุมสาย : </label>
					<input type="text" name="exchange_name" placeholder="เช่น ชุมสายหาดใหญ่,ชุมสายเชียงใหม่">

					<label>ชื่อบ่อพัก : </label>
					<input type="text" name="pothole_name" placeholder="เช่น MH#001, PB#001 เป็นต้น">

					<label>Latitude : </label>
					<input type="text" name="latitude_ex" placeholder="เช่น 15.874539 เป็นต้น">

					<label>Longitude : </label>
					<input type="text" name="longitude_ex" placeholder="เช่น 100.43243 เป็นต้น">

					<form method="post" action="record2.php" >
							<label>ประเภทบ่อพัก : </label>
							<select name="pothole">
								<?php
									$strSQL = "SELECT * FROM pothole";
									$objQuery = mysql_query($strSQL);
									while($objResuut = mysql_fetch_array($objQuery))
									{
										?>
											<option value="<?php echo $objResuut["POTHOLE_TYPE"];?>">
											<?php echo $objResuut["POTHOLE_TYPE"];?>
											</option>

											<?php
										}
								?>
							</select>
					<label>ชนิด : </label>
					<input type="text" name="type_name" placeholder="เช่น A-1,JUF11 เป็นต้น">

					<label>ชื่อถนน : </label>
					<input type="text" name="street_name" placeholder="เช่น ถนนสุขุมวิท" >


					<label>ผู้สำรวจ : </label>
					<input type="text" name="survey_name" placeholder="เช่น พิทักษ์ เอื้อสุจริต">

					<label>วันที่สำรวจ : </label>
					<input type="date" name="date" placeholder="เช่น 13/07/2560">



					<!--<h2>รายละเอียดท่อร้อยสาย</h2>

					<label>ระยะของท่อ</label>
					<input type="radio" name="distance" value="three"> 3"
					<input type="radio" name="distance" value="four"> 4"
					<input type="radio" name="distance" value="onehundred"> 100
					<input type="radio" name="distance" value="onehundredplus"> 125
					<div></div>

					<label>ท่อที่ใช้งานอยู่</label>
					<input type="radio" name="avaifor" value="okay" > ปกติ
					<input type="radio" name="avaifor" value="extended"> ขยายงาน
					<input type="radio" name="avaifor" value="treat"> ซ่อมบำรุง

					<div></div>

					<label>รวมท่อที่ใช้งานทั้งหมด</label>
					<input type="text" name="username">

					<label>ท่อที่เหลือจากการใช้งาน</label>
					<input type="password" name="passwd">




					<!--select name="usergroup">
						<option value="1">Admin</option>
						<option value="2">Staff</option>
						<option value="3">Member</option>
					</select-->


					<div class="center">
						<input type="submit" value="บันทึกข้อมูล" >
					</div>
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
