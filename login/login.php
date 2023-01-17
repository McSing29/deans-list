<?php

    require_once '../class/users.class.php';

    session_start();
    if (isset($_SESSION['logged-in'])){
        header('location: ../dashboard/dashboard.php');
    }
    if(isset($_POST['user_email']) && isset($_POST['user_password'])){


        // class instance
        $users = new User();
        
        // set username and password
        $users->user_email = $_POST['user_email'];
        $users->user_password = $_POST['user_password'];

        $result = $users->validate();

        if($result){
            $error = '';
            $_SESSION['logged-in'] = $result['user_email'];
            $_SESSION['user_firstname'] = $result['user_firstname'];
            $_SESSION['user_lastname'] = $result['user_lastname'];
            $_SESSION['user_type'] = $result['user_type'];
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
    <title>Login</title>
</head>
<body background = "ccs6.png">
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
        <div class="box-image">
			<center><img src="ccslogo.png" width ="100" height = "100"></center>
            <div class="title">Dean's List Application</div>
		</div>
       
            <br></br>
            <label for="user_email">Email</label>
            <input type="text" id="user_email" name="user_email" placeholder="Enter Email" required tabindex="1">
            
            <label for="user_password">Password</label>
            <input type="password" id="user_password" name="user_password" placeholder="Enter password" required tabindex="2">
            
            <input class="button" type="submit" value="Login" name="login" tabindex="3">
            
        
            
            <br>
            </br>
        
            <a class="create" href="create.php">Sign Up</a>
            
            
            <?php
            
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                }
                
            ?>
           
            
        </form>
    </div>
    

</body>
</html>