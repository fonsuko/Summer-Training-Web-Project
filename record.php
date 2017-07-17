

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
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
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
			<li><a href="add3.php">บันทึกข้อมูลการเชื่อมต่อ</a></li>
			<li><a href="record.php">ข้อมูลชุมสาย</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>
	</div>
	<div id="div_main">
		<div id="div_left">

		</div>
		<div id="div_content" class="usergroup">
			<!--%%%%% Main block %%%%-->
		<?php
				/*if(isset($_POST['page'])) {
				$geography = $_POST["title"];
				$province = $_POST["province"];
				$exchange = $_POST["exchange"];
				$latitude = $_POST["latitude"];
				$longitude = $_POST["longitude"];
				$streetName = $_POST["streetName"];
				$surveyBy = $_POST["surveyBy"];

				require_once('connect.php');
				if($page=='adduser') {
					$q="INSERT INTO 'rec1' ('geography','province','exchange','latitude','longitude','streetName','surveyBy')
					VALUES ('$geography ','$province','$exchange','$latitude','$longitude','$streetName','$surveyBy')";
					$result=$mysqli->query($q);
					if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
						break;
					}
				}
			}*/
			?>

			<h2>ข้อมูลชุมสาย</h2>
			<table>
                <col width="5%">
                <col width="5%">
                <col width="20%">
								<col width="15%">
								<col width="15%">
								<col width="30%">
								<col width="30%">


                <tr>
                    <th>ภูมิภาค</th>
                    <th>จังหวัด</th>
                    <th>ชุมสาย</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>ถนน</th>
                    <th>ผู้สำรวจ</th>
                </tr>
			<?php
				$q="select * from rec1";
				$result=$mysqli->query($q);
				mysql_query("SET NAMES UTF8");

				//if(!$result){
				//	echo "Select failed. Error: ".$mysqli->error ;
				//	break;
				//}
			?>


			<!--	<td><input type='checkbox' <? if ($row['DISABLE'])	 echo "CHECKED"; echo " disabled></td>";?>
				<td><a href="edit_user.php?userid=<?=$row['USER_ID']?>"><img src="images/Modify.png" width="24" height="24"></a></td>
				<td><a href='del_user.php?userid=<?=$row['USER_ID']?>'> <img src="images/Delete.png" width="24" height="24"></a></td>
			</tr><-->
			<?php ?>

                 <tr>
                    <td><name="geography">
											<?php
												$strSQL = "SELECT geography FROM rec1";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["geography"];?>">
														<?php echo $objResuut["geography"];?>
														</option>

														<?php
													}
											?>
										</td>

                    <td><name="province" required="required">

											<?php
												$strSQL = "SELECT province FROM rec1";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["province"];?>">
														<?php echo $objResuut["province"];?>
														</option>

														<?php
													}
											?>
										</td>

									<td><name="exchange">
												<?php
													$strSQL = "SELECT exchange FROM rec1";
													mysql_query("SET NAMES UTF8");

													$objQuery = mysql_query($strSQL);
													while($objResuut = mysql_fetch_array($objQuery))
													{
														?>
															<option value="<?php echo $objResuut["exchange"];?>">
															<?php echo $objResuut["exchange"];?>
															</option>

															<?php
														}
												?>
										</td>

                    <td><name="latitude">
											<?php
												$strSQL = "SELECT latitude FROM rec1";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["latitude"];?>">
														<?php echo $objResuut["latitude"];?>
														</option>

														<?php
													}
											?>
										</td>

											<td><name="longitude">
												<?php
													$strSQL = "SELECT longitude FROM rec1";
													mysql_query("SET NAMES UTF8");

													$objQuery = mysql_query($strSQL);
													while($objResuut = mysql_fetch_array($objQuery))
													{
														?>
															<option value="<?php echo $objResuut["longitude"];?>">
															<?php echo $objResuut["longitude"];?>
															</option>

															<?php
														}
												?>
											</td>


                    <td><name="streetName">
											<?php
												$strSQL = "SELECT streetName FROM rec1";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["streetName"];?>">
														<?php echo $objResuut["streetName"];?>
														</option>

														<?php
													}
											?>
										</td>

                    <td><name="surveyBy">
											<?php
												$strSQL = "SELECT surveyBy FROM rec1";
												mysql_query("SET NAMES UTF8");

												$objQuery = mysql_query($strSQL);
												while($objResuut = mysql_fetch_array($objQuery))
												{
													?>
														<option value="<?php echo $objResuut["surveyBy"];?>">
														<?php echo $objResuut["surveyBy"];?>
														</option>

														<?php
													}
											?>
										</td>


										
                </tr>
            </table>
		</div> <!-- end div_content -->

	</div> <!-- end div_main -->

	<div id="div_footer">

	</div>

</div>
</body>
</html>
