<?php include "connect.php";
session_start();
ob_start(); 
$idd = $_GET['id'];

$sql = $con->query("DELETE FROM parks WHERE park_id='$idd' ");

header("Location: viewpark.php");
?>
