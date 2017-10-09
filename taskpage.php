<?php 
session_start();
include("Qheader.php");
require_once('connect.php');
$user=$_SESSION['user'];
/*$pass=$_SESSION["pass"];

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
*/
//$users=$_SESSION['user'];
 /*$_SESSION['gid'] = $_GET["id"];
if (isset($_POST["submit"])){
         $gi=$goal;
        $gname = $_POST["Gname"];
        $sdate = $_POST["Sdate"];
        $edate = $_POST["Edate"];
         
        $sql = "INSERT INTO task (Tname, Tnote, Sdoration, Eduration, Tstatus, goal_id) VALUES ('$gname', '$comment', '$sdate', '$edate', '0', '$gi')";
        mysqli_query($link, $sql);
        echo "<script> location.replace('taskpage.php'); </script>";
}
if(isset($_POST["end"]) && isset($_SESSION["goal"])){
    if(is_array($_POST["end"])){
        $zend = key($_POST["end"]);
        $sql = "UPDATE task SET Tstatus='1' WHERE Tid='$zend' AND Tstatus='0'";
        mysqli_query($link, $sql);
        echo "<script> location.replace('taskpage.php'); </script>";
    }
}else if(isset($_POST["del"]) && isset($_SESSION["goal"])){
    if(is_array($_POST["del"])){
        $zend = key($_POST["del"]);
        $sql = "DELETE FROM task WHERE Tid='$zend'";
        mysqli_query($link, $sql);
        echo "<script> location.replace('taskpage.php'); </script>";
    }
}
*/
?>
 <title>قدّها: إنشاء مهمة</title>
    
        <div id="page-inner">
             <div class="panel-body">
                 <h2> <?php 

                 $sql="SELECT * FROM goal WHERE Gid='$_GET[id]'";
                 $re=mysqli_query($link,$sql);
                 while($row=mysqli_fetch_array($re)){
                  echo '<div class="text-center">'. $row['Gname'].'</div>';
                 }

                  ?></h2>
                <div class="pull">
                  <a href="timeline.php" class="btn btn-secondary " type="button" >
                     <i class="fa fa-chevron-left"></i>Timeline </a>
                  <a href="profile.php" class="btn btn-secondary " type="button" >
                        إلى أهدافي <i class="fa fa-chevron-right"></i></a>
                </div>
				<br><br>
              
                <div class="row">
               
                     <div class="panel-body">
                                    <div class="tab-content">
                                        <div id="tab-15" class="tab-pane active">
                                            <div class="heading-title-alt">
                                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="active" style="color:#696969; font-family:Lalezar;">
                                            <th class="text-center">عملياتي</th>
                                            <th class="text-center">ملاحظاتي</th>
                                            <th class="text-center">نهايتها</th>
                                            <th class="text-center">بدايتها</th>
                                            <th class="text-center">مهمتي</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
                                       $goal = $_GET["id"];
									   $_SESSION['gid']=$goal;
                     $goal=$_SESSION['gid'];
    $sql = "SELECT * FROM task WHERE goal_id='$goal' AND Tstatus!=1 ";
    $res = mysqli_query($link, $sql);
	while ($row=mysqli_fetch_array($res)){
		
		echo '
		
		<tr class="success"style="color:white; font-family:Droid Arabic Naskh,Roboto; font-size:14px;">
                                            
                                            <td class="text-center"><a href="del.php?id='.$row['Tid'].'" class="btn btn-default-round-md">حذف</a>
                                                                   <a href="end.php?id='.$row['Tid'].'" class="btn btn-success-round-md" >انجاز</a>
                                           										   </td>
											<td class="text-center">'.$row['Tnote'].'</td>
                                            <td class="text-center">'.$row['Eduration'].'</td>
                                            <td class="text-center">'.$row['Sduration'].'</a></td>
                                            <td class="text-center">'.$row['Tname'].'</td>
                                        </tr>
		
		';
	}
									?>
                                      
                                    </tbody>
                                </table>
                            </div>
                                            </div>
                                        </div>
                                          
                                    </div>
 
  <hr><h3 class="text-center">انجاز المهام</h3>
  <?php
$sql="SELECT * FROM task WHERE goal_id='$goal' AND Tstatus=1";
$res=mysqli_query($link,$sql);
$nums=mysqli_num_rows($res);
$sql2="SELECT * FROM task WHERE goal_id='$goal'";
$res2=mysqli_query($link,$sql2);
$numsall=mysqli_num_rows($res2);
if ($numsall==0){

}
else{
  $resu=($nums/$numsall)*100;
if ($resu>=90){
  $sql3="UPDATE goal SET Geval=$resu WHERE U_name='$user'";
  if (mysqli_query($link,$sql3)){

  }
  else{
    echo "the query not work";
  }
}
echo 

'<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$resu.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$resu.'%">
    '.$resu.'% Complete
  </div>
</div>


';
}

   ?>
  
  </div>
 
                <!--add a new task-->
                        <div class="right-corder-container">
                            <button class="right-corder-container-button" type="button" data-backdrop="false" data-toggle="modal" data-target="#myModal8">
                                   <span class="short-text "><i class="fa fa-tasks extraC"></i></span>
                           <span class="long-text">أضف مهمة</span>
                            </button>
                            <div class="modal fade" id="myModal8" role="dialog">
                                             <div class="modal-dialog">
                                               <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">إضافة مهمة جديدة</h4>
                                                    </div>
                                      <div class="modal-body">
                                        <p align="center">بداية كل نجاح خطوة صغيرة وهنا في قدّها<br>
                                            بداية كل هدف مهمة صغيرة <br>
                                            أضف اسم المهمة في الخانة التالية ثم ضع مدة تحقيقها من و إلى</p>
                                          <form role="form" method="post" action='savetask.php'>
                                                     <div class="form-group"><div id="field">            
                                         <input type="text" id="field1" name="Gname" class="form-control" placeholder="تعلّم حروف الهيراغانا" ><br>
                                          <div class="input-group">
                                                     <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                             <input class="form-control" id="date" name="Sdate" placeholder="MM/DD/YYYY" type="date" />
                                         </div><br>
                                                    <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input class="form-control" id="date" name="Edate" placeholder="MM/DD/YYYY" type="date" /></div>
                                             <p align="center">و إذا كان هناك أيت ملاحظات تريد تذكرها <br>
                                                الرجاء إضافتها في الخانة التالية</p>
                                             <textarea class="form-control" rows="5" name="comment"  cols="20" id="comment" ></textarea>       
                                      </div> 
                                         </div>
                                      </div>
                                                <div class="modal-footer">
                                            <!--Buttons-->
                                    <button type="button" class="btn btn-default" data-dismiss="modal" >إغلاق</button>
                                    <input type="submit" id="b1" name="submit" class="btn btn-default btn add-more" value='إضافة' >
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                   </div>
 
 
                       </div>
             </div>
        </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script type="assets/js/dynamic.js"></script>
    <script type="text/javascript">
       $(".right-corder-container-button").hover(function() {
       $(".long-text").addClass("show-long-text");   
        }, function () {
          $(".long-text").removeClass("show-long-text");
        });
    </script>
      <script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        
</body>
</html>