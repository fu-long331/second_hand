
<?php
$server="localhost";
$db_username="root";
$db_password="C107151125";
$con = mysql_connect($server,$db_username,$db_password);
if(!$con){
die("can't connect".mysql_error());/
}
mysql_select_db('test',$con);
?>