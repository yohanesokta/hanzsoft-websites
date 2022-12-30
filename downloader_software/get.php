<?php 
	$nsi_p = $_GET['nis'];
 require '../config/connect.php';
 $result = mysqli_query($db,"SELECT * FROM  f_soft WHERE nsi = $nsi_p");
 $data = mysqli_fetch_assoc($result);
 $tutor = $data['tutor'];

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
	<!--  -->
	<title>Hanzsoft | <?php echo $data['nama']; ?></title>
	<link rel="icon" type="image/x-icon" href="../source/favicon.ico">
	<link rel="stylesheet" href='../source/stylesheet/gt_front.css'>
	<link rel="stylesheet" href="../source/mobile_css/gt_mb.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
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
<!-- loading -->
	<div class="pc" id="warning">
		<div class="pc-icon">
		<i class="fa-solid fa-triangle-exclamation"></i>
		</div>
		<h3>PC - APP</h3>
		<div class="pc-text">
		<p>
			Hanya bisa dibuka dengan menggunakan desktop browser atau browser mode desktop dengan minimun tampilan yang ada.
		</p>
		</div>
		<div class="pc-btn">
		<button id="btn-warning">TETAP BUKA</button>
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
			<li><a href="../downloader_software/" id="trans3" class="a-trans">
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
			<li><a href="http://yohanesokta.my-board.org/"id="trans6">
				<i class="fas fa-user"></i>
				<span class="nav-item">Profile</span>
			</a></li>
			<li><a onclick="onTutor()">
			<i class="fas fa-sharp fa-solid fa-circle-question"></i>
				<span class="nav-item">Tutorial</span>
			</a></li>
			<li><a onclick="goBack()" class="logout" id="trans7">
				<i class="fas fa-sign-out-alt"></i>
				<span class="nav-item">Back</span>
			</a></li>
		</ul>
	</nav>
	<!-- body -->
	<div class="sosmed">
		<a href="https://www.facebook.com/yohanz.oktahsc" class="s-list"><i class="fa-brands fa-facebook"></i><h3 class="s-head">Facebook</h3></a>
		<a href="https://youtube.com/@YhanzC" class="s-list"><i class="fa-brands fa-youtube"></i><h3 class="s-head">Youtube</h3></a>
		<a href="https://github.com/yohanesokta" class="s-list"><i class="fa-brands fa-github"></i><h3 class="s-head">GitHub</h3></a>
		<a href="https://discord.gg/ZsxrX2tM" class="s-list"><i class="fa-brands fa-discord"></i><h3 class="s-head">Discord</h3></a>
	</div>
	<!-- Popup Tutorial -->
	<div class="popup" id="popup">
		<div class="canvas-popup">
			<!-- ISI dari Popup -->
			<?php 
				if(strlen($tutor) <= 1){
			 ?>
			<div style="display: flex; width: 100%;">
			<i class="fa-sharp fa-solid fa-circle-exclamation" style="text-align: center; margin:auto; margin-top: 80px; color: black; font-size: 100px;"></i></div>
			<h1 style="font-family: arial; text-align: center; margin-top: 20px; font-size: 20px;">Mohon maaf untuk saat ini tutorial tidak tersedia untuk aplikasi ini !</h1>
			<?php }else{
				echo $tutor; } ?>
		</div>
		<img src="../source/img/X-logo.png" alt="Close" id="btn-popup">
	</div>
	<!-- end popup -->
	<div class="content">
		<div class="nav-ex">
		</div>
		<div class="con-utama">
			<!-- buat apapun di con utama -->
			<div class="sub-con">
				<div class="header-first">
					<h2>Download Software Download - Best Software & Apps</h2>
					<p>apa yang kamu cari sekarang, kamu bisa dapatkan semuanya dengan gratis</p>
				</div>
				<div class="con-list">
						<h1> <?php echo $data['nama']; ?> </h1>
						<img src="../source/img/<?php echo $data['icon']; ?>" alt="<?php echo $data['nsi'] ?>">
						<div class="line-f"></div>
						<p><?php echo $data['Description']; ?></p>
						<h2>System Requerement</h2>
						<p class="sys"><?php echo $data['sys']; ?></p>
						<div class="line-f"></div>
						<a href="<?php echo $data['DL'];  ?>" target="_blank">Download</a>

						<?php if($data['D2'] != 'none'){ ?>
							<h3><?php echo $data['D2']; ?></h3>
							<div class="line-f"></div>
							<a href="<?php echo $data['D2L'] ?>" target="_blank">Download</a>
						<?php } ?>

						<!-- tombol tutorial -->
						<a id = "tutor" style="cursor:default;"> Lihat Tutorial</a>
						<!-- end -->
						<div class="after">
							<h2>Suka Dengan Halaman Ini ?</h2>
							<p>Berikan pengalamanmu ke kolom komentar dibawah !</p>
							<div class="comment">
								<form action="" method="POST">
									<input type="text" id="user_name" name="user_name" placeholder="Nama" required>
									<textarea name="txt" id="txt" cols="50" rows="4" required placeholder="komentar"></textarea>
									<div class="btn">
									<button type="submit" name="submit" id="c_men">Add Comment</button>
									</div>
								</form>
								<div class="board">
									<div class="c-board">
										<!-- end comment -->
										
									</div>
								</div>
							</div>
						</div>
				</div>
		</div>
		</div>
	</div>

	<!-- footer -->
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
				<a href="../downloader_software/">Software</a>
				<a href="../#about">About</a>
				<a href="">Profile</a>
				<div class="f-linkb"></div>
				<div class="linked">
					<div class="gmail">
						<i class="fa-sharp fa-solid fa-envelope"></i>
						<a href="#footer">yohanesoktayt72@gmail.com</a>
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
	<script src="../source/javascript/gt_scr.js"></script>
	<script>


	$(document).ready(function(){
		loadData();
		$('form').on('submit',function(e){
			e.preventDefault();
			InputText();
		})

	// input
		function InputText(){
			let username = $("#user_name").val();
			let text = $("#txt").val();
			let nsi = <?php echo $nsi_p; ?>;

			$.ajax({
				url: '../config/g_send.php',
				type: 'POST',
				data:"username="+username+"&txt="+text+"&nsi="+nsi,
			})
			.done(function(data) {
				$("#txt").val("");
				loadData();
			});
			
		}

	// end input

	});

		function loadData(){
	$.get('../config/get_data_get.php?nsi=<?php echo $nsi_p?>',function(data){
		$('.c-board').html(data);
	});
}
	</script>
</body>
</html>