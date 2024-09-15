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
                        <h2 class="title_heading text_xl"><span>Visibility & Optimization
                        solutions</span></h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="about_icon">
                <p class="text_reg">The Advent of AI and ML in IT. Visibility, 
                    Optimisation & Continous Control Monitoring of Various traffic
                     and Configuration in the network using multiple tools</p>
            </div>
        </section>

        <section class="container">
            <div class="services_card services_card_new pb">
                <div class="card">
                    <div class="card_img">
                        <img src="img/visibility/blog_img_1.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Network traffic visibility solution</h5>
                    <p class="text_reg">Network visibility covers a lot of ground,
                         but its definition is actually rather simple. The term
                          refers to being aware of everything within and moving 
                          through your network with the help of network visibility tools. 
                          In this way, network visibility tools are used to keep a close and 
                          constant eye on network traffic, monitored applications, network 
                          performance, managed network resources and big data analytics, 
                          which in turn, requires effective and scalable data collection, 
                          aggregation, distribution and delivery. </p>
                    <p class="text_reg">Network visibility, however, is not a passive 
                        function as it allows you to exert greater control over all 
                        these aspects. The more in-depth, proactive and extensive 
                        your network visibility, the more control you have over your 
                        network data, and the better you can make decisions regarding 
                        the flow and protection of that data. </p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/visibility/blog_img_2.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Network Firewall Optimization Solutions </h5>
                    <p class="text_reg">Existing manual approaches to firewall 
                        administration are too time consuming and error prone to 
                        be effective in today's environment. The increasing complexity 
                        of corporate networks requires more changes, on more platforms, 
                        faster and with fewer staff.</p>
                    <p class="text_reg">Automatically identify, locate and delete 
                        outdated or unused rules or rule sets. Reduce your security 
                        risks without reducing your productivity. With our automation 
                        and network analysis tools, you can effectively optimize rules 
                        to maintain security policies in a heterogeneous and constantly 
                        changing network.</p>
                </div>
                <div class="card">
                    <div class="card_img">
                        <img src="img/visibility/blog_img_3.jpg" class="img-responsive">
                    </div>
                    <h5 class="text_lg">Application visibility solutions</h5>
                    <p class="text_reg">Application visibility and control functionality 
                        protects critical high-speed networks against application-level 
                        threats. These threats are both existing and emerging, and can 
                        penetrate and proliferate in the network. Derive application 
                        visibility using Colasoft and Plixir solution</p>
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