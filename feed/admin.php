<?php
	$jsonString = file_get_contents('under11.json');
	$data = json_decode($jsonString, true);

	$mang = $data['manager'];
	echo $mang['name'];
	//$data[0]['activity_name'] = "TENNIS";

	/* or if you want to change all entries with activity_code "1"
	//foreach ($data as $key => $entry) {
    //	if ($entry['activity_code'] == '1') {
      //  	$data[$key]['activity_name'] = "TENNIS";
    	//}
	//}

	//Then re-encode it and save it back in the file:

	//$newJsonString = json_encode($data);
	//file_put_contents('jsonFile.json', $newJsonString);*/
?>