<?php 
$db = mysqli_connect('localhost','root','','job');
   @$id = $_GET['id'];
   $sql = "SELECT * FROM companies WHERE id = '$_GET[id]'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
        $id = $_GET["id"];
        $name = $row["Name"];
        $Email = $row["email"];
        $website = $row["website"];
        $logo = $row["logo"];
        $country = $row["country"];
        // $product_image = $row["adImage"];

    } 

    if (isset($_POST['update'])) {
      $id = $_GET['id'];
      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $website = $_POST['website'];
      @$logo = $_POST['logo'];
      $country = $_POST['country'];

      $query = "UPDATE companies SET Name= '$_POST[name]', email= '$_POST[email]', website= '$_POST[website]', logo= '$_POST[logo]' WHERE id= 16";
    mysqli_query($db, $query);

    header('location: comp.php');
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
    <form action='compupdate.php' method='POST'>
      <input class='form-control' type='text' value='$name' name='name'>
      <input class='form-control' type='email' value='$email' name='email'>
      <input class='form-control' type='url' value='$website' name='website'>
      <input class='form-control' type='text' value='$country' name='country'>
      <input class='form-control' type='file' value='$logo' name='logo'>

      <input class='form-control' type='submit' name='update'>
</form>
      ";
?>
</body>
</html>


