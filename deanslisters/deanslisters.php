<!DOCTYPE html>
<html>
<head>
	<title>Dean's List Application System</title>
    <link rel="icon" href="../img/ccslogo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="../css/calculator.style.css">
</head>
<body>
	<div class="container">
        <br></br>
	<h1>Dean's List Application System</h1>
	<form action="submit.php" method="post">
		<br>
		<label for="name">Name:</label>
		<input type="text" style="margin-right:265px" name="name" id="name" required placeholder="Enter your name">
		<table>
			<thead>
				<tr>
					<th>Subjects</th>
					<th>Grade</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01"  min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" required placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100" required></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01"  min="0" max="100"></td>
				</tr>
				<tr>
					<td><input type="text" name="subject[]" placeholder="Enter Subject"></td>
					<td><input type="number" name="grade[]" step="0.01" min="0" max="100"></td>
				</tr>
				<!-- Add more rows as needed -->
			</tbody>
		</table>
		<input type="submit" name="submit" value="Calculate">
    <a class = "back" href="../dashboard/dashboard.php" style ="text-decoration: none;"><i class='bx bx-caret-left'></i>Back</a>
    <br>
    </br>
	</form>
	</div>
</body>
</html>