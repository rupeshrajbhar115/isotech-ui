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


    <main id="about_us" class="smooth_scroll_pages">
        <section class="banner">
            <div class="banner_slider">
                <div class="slider">
                    <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                        data-animation-in="zoomOutImage">
                    <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                        data-animation-in="zoomOutImage">
                    <div class="banner_info animated" data-animation-in="fadeInUp">
                        <h2 class="title_heading text_xl"><span>About Us</span></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="about_icon pb">
                <p class="text_lg">iTechSolns & Systems is a company specializing in business-to-Customer IT
                    infrastructure solutions. We assist small, medium and commercial customers with IT infrastructure
                    solutions spanning network, compute, storage, desktop/mobile devices and extending to the cloud. Our
                    solutions cover three core areas:</p>
                <div class="icon_box">

                    <div class="box">
                        <div class="icon_img">
                            <img src="img/about/icon_1.png" class="img-responsive">
                        </div>
                        <h6 class="text_md">IT infrastructure &<br>
                            security integration</h6>
                    </div>
                    <div class="box">
                        <div class="icon_img">
                            <img src="img/about/icon_2.png" class="img-responsive">
                        </div>
                        <h6 class="text_md">Collaboration Services</h6>
                    </div>
                    <div class="box">
                        <div class="icon_img">
                            <img src="img/about/icon_3.png" class="img-responsive">
                        </div>
                        <h6 class="text_md">Mobility solutions</h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="about ptb">
            <div class="container">
                <div class="about_wrapper">
                    <div class="about_img">
                        <img src="img/about/about_img.jpg" class="img-responsive">
                    </div>
                    <div class="about_info">
                        <p class="para">As part of our solution, we support customers in purchasing software, hardware,
                            network equipment and mobile devices as a trusted advisor.
                        </p>
                        <div class="para">We believe in providing robust solutions for IT security, data centre
                            technology,
                            cloud management solutions and mobility solutions.
                        </div>
                        <div class="para">Our journey began in 2014 and over the years we have developed deep expertise
                            in
                            various fields. Our services are often used by companies with 10 to 10,000 terminals, with
                            the
                            possibility of increasing to more than 1,000,000 terminals service organization.</div>
                        <div class="para">We have successfully served our customers and continue to expand the range and
                            vertical of our products/services. Our partners include most of the leading device
                            manufacturers
                            and solution providers in the fields of IT security, server and network infrastructure
                            equipment, and commercial activation technology.</div>
                    </div>
                </div>
            </div>
        </section>

        <!--  end body content -->
    </main>
    <?php include("includes/include_js.html") ?>
    <?php include("includes/footer.html") ?>
    <script>
    $(document).ready(function() {
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