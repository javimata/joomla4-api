<?php

class Jamla {

    public $token;
    public $url;
    public $api_part;

    public function __construct($token, $url, $api_part) {
        $this->token        = $token;
        $this->url          = $url;
        $this->api_part     = $api_part;
    }    

    public function Call( $api_endpoint = "", $method = "" ) {
        
        // Build URL
        $url_final = "https://" . $this->url . $this->api_part . $api_endpoint;
    
        // Configure cURL
        $curl = curl_init($url_final);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->method);
    
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->token
        ));

        $response = curl_exec($curl);

        $error_number = curl_errno($curl);
        $error_message = curl_error($curl);
    
        curl_close($curl);
    
        if ($error_number) {

            return $error_message;

        } else {
    
            return $response;
    
        }
        
    }
}


