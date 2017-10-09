<?php
require ("../connect.php");
$msg="";
if (isset($_GET['sub'])){
  $user=$_GET['Uname'];
$pass=$_GET['Upass'];
$pass2=$_GET['password'];
$email=$_GET['email'];

if (preg_match('/[A-Za-z]/', $Upass) && preg_match('/[0-9]/', $Upass))
{
    $result1='Contains at least one letter and one number';
}


if($pass==$pass2){
  $pass=md5($pass);
  $sql="INSERT INTO user (Uname,Upass,Umail,paths) VALUES ('$user','$pass','$email','assets/img/find_user.png')";
  if (mysqli_query($link,$sql)) {
     header("location:profile.php");
  }
  else{
    $msg='user name or password is not true';
  }
}

else{
$msg="Error";
}


}


 ?>
<html>
<head>
   <title>قدّها : حساب جديد</title>
   <link href="assets/css/log.css" rel="stylesheet" />
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
     <link href="assets/css/na.css" rel="stylesheet" />
</head>
<body>
	
  <div class="wrapper">
  <?php echo $msg; ?>
    <form  class="form-signin"> 
         <img src="assets/img/LogoG.png"  width="150" class="center-block "/>
      <input type="text" class="form-control" name="Uname" placeholder="اسم المستخدم" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="Upass" placeholder="كلمة المرور" required=""/>  
      <input type="password" class="form-control" name="password" placeholder="تأكيد كلمة المرور" required=""/> 
      <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required=""/> <br>
      <input type="submit" name="sub" class="btn btn-lg btn-custom btn-block" type="submit" value="إنشاء حساب">
                    <p>لديك بالفعل حساب؟  <a href="login.php">تسجيل الدخول</a></p>
    </form>
  </div>
  
   <footer class="container-fluid text-center">
    <?php include"footer.php";?>
  </footer>

</body>
</html>