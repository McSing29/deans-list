<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/features.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>Home Page</title>

</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="logo-name">Dean's List Application</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#applynow" id="applynow">Apply Now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" id="contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" id="about">About</a>
          </li>
        </ul>
        <a href="./login/login.php"><button class="btn btn-outline-success btn-login">Login</button></a>
      </div>
    </div>
  </nav>
</header>
<main id="home">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item banner-1 active">
            <div class="container">
            <div class="carousel-caption">
                <h1>We are</h1>
                
            </div>
            </div>
        </div>
        <div class="carousel-item banner-2">
            <div class="container">
            <div class="carousel-caption">
                <h1>The</h1>
                
            </div>
            </div>
        </div>
        <div class="carousel-item banner-3">
            <div class="container">
            <div class="carousel-caption">
                <h1>Group 6 XD</h1>
                
            </div>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <hr class="featurette-divider">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="home">
        <div class="h-100 p-5 text-white background-color-green rounded-3">
            <h1 class="display-4 fw-normal">About the System</h1>
            <p class="justify">
                Dean's list Application System is an online Web Application, 
                where it brings the process of dean's list transaction into online form.
                Managing dean's list forms could be a challenge because of the paperworks and processes. 
                As we propose a more convenient way of doing these tasks.
            </p>
        </div>
    </div>
    <hr class="featurette-divider">

    <div class="container marketing">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="about">
            <h1 class="display-4 fw-normal">Our Team</h1>
        </div>
        <div class="row about">
            <div class="col-lg-4">
                <img src="./img/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Joshua A. Yasil</h3>
                <h4>Project Manager</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./img/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Bushra Adjaluddin</h3>
                <h4>Architectural Engineer</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./img/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Emil John Q. Magcanta</h3>
                <h4>Lead Developer</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./img/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Abdulasis Hamja</h3>
                <h4>Business Analyst</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./img/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Denise Vonn Gerzon</h3>
                <h4>UX Designer</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="./img/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h3>Abdar Talib</h3>
                <h4>UI Designer</h4>
            </div><!-- /.col-lg-4 -->
        </div>
    </div><!-- /.container -->
    <hr class="featurette-divider">
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $('a#home').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#home').addClass('active');
        $('html,body').animate({
                    scrollTop:$('main#home').offset().top -100}, 'fast');
      });
      $('a#academics').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#academics').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#academics').offset().top -100}, 'fast');
      });
      $('a#admissions').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#admissions').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#admissions').offset().top -100}, 'fast');
      });
      $('a#faculty').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#faculty').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#faculty').offset().top -100}, 'fast');
      });
    });
  </script>
</body>
</html>