<?php
// Video API Beta (for Vimeo)

	$vurl= "http://vimeo.com/api/v2/video/53082916.php";	// URL to video.
	function get_video ($vurl) {
		$vinit = curl_init($vurl);
		curl_setopt($vinit, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($vinit, CURLOPT_TIMEOUT, 30);
		curl_setopt($vinit, CURLOPT_FOLLOWLOCATION, 1);
		$return = curl_exec($vinit);
		curl_close($curl);
		return ($return);
	}

	$hrfvideo = unserialize(getvideo($vurl));
	echo $hrfvideo->title;
?>
