<?php 
require 'connect.php';
$txt = $_POST["txt"];
$user_name = $_POST['username'];
$nsi = $_POST['nsi'];
if ($user_name == "Yohanes" || $user_name == "Yohanes Oktanio" || $user_name == "yohanes" || $user_name == "yohanes oktanio" || $user_name == "YohanesOktanio" || $user_name == "Yohanes oktanio" || $user_name == "yohanes Oktanio" || $user_name == "Yohanesoktanio" || $user_name == "yohanesOktanio"){$user_name = "Guest";}
$user_name = htmlspecialchars($user_name);
$txt = htmlspecialchars($txt);
$query = "INSERT INTO comment  VALUES ('','$user_name','$txt','$nsi')";
mysqli_query($db,$query);
 ?>
