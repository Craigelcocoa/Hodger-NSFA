<?php
	$jsonString = file_get_contents('under11.json');
	$data = json_decode($jsonString, true);

	$mang = $data['manager'];
	echo 'twat';
	echo $mang['name'];
	print_r($data);

	$newPlayer = new stdClass();
	$newPlayer->'Occupation'="Bumsniffer";
	array_push($data['manager'], $newPlayer);
	$jsonData = json_encode($data);	
	file_put_contents('under11.json', $jsonData);
?>