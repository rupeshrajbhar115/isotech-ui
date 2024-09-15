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


        <main id="network" class="smooth_scroll_pages">
            <section class="banner">
                <div class="banner_slider">
                    <div class="slider">
                        <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                            data-animation-in="zoomOutImage">
                        <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                            data-animation-in="zoomOutImage">
                        <div class="banner_info animated" data-animation-in="fadeInUp">
                            <h2 class="title_heading text_xl"><span>Networking</span></h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="about_icon">
                    <p class="text_reg">Our Experts help Desing, Implement, Handhold, and Maintain your On-Premise IT
                        Infrastructure, including LAN, WAN, Wireless, and End Point Computing. Cisco, Ruckus, Dell,HP.
                    </p>
                </div>
            </section>

            <section class="container">
                <div class="services_card pb">
                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_1.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">LAN Switches</h5>
                        <p class="text_reg">All weather switches for your LAN Environment from leading vendor Cisco</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_2.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">WAN Routers</h5>
                        <p class="text_reg">Every reliable Routers for connecting your WAN Traffic from leading vendor
                            Cisco.</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_3.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Network Firewalls</h5>
                        <p class="text_reg">To protect your on-premise Network from the nuances of the internet. Protect
                            you
                            Network perimeter with leading firewall vendors like Sophos, SonicWALL, Fortinet, Cisco,
                            Checkpoint.</p>
                    </div>

                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_4.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Web Application Firewalls</h5>
                        <p class="text_reg">Protect your web application from the OSWAP vulnerabilities by deploying Web
                            Application Firewall from Barracuda, Indus face and array network. </p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_5.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">SD WAN</h5>
                        <p class="text_reg">Get rid of the costly MPLS network and use the Internet as a backbone to
                            connect
                            your multi-location environment using the SD WAN technologies from FatPipe, Sophos,
                            SonicWALL,
                            Fortinet</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/network/network_img_6.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">VPN Gateways</h5>
                        <p class="text_reg">Give your remote working force a feasibility of connecting to the corporate
                            resources unlimited access through leading VPN as a gateway technology from SonicWALL.</p>
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