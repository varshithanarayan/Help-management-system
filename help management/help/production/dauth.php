<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: dlogin.php");
exit(); }
?>