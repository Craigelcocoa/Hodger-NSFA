<?php
	$jsonString = file_get_contents('under11.json');
	$data = json_decode($jsonString, true);

	$mang = $data['manager'];
	echo 'fick';
	echo 'twat'.$mang['name'];
?>