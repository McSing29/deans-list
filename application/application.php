<?php

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
    //if the above code is false then html below will be displayed

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>Application</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/features.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/30ff5f2a0c.js" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://datatables.net/extensions/fixedheader/examples/integration/responsive-bootstrap.html"></script>

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home/">
                    <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
                    <!-- <span class="logo-name">GreenScreen</span> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item d-md-none">
                            <a class="nav-link" href="../dashboard/dashboard.php" id="signin">Back</a>
                        </li>
                    </ul>
                    <a class="nav-link d-none d-md-flex logout-link" href="../dashboard/dashboard.php"><h3>Back</h3><i class='bx bxs-left-arrow-square'></i></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid main-container">
        <div class="row">
            <main class="col-md-10 mx-md-auto mb-md-5 p-4 pt-2 pt-md-4">
                <div class="row g-3">
                    <div class="col-12 text-center mb-md-4 mt-4">
                        <h1 class="fw-bold text-center green">Dean's List Application System</h1>
                        <br>
                        </br>
                        <h5>Complete the following steps to get started</h5>
                        <h4 class="fw-bold mt-3 d-md-none"><span class="progress-counter">1</span> of 6</h4>
                    </div>
                    <div class="col-md-12 text-center d-none d-md-flex progress-bar-profile">
                        <div class="col-md profile-progress-container wrapper" id="step-1">
                            <div class="profile-progress bg-pending bg-white">
                                <i class='bx bxs-user-detail color-green'></i>
                            </div>
                            <p class="text-center my-2 small">Student Information</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-2">
                            <div class="profile-progress">
                                <i class="fa-solid fa-house-chimney-user"></i>
                            </div>
                            <p class="text-center my-2 small">Application</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-3">
                            <div class="profile-progress">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <p class="text-center my-2 small">Confirmation</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-4">
                            <div class="profile-progress">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <p class="text-center my-2 small">Assessment</p>
                        </div>
                    </div>
                    <?php require_once 'student_info.php'; ?>
                    
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('a.upload-photo').on('click', function(){
                $('input#upload-photo').trigger('click');
            });
            $('a#upload_cet').on('click', function(){
                $('input#upload_cet_hidden').trigger('click');
            });
            $('a#upload_shs_card').on('click', function(){
                $('input#upload_shs_card_hidden').trigger('click');
            });
            $('#personal.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#economic-status').show();
                $('#step-1').removeClass('wrapper');
                $('#step-1').addClass('wrapper-green');
                $('#step-1 div').removeClass('bg-white');
                $('#step-1 div').addClass('bg-green');
                $('#step-1 div i').removeClass('color-green');
                $('#step-1 div i').addClass('color-white');
                
                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').addClass('bg-pending');
                $('#step-2 div').addClass('bg-white');
                $('#step-2 div i').addClass('color-green');
                
                $('span.progress-counter').text('2');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#economic-status.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#personal-info').show();
                $('#step-2').removeClass('wrapper-green');
                $('#step-2').addClass('wrapper');
                $('#step-2 div').removeClass('bg-pending');
                $('#step-2 div').removeClass('bg-white');
                $('#step-2 div i').removeClass('color-green');

                $('#step-1').removeClass('wrapper-green');
                $('#step-1').addClass('wrapper');
                $('#step-1 div').removeClass('bg-green');
                $('#step-1 div').addClass('bg-white');
                $('#step-1 div i').removeClass('color-white');
                $('#step-1 div i').addClass('color-green');

                $('span.progress-counter').text('1');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -400}, 'fast');
            });
            $('#economic-status.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#cet').show();
                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').removeClass('bg-white');
                $('#step-2 div').addClass('bg-green');
                $('#step-2 div i').removeClass('color-green');
                $('#step-2 div i').addClass('color-white');
                
                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').addClass('bg-pending');
                $('#step-3 div').addClass('bg-white');
                $('#step-3 div i').addClass('color-green');

                $('span.progress-counter').text('3');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#cet.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#economic-status').show();
                $('#step-3').removeClass('wrapper-green');
                $('#step-3').addClass('wrapper');
                $('#step-3 div').removeClass('bg-pending');
                $('#step-3 div').removeClass('bg-white');
                $('#step-3 div i').removeClass('color-green');

                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').removeClass('bg-green');
                $('#step-2 div').addClass('bg-white');
                $('#step-2 div i').removeClass('color-white');
                $('#step-2 div i').addClass('color-green');

                $('span.progress-counter').text('2');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#cet.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#shs').show();
                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').removeClass('bg-white');
                $('#step-3 div').addClass('bg-green');
                $('#step-3 div i').removeClass('color-green');
                $('#step-3 div i').addClass('color-white');
                
                $('#step-4').removeClass('wrapper');
                $('#step-4').addClass('wrapper-green');
                $('#step-4 div').addClass('bg-pending');
                $('#step-4 div').addClass('bg-white');
                $('#step-4 div i').addClass('color-green');

                $('span.progress-counter').text('4');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#shs.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#cet').show();
                $('#step-4').removeClass('wrapper-green');
                $('#step-4').addClass('wrapper');
                $('#step-4 div').removeClass('bg-pending');
                $('#step-4 div').removeClass('bg-white');
                $('#step-4 div i').removeClass('color-green');

                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').removeClass('bg-green');
                $('#step-3 div').addClass('bg-white');
                $('#step-3 div i').removeClass('color-white');
                $('#step-3 div i').addClass('color-green');

                $('span.progress-counter').text('3');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#shs.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#personality-type').show();
                $('#step-4').removeClass('wrapper');
                $('#step-4').addClass('wrapper-green');
                $('#step-4 div').removeClass('bg-white');
                $('#step-4 div').addClass('bg-green');
                $('#step-4 div i').removeClass('color-green');
                $('#step-4 div i').addClass('color-white');
                
                $('#step-5').removeClass('wrapper');
                $('#step-5').addClass('wrapper-green');
                $('#step-5 div').addClass('bg-pending');
                $('#step-5 div').addClass('bg-white');
                $('#step-5 div i').addClass('color-green');

                $('span.progress-counter').text('5');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#region').on('change', function(){
                var formData = {
                    filter: $("#region").val(),
                    action: 'province',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#province').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
            $('#province').on('change', function(){
                var formData = {
                    filter: $("#province").val(),
                    action: 'city',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#city').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
            $('#city').on('change', function(){
                var formData = {
                    filter: $("#city").val(),
                    action: 'barangay',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#barangay').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
        });
    </script>
</body>
</html>