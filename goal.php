<?php
require("connect.php");
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$uid = $_SESSION['user'];
$g_nm=$_POST['Gname'];
$g_type=$_POST['radio1'];
$g_pu=$_POST['radio2'];
$g_start=$_POST['date'];
$g_end=$_POST['date2'];
$com=$_POST['com'];

$sql="INSERT INTO goal(Gname,Gnote,Gscoope,Sduration,Eduration,G_status,U_name)VALUES ('$g_nm','$com','$g_type','$g_start','$g_end','$g_pu','$uid')";
echo $sql;
if (mysqli_query($link,$sql)){
header("location:profile.php?msg=Done");
}
else{
	echo "error1";
}




 ?>