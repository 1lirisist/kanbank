<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="KanBank | Giriş Yap"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded ">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class=" login-nav-link nav-link active" data-toggle="tab" href="#hospitals">Hastaneler</a>
      </li>
     <li class="nav-item">
        <a class=" login-nav-link nav-link" data-toggle="tab" href="#receivers">Alıcılar</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="file/hospitalLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hastane Email</label>
          <input type="email" name="hemail" placeholder="Hastane Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hastane Şifre</label>
          <input type="password" name="hpassword" placeholder="Hastane Şifre" class="form-control mb-4">
          <input type="submit" name="hlogin" value="GİRİŞ YAP" class="login-btn btn btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/receiverLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Alıcı Email</label>
          <input type="email" name="remail" placeholder="Alıcı Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Alıcı Şifre</label>
          <input type="password" name="rpassword" placeholder="Alıcı Şifre" class="form-control mb-4">
          <input type="submit" name="rlogin" value="GİRİŞ YAP" class="login-btn btn  btn-block mb-4">
        </form>
      </div>

    </div>
    
    <a href="register.php" class="text-center mb-4 login-link" title="Kayıt olun.">Hesabınız yoksa tıklayınız.</a>

</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>