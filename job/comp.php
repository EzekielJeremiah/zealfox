<?php 
	$db = mysqli_connect('localhost', 'root', '', 'job');

	if (isset($_POST['add'])) {
		$name = mysqli_real_escape_string($db, $_POST['Name']);
		$website = mysqli_real_escape_string($db, $_POST['website']);
		@$logo = $_POST['logo'];
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$country = mysqli_real_escape_string($db, $_POST['country']);

		$dimension = @getimagesize($_FILES['logo']['tmp_name']);
		$img_width = $dimension[0];
		$img_height = $dimension[0];

		if ($img_width > "100" || $img_height > "100") {
			echo "file dimension not allowed";
		} else {
			$dimension = $_FILES['logo']['name'];
    	$logo_tmp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($logo_tmp,"logo/$logo");

    $query = "INSERT INTO companies (Name, email, logo, website, country) VALUES ('$name', '$email', '$logo', '$website', '$country')";
		mysqli_query($db, $query);

		}

		
		
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
			<form action="comp.php" method="POST" enctype="multipart/form-data">
			<input class="form-control" type="text" name="Name" placeholder="Name">
			<br>
			<input class="form-control" type="url" name="website" placeholder="website">
			<br>
			<input class="form-control" type="email" name="email" placeholder="Email">
			<br>
			<input class="form-control" type="text" name="country" placeholder="country">
			<br>
			<input class="form-control" type="file" name="logo">
			<br>
			<button class="btn btn-primary" name="add">Add New company</button>
		</form>
		</div>
	</div>

	<h1>LIST</h1>
	<?php 


	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		// code...
	} else {
		$page = 1;
	}

	$no_of_records_per_page = 10;
	$offset = ($page-1)*$no_of_records_per_page;

	$total_pages = "SELECT COUNT(*) FROM companies";
	$result = mysqli_query($db, $total_pages);
	$total_rows = mysqli_fetch_array($result)[0];
	$total_pages2 = ceil($total_rows/ $no_of_records_per_page);


	$start_from = ($page-1)*$no_of_records_per_page;
$db = mysqli_connect('localhost','root','','job');
   $sql = "SELECT * FROM companies LIMIT $offset, $no_of_records_per_page";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        $name = $row["Name"];
        $website = $row["website"];
        $email = $row["email"];
        $country = $row["country"];
        $logo = $row["logo"];
        $total_records = $row[0];
       echo "

       $total_pages = ceil($total_records/$per_page);
       $pageLink = '';
       <table class='table'>
        <tr>
		<td>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Company in ID</th>
			<th>email</th>
			<th>Logo</th>
		</td>
		<tr>
			<td></td>
			<td>$name</td>
			<td>$website</td>
			<td>$email</td>
			<td>$country</td>
			<td><img src='logo/$logo' width='150px' height='120px'/></td>
			</td>
			<td><a href='compupdate.php?id=$id'><button class='btn btn-primary'>update</button></a>
				<a href='compdel.php?id=$id'><button class='btn btn-danger'>Delete</button></td>
		</tr>
	</tr>
	</form>
</table>";
        
    }
 } ?>

<ul class="pagination">
<li><a href="?page=1">First</a></li>
<li class="<?php if($page <= 1){echo 'disabled' ;} ?>">
<a href="<?php if($page <= 1){echo '#';} else {echo "?page=".($page - 1);} ?>">preview</a></li>
<li class="<?php if($page >= $total_pages){echo 'disabled'; }?>">
	<a href="<?php if($page >= $total_pages){ echo '#';} else {echo "?page=". ($page + 1); } ?>">Next</a>
</li>
<!-- <li><a href="?page=<?page = <?php echo $total_pages; ?>">Last</a></li> -->