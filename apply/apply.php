<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System - CCS</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	
	<div class="container">
        <br></br>
	<h1>Dean's List Application System</h1>
	<form action="submit.php" method="post">
		<br>
		<br>
		<label for="name">Name:</label>
		<input type="text" style="margin-right:550px; border-style: groove" name="name" id="name" required placeholder="Enter your name">
		<br>
		<br>
		<label for="email">Email:</label>
		<input type="text" style="margin-right:550px; border-style: groove" name="email" id="email" required placeholder="Enter email">
		<br>
		<br>
		<label for="schoolyear" style="margin-right:780px" >School Year:</label>
		<select name="schoolyear" id="schoolyear" style="margin-right:640px; border-style: groove; border-radius: 10px">
			<option value="none">--Select--</option>
			<option value="School Year 2022-2023">School Year 2022 - 2023</option>
			<option value="School Year 2023-2024">School Year 2023 - 2024</option>
		</select>
		<br>
		<br>
		<label for="semester" style="margin-right:800px">Semester:</label>
		<select name="semester" id="semester" style="margin-right:700px; border-style: groove; border-radius: 10px">
			<option value="none">--Select--</option>
			<option value="First Semester">First Semester</option>
			<option value="Second Semester">Second Semester</option>
		</select>
		<br>
		<br>
		<label for="curriculum" style="margin-right:800px">Curriculum:</label>
		<select name="curriculum" id="curriculum" style="margin-right:660px; border-style: groove; border-radius: 10px">
			<option value="none">--Select--</option>
			<option value="Computer Science">Computer Science</option>
			<option value="Information Technology">Information Technology</option>
		</select>
		<br>
		<br>
		<label for="yearlevel" style="margin-right:800px">Year Level:</label>
		<select name="yearlevel" id="yearlevel" style="margin-right:750px; border-style: groove; border-radius: 10px" >
			<option value="none">--Select--</option>
			<option value="First year">First Year</option>
			<option value="Second Year">Second Year</option>
			<option value="Third Year">Third Year</option>
			<option value="Fourth Year">Fourth Year</option>
		</select>


		<table>
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Units</th>
					<th>Grade</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
					
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01"  min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01"  min="0" max="100"></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" placeholder="Enter Subject"></td>
					<td><input type="number" name="units[]"  min="0" max="5" required></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100"></td>
				</tr>
				<!-- Add more rows as needed -->
			</tbody>
		</table>
        <a class = "back" href="../dashboard/dashboard.php" style ="text-decoration: none; color: #107869; margin-right: 300px"><i class='bx bxs-left-arrow-circle'></i>Back</a>
	<input type="submit" style= "margin-left: 300px; margin-right: 100px;" name="submit" value="Calculate">
    
    <br>
    </br>
	</form>
	</div>
</body>
</html>