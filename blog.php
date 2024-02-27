<?php require_once 'includes/model.php';
$page = "";
if (isset($_GET['page']))
    if ($_GET['page'] != "")
        $page = $_GET['page'];

$url = "blogs/?active=1";
if ($page != "")
    $url .= "&page=" . $page;

$blog = $http->GetData($url);
if ($blog == null) {
    header("Location:blog.php");
}
$nextPage = "";
$next = $blog['next'];
if ($next != "") {
    $next = parse_url($next);
    if (isset($next['query'])) {
        parse_str($next['query'], $params);
        if (isset($params['page']))
            $nextPage = "page=" . $params['page'];
    }
}

$prevPage = "";
$prev = $blog['previous'];

if ($prev != "") {
    $prev = parse_url($prev);
    if (isset($prev['query'])) {
        parse_str($prev['query'], $params);
        if (isset($params['page']))
            $prevPage = "page=" . $params['page'];
    }
}

$blogrecent = $blog['results'];

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (isset($_GET['category'])) {
    $url = "blogs/?active=1&categorie=" . $_GET['category'];
    if ($page != "")
        $url .= "&page=" . $page;

    $blog = $http->GetData($url);
    $actual_link .= "&";
} else {
    $actual_link = "?";
}

$blog = $blog['results'];

$blogCat = $http->GetData("blogcategory/?active=1");
$blogCat = $blogCat['results'];


$sociallinks = $http->GetData("companyinfo/?active=1");
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
    <title>Blog - GlobalHR Consulting</title>
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
        <div class="rs-breadcrumbs img4">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">Blog</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-4 col-md-12 order-last">
                        <div class="widget-area">
                            <div class="recent-posts mb-50">
                                <div class="widget-title">
                                    <h3 class="title">Recent Posts</h3>
                                </div>
                                <?php foreach ($blogrecent as $key => $v) {
                                    if ($key < 3) { ?>
                                        <div class="recent-post-widget no-border">
                                            <div class="post-img">
                                                <a href="blog-details.php?id=<?php echo $v['id']; ?>"><img src="<?php echo $v['image']; ?>" alt=""></a>
                                            </div>
                                            <div class="post-desc">
                                                <a href="blog-details.php?id=<?php echo $v['id']; ?>"> <?php echo $v['title']; ?> </a>
                                                <span class="date-post"> <i class="fa fa-calendar"></i> <?php echo date('M jS,Y', strtotime($v['date_added'])); ?> </span>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            <div class="categories">
                                <div class="widget-title">
                                    <h3 class="title">Categories</h3>
                                </div>
                                <ul>
                                    <?php foreach ($blogCat as $key => $v) { ?>
                                        <li><a href="blog.php?category=<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                        <div class="row">
                            <?php foreach ($blog as $key => $v) { ?>
                                <div class="col-lg-12 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="blog-details.php?id=<?php echo $v['id']; ?>"><img src="<?php echo $v['image']; ?>" alt="" width="100%" /></a>
                                            <ul class="post-categories">
                                                <li><a href="blog.php?category=<?php echo $v['categorie']; ?>"><?php echo $v['category_name']; ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="blog-details.php?<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> <?php echo date('M jS, Y', strtotime($v['date_added'])); ?>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> <?php echo $v['first_name']; ?> <?php echo $v['last_name']; ?>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">
                                                <?php echo $v['text']; ?>
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="blog-details.php?id=<?php echo $v['id']; ?>">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="col-lg-12">
                                <div class="pagination-area">
                                    <div class="nav-link">
                                        <a class="page-number border-none" href="<?php echo $actual_link . $prevPage; ?>">Previous</a>
                                        <a class="page-number border-none" href="<?php echo $actual_link . $nextPage; ?>">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
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