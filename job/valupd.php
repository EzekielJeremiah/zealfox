<?php 
$db = mysqli_connect('localhost','root','','job');
  $company = $_GET['company'];
   $sql = "SELECT * FROM employees WHERE company = '$company'";
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
      $db = mysqli_connect('localhost','root','','job');
    $firstname1 = $_POST['FirstName'];
    $lastname1 = $_POST['LastName'];
    $company1 = $_POST['Company'];
    $email1 = $_POST['email'];
    $phone1 = mysqli_real_escape_string($db, $_POST['phone']);

    $query = "UPDATE employees SET firstname= '$_POST[firstname]', lastname= '$_POST[lastname]', email= '$_POST[email]', phoneN= '$_POST[phone]' WHERE company= '$_GET[company]'";
    mysqli_query($db, $query);

    if (mysqli_query) {
      echo "hey";
    } else {
      echo "fuck";
    }

    }
?>