<?php 
	$db = mysqli_connect('localhost', 'root', '', 'job');

	if (isset($_POST['add'])) {
		$firstname = mysqli_real_escape_string($db, $_POST['FirstName']);
		$lastname = mysqli_real_escape_string($db, $_POST['LastName']);
		$company = mysqli_real_escape_string($db, $_POST['Company']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);

		$query = "INSERT INTO employees (firstname, lastname, company, email, phoneN) VALUES ('$firstname', '$lastname', '$company', '$email', '$phone')";
		mysqli_query($db, $query);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add comapanies</title>
	<link href="./font_awesome/fontawesome-4.3.0.min.css" rel="stylesheet">
    <link href="./bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="row">
		<div class="col-md-4">
			<form action="comp.php" method="POST">
			<input class="form-control" type="text" name="FirstName" placeholder="First Name">
			<br>
			<input class="form-control" type="text" name="LastName" placeholder="Last Name">
			<br>
			<input class="form-control" type="text" name="Company" placeholder="Company">
			<br>
			<input class="form-control" type="email" name="email" placeholder="Email">
			<br>
			<input class="form-control" type="number" name="phone" placeholder="phone number">
			<br>
			<button class="btn btn-primary" name="add">Add New employee</button>
		</form>
		</div>
	</div>

	<h1>LIST</h1>
	<?php 
$db = mysqli_connect('localhost','root','','job');
   $sql = "SELECT * FROM employees";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $company = $row["company"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $phoneN = $row["phoneN"];
       echo "<table class='table'>
        <tr>
		<td>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Company in ID</th>
			<th>email</th>
			<th>phone number</th>
		</td>
		<tr>
			<td></td>
			<td>$company</td>
			<td>$firstname</td>
			<td>$lastname</td>
			<td>$email</td>
			<td>$phoneN</td>
			</td>
			<td><a href='update.php?company=$company'><button class='btn btn-primary'>update</button></a>
				<a href='delete.php?company=$company'><button class='btn btn-danger'>Delete</button></td>
		</tr>
	</tr>
	</form>
</table>";
        
    }
 }
