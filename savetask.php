<?php


require('connect.php');
session_start();

//if (isset($_POST['submit'])){


         $gi=$_SESSION['gid'];
        $gname = $_POST["Gname"];
        $sdate = $_POST["Sdate"];
        $edate = $_POST["Edate"];
		$comment= $_POST["comment"];
         
        $sql = "INSERT INTO task(Tname,Tnote,Sduration,Eduration,goal_id)VALUES('$gname','$comment','$sdate','$edate','$gi')";
if(mysqli_query($link,"INSERT INTO task(Tname,Tnote,Sduration,Eduration,goal_id)VALUES('$gname','$comment','$sdate','$edate','$gi')")){

header("location:taskpage.php?id=".$gi.""	);
//}
//else{
//	echo 'error';//mysqli_error();
//	echo $gi;
//	echo $gname;
	//echo $sdate;
	//echo $edate;
	//echo $comment;
//}
	   
}
else{
	echo "error2";
}
     



?>