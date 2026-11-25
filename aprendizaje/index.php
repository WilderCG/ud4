<?php
$jugadores = [
  ["nombre" => "Ana", "nivel" => 1, "puntos_xp" => 50],
  ["nombre" => "Carlos", "nivel" => 3, "puntos_xp" => 300],
  ["nombre" => "Laura", "nivel" => 4, "puntos_xp" => 500],
];

$jugadores[1]["puntos_xp"] = $jugadores[1]["puntos_xp"] + 150;
$jugadores[1]["nivel"] = $jugadores[1]["nivel"] + 1;
echo $jugadores[1]["nombre"] . " tiene nivel " . $jugadores[1]["nivel"] . " y " . $jugadores[1]["puntos_xp"] . " puntos";