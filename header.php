<nav class="navbar navbar-expand-sm sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="image/favicon.png" width="40" height="40" class="rounded-circle">KanBank</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="bi bi-list"></i></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn" href="bloodinfo.php">Kan Ekle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn" href="bloodrequest.php">Kan Talepleri</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn " href="abs.php">Mevcut Kanlar</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn  btn-sm" href="logout.php">Çıkış Yap</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn " href="sentrequest.php">Kan Talepleriniz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn " href="abs.php">Mecvut Kan Grupları</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-sm " href="logout.php">Çıkış Yap</a>
            </li>

        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto " >
            <li class="nav-item">
                <a class="nav-link btn " href="abs.php">Mevcut Kan Grupları</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn " href="register.php">Kayıt Ol</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn " href="login.php">Giriş Yap</a>
            </li>
           
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>
