﻿
<?php include_once('include/header.php');?>
<?php include_once('include/nav.php');?> 

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">الصفحةالرئيسية </a>
                    <span></span> اتصل بنا
                </div>
            </div>
        </div>
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">اضف بياناتك</h3>
                            <p class="text-muted mb-30 text-center font-sm">ارسل لنى رسالتك او مشكلااتك.</p>
                            <form class="contact-form-style text-center" id="contact-form" action="confun.phpc:\xamppa\htdocs\online-shopping-php\alaoicom\confun.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="الاسم " type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="البريد الالكتروني" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="رقم الهاتف" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="الموضوع" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="الرسالة"></textarea>
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">ارسال الرسالة</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    	
    <?php include_once('include/footer.php');?>
  