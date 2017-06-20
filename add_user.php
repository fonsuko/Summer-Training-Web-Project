<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ส่วนปฏิบัติการท่อร้อยสาย </title>
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
			<li><a href="add_user.php">ระบุข้อมูลท่อร้อยสาย</a></li>
			<li><a href="user.php">ข้อมูลท่อร้อยสาย</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>
	</div>

	<div id="div_main">
		<div id="div_left">

		</div>
		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->

			<form action="user.php" method="post">
					<h2>ข้อมูลการวางท่อ</h2>
					<label>ภูมิภาค</label>
					<select name="geography">
						<?php
							$strSQL = "SELECT * FROM geography";
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


					<label>จังหวัด</label>
					<select name="province">

						<?php
							$strSQL = "SELECT * FROM province";
							$objQuery = mysql_query($strSQL);
							while($objResuut = mysql_fetch_array($objQuery))
							{
								?>
									<option value="<?php echo $objResuut["PROVINCE_ID"];?>">
									<?php echo $objResuut["PROVINCE_NAME"];?>
									</option>

									<?php
								}
						?>
					</select>



					<label>จุดติดตั้ง</label>
					<input type="text" name="road">

					<label>Last name</label>
					<input type="text" name="lastname">

					<label>Gender</label>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">
					Female
					<div></div>

					<label>Email</label>
					<input type="text" name="email">

					<h2> Account Profile</h2>
					<label>Username</label>
					<input type="text" name="username">

					<label>Password</label>
					<input type="password" name="passwd">

					<label>Confirmed password</label>
					<input type="password" name="cpasswd">

					<label>User group</label>
					<!--select name="usergroup">
						<option value="1">Admin</option>
						<option value="2">Staff</option>
						<option value="3">Member</option>
					</select-->

					<label>Disabled</label>
					<input type="checkbox" name="disabled" value="1">

					<div class="center">
						<input type="submit" value="Submit" >
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
