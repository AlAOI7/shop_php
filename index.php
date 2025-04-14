
<?php include_once('include/header.php');?>
<?php include_once('include/nav.php');?>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
            <?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM  banner ");
				while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

			?>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
              
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated"><?= $kitchenrow['t1'] ;?> </h4>
                                    <h2 class="animated fw-900">  <?= $kitchenrow['t2'] ;?> </h2>
                                    <h1 class="animated fw-900 text-brand"><?= $kitchenrow['t3'] ;?></h1>
                                    <p class="animated"> <?= $kitchenrow['t4'] ;?> </p>
                                    <a class="animated btn btn-brush btn-brush-3" href="product-details.php"> تسوق الآن </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                <img class="animated slider-1-1"  src="admin/products/banner/<?= $kitchenrow['image'] ;?>">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
    
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>


         <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">شحن مجاني</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">عرض الطلبات</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">حفض اموالك</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">الترقيات</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">بيع سعيد</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">دعم 24/7</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">ملابس رجالية</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">ملابس نسائية</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false"> المنتجات المهمه</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">عرض الكل<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--ملابس رحالية-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">

                        <?php  
							$kitchensql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3 ");
							while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

						?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="admin/products/<?= $kitchenrow['image'] ;?>" alt="">
                                                <img class="hover-img" src="admin/products/<?= $kitchenrow['image'] ;?>" alt="">
                                            </a>
                                        </div>
                                     
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                          
                                                        <a aria-label="عرض" class="action-btn hover-up"   href="single.php?id=<?= $kitchenrow['pro_id'] ;?>" class="link-product-add-cart">عرض سريع</a>
                                      
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                       
                                    </div>


                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2>	
                                            <a href="single.php?id=<?= $kitchenrow['pro_id'] ;?>">
                                        <?= $kitchenrow['name'] ;?>
                                    </a>
                                </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$ <?= $kitchenrow['new_price'] ;?></span>
                                            <span class="old-price">$ <?= $kitchenrow['old_price'] ;?></span>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
                                        <i class="fi-rs-shopping-bag-add"></i>
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $kitchenrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $kitchenrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $kitchenrow['name'] ;?>" />
												
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>
                                        <!-- <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <!--End product-grid-4-->
                    </div>


                    <!--En tab one (ملابس نسائية)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">  
                        <div class="row product-grid-4">

                                    <?php  
                            $snacksql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Snacks & Beverages' ORDER BY pro_id DESC LIMIT 3 ");
                            while ($snackrow = mysqli_fetch_assoc($snacksql)) {

                        ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                            <img class="default-img" width="140px" height="150px;" src="admin/products/<?= $snackrow['image'] ;?>">
                                            <img class="hover-img" width="140px" height="150px;" src="admin/products/<?= $snackrow['image'] ;?>">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id'] ;?>" class="link-product-add-cart">عرض  </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Donec </a>
                                        </div>
                                        <h2><a href="single.php?id=<?= $snackrow['pro_id'] ;?>"><?= $snackrow['name'] ;?></a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$ <?= $snackrow['new_price'] ;?> </span>
                                            <span class="old-price">$ <?= $snackrow['old_price'] ;?></span>
                                        </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
                                        <i class="fi-rs-shopping-bag-add"></i>
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $kitchenrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $kitchenrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $kitchenrow['name'] ;?>" />
												
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (اخراء)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4"> 
                             <?php  
							$kitchensql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Household' ORDER BY pro_id DESC LIMIT 3  ");
							while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

						?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="admin/products/<?= $kitchenrow['image'] ;?>" alt="">
                                                <img class="hover-img" src="admin/products/<?= $kitchenrow['image'] ;?>" alt="">
                                            </a>
                                        </div>
                                     
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                          
                                                        <a aria-label="عرض" class="action-btn hover-up"   href="single.php?id=<?= $kitchenrow['pro_id'] ;?>" class="link-product-add-cart">عرض سريع</a>
                                      
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                       
                                    </div>


                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2>	
                                            <a href="single.php?id=<?= $kitchenrow['pro_id'] ;?>">
                                        <?= $kitchenrow['name'] ;?>
                                    </a>
                                </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$ <?= $kitchenrow['new_price'] ;?></span>
                                            <span class="old-price">$ <?= $kitchenrow['old_price'] ;?></span>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
                                        <i class="fi-rs-shopping-bag-add"></i>
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $kitchenrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $kitchenrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $kitchenrow['name'] ;?>" />
												
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>
                                        <!-- <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                          
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>


        <section class="banner-2 section-padding pb-0">
            <div class="container">
       

            <?php  
         
				$kitchensql = mysqli_query($conn, "SELECT * FROM add_news WHERE id = '1' ");
                while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {


			?>
                <div class="banner-img banner-big wow fadeIn animated f-none">
                <img class="animated slider-1-1"  src="admin/products/banner/<?= $kitchenrow['image'] ;?>">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand"> <?= $kitchenrow['title1'] ;?></h4>
                        <h1 class="fw-600 mb-20"> <?= $kitchenrow['title2'] ;?></h1>
                        <br>
                      
                        <a href="shop.html" class="btn">عرض الاعلان <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
       

        <!-- catogery -->
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20">
                    <span>الاقسام </span>الرئيسية </h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                    <?php  
							$kitchensql = mysqli_query($conn, "SELECT * FROM catogry  ");
							while ($catogre = mysqli_fetch_assoc($kitchensql)) {

						?>
                           
                          
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop.html">
                                <img width="140px" height="150px;" src="admin/products/catogery<?= $catogre['image'] ;?>">
                                </a>
                            </figure>
                            <h5><a href="#"><?= $catogre['name'] ;?></a></h5>
                            <h5><a href="shop.html"><?= $catogre['slug'] ;?></a></h5>
                        </div>

                          <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">

                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-oe" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">

                                                <?php  
                                                    $kitchensql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Snacks & Beverages' ORDER BY pro_id DESC LIMIT 3 ");
                                                    while ($skrte = mysqli_fetch_assoc($kitchensql)) {

                                                ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                                        <div class="product-cart-wrap mb-30">
                                                            <div class="product-img-action-wrap">
                                                                <div class="product-img product-img-zoom">
                                                                    <a href="product-details.html">
                                                                        <img class="default-img" src="admin/products/<?= $skrte['image'] ;?>" alt="">
                                                                        <img class="hover-img" src="admin/products/<?= $skrte['image'] ;?>" alt="">
                                                                    </a>
                                                                </div>
                                                            
                                                                <div class="product-action-1">
                                                                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                                    <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                                
                                                                                <a aria-label="عرض" class="action-btn hover-up"   href="single.php?id=<?= $skrte['pro_id'] ;?>" class="link-product-add-cart">عرض سريع</a>
                                                            
                                                                </div>
                                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                                    <span class="hot">Hot</span>
                                                                </div>
                                                            
                                                            </div>


                                                            <div class="product-content-wrap">
                                                                <div class="product-category">
                                                                    <a href="shop.html">Clothing</a>
                                                                </div>
                                                                <h2>	
                                                                    <a href="single.php?id=<?= $skrte['pro_id'] ;?>">
                                                                <?= $skrte['name'] ;?>
                                                            </a>
                                                        </h2>
                                                                <div class="rating-result" title="90%">
                                                                    <span>
                                                                        <span>90%</span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <span>$ <?= $skrte['new_price'] ;?></span>
                                                                    <span class="old-price">$ <?= $skrte['old_price'] ;?></span>
                                                                </div>

                                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                                <form action="cartfunction.php" method="post">
                                                                <i class="fi-rs-shopping-bag-add"></i>
                                                                    <fieldset>
                                                                        <input type="hidden" name="quantiry" value="1" />
                                                                        <input type="hidden" name="pro_id" value="<?= $skrte['pro_id'] ;?>" />
                                                                        <input type="hidden" name="pro_price" value="<?= $skrte['new_price'] ;?>" />
                                                                        <input type="hidden" name="pro_name" value="<?= $skrte['name'] ;?>" />
                                                                        
                                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                                <!-- <div class="product-action-1 show">
                                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                        </div>
                            <!--End product-grid-4-->
                        </div>
                     
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>

        <!-- add new -->
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    
         
                    
   
                <div class="col-lg-4 col-md-6">
                                    <?php         
                            $fetchtitle = mysqli_query($conn, "SELECT * FROM add_news WHERE id = '2' ");
                            $kitchenrow = mysqli_fetch_assoc($fetchtitle);
                          ?>
                                        
                       <div class="banner-img wow fadeIn animated">
                            <img src="admin/products/new/<?= $kitchenrow['image'] ;?>" alt="">
                            <div class="banner-text">
                                <span><?= $kitchenrow['title1'] ;?></span>
                                <h4><?= $kitchenrow['title2'] ;?></h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                  
                    </div>
                    <div class="col-lg-4 col-md-6">
                                                            
                                                <?php  
                                            
                                            $fetchtitle = mysqli_query($conn, "SELECT * FROM add_news WHERE id = '3' ");
                                            $kitchenrow = mysqli_fetch_assoc($fetchtitle);
                                        ?>
                        <div class="banner-img wow fadeIn animated">
                            <img src="admin/products/new/<?php echo $kitchenrow['image'] ?>" alt="">
                            <div class="banner-text">
                                <span > <?php echo $kitchenrow['title1'] ?>   </span>
                                <h4> <?php  echo $kitchenrow['title2'] ?></h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <?php  
                                            
                                            $fetchtitle = mysqli_query($conn, "SELECT * FROM add_news WHERE id = '4' ");
                                            $kitchenrow = mysqli_fetch_assoc($fetchtitle);
                                        ?>
                        <div class="banner-img wow fadeIn animated ">
                        <img src="admin/products/new/<?php echo $kitchenrow['image'] ?>" alt="">
                            <div class="banner-text">
                                <span > <?php echo $kitchenrow['title1'] ?>   </span>
                                <h4> <?php  echo $kitchenrow['title2'] ?></h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span> المنتجات </span>  الرئجة</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        
                    <?php  
				$specialsql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Special Offers' ORDER BY pro_id LIMIT 8 ");
				while ($specialrow = mysqli_fetch_assoc($specialsql)) {

			?>
                    <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                    <img height="200px" src="admin/products/<?= $specialrow['image'] ;?>">
                                        <img height="200px" src="admin/products/<?= $specialrow['image'] ;?>">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                     <a aria-label="عرض" class="action-btn hover-up"   href="single.php?id=<?= $specialrow['pro_id'] ;?>">عرض </a>

                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="single.php?id=<?= $specialrow['pro_id'] ;?>"><?= $specialrow['name'] ;?></a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$<?= $specialrow['new_price'] ;?> </span>
                                    <span class="old-price">$<?= $specialrow['old_price'] ;?></span>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        <!--End product-cart-wrap-2-->
                      
                        <!--End product-cart-wrap-2-->
                    </div>
                </div>
            </div>
        </section>





        <section class="section-padding">
            <div class="container">
            <h3 class="section-title mb-20 wow fadeIn animated"> العلامات <span>التجارية</span></h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                    <?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM brand ");
				while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

			?>

                        <div class="brand-logo">
                            <img class="img-grey-hover" src="admin/products/brand/<?= $kitchenrow['image'] ;?>" alt="">
                        </div>
                        <?php } ?>

                    </div>
                </div>
                </div>
            </div>
        </section>

    </main>
    <?php include_once('include/footer.php');?>
   