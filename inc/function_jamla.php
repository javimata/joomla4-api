<?php

function Jamla($token, $url, $api_endpoint, $method){

    $ch = curl_init($url.$api_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token
    ));

    $data = curl_exec($ch);

    $info = curl_getinfo($ch);
    curl_close($ch);

    return $data;

}