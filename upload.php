<?php
$name = $_POST['name'];

if(isset($_POST['submit'])) {
	mkdir($name);
	
  }
  header('location: index.php');
  exit();
?>