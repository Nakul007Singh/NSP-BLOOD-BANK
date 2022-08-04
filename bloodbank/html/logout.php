<?php
session_start();
$loginUser=$_SESSION['loginUser'];
session_destroy();
header('Location:donate.php');
?>