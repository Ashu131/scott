<?php 
session_start();
unset($_SESSION['scott-admin']);
header('Location:login.php');
 ?>