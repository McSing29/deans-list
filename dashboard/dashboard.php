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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="side-bar">
        <br>
        <div class="logo-details">
            <img class="logo" style="margin-left:2px"src="ccslogo.png" width ="130" height = "95">
            <span class="logo-name">Dean's List Application <br> System</span>
		</div>
        <br></br>
        <ul class="nav-links">
            <li>
                <a href="../dashboard/dashboard.php" class ="active">
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
                <a href="../faculty/faculty.php">
                    <i class='bx bx-group' ></i>
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
                <div class="overview-boxes">
                        <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Products</div>
                                    <div class="number">6969</div>
                                    <div class="indicator">
                                        
                                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                                    </div>
                                </div>
                            <i class='bx bx-shopping-bag'></i>
                
                        </div>

                        <div class="box">
                                    <div class="right-side">
                                        <div class="box-topic">Orders</div>
                                        <div class="number">9696</div>
                                        <div class="indicator">
                                            
                                            <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                                        </div>
                                    </div>
                                <i class='bx bx-cart-download'></i>
                        </div>

                        <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Stocks</div>
                                    <div class="number">8888</div>
                                    <div class="indicator">
                                        
                                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                                    </div>
                                </div>
                            <i class='bx bx-coin-stack'></i>
                        </div>

                        <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Revenue</div>
                                    <div class="number">8080</div>
                                    <div class="indicator">
                                        
                                    <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                                    </div>
                                </div>
                            <i class='bx bx-bar-chart'></i>
                        </div>

                </div>

        </div>

    </section>

</body>

</html>