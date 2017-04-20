<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Урок №1</title>
<body>

<?php
$continentsSoZvers = [
    "Africa" => "Panthera leo,panthera pardus,rhinoceros",
    "North America" => "American mink,wolf,jaguar",
    "Antarctica" => "White bear,pygoscelis adeliae,blue whale",
    "Australia" => "Koala,tasmanian devil,kangaroo ",
    "Eurasia" => "Otter,indian elephan,bear",
];
foreach ($continentsSoZvers as $value) {
    echo "Название животных $value <br/>";
}
echo '<br/>';
foreach ($continentsSoZvers as $continent=>$zvers) {
$animals= explode(",", $zvers);
foreach ($animals as $animal) {
$names = explode(' ', $animal);
if (count($names)>1) {
    echo "Название животных  с 2-мя словами:  $animal .<br/>";


}

}
}





?>
</body>
</html>

