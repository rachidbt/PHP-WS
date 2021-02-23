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



// crear JSON
$jmperezperez1 = array(true);
echo "PHP ARRAY<BR>";
echo var_dump($jmperezperez1)."<br>";
echo print_r($jmperezperez1)."<br><br>";

$jmperezperez_json=json_encode($jmperezperez1);
echo "JSON ARRAY FORMAT<BR>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br><br>";


$jmperezperez3 = array(true, false, false);
$jmperezperez_json=json_encode($jmperezperez3);
echo "JSON 3 ARRAY FORMAT<BR>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";
?>
