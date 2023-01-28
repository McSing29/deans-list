<?php

    session_start();

    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
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


    <title>Faculty and Staff</title>
</head>
<body>
    <div class="side-bar">
        <br>
        <div class="logo-details">
            <img class="logo" style="margin-left:2px"src="ccslogo.png" width ="130" height = "95">
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
                <a href="../application/application.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Application</span>
                </a>
            </li>
            
            <li>
                <a href="../listers/listers.php">
                <i class='bx bx-list-check'></i>
                    <span class="links-name">Dean's Listers</span>
                </a>
            </li>
            <li>
                <a href="../faculty/faculty.php" class ="active">
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
                $('.home-section').css('width', 'calc(100%)');
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
                <div class="table-heading">
                    <h3 class="table-title">Faculty and Staff</h3>
                    <?php
                        if($_SESSION['user_type'] == 'admin'){ 
                    ?>
                        <a href="addfaculty.php" class="button"><center>Add Faculty</center></a>
                    <?php
                        }
                    ?>
                </div>
                <br>
                <?php
                require '../class/database.php';
                ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Academic Rank</th>
                            <th>Email</th>
                            <th>Status</th>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){ 
                            ?>
                                <th class="action">Action</th>
                            <?php
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once '../class/faculty.class.php';

                            $faculty = new Faculty();
                            //We will now fetch all the records in the array using loop
                            //use as a counter, not required but suggested for the table
                            $i = 1;
                            //loop for each record found in the array
                            foreach ($faculty->show() as $value){ //start of loop
                        ?>
                            <tr>
                                <!-- always use echo to output PHP values -->
                                <td><?php echo $i ?></td>
                                <td> <img src="img/<?php echo $value["img"]; ?>" width = 100 title="<?php echo $value['img']; ?>"> </td>
                                <td><?php echo $value['firstname'] . ' ' . $value['lastname'] ?>
                                <td><?php echo $value['rank'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['status'] ?></td>
                                <?php
                                    if($_SESSION['user_type'] == 'admin'){
                                ?>
                                    <td>
                                        <div class="action">
                                            <a class="action-edit" href="editfaculty.php?id=<?php echo $value['id'] ?>">Edit</a>
                                            <br></br><a class="action-delete" href="deletefaculty.php?id=<?php echo $value['id'] ?>">Delete</a>
                                        </div>
                                    </td>
                                <?php
                                    }
                                ?>
                            </tr>
                            <?php
                                $i++;
                            //end of loop
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>