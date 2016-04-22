<?php
	$fName = $_POST['forename'];
	$sName = $_POST['surname'];
	$profile = $_POST['profile'];
	$image = $_POST['image'];
	$newName = $fName." ".$sName;
	
	$jsondonovon = file_get_contents('pissflaps.json');
	$jsonObj = json_decode($jsondonovon);

	$squad = $jsonObj->{'squad'};
	//$manager = $jsonObj->{'manager'};

	//Add Player Routine
	$newManager = (object)['name'=>$newName,'image'=>$image,'profile'=>$profile];
	//$manager[] = $newManager;
	$newSquad = (object)['manager'=>$newManager, 'squad'=>$squad];
	rebuildJsonFile($newSquad);

	//Edit Manager Routine
	/*$newManager[] = (object) array('name'=>$mName,'image'=>$mImage,'profile'=>$mProfile);
	$newData[] = (object) array('manager'=>$newManager, 'squad'=>$squad);
	$newData = json_encode($newData);
	file_put_contents('bumhole.json', $newData);


	//Delete from squad Routine - REQUIRE VARIABLES TO CAPTURE POSTED NAMES FOR DELETION
	$goalkeepers[];
	$defenders[];
	$midfielders[];
	$strikers[];

	foreach ($squad as $cunt)
	{
		if(!in_array($cunt->{'name'}, $deleteListArray))
		{
			$newSquad[] = $cunt;
		}
	}

	$retainPlayers[] = (object) array('manager' => $manager,'squad'=>$newSquad);
//$retained = json_encode($retainPlayers);
	rebuildJsonFile($retainPlayers);
*/
	function rebuildJsonFile($arrayToEncode)
	{
		$arrayToEncode = json_encode($arrayToEncode);
		file_put_contents('pissflaps.json', $arrayToEncode);
		echo "your mother";
	}

?>