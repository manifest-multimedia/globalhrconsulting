<?php
require_once 'includes/model.php';
$banner = $http->GetData("content/?section=services-banner&page_id=4&active=1");
$banner = $banner['results'];

$header = $http->GetData("content/?section=services-header&page_id=4&active=1");
$header = $header['results'];

$services = $http->GetData("content/?section=services&page_id=4&active=1&active=1");
$services = $services['results'];

$clients = $http->GetData("clients/?active=1");
$clients = $clients['results'];

//=========
$services1 = $http->GetData("content/?section=services-work-process-1&page_id=4&active=1");
$services1 = $services1['results'];
$services2 = $http->GetData("content/?section=services-work-process-2&page_id=4&active=1");
$services2 = $services2['results'];
$services3 = $http->GetData("content/?section=services-work-process-3&page_id=4&active=1");
$services3 = $services3['results'];
$services4 = $http->GetData("content/?section=services-work-process-4&page_id=4&active=1");
$services4 = $services4['results'];

$bookservices = $http->GetData("book_services/");
$bookservices = $bookservices['results'];

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
    <title>Services - GlobalHR Consulting</title>
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
    <!-- responsive css -->
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
                        <span class="sub-text"></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Breadcrumbs End -->


        <?php if (count($bookservices) > 0) { ?>
            <div class="rs-blog style2 home3-blog-style home4-blog-style bg19 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 mb-50">
                            <div class="sec-title3">
                                <h2 class="title pb-25">
                                    Book A Service
                                </h2>
                                <div class="heading-border-line left-style"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50"></div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        <?php foreach ($bookservices as $v) { ?>
                            <div class="blog-item">
                                <div class="pricing-table text-center">
                                    <div class="pricing-table-header">
                                        <h3 class="table-title" style="height:60px;"><?php echo $v['name']; ?></h3>
                                    </div>
                                    <div class="pricing-icon mb-20">
                                        <center>
                                            <img src="assets/images/pricing/style1/1.png" alt="" style="width:60px;" />
                                        </center>
                                    </div>
                                    <div class="btn-part">
                                        <a class="readon price" target="_blank" href="<?php echo $v['url']; ?>">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Services Section Start -->
        <div class="rs-services main-home services-style1 home-4-style bg7 pt-95 pb-100 md-pt-70 md-pb-65">
            <div class="container">
                <div class="sec-title3 text-center mb-65 md-mb-45">
                    <span class="sub-title">Valued Services</span>
                    <h2 class="title pb-25">
                        <?php if (isset($header[0]['title'])) echo $header[0]['title']; ?>
                    </h2>
                    <div class="heading-border-line"></div>
                </div>

                <div class="row">
                    <?php if (isset($header[0]['content'])) echo $header[0]['content']; ?>
                    <br><br><br><br>
                    <?php foreach ($services as $v) { ?>
                        <div class="col-lg-6 col-md-6 mb-65">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="<?php echo $v['image']; ?>" alt="Services" class=" bounce_img">
                                </div>
                                <div class="services-text">
                                    <h2 class="title"><a href=""><?php echo $v['title']; ?></a></h2>
                                    <?php echo $v['content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Process Section Start -->
        <div class="rs-process style1 bg2 pt-100 pb-100 md-pt-70 md-pb-80">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-7">
                        <div class="sec-title md-text-center mb-30">
                            <h2 class="title title2 white-color">
                                Our working process - how we work for our customers
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="btn-part text-right md-text-center">
                            <a class="readon consultant discover" href="contact.php">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom2">
                <div class="process-effects-layer">
                    <div class="row">
                        <?php if (isset($services1[0])) { ?>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="<?php echo $services1[0]['image']; ?>" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 1 </span></div>
                                            <div class="number-title">
                                                <h3 class="title"> <?php echo $services1[0]['title']; ?></h3>
                                            </div>
                                            <div class="number-txt">
                                                <?php echo $services1[0]['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($services2[0])) { ?>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="<?php echo $services2[0]['image']; ?>" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 2 </span></div>
                                            <div class="number-title">
                                                <h3 class="title"><?php echo $services2[0]['title']; ?></h3>
                                            </div>
                                            <div class="number-txt">
                                                <?php echo $services2[0]['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($services3[0])) { ?>
                            <div class="col-lg-3 col-md-6 sm-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="<?php echo $services3[0]['image']; ?>" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 3 </span></div>
                                            <div class="number-title">
                                                <h3 class="title"><?php echo $services3[0]['title']; ?></h3>
                                            </div>
                                            <div class="number-txt">
                                                <?php echo $services3[0]['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($services3[0])) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="<?php echo $services4[0]['image']; ?>" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 4 </span></div>
                                            <div class="number-title">
                                                <h3 class="title"><?php echo $services4[0]['title']; ?></h3>
                                            </div>
                                            <div class="number-txt">
                                                <?php echo $services4[0]['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Section End -->


        <!-- Partner Section Start -->
        <div class="rs-patter-section pt-80 pb-75">
            <div class="container custom">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false" data-ipad-device2="4" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false">
                    <?php if (count($clients) > 0) { ?>
                        <?php foreach ($clients as $v) { ?>
                            <div class="logo-img">
                                <a href="#">
                                    <img class="hovers-logos rs-grid-img" src="<?php echo $v['image']; ?>" title="" alt="">
                                    <img class="mains-logos rs-grid-img " src="<?php echo $v['image']; ?>" title="" alt="">
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Partner Section End -->

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
</body>

</html>