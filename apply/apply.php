<?php 

$path = "../";

require_once $path."class/subject.class.php";

session_start();

$subject = new subject;

// print_r($_SESSION);

$listOfSubject = [];

// button for form of selecting subjects
if(isset($_POST['submit'])) {
	// GET data from dtbase

	// print_r($_POST);


	$subject -> sem = $_POST['semester'];
	$subject -> curriculum =$_POST['curriculum'];
	$subject -> year_level = $_POST['yearlevel'];

	$listOfSubject = $subject -> getSubjects();
}


if(isset($_POST['calculate'])) {


	// 1. Insert data to tlb_applicant
	// 1.1 CREATE A FUNCTION THAT WILL INSERT DATA TO tlb_applicant
	$subject -> user_id = $_SESSION['user_id'];
	$result = $subject -> addApplicant();
	// 1.2 Get applicant_id WHERE userid corresponds sa sino nag login
	// 1.3
	// 2. Insert data to tbl_list_grades
	// 2.1 CRREATE A FUMNCTION THAT WILL INSERT DATA TO tbl_list_grades
	$applicantInfo = $subject -> getApplicatInfo();
	$subject -> applicant_id = $applicantInfo['applicant_id'];
	$subject -> subject_id = $_POST['subjectId'];
	$subject -> grade = $_POST['grade'];
	$result = $subject -> addGrades();
	// 2.1.1 use for loop sa pag insert ng data


	$initial = 0;
	$count = 0;
	foreach($_POST['grade'] as $grade) {
		$initial += floatval($grade);
		$count += 1;
	}

	$average = $initial / $count;



	// FETCH GRADES IN DATABASE
	$finalSubjects = $subject -> getGrades();
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
	<script src="apply.js" defer></script>
</head>
<body>
	<div class="w-100">
		<div class="container">
			<div class="container d-flex justify-content-center pt-3">
				<br>
				<h1>Dean's List Application System</h1>
			</div>
			<br>
			<br>
			<form action="apply.php" method="post">
				<div class="row">
					<div class="col-12">
					<h6 class="fs-5" style="margin-right:600px; font-weight: 300">Name: <span class="ms-3 fw-light "><?php echo '<span class="admin-name">'.$_SESSION['user_firstname'].' '.$_SESSION['user_lastname'].'</span>'; ?></h6>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-12">

					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12 col-lg-3">
						<label for="schoolyear">School Year:</label>
						<select name="schoolyear" id="schoolyear" class="form-select" style="width:250px">
							<option value="none">--Select--</option>
							<option value="School Year 2022-2023">School Year 2022 - 2023</option>
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
					
					<div class="col-12 col-lg-3">
						<label for="yearlevel" style="margin-right:100px">Year Level:</label>
						<select name="yearlevel" id="yearlevel" class="form-select" style="border-style:groove; border-radius: 10px;margin-right:300px">
							<option value="none">--Select--</option>
							<option value="1">First Year</option>
							<option value="2">Second Year</option>
							<option value="3" >Third Year</option>
							<option value="4" >Fourth Year</option>
						</select>
					</div>
				</div>
				<br>
				<br>
				<button type="submit" name="submit" value="submit" style="border-style:hidden; background: #107869; color:white; padding: 15px; border-radius: 4px; margin-right:460px ">Get Subjects</button>
				<div class="row">

						<div class="col">
							<a class= "" href="../dashboard/dashboard.php" style ="text-decoration: none; color: #107869; margin-left: 800px"><i class='bx bxs-left-arrow-circle'></i>Back</a>
						</div>
						<br>

				</div>
			</form>

			<?php if(!isset($finalSubjects)) {?>
			<form action="apply.php" method="post" enctype="multipart/form-data">
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
								<td><input type="text" name="grade[]" class="grade form-control w-25" ></td>
								<input type="hidden" name="subjectId[]" value="<?php echo $subject['subject_id'] ?>">
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
								<input type="file" name="upload_grade" id="upload_grade">
								<input type="submit" class="btn rounded text-light" name="calculate" value="calculate" style="background-color:#107869; margin-left: 300px">
							</div>
						</div>
						
						<br>
						<br>
						<br>
					</div>
					</div>
				</div>
			</form>
			<?php } ?>


			<?php if(isset($finalSubjects)) {?>
				<table class="table table-responsive table-borderless table-striped w-100" style="border-style:groove">
						<thead style="background-color:#107869;">
							<tr>
								<th class="ps-5 w-50 text-light">Subjects</th>
								<th class="text-light w-25">Units</th>
								<th class="text-light w-25">Grade</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($finalSubjects as $subject) { ?>
								<tr>
								<td class="ps-5"><?php echo $subject['subject_name'] ?></td>
								<td>3</td>
								<td><p><?php echo $subject['grade'] ?></p></td>
							</tr>
							<?php } ?>


							<!-- Add more rows as needed -->
						</tbody>
			</table>


			<p><?php echo $average ?></p>
			<?php } ?>

			

	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>