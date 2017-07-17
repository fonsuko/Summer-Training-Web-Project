<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ส่วนปฏิบัติการท่อร้อยสาย </title>
	<link rel="stylesheet" href="default.css">
	</head>

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
		<div id="div_content" class="usergroup">
			<!--%%%%% Main block %%%%-->
			<h2>ข้อมูลบ่อพัก</h2>
			<table>
                <col width="10%">
                <col width="20%">
                <col width="30%">
                <col width="30%">
                <col width="5%">
                <col width="5%">

                <tr>
                    <th>ชุมสาย</th>
                    <th>บ่อพัก</th>
                    <th>Latitude</th>
                    <th>longitude</th>
                    <th>ประเภทบ่อพัก</th>
                    <th>ชนิด</th>
										<th>ชื่อถนน</th>
										<th>ผู้สำรวจ</th>
										<th>วันสำรวจ</th>
                </tr>

                 <tr>
                    <td><name="exchange_name">
											<?php
												$strSQL = "SELECT exchange_name FROM rec2";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["exchange_name"];?>">
														<?php echo $objResuut["exchange_name"];?>
														</option>

														<?php
													}
											?></td>

                    <td><name="pothole_name">
											<?php
												$strSQL = "SELECT pothole_name FROM rec2";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["pothole_name"];?>">
														<?php echo $objResuut["pothole_name"];?>
														</option>

														<?php
													}
											?></td>


                    <td><name="latitude_ex">
											<?php
												$strSQL = "SELECT latitude_ex FROM rec2";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["latitude_ex"];?>">
														<?php echo $objResuut["latitude_ex"];?>
														</option>

														<?php
													}
											?></td>

                    <td><name="longitude_ex">
											<?php
												$strSQL = "SELECT geography FROM rec2";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["longitude_ex"];?>">
														<?php echo $objResuut["longitude_ex"];?>
														</option>

														<?php
													}
											?></td>







                    <td><img src="images/Modify.png" width="24" height="24"></td>
                    <td><img src="images/Delete.png" width="24" height="24"></td>
                </tr>
            </table>

		</div> <!-- end div_content -->

	</div> <!-- end div_main -->

	<div id="div_footer">

	</div>

</div>
</body>
</html>
