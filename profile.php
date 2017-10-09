<?php
require 'connect.php';
session_start();
$user=$_SESSION['user'];
$pass=$_SESSION["pass"];

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
$sql2="SELECT * FROM user WHERE Uname='$user'";
$res2=mysqli_query($link,$sql);
$ser='';
while($row=mysqli_fetch_array($res2)){
  $ser=$row['paths'];
}
 include"Qheader.php";?>
 <title>قدّها: ملف المستخدم</title>
            <div id="page-inner">
			
                <div class="row">
                 
                    <div class="col-md-2 col-md-offset-5">
                      <!-- -->
            <div class="panel-body">
              <div class="row">
                 <div class="user-image col-md-12 ">
                <img src=<?php echo $ser;?> alt="user avatar" title="user avatar" class="img-circle img-responsive ">
				<center><p> 
		  
					 <?php
        $sql="SELECT * FROM user Where Uname='$user'";
        $res=mysqli_query($link,$sql);
       
	   while ($row=mysqli_fetch_array($res)){
       
	   echo $row['Uname'];
        }
 
            ?>
			</p>
		 
		<p>	<?php $sql="SELECT * FROM user Where Uname='$user'";
        $res=mysqli_query($link,$sql);
       
	   while ($row=mysqli_fetch_array($res)){
       
	   echo $row['Upio'];
        }
 
            ?>
			</p></center>
				
				
            </div>
			
            <div class="user-info-block">
                <div class="user-heading">
                    <h3 style="font-size:16px; font-family:Droid Arabic Naskh,Roboto;"></h3>
                    <span class="help-block"></span>
                    <p style="font-size:16px; font-family:Droid Arabic Naskh,Roboto;"></p>
					 
                </div>
            </div>
          
                <!-- End Bio-->
				
              </div><!-- End row -->
            </div>
          </div>
        </div>
        <div class="row">
            <div class="btn-group-wrap btn-group col-md-offset-5"><!-- col-md-9 col-lg-9 ol-xs-120 col-sm-600 col-md-61-->
<button type="button" class="btn btn-success btn-circle " data-toggle="modal" data-target="#myModal" data-toggle="tooltip" title="تعديل كلمة المرور">
                 <i class="fa fa-key extraClass"></i></button >
                    <!-- Password PopUp Window -->
                                        <div class="modal fade" id="myModal"  role="dialog">
                                             <div class="modal-dialog">
                                               <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title text-center" style="font-family:Lalezar;">تعديل كلمة المرور</h4>
                                                    </div>
                                      <div class="modal-body">
 
                                               <!--  change password form -->
                                          <form role="form" method="post"  action="changpass.php" >
                                                     <div class="form-group">
                                   <label for="username" style="font-size:16px; font-family:Droid Arabic Naskh;"> كلمة المرور القديمة</label><br />
                                     <input type="Password"  name="pass" class="form-control" placeholder="**********" ><br />
                                  <label for="password" style="font-size:16px; font-family:Droid Arabic Naskh;">كلمة المرور الجديدة </label><br /><!-- line break -->
                                     <input type="password"  name="pass2" class="form-control" placeholder="**********"><br>
                                     </div> 
 
                                     <input  type="submit" name="submit" class="btn btn-info" value="تحديث" style="font-family:Lalezar;">
                                         </form>
                                           <!--  End change password form -->
 
                                      </div>

                                                <div class="modal-footer">
                                            <!--Buttons-->
                               <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family:Lalezar;">إغلاق</button>
                                     
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <!-- End Password PopUp Window -->
                 <button type="button" class="btn btn-warning btn-circle"  data-toggle="modal" data-target="#myModal3" data-toggle="tooltip" title="تعديل وصف الملف">
                    <i class="fa fa-pencil extraClass" ></i></button >
                                            <!-- Bio PopUp Window -->
											
                                           <div class="modal fade" id="myModal3" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                            <div class="modal-content">
                                                 <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel" style="font-family:Lalezar;">تعديل وصف الملف</h4>
                                                 </div>
                                           <div class="modal-body">
                                <form role="form" method="post"  action="self.php" >
                                <div class="form-group">
                                            <label style="font-size:16px; font-family:Droid Arabic Naskh;">صف نفسك</label>
                                            <textarea class="form-control" rows="3" name="self" style="font-family:Droid Arabic Naskh,Roboto;"></textarea>
                              <br><br>
                                      </div> 
                                      <input type="submit" name="submit" class="btn btn-info" value="تحديث"  style="font-family:Lalezar;"  >
                           </form>
                                           </div>
                              <div class="modal-footer">
                                 <!--Buttons-->
                               <button type="button" class="btn btn-default" data-dismiss="modal"  style="font-family:Lalezar;" >إغلاق</button>
                                     
                             </div>
                                            </div>
                                   </div>
                              </div>
                              <!-- End Bio PopUp Window -->
					
                              <!-- popup avatar-->
                   <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#myModal2" data-toggle="tooltip" title="تعديل صورة الملف">
                    <i class="glyphicon glyphicon-user extraClass" ></i></button >
                                                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                         <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title text-center" id="myModalLabel" style="font-family:Lalezar;">تعديل صورة العرض</h4>
                                        </div>
                                    <div class="modal-body">
                                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                        <form method="POST" enctype="multipart/form-data" action="upload.php">
                                                 <input class="form-control" type="file" name="fil">
                                                 <input type="submit" name="subimg" class="btn btn-info" value="تحديث">
                                                 </form>
                                   </div>
                               <div class="modal-footer">
                                   <!--Buttons-->
                               <button type="button" class="btn btn-default" data-dismiss="modal"style="font-family:Lalezar;" >إغلاق</button>
                                    
                               </div>
                                  </div>
                               </div>
                                          </div><!--End popup avatar    tab-right-->
                  <button type="button" class="btn btn-primary btn-lg btn-circle " data-toggle="modal" data-target="#myModal15" data-toggle="tooltip" title="إنشاء هدف جديد">
          <i class="fa fa-plus-circle extraClass" aria-hidden="true"></i></button>
     
    <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel" style="font-family:Lalezar;">هدف جديد</h4>
                </div>
                <div class="modal-body wizard-content">
                    <div class="wizard-step">
                         <br><p align="center" style="font-family:Droid Arabic Naskh;">أخيراً قررت إنك تصير قدّها وتدخل التحدي عشان تحقق هدفك <br>
                          حط اسم الهدف اللي تبغى تحققوا في الخانة اللي تحت هنا </p><br>
                        <form role="form" method="post" action="goal.php" >
                           <div class="form-group">
                    <input type="text"  name="Gname" class="form-control" placeholder="الحصول على 100 في المعدل "  style="font-family:Droid Arabic Naskh,Roboto;" require><br>
                           </div>
                        
                    </div>
                    <div class="wizard-step">
                          <br><p align="center" style="font-family:Droid Arabic Naskh,Roboto;">اختار أحد المجالات اللي ينتمي إليه هدفك <br></p>
                       <div class="container">
    
       <div class="form-group form cf">
      <section class="plan cf" require>
        <input type="radio" name="radio1" id="sport" value="sport"><label class="label label-default four col " for="sport"><i class="fa fa-futbol-o"></i><br>رياضي</label>
        <input type="radio" name="radio1" id="edu" value="edu"><label class="label label-default four col" for="edu"><i class="fa fa-graduation-cap"></i><br>تعليمي</label>
        <input type="radio" name="radio1" id="fun" value="fun"><label class="label label-default four col" for="fun"><i class="fa fa-gamepad"></i><br>ترفيهي</label>
        <input type="radio" name="radio1" id="soc" value="soc"><label class="label label-default four col" for="soc"><i class="fa fa-users"></i><br>اجتماعي</label>
        <input type="radio" name="radio1" id="reg" value="reg" ><label class="label label-default four col" for="reg"><i class="fa fa-moon-o"></i><br>ديني</label>
        <input type="radio" name="radio1" id="other" value="other" ><label class="label label-default four col" for="other"><i class="fa fa-steam"></i><br>أخرى</label>
      </section>  
    </div>
    
  </div>
                    </div>
                    <div class="wizard-step">
                      <br><p align="center" style="font-family:Droid Arabic Naskh,Roboto;">اختار حالة العرض لهدفك إذا كنت تبغى الناس تشوف <br>
                      هدفك في صفحة الأهداف فاختار الحالة عام</p>
                          <div class="container">
                         
                           <div class="form-group form cf">
              <section class="plan cf" require>
        <input type="radio" name="radio2" id="public" value="public"><label class="label label-default four col " for="public"><i class="fa fa-unlock-alt" aria-hidden="true"></i><br>عام</label>
        <input type="radio" name="radio2" id="private" value="private"><label class="label label-default four col" for="private" ><i class="fa fa-lock" aria-hidden="true"></i><br>خاص</label>
      </section>  
                           </div>
                         
                    </div>
                    </div>
                    <div class="wizard-step">
                      <br><p align="center" style="font-family:Droid Arabic Naskh,Roboto;"> اهداف الطموحين لا تستحق الانتظار  <br>
                   ابدأ هدفك اليوم ولاتنسى تحديد تاريخ تحقيقه لنبدأ العد سويًّا </p>
                        
                          <div class="form-group ">
                           <label class="control-label col-sm-2 requiredField" for="date">
                                <span class="asteriskField">
                                </span>
                          </label>
                         <div class="col-sm-10">
                             <div class="input-group">
                      <div class="input-group-addon">
                              <i class="fa fa-calendar"></i></div>
                          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" require />
                            </div><br><br><br>
                            <div class="input-group">
                      <div class="input-group-addon">
                             <i class="fa fa-calendar"></i></div>
                          <input class="form-control" id="date2" name="date2" placeholder="MM/DD/YYYY" type="text" require /><br>
						  <br>
                            </div>
                       </div>
                     </div>
                         
                    </div>
                     <div class="wizard-step">
                      <br><p align="center" style="font-family:Droid Arabic Naskh,Roboto;">آخر خطوة<br> لو عندك أي ملاحظات تحطها في هدفك سجلها عندك هنا </p>
                          <div class="container">
                        
                           <div class="form-group">
                               <textarea class="form-control" rows="5" name="com"  cols="20" id="comment" require ></textarea> <br>  
                               <input type="submit" class="btn btn-info wizard-button-finish" value="إنشاء هدفي"  style="font-family:Lalezar;">   
                           </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="modal-footer"><!--wizard-buttons-->
                    <!-- The wizard button will be inserted here. -->
                       
                      <button type="button" class="btn btn-info wizard-button-next" style="font-family:Lalezar;" >التالي</button>
					 
                      <button type="button" class="btn btn-default wizard-button-back"  style="font-family:Lalezar;">السابق</button>
                </div>
            </div>
        </div>
    </div>
            </div>
          </div><!--End row-->
            <hr />
            <div class='text-center'>
           
            </div>
           <div class="row">
                        <div class="col-xs-120 6 col-md-66  col-md-offset-3"><!--col-md-66 col-md-offset-3-->
 
                            <!--tabs square start-->
                            <section class="icon-box-tabs ">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-15" aria-expanded="true" style="font-family:Lalezar; font-size:16px;">
                                             أهدافي  <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#tab-16" aria-expanded="false" style="font-family:Lalezar; font-size:16px;">
                                            مستنداتي <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div id="tab-15" class="tab-pane active">
                                            <div class="heading-title-alt">
                                               <div class="table-responsive">
                                              <div class="table-responsive">
											  
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="table" style="color:#696969; font-family:Lalezar;">
                                            <th class="text-center">حذف الهدف</th>
											 <th class="text-center">ملاحظات</th>
                                            <th class="text-center">عدّاد الهدف</th>
                                            <th class="text-center">نهايته</th>
                                            <th class="text-center">بدايته</th>
                                            <th class="text-center">حالة هدفي </th>
                                            <th class="text-center">اسم هدفي</th>
                                            <th class="text-center">نوع هدفي </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $st='';
                                          $sql="SELECT * FROM goal WHERE U_name='$user'";
                                          $res=mysqli_query($link,$sql);
                                          while($row=mysqli_fetch_array($res)){
                                            if ($row['G_status']=='private'){
                                              $st='خاص';
                                            }
                                            else{
                                              $st='عام';
                                            }
                                            echo'
                                               <tr class="defult odd gradeX"style="font-family:Droid Arabic Naskh ,Roboto; font-size:14px;">
                                                 <td class="text-center"><a href="del.php?id_g='.$row['Gid'].'"class="btn btn-danger" >حذف</td>
												 <td class="text-center">'.$row['Gnote'].'</td>
                                                 <td class="text-center"><p class="rem'.$row['Gid'].'"></p></td>
                                                 <td class="text-center">'.$row['Eduration'].'</td>
                                                 <td class="text-center">'.$row['Sduration'].'</td>
                                                 <td class="text-center">'.$st.'</td>
                                                 <td class="text-center"><a href="taskpage.php?id='.$row['Gid'].'">'.$row['Gname'].'</a></td>
                                                 <td class="text-center">'.$row['Gscoope'].'</td>
												 
 
 
 
                                               </tr>'; ?>
 <script>
    $(document).ready(function(){
        <?php if((strtotime($row['Eduration'])-time())>0){ ?>
        $(".rem<?php echo$row['Gid']; ?>").countdown("<?php echo$row['Eduration']; ?>", function(event) {
            $(this).text(
              event.strftime('%D days %H:%M:%S')
            );
        });
        <?php }else{ ?>
        $(".rem<?php echo$row['Gid']; ?>").text("EXPIRED");
        <?php } ?>
    });
</script>

<?php
 
 
                                             
                                          }
 
 
                                         ?>
                                         <!-- Display the countdown timer in an element -->
                                          
                                    </tbody>
                                </table>
                            </div>
                            </div>
                                            </div>
                                        </div>
                                          <div id="tab-16" class="tab-pane">
                                            <div class="heading-title-alt">
 
                                              <div class="col-md-12">
                                               
                                <div class="form-group">
                                   <div class="form-group files">
                                   <form method="POST" action="upload.php" enctype="multipart/form-data">
                                       <input type="file" class="form-control" name='files'>
                                      <input type="submit" class="btn btn-primary" name='submit_image' value="ارفع ملفي"/>
                                   </form>
                                       
                                    </div>
                                    
                                      </div> 
                        
                                  </div>
                                  <div class="row" id="image_preview"></div>
                        </div>
 
 
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </section>
                            <!--tabs square end-->
                        </div>
                    </div>
                </div><!-- /. page inner  -->
 
 
       <!-- DATA TABLE SCRIPTS -->
     <script src="assets/js/bootstrap.min.js"></script>
    <!--<script src="//code.jquery.com/jquery-2.1.4.js"></script>-->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!--<script src="assets/js/jquery.min.js"></script>-->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/easyWizard.js"></script> 
    <script>
        $(document).on("ready", function(){
            $("#myModal15").wizard({
                onfinish:function(){
                    console.log("Hola mundo");
                }
            });
        });
    </script>
    <script>
    // Set the date we're counting down to
    /*var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();
 
    // Update the count down every 1 second
    var x = setInterval(function() {
 
      // Get todays date and time
      var now = new Date().getTime();
 
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
 
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 
      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
 
      // If the count down is finished, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);*/
     
    </script>
    <!--add date -->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
     
<script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script>
    $(document).ready(function(){
		
		var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
			setDate: today,
			autoclose: true
        });
		date_input.datepicker('update');
        var date2_input=$('input[name="date2"]'); //our date input has the name "date2"
        date2_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
        //$('.clock123').countdown('2012/20/20 12:34:56');
        /*$(".clock123").countdown("10/23/2017", function(event) {
            $(this).text(
              event.strftime('%D days %H:%M:%S')
            );
        });*/
    });
</script><script>
    $(document).ready(function(){
                $(".rem26").countdown("08/29/2017", function(event) {
            $(this).text(
              event.strftime('%D days %H:%M:%S')
            );
        });
            });
</script>
</body>
</html>