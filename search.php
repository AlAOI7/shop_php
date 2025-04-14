	
	<?php require "include/head.php" ;?>

	<?php
			if (empty($_GET['search'])) {
				echo "<script> alert('Please write a product name first...!!!!') </script>";
				echo "<script> location = 'index.php' </script>";
			}elseif(!empty($_GET['search'])) {
				$search = mysqli_escape_string($conn, $_GET['search']);
				$searchsql = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%$search%' OR category LIKE '%$search%' ");
			}
				
	?>
	
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">الرئيسية</a>
						<i>|</i>
					</li>
					<li><?php echo $search ;?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"><?php echo $search ;?>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			
			<?php require "include/nav.php" ;?>
			
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1">

			<?php
				while ($searchrow = mysqli_fetch_assoc($searchsql)) {

			?>

						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img width="140px" height="150px;" src="admin/products/<?= $searchrow['image'] ;?>">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?id=<?= $searchrow['pro_id'] ;?>" class="link-product-add-cart">عرض سريع</a>
										</div>
									</div>
								</div>
								<div class="item-info-product " style="margin-bottom: 50px;">
									<h4>
										<a href="single.php?id=<?= $searchrow['pro_id'] ;?>"><?= $searchrow['name'] ;?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">TK. <?= $searchrow['new_price'] ;?></span>
										<del>TK. <?= $searchrow['old_price'] ;?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										
									</div>

								</div>
							</div>
						</div>
				<?php } ?>

						<div class="clearfix"></div>
					</div>
					

				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<?php require "include/specialoffers.php"; ?>
	<!-- //special offers -->
	
	<?php require "include/footer.php" ;?>