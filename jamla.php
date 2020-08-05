<?php

include_once "inc/jamla.php";

$token        = "c2hhMjU2Ojc0MDphOWZiODViNTk5YTQxYzkxYTZlNTkxZTkxNTQ5M2VmMDIyYTYyNGYwYWZhMGYwMWFjNGY2ZDcwMWM3NzNiMWI2";
$url          = "joomla4.javimata.com";
$api_part     = "/api/index.php/v1/";
$api_endpoint = "content/article";

$joomla = new Jamla($token, $url, $api_part);
$data   = $joomla->Call("content/article", "GET");

// $data = Jamla($token, $url, $api_endpoint, "GET");

$articles = json_decode($data);

// print_r($articles);

foreach ($articles->data as $key => $value) {
    // print_r($value);
    echo $value->attributes->title . "<br>";
    echo $value->attributes->text . "<hr>";
}
