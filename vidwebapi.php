<?php
// Video API Beta (for Vimeo)
// Adding debugging - 11/14/12
error_reporting(E_ALL);
ini_set('display_errors', True);
	$vurl= "http://vimeo.com/api/v2/video/53082916.php";	// URL to video.
	function get_video ($vurl) {
		$vinit = curl_init($vurl);
		curl_setopt($vinit, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($vinit, CURLOPT_TIMEOUT, 30);
		curl_setopt($vinit, CURLOPT_FOLLOWLOCATION, 1);
		$return = curl_exec($vinit);
		curl_close($vinit);
		return ($return);
	}

	$hrfvideo = unserialize(get_video($vurl));
	echo $hrfvideo->title;
?>
