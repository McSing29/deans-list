<?php 
session_start();




?>



<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<?php

// Connect to the database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'deanslist';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the form data

$schoolyear = mysqli_real_escape_string($conn, $_POST['schoolyear']);
$semester = mysqli_real_escape_string($conn, $_POST['semester']);
$curriculum = mysqli_real_escape_string($conn, $_POST['curriculum']);
$yearlevel = mysqli_real_escape_string($conn, $_POST['yearlevel']);
$subjects = $_POST['subject'];
$units = $_POST['units'];
$grades = $_POST['grade'];  


// Calculate the average grade
$total = 0;
$count = count($grades);

for ($i = 0; $i < $count; $i++) {
	$total += $grades[$i];
}

$average = $total / $count;


// Insert the data into the database
$sql = "INSERT INTO grades (schoolyear, semester, curriculum, yearlevel, subject, units, grade, average) VALUES ";

for ($i = 0; $i < $count; $i++) {
	$subject = mysqli_real_escape_string($conn,$subjects[$i]);
    $unit = mysqli_real_escape_string($conn, $units[$i]);
    $grade = mysqli_real_escape_string($conn, $grades[$i]);
    $average = mysqli_real_escape_string($conn, $average);
    $sql .= "('$schoolyear', '$semester', '$curriculum', '$yearlevel', '$subject', '$unit', '$grade', '$average')";
    if ($i != $count - 1) {
    $sql .= ",";
    }
    }

    if (mysqli_query($conn, $sql)) {
    echo "<center><h1><br>Results</h1><center>";
    echo "<center><br>Your Data was inserted successfully. Waiting for the Confirmation.<center>";
    } else {
    echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    // Display the results
    
    echo "<br><p>Name: " . $_SESSION['logged_user']['user_firstname']." ".$_SESSION['logged_user']['user_lastname'] . "</p>";
    echo "<br><p>Email: " . $_SESSION['logged_user']['user_email'] . "</p>";
    echo "<br><p>Schoolyear: " . htmlspecialchars($schoolyear) . "</p>";
    echo "<br><p>Semester: " . htmlspecialchars($semester) . "</p>";
    echo "<br><p>Curriculum: " . htmlspecialchars($curriculum) . "</p>";
    echo "<br><p>Year Level: " . htmlspecialchars($yearlevel) . "</p>";
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Subjects</th><th>Units</th><th>Grades</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0; $i < $count; $i++) {
    echo "<tr><td>" . htmlspecialchars($subjects[$i]) . "</td><td>" . htmlspecialchars($units[$i]) . "</td><td>" . htmlspecialchars($grades[$i]) . "</td></tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr><td></td><td></td><td>General Point Average  =  " .  number_format($average, 2) . "</td></tr>";
    echo "</tfoot>";
    echo "</table>";
?>
<a href="admin.php" class="btn" style="margin-left:600px;"> Save and Submit</a>
<a class = "back" href="apply.php" style ="text-decoration: none; margin-left:240px;"><i class='bx bxs-left-arrow-circle'></i>Back</a>

<br>
<br>
</body>
</html>