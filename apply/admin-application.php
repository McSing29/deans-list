<?php

session_start();

if (!isset($_SESSION['logged-in'])) {
    header('location: ../login/login.php');

}
$conn = mysqli_connect('localhost', 'root', '', 'deanslist');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link href="../css/admin-application.css?v=<?php echo time(); ?>" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <title>Dean's List Application | Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
</head>

<body>
    <div class="side-bar">
        <br>
        <div class="logo-details">
            <img class="logo" style="margin-left:2px" src="../img/ccslogo.png" width="55" height="60">
            <span class="logo-name">Dean's List Application <br> System</span>
        </div>
        <br>
        <ul class="nav-links">
            <li>
                <a href="../dashboard/dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            
            <?php if($_SESSION['user_type'] == 'student') { ?>
            <li>
                <a href="../apply/application-new.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Application</span>
                </a>
            </li>
            <?php } ?> 

            <?php if($_SESSION['user_type'] == 'adviser') { ?>
            <li>
                <a href="../apply/admin-application.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Admin application</span>
                </a>
            </li>
            <?php } ?>   

            <li>
                <a href="../listers/listers.php">
                    <i class='bx bx-list-check'></i>
                    <span class="links-name">Dean's Listers</span>
                </a>
            </li>
            <li>
                <a href="../faculty/faculty.php">
                    <i class='bx bx-group'></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>

            <li>
                <a href="../programs/programs.php">
                    <i class='bx bx-book-reader'></i>
                    <span class="links-name">Programs</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Settings</span>
                </a>
            </li>
            <hr class="line">
            <li id="logout-link">
                <a class="logout-link" href="../login/logout.php" title="Logout">
                    <i class='bx bx-log-out-circle'></i>
                    <span class="links-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="logout-dialog" class="dialog" title="Logout">
        <p><span>Are you sure you want to logout?</span></p>
    </div>

    <script>
        $(document).ready(function() {
            $("#logout-dialog").dialog({
                resizable: false,
                draggable: false,
                height: "auto",
                width: 400,
                modal: true,
                autoOpen: false
            });
            $(".logout-link").on('click', function(e) {
                e.preventDefault();
                var theHREF = $(this).attr("href");

                $("#logout-dialog").dialog('option', 'buttons', {
                    "Yes": function() {
                        window.location.href = theHREF;
                    },
                    "No": function() {
                        $(this).dialog("close");
                    }
                });

                $("#logout-dialog").dialog("open");
            });
        });
    </script>

    <section class="home-section">
        <!-- NAVBAR -->
        <nav>
            <div class="side-bar-button">
                <i class='bx bx-menu small'></i>
                <i class='bx bx-menu large'></i>
            </div>
            <div class="profile-details">
                <i class='bx bx-user'></i>
                <?php echo '<span class="admin-name">' . $_SESSION['user_firstname'] . ' ' . $_SESSION['user_lastname'] . '</span>'; ?>
            </div>
        </nav>

        <script>
            var reference = (function self() {
                if (sessionStorage.getItem("sidebar") == "small") {
                    small();
                } else {
                    large();
                }
            }());

            $('.bx-menu.small').on('click', function() {
                small();
            });
            $('.bx-menu.large').on('click', function() {
                large();
            });

            function small() {
                $('.bx-menu.small').hide();
                $('.bx-menu.large').show();

                $('.side-bar').css('width', '60px');
                $('.home-section').css('width', 'calc(100%)');
                $('.home-section').css('left', '60px');
                $('.home-section nav').css('width', 'calc(100% - 60px)');
                $('.home-section nav').css('left', '60px');

                sessionStorage.setItem("sidebar", "small");
            }

            function large() {
                $('.bx-menu.small').show();
                $('.bx-menu.large').hide();

                $('.side-bar').css('width', '250px');
                $('.home-section').css('width', 'calc(100% - 100px)');
                $('.home-section').css('left', '170px');
                $('.home-section nav').css('width', 'calc(100% - 250px)');
                $('.home-section nav').css('left', '250px');

                sessionStorage.setItem("sidebar", "large");
            }
        </script>
        <!-- NAVBAR -->
        

        <div class="home-content">
            <div class="main-content">
                <h1>Applications</h1>
                <div class="content-table-container">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="pending nav-link d-flex flex-row active" aria-current="page" href="#pending" data-bs-toggle="tab">Pending <div class="number-pending d-flex flex-row justify-content-center align-items-center" style="background-color: red; padding: 2px; border-radius: 5px; font-size: 12px; width: 15px ;height: 20px; padding: 3px; color: white; margin-left: 4px"><?php $sql = "SELECT * FROM dean_applicants WHERE status = 'pending'";$result = mysqli_query($conn, $sql);echo mysqli_num_rows($result) ?></div> </a>
                        </li>
                        <li class="nav-item">
                            <a class="accepted nav-link d-flex flex-row" href="#accepted" data-bs-toggle="tab">Accepted <div class="number-pending d-flex flex-row justify-content-center align-items-center" style="background-color: red; padding: 2px; border-radius: 5px; font-size: 12px; width: 15px ;height: 20px; padding: 3px; color: white; margin-left: 4px"><?php $sql = "SELECT * FROM dean_applicants WHERE status = 'Accepted'";$result = mysqli_query($conn, $sql);echo mysqli_num_rows($result) ?></div> </a>
                        </li>
                        <li class="nav-item">
                            <a class="declined nav-link d-flex flex-row" href="#declined" data-bs-toggle="tab">Declined <div class="number-pending d-flex flex-row justify-content-center align-items-center" style="background-color: red; padding: 2px; border-radius: 5px; font-size: 12px; width: 15px ;height: 20px; padding: 3px; color: white; margin-left: 4px"><?php $sql = "SELECT * FROM dean_applicants WHERE status = 'Declined'";$result = mysqli_query($conn, $sql);echo mysqli_num_rows($result) ?></div> </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="pending">
                            <div class="filter-div d-flex flex-row ">
                                <p>Type</p>
                                <select class="form-select type">
                                    <option selected>All</option>
                                </select>
                                <p>Program</p>
                                <select class="form-select program">
                                    <option selected>All</option>
                                    <option>Computer Science</option>
                                    <option>Information Technology</option>
                                </select>
                                <p>Search</p>
                                <input class="form-control search-bar" type="text" placeholder="Enter Student Name Here">
                            </div>
                            <!-- Table for Pending Applicants --> 
                            <?php 
                                $sql = "SELECT * FROM dean_applicants WHERE status = 'pending'";
                                $result = mysqli_query($conn, $sql);
                            ?>
                            <div class="applicant-table-div">
                                <table class="table" id="pendingTable">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 15%">Name</th>
                                            <th scope="col" style="width: 11%">Year Level</th>
                                            <th scope="col" style="width: 11%">Curriculum</th>
                                            <th scope="col" style="width: 9%">Section</th>
                                            <th scope="col" style="width: 11%">Total GPA</th>
                                            <th scope="col" style="width: 25%">Email Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                if ($row["year_level"] % 10 == 1 && $row["year_level"] != 11) {
                                                    $suffix = "st";
                                                } else if ($row["year_level"] % 10 == 2 && $row["year_level"] != 12) {
                                                $suffix = "nd";
                                                } else if ($row["year_level"] % 10 == 3 && $row["year_level"] != 13) {
                                                $suffix = "rd";
                                                } else {
                                                $suffix = "th";
                                                }
                                                $user_id = $row["user_id"];
                                                echo "<tr><td>". $row["name"]. "</td><td>". $row["year_level"] . $suffix ." Year</td><td>BS". strtoupper($row["curriculum"]) ."</td><td>Section ". $row["section"] ."</td><td>". $row["total_gpa"] ."</td><td>". $row["email"] ."</td>". '<td>
                                                <form action="update.php" method="post">
                                                    <button type="button submit" name="accept" class="btn btn-success accept" data-bs-toggle="modal" data-bs-target="#confirmModal">Accept</button> 
                                                    <button type="button submit" name="decline" class="btn btn-danger decline">Decline</button>
                                                    <input type="hidden" name="user_id" value="'.$user_id.'">
                                                </form></td>' ."</tr>";
                                            }
                                            
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="accepted">
                            <div class="filter-div d-flex flex-row ">
                                <p>Type</p>
                                <select class="form-select type">
                                    <option selected>All</option>
                                </select>
                                <p>Program</p>
                                <select class="form-select program">
                                    <option selected>All</option>
                                    <option>Computer Science</option>
                                    <option>Information Technology</option>
                                </select>
                                <p>Search</p>
                                <input class="form-control search-bar" type="text" placeholder="Enter Student Name Here">
                            </div>
                            <?php 
                                $sql = "SELECT * FROM dean_applicants WHERE status = 'Accepted'";
                                $result = mysqli_query($conn, $sql);
                            ?>
                            <!-- Table for Accepted Applicants -->
                            <div class="applicant-table-div">
                                <table class="table" id="acceptedTable">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="min-width: 15%">Name</th>
                                            <th scope="col" style="min-width: 11%">Year Level</th>
                                            <th scope="col" style="min-width: 11%">Curriculum</th>
                                            <th scope="col" style="min-width: 9%">Section</th>
                                            <th scope="col" style="min-width: 11%">Total GPA</th>
                                            <th scope="col" style="min-width: 25%">Email Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if ($row["year_level"] % 10 == 1 && $row["year_level"] != 11) {
                                                        $suffix = "st";
                                                    } else if ($row["year_level"] % 10 == 2 && $row["year_level"] != 12) {
                                                    $suffix = "nd";
                                                    } else if ($row["year_level"] % 10 == 3 && $row["year_level"] != 13) {
                                                    $suffix = "rd";
                                                    } else {
                                                    $suffix = "th";
                                                    }
                                                    $user_id = $row["user_id"];
                                                    echo "<tr><td>". $row["name"]. "</td><td>". $row["year_level"] . $suffix ." Year</td><td>BS". strtoupper($row["curriculum"]) ."</td><td>Section ". $row["section"] ."</td><td>". $row["total_gpa"] ."</td><td>". $row["email"] ."</td></tr>";
                                                }
                                                
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="declined">
                            <div class="filter-div d-flex flex-row ">
                                <p>Type</p>
                                <select class="form-select type">
                                    <option selected>All</option>
                                </select>
                                <p>Program</p>
                                <select class="form-select program">
                                    <option selected>All</option>
                                    <option>Computer Science</option>
                                    <option>Information Technology</option>
                                </select>
                                <p>Search</p>
                                <input class="form-control search-bar" type="text" placeholder="Enter Student Name Here">
                            </div>
                            <?php 
                                $sql = "SELECT * FROM dean_applicants WHERE status = 'Declined'";
                                $result = mysqli_query($conn, $sql);
                            ?>
                            <!-- Table for Declined Applicants -->
                            <div class="applicant-table-div">
                                <table class="table" id="declinedTable">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="min-width: 15%">Name</th>
                                            <th scope="col" style="min-width: 11%">Year Level</th>
                                            <th scope="col" style="min-width: 11%">Curriculum</th>
                                            <th scope="col" style="min-width: 9%">Section</th>
                                            <th scope="col" style="min-width: 11%">Total GPA</th>
                                            <th scope="col" style="min-width: 25%">Email Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if ($row["year_level"] % 10 == 1 && $row["year_level"] != 11) {
                                                        $suffix = "st";
                                                    } else if ($row["year_level"] % 10 == 2 && $row["year_level"] != 12) {
                                                    $suffix = "nd";
                                                    } else if ($row["year_level"] % 10 == 3 && $row["year_level"] != 13) {
                                                    $suffix = "rd";
                                                    } else {
                                                    $suffix = "th";
                                                    }
                                                    $user_id = $row["user_id"];
                                                    echo "<tr><td>". $row["name"]. "</td><td>". $row["year_level"] . $suffix ." Year</td><td>BS". strtoupper($row["curriculum"]) ."</td><td>Section ". $row["section"] ."</td><td>". $row["total_gpa"] ."</td><td>". $row["email"] ."</td></tr>";
                                                }
                                                
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title">Approve Selected Student?</h5>
                    </div>
                    <div class="modal-body text-center">
                        <h1>By clicking approve you are permitting the student to further proceed with the application.</h1>
                        <div class="modal-btn-div">
                            <button type="submit" name="submit" class="btn btn-success confirmBtn">Confirm</button>
                            <button type="button" class="btn btn-danger cancelBtn" data-bs-dismiss="modal">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    $('#pendingTable').dataTable({
        "lengthChange": false,
        "searching": false,
        "columns": [
            { "width": "15%" },
            { "width": "11%" },
            { "width": "11%" },
            { "width": "9%" },
            { "width": "11%" },
            { "width": "25%" },
            { "width": "18%" },
        ],
        "autoWidth": false
    });
    $('#acceptedTable').dataTable({
        "lengthChange": false,
        "searching": false,
        "columns": [
            { "width": "15%" },
            { "width": "11%" },
            { "width": "11%" },
            { "width": "9%" },
            { "width": "11%" },
            { "width": "25%" },
            { "width": "18%" },
        ],
        "autoWidth": false
    });
    $('#declinedTable').dataTable({
        "lengthChange": false,
        "searching": false,
        "columns": [
            { "width": "15%" },
            { "width": "11%" },
            { "width": "11%" },
            { "width": "9%" },
            { "width": "11%" },
            { "width": "25%" },
            { "width": "18%" },
        ],
        "autoWidth": false
    });
</script>

</html>