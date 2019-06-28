<?php include "connect.php";
session_start();
ob_start(); 
$idd = $_GET['id'];

$sql = $con->query("DELETE FROM bookings WHERE id='$idd' ");

header("Location: booking.php");
?>
