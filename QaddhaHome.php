<?php
session_start();

$log = false;
if(isset($_SESSION["uid"]) && isset($_SESSION["pass"])){
	$log = true;
}
include"header.php";
if(isset($_GET["logout"])){
	unset($_SESSION["uid"]); unset($_SESSION["pass"]);unset($_SESSION["logged"]);
	echo("<script>window.location.replace('QaddhaHome.php' );</script>");
}
?>
   <title>قدّها: الرئيسية</title>
        <section class="featured">
            <div class="container "> 
                <div class="row mar-bot40">
                    <div class="col-lg-12 col-md-offset-3">
                        <div class="align-center">
                            <img src="assets/img/qaddhawhite.png" high="120" width="200">
                            <h2 class="slogan" style="font-family:Lalezar;">مرحبا بكم في قدّها</h2>
                            <p style="font-family:Droid Arabic Naskh;"></p>
                            <a class="btn btn-default btn-round-lg btn-lg" style="font-family:Lalezar;" href="Login.php">
                                    تسجيل الدخول
                            </a>
                            <a class="btn btn-default btn-round-lg btn-lg" style="font-family:Lalezar;" href="regestration.php">
                                   حساب جديد
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
         
        <!-- services -->
        <section id="section-services" class="section pad-bot30 bg-white">
        <div class="container"> 
         
            <div class="row mar-bot40">
                <div class="col-lg-4" >
                    <div class="align-center">
                        <i class="fa fa-star-half-o fa-5x mar-bot20"></i>
                        <h4  style="font-family:Lalezar;font-size:28px;">تقييم هدفك</h4>
                        <p   style="font-family:Droid Arabic Naskh; font-size:16px;">حددت هدفك وأنجزته سيقوم <br>
                            النظام تلقائيا بتقييم هدفك
                        </p>
                    </div>
                </div>
                     
                <div class="col-lg-4" >
                    <div class="align-center">
                        <i class="fa fa-pencil-square-o fa-5x mar-bot20"></i>
                        <h4  style="font-family:Lalezar; font-size:28px;">دوّن مهامك</h4>
                        <p style="font-family:Droid Arabic Naskh; font-size:16px;"> ولأن المهام هي من تساعدك <br>
                            في تحقيق هدفك يمكنك أن تنشئ أكثر من مهمة في الهدف الواحد
                        </p>
                    </div>
                </div>
             
                <div class="col-lg-4" >
                    <div class="align-center">
                        <i class="fa fa-bullseye fa-5x mar-bot20"></i>
                        <h4 style="font-family:Lalezar; font-size:28px;">أنشئ هدفك</h4>
                        <p style="font-family:Droid Arabic Naskh; font-size:16px;">لكي تبدا في تحقيق هدفك <br>
                            كل ما عليك فعله هو القيام بتعبئة بيانات نموذج إنشاء هدف جديد 
                        </p>
                    </div>
                </div>
             
            </div>    
 
        </div>
        </section>
             
        <!-- spacer section:testimonial -->
        <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">             
                    <div class="col-lg-12">
                            <div class="align-center">
                                <div class="testimonial pad-top40 pad-bot40 clearfix">
                                    <h5 class="text-bold"style="font-family:Droid Arabic Naskh; font-size:24px;">
                                        "يكمن المجد في محاولة الشخص الوصول إلى هدف وليس عند الوصول إليه"
                                    </h5>
                                    <br/>
                                    <span class="author text-bold" style="font-family:Droid Arabic Naskh; font-size:24px;">>&mdash; غاندي </span>
                                </div>
 
                            </div>
                    </div>
                 
            </div>    
        </div>    
        </section>
             
        <!-- about -->
        <section id="section-about" class="section appear clearfix">
        <div class="container">
 
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-lg-12">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp" style="font-family:Lalezar;">عن قدّها</h2>
                        </div>
                        <p style="font-family:Droid Arabic Naskh; font-size:18px;">
                                موقع يساعد الشخص على وضع هدف شخصي يرغب بالوصول إليه ويرتبط بمدة معينه عن طريق <br>
                                تقسيمه إلى مهام صغيرة مع متابعة الهدف وإنجازاته وعرض نسبة تحقيق العدف بعد إتمامه
                            </p>  
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp" style="font-family:Lalezar;">فريق قدّها</h2>
                        </div>
                    </div>
                </div>
 
                    <div class="row align-center mar-bot40">
                        <div class="col-md-3">
                            <div class="team-member">
                                <figure class="member-photo"><img src="assets/img/team/Ai.jpg" alt="Aisha" /></figure>
                                <div class="team-detail">
                                    <h4 style="font-family:Droid Arabic Naskh;">عائشة المغربي</h4>
                                    <span class="text-bold">Backend Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <figure class="member-photo"><img src="assets/img/team/Dhaffaf.jpg" alt="Dhaffaf K." /></figure>
                                <div class="team-detail">
                                    <h4 style="font-family:Droid Arabic Naskh;">ضفاف كمفر</h4>
                                    <span class="text-bold">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <figure class="member-photo"><img src="assets/img/team/Za.jpg" alt="Zinab" /></figure>
                                <div class="team-detail">
                                <h4 style="font-family:Droid Arabic Naskh;">زينب الشنقيطي</h4>
                                    <span class="text-bold">Frontend Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-member">
                                <figure class="member-photo"><img src="assets/img/team/jana.jpg" alt="jana" /></figure>
                                <div class="team-detail">
                                <h4 style="font-family:Droid Arabic Naskh;">جنى الغامدي</h4>
                                    <span class="text-bold">Backend Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                         
        </div>
        </section>
        <!-- /about -->
         
        <!-- spacer section:stats -->
        <section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
            <div class="container">
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white"></blockquote>
                <p class="color-white"></p>
            </div>
            </div>    
        </section>
         
        <!-- section works -->
        <section id="section-help" class="section appear clearfix">
            <div class="container">
                 
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-lg-12">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp"  style="font-family:Lalezar;">حائط قدّها</h2>
                        </div>
                    </div>
                </div>
                     
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
 
                              <li ><a href="special.php" class="btn-theme btn-small" data-filter=".star" style="font-family:Droid Arabic Naskh;">متميزي قدّها</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography" style="font-family:Droid Arabic Naskh;">ماذا قالوا عنّا</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".video" style="font-family:Droid Arabic Naskh;">فيديو تعريفي</a></li>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*" style="font-family:Droid Arabic Naskh;">الكل</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
                               
                               <!-- <article class="col-md-4 isotopeItem webdesign">
                                    <div class="portfolio-item">
                                        <img src="assets/img/portfolio/img1.jpg" alt="" />
                                         <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="#">Portfolio name</a></h5>
                                                <a href="assets/assets/img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                             </div>                                          
                                         </div>
                                    </div>
                                </article>-->
 
                                <article class="col-md-4 isotopeItem photography">
                                    <div class="portfolio-item">
                                        <img src="assets/img/portfolio/rehab.jpg" alt="rehab" />
                                         <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5 style="font-family:Droid Arabic Naskh;font-size:24px; color:white;">رحاب الزهراني</a></h5>
                                                <a href="assets/img/portfolio/rehab.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                             </div>                                          
                                         </div>
                                    </div>
                                </article>
 
                                <article class="col-md-4 isotopeItem video">
                                    <div class="portfolio-item">
                                        <div>
                                          <iframe width="270" height="196"  src="//www.youtube.com/embed/2mooMsMAMCk"></iframe>
                                       </div>
                                    </div>
                                </article>
 
                                 <article class="col-md-4 isotopeItem star">
                                    <div class="portfolio-item">
                                        <img src="assets/img/portfolio/star.jpg" alt="special" />
                                         <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5 style="font-family:Droid Arabic Naskh;font-size:24px;"><a href="special.php">متميزي قدّها</a></h5><!--Lalezar-->
                                                <a href="assets/img/portfolio/star.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                                             </div>                                          
                                         </div>
                                    </div>
                                </article>
 
                                
                                </div>
                                         
                            </div>
                                      
 
                            </div>
                        </div>
                 
            </div>
        </section>
        <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5"> 
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white"></blockquote>
                <p class="color-white"></p>
            </div>
        </section>
 
        <!-- contact -->
        <section id="section-star" class="section appear clearfix">
            <div class="container">
                 
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-lg-12">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp" style="font-family:Lalezar;">متميزي قدّها</h2>
                            <p style="font-family:Droid Arabic Naskh; font-size:16px;">التميز هو ما نسعى إليه جميعا، وأنت قادر على الوصول إليه فقط حقق هدفك  <br>
                                بنسبة 90 % فما فوق وسوف يعرض هدفك في صفحة المميزين
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                         
                    </div>
                    <!-- ./span12 -->
                </div>
                 
            </div>
        </section>
        <!-- section star -->
        <section id="section-contact" class="clearfix">
            
        </section>
         
    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.instagram.com/qaddha/" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/qddaha" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/qaddha" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="mailto:qddaha@gmail.com" class="icoGoogle" title="Google +"><i class="fa fa-envelope-o"></i></a></li>
                        <li><a href="www.linkedin.com/in/qaddha-web" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>             
                </div>
            </div>
 
            <div class="row align-center copyright">
                    <div class="col-sm-12"><p style="color:white; font-family:Droid Arabic Naskh;">الحقوق محفوظة لدى قدّها 1438هـ &copy; </p>
                        <div class="credits">
                           
                        </div>
                    </div>
            </div>
        </div>
 
    </section>
     
    <?php include"footer1.php";?>
</body>
</html>