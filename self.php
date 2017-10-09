<?php 
require("connect.php");
session_start();
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$self=$_POST['self'];
$msg='';

	
	$sql="SELECT * FROM user WHERE Uname='$user' and Upass='$pass'";
$res=mysqli_query($link,$sql);
if (mysqli_num_rows($res)==1){
	$sql2="UPDATE user SET Upio='$self' WHERE Uname='$user'";
	if (mysqli_query($link,$sql2)){
         $msg="Done";
		header('location:profile.php?msg='.$msg.'');
	}
	else{
		echo "ERROR 1";
	}
}
else{
	echo "ERORR2 ".$user.$pass;
}







?>