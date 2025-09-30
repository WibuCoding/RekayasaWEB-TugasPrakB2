<?php
// Variabel berisi data JSON tentang anime
$json = '{"judul": "One Piece", "episode": 1000, "genre": "Adventure"}';

// Ubah JSON ke Object
$obj = json_decode($json);
echo "=== Object ===<br>";
echo "Judul: " . $obj->judul . "<br>";
echo "Episode: " . $obj->episode . "<br>";
echo "Genre: " . $obj->genre . "<br><br>";

// Ubah JSON ke Array
$arr = json_decode($json, true);
echo "=== Array ===<br>";
echo "Judul: " . $arr["judul"] . "<br>";
echo "Episode: " . $arr["episode"] . "<br>";
echo "Genre: " . $arr["genre"] . "<br>";
?>
