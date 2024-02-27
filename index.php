<?php require_once 'includes/model.php';
$homebanners = $http->GetData("content/?section=home-banners&page_id=1&active=1");
$homebanners = $homebanners['results'];

$statistics = $http->GetData("content/?section=home-statistics&page_id=1&active=1");
$statistics = $statistics['results'];

$homeintro = $http->GetData("content/?section=home-services&page_id=1&active=1");
$homeintro = $homeintro['results'];

$whyus = $http->GetData("content/?section=home-why-us&page_id=1&active=1");
$whyus = $whyus['results'];

$whyus1 = $http->GetData("content/?section=home-why-us-1&page_id=1&active=1");
$whyus1 = $whyus1['results'];

$homevideo = $http->GetData("content/?section=home-video&page_id=1&active=1");
$homevideo = $homevideo['results'];

$sociallinks = $http->GetData("companyinfo/");
$sociallinks = $sociallinks['results'];
if (isset($sociallinks[0]))
    $sociallinks = $sociallinks[0];
else
    $sociallinks = array();


$blog = $http->GetData("blogs/?active=1");
$blog = $blog['results'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>GlobalHR Consulting</title>
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
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>

</head>

<body class="home-orange-color">

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Our Service Catalogue</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Half: Image -->
                        <div class="col-md-6">
                            <img src="assets/images/image002.png" alt="Image" class="img-fluid">
                        </div>
                        <!-- Right Half: Text -->
                        <div class="col-md-6">
                            <ul style="text-align: left; list-style: none; padding-left: 0;">
                                <li><i class="fas fa-check-circle"></i>&nbsp; HR Department: Set up and Auditing.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Talent Recruitment and Onboarding.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Legal Advisory.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; CV Crafting and Reviewing.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Industrial Relations: Consulting and Advisory.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Payroll and Compensation Management.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Strategic Positioning for SMEs and MNEs.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Performance Management.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Training and Development: Workshops.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Financial Auditing: Data Analytics, Compliance.</li>
                                <li><i class="fas fa-check-circle"></i>&nbsp; Industry and Salary Survey: Market Research.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="assets/images/fav.png" alt="Bizup Consulting Business"></div>
            </div>
        </div>
    </div>

    <div class="sbuttons">
        <a href="<?php echo (isset($sociallinks['facebook'])) ? $sociallinks['facebook'] : ""; ?>" target="_blank" class="sbutton twitt" tooltip="Facebook"><i class="fab fa-facebook"></i></a>
        <a href="<?php echo (isset($sociallinks['instagram'])) ? $sociallinks['instagram'] : ""; ?>" target="_blank" class="sbutton fb" tooltip="Instagram"><i class="fab fa-instagram"></i></a>

        <a href="<?php echo (isset($sociallinks['linkedin'])) ? $sociallinks['linkedin'] : ""; ?>" target="_blank" class="sbutton twitt" tooltip="Linkedin"><i class="fab fa-linkedin"></i></a>

        <a href="<?php echo (isset($sociallinks['twitter'])) ? $sociallinks['twitter'] : ""; ?>" target="_blank" class="sbutton pinteres" tooltip="X"><i class="fab fa-x-twitter"></i></a>

        <a target="_blank" class="sbutton mainsbutton" tooltip="Connect With Us"><i class="fas fa-bookmark"></i></a>
    </div>


    <div class="container-fluid sticky-button">
        <a href="services.php" class="btn btn-primary"><i class="fas fa-book"></i> &nbsp;&nbsp; Book A Service</a>
    </div>

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <?php include_once 'includes/menu.php'; ?>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider3 rs-slider-style4 relative">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    <?php if (count($homebanners) > 0) { ?>
                        <?php $banners = $homebanners;
                        foreach ($banners as $val) { ?>
                            <img src="<?php echo $val['image']; ?>" alt="" title="#slide-1" />
                        <?php } ?>
                    <?php } ?>
                </div>
                <!-- Slide 1 -->
                <?php if (count($homebanners) > 0) { ?>
                    <?php $banners = $homebanners;
                    foreach ($banners as $v) { ?>
                        <div id="slide-1" class="slider-direction">
                            <div class="content-part text-center">
                                <div class="container">
                                    <div class="slider-des">
                                        <div class="sl-subtitle"><?php echo $v['title']; ?></div>
                                        <h1 class="sl-title"><?php echo $v['content']; ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>
        <!-- Slider End -->

        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services style6">
            <div class="container custom">
                <div class="services-box-area bg20">
                    <div style="display:none;" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="..." alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="row margin-0">
                        <?php if (count($homeintro) > 0) { ?>
                            <div class="container">
                                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                                    <?php foreach ($homeintro as $v) { ?>
                                        <div class="col-lg-4 col-md-6 col-sm-6 padding-0  text-center" style="width:352px">
                                            <div class="services-item">
                                                <div class="services-icon text-center">
                                                    <img class="dance_hover" src="<?php echo $v['image']; ?>" alt="Services">
                                                </div>
                                                <div class="services-content">
                                                    <h3 class="title"><a href="services.php"><?php echo $v['title']; ?></a></h3>
                                                    <p class="margin-0"><?php echo $v['content']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- About Section Start -->
        <div class="rs-about style4 bg21 pt-100 pb-100 md-pt-70 md-pb-70" style="display:none">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-40 md-pr-15 mt-45 md-mt-0 md-mb-50">
                        <div class="sec-title3">
                            <span class="sub-text">About Us</span>
                            <h4 class="title pb-25" style="font-size:24px;line-height:28px;">
                                We empower human resources and shift your
                                challenges to the competitive advantage section.
                            </h4>
                            <div class="desc pb-17">
                                We denounce with righteous indignation and dislike men who are so beguiled and
                                demoralized by the charms.
                            </div>
                            <p class="margin-0">
                                Today, a variety of software can create random text that resembles Lorem Ipsum. For
                                example, Apple’s Pages and Keynote software use scrambled placeholder text. And Lorem
                                Ipsum is featured on Google Docs, WordPress, and Microsoft Office Word. Derived from
                                Latin dolorem ipsum, Lorem Ipsum is filler text used by publishers and graphic designers
                                used to demonstrate graphic elements.
                            </p>
                            <div class="btn-part mt-45">
                                <a class="readon consultant discover orange-more" href="about.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/images/about/home4/about-2.png" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Why Choose Section Start -->
        <?php if (isset($whyus[0])) { ?>
            <div class="rs-choose bg5 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                            <div class="sec-title">
                                <h2 class="title pb-30">
                                    <?php echo $whyus[0]['title']; ?>
                                </h2>
                                <p class="margin-0">
                                    <?php echo $whyus[0]['content']; ?>
                                </p>
                            </div>
                            <div class="rs-skillbar style1">
                                <div class="cl-skill-bar">
                                    <!-- Start Skill Bar -->
                                    <?php foreach ($statistics as $v) { ?>
                                        <span class="skillbar-title"><?php echo $v['title']; ?></span>
                                        <div class="skillbar" data-percent="<?php echo intval(strip_tags($v['content'])); ?>">
                                            <p class="skillbar-bar" style="width: <?php echo intval(strip_tags($v['content'])); ?>%;"></p>
                                            <span class="skill-bar-percent"><?php echo intval(strip_tags($v['content'])); ?>%</span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if (isset($whyus1[0])) { ?>
                                <div class=" mb-35" style="background:#fff !important;">
                                    <h2 class="title pb-30">
                                        <?php echo $whyus1[0]['title']; ?>
                                    </h2>
                                    <p class="margin-0">
                                        <?php echo $whyus1[0]['content']; ?>
                                    </p>
                                    <br />
                                    <a class="readon consultant discover" href="<?php echo $whyus[0]['url']; ?>">Learn More</a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="rs-videos choose-video">
                                <div class="images-video">
                                    <img src="<?php echo $whyus[0]['image']; ?>" alt="images" style="border-top-left-radius:20px;border-bottom-left-radius:20px;" />
                                </div>
                                <div class="animate-border">
                                    <a class="popup-border" href="<?php echo $homevideo[0]['url']; ?>">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Section End -->
            </div>
        <?php } ?>

        <!-- Blog Start -->
        <?php if (count($blog) > 0) { ?>
            <div class="rs-blog style2 home3-blog-style home4-blog-style bg19 pt-95 pb-100 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 mb-50">
                            <div class="sec-title3">
                                <span class="sub-title">Latest Blog Posts</span>
                                <h2 class="title pb-25">
                                    Read Latest Posts
                                </h2>
                                <div class="heading-border-line left-style"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-50">
                            <div class="btn-part text-right md-left">
                                <a class="readon consultant discover orange-more" href="blog.php">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="false" data-items="3" data-margin="30" data-autoplay="true" 
                    data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" 
                    data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" 
                    data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" 
                    data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" 
                    data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" 
                    data-md-device-nav="false" data-md-device-dots="true">
                        <?php
                        // Display the actual number of items up to a maximum of 3
                        $maxItems = min(3, count($blog));
                        for ($i = 0; $i < $maxItems; $i++) {
                            $v = $blog[$i];
                        ?>
                            <div class="blog-item">
                                <div class="image-wrap">
                                    <a href="blog-details.php?id=<?php echo $v['id']; ?>"><img src="<?php echo $v['image']; ?>" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta mb-10">
                                        <li class="admin"> <i class="fa fa-user-o"></i> <?php echo $v['first_name'] . ' ' . $v['last_name']; ?></li>
                                        <li class="date"> <i class="fa fa-calendar-check-o"></i>
                                            <?php echo date('jS M Y', strtotime($v['date_added'])); ?></li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.php"><?php echo $v['title']; ?></a></h3>
                                    <p><?php echo $http->ShortenTxt($v['text'], 80); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Blog End -->


    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <?php include_once 'includes/footer.php'; ?>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange2-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- Bootstrap v4.4.1 js -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- jquery latest version -->
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
    <!-- Nivo slider js -->
    <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>