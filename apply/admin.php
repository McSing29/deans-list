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

<center><br><br><h1>Student Applications for Dean's Listers</h1>
<a class = "btn" href="apply.php" style="margin-left:1320px; border-radius:10px">Back</a>
<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'deanslist');

// Check if the form has been submitted
if (isset($_POST['action']) && $_POST['action'] === 'approve') {
    // Get the ID of the application to approve
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Update the application status to approved
    $sql = "UPDATE grades SET status = 'approved' WHERE id = $id";
    mysqli_query($conn, $sql);
} else if (isset($_POST['action']) && $_POST['action'] === 'reject') {
    // Get the ID of the application to reject
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Update the application status to rejected
    $sql = "UPDATE grades SET status = 'rejected' WHERE id = $id";
    mysqli_query($conn, $sql);
}

// Get all the applications
$sql = "SELECT * FROM grades WHERE status = 'pending' ORDER BY id DESC"  ;
$result = mysqli_query($conn, $sql);

// Display the applications in a table

echo '<table>';
echo '<thead>';
echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>School Year</th><th>Semester</th><th>Curriculum</th><th>Year Level</th><th>Subjects</th><th>Units</th><th>Grades</th><th>General Point Average</th>

            <?php
                if($_SESSION["user_type"] == "admin"){
            ?>
                <th class="action">Action</th>
            <?php
                    }
            ?>
    </tr>';
echo '</thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
    echo '<td width="20%">' . htmlspecialchars($row['name']) . '</td>';
    echo '<td>' . htmlspecialchars($row['email']) . '</td>';
    echo '<td width="15%">' . htmlspecialchars($row['schoolyear']) . '</td>';
    echo '<td>' . htmlspecialchars($row['semester']) . '</td>';
    echo '<td>' . htmlspecialchars($row['curriculum']) . '</td>';
    echo '<td width="10%">' . htmlspecialchars($row['yearlevel']) . '</td>';
    echo '<td width="20%" >' . htmlspecialchars($row['subject']) . '</td>';
    echo '<td>' . htmlspecialchars($row['units']) . '</td>';
    echo '<td>' . htmlspecialchars($row['grade']) . '</td>';
    echo '<td>' . htmlspecialchars($row['average'  ]) .'</td>';
    
    echo '<td width="30%">';
    echo '<form method="post">';
    echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">';
    echo '<button type="submit" name="action" value="approve" class="btn-approved">Approve</button><br>';
    echo '<button type="submit" name="action" value="reject" class="btn-rejected">Reject</button>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

mysqli_close($conn);
?>
<br>
<br>
</body>
</html>