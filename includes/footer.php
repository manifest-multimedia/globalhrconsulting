<?php
$sociallinks = $http->GetData("companyinfo/");
$sociallinks = $sociallinks['results'];
if (isset($sociallinks[0]))
    $sociallinks = $sociallinks[0];
else
    $sociallinks = array();
?>
<footer id="rs-footer" class="rs-footer style1">
    <div class="footer-top" style="background:#1B4229;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                    <div class="footer-logo mb-40">
                        <a href="index.php"><img src="assets/images/logo_footer1.png" alt="" /></a>
                    </div>
                    <div class="textwidget white-color pb-40">
                        <p>We empower human resources and shift your challenges to the competitive advantage section.</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="<?php echo (isset($sociallinks['facebook'])) ? $sociallinks['facebook'] : ""; ?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="<?php echo (isset($sociallinks['twitter'])) ? $sociallinks['twitter'] : ""; ?> " target="_blank"><span><i class="fa-brands fa-x-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="<?php echo (isset($sociallinks['linkedin'])) ? $sociallinks['linkedin'] : ""; ?>" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="<?php echo (isset($sociallinks['instagram'])) ? $sociallinks['instagram'] : ""; ?>" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="services.php">Recruitment</a></li>
                        <li><a href="services.php">Payroll & Compensation</a></li>
                        <li><a href="services.php">Training & Development</a></li>
                        <li><a href="services.php">Financial Auditing</a></li>
                        <li><a href="services.php">Consulting & Advisory</a></li>
                        <li><a href="services.php">Legal Advisory</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc"><?php echo (isset($sociallinks['address'])) ? $sociallinks['address'] : ""; ?></div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:<?php echo (isset($sociallinks['phone_number'])) ? $sociallinks['phone_number'] : ""; ?>">
                                    <?php echo (isset($sociallinks['phone_number'])) ? $sociallinks['phone_number'] : ""; ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:<?php echo (isset($sociallinks['email'])) ? $sociallinks['email'] : ""; ?>">
                                    <?php echo (isset($sociallinks['email'])) ? $sociallinks['email'] : ""; ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                <div class="desc"><?php echo (isset($sociallinks['opening_hours'])) ? $sociallinks['opening_hours'] : ""; ?></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="background:#11331d;">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">

                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center ">
                        <p>© 2023 GlobalHR - Consulting. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />