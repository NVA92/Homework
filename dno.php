<?php


$array = [
//	"Africa" => "Panthera leo,zebra,cobraW",
	"Africa" => "zebra",
"America" => "Obama,Old Bush,cent",
"Antarktida" => "White bear,white snow,mo4a",
"Avstalia" => "mad snake,shake,angry kengyry ",
"Eurasia" => "Big spiderman,adnrey,diman alko",

];
foreach ($array as $key =>$value){
	// echo "Континет:$key,Звери:$value <br/>";
	$pieces = explode(" ", $value);
	var_dump($pieces);
	$result = count($pieces);
	echo '<br/>';
	echo $result;
}



$pizza  = "кусок1,кусок2,кусок 3,кусок4,кусок5,кусок 6";
$pieces = explode(" ", $pizza);
var_dump($pieces); // кусок1

?>
