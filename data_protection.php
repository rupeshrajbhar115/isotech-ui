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
                            <h2 class="title_heading text_xl"><span>Data Protection
                                    <br>& Data Privacy</span></h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="about_icon">
                    <p class="text_reg">Data privacy defines who has access to data,
                        while data protection provides tools and policies to restrict
                        data access. One can achieve this through Implementing DLP,
                        Secure Sharing, Email Security, WSG EDR </p>
                </div>
            </section>

            <section class="container">
                <div class="services_card pb">
                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_1.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Managed Cloud
                            Backup services</h5>
                        <p class="text_reg">Data is everywhere, protect your data on
                            the cloud and on premise using leading Cloud based Online
                            Backup solution from Acronis, Retrospect and Parablu. We
                            offer managed services for backup
                            On Premise Backup solutions: Protect your on-premise Data
                            using leading on-premise Purpose-Built Backup as a Solution
                            (PBaaS) from Barracuda Networks </p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_2.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Email Archiving services</h5>
                        <p class="text_reg">Looking for long retention of structured data
                            for legal compliance. Use the award-winning Email and Data
                            Archiving solution from Barracuda Networks and Mail Vault.</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_3.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Data Encryption</h5>
                        <p class="text_reg">Protecting data at Rest and Data in Motion
                            and maintain its integrity is a big challenge. Protect your
                            organisation data and manage the complete life cycle management
                            of your data using leading Data protection platform from
                            Galaxkey - FIPS certified.</p>
                    </div>

                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_4.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Data Leakage
                            Prevention solutions</h5>
                        <p class="text_reg">Data can be leaked through multiple vectors.
                            80% of the threat of data leakage happens through insiders.
                            Protect using Leading award-winning solution from Cososys
                            and Heimdal</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_5.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Insider Threat Management</h5>
                        <p class="text_reg">Most of the breaches happens through insider
                            and misconfigurations. Protect your data and get a complete
                            visibity of your end point traffic through Erkan Systems </p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/data/blog_img_6.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Employee Productivity
                            Management tools</h5>
                        <p class="text_reg">In this global pandemic Remote working
                            become a norm and its difficult to optimize the potential
                            of the employee due to remote working. Increase the
                            productivity and efficiency of employees through leading
                            pioneer in this segment by DeskTime and manage your
                            employee time effectively and productively.</p>
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