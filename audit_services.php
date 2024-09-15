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
                        <h2 class="title_heading text_xl"><span>Audit Services</span></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="about_icon">
                <p class="text_reg">We help create IT Policies with constant Review
                     & updating, aligning business and IT. Periodic assessment of
                      Security through VA & PT manually and Automation is what we
                       do best.</p>
            </div>
        </section>

        <section class="container">
            <div class="services_card pb">
                <div class="card">
                    <div class="card_img">
                        <img src="img/audit_services/blog_img_1.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Network Audits and GRC</h5>
                    <p class="text_reg">Network auditing refers to the process of
                        collecting, analyzing, and examining network data for the
                        purpose of assessing the health of the network. The network 
                        audit informs companies about the success of their network
                        management and control activities, especially with regard
                        to internal and external compliance regulations.</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/audit_services/blog_img_2.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Continuous Monitoring Solutions</h5>
                    <p class="text_reg">By constantly monitoring your network for 
                        changes that could put you at risk, CM gives you a 
                        comprehensive and up-to-date view of your IT environment, 
                        letting you reap a variety of benefits, VAPT</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/audit_services/blog_img_3.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">ISO 27001 services</h5>
                    <p class="text_reg">It is an international standard for 
                        information security management and describes the requirements
                        for the establishment, implementation, maintenance and 
                        continuous improvement of an information security management 
                        system (ISMS), including the aim of helping organizations
                        create their own information resources. safer. </p>
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