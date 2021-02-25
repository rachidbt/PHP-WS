<?php
/*https://api.spotify.com/v1/playlists/{playlist_id}/followers/contains

Array de 3 elements
[
  true,
  false,
  false
]

Array de 1 element
[
  true
]

IDS
jmperezperez,thelinmichael,wizzler


JSON OBJECT
1 element
[
  "jmperezperez":true
]
3 elements
[
  "jmperezperez":true,
  "thelinmichael":false,
  "wizzler":false
]


JSON STRING
1 element
"[
  "jmperezperez":true
]"
3 elements
"[
  "jmperezperez":true,
  "thelinmichael":false,
  "wizzler":false
]"
*/



// ARRAY 1 ELEMENT A JSON
$jmperezperez1 = array(true);
echo "PHP ARRAY<BR>";
echo var_dump($jmperezperez1)."<br>";
echo print_r($jmperezperez1)."<br><br><br>";

$jmperezperez_json=json_encode($jmperezperez1);
echo "JSON ARRAY FORMAT<BR>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br><br><br>";

// ARRAY 3 ELEMENT A JSON
$jmperezperez3 = array(true, false, false);
$jmperezperez_json1=json_encode($jmperezperez3);
echo "JSON 3 ARRAY FORMAT<BR>";
echo var_dump($jmperezperez_json1)."<br>";
echo print_r($jmperezperez_json1)."<br><br><br>";

// JON 1 ELEMENT A ARRAY
$jmperezperez_json_decode = json_decode($jmperezperez_json);
echo "JSON DECODE 1 ARRAY FORMAT<br>";
echo var_dump($jmperezperez_json_decode)."<br>";
echo print_r($jmperezperez_json_decode)."<br><br><br>";

// JsON 3 ELEMENT A ARRAY
$jmperezperez_json_decode = json_decode($jmperezperez_json1);
echo "JSON DECODE 3 ARRAY FORMAT<br>";
echo var_dump($jmperezperez_json_decode)."<br>";
echo print_r($jmperezperez_json_decode)."<br><br><br>";

// 3 elements string format ARRAY-JSON
$element3 = '{"primero":true, "segundo":false, "tercero":false}';
echo "3 elements string format<br>";
echo var_dump($element3)."<br>";
echo print_r($element3)."<br><br><br>";

// 3 elements string format JSON-ARRAY
// ARRAY ASSOCIATIVA
$result_arr_ass = json_decode($element3, true);
echo "ARRAY ASSOCIATIVAt<br>";
echo "primero => " .$result_arr_ass["primero"]."<br>";
echo "segundo => " .$result_arr_ass["segundo"]."<br>";
echo "tercero => " .$result_arr_ass["tercero"]."<br><br><br>";


?>
