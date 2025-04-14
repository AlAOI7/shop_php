
<?php include_once('include/header.php');?>

<?php include_once('include/nav.php');?> 
<?php
// delete product from cart
	if (isset($_POST['del'])) {
		$crt_id = mysqli_escape_string($conn, $_POST['cart_id']);
		$del_cart = mysqli_query($conn, "DELETE FROM cart WHERE cart_id = '$crt_id' ");
		if ($del_cart) {
			echo "<script> location = 'checkout.php' </script>";
		}else{
			echo "<script> alert('Try again') </script>";
			echo "<script> location = 'checkout.php' </script>";
		}
	}
// updating cart system

// checking if user logedin on not..
	if (empty($_SESSION['userID']) AND empty($_SESSION['userMail'])) {
		echo "<script> alert('Please login first...!!') </script>";
		echo "<script> location = 'index.php' </script>"; 
	}else{
		$userID = $_SESSION['userID'];
		$userEmail = $_SESSION['userMail'];
	}

if (isset($_POST['qty_update'])) {
	$crt_id = mysqli_escape_string($conn, $_POST['cart_id']);
	echo $crt_id;
}
?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                <a href="index.php" rel="nofollow">الصفحة الرئيسية</a>
                    <span></span> مدونة
                    <span></span> تكنولوجيا
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                        <div class="toggle_info">
                            <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Username Or Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">نسيت كلمة السر?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-md" name="login">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                                <div class="ship_detail">
                                        <div class="form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                                    <label class="form-check-label label_info" data-bs-toggle="collapse" data-target="#collapseAddress" href="#collapseAddress" aria-controls="collapseAddress" for="differentaddress"><span>توصيل الطلب</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    <div id="collapseAddress" class="different_address collapse in">

                                        <form action="dilevery.php" method="post" class="creditly-card-form agileinfo_form" >
                                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                                <div class="information-wrapper">
                                                    <div class="form-group">
                                                        <input type="text" required="" name="fname" placeholder="الاسم  *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" required="" name="lname" placeholder="اسم العائلة *">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input type="text" name="billing_address" required="" placeholder="القريه /الحارة  *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="billing_address2" required="" placeholder="المديرية">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required="" type="text" name="city" placeholder="المدينة  *">
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <input required="" type="text" name="zipcode" placeholder="zipcode / ZIP *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required="" type="number" name="phone" placeholder="رقم الهاتف *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required="" type="number" name="phonewats" placeholder="رقم الواتس اب *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input required="" type="text" name="email" placeholder="البريد الالكتروني  *">
                                                    </div>
                                            
                                                
                                                    
                                                    <input type="hidden" name="user_id" value="<?= $userID ;?>">
                                                        <input type="hidden" name="user_email" value="<?= $userEmail ;?>">
                                                        <input class="btn  btn-sm" style="color:#000;" type="submit" name="submit" value="حغظ">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                         
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>طلباتك</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">منتجات</th>
                                            <th>المجموع</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $cart = mysqli_query($conn, "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.pro_id WHERE user_id = '$userID' AND user_email = '$userEmail' ");
                                    $counter = 1;
                                    $totalamount = 0;
                                    $totalsum = 0;
                                    while ($cartrow = mysqli_fetch_assoc($cart)) {
                                                        ?>
                                        <tr>
                                            <td class="image product-thumbnail">
                                            <img src="admin/products/<?= $cartrow['image'] ;?>" class="img-responsive">
                                            </td>
                                            <td>
                                                <h5><a href="product-details.php">
                                                <?= $cartrow['name'] ;?>

                                                </a>
                                            
                                            </h5> 
                                            <span class="product-qty">
                                            الحجم
                                                </span>
                                            </td>
                                            <td>
                                            <?php $totalamount = $cartrow['price'] * $cartrow['qty'] ;?>
                                    TK. <?= $totalamount ;?>
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th>المجموع الكلي</th>
                                            <td class="product-subtotal" colspan="2">
                                            <?= $cartrow['tack_id'] ;?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>الشحن</th>
                                            <td colspan="2"><em>اضافة قيمة الشحن</em></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal">
                                                <span class="font-xl text-brand fw-900">
                                                <?= $cartrow['tack_id'] ;?>
                                                </span></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?php  }?>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="payment_method">
                                    <div class="mb-25">
                                        <h5>اختر طريقة الدفع</h5>
                                    </div>

                                    
                                    <form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
                                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                            <div class="information-wrapper">
                                            <div class="information-wrapper">
                                                            <div class="form-group">
                                                        <input style="color: black;" class="billing-address-name" type="text" name="name" placeholder="الاسم" required>
                                                    </div>

                                                    <div class="form-group">
                                                                <input style="color: black;" type="number" placeholder="رقم العاتف" name="mobile" required>
                                                            </div>
                                                        
                                                            <div class="form-group">
                                                                <input style="color: black;" type="text" placeholder="address   " name="address" >
                                                            </div>

                                                    

                                                        <div class="controls">
                                                            <h5 style="color: black">رقم الحساب: <span style="color: red;">000000000000</span></h5>
                                                            <input style="width: 10%" value="bkash" type="radio" name="payment" required> <span style="color:black">بنكي</span> <br>

                                                            <input style="width: 10%; margin-bottom: 18px" value="cod" type="radio" name="payment" required> <span style="color:black">دفع عند الاستلام</span>
                                                        </div>

                                                        <div class="form-group">
                                                                <input style="color: black;" type="text" placeholder="رقم بطاقة حسابك" name="trxid">
                                                            </div>


                                                        <div class="clear"> </div>
                                                    </div>
                                                  
                                                </div>
                                                <input type="hidden" name="user_id" value="<?= $userID ;?>">
                                                <input type="hidden" name="user_email" value="<?= $userEmail ;?>">
                                                <input class="btn  btn-sm" style="color: black;" type="submit" name="submit" value="طلب المنتج">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once('include/footer.php');?>

