<?php 

$conn = mysqli_connect('localhost', 'root', '', 'deanslist');

if (isset($_POST["accept"])) {
    
    $sql = "UPDATE dean_applicants SET status = 'Accepted' WHERE user_id =".$_POST['user_id']."";
    mysqli_query($conn, $sql);
    // redirect to this page
    
} else if (isset($_POST["decline"])) {
    $sql = "UPDATE dean_applicants SET status = 'Declined' WHERE user_id =".$_POST['user_id']."";
    mysqli_query($conn, $sql);
    // redirect to this page
}


Header("Location: admin-application.php");
exit();