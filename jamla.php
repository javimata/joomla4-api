<?php

include_once "inc/jamla.php";

$token        = "";
$url          = "joomla4.javimata.com";
$api_part     = "/api/index.php/v1/";
$api_endpoint = "menus/site/items/101";

$joomla = new Jamla($token, $url, $api_part);
$data   = $joomla->Call("menus/site/items/101", "GET");

// $data = Jamla($token, $url, $api_endpoint, "GET");

$articles = json_decode($data);

print_r($articles);
/*
foreach ($articles->data as $key => $value) {
    // print_r($value);
    echo $value->attributes->title . "<br>";
}
*/