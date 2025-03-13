<?php 

// Functions Strings

//String And Multibyte

$string = "O último show do AC/DC foi incrível!";

var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, "14"),
    "mb_substr" => mb_substr($string, "9"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
]);

// Conversion de caixa

$mbString = $string;

var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
]);

//Substituicao

$mbReplace = $mbString . " Fui, iria novamente, e foi epico!";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
]);


$mbReplace = $string;

echo "<p>", $string , "</p>" . PHP_EOL;
echo "<p>", str_replace("AC/DC", "Pearl Jam", $mbReplace) , "</p>" . PHP_EOL;
echo "<p>", str_replace([
    "foi",
    "AC/DC",
    "último"
], [
    "Pearl Jam",
    "Muito Legal"
], $mbReplace) , "</p>";

//Exemplo Template

$article = <<<ROCK
    <article>
        <h3>Event</h3>
        <p>Desc</p>
    </article>
ROCK;

$articleData = [
    "Event" => "Monster of rock",
    "Desc" => $mbReplace
];

var_dump(array_keys($articleData));
var_dump(array_values($articleData));

echo str_replace(
    array_keys($articleData),
    array_values($articleData),
$article);

//parse string

$endPoint = "name=Allan&email=allan@developer.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    array_keys($parseEndPoint)
]);

$userData = <<<USER
      <article>
        <h3>name</h3>
        <p>email</p>
    </article>
USER;

explode(",", $endPoint);

echo str_replace(
    array_keys((array)$endPoint),
    array_values((array)$endPoint),
    $endPoint
);