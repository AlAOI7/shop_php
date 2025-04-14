<?php
session_start();

require "db.php";






$fetchtitle = mysqli_query($conn, "SELECT title FROM setting WHERE id = '1' ");
$row = mysqli_fetch_assoc($fetchtitle);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $row['title']; ?> </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>


    <style>
        @media print {
            .hidethispart {
                display: none;
            }
        }
    </style>
</head>

<body>




    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> إنجليزي <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="">الفرنسية</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/imgs/theme/flag-dt.png" alt="">الألمانية</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/imgs/theme/flag-ru.png" alt="">Pусский</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>احصل على أجهزة رائعة بخصم يصل إلى 50% <a href="shop.php">عرض التفاصيل</a></li>
                                    <li>عروض قيمة العشاء - وفر المزيد مع القسائم</li>
                                    <li>مجوهرات 25silver العصرية، وفر ما يصل إلى 35% اليوم <a href="shop.php">تسوق الآن</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (empty($_SESSION['userMail'])) {
                    ?>

                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info header-info-right">
                                <ul>
                                    <li><i class="fi-rs-key">

                                        </i><a href="login.php">تسجيل الدخول </a> / <a href="register.php">اشتراك</a></li>
                                </ul>
                            </div>
                        </div>


                    <?php
                    } else {
                    ?>

                        <li>
                            <a href="include/logout.php">
                                <span class="fa fa-unlock-alt" aria-hidden="true"></span> تسجيل الخروج </a>
                        </li>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-1">
                            <form action="#">
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media" src="assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>



                                <!-- //search -->
                                <!-- cart details -->
                                <div class="top_nav_right">
                                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">

                                        <button class="w3view-cart" type="submit" name="submit" value="">
                                            <a style="color: white;" href="cart.php">
                                                <?php
                                                if (empty($_SESSION['userMail'])) {
                                                ?>


                                                                    <i class="fi-rs-shopping-bag-add"></i>


                                                <?php
                                                } else {
                                                    $Mailuser = $_SESSION['userMail'];
                                                    $countSql = mysqli_query($conn, "SELECT cart_id FROM cart WHERE user_email = '$Mailuser' ");
                                                    $count = mysqli_num_rows($countSql);

                                                ?>


                                                         <i class="fi-rs-shopping-bag-add"></i><?= $count; ?>
                                                <?php } ?>






                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <!-- <div class="header-action-icon-2">
                                    
                                    <a class="mini-cart-icon" href="cart.php">
                                        <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.php"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.php">حقيبة ديزي كاجوال</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.php"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.php">قمصان سروال قصير</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>المجموع <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="cart.php" class="outline">عرض العربة</a>
                                                <a href="checkout.php">الدفع</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> تصفح الفئات
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="shop.php"><i class="surfsidemedia-font-dress"></i> ملابس</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">ساخنة وتتجه</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">فساتين</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">بلوزات وقمصان</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">هوديس وبلوزات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">أطقم نسائية</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">البدلات والسترات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">ملابس داخلية</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">الدبابات و كاميس</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">معاطف وستراتs</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">قيعان</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">سروال ضيق</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">التنانير</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">السراويل القصيرة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">جينز</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">السراويل و كابريس</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">مجموعات بيكيني</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">التستر</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">ملابس سباحة</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>قادم جديد</h4>
                                                            <a href="#">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>العروض الساخنة</h4>
                                                            <a href="#">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.php"><i class="surfsidemedia-font-tshirt"></i> الكترونيات</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">جاكيتات و أمبير؛ المعاطف</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">السترات أسفل</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">السترات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">سترات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">معاطف جلدية فو</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">خندق</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">صوف ويمزج</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">سترات وصدريات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">معاطف جلدية</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">البدلات والسترات</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">الحلل</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">جاكيتات البدلة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">السراويل البدلة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">بدلة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">سترات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">بدلات مصممة خصيصا</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">التستر</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>قادم جديد</h4>
                                                            <a href="#">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.php"><i class="surfsidemedia-font-smartphone"></i> هاتف خليوي</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">ساخنة وتتجه</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">هاتف خليوي</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">آيفون</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">الهواتف المجددة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">تليفون محمول</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">أجزاء الهاتف المحمول</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">حقائب وحافظات الهاتف</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">معدات الاتصالات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">اسلكية تخاطب</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">مُكَمِّلات</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">واقيات الشاشة</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">شواحن الأسلاك</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">شواحن لاسلكية</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">شواحن السيارات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">أداة للشحن</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">شارات</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">المكونات الغبار</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">معززات الإشارة</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>قادم جديد</h4>
                                                            <a href="#">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>العروض الساخنة</h4>
                                                            <a href="#">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-desktop"></i>الكمبيوتر والمكتب</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-cpu"></i>مستهلكى الكترونيات</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-diamond"></i>مجوهرات واكسسوارات</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-home"></i>المنزل والحديقة</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-high-heels"></i>أحذية</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-teddy-bear"></i>الأم والأطفال</a></li>
                                    <li><a href="shop.php"><i class="surfsidemedia-font-kite"></i>متعة في الهواء الطلق</a></li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="shop.php"><i class="surfsidemedia-font-desktop"></i>الصحة و الجمال</a></li>
                                            <li><a href="shop.php"><i class="surfsidemedia-font-cpu"></i>الحقائب والأحذية</a></li>
                                            <li><a href="shop.php"><i class="surfsidemedia-font-diamond"></i>مستهلكى الكترونيات</a></li>
                                            <li><a href="shop.php"><i class="surfsidemedia-font-home"></i>سيارات ودراجات نارية</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">ابحث عن...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="index.php">الصفحة الرئيسية </a></li>
                                    <li><a href="about.php">من نحن</a></li>
                                    <li><a href="shop.php">المتجر</a></li>
                                    <li class="position-static">
                                        <a href="#">التصنيفات 
                                            <i class="fi-rs-angle-down">

                                            </i>
                                        </a>
                                        <ul class="mega-menu">
            
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">ملابس  </a>
                                                <ul>
                                          
                                                <li><a href="product-details.php"> نسائية</a></li>
                                                <li><a href="product-details.php"> شبابية</a></li>
                                                <li><a href="product-details.php"> اطفال</a></li>
                                                <li><a href="product-details.php"> ولادي</a></li>
                                            
                                                <li><a href="product-details.php"> يمنية</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#"> الاحذية</a>
                                                <ul>
                                                <li><a href="product-details.php"> عروض خاصة</a></li>
                                                    <li><a href="product-details.php"> رجالية</a></li>
                                                    <li><a href="product-details.php">   نسائية</a></li>
                                             
                                                    <li><a href="product-details.php"> احذية اطفال</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">تكنولوجيا</a>
                                                <ul>
                                                <li><a href="product-details.php"> عروض خاصة</a></li>
                                                    <li><a href="product-details.php">أجهزة الكمبيوتر ومستلزماتها  </a></li>
                                                    <li><a href="product-details.php">    سماعات اذن </a></li>
                                                    <li><a href="product-details.php">أجهزة لوحية</a></li>
                                                    <li><a href="product-details.php">  اجهزة  الكترونية </a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="product-details.php"><img src="assets/imgs/banner/menu-banner.jpg" alt="Surfside Media"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>صفقات ساخنة</h4>
                                                        <h3>لا تفوت<br> الشائع</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">حفظ في 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.php">تسوق الآن</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span> off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="specialoffers.php">عروض خاصة </a></li>
                                    <li><a href="contact.php">الاتصال</a></li>
                                    <li><a href="#">حسالاتي<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="admin.php">لوحة التحكم</a></li>
                                            <li><a href="shop.php">المنتجات</a></li>
                                            <li><a href="#">التصنيفات</a></li>
                                            <li><a href="#">القسيمة</a></li>
                                            <li><a href="#">الطلبات</a></li>
                                            <li><a href="#">العملاء</a></li>
                                            <li><a href="#">تسجيل خروج</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>الهاتف</span> (+1) 0000-000-000 </p>
                    </div>
                    <p class="mobile-promotion">سعيد <span class="text-brand">يوم الأم</span>. بيع كبير يصل إلى 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="cart.php">
                                    <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">0</span>
                                </a>
                              
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>