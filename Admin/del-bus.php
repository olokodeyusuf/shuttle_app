<?php include "connect.php";
session_start();
ob_start(); 
$idd = $_GET['id'];

$sql = $con->query("DELETE FROM bus WHERE bus_id='$idd' ");

header("Location: viewbus.php");
?>
