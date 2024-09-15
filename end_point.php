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
                        <h2 class="title_heading text_xl"><span>End Point Security</span></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="about_icon">
                <p class="text_reg">Endpoint security is often seen as cybersecurity's
                     frontline and represents one of the first places organizations 
                     look to secure their enterprise networks.</p>
                <p class="text_reg">iTechSolns Considers this as the frontier for 
                    any cyber attack emerging in a network. Our solutions safeguard 
                    Endpoints from Numerous dangers, including the Prevention of 
                    attacks and Monitoring of User Behaviour through EDR and Managed 
                    Services like MDR</p>
            </div>
        </section>

        <section class="container">
            <div class="services_card services_card_new pb">
                <div class="card">
                    <div class="card_img">
                        <img src="img/end/blog_img_1.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Next Gen Antivirus</h5>
                    <p class="text_reg">Next-gen antivirus uses advanced technology to 
                        provide a more comprehensive and proactive approach to malware 
                        protection. With the increasing number of connected devices in 
                        every business, home, and pocket, there is a need to have 
                        antivirus protection on every device</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/end/blog_img_2.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">EDR/XDR</h5>
                    <p class="text_reg">Endpoint detection and response (EDR) is a 
                        system to gather and analyze security threat-related information 
                        from computer workstations and other endpoints, with the goal of 
                        finding security breaches as they happen and facilitating a quick 
                        response to discovered or potential threats. The term "endpoint 
                        detection and response" only describes the overall capabilities 
                        of a tool set. Therefore, the details and capabilities of an EDR 
                        system can vary greatly depending on the implementation. Sophos, 
                        SonicWALL, Fortinet, Trend Micro</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/end/blog_img_3.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">DLP Solution</h5>
                    <p class="text_reg">Data loss prevention software detects potential 
                        data breaches/data ex-filtration transmissions and prevents them 
                        by monitoring, detecting and blocking sensitive data while in use, 
                        in motion, and at rest. The terms "data loss" and "data leak" are 
                        related and are often used interchangeably. Cososys, Zecurion, 
                        Sophos</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/end/blog_img_4.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">VPN Connectivity</h5>
                    <p class="text_reg">A private virtual pool (VPN) has a private pool 
                        in a public pool and allows users to send users and receive users 
                        from public resources or shareholders when the information clothing 
                        is directly connected to the private pool. SonicWALL, Sophos, 
                        Fortinet</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/end/blog_img_5.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">APT Solutions</h5>
                    <p class="text_reg">An Advanced Persistent Threat (APT) is a broad 
                        term used to describe an attack campaign in which an intruder 
                        or team of intruders establishes a long-term illegal presence 
                        on a network in order to extract highly confidential data.</p>
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