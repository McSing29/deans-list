<?php 

$path = "../";

require_once $path."class/subject.class.php";

session_start();

$listOfSubject = [];

// button for form of selecting subjects 
if(isset($_POST['submit'])) {
	// GET data from dtbase 

	// print_r($_POST);

	$subject = new subject;
	$subject -> sem = $_POST['semester'];
	$subject -> curriculum =$_POST['curriculum'];
	$subject -> year_level = $_POST['yearlevel'];

	$listOfSubject = $subject -> getSubjects();
}  


if(isset($_POST['calculate'])) {
	// print_r($_POST);

	$initial = 0;
	$count = 0;
	foreach($_POST['sample'] as $grade) {
		$initial += floatval($grade);
		$count += 1;

	}

	$average = $initial / $count;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
	<script src="apply.js" defer></script>
</head>
<body>
	<div class="w-100">
		<div class="container">
			<div class="container d-flex justify-content-center pt-3">
				<br>
				<h1 style="font-weight: 300">Dean's List Application System</h1>
			</div>
			<br>
			<br>
			<form action="apply.php" method="post">
				<div class="row">
					<div class="col-12">
						<h6 class="fs-5"  style="margin-right:710px; font-weight: 300">Name: <span class="ms-3 fw-light "><?php echo $_SESSION['logged_user']['user_firstname']." ".$_SESSION['logged_user']['user_lastname'] ?></span></h6>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-12">
						<h6 class="fs-5" style="margin-right:585px; font-weight: 300">Email: <span class="ms-3 fw-light "><?php echo $_SESSION['logged_user']['user_email']?></span></h6>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12 col-lg-3">
						<label for="schoolyear" style="margin-right:780px">School Year:</label>
						<select name="schoolyear" id="schoolyear" class="form-select"  style="border-style:groove; border-radius: 10px;margin-right:780px">
							<option value="none">--Select--</option>
							<option value="School Year 2022-2023" selected>School Year 2022 - 2023</option>
							<option value="School Year 2023-2024">School Year 2023 - 2024</option>
						</select>
					</div>
					<br>
					<div class="col-12 col-lg-3">
						<label for="semester" style="margin-right:800px">Semester:</label>
						<select name="semester" id="semester" class="form-select" style="border-style:groove; border-radius: 10px;margin-right:800px">
							<option value="none">--Select--</option>
							<option value="1" selected>First Semester</option>
							<option value="2">Second Semester</option>
						</select>
					</div>
					<br>
					<div class="col-12 col-lg-3">
						<label for="curriculum" style="margin-right:790px">Curriculum:</label>
						<select name="curriculum" id="curriculum" class="form-select" style="border-style:groove; border-radius: 10px;margin-right:800px"> 
							<option value="none">--Select--</option>
							<option value="cs" selected>Computer Science</option>
							<option value="it">Information Technology</option>
						</select>
					</div>
					<br>
					<div class="col-12 col-lg-3">
						<label for="yearlevel" style="margin-right:790px">Year Level:</label>
						<select name="yearlevel" id="yearlevel" class="form-select" style="border-style:groove; border-radius: 10px;margin-right:760px">
							<option value="none">--Select--</option>
							<option value="1">First Year</option>
							<option value="2">Second Year</option>
							<option value="3">Third Year</option>
							<option value="4">Fourth Year</option>
						</select>
					</div>
				</div>
				<br>
				<br>
				<button type="submit" name="submit" value="submit" style="border-style:hidden; background: #107869; color:white; padding: 15px; border-radius: 4px; margin-right:460px ">Get Subjects</button>

		
				

			</form>


			<form action="apply.php" method="post">
			<div class="pt-4 d-flex justify-content-center">
					<table class="table table-responsive table-borderless table-striped w-100" style="border-style:groove">
						<thead style="background-color:#107869;">
							<tr>
								<th class="ps-5 w-50 text-light">Subjects</th>
								<th class="text-light w-25">Units</th>
								<th class="text-light w-25">Grade</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($listOfSubject as $subject) { ?>
								<tr>
								<td class="ps-5"><?php echo $subject['subject_name'] ?></td>
								<td>3</td>
								<td><input type="text" name="sample[]" class="grade form-control w-25"></td>
							</tr>
							<?php } ?>


							<!-- Add more rows as needed -->
						</tbody>
					</table>


					<p class="totalGrade"><?php echo isset($average) ? $average: "" ?></p>

				</div>
					<div class="row">
						
						<div class="col">
							<div class="d-flex justify-content-end">
								<input type="text" value="" name="testInput">
								<input type="submit" class="btn rounded text-light" name="calculate" value="calculate" style="background-color:#107869; margin-left: 300px">
							</div>
						</div>
						<div class="col">
							<a class= "" href="../dashboard/dashboard.php" style ="text-decoration: none; color: #107869; margin-right: 800px"><i class='bx bxs-left-arrow-circle'></i>Back</a>
						</div>
					</div>
					</div>
				</div>
			</form>

			

	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>