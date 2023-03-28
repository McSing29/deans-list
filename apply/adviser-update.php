<?php 

$conn = mysqli_connect('localhost', 'u237957316_deanlist', 'U=lGFvA2ii3', 'u237957316_deanlist');

if (isset($_POST["accept"])) {
    
    $sql = "UPDATE deanslist_applicants SET adviser_status = 'Accepted' WHERE id =".$_POST['app_id']."";
    mysqli_query($conn, $sql);
    // redirect to this page
    
} else if (isset($_POST["decline"])) {
    $sql = "UPDATE deanslist_applicants SET adviser_status = 'Declined' WHERE id =".$_POST['app_id']."";
    mysqli_query($conn, $sql);
    // redirect to this page
}


Header("Location: adviser-application.php");
exit();