<?php 
		function send($data){
		require 'connect.php';
 		$txt = $_POST["txt"];
		$user_name = $_POST['user_name'];
		if ($user_name == "Yohanes" || $user_name == "Yohanes Oktanio" || $user_name == "yohanes" || $user_name == "yohanes oktanio" || $user_name == "YohanesOktanio" || $user_name == "Yohanes oktanio" || $user_name == "yohanes Oktanio" || $user_name == "Yohanesoktanio" || $user_name == "yohanesOktanio"){
 			$user_name = "Guest";
 		}
		$query = "INSERT INTO comment  VALUES ('','$user_name','$txt',1)";
		mysqli_query($db,$query);
	}
 ?>