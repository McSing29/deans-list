<?php

    require_once '../functions/functions.php';
    require_once '../class/faculty.class.php';
    require_once '../class/database.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then code and html below will be executed

    //if add faculty is submitted
    if(isset($_POST['save'])){

        $faculty = new Faculty();
        //sanitize user inputs
        $faculty->img = htmlentities($_POST['img']);
        $faculty->firstname = htmlentities($_POST['firstname']);
        $faculty->lastname = htmlentities($_POST['lastname']);
        $faculty->rank = $_POST['rank'];
        $faculty->email = htmlentities($_POST['email']);
        if(isset($_POST['status'])){
            $faculty->status = $_POST['status'];
        }
        if(validate_add_faculty($_POST)){
            if($faculty->add()){
                //redirect user to faculty page after saving
                header('location: faculty.php');
            }
        }
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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <title>Add Faculty | Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
</head>
<body>
    <div class="side-bar">
        <br>
        <div class="logo-details">
            <img class="logo" style="margin-left:2px"src="ccslogo.png" width ="55" height = "60">
            <span class="logo-name">Dean's List Application <br> System</span>
		</div>
        <br>
        <ul class="nav-links">
            <li>
                <a href="../dashboard/dashboard.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../apply/application-new.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Application</span>
                </a>
            </li>
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
                <a href="../faculty/faculty.php" >
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>

            <li>
                <a href="../programs/programs.php" >
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
                    "Yes" : function() {
                        window.location.href = theHREF;
                    },
                    "No" : function() {
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
                <?php echo '<span class="admin-name">'.$_SESSION['user_firstname'].' '.$_SESSION['user_lastname'].'</span>'; ?>
            </div>
        </nav>

        <script>
        var reference = (function self(){
            if(sessionStorage.getItem("sidebar") == "small"){
                small();
            }else{
                large();
            }
        }());

        $('.bx-menu.small').on('click', function(){
            small();
        });
        $('.bx-menu.large').on('click', function(){
            large();
        });

        function small(){
            $('.bx-menu.small').hide();
            $('.bx-menu.large').show();

            $('.side-bar').css('width', '60px');
            $('.home-section').css('width', 'calc(100% - 60px)');
            $('.home-section').css('left', '60px');
            $('.home-section nav').css('width', 'calc(100% - 60px)');
            $('.home-section nav').css('left', '60px');

            sessionStorage.setItem("sidebar", "small");
        }

        function large(){
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
        <div class="table-container">
            <div class="table-heading form-size">
                <h3 class="table-title">Add New Faculty</h3>
                <a class="back" href="faculty.php"><i class='bx bx-caret-left'></i>Back</a>
            </div>
            <br>
            <div class="add-form-container">
                <form class="add-form" action="addfaculty.php" method="post">
                    <label for="img">Image</label>
                    <input type="file" name="img" id = "img" accept=".jpg, .jpeg, .png" value="">

                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required placeholder="Enter first name" value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_first_name($_POST)){
                    ?>
                                <p class="error">First name is invalid. Trailing spaces will be ignored.</p>
                    <?php
                        }
                    ?>
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required placeholder="Enter last name" value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_last_name($_POST)){
                    ?>
                                <p class="error">Last name is invalid. Trailing spaces will be ignored.</p>
                    <?php
                        }
                    ?>
                   <label for="rank">Academic Rank</label>
                    <input type="text" id="rank" name="rank" required placeholder="Enter rank" value="<?php if(isset($_POST['rank'])) { echo $_POST['rank']; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_rank($_POST)){
                    ?>
                                <p class="error">Rank is invalid. Trailing spaces will be ignored.</p>
                    <?php
                        }
                    ?>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_email($_POST)){
                    ?>
                                <p class="error">Email is invalid. Use only @wmsu.edu.ph</p>
                    <?php
                        }
                    ?>
                   <div>
                        <label for="status">Faculty Status</label><br>
                        <label class="container" for="Active">Active
                            <input type="checkbox" name="status" id="Active" value="Active" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Active') echo ' checked'; } ?>>
                            <span class="checkmark"></span>
                        </label><br>
                        <label class="container" for="Inactive">Inactive
                            <input type="checkbox" name="status" id="Inactive" value="inactive" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Inactive') echo ' checked'; } ?>>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php
                        if(isset($_POST['save']) && !validate_status($_POST)){
                    ?>
                                <p class="error">Please select Faculty status.</p>
                    <?php
                        }
                    ?>
                    <input type="submit" class="button" value="Save Faculty" name="save" id="save">
                </form>
            </div>
        </div>
    </div>
</body>
</html>