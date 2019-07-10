<?php
$server='localhost';
$user='root';
$password='';
$dbname='std_mng';
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn){
	die("not connected".mysqli_connect_error());
}
?>