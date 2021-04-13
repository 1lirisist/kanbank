<?php
session_start();
    require 'connection.php';
    if(isset($_POST['rlogin'])){
    $remail=$_POST['remail'];
    $rpassword=$_POST['rpassword'];
    $sql="select * from receivers where remail='$remail' and rpassword='$rpassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Yanlış e-posta veya şifre. Lütfen tekrar deneyin.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['remail']=$row['remail'];
        $_SESSION['rname']=$row['rname'];
        $_SESSION['rid']=$row['id'];
        $msg= $_SESSION['rname'].' başarıyla giriş yaptı.';
        header( "location:../abs.php?msg=".$msg);
    } 
  }
?>