<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="KanBank | Kan Örnekleri Ekleme"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Hastanenizde Bulunan Kan Gruplarını Ekleyin</div>
        <div class="card-body">
        <form action="file/infoAdd.php" method="post">
          <a data-toggle="collapse" class="register-link"href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Şartlar & Koşullar</a><br>
          <div class="collapse" id="collapseExample">
              Doktorunuz, hemşireniz veya eğitimli flebotomistiniz tarafından bir patoloji toplama merkezinde, klinikte veya hastanede test edilmiş bir kan örneğiniz varsa. Kan örnekleri en çok damarların genellikle yüzeye daha yakın olduğu dirseğin içinden alınır. İğne takılmadan önce alan antiseptik bir bezle temizlenmişse ve kan örneği doğru koruyucuları içeren tüplere aktarılmışsa hastanenizde bulunan kan grubunuzu kan bankamıza ekleyin.
        </div>
          <input type="checkbox" name="condition" value="Kabul et" required> Kabul Ediyorum.<br><br>
          <select class="form-control" name="bg" required="">
                <option disabled selected>Kan Grubu</option>
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br>
          <input type="submit" name="add" value="Ekle" class="btn login-btn btn-block"><br>
          <a href="index.php" class="float-right login-link" title="iptal">İptal</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['hid'])){
    $hid=$_SESSION['hid'];
    $sql = "select * from bloodinfo where hid='$hid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">Ekledikleriniz</th>
            <tr>
              <th>#</th>

              <th>Kan Grubu</th>
              <th>Durumu</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) {
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Eklediğiniz Kan Bulunmamaktadır!</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>" class="btn login-btn">Sil</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>