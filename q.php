<?php


$continentsSoZvers = [
"Africa" => "Panthera leo,zebra,cobraW",

];
foreach ($continentsSoZvers as $continent=>$zvers) {

	$animals= explode(",", $zvers);

foreach ($animals as $animal) {
	$names = explode(' ', $animal);
	if (count($names)>1) {
		echo $animal;
	}
}

	}






?>
