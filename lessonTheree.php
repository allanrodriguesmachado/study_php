<?php

$arrProfile = [
    "name" => "Allan",
    "company" => "Developer",
    "mail" => "allan@developer.com.br"
];

$objProfile = (object)$arrProfile;

var_dump($arrProfile, $objProfile);

echo $objProfile->name;

$ceo = $objProfile;

unset($ceo->name);
var_dump($ceo);


$objStdClass = new stdClass();
$objStdClass->name = "Allan";

var_dump($objStdClass);

//Analise

var_dump([
    "class" => get_class(new DateTime()),
    "methods" => get_class_methods(new DateTime()),
    "vars" => get_object_vars(new DateTime()),
    "parent" => get_parent_class(new DateTime()),
    "subclass" => is_subclass_of(new DateTime(), "DateTime")
]);

$exception = new PDOException();

var_dump([
    // "class" => get_class($exception ),
    "methods" => get_class_methods($exception ),
    // "vars" => get_object_vars($exception ),
    // "parent" => get_parent_class($exception ),
    // "subclass" => is_subclass_of($exception , "RunTimeException")
]);

var_dump(
    $exception->getMessage()
);