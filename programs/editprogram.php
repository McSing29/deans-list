<?php

    require_once '../functions/functions.php';
    require_once '../class/program.class.php';

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
    $program = new Program;
    //if add program is submitted
    if(isset($_POST['save'])){
        //sanitize user inputs
        $program->id = $_POST['program-id'];
        $program->code = htmlentities($_POST['code']);
        $program->old_code = htmlentities($_POST['old-code']);
        $program->description = htmlentities($_POST['description']);
        $program->years = $_POST['years'];
        $program->level = $_POST['level'];
        $program->cet = htmlentities($_POST['cet']);
        $program->status = 'Not Set';
        if(isset($_POST['status'])){
            $program->status = $_POST['status'];
        }
        if(validate_add_program($_POST)){
            if($program->edit()){
                //redirect user to program page after saving
                header('location: programs.php');
            }
        }
    }else{
        if ($program->fetch($_GET['id'])){
            $data = $program->fetch($_GET['id']);
            $program->id = $data['id'];
            $program->code = $data['code'];
            $program->old_code = $data['code'];
            $program->description = $data['description'];
            $program->years = $data['years'];
            $program->level = $data['level'];
            $program->cet = $data['cet'];
            $program->status = $data['status'];
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


    <title>Edit Program | Dean's List Application System - CCS</title>
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
                <a href="../faculty/faculty.php" >
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>

            <li>
                <a href="../programs/programs.php" class ="active" >
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
                <h3 class="table-title">Update Program</h3>
                <a class="back" href="programs.php"><i class='bx bx-caret-left'></i>Back</a>
            </div>
            <div class="add-form-container">
                <form class="add-form" action="editprogram.php" method="post">
                    <input type="text" hidden name="program-id" value="<?php echo $program->id; ?>">
                    <input type="text" hidden name="old-code" value="<?php echo $program->old_code; ?>">
                    
                    <label for="code">Program Code</label>
                    <input type="text" id="code" name="code" required placeholder="Enter Program Code" value="<?php if(isset($_POST['code'])) { echo $_POST['code']; } else { echo $program->code; }?>">
                    <?php
                        if(isset($_POST['save']) && !validate_program_code($_POST)){
                    ?>
                                <p class="error">Program Code is invalid. Trailing spaces will be ignored.</p>
                    <?php
                        }
                        else if(isset($_POST['save']) && !validate_program_code_duplicate($_POST)){
                    ?>
                                <p class="error">Program Code already exist.</p>
                    <?php
                        }
                    ?>
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required placeholder="Enter Program Description" value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } else { echo $program->description; }?>">
                    <?php
                        if(isset($_POST['save']) && !validate_program_desc($_POST)){
                    ?>
                                <p class="error">Program description is invalid. Trailing spaces will be ignored.</p>
                    <?php
                        }
                    ?>
                    <label for="years">Years to Complete</label>
                    <input type="number" id="years" min="1" max="5" name="years" required value="<?php if(isset($_POST['years'])) { echo $_POST['years']; } else { echo $program->years; }?>">
                    
                    <label for="level">Level</label>
                    <select name="level" id="level">
                        <option value="None" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'None') echo ' selected="selected"'; } elseif ($program->level == 'None') echo ' selected="selected"'; ?>>--Select--</option>
                        <option value="Diploma" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'Diploma') echo ' selected="selected"'; } elseif ($program->level == 'Diploma') echo ' selected="selected"'; ?>>Diploma</option>
                        <option value="Associate" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'Associate') echo ' selected="selected"'; } elseif ($program->level == 'Associate') echo ' selected="selected"'; ?>>Associate</option>
                        <option value="Bachelor" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'Bachelor') echo ' selected="selected"'; } elseif ($program->level == 'Bachelor') echo ' selected="selected"'; ?>>Bachelor</option>
                        <option value="Masteral" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'Masteral') echo ' selected="selected"'; } elseif ($program->level == 'Masteral') echo ' selected="selected"'; ?>>Masteral</option>
                        <option value="Doctorate" <?php if(isset($_POST['level'])) { if ($_POST['level'] == 'Doctorate') echo ' selected="selected"'; } elseif ($program->level == 'Doctorate') echo ' selected="selected"'; ?>>Doctorate</option>
                    </select>
                    <?php
                        if(isset($_POST['save']) && !validate_level($_POST)){
                    ?>
                                <p class="error">Please select a program level from the dropdown.</p>
                    <?php
                        }
                    ?>
                    <label for="cet">CET Requirements</label>
                    <input type="text" id="cet" step="any" name="cet" required value="<?php if(isset($_POST['cet'])) { echo $_POST['cet']; } else { echo $program->cet; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_cet($_POST)){
                    ?>
                                <p class="error">Please input CET >= 55.</p>
                    <?php
                        }
                    ?>

                    <div>
                        <label for="status">Status</label><br>
                        <label class="container" for="Offering">Offering
                            <input type="radio" name="status" id="Offering" value="Offering" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Offering') echo ' checked'; } elseif ($program->status == 'Offering') echo ' checked'; ?>>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container" for="Phase-Out">Phase-Out
                            <input type="radio" name="status" id="Phase-Out" value="Phase-Out" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Phase-Out') echo ' checked'; } elseif ($program->status == 'Phase-Out') echo ' checked'; ?>>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php
                        if(isset($_POST['save']) && !validate_status($_POST)){
                    ?>
                                <p class="error">Please select program status.</p>
                    <?php
                        }
                    ?>
                    <input type="submit" class="button" value="Save Program" name="save" id="save">
                </form>
            </div>
        </div>
    </div>
</body>
</html>