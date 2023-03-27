<?php

session_start();

if (!isset($_SESSION['logged-in'])) {
    header('location: ../login/login.php');
}

if (isset($_POST['view_sy']) || isset($_POST['sem'])) {
    header('location: programs-new.php?course=' . $_POST['course_name'] . "&sy=" . $_POST['sy'] . "&sem=" . $_POST['sem'] . "&year=" . $_POST['year']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/programs.css?v=<?php echo time(); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <title>CCS Programs | Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
</head>

<body>
    <div class="side-bar">
        <br>
        <div class="logo-details">
            <img class="logo" style="margin-left:2px" src="ccslogo.png" width="55" height="60">
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

            <?php if ($_SESSION['user_type'] == 'student') { ?>
                <li>
                    <a href="../apply/application-new.php">
                        <i class='bx bxs-edit'></i>
                        <span class="links-name">Application</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['user_type'] == 'adviser') { ?>
            <li>
                <a href="../apply/adviser-application.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Application | Adviser</span>
                </a>
            </li>
            <?php } ?>   
            
            <?php if ($_SESSION['user_type'] == 'admin') { ?>
                <li>
                    <a href="../apply/admin-application.php">
                        <i class='bx bxs-edit'></i>
                        <span class="links-name">Application | Admin</span>
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

            <?php if($_SESSION['user_type'] == 'admin') { ?>
            <li>
                <a href="programs-new.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">CCS Curriculum</span>
                </a>
            </li>
            <?php } ?>   


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
                $('.home-section').css('width', 'calc(100% - 60px)');
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
            <?php
            if (isset($_GET['course']) && isset($_GET['sy'])) {
            ?>
                <div class="table-container course-select" style="width: 100%; height: 700px; background-color: white">
                    <div class="header-program d-flex flex-row">
                        <h1 class=" text-center" style="margin: 0; font-weight: bold; font-size: 28px; width: 100%">BSCS CURRICULUMS<br>YEAR <?php echo $_GET['sy'] ?></h1>
                        
                    </div>
                    <div class="curriculum-container" style="margin-top: 20px ;overflow: auto; width: 100%; height: 90%; border: 1px gray solid; padding: 10px">
                        <div class="filter-div w-100 d-flex flex-row justify-content-between" style="min-height: 50px;">
                            <div class="d-flex flex-row align-items-center" style="width: 30%;">
                                <form class="d-flex flex-row align-items-center" style="width: 100%;" method="POST" action="programs-new.php">
                                    <select onchange="this.form.submit()" class="form-select sem-select" style="height: 40px; width: 50%; font-size: 15px !important; margin-right: 10px" name="sem" aria-label="semester">
                                        <option value="1" <?php if($_GET['sem'] == 1) echo "selected" ?>>1st Semester</option>
                                        <option value="2" <?php if($_GET['sem'] == 2) echo "selected" ?>>2nd Semester</option>
                                    </select>
                                
                                
                                    <select onchange="this.form.submit()" class="form-select year-select" style="height: 40px; width: 50%; font-size: 15px !important" name="year" aria-label="yearlevel">
                                        <option value="1" <?php if($_GET['year'] == 1) echo "selected" ?>>1st year</option>
                                        <option value="2" <?php if($_GET['year'] == 2) echo "selected" ?>>2nd year</option>
                                        <option value="3" <?php if($_GET['year'] == 3) echo "selected" ?>>3rd year</option>
                                        <option value="4" <?php if($_GET['year'] == 4) echo "selected" ?>>4th year</option>
                                    </select>
                                    <input hidden name="course_name" value="<?php echo $_GET['course'] ?>">
                                    <input hidden name="sy" value="<?php echo $_GET['sy'] ?>">

                                </form>
                            </div>

                            <button type="button" class="btn btn-success edit-curr-btn d-flex flex-row align-items-center" style="height: 40px; margin-top: 5px"><i class='bx bx-plus'></i>
                                <p class="add-text" style="color: white; margin-top: 8px; margin-left: 5px">Edit Curriculum</p>
                            </button>
                        </div>
                        <table class="table" id="subjectTable" style="margin: 0">
                            <thead>
                                <tr>
                                    <th style="font-size: 18px">Subject Code</th>
                                    <th style="font-size: 18px">Subject Name</th>
                                    <th style="font-size: 18px">Lec</th>
                                    <th style="font-size: 18px">Lab</th>
                                    <th style="font-size: 18px">Total Units</th>
                                    <th style="font-size: 18px">Pre-requisite</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../class/program.class.php';

                                $program = new Program();

                                foreach ($program->showSubjects($_GET['course'], $_GET['sy'], $_GET['sem'], $_GET['year']) as $value) { //
                                ?>
                                    <tr>
                                        <!-- always use echo to output PHP values -->
                                        <td style="font-size: 16px; width: 20%"><?php echo $value['subject_code'] ?></td>
                                        <td style="font-size: 16px; width: 30%"><?php echo $value['subject_name'] ?></td>
                                        <td style="font-size: 16px; width: 5%"><?php echo $value['lec_units'] ?></td>
                                        <td style="font-size: 16px; width: 5%"><?php echo $value['lab_units'] ?></td>
                                        <td style="font-size: 16px; width: 15%"><?php echo $value['lec_units'] + $value['lab_units'] ?></td>
                                        <td style="font-size: 16px"><?php echo $value['pre_req'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php
            } elseif (isset($_GET['course'])) {
            ?>
                <div class="table-container course-select" style="width: 100%; height: 700px; background-color: white">
                    <div class="header-program d-flex flex-row">
                        <h1 class=" text-center" style="margin: 0; margin-left: 100px;font-weight: bold; font-size: 28px; width: 100%">BSCS CURRICULUMS</h1>
                        <button type="button" class="btn btn-success add-course-btn d-flex flex-row"><i class='bx bx-plus'></i>
                            <p class="add-text">Add New</p>
                        </button>
                    </div>
                    <div class="curriculum-container" style="overflow: auto; width: 100%; height: 90%; border: 1px gray solid">
                        <table class="table" id="syTable" style="margin: 0">
                            <thead>
                                <tr>
                                    <th style="width: 85%; font-size: 18px">School Year</th>
                                    <th style="width: 15%; font-size: 18px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../class/program.class.php';

                                $program = new Program();

                                foreach ($program->showSchoolYears($_GET['course']) as $value) { //
                                ?>
                                    <form method="POST" action="programs-new.php">
                                        <input hidden name="course_name" value="<?php echo $_GET['course'] ?>">
                                        <input hidden name="sy" value="<?php echo $value['school_year'] ?>">
                                        <input hidden name="sem" value=1>
                                        <input hidden name="year" value=1>
                                        <tr>
                                            <!-- always use echo to output PHP values -->
                                            <td style="font-size: 16px">Year <?php echo $value['school_year'] ?></td>
                                            <td style="font-size: 16px"><button class="btn btn-warning" name="view_sy" type="submit" style="color: black !important; margin: 0; font-size: 16px; padding: 0 25px 0 25px">View</button></td>
                                        </tr>
                                    </form>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="table-container course-select" style="width: 100%; height: 700px; background-color: white">
                    <div class="header-program d-flex flex-row">
                        <h1 class=" text-center" style="margin: 0; margin-left: 100px;font-weight: bold; font-size: 28px; width: 100%">COURSE</h1>
                        <button type="button" class="btn btn-success add-course-btn d-flex flex-row"><i class='bx bx-plus'></i>
                            <p>Add New</p>
                        </button>
                    </div>
                    <div class="course-container d-flex flex-wrap flex-row justify-content-center" style="overflow: auto; width: 100%; padding-top: 20px; padding-bottom: 20px; height: 90%">
                        <a href="programs-new.php?course=BSCS" style="text-decoration: none;">
                            <button class="course-box d-flex justify-content-center align-items-center">
                                BSCS
                            </button>
                        </a>

                        <a>
                            <button class="course-box d-flex justify-content-center align-items-center">
                                BSIT
                            </button>
                        </a>



                    </div>
                    <h5 style="font-size: 20px; width: 100%; text-align:center">Select Department</h5>
                </div>
            <?php
            }
            ?>


        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


</body>

</html>