<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
    $rid = $_SESSION['rid'];
    $sql = "select bloodrequest.*, hospitals.* from bloodrequest, hospitals where rid='$rid' && bloodrequest.hid=hospitals.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="KanBank | Kan Talepleri"; ?>
<?php require 'head.php'; ?>
<body>
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5 mt-3">
		<tr><th colspan="8" class="title ">Talepleriniz</th></tr>
		<tr>
			<th>#</th>
			<th>Hastane Adı</th>
			<th>Email Adı</th>
			<th>Hastanenin Bulunduğu Şehir</th>
			<th>Telefon Numarası</th>
			<th>Kan Grubu</th>
			<th>Durumu</th>
			<th>Karar</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { 
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px; margin-bottom:2px">Hiçbir Talepte Bulunmadınız.</b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['hname'];?></td>
			<td><?php echo $row['hemail'];?></td>
			<td><?php echo $row['hcity'];?></td>
			<td><?php echo $row['hphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php if($row['status'] == 'Kabul edildi.'){ ?>
			<?php }
			else{ ?>
				<a href="file/cancel.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">İptal</a>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>