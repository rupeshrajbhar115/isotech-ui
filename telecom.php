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


    <main id="services" class="smooth_scroll_pages">
        <section class="banner services_inside">
            <div class="banner_slider">
                <div class="slider">
                    <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                        data-animation-in="zoomOutImage">
                    <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                        data-animation-in="zoomOutImage">
                    <div class="banner_info animated" data-animation-in="fadeInUp">
                        <h2 class="title_heading text_xl"><span>Telecom</span></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="about_icon">
                <p class="text_reg">Telecom is the backbone of communication between
                    n +1 networks within the same or different Geography. It's the
                    Gateway for any contact like Internet, PRI, and VOIP Solutions.</p>
            </div>
        </section>

        <section class="container">
            <div class="services_card pb">
                <div class="card">
                    <div class="card_img">
                        <img src="img/telecom/blog_img_1.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">ISP/MPLS Link</h5>
                    <p class="text_reg">Data is the new oil and to transfer data from
                        one location to other location we need Internet connectivity.
                        We provide cost effectivity internet links from multiple ISP
                        like Tata, Jeebr, Tikona, Prime net etc</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/telecom/blog_img_2.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Video Collaboration solutions</h5>
                    <p class="text_reg">During pandemic connecting and E-Meeting
                        has become a norm and staying connected has been a welcome step. 
                        Using Video collaboration solutions have made this possible we
                        offer solution from Tata tele.</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/telecom/blog_img_3.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Cloud Contact Centre Solution</h5>
                    <p class="text_reg">Forget about hosting and maintain Muxes
                         for your voice communication for your office use or contact
                          centre. Get the cloud-based contact centre solutions from 
                          tata Tele, Czentrix, Onyx</p>
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