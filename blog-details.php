<?php require_once 'includes/model.php';
$blog = $http->GetData("blogs/?is_active=1");
if($blog==null){
    header("Location:blog.php");
}
$next=$blog['next'];
$prev=$blog['previous'];
$blogrecent = $blog['results'];

if(isset($_GET['category']))
    $blog = $http->GetData("blogs/".$_GET['id']."/");

$blog = $blog['results'];

$blogCat = $http->GetData("blogcategory/?is_active=1");
$blogCat = $blogCat['results'];

$recent = $http->GetData("blogs/");
$recent = $recent['results'];

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
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        
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
        <!--Preloader area end here-->
     
		<!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <?php include_once 'includes/menu.php';?>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title"><?php echo $blog[0]['title']?></h1>
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
                                    <?php foreach($recent as $key=>$value){
                                        if($key<3){?>
                                        <div class="recent-post-widget no-border">
                                            <div class="post-img">
                                                <a href="blog-details.php?id=<?php echo $v['id'];?>"><img src="<?php echo $value['image'];?>" alt=""></a>
                                            </div>
                                            <div class="post-desc">
                                                <a href="blog-details.php?id=<?php echo $v['id'];?>"> <?php echo $value['title'];?> </a>
                                                <span class="date-post"> <i class="fa fa-calendar"></i> <?php echo date('jS M,Y',strtotime($value['date_added']))?> </span>
                                            </div>
                                        </div>
                                    <?php }
                                    }?>
                                </div>
                                <div class="categories">
                                    <div class="widget-title">
                                        <h3 class="title">Categories</h3>
                                    </div>
                                    <ul>
                                        <?php foreach($blogCat as $key=>$v){?>
                                        <li><a href="blog.php?category=<?php echo $v['id'];?>"><?php echo $v['name'];?></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-details">
                                        <?php if($blog[0]['image']!=""){?>
                                            <div class="bs-img mb-35">
                                                <a href="#"><img src="<?php echo $blog[0]['image']?>" alt=""></a>
                                            </div>
                                        <?php } ?>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> <?php echo date('jS M,Y',strtotime($blog[0]['date_added']))?> </span>
                                                </li> 
                                                <li>
                                                    <span class="p-date"> <i class="fa fa-user-o"></i> <?php echo $blog[0]['first_name']?> <?php echo $blog[0]['last_name']?> </span>
                                                </li> 
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#"><?php echo $blog[0]['category_name']?></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                <?php echo $blog[0]['text']?>
                                            </p>
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
        <?php include_once 'includes/footer.php';?>
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