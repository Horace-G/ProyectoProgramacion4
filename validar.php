<?php
session_start();
$_SESSION['USERU']=$_POST["USER"];
echo $_SESSION['USERU'];
?>