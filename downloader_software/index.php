<?php 
 require '../config/connect.php';
 $result = mysqli_query($db,"SELECT * FROM  product_q");

 if (isset($_POST["submit"])){
 		require '../config/send.php';
 		send($_POST);
	    $cm_result = mysqli_query($db,"SELECT * FROM  comment WHERE type = 1 ORDER BY no Desc");
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- no cache -->
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue,01 jan 1980 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<title>Hanzsoft | Downlod Software</title>
	<link rel="stylesheet" href='../source/stylesheet/dw_first.css'>
	<link rel="stylesheet" href="../source/mobile_css/dw_mb.css">
	<link rel="icon" type="image/x-icon" href="../source/img/head-logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body id="Body">
	<div class="overlay" id="loadOverlay">
		<div class="overflex">
		<div class="loading">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
	</div>
	</div>

	<nav id="navbar">
		<ul>
			<li>
				<a href="#!" class="logo" id="trans">
					<img src="../source/img/head-logo.png" alt="Hanz Soft">
					<span class="nav-item">Hanzsoft</span>
				</a>
			</li>
			<li><a href="../" id="trans2" class="a-trans">
				<i class="fas fa-home"></i>
				<span class="nav-item">Home</span>
			</a></li>
			<li><a href="#" id="trans3" class="a-trans">
				<i class="fas fa-rocket"></i>
				<span class="nav-item">Software</span>
			</a></li>
			<li><a href="https://github.com/yohanesokta"id="trans4">
				<i class="fas fa-brands fa-square-github"></i>
				<span class="nav-item">Projects</span>
			</a></li>
			<li><a href="../#about" id="trans5">
				<i class="fas fa-address-card"></i>
				<span class="nav-item">About</span>
			</a></li>
			<li><a href="  https://yohanesokta.github.io/portofolio"id="trans6">
				<i class="fas fa-user"></i>
				<span class="nav-item">Profile</span>
			</a></li>
			<li><a onclick="goBack()" class="logout" id="trans7">
				<i class="fas fa-sign-out-alt"></i>
				<span class="nav-item">Back</span>
			</a></li>
		</ul>
	</nav>

	<div class="m-navbar">
		<div class="m-bt-navbar" id='navMobile'>
		<div class="m-nav-menu">
		 <a href="../">
			<i class="fas fa-home"></i>
			<p>Home</p>
		 </a>
		</div>
		<div class="m-nav-menu">
		 <a href="#">
		 <i class="fas fa-rocket"></i>
			<p>Software</p>
		 </a>
		</div>
		<div class="m-nav-menu">
		 <a href="../#about">
			<i class="fas fa-address-card"></i>
			<p>About</p>
		 </a>
		</div>
		</div>
	</div>
	<!-- body -->
<div class="sosmed">
		<a href="https://www.facebook.com/yohanz.oktahsc" class="s-list"><i class="fa-brands fa-facebook"></i><h3 class="s-head">Facebook</h3></a>
		<a href="https://youtube.com/@YhanzC" class="s-list"><i class="fa-brands fa-youtube"></i><h3 class="s-head">Youtube</h3></a>
		<a href="https://github.com/yohanesokta" class="s-list"><i class="fa-brands fa-github"></i><h3 class="s-head">GitHub</h3></a>
		<a href="https://discord.gg/ZsxrX2tM" class="s-list"><i class="fa-brands fa-discord"></i><h3 class="s-head">Discord</h3></a>
	</div>
	<div class="content">
		<div class="nav-ex">
		</div>
		<div class="con-utama">
			<div class="sub-con">
				<div class="header-first">
					<h2>Hanz Soft Software Download - Best Software & Apps</h2>
					<p>apa yang kamu cari sekarang, kamu bisa dapatkan semuanya dengan gratis</p>
				</div>
				<div class="con-list">
					<h2>Gets Software</h2>
					<?php $i=1; while( $data = mysqli_fetch_assoc($result)){ ?>
							<?php if($i== 3){ $i=1;?>
							<div class="tab-line"></div>
							<?php } ?>
						<div class="m-cr">
							<div class="cr">
								<?php 
									$d = $data['n-one'];
									$prd = mysqli_query($db,"SELECT * FROM f_soft WHERE nsi = $d");
									$d_prd = mysqli_fetch_assoc($prd);
									 ?>
								<a
								<?php if($d_prd['nsi'] != 100) { ?>
								 href="get.php?nis=<?php echo $d_prd['nsi']; ?>&nama=<?php echo $d_prd['nama']; ?>" 
								 <?php }?>><div class="card" id="cN">
									<img src="../source/img/<?php echo $d_prd['icon']; ?>" class="imgSoft" alt="nis">
									<p>Version : (<?php echo $d_prd['version']; ?>)</p>
									<h1><?php echo $d_prd['nama']; ?></h1>
								</div>

								<?php 
									$d = $data['n-two'];
									$prd = mysqli_query($db,"SELECT * FROM f_soft WHERE nsi = $d");
									$d_prd = mysqli_fetch_assoc($prd);
									 ?>
								<a
								<?php if($d_prd['nsi'] != 100) { ?>
								 href="get.php?nis=<?php echo $d_prd['nsi']; ?>&nama=<?php echo $d_prd['nama']; ?>" 
								 <?php }?>><div class="card"id="cT">
									<img src="../source/img/<?php echo $d_prd['icon']; ?>"class="imgSoft" alt="nis">
									<p>Version : (<?php echo $d_prd['version']; ?>)</p>
									<h1><?php echo $d_prd['nama']; ?></h1>
								</div>
								
									<?php 
									$d = $data['n-tree'];
									$prd = mysqli_query($db,"SELECT * FROM f_soft WHERE nsi = $d");
									$d_prd = mysqli_fetch_assoc($prd);
									 ?>
								<a
								<?php if($d_prd['nsi'] != 100) { ?>
								 href="get.php?nis=<?php echo $d_prd['nsi']; ?>&nama=<?php echo $d_prd['nama']; ?>" 
								 <?php }?>><div class="card"id="cTR">
									<img src="../source/img/<?php echo $d_prd['icon']; ?>"class="imgSoft" alt="nis">
									<p>Version : (<?php echo $d_prd['version']; ?>)</p>
									<h1><?php echo $d_prd['nama']; ?></h1>
								</div></a>

							</div>
						</div>
		<?php $i++;} ?>
						<div class="after">
							<h2>Suka Dengan Halaman Ini ?</h2>
							<p>Berikan pengalamanmu ke kolom komentar dibawah !</p>
							<div class="comment">
								<form action="./#comen" method="post">
									<input type="text" id="user_name" name="user_name" placeholder="Nama" required>
									<textarea name="txt" id="txt" cols="50" rows="4" required placeholder="komentar"></textarea>
									<div class="btn">
									<button type="submit" name="submit" id="comen">Add Comment</button>
									</div>
								</form>
								<div class="board">
										<button class="r-btn" id="rbtn"><i class="fa-solid fa-rotate"></i></button>
									<div class="c-board">
										<!-- isi Komen -->
									</div>
								</div>
							</div>
						</div>
				</div>
		</div>
		</div>
	</div>

	<footer id="footer">
		<div class="f-fi">
			<div class="fi-img">
				<img src="../source/img/head-logo.png" alt="logo-hanzsoft">
				<h2>Hanz Soft</h2>
			</div>
		</div>
		<div class="f-con">
			<h1>Yohanes Oktanio</h1>
			<p>Yohanes Oktanio or YhanzC Product made for school project or for fun!</p>
			<div class="f-link">
				<a href="../">Home</a>
				<a href="#">Software</a>
				<a href="../#about">About</a>
				<a href="">Profile</a>
				<div class="f-linkb"></div>
				<div class="linked">
					<div class="gmail">
						<i class="fa-sharp fa-solid fa-envelope"></i>
						<a href="https://mail.google.com/mail/?to=inbox@example.com&bcc=yohanesoktayt72@gmail.com">yohanesoktayt72@gmail.com</a>
					</div>

					<div class="gmail">
						<i class="fa-brands fa-youtube"></i>
						<a href="https://youtube.com/@YhanzC" target="_blank">yohanesoktanio</a>
					</div>

				<p class="copy">Copyright ©2023 Yohanes Oktanio, All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../source/javascript/downloader.js"></script>
	<script src="../source/javascript/downloader.jquery.js"></script>
</body>
</html>