<?php
    require_once("connect.php");
    session_start();
    if (isset($_SESSION['user'])&& isset($_SESSION['pass'])==true){

$sql="SELECT * FROM user WHERE Uname='$_SESSION[user]'AND Upass='$_SESSION[pass]'";
if ($res=mysqli_query($link,$sql)){
  if (mysqli_num_rows($res)==1){

}
else{
  header('location:Qaddhahome.php');
}
}
else{
   header('location:Qaddhahome.php');
}

}
else{
  header('location:Qaddhahome.php');
}
    $sql = "SELECT * FROM goal WHERE Geval >= '90'";
    $res = mysqli_query($link, $sql);
    $numz = mysqli_num_rows($res);
    $usrz = array();
    if($numz >= 1){
        while($row = mysqli_fetch_assoc($res)){
            $Gid = $row["Gid"];
            $Guser = $row["U_name"];
          if(!in_array($Guser, $usrz)){
            $sqlz = "SELECT * FROM task WHERE goal_id='$Gid'";
            $rez = mysqli_query($link, $sqlz);
            $numu = mysqli_num_rows($rez);
            if($numu >= 5){
                array_push($usrz, $Guser);
                $usrz[$Guser] = "https://f4.bcbits.com/img/0003522315_10.jpg";
            }
          }
        }
    }
    ?>
<html>
<head>
   <title>قدّها : المتميزين</title>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <link href="assets/css/na.css" rel="stylesheet" />
     <link href="assets/css/case.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/css/easyWizard.css">
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
<body>
        <div id="page-inner">
             <div class="panel-body">
 
        <div class="container text-center">
    <div class="well-sm">
      <p align="center"><a href="QaddhaHome.php">الذهاب إلى الموقع <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
	  <p align="center"><a href="timeline.php">Timeline <i class="fa fa-arrow-left" aria-hidden="true"></i></a></p>
    </div>
    <!--<div class="well-sm">
       <p align="center"> <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
    </div>
    <div class="well-sm"><p align="center"> <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
    </div>-->
 
<div class="row ">
  <div class="col-sm-12 ">
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
 
      <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/img/how.jpg" alt="Image">
          <div class="carousel-caption">
            <!--<h3>إنت قدّها</h3>
            <p>كونك وصلت هنا</p>-->
          </div>      
        </div>
 
        <div class="item">
          <img src="assets/img/trophy1.jpg" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>
 
          <div class="item">
          <img src="assets/img/wizdom.jpg" alt="Image">
          <div class="carousel-caption">
          </div>      
        </div>
      </div>
 
      <!-- Left and right controls -->
      <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
      <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
    </div>
 
  </div>
  
</div>
<hr>
</div>
 
<div class="container  text-center">
  <h3>متميزي قدّها</h3>
  <br>
    <div class="row">
    <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                  
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                </ol>
                  
                <!-- Carousel items -->
                <div class="carousel-inner">
                <div class="item active">
                  <div class="row">
                    <?php
                       /* if(count($usrz) > 0){
                          
                            foreach($usrz as $user => $img){
                                echo '<div class="col-sm-22"><a href="#" class="thumbnail"> <img src="'.$img.'" class="img-responsive" style="width:100%" alt="Image">
                       <p>'.$user.'</p></a></div>';
                            }
                        }
                        */
                    ?>
                    <?php 

                       $sql="SELECT * FROM goal WHERE Geval >=90 AND G_status='public'";
                       $res=mysqli_query($link,$sql);
                      if (mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
                          $name=$row['U_name'];
                           $sql2="SELECT * FROM user WHERE Uname='$name'";
                           $res2=mysqli_query($link,$sql2);
                           while ($itwm=mysqli_fetch_assoc($res2)){
                            echo '
                                <div class="col-sm-22"> <img src='.$itwm['paths'].' class="img-responsive" style="width:100%" alt="Image">
                                '.$itwm['Uname'].'
                                </div>

                            ';
                           }
                        }
                      }
                      else{
                        echo 'nothing';
                      }

                    ?>
                   
                  </div><!--.row-->
                </div><!--.item-->
                  
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control" style=" margin-top: 60px;">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control" style=" margin-top: 60px;">›</a>
                </div><!--.Carousel-->
                  
    </div>
  </div>
</div>
<br>
 
         </div>
       </div>
        <footer class="container-fluid text-center">
          <?php include"footer.php";?>
</footer>
<script type="text/javascript">
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>
</body>
</html>