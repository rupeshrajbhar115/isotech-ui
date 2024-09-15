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
            <section class="banner">
                <div class="banner_slider">
                    <div class="slider">
                        <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                            data-animation-in="zoomOutImage">
                        <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                            data-animation-in="zoomOutImage">
                        <div class="banner_info animated" data-animation-in="fadeInUp">
                            <h2 class="title_heading text_xl"><span>Cloud/Software Services</span></h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="about_icon">
                    <p class="text_reg">Our Cloud Experts create value for your business by Developing a holistic
                        strategy by implementing and managing resilient cloud environments on Leading Cloud Services
                        like Azure, AWS, NextGen, and Yotta, O365. </p>
                    <!-- <h6 class="text_lg">To find out more about our products and services, you can contact our sales team
                </h6> -->
                </div>
            </section>

            <section class="container">
                <div class="services_card pb">
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_1.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">HRMS</h5>
                        <p class="text_reg">Complete cloud based employee Life Cycle Management solution from GreytHR
                        </p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_2.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Microsoft O365</h5>
                        <p class="text_reg">Complete Office Automation Suite from Microsoft and Adobe</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_3.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Mailing solutions</h5>
                        <p class="text_reg">Complete Mailing solution from Microsoft and Zimbra and third-party solution
                        </p>
                    </div>

                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_4.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Asset Management
                            Software</h5>
                        <p class="text_reg">Complete solution with automation from Whatsup Gold and Sapphire IMS</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_5.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Microsoft Azure</h5>
                        <p class="text_reg">Leading Cost-effective Public Cloud Solution for all your cloud hosting
                            requirement from Microsoft Azure</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_6.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Amazon Web Services</h5>
                        <p class="text_reg">Pioneer in Cloud Computing solution from Amazon Web Services</p>
                    </div>

                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_7.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Yotta Cloud Data
                            centre services</h5>
                        <p class="text_reg">Yotta Cloud Data centre services</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_8.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Cloud Security (CASB)</h5>
                        <p class="text_reg">Leading Cloud Security Solution from Sophos, Checkpoint to protect your
                            workload
                            on Cloud.</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/services/services_img_9.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Cloud Firewall</h5>
                        <p class="text_reg">Get similar experience like on premise network firewall on the cloud to
                            protect
                            your cloud workload for your cloud perimeter.</p>
                    </div>

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