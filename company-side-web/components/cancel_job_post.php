<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['company_id'])) {
    header("Location: ../login and register/company_login.php");
} else {
    $company_id = $_SESSION['company_id'];
}

?>

<?php

if (isset($_GET['company_id'])) {

    // $company_id = mysqli_real_escape_string($connection, $_GET['company_id']);

    $query = "UPDATE jobs
              SET jobs_recycle_bin = 1
              WHERE company_id = '{$company_id}'
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: ../company_job_posts.php?message=post_removed');
    } else {
        header('Location: ../company_job_posts.php?error=failed_to_remove_post!');
    }
} else {
    header('Location: ../company_job_posts.php');
}

?>

<?php mysqli_close($connection); ?>