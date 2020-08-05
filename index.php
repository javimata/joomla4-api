<?php

$token = "c2hhMjU2Ojc0MDphOWZiODViNTk5YTQxYzkxYTZlNTkxZTkxNTQ5M2VmMDIyYTYyNGYwYWZhMGYwMWFjNGY2ZDcwMWM3NzNiMWI2";
$url   = "https://joomla4.javimata.com/api/index.php/v1/content/article";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//Set your auth headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token
   ));

// get stringified data/output. See CURLOPT_RETURNTRANSFER
$data = curl_exec($ch);

// get info about the request
$info = curl_getinfo($ch);
// close curl resource to free up system resources
curl_close($ch);

$articles = json_decode($data);

foreach ($articles->data as $key => $value) {
    // print_r($value);
    echo $value->attributes->title . "<br>";
}
