<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from bloodinfo where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="Bir kan örneğini sildiniz.";
	header("location:../bloodinfo.php?msg=".$msg );
    } else {
    $error="Kayıt silinirken hata oluştu: " . mysqli_error($conn);
    header("location:../bloodinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>