<?php

    session_start();
    
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    
    require_once '../tools/variables.php';
    $page_title = 'Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
?>


<body>
    <?php
        require_once '../includes/navbar.php'
    ?>
        <div class="home-content">
            <?php
                require_once '../includes/sidebar.php'
            ?>
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