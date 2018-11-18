<?php
$selector = $_POST['selector'];

$img = "file/"  . $selector . "/cta_dance_dj_banner.gif";

if(isset($_POST['select_dir'])) {
	echo '<img src =' . $img . '><i/>';
}

?>