
    <?php include_once('include/header.php');?>
    <?php include_once('include/nav.php');?>

    <main class="main single-page">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">الصفحة الرئيسية</a>
                    <span></span> من نحن
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                <?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM about ");
				while ($kitchenrow = mysqli_fetch_assoc($kitchensql)) {

			?>
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">شركتنا</h6>
                        <h1 class="font-heading mb-40">
                         نحن نبني الوجهه للحصول على الامور
                        </h1>
                        <p> <?= $kitchenrow['title1'] ;?> </p>
                        <p><?= $kitchenrow['title2'] ;?></p>
                    </div>
                 
                    <div class="col-lg-6">
                    <img class="img-grey-hover" src="admin/products/about/<?= $kitchenrow['image'] ;?>" alt="">

                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">بعض الحقائق</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">القاء نظرة<br> عملائنا يقولون عنا</h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-1.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    J. Bezos
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-3.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    B.Gates
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-2.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    B. Meyers
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-4.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    J. Bezos
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-5.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    B.Gates
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/avatar-1.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    B. Meyers
                                </h5>
                                <p class="font-sm text-grey-5">Adobe Jsc</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-12 text-center">
                        <p class="wow fadeIn animated">
                            <a class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg">View More</a>
                        </p>
                    </div>
                </div>
            </div>
        </section> -->
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