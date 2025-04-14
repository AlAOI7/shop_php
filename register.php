
   
<?php include_once('include/header.php');?>
<?php include_once('include/nav.php');?>  

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">الصفحةالرئيسية</a>                    
                    <span></span> تسجيل الدخول
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">انشاء حساب</h3>
                                        </div>                                        
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="text" required="" name="name" placeholder="الاسم">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="البريد الالكتروني">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password"  id="password1" placeholder="كلمة السر">
                                            </div>
                                            <!-- <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Confirm password">
                                            </div> -->
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>انا اوافق على الشروط &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="privacy-policy.php"><i class="fi-rs-book-alt mr-5 text-muted"></i>معلومات عنا</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="signup"  class="btn btn-fill-out btn-block hover-up"  value="Sign Up" name="login"> تسجيل&amp;اشتراك </button>
                                            </div>
                                        </form>                                        
                                        <div class="text-muted text-center">لدي حساب ? <a href="login.php">تسجيل دخول</a></div>
                                    </div>
                                </div>
                            </div> 
                            <?php    
                            if(isset($_POST['signup'])){
                                                                                                    $name = mysqli_real_escape_string($conn,$_POST['name']);
                                                                                                    $email = mysqli_real_escape_string($conn,$_POST['email']);
                                                                                                    $password = mysqli_real_escape_string($conn,$_POST['password']);
                                                                                                    $mdpass=md5($password);

                                                                                                    //insert datas info database
                                                                                                    $signupsql="INSERT INTO user(name,email,password) VALUES ('$name','$email','$mdpass')";

                                                                                                    $run_signupsql=mysqli_query($conn,$signupsql);

                                                                                                    if($run_signupsql){
                                                                                                        echo"<script> alert('Registration complete!!')</script>";
                                                                                                        echo"<script> location='index.php'</script>";
                                                                                                    }
                                                                                                }                  
                                                                                                
                                                                                                ?>
                            <div class="col-lg-6">
                               <img src="assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('include/footer.php');?>
    <!-- Vendor JS-->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/counterup.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.vticker-min.js"></script>
<script src="assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="assets/js/main.js?v=3.3"></script>
<script src="assets/js/shop.js?v=3.3"></script>   
</body>

</html>