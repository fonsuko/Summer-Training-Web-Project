<? //in my MAC; be careful cuz it doesn't has password
$mysqli = new mysqli('localhost','root','','');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>
