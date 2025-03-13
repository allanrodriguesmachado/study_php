<?php


//Class DateTime

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1995-10-14");
$dateStatic =  DateTime::createFromFormat(DATE_BR, "10/10/2993 12:22:22");

var_dump([
    $dateNow,
    get_class_methods($dateNow),
    $dateBirth,
    $dateStatic
]);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("Y")
]);

$newTimeZone = new DateTimeZone("America/Sao_Paulo");
$newDateTIme = new DateTime("now", $newTimeZone);

var_dump([
    $dnewTimeZone,
    $newDateTIme
]);


//Date interval

$dateInterval = new DateInterval("P10Y2");


var_dump([
    $dateInterval
]);