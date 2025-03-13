<?php

//Manipulacao

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge"
];

//Adicionar

//no comeco
// array_unshift($index, "Alice in chains", "Slipknot");
// $assoc = [
//     "band_4" => "Pearl Jam"
// ] + $assoc;

//no final
// array_push($index, "Soundgarden");
// $assoc + ["band_5", "Slipknot"];



//Remover 
// array_shift($index);

// //Remover
// array_pop($index);


// array_unshift($index, "");
// $index = array_filter($index);

// $index = array_reverse($index);

// asort($index);
// ksort($index);
// krsort($index);

// sort($index);
// rsort($index);

//Verificacao


// var_dump(
//     [
//         array_keys($assoc),
//         array_values($assoc)
//     ]
// );

// if(in_array("AC/DC", array_values($assoc))) {
//     echo "Bad Band"; PHP_EOL;
// }

$arrToString = implode(", ", array_values($assoc));
$arrToString = explode(", ", $arrToString);

var_dump($arrToString);


//Example

$profile = [
    "name" => "Allan",
    "company" => "Developer PHP",
    "mail" => "allan@dev.com.br"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}</p>
        <a href="mailto:{{mail}} title="Enviar E-email para {{name}}>Enviar Email</a>
    </article>
TPL;

// echo $template;

// echo str_replace(
//     array_keys((array) $profile),
//     array_values((array) $profile),
//     $template
// );

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

var_dump(
    explode("&", $replaces)
);

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);