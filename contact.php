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


    <main id="contact" class="smooth_scroll_pages">
        <section class="banner">
            <div class="banner_slider">
                <div class="slider">
                <img src="img/telecom/banner_dekstop.jpg" class="img-responsive animated width_100 dekstop"
                        data-animation-in="zoomOutImage">
                    <img src="img/end/mobile_banner.jpg" class="img-responsive animated width_100 mobile"
                        data-animation-in="zoomOutImage">
                    <div class="banner_info animated" data-animation-in="fadeInUp">
                        <h2 class="title_heading text_xl"><span>Contact Us</span></h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_section pb">
            <div class="container">
                <div class="contact_form">
                    <div class="contact_info">
                        <h4 class="text_lg">iTeschSoln Pvt Ltd</h4>
                        <ul>
                            <li><a href="#">L296 Dreams Mall, Off LBS Marg,<br>
                             Bhandup West Mumbai 400078</a></li>
                            <li><a href="tel+:98196 93516">98196 93516</a> / 
                                <a href="tel+:93245 76847">93245 76847</a></li>
                            <li><a href="mailto:suresh@itechsoln.com">suresh@itechsoln.com</a></li>
                        </ul>
                    </div>
                    <div class="contact_form_section">
                        <form action="#" method="post" class="contact_form" id="contact_form">
                            <div class="input_filed">
                                <input type="text" name="name" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="input_filed">
                                <input type="text" name="phone" class="form-control" id="" placeholder="Phone Number">
                            </div>
                            <div class="input_filed">
                                <input type="email" name="email" class="form-control" id="" placeholder="Email Address">
                            </div>
                            <div class="input_filed">
                                <input type="text" name="msg" class="form-control" id="" placeholder="Message">
                            </div>
                            <div class="btn_section">
                                <button type="submit" class="btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_ifram">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.123981369771!2d72.9364334!3d19.146049499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b87afa8f44db%3A0xf0abfea2eb6b6729!2sTech11%20IT%20Solutions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1672500016346!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
