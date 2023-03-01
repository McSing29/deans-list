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