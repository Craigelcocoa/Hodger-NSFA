<?php
	$school = $_POST['school'];
	
	$jsondonovon = file_get_contents('schools.json');
	$jsonObj = json_decode($jsondonovon);

	$schools = $jsonObj->{'schools'};

	//Add School Routine
	$newSchool = (object)['name'=>$school];
	$schools[] = $newSchool;
	$newSchoolData = (object)['schools'=>$schools];
	rebuildJsonFile($newSchoolData);


	function rebuildJsonFile($arrayToEncode)
	{
		$arrayToEncode = json_encode($arrayToEncode);
		file_put_contents('schools.json', $arrayToEncode);
		echo 'Updated School Info';
	}

?>