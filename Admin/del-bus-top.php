<?php include "connect.php";
session_start();
ob_start(); 
$idd = $_GET['id'];

$sql = $con->query("DELETE FROM bus_stop WHERE bus_stop_id='$idd' ");

header("Location: viewbustop.php");
?>
