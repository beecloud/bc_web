<header class="main-header header-style-one">
    <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-top_right pull-right">
                    <div class="header-social-link-1">
                        <ul class="clearfix">
                            <li>
                                <a href="<?= $url_facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="<?= $url_twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="<?= $url_instagram ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>    
    </div>

    <!--Start Header--> 
    <?= view('lp/header_v') ?>
    <!--End header-->

    <!--Sticky Header-->
    <?= view('lp/sticky-header_v') ?>
    <!--End Sticky Header-->
    
    <!-- Mobile Menu  -->
    <?= view('lp/mobile-menu_v') ?>
    <!-- End Mobile Menu --> 
</header>