<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HireME | Find Jobs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style/find.css?V=<?php echo time() ?>">

</head>

<body>
    <!-- Preloader Start -->
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
    <!-- Preloader Start -->

    <!-- header start -->
    <header>
        <div class="header-container">
            <div class="log">
                <img src="images/logo/logo.png" alt="">
            </div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="find_jobs.php">Find Jobs</a></li>
            </ul>
            <div onclick="dropDown()" id="dropdown">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-caret-down"></i>
                <div id="dropdown-menu">
                    <a href="">Applicants</a>
                    <a href="">Company</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- Hero Area Start-->
    <div class="hero-content">
        <div class="bg-blue"></div>
        <h1>Get Your Dream Job</h1>
    </div>
    <!-- Hero Area End -->
    <!-- jobs container  -->

    <div class="jobs-wrapper">
        <div class="filter-wrapper">
            <h3><i class="fa-solid fa-filter"></i>&nbsp;&nbsp;Filter Jobs</h3>
            <div class="filter-conatiner">
                <form action="" class="filter-form">
                    <div class="form-selector">
                        <label for="category">Job Category</label>
                        <select name="" id="">
                            <option value="All Category">All Category</option>
                            <option value="Banking and Insurance">Banking and Insurance</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="Sales and Marketing">Sales and Marketing</option>
                            <option value="Telecommunication">Telecommunication</option>
                            <option value="Construction">Construction</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Accounting and Auditing">Accounting and Auditing</option>
                        </select>
                    </div>
                    <div class="form-selector">
                        <label for="category">Location</label>
                        <select name="" id="">
                            <option value="Anywhere">Anywhere</option>
                            <option value="Western Province">Western Province</option>
                            <option value="Central Province">Central Province</option>
                            <option value="Southern Province">Southern Province</option>
                            <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                        </select>
                    </div>
                    <div class="radio-btn">
                        <h3>Sallery Between ($)</h3>
                        <label class="radio-container">Any
                            <input type="radio" name="option" checked>
                            <span class="square-checkmark"></span>
                        </label>

                        <label class="radio-container">1000-200
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>

                        <label class="radio-container">2000-3000
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>
                        <label class="radio-container">2000-3000
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>
                        <label class="radio-container">2000-3000
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>
                        <label class="radio-container">2000-3000
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>
                        <label class="radio-container">2000-3000
                            <input type="radio" name="option">
                            <span class="square-checkmark"></span>
                        </label>
                    </div>
                    <input type="submit" value="Filter">
                </form>
            </div>
        </div>
        <?php require_once('../client-side-web/job_list.php'); ?>


    </div>

    <!-- jobs container end -->


    <!-- Job List Area Start -->



    <!-- Pagination Start  -->
    <!-- <div class="pagination-area pb-115 text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-wrap d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
    <!--Pagination End  -->



    <!-- footer -->
    <div class="footer">
        <p class="bottom-text">
            JOB HORIZON | Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved
        </p>
    </div>
    <script src="js/main.js?v=<?php echo time() ?>"></script>
</body>

</html>

<?php mysqli_close($connection); ?>