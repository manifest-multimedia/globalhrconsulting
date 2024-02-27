<?php
require_once 'includes/model.php';
$banner = $http->GetData("content/?section=faq-banner&page_id=5&active=1");
$banner = $banner['results'];

$faq = $http->GetData("content/?section=faq-questions&page_id=5&active=1");
$faq = $faq['results'];


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
    <title>FAQ - GlobalHR Consulting</title>
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


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

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

        <!-- Faq Section Start -->
        <div id="rs-faq" class="rs-faq pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-12 pl-30 md-pl-15">
                        <div class="faq-content">
                            <div id="accordion" class="accordion">
                                <?php if (count($faq) > 0) { ?>
                                    <?php foreach ($faq as $key => $v) { ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="false"><?php echo $v['title']; ?></a>
                                            </div>
                                            <div id="collapse<?php echo $key; ?>" class="collapse" data-bs-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <?php echo $v['content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Section End -->

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
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
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