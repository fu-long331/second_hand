<?php 
header("Content-Type: text/html; charset=utf8");
$db_link=@mysqli_connect("localhost","root","C107151125") or die("MySQL伺服器連結失敗!<br>");	
$select_db=@mysqli_select_db($db_link,"second") or die("選擇資料庫失敗");
@mysqli_set_charset($db_link,"utf8"); 
if(!isset($_POST['submit'])){
exit("錯誤執行");
}
$name = $_POST['username'];
$password = $_POST['password'];
$school = $_POST['school'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
echo $name."您好";

$sql_str = "select*from `test`";
$reslut = mysqli_query($db_link,$sql_str) or die("SQL語法錯誤");
$sql_str = "INSERT INTO `test` (`ID`, `username`, `password`, `school`, `phone`, `email`)
           VALUES ('', '$name', '$password', '$school', '$phone', '$mail')";
$reslut = mysqli_query($db_link,$sql_str) or die ("無法新增".@mysqli_error());

mysql_close($db_link);
?>
