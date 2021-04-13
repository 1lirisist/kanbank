<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from bloodrequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) {
	$msg="Kan talebinizi iptal ettiniz.";
	header("location:../sentrequest.php?msg=".$msg );
    } else {
    $error="Kayıt silinirken hata oluştu: " . mysqli_error($conn);
    header("location:../sentrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>