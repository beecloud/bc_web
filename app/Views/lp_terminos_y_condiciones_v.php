<!DOCTYPE html>
<html lang="es">
<head>
    <?= view('lp/head_v') ?>
</head>

<body>

<div class="boxed_wrapper ltr">

<!-- Preloader -->
<?= view('lp/loader-wrap_v') ?>

<!-- page-direction --
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<!-- Main header-->
<?= view('lp/main-header_v') ?>


<!--Start breadcrumb area-->     
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);"></div>
    <div class="breadcrumb-social-link">
        <ul class="clearfix">
            <li class="wow slideInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <a href="<?= $url_facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
            </li>
            <li class="wow slideInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                <a href="<?= $url_twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
            </li>
            <li class="wow slideInUp" data-wow-delay="900ms" data-wow-duration="1000ms">
                <a href="<?= $url_instagram ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <!--
            <li class="wow slideInUp" data-wow-delay="1100ms" data-wow-duration="2100ms">
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
            </li>
            -->
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content paroller text-center">
                    <div class="title">
                        <h2>Terminos y condiciones.</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="/">Volver al inicio<span class="flaticon-plus"></span></a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Testimonial style2 Area-->
<section class="testimonial-style2-area testimonial-page-one"> 
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Our Testimonials</h3>
            </div>
            <h2>We build future ready digital web<br> studio and platforms.</h2>
        </div>
        <div class="row">

            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->


            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->

            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->
            <!--Start Single Testimonial Style2-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-testimonial-style2-outer-box marbtm30 wow fadeInRight animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-testimonial-style1 single-testimonial-style2">
                        <div class="quote-box">
                            <div class="quote-border" style="background-image: url(assets/images/icon/quote-border-2.png);"></div>
                            <span class="flaticon-right-quote"></span>
                        </div>
                        <div class="text-holder">
                            <div class="text">
                                <h3>Donec ac quam non elit hendrerit pla Pellentesque a est id diam lacinia co non quam sit amet odio pharetra laci purus enim, ornare ac imperdiet hen Pellentesque a est.</h3>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="/lp/assets/images/testimonial/testimonial-v1-1.jpg" alt=""> 
                                </div>
                                <div class="inner-title">
                                    <h4>Salena Smith</h4>
                                    <h6>Web Developper</h6>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!--End Single Testimonial Style2-->

        </div>
    </div>
</section>
<!--End Testimonial Style2 Area-->




<!--Start footer area -->  
<?= view('lp/footer_area_v') ?>
<!--End footer area-->





<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button> 

</div> 






<script src="/lp/assets/js/jquery.js"></script>
<script src="/lp/assets/js/aos.js"></script>
<script src="/lp/assets/js/appear.js"></script>
<script src="/lp/assets/js/bootstrap.bundle.min.js"></script>
<script src="/lp/assets/js/bootstrap-select.min.js"></script>
<script src="/lp/assets/js/isotope.js"></script>
<script src="/lp/assets/js/jquery.countTo.js"></script>
<script src="/lp/assets/js/jquery.easing.min.js"></script>
<script src="/lp/assets/js/jquery.enllax.min.js"></script>
<script src="/lp/assets/js/jquery.fancybox.js"></script>
<script src="/lp/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/lp/assets/js/jquery.paroller.min.js"></script>
<script src="/lp/assets/js/jquery-ui.js"></script>
<script src="/lp/assets/js/knob.js"></script>
<script src="/lp/assets/js/map-script.js"></script>
<script src="/lp/assets/js/owl.js"></script>
<script src="/lp/assets/js/pagenav.js"></script>
<script src="/lp/assets/js/parallax.min.js"></script>
<script src="/lp/assets/js/scrollbar.js"></script>
<script src="/lp/assets/js/TweenMax.min.js"></script>
<script src="/lp/assets/js/validation.js"></script>
<script src="/lp/assets/js/wow.js"></script>



<!-- thm custom script -->
<script src="/lp/assets/js/custom.js"></script>



</body>
</html>