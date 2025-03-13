<?php

//Function Date

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/y H:i:s")
]);

define("DATE_BR", "d/m/y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get(),
    date(DATE_BR)
]);

echo "<pre>";
    print_r(getdate()['weekday']);
echo "</pre>";


var_dump([
    "strtotime NOW" => strtotime("now"),
    "time" => time(),
    "strtotime 10D" => strtotime("+10days"),
    "date DATE_BR" => date(DATE_BR),
    "date + 10D" => date(DATE_BR, strtotime("+10days")),
    "date - 10D" => date(DATE_BR, strtotime("-10days"))
]);

$format = "d/m/Y H:i:s";

echo "A data de hoje e ", date($format);