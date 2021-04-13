<?php
    session_start();
    session_unset();
    session_destroy();
    $msg="Başarıyla çıkış yapıldı!";
    header( "location:index.php?msg=".$msg );
?>