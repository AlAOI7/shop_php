﻿<?php include_once('include/header.php'); ?>
<?php include_once('include/nav.php'); ?>

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.php" rel="nofollow">الصفحةالرئيسية</a>
                <span></span> متجر
            </div>
        </div>
    </div>


    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>افضل التصانيف<strong class="text-brand">688</strong>  !  في متجرنا </p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>عرض:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>الاقسام </span>الرئيسية
                        </h3>
                        <div class="row product-grid-3">

                            <?php
                            $kitchensql = mysqli_query($conn, "SELECT * FROM  product  WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3  ");
                            while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

                            ?>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="admin/products/<?= $kitchenrow['image']; ?>">


                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id']; ?>" class="link-product-add-cart">عرض </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.php"><?= $kitchenrow['category']; ?></a>
                                            </div>
                                            <h2><a href="product-details.php"><?= $kitchenrow['name']; ?></a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $kitchenrow['new_price']; ?> </span>
                                                <span class="old-price"><?= $kitchenrow['old_price']; ?></span>
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
                    </div>


                    <div class="container wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>الاقسام </span>الرئيسية
                        </h3>

                        <div class="row product-grid-3">
                            <?php
                            $kitchensql = mysqli_query($conn, "SELECT * FROM  product  WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3  ");
                            while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

                            ?>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="admin/products/<?= $kitchenrow['image']; ?>">


                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id']; ?>" class="link-product-add-cart">عرض </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.php"><?= $kitchenrow['category']; ?></a>
                                            </div>
                                            <h2><a href="product-details.php"><?= $kitchenrow['name']; ?></a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $kitchenrow['new_price']; ?> </span>
                                                <span class="old-price"><?= $kitchenrow['old_price']; ?></span>
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
                    </div>

                    <div class="container wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>الاقسام </span>الرئيسية
                        </h3>
                        <div class="row product-grid-3">

                            <?php
                            $kitchensql = mysqli_query($conn, "SELECT * FROM  product  WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3  ");
                            while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

                            ?>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="admin/products/<?= $kitchenrow['image']; ?>">


                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id']; ?>" class="link-product-add-cart">عرض </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.php"><?= $kitchenrow['category']; ?></a>
                                            </div>
                                            <h2><a href="product-details.php"><?= $kitchenrow['name']; ?></a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $kitchenrow['new_price']; ?> </span>
                                                <span class="old-price"><?= $kitchenrow['old_price']; ?></span>
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

                    </div>




                    <div class="container wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>الاقسام </span>الرئيسية
                        </h3>
                        <div class="row product-grid-3">
                            <?php
                            $kitchensql = mysqli_query($conn, "SELECT * FROM  product  WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3  ");
                            while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

                            ?>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="admin/products/<?= $kitchenrow['image']; ?>">


                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id']; ?>" class="link-product-add-cart">عرض </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.php"><?= $kitchenrow['category']; ?></a>
                                            </div>
                                            <h2><a href="product-details.php"><?= $kitchenrow['name']; ?></a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $kitchenrow['new_price']; ?> </span>
                                                <span class="old-price"><?= $kitchenrow['old_price']; ?></span>
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

                    </div>






                    <div class="container wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>الاقسام </span>الرئيسية
                        </h3>
                        <div class="row product-grid-3">
                            <?php
                            $kitchensql = mysqli_query($conn, "SELECT * FROM  product  WHERE category = 'Kitchen' ORDER BY pro_id DESC LIMIT 3  ");
                            while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

                            ?>

                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.php">
                                                    <img class="default-img" src="admin/products/<?= $kitchenrow['image']; ?>">


                                                </a>
                                            </div>
                                            <div class="product-action-1">

                                                <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="عرض" class="action-btn hover-up" href="single.php?id=<?= $snackrow['pro_id']; ?>" class="link-product-add-cart">عرض </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.php"><?= $kitchenrow['category']; ?></a>
                                            </div>
                                            <h2><a href="product-details.php"><?= $kitchenrow['name']; ?></a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span><?= $kitchenrow['new_price']; ?> </span>
                                                <span class="old-price"><?= $kitchenrow['old_price']; ?></span>
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
                    </div>
                    <!--شريط التمرير-->

                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">16</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>




                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            <li><a href="shop.php">Shoes & Bags</a></li>
                            <li><a href="shop.php">Blouses & Shirts</a></li>
                            <li><a href="shop.php">Dresses</a></li>
                            <li><a href="shop.php">Swimwear</a></li>
                            <li><a href="shop.php">Beauty</a></li>
                            <li><a href="shop.php">Jewelry & Watch</a></li>
                            <li><a href="shop.php">Accessories</a></li>
                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by price</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Color</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                </div>
                                <label class="fw-900 mt-15">Item Condition</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                    <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                    <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                    <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                </div>
                            </div>
                        </div>
                        <a href="shop.php" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div>

                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">New products</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="assets/imgs/shop/thumbnail-3.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h5><a href="product-details.php">Chen Cardigan</a></h5>
                                <p class="price mb-0 mt-5">$99.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="assets/imgs/shop/thumbnail-4.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="product-details.php">Chen Sweater</a></h6>
                                <p class="price mb-0 mt-5">$89.50</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="assets/imgs/shop/thumbnail-5.jpg" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="product-details.php">Colorful Jacket</a></h6>
                                <p class="price mb-0 mt-5">$25</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                        <img src="assets/imgs/banner/banner-11.jpg" alt="">
                        <div class="banner-text">
                            <span>Women Zone</span>
                            <h4>Save 17% on <br>Office Dress</h4>
                            <a href="shop.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</main>
<?php include_once('include/footer.php'); ?>
<!-- Vendor JS-->