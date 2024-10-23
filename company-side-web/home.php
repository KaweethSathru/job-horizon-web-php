<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

$companyCountQuery = "SELECT * FROM companies";
$companyCountResult = mysqli_query($connection, $companyCountQuery);
$companyCount = mysqli_num_rows($companyCountResult);

$applicationsCountQuery = "SELECT * FROM applications";
$applicationsCountResult = mysqli_query($connection, $applicationsCountQuery);
$applicationsCount = mysqli_num_rows($applicationsCountResult);

$salesAndMarketingCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Sales and Marketing'";
$salesAndMarketingCountResult = mysqli_query($connection, $salesAndMarketingCountQuery);
$salesAndMarketingCount = mysqli_num_rows($salesAndMarketingCountResult);

$biCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Banking and Insurance'";
$biCountResult = mysqli_query($connection, $biCountQuery);
$biCount = mysqli_num_rows($biCountResult);

$uiuxCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'UI/UX Design'";
$uiuxCountResult = mysqli_query($connection, $uiuxCountQuery);
$uiuxCount = mysqli_num_rows($uiuxCountResult);

$telCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Telecommunication'";
$telCountResult = mysqli_query($connection, $telCountQuery);
$telCount = mysqli_num_rows($telCountResult);

$conCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Construction'";
$conCountResult = mysqli_query($connection, $conCountQuery);
$conCount = mysqli_num_rows($conCountResult);

$itCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Information Technology'";
$itCountResult = mysqli_query($connection, $itCountQuery);
$itCount = mysqli_num_rows($itCountResult);

$archCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Architecture'";
$archCountResult = mysqli_query($connection, $archCountQuery);
$archCount = mysqli_num_rows($archCountResult);

$accCountQuery = "SELECT * FROM jobs
                                WHERE
                                category = 'Accounting and Auditing'";
$accCountResult = mysqli_query($connection, $accCountQuery);
$accCount = mysqli_num_rows($accCountResult);

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JOB HORIZON | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <link rel="stylesheet" href="../client-side-web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client-side-web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client-side-web/css/flaticon.css">
    <link rel="stylesheet" href="../client-side-web/css/price_rangs.css">
    <link rel="stylesheet" href="../client-side-web/css/slicknav.css">
    <link rel="stylesheet" href="../client-side-web/css/animate.min.css">
    <link rel="stylesheet" href="../client-side-web/css/magnific-popup.css">
    <link rel="stylesheet" href="../client-side-web/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../client-side-web/css/themify-icons.css">
    <link rel="stylesheet" href="../client-side-web/css/slick.css">
    <link rel="stylesheet" href="../client-side-web/css/nice-select.css">
    <link rel="stylesheet" href="../client-side-web/css/style.css">
    <link rel="stylesheet" href="../client-side-web/css/footer.css">
    <link rel="stylesheet" href="../client-side-web/css/form.css">
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../client-side-web/assets/images/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php require_once('../company-side-web/components/header.php'); ?>

    <main>

        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center mb-200" data-background="../client-side-web/assets/images/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="../company-side-web/search.php" class="search-box" method="POST">
                                    <div class="input-form">
                                        <input type="text" name="keyword" placeholder="Job Role or Keyword" required>
                                    </div>

                                    <div class="select-form">
                                        <div class="select-itms"  >
                                            <select name="job_location" id="select1">
                                                <option value="Anywhere" >Anywhere</option>
                                                <option value="Western Province">Western Province</option>
                                                <option value="Central Province">Central Province</option>
                                                <option value="Southern Province">Southern Province</option>
                                                <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input class="search-form" type="submit" name='submit' value="Find job">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Services Start -->
        <div class="our-services section-pad-t30" id="col-lg-12">
            <div class="container " style="margin-top: -300px;">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Jobs From Over <?php echo $companyCount ?> Local and International Companies</span>
                            <h2>Browse Top Categories </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <a href="category.php?job_cat=Banking and Insurance">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Banking and Insurance</h5>
                                    <span>(<?php echo $biCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=UI/UX Design">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-cms"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>UI/UX Design</h5>
                                    <span>(<?php echo $uiuxCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Sales and Marketing">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-report"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Sales and Marketing</h5>
                                    <span>(<?php echo $salesAndMarketingCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Telecommunication">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-app"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Telecommunication</h5>
                                    <span>(<?php echo $telCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Construction">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-helmet"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Construction</h5>
                                    <span>(<?php echo $conCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Information Technology">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-high-tech"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Information Technology</h5>
                                    <span>(<?php echo $itCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Architecture">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-real-estate"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Architecture</h5>
                                    <span>(<?php echo $archCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6"><a href="category.php?job_cat=Accounting and Auditing">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-content"></span>
                                </div>
                                <div class="services-cap">
                                    <h5>Accounting and Auditing</h5>
                                    <span>(<?php echo $accCount ?>)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
            </div>
        </div>
        <!-- Our Services End -->







        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix" id="post-job">
            <div class="support-padding">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">

                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>POST A JOB RIGHT NOW</span>
                                <h2> <?php echo $applicationsCount ?> people got Jobs from our website</h2>
                            </div>

                            <div class="support-caption">
                                <p class="pera-top">
                                    GET THE MOST EXPOSURE FOR YOUR JOBS
                                </p>
                                <p>
                                    Get in front of the best and brightest job candidates with JOB HORIZON's Job Postings.
                                    Quickly and easily make the right hire on best recruitment site in Sri Lanka.
                                </p>
                                <a href="post_job.php" class="btn post-btn">Post a job</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="../client-side-web/assets/images/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Recruit</p>
                                <span>Employees</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
    </main>

    <?php require_once('../company-side-web/components/footer.php'); ?>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="../client-side-web/components/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../client-side-web/components/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../client-side-web/components/js/popper.min.js"></script>
    <script src="../client-side-web/components/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../client-side-web/components/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../client-side-web/components/js/owl.carousel.min.js"></script>
    <script src="../client-side-web/components/js/slick.min.js"></script>
    <script src="../client-side-web/components/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="../client-side-web/components/js/wow.min.js"></script>
    <script src="../client-side-web/components/js/animated.headline.js"></script>
    <script src="../client-side-web/components/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="../client-side-web/components/js/jquery.scrollUp.min.js"></script>
    <script src="../client-side-web/components/js/jquery.nice-select.min.js"></script>
    <script src="../client-side-web/components/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="../client-side-web/components/js/contact.js"></script>
    <script src="../client-side-web/components/js/jquery.form.js"></script>
    <script src="../client-side-web/components/js/jquery.validate.min.js"></script>
    <script src="../client-side-web/components/js/mail-script.js"></script>
    <script src="../client-side-web/components/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../client-side-web/components/js/plugins.js"></script>
    <script src="../client-side-web/components/js/main.js"></script>

</body>

</html>

<?php mysqli_close($connection); ?>