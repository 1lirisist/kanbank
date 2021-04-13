<?php
session_start();
    require 'connection.php';
    if(isset($_POST['hlogin'])){
    $hemail=$_POST['hemail'];
    $hpassword=$_POST['hpassword'];
    $sql="select * from hospitals where hemail='$hemail' and hpassword='$hpassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Yanlış e-posta veya şifre. Lütfen tekrar deneyin.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['hemail']=$row['hemail'];
        $_SESSION['hname']=$row['hname'];
        $_SESSION['hid']=$row['id'];
        $msg= $_SESSION['hname'].' başarıyla giriş yaptı..';
        header( "location:../bloodrequest.php?msg=".$msg);
    } 
  }
?>