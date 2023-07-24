<?php
$name = $_POST['sirname'];
$email = $_POST['email'];
$message = $_POST['message'];

$mysql = new mysqli('localhost', 'root', '', 'CPR');
$mysql->query("INSERT INTO `CZ` (`name`, `email`, `message`) VALUES('$name', '$email', '$message')");

$mysql->close();
header('Location: /')
?>