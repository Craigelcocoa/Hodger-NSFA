<?php
/*$json = file_get_contents('twat.json');
$obj = json_decode($json);
foreach($obj->body as $item){
  echo '<li>' . $item->name . '<ul>';
  if(!empty($item->thumbs_src))
  {
    foreach($item->thumbs_src as $thumbs_src){
      echo '<li>' . $thumbs_src . '</li>';
    }
  }
  echo '</ul></li>';
}*/

$jsondonovon = file_get_contents('under11.json');
$jsonObj = json_decode($jsondonovon);
//foreach($obj->body as $item){
echo $jsonObj->{'manager'}->{'name'};

$name = $jsonObj->{'manager'}->{'name'};
$image = $jsonObj->{'manager'}->{'image'};
$profile = $jsonObj->{'manager'}->{'profile'};

echo $name;
echo $profile;
echo $image;

//$newManager = new stdClass();
$newManager[] = (object) array('name' => $name, 'image' => $image, 'profile'=>$profile, 'bio'=>'twatstain');
$newGoalie[] = (object) array('tits' => 'fanny', 'minge' => 'poon');
$newTop[] = (object) array('manager'=>$newManager,'goalie'=>$newGoalie);
//$jsonObj['manager'] = ["name":$name,"image":$image,"profile":$profile,"bio":'twat'];
print_r($newManager);
$writeNewMan = json_encode($newTop);
file_put_contents('bumhole.json',$writeNewMan);

$squad = $jsonObj->{'squad'};
$manager = $jsonObj->{'manager'};

//Add Player Routine
foreach($jsonObj as $obj){
	if($obj.key(==))
}



//Edit Manager Routine

$newManager[] = (object) array('name'=>$mName,'image'=>$mImage,'profile'=>$mProfile);
$newData[] = (object) array('manager'=>$newManager, 'squad'=>$squad);
$newData = json_encode($newData);
file_put_contents('bumhole.json', $newData);


//Delete from squad Routine - REQUIRE VARIABLES TO CAPTURE POSTED NAMES FOR DELETION
$goalkeepers[];
$defenders[];
$midfielders[];
$strikers[];

foreach ($squad -> {'goalkeepers'} as $cunt)
{
	if(!in_array($cunt->{'name'}, $deleteListArray))
	{
		$goalkeepers[] = $cunt;
	}
}
//repeat for defenders,mids and attackers
for each ($squad -> {'defenders'} as $cunt)
{
	if (!in_array($cunt->{'name'}, $deleteListArray))
	{
		array_push($defenders,$cunt);
	}
}

for each ($squad -> {'midfielders'} as $cunt)
{
	if (!in_array($cunt->{'name'}, $deleteListArray))
	{
		array_push($midfielders,$cunt);
	}
}

for each ($squad -> {'strikers'} as $cunt)
{
	if (!in_array($cunt->{'name'}, $deleteListArray))
	{
		array_push($strikers,$cunt);
	}
}
$newSquad[] = (object) array('defenders'=>$defenders,'midfielders'=>$midfielders,'strikers'=>$strikers);
$retainPlayers[] = (object) array('manager' => $manager,'squad'=>$newSquad);
$retained = json_encode($retainPlayers);
?>