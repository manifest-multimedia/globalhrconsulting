<?php
$menu = $http->GetData("menu");
$menu = $menu['results'];
usort($menu, function($a, $b) {
    return $a['id'] <=> $b['id'];
});
$mobile = $menu;

$contact = $http->GetData("content/?section=contact-header&page_id=7");
$contact = $contact['results'][0];
?>
<header id="rs-header" class="rs-header header-transparent">
    <!-- Topbar Area Start -->
    <div class="topbar-area style1">
        <div class="container custom">
            <div class="row y-middle">
                <div class="col-lg-7">
                    <div class="topbar-contact">
                        <ul>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href="mailto:info@bizup.com"><?php echo (isset($sociallinks['email'])) ? $sociallinks['email'] : ""; ?></a>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <a href="tel:(+1)9999999999"> <?php echo (isset($sociallinks['phone_number'])) ? $sociallinks['phone_number'] : ""; ?></a>
                            </li>
                            <li>
                                <i class="flaticon-location"></i>
                                <?php echo (isset($sociallinks['address'])) ? $sociallinks['address'] : ""; ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li class="opening"> <em><i class="flaticon-clock"></i>Monday - Friday / 8AM - 5PM</em> </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky" style="background:#fff !important;">
        <div class="container custom">
            <div class="row-table">
                <div class="col-cell header-logo">
                    <div class="logo-area d-none d-sm-block d-md-block  ">
                        <a href="index.php">
                            <img class="normal-logo" src="assets/images/image001.png" alt="logo" style="max-height:90px !important;" />
                            <img class="sticky-logo" src="assets/images/image001.png" alt="logo" style="max-height:90px !important;" />
                        </a>
                    </div>
                </div>
                <div class="col-cell">
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <nav class="rs-menu hidden-md">
                                <ul class="nav-menu">
                                    <?php foreach ($menu as $v) { ?>
                                        <li class=" <?php if (basename($_SERVER['PHP_SELF']) == "index.php") echo "current-menu-item"; ?>">
                                            <a href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                </div>
                <div class="col-cell d-block d-lg-none">
                    <div class="expand-btn-inner">
                        <ul>
                            <li class="humburger">
                                <a id="nav-expander" class="nav-expander bar" href="#">
                                    <div class="bar">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                        <span class="dot4"></span>
                                        <span class="dot5"></span>
                                        <span class="dot6"></span>
                                        <span class="dot7"></span>
                                        <span class="dot8"></span>
                                        <span class="dot9"></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Mobile Menu start -->
    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
        <div class="close-btn">
            <a id="nav-close2" class="nav-close">
                <div class="line">
                    <span class="line1"></span>
                    <span class="line2"></span>
                </div>
            </a>
        </div>
        <ul class="nav-menu">
            <?php foreach ($menu as $v) { ?>
                <li class=" <?php if (basename($_SERVER['PHP_SELF']) == "index.php") echo "current-menu-item"; ?>">
                    <a href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a>
                </li>
            <?php } ?>
        </ul> <!-- //.nav-menu -->
        <div class="canvas-contact">
            <div class="address-area">
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-location"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Address</h4>
                        <em><?php echo (isset($sociallinks['address'])) ? $sociallinks['address'] : ""; ?></em>
                    </div>
                </div>
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-email"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Email</h4>
                        <em><a href="mailto:hello@glbalhrconsulting.com"><?php echo (isset($sociallinks['email'])) ? $sociallinks['email'] : ""; ?></a></em>
                    </div>
                </div>
                <div class="address-list">
                    <div class="info-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="title">Phone</h4>
                        <em><?php echo (isset($sociallinks['phone_number'])) ? $sociallinks['phone_number'] : ""; ?></em>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>