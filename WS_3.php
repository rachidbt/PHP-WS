<?php
//endpoint: https://api.spotify.com/v1/users/{user_id}
//consuming a ws with php curl
//response: json in string format
//transform the response into an associative array
try{
    $header_accept ="Accept: application/json";
    $header_content_type ="Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQAZUwL165m3ErXNB_xdCaINsZmL4mnXSc4eARZNqOTsIjNIQTIbAgxQIMcjdH_VyK0-D3I2GO7pkYnUiSeqgVNl8_Hcy2SS_4UHsfr1j33u9Gwn8GLf8VD7pHlF6R7M2uRTfMnn7PtIlgs9z66v5EJ7GIWUubE";
    header('Content-Type: application/json');

     $ch = curl_init('https://api.spotify.com/v1/users/smedjan');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept, $header_content_type, $header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n";//string
    $json_result = json_decode($result, true);//true: to be used as an associative array
    echo "href => " .$json_result["href"]."\n";
    echo "id => " .$json_result["id"]."\n";
    echo "type => " .$json_result["type"]."\n";
    echo "uri => " .$json_result["uri"]."\n";
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

 ?>
