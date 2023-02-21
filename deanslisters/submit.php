<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
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
$name = mysqli_real_escape_string($conn, $_POST['name']);
$subjects = $_POST['subject'];
$grades = $_POST['grade'];

// Calculate the average grade
$total = 0;
$count = count($grades);

for ($i = 0; $i < $count; $i++) {
	$total += $grades[$i];
}

$average = $total / $count;


// Insert the data into the database
$sql = "INSERT INTO grades (name, subject, grade) VALUES ";

for ($i = 0; $i < $count; $i++) {
	$subject = mysqli_real_escape_string($conn,$subjects[$i]);
    $grade = mysqli_real_escape_string($conn, $grades[$i]);
    $sql .= "('$name', '$subject', '$grade')";
    if ($i != $count - 1) {
    $sql .= ",";
    }
    }
    
    if (mysqli_query($conn, $sql)) {
    echo "<center>Your Data was inserted successfully. Waiting for the Confirmation.<center>";
    } else {
    echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    // Display the results
    echo "<center><h2>Results</h2></center>";
    echo "<center><p>Name: " . htmlspecialchars($name) . "</p><center>";
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Subject</th><th>Grade</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0; $i < $count; $i++) {
    echo "<tr><td>" . htmlspecialchars($subjects[$i]) . "</td><td>" . htmlspecialchars($grades[$i]) . "</td></tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr><td>GPA:</td><td>" . number_format($average, 2) . "</td></tr>";
    echo "</tfoot>";
    echo "</table>";
?>
<a class = "back" href="deanslisters.php" style ="text-decoration: none;"><i class='bx bx-caret-left'></i>Back</a>
</body>
</html>