<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System</title>
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
		<input type="text" style="margin-right:550px" name="name" id="name" required placeholder="Enter your name">
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