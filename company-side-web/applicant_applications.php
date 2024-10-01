<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['applicant_id'])) {
    header("Location: ../client-side-web/login and register/applicant_login.php");
} else {
    $applicant_id = $_SESSION['applicant_id'];
}

?>

<?php

$applications_list = " ";

$query = "SELECT
          applications.*,
          jobs.*,
          companies.*
          FROM
          applications
          INNER JOIN jobs ON applications.job_id = jobs.job_id
          INNER JOIN companies ON applications.company_id = companies.company_id
          WHERE
          applications.applicant_id = '{$applicant_id}'
          AND
          applications.application_recycle_bin = 0
          ORDER BY
          applications.application_id
          DESC";

$result = mysqli_query($connection, $query);


if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while ($record = mysqli_fetch_array($result)) {

            $applications_list .= "<tbody>";
            $applications_list .= "<tr>";
            $applications_list .= "<td class=\"text-left\"> {$record['application_id']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['company_name']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['category']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['job_role']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['company_email']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['location']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['posted_date']} </td>";
            $applications_list .= "<td class=\"text-left\"> {$record['deadline']} </td>";
            $applications_list .= "<td class=\"text-left\"> <a href=\"../client-side-web/components/cancel_application.php?application_id={$record['application_id']}\" onclick = \"return confirm('Are you sure to want cancel this application?');\"> <button class=\"cancelBtn\">Cancel</button> </a> </td>";
            $applications_list .= "</tr>";
            $applications_list .= "</tbody>";
        }
    } else {
        $applications_list .= "<tbody><tr><div class='filter-warning'><h1>Ooops... No Any Applications Found!</h1></div></tr></tbody>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireME | Applications</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <link rel="stylesheet" href="../client-side-web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client-side-web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client-side-web/css/price_rangs.css">
    <link rel="stylesheet" href="../client-side-web/css/flaticon.css">
    <link rel="stylesheet" href="../client-side-web/css/slicknav.css">
    <link rel="stylesheet" href="../client-side-web/css/animate.min.css">
    <link rel="stylesheet" href="../client-side-web/css/magnific-popup.css">
    <link rel="stylesheet" href="../client-side-web/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../client-side-web/css/themify-icons.css">
    <link rel="stylesheet" href="../client-side-web/css/slick.css">
    <link rel="stylesheet" href="../client-side-web/css/nice-select.css">
    <link rel="stylesheet" href="../client-side-web/css/style.css">
    <link rel="stylesheet" href="../client-side-web/css/footer.css">
    <link rel="stylesheet" href="../client-side-web/css/tables.css">

</head>

<body>
    <?php require_once('../client-side-web/components/header.php'); ?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../client-side-web/assets/images/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>My Applications</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

        <section class="featured-job-area filterContainer">

            <div class="tableContainer">
                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <table id="customers">
                            <tr>
                                <th>Application ID</th>
                                <th>Company Name</th>
                                <th>Job Category</th>
                                <th>Applied Job Role</th>
                                <th>Company Email</th>
                                <th>Location</th>
                                <th>Job Posted Date</th>
                                <th>Deadline</th>
                                <th>Options</th>
                            </tr>
                            <tr>
                                <?php echo $applications_list ?>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <?php require_once('../client-side-web/components/footer.php'); ?>

        <!-- JS here -->

        <!-- All JS Custom Plugins Link Here here -->
        <script src="../client-side-web/components/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="../client-side-web/components/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../client-side-web/components/js/popper.min.js"></script>
        <script src="../client-side-web/components/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="../client-side-web/components/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Range -->
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