
<?php include_once('include/header.php'); ?>
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
<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">عروض خاصة
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
				<div class="row product-grid-4">
			<?php  
				$specialsql = mysqli_query($conn, "SELECT * FROM product WHERE category = 'Special Offers' ORDER BY pro_id LIMIT 8 ");
				while ($specialrow = mysqli_fetch_assoc($specialsql)) {

			?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="admin/products/<?= $specialrow['image'] ;?>" alt="">
                                                <img class="hover-img" src="admin/products/<?= $specialrow['image'] ;?>" alt="">
                                            </a>
                                        </div>
                                     
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                          
                                                        <a aria-label="عرض" class="action-btn hover-up"   href="single.php?id=<?= $specialrow['pro_id'] ;?>" class="link-product-add-cart">عرض </a>
                                      
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
                                            <a href="single.php?id=<?= $specialrow['pro_id'] ;?>">
                                        <?= $specialrow['name'] ;?>
                                    </a>
                                </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$ <?= $specialrow['new_price'] ;?></span>
                                            <span class="old-price">$ <?= $specialrow['old_price'] ;?></span>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="cartfunction.php" method="post">
                                        <i class="fi-rs-shopping-bag-add"></i>
											<fieldset>
												<input type="hidden" name="quantiry" value="1" />
												<input type="hidden" name="pro_id" value="<?= $specialrow['pro_id'] ;?>" />
												<input type="hidden" name="pro_price" value="<?= $specialrow['new_price'] ;?>" />
												<input type="hidden" name="pro_name" value="<?= $specialrow['name'] ;?>" />
												
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
		</div>
				</ul>
			</div>
		</div>
	</div>
	
</main>
<?php include_once('include/footer.php'); ?>
<!-- Vendor JS-->