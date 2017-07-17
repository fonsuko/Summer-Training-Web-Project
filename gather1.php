<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<title>ส่วนปฏิบัติการท่อร้อยสาย </title>
	<meta http-equiv=Content-Type content="text/html; charset=utf8">
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
			<li><a href="add1.php">บันทึกข้อมูลชุมสาย</a></li>
		<li><a href="add2.php">บันทึกข้อมูลโครงสร้างบ่อพัก</a></li>
    <li><a href="gather1.php">ข้อมูล</a></li>
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

			<form method="post" action="addcheck.php">
					<h2>บันทึกข้อมูลชุมสาย</h2>
					<label>ภูมิภาค : </label>
					<select name="geography">
						<?php
							$strSQL = "SELECT * FROM geography";
							mysql_query("SET NAMES UTF8");

							$objQuery = mysql_query($strSQL);
							while($objResuut = mysql_fetch_array($objQuery))
							{
								?>
									<option value="<?php echo $objResuut["GEO_NAME"];?>">
									<?php echo $objResuut["GEO_NAME"];?>
									</option>

									<?php
								}
						?>
					</select>


					<label>จังหวัด : </label>
					<select name="province" required="required">

						<?php
							$strSQL = "SELECT * FROM province";
							mysql_query("SET NAMES UTF8");

							$objQuery = mysql_query($strSQL);
							while($objResuut = mysql_fetch_array($objQuery))
							{
								?>
									<option value="<?php echo $objResuut["PROVINCE_NAME"];?>">
									<?php echo $objResuut["PROVINCE_NAME"];?>
									</option>

									<?php
								}
						?>
					</select>

					<label>ชื่อชุมสาย : </label>
					<input type="text" name="exchange" placeholder="เช่น ชุมสายหาดใหญ่,ชุมสายเชียงใหม่" required="required">


					<label>Latitude : </label>
					<input type="text" name="latitude" placeholder="เช่น 15.874539" required="required">

					<label>Longitude : </label>
					<input type="text" name="longitude" placeholder="เช่น 100.43243"required="required">

					<label>ชื่อถนน : </label>
					<input type="text" name="streetName" placeholder="เช่น ถนนสุขุมวิท" required="required" >

					<label>ผู้สำรวจ : </label>
					<input type="text" name="surveyBy" placeholder="เช่น พิทักษ์ เอื้อสุจริต" required="required">

					<label>วันที่สำรวจ : </label>
					<input type="date" name="date">




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
