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
                            <h2 class="title_heading text_xl"><span>Data Center Solutions</span></h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="about_icon">
                    <p class="text_reg">Data center solutions refer to the products and services needed to create and
                        maintain a data center. Products include IT equipment, like servers, routers, storage systems,
                        and firewalls, as well as supporting infrastructure for the physical data center, like cooling
                        systems, batteries, generators and cabling.</p>
                </div>
            </section>

            <section class="container">
                <div class="services_card pb">
                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_1.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Co-locations</h5>
                        <p class="text_reg">A colocation centre or "carrier hotel", is a
                            type of data centre where equipment, space, and bandwidth
                            are available for rental to retail customers. Choose the
                            best in the industry from Yotta infrastructure and NextGen</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_2.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Dedicated Hosting</h5>
                        <p class="text_reg">A dedicated hosting service, dedicated server,
                            or managed hosting service is a type of Internet hosting in
                            which the client leases an entire server not shared with anyone
                            else. Avail cost effective services from Yotta and NextGen</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_3.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Desktop as a Service (Daas)</h5>
                        <p class="text_reg">Desktop virtualization is a software technology
                            that separates the desktop environment and associated application
                            software from the physical client device that is used to access it.
                            We offer services from Yotta infrastructure based on Citrix
                            Platform and Microsoft VDI Solutions. Including High End desktop
                            as a service.</p>
                    </div>

                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_4.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Infrastructure as a
                            Service (IaaS)</h5>
                        <p class="text_reg">Infrastructure as a service are online services
                            that provide high-level APIs used to dereference various
                            low-level details of underlying network infrastructure like
                            physical computing resources, location, data partitioning,
                            scaling, security, backup etc. offering from Yotta Infrastructure,
                            Acronis Managed Back up as a service, DaaS, DR and DC as a service,
                            SaaS</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_5.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Platform as a Service (PaaS)</h5>
                        <p class="text_reg">Our PaaS frees you from the application
                            infrastructure, middleware and software licenses. Besides,
                            all this is offered on our Tier IV Data Center that is
                            reliable and redundant from Yotta infrastructure and NextGen</p>
                    </div>
                    <div class="card">
                        <div class="card_img">
                            <img src="img/center/blog_img_6.jpg" class="img-responsive">
                        </div>
                        <h5 class="text_lg">Amazon/Azure/Private </h5>
                        <p class="text_reg">Cloud public cloud is an open system where
                            storage or software are available for free or pay per usage
                            model that can be accessed via Internet. Some of the popular
                            examples of public clouds include Amazon, Google and Azure
                            services </p>
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