<?php
//endpoint: https://api.spotify.com/v1/playlists/{playlist_id}/followers/contains
//consuming a ws with php curl
//response: json in array format

// TODOS LOS DATOS ESTAN EL LINK EN EL PRIMER PARRAFO "CURL -X ....."
try {
    $header_accept = "Accept: application/json";
    $header_content_type = "Content-Type: application/json";
    $header_authorization = "Authorization: Bearer BQDIViKpjITHIIIfPgCLPuH-lD8RJqWJKIjKmj-mZP6OQ8qBTTGJS0mMLgHZfD-BgmhEqQKrZTy1zIzW6zPHMUfOpmRZsJYqIgHFdDmYLpjxOP-kCicC9zmdflBODUKECfbT2OZH7u64IEKeQihONgxyR91D7E4";
    header('Content-Type: application/json');


     $ch = curl_init('https://api.spotify.com/v1/playlists/3cEYpjA9oz9GiPac4AsH4n/followers/contains?ids=jmperezperez%2Cthelinmichael%2Cwizzler');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($header_accept, $header_content_type, $header_authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result."\n";
    echo var_dump($result)."\n"; //string
    $array_result = json_decode($result);
    echo var_dump($array_result)."\n";

    foreach ($array_result as $value) {
      if ($value == 1) {
        echo "True \n";
      }
      else {
        echo "False \n";
    }
  }
}
    catch (Exception $e) {
        echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
    }
 ?>
