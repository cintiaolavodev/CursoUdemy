<?php
session_start();
if(!isset($_SESSION["login_usu"]))
header("location:index.php");
?>
