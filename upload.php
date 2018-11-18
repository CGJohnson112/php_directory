<?php
//upload directory to 'file/' folder
$name = "file/". $_POST['name'];


if(isset($_POST['submit'])) {
	mkdir($name);
	
  }
  header('location: index.php');
  exit();

//select directory to view



 
?>

