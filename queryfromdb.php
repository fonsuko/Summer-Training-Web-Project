
$host = "localhost"; // ชื่อ host หรือ ip ที่ใช้
$userhost = "root"; // ชื่อ user ที่ใช้ในการล็อกอิน
$passhost = "doesystem"; // password ที่ใช้ในการล็อกอิน
$database = "doesystem"; // ชื่อ Database
$conn = mysql_connect($host,$userhost,$passhost);
if(!$conn){
	echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
}
mysql_query("use $database"); // เลือกฐานข้อมูลที่ใช้
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

//query data

$query = "select * from student";
$data = mysql_query($query);

//ดึงข้อมูลแบบ array
while($show = mysql_fetch_array($data)){
	echo $show[0]." ".$show[1]." ".$show[2]."
";
}

//ดึงข้อมูลแบบ object
while($show = mysql_fetch_object($data)){
	echo $show->id." ".$show->name." ".$show->lastname."
";
}
