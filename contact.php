<?php
require_once 'includes/model.php';
$banner = $http->GetData("content/?section=contact-banner&page_id=7&active=1");
$banner = $banner['results'];

$contact = $http->GetData("content/?section=contact-header&page_id=7&active=1");
$contact = $contact['results'];
$companyinfo = $http->GetData("companyinfo/");
$companyinfo = $companyinfo['results'];

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
    <title>Contact Us - GlobalHR Consulting</title>
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
                        <span class="sub-text" style="text-transform: none;"><?php echo $banner[0]['content']; ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="rs-contact contact-style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    <div class="col-lg-6 padding-0">
                        <div class="contact-address">
                            <div class="sec-title mb-46">
                                <h2 class="title pb-20">
                                    <?php if (isset($contact)) echo $contact['title']; ?>
                                </h2>
                                <p class="margin-0"><?php if (isset($contact)) echo $contact['content']; ?></p>
                            </div>
                            <div class="address-item mb-25">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/1.png" alt="Address">
                                </div>
                                <div class="address-text">
                                    <?php if (isset($companyinfo[0])) echo $companyinfo[0]['address']; ?>
                                </div>
                            </div>
                            <div class="address-item mb-25">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/5.png" alt="Address">
                                </div>
                                <div class="address-text">
                                    <a href="tel:<?php if (isset($companyinfo[0])) echo $companyinfo[0]['phone_number']; ?>">
                                        <?php if (isset($companyinfo[0])) echo $companyinfo[0]['phone_number']; ?>
                                    </a>
                                </div>

                            </div>
                            <div class="address-item mb-25">
                                <div class="address-icon">
                                    <img src="assets/images/contact/icons/6.png" alt="Address">
                                </div>
                                <div class="address-text">
                                    <a href="mailto:<?php if (isset($companyinfo[0])) echo $companyinfo[0]['email']; ?>">
                                        <?php if (isset($companyinfo[0])) echo $companyinfo[0]['email']; ?>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3970.6927973910015!2d-0.25942592536639475!3d5.612306333081664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzYnNDQuMyJOIDDCsDE1JzI0LjciVw!5e0!3m2!1sde!2sde!4v1706303369513!5m2!1sde!2sde" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Contact Section Start-->
        <div class="rs-contact main-home office-modify1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row margin-0">
                    <div class="col-lg-6 padding-0 office-buliding"></div>
                    <div class="col-lg-6 padding-0">
                        <div class="contact-section contact-style2">
                            <div class="sec-title mb-60">
                                <h2 class="title">
                                    Contact us
                                </h2>
                            </div>
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>
                                            <div class="col-lg-12 mb-35">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <input class="readon submit" type="submit" value="Submit Now">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

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