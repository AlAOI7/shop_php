<?php 

require "db.php";
?>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> تصفح الفئات
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                        <?php  
				$snacksql = mysqli_query($conn, "SELECT * FROM catogry ");
				while ($snackrow = mysqli_fetch_assoc($snacksql)) {

			?>
           
                            <li><a href="<?= $snackrow['slug'] ;?>" ><i class="surfsidemedia-font-dress"></i> <?= $snackrow['name'] ;?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children">
                            <span class="menu-expand"></span><a href="index.php">الصفحة الرئيسية</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.php">المتجر</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">التصنيفات</a>
                            <ul class="dropdown">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">ملابس</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.php"> عروض خاصة</a></li>
                                        <li><a href="product-details.php"> نسائية</a></li>
                                        <li><a href="product-details.php"> شبابية</a></li>
                                        <li><a href="product-details.php"> اطفال</a></li>
                                        <li><a href="product-details.php"> ولادي</a></li>
                                        <li><a href="product-details.php">  رسمية</a></li>
                                        <li><a href="product-details.php"> يمنية</a></li>
                                        <li><a href="product-details.php">فساتين</a></li>
                                        <li><a href="product-details.php">بلوزات وقمصان</a></li>
                                        <li><a href="product-details.php">هوديس وبلوزات</a></li>
                                        <li><a href="product-details.php">أطقم نسائية</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a href="#">احذية</a>
                                    <ul class="dropdown">
                                    <li><a href="product-details.php"> عروض خاصة</a></li>
                                    <li><a href="product-details.php"> رجالية</a></li>
                                    <li><a href="product-details.php">   نسائية</a></li>
                                    <li><a href="product-details.php"> جزمات وبواتي رجالية</a></li>
                                    <li><a href="product-details.php">جزمات وبواتي نسائية</a></li>
                                    <li><a href="product-details.php"> احذية اطفال</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a href="#">الكترونيات</a>
                             
                                    <ul class="dropdown">
                                    <li><a href="product-details.php"> عروض خاصة</a></li>
                                    <li><a href="product-details.php">أجهزة الكمبيوتر ومستلزماتها  </a></li>
                                    <li><a href="product-details.php">    سماعات اذن </a></li>
                                    <li><a href="product-details.php">أجهزة لوحية</a></li>
                                    <li><a href="product-details.php">  اجهزة  الكترونية </a></li>
                                    <li><a href="product-details.php"> اجهزة رقمية </a></li>
                                    <li><a href="product-details.php">  الكترونيات منزلية </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">المنزل</a>
                             
                                    <ul class="dropdown">
                                    <li><a href="product-details.php"> عروض خاصة</a></li>
                                    <li><a href="product-details.php"> المطبخ  </a></li>
                                    <li><a href="product-details.php">   الاثاث </a></li>
                                    <li><a href="product-details.php"> ادوات منزيلة</a></li>
                                  
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="specialoffers.php">عروض خاصة</a></li>
                        <!-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">اللغات</a>
                            <ul class="dropdown">
                                <li><a href="#">إنجليزي</a></li>
                                <li><a href="#">فرنسي</a></li>
                                <li><a href="#">ألمانية</a></li>
                                <li><a href="#">الأسبانية</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="contact.php"> الموقع </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.php">تسجيل دخول </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="register.php">اشتراك</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+1) 0000-000-000 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">تابعني على</h5>
                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>