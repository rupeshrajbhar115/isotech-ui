<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <?php include("includes/include_css.html") ?>
    </head>

    <body>
        <?php include("includes/browser_upgrade.html") ?>
        <?php include("includes/loader.html") ?>
        <?php include("includes/header.html") ?>
        <?php include("includes/sidebar.html") ?>


        <main id="careers" class="smooth_scroll_pages">
            <section class="banner services_inside">
                <div class="banner_slider">
                    <div class="slider">
                        <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                            data-animation-in="zoomOutImage">
                        <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                            data-animation-in="zoomOutImage">
                        <div class="banner_info animated" data-animation-in="fadeInUp">
                            <h2 class="title_heading text_xl"><span>Careers</span></h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="about_icon">
                    <p class="text_reg">Think Customer, Drive Innovation, Take Ownership, Deliver Outcomes, and Succeed
                        Together—drive our actions and ensure we stay true to who we are: a unified team and successful
                        company at the forefront of cloud-based security and data protection.</p>
                    <p class="text_reg">Do what you love in a place that supports your learning, development and growth.
                        As a member of the iTechsolns team, you’ll be exposed to new and exciting things every day.</p>

                    <h6 class="text_lg">Come join us</h6>  
                    <h5 class="text_lg">Drop your resume at hr@itechsoln.com we will get back to you with relevant opportunities.</h5>
                    <h5 class="text_lg">Wish you the best in your Job Search.</h5> 
                </div>
            </section>

            <!--  end body content -->
        </main>
        <?php include("includes/include_js.html") ?>
        <?php include("includes/footer.html") ?>
        <script>
            $(document).ready(function () {
                $('.banner_slider').slick({
                    fade: true,
                    dots: false,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    lazyLoad: 'progressive',
                    autoplaySpeed: 2000
                }).slickAnimation();
            });
        </script>

    </body>

</html>