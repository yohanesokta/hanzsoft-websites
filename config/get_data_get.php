<?php 	
require 'connect.php';
$nsi = $_GET['nsi'];
$cm_result = mysqli_query($db,"SELECT * FROM  comment WHERE type = $nsi ORDER BY no Desc");
while ($cm = mysqli_fetch_assoc($cm_result)) {
echo "<div class='d-cm'>";

echo "<p>";
echo $cm['nama'];
echo "</p>";
echo "<p>";
echo $cm['isi'];
echo "</p>";
echo "</div>";
}
?>
