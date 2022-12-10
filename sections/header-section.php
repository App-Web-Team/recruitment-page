<head>
    <link rel="stylesheet" href="assets/styles/style-header.css">
</head>

<div class="container header-container py-3">
    <?php
    include "db/connection.php";

    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            echo '
            <div class="row text-center text-sm-left justify-content-center justify-content-sm-between mt-4">
                <div class="col-10 col-xs-5 col-sm-6">
                    <button id="btn-1" class="job-title text-capitalize">
                    '. $row["jobRole"] .'
                    </button>
                    <p class="job-id text-uppercase">
                        Job ID: '. $row["jobId"] .'
                    </p>
                </div>
                <div class="col-10 col-xs-5 col-sm-6 mt-3 my-xs-auto d-sm-flex justify-content-sm-end">
                    <a href="#apply-section">
                        <button class="btn btn-danger text-capitalize">
                            apply now
                        </button>
                    </a>
                </div>
            </div>
            <div class="row jd-row justify-content-center">
                <div class="col-10 col-sm-12">
                    <p class="job-desc mt-4">
                    '. $row["jobDesc"] .'
                    </p>
                </div>
            </div>
            ';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <!-- soon -->
    <div class="row mt-4 justify-content-center">
        <p class="end-text mb-5">
            Thats it for today. Will Update tomorrow
        </p>
    </div>
</div>