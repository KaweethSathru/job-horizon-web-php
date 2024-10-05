<header>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <div class="logo">
                            <a href="home.php">
                                <img src="../client-side-web/assets/images/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="find_jobs.php">Find Jobs</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- People Icon with Dropdown -->
                            <div class="dropdown header-btn d-none f-right d-lg-block">
                                <?php if (isset($_SESSION['applicant_id'])) { ?>
                                    <!-- Show this dropdown if applicant is logged in -->
                                    <a href="#" class="btn btn-secondary dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i> Applicant
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="profile.php">Profile</a>
                                        <a class="dropdown-item" href="./login and register/logout.php">Logout</a>
                                    </div>
                                <?php } elseif (isset($_SESSION['company_id'])) { ?>
                                    <!-- Show this dropdown if company is logged in -->
                                    <a href="#" class="btn btn-secondary dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i> Company
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="profile.php">Profile</a>
                                        <a class="dropdown-item" href="./login and register/logout.php">Logout</a>
                                    </div>
                                <?php } else { ?>
                                    <!-- Show this dropdown if no one is logged in -->
                                    <a href="#" class="btn btn-secondary dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="./login and register/applicant_login.php">Applicant</a>
                                        <a class="dropdown-item" href="./login and register/company_login.php">Company</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- <header>
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
</header> -->