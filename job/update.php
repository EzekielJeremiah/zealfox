<?php 
$db = mysqli_connect('localhost','root','','job');
  @$id = $_GET['company'];
   $sql = "SELECT * FROM employees WHERE company = '$id'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
        $company = $row["company"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $phoneN = $row["phoneN"];
        // $product_image = $row["adImage"];

        
    }

    if (isset($_POST['submit'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      @$phoneN = $_POST['phoneN'];
      $company = $_POST['company'];

      $query = "UPDATE employees SET firstname= '$_POST[firstname]', lastname= '$_POST[lastname]', email= '$_POST[email]', phoneN= '$_POST[phone]' WHERE company= '$_POST[company]'";
    mysqli_query($db, $query);

    header('location: emp.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update</title>
  <link href="./font_awesome/fontawesome-4.3.0.min.css" rel="stylesheet">
    <link href="./bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php 

    echo "
    <form action='update.php' method='POST'>
      <input class='form-control' type='text' value='$firstname' name='firstname'>
      <input class='form-control' type='text' value='$lastname' name='lastname'>
      <input class='form-control' type='text' value='$company' name='company'>
      <input class='form-control' type='text' value='$email' name='email'>
      <input class='form-control' type='text' value='$phoneN' name='phone'>

      <input class='form-control' type='submit' name='submit'>
</form>
      ";
?>
</body>
</html>


