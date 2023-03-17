<?php

    require_once '../functions/functions.php';
    require_once '../class/users.class.php';

    session_start();
    if (isset($_SESSION['logged-in'])){
        header('location: ../dashboard/dashboard.php');
    }



    if(isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_firstname']) && isset($_POST['user_lastname'])){
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];


        // create user instance
        $users = new User();

        // set user email, password, firstname, lastname
        $users->user_email = $_POST['user_email'];
        $users->user_password = $_POST['user_password'];
        $users->user_firstname = $_POST['user_firstname'];
        $users->user_lastname = $_POST['user_lastname'];

        $result = $users->add();

        if($result){

            // set session
            $error = '';
            $_SESSION['logged-in'] = $_POST['user_email'];
            $_SESSION['user_email'] = $_POST['user_email'];
            $_SESSION['user_firstname'] = $_POST['user_firstname'];
            $_SESSION['user_lastname'] = $_POST['user_lastname'];
            $_SESSION['user_type'] = 'student';
            $_SESSION['user_id'] = $result['user_id'];

            header('location: ../dashboard/dashboard.php');
        }
        else{
            $error = 'Invalid email/password.<br> Please try again.';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Create an Account | Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="create.php" method="post">
        <div class="box-image">
            <center><img src="ccslogo.png" width ="100" height = "100"></center>
			<div class="title">Dean's List Application</div><br>
		</div>

            <label for="user_email"></label>
            <input type="email" id="user_email" name="user_email" required tabindex="1" placeholder="Enter email" value="<?php if(isset($_POST['user_email'])) { echo $_POST['user_email']; } ?>">
            <?php
                if(isset($_POST['save']) && !validate_user_email($_POST)){
            ?>
                    <p class="error">Email is invalid. Use only @wmsu.edu.ph</p>
            <?php
                }
            ?>
            <label for="user_password"></label>
            <input type="password" id="user_password" name="user_password" placeholder="Enter password" required tabindex="2">

            <label for="user_firstname"></label>
            <input type="text" id="user_firstname" name="user_firstname" placeholder="Enter First Name" required tabindex="3">

            <label for="user_lastname"></label>
            <input type="text" id="user_lastname" name="user_lastname" placeholder="Enter Last Name" required tabindex="4">

            <input class="button" type="submit" value="Create" name="login" tabindex="5">
            <a class = "back" href="login.php" style ="text-decoration: none;"><i class='bx bx-caret-left'></i>Back to Login</a>
            <?php
            
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                }
                
            ?>
        </form>
    </div>
</body>
</html>