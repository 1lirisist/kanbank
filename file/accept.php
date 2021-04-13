<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Kabul Edildi.";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="İsteği kabul ettiniz.";
	header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "Durum değiştirme hatası: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>