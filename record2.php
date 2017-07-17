<?php require_once('connect.php'); //this is my-trying-recor-form
$host="localhost"; // กำหนด host
$username="root"; // กำหนด username
$pass_word=""; // กำหนด Password
$db="datatot"; // กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$username,$pass_word) or die ("Error Connection Wit Database");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn);
mysql_select_db($db) or die("Can not find database"); // เลือกฐานข้อมูล
mysql_query("SET NAMES UTF8"); //use set $link utf8 instead eiei
?>

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
				<col width="20%">
				<col width="20%">
				<col width="20%">
				<col width="15%">
				<col width="15%">
				<col width="30%">
				<col width="30%">
				<col width="30%">


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
												$strSQL = "SELECT longitude_ex FROM rec2";
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

											<td><name="type_name">
												<?php
													$strSQL = "SELECT type_name FROM rec2";
													mysql_query("SET NAMES UTF8");

													$objQuery = mysql_query($strSQL);
													while($objResuut = mysql_fetch_array($objQuery))
													{
														?>
															<option value="<?php echo $objResuut["type_name"];?>">
															<?php echo $objResuut["type_name"];?>
															</option>

															<?php
														}
												?></td>

												<td><name="street_name">
													<?php
														$strSQL = "SELECT street_name FROM rec2";
														mysql_query("SET NAMES UTF8");

														$objQuery = mysql_query($strSQL);
														while($objResuut = mysql_fetch_array($objQuery))
														{
															?>
																<option value="<?php echo $objResuut["street_name"];?>">
																<?php echo $objResuut["street_name"];?>
																</option>

																<?php
															}
													?></td>

													<td><name="survey_name">
														<?php
															$strSQL = "SELECT survey_name FROM rec2";
															mysql_query("SET NAMES UTF8");

															$objQuery = mysql_query($strSQL);
															while($objResuut = mysql_fetch_array($objQuery))
															{
																?>
																	<option value="<?php echo $objResuut["survey_name"];?>">
																	<?php echo $objResuut["survey_name"];?>
																	</option>

																	<?php
																}
														?></td>

														<td><name="date_time">
															<?php
																$strSQL = "SELECT date_time FROM rec2";
																mysql_query("SET NAMES UTF8");

																$objQuery = mysql_query($strSQL);
																while($objResuut = mysql_fetch_array($objQuery))
																{
																	?>
																		<option value="<?php echo $objResuut["date_time"];?>">
																		<?php echo $objResuut["date_time"];?>
																		</option>

																		<?php
																	}
															?></td>

                    <td></td>
                </tr>

								<?php
									$q="select * from rec1";
									$result=$mysqli->query($q);
									mysql_query("SET NAMES UTF8");
								?>

            </table>

		</div> <!-- end div_content -->

	</div> <!-- end div_main -->

	<div id="div_footer">

	</div>

</div>
</body>
</html>
