<?php
include("configs/config.php");
include("configs/router.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Mobile Servicing Center </title>

    <?php include("head.php"); ?>

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">

        <?php include("nav.php"); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <?php include("include.php"); ?>

        <?php include("footer.php"); ?>
    </div><!-- /.page-wrapper -->

    
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo $site_url; ?>" aria-label="logo image"><img src="<?php echo $site_url; ?>/assets/images/resources/logo-1.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:lumanjamali@gmail.com">lumanjamali@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:2698733580">269-873-3580</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.facebook.com/luman.officials" class="fab fa-facebook-square"></a>
                    <a href="https://www.instagram.com/luman95/" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>


    <a href="#" data-target="php" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="<?php echo $site_url; ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/vegas/vegas.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/timepicker/timePicker.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="<?php echo $site_url; ?>/assets/vendors/nice-select/jquery.nice-select.min.js"></script>

    <!-- template js -->
    <script src="<?php echo $site_url; ?>/assets/js/fixnix.js"></script>


</body>

</html>