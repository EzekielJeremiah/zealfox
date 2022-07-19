<?php 
	$db = mysqli_connect('localhost','root','','job');
  $id = $_GET['company'];
   $sql = "DELETE FROM companies WHERE id= '$_GET[id]'";
   mysqli_query($db, $sql);

   header('location: comp.php');
		
?>