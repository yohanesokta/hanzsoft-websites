<?php
require 'connect.php';
$cm_result = mysqli_query($db,"SELECT * FROM  comment WHERE type = 1 ORDER BY no Desc");
while ($cm = mysqli_fetch_assoc($cm_result)) { ?>

<?php 
echo "<div class='div_comment'>";
echo "<div class='comen'>";
echo "<p>";
echo $cm['nama'];
echo "</p>";
echo "<div class='comen-txt'>";
echo "<p>";
echo $cm['isi'];
echo "</p>";
echo "</div>";
echo "</div>";
echo "</div>";

} ?>