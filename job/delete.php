<?php 
	$db = mysqli_connect('localhost','root','','job');
  $id = $_GET['company'];
   $sql = "DELETE FROM employees WHERE company= '$_GET[company]'";
   mysqli_query($db, $sql);

   echo "success";
		
?>