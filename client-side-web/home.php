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

    <link rel="stylesheet" href="style/style.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

    <!-- header start -->
    <?php include_once("./components/header.php") ?>
    <!-- header end -->

    

        <!-- home section -->
        <div class="section1">
            <div id="home">
                <div class="home-container">
                    <h1>Find the <br> most exciting <br> startup jobs</h1>
                    <form action="">
                        <div class="finder-form">
                            <input type="text" placeholder="Job Role or Keyword">
                            <div></div>
                            <select name="" id="">
                                <option value="">Anywhere</option>
                                <option value="">Western Province</option>
                            </select>
                            <button class="button">Find Job</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- home section end -->
        <!-- Service section -->
        <section>
            <div class="service-wrapper">
                <p>Jobs From Over <?php echo $companyCount ?> Local and International Companies</p>
                <h1>Browse Top Categories</h1>
                <div class="item-container">
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $biCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $uiuxCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $uiuxCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $salesAndMarketingCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $telCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $conCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $itCount ?>)</p>
                    </div>
                    <div>
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>Banking And Insurance</h3>
                        <p>(<?php echo $accCount ?>)</p>
                    </div>

                </div>
                <a href="find_jobs.php">BROWSE ALL SECTORS</a>
            </div>
        </section>
        <!-- Service section end -->

        <!-- How Apply Process -->
        <section>
            <div class="apply-conatiner">
                <p>APPLY PROCESS</p>
                <h1>How it works</h1>
                <div class="apply-card-container">
                    <div class="apply-card">
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>1. Search a job</h3>
                        <p>Search your favorite job from using search bar or find job page. You can also filter jobs according to your requirement.</p>
                    </div>
                    <div class="apply-card">
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>2. Upload your CV, Cover Letter & Apply for Job</h3>
                        <p>After finding your wishing job go and apply for the job. Make sure to give correct information and upload your CV and cover letter.</p>
                    </div>
                    <div class="apply-card">
                        <img src="images/icons/tour-guide.png" alt="">
                        <h3>3. Get your job</h3>
                        <p>You will be informed or contact soon by from your applied company. Good luck!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- How Apply Process end -->



        <!-- Recent jobs -->
        <section>
            <div class="recent">
                <p>FIND RECENT PROJECTS</p>
                <h1>Recnet Jobs</h1>
                <div class="job-card-container">
                    <?php

                    $query = "SELECT * FROM jobs
                    ORDER BY posted_date DESC
                    LIMIT 5";

                    $result1 = mysqli_query($connection, $query);

                    if ($result1) { ?>

                        <?php

                        if (mysqli_num_rows($result1) > 0) { ?>

                            <?php while ($record1 = mysqli_fetch_array($result1)) {

                                $_GET['j_id'] = $record1['job_id'];
                                $com_id = $record1['company_id'];
                                $_GET['com_id'] = $record1['company_id'];

                                $query2 = "SELECT * FROM companies WHERE company_id = '{$com_id}' LIMIT 1";
                                $result2 = mysqli_query($connection, $query2);

                                if ($result2) {

                                    while ($record2 = mysqli_fetch_array($result2)) {

                            ?>
                                        <div class="job-card">
                                            <div class="details-container">
                                                <img class="companyLogo" src="../assets/uploads/companies/company-logo/<?php echo $record2['company_logo'] ?>" alt="<?php echo $record2['company_logo']; ?>">
                                                <div class="content-1">
                                                    <h4><?php echo strtoupper($record1['job_role']) ?></h4>
                                                    <div class="sub-row">
                                                        <p><?php echo $record2['company_name'] ?></p>
                                                        <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<?php echo $record1['location'] ?></p>
                                                        <p>$<?php echo $record1['salary'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-2">
                                                <a href="">Full Time</a>
                                                <p><?php echo $record1['posted_date'] ?></p>
                                            </div>
                                        </div>
                    <?php }
                                }
                            }
                        }
                    } ?>
                    <!-- <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div>
                    <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div>
                    <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div>
                    <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div>
                    <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div>
                    <div class="job-card">
                        <div class="details-container">
                            <img src="images/logo/COMPANY_IMG-63a173e10942f4.85504949.png" alt="">
                            <div class="content-1">
                                <h4>ASSITANT MANAGER</h4>
                                <div class="sub-row">
                                    <p>Uniliver</p>
                                    <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Western Provice</p>
                                    <p>$100</p>
                                </div>
                            </div>
                        </div>
                        <div class="content-2">
                            <a href="">Full Time</a>
                            <p>2022-12-17 22:21:08</p>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>
        <!-- recent jobs end -->


        <!-- Online CV Area Start -->
        <section>
            <div class="cv-area">
                <div class="bg-blue"></div>
                <div class="content-cv-area">
                    <p>Upload Your CV & Cover Letter</p>
                    <h1>Make a Difference with Your Online Resume!</h1>
                    <a href="find_jobs.php">FIND A JOB & UPLOAD YOUR CV & COVER LETTER</a>
                </div>
            </div>
        </section>
        <!-- Online CV Area End-->



    <?php require_once('../client-side-web/components/footer.php'); ?>

    <!-- JS here -->

    <!--  -->

    <script src="js/main.js?v=<?php echo time() ?>"></script>

</body>

</html>

<?php mysqli_close($connection); ?>