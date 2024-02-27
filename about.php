<?php
require_once 'includes/model.php';

$banner = $http->GetData("content/?section=about-banner&page_id=3&active=1");
$banner = $banner['results'];

$aboutcore = $http->GetData("content/?section=about-core&page_id=3&active=1");
$aboutcore = $aboutcore['results'];

$whyworkforus = $http->GetData("content/?section=about-why-work-with-us&page_id=3&active=1");
$whyworkforus = $whyworkforus['results'];

$team = $http->GetData("website_users/?show_on_website=true&active=1");
$team = $team['results'];

$video = $http->GetData("content/?section=about-video&page_id=3&active=1");
$video = $video['results'];

$sociallinks = $http->GetData("companyinfo/");
$sociallinks = $sociallinks['results'];
if (isset($sociallinks[0]))
    $sociallinks = $sociallinks[0];
else
    $sociallinks = array();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>About Us - GlobalHR Consulting</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="assets/images/fav.png" alt="Bizup Consulting Business"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid sticky-button">
        <a href="services.php" class="btn btn-primary"><i class="fas fa-book"></i> &nbsp;&nbsp; Book A Service</a>
    </div>


    <div class="sbuttons">
        <a href="<?php echo (isset($sociallinks['facebook'])) ? $sociallinks['facebook'] : ""; ?>" target="_blank" class="sbutton twitt" tooltip="Facebook"><i class="fab fa-facebook"></i></a>

        <a href="<?php echo (isset($sociallinks['instagram'])) ? $sociallinks['instagram'] : ""; ?>" target="_blank" class="sbutton fb" tooltip="Instagram"><i class="fab fa-instagram"></i></a>

        <a href="<?php echo (isset($sociallinks['linkedin'])) ? $sociallinks['linkedin'] : ""; ?>" target="_blank" class="sbutton twitt" tooltip="Linkedin"><i class="fab fa-linkedin"></i></a>

        <a href="<?php echo (isset($sociallinks['twitter'])) ? $sociallinks['twitter'] : ""; ?>" target="_blank" class="sbutton pinteres" tooltip="X"><i class="fab fa-x-twitter"></i></a>

        <a target="_blank" class="sbutton mainsbutton" tooltip="Connect With Us"><i class="fas fa-bookmark"></i></a>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <?php include_once 'includes/menu.php'; ?>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Breadcrumbs Start -->
        <?php if (isset($banner[0])) { ?>
            <div class="rs-breadcrumbs" style="background: url(<?php echo $banner[0]['image']; ?>);">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            <?php echo $banner[0]['title']; ?>
                        </h1>
                        <span class="sub-text" style="text-transform: none;"><?php echo $banner[0]['content']; ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Breadcrumbs End -->

        <!-- About Section Start -->
        <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                        <div class="images-part">
                            <img src="<?php if (isset($aboutcore[0]['image'])) echo $aboutcore[0]['image']; ?>" alt="Images" style="border-top-right-radius:20px;border-bottom-right-radius:20px;">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="sec-title">
                            <h2 class="title pb-22">
                                <?php if (isset($aboutcore[0]['title'])) echo $aboutcore[0]['title']; ?>
                            </h2>
                            <div class="row">
                                <div class="col-12">
                                    <p class="margin-0 pt-15"><?php if (isset($aboutcore[0]['title'])) echo $aboutcore[0]['content']; ?></p>
                                </div>
                            </div>
                            <!-- <div class="btn-part mt-45 md-mt-30">
                                    <a class="readon consultant discover" href="about.php">Contact Us</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="rs-animation">
                <div class="animate-style">
                    <img class="scale" src="assets/images/about/tri-circle-1.png" alt="About">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <!-- <div id="rs-services" class="rs-services chooseus-style about-style bg12 pt-180 pb-180 md-pt-70 md-pb-70" style="background: url('assets/images/txtcover.jpeg');background-size:100% auto">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 md-mb-30 text-center">
                            <div class="services-item">
                                <div class="services-text " style="width:100%">
                                    <h3 class="title text-white"><strong style="color:#fff;font-size:36px;">#SquadGoals</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Services Section End -->

        <!-- Team Section Start -->
        <div class="rs-team style1 bg2 pt-100 pb-100 md-pt-70 md-pb-70" style="background:#1B4229;">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-5">
                        <div class="sec-title mb-50 md-mb-35">
                            <h2 class="title white-color">
                                Meet Our Team
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right md-left">

                    </div>
                </div>
                <div class="rs-carousel owl-carousel" id="team-carousel" data-loop="true" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true">
                    <?php if (count($team) > 0) { ?>
                        <?php foreach ($team as $v) { ?>
                            <div class="team-wrap">
                                <div class="image-wrap">
                                    <a href="#"><img src="<?php echo $v['image']; ?>" alt="Team"></a>
                                    <!-- <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> -->
                                </div>
                                <div class="team-content">
                                    <h3 class="team-name"><a href="#"><?php echo $v['firstname']; ?> <?php echo $v['lastname']; ?></a></h3>
                                    <span class="team-title"><?php echo $v['role']; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Team Section End -->
        <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70 ">
            <div class="container">
                <div class="sec-title text-center pb-30">
                    <h2 class="title title2">
                        Why Work with us
                    </h2>
                </div>
                <div class="row">
                    <?php if (count($whyworkforus) > 0) { ?>
                        <?php foreach ($whyworkforus as $v) { ?>
                            <div class="col-lg-6 pr-33 md-pr-15 md-mb-50 pt-50">
                                <div class="sec-title">
                                    <h4 class=" pb-12">
                                        <?php echo $v['title']; ?>
                                    </h4>
                                    <div class="row mt-15">
                                        <div class="col-2">
                                            <img src="assets/images/choose/icons/2.png" alt="Images">
                                        </div>
                                        <div class="col-10">
                                            <p class="margin-0 pt-15"><?php echo $v['content']; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="rs-animation">
                <div class="animate-style">
                    <img class="scale" src="assets/images/about/tri-circle-1.png" alt="About">
                </div>
            </div>
        </div>

        <div class="container custom">

            <!-- Video Item Section Start -->
            <div class="rs-videos pt-100 md-pt-70">
                <div class="rs-videos choose-video careers-video">
                    <div class="images-video"></div>
                    <div class="animate-border">
                        <div class="video-desc"> <?php echo $video[0]['title']; ?></div>
                        <a class="popup-border" href="<?php echo $video[0]['url']; ?>">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Video Item Section End -->
        </div>
        <br /><br /><br />
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <?php include_once 'includes/footer.php'; ?>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->


    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- Bootstrap v4.4.1 js -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- op nav js -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- waypoints.min js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup.min js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <script>
        // Use JavaScript to initialize the Owl Carousel dynamically
        $(document).ready(function() {
            var teamItemCount = <?php echo count($team); ?>;
            $('#team-carousel').owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                hoverpause: true,
                autoplayTimeout: 5000,
                smartSpeed: 800,
                dots: true,
                nav: true,
                navSpeed: false,
                mdDevice: 3,
                mdDeviceNav: false,
                mdDeviceDots: true,
                centerMode: false,
                ipadDevice2: 2,
                ipadDeviceNav2: false,
                ipadDeviceDots2: true,
                ipadDevice: 2,
                ipadDeviceNav: false,
                ipadDeviceDots: true,
                mobileDevice: 1,
                mobileDeviceNav: false,
                mobileDeviceDots: true,
                items: teamItemCount // Set the number of items dynamically
            });
        });
    </script>
</body>

</html>