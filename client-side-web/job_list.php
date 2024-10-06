<div class="job-card-container">
    <?php

    $query = "SELECT * FROM jobs";

    $result1 = mysqli_query($connection, $query);
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="count-job mb-35">
                <span><?php echo mysqli_num_rows($result1) ?> Jobs found</span>
                <!-- <div class="select-job-items">
                            <span>Sort by</span>
                            <select name="select">
                                <option value="">None</option>
                                <option value="">job list</option>
                                <option value="">job list</option>
                                <option value="">job list</option>
                            </select>
                        </div> -->
            </div>
        </div>
    </div>
    <?php

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
                                <img src="../assets/uploads/companies/company-logo/<?php echo $record2['company_logo'] ?>" alt="">
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

                        

                    <?php
                    }

                    ?>

            <?php

                }
            } ?>

    <?php }
    } else {
        echo "DB failed!";
    }

    ?>

</div>