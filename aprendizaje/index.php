<?php
$usuario = [
  "nombre" => "Ana",
  "puntos_xp" => 200,
  "nivel" => 1
];

$usuario["puntos_xp"] = $usuario["puntos_xp"] + 100;

if ($usuario["puntos_xp"] >= 700) {
  $usuario["nivel"] = 5;
} elseif ($usuario["puntos_xp"] >= 450) {
  $usuario["nivel"] = 4;
} elseif ($usuario["puntos_xp"] >= 250) {
  $usuario["nivel"] = 3;
} elseif ($usuario["puntos_xp"] >= 100) {
  $usuario["nivel"] = 2;
} else {
  $usuario["nivel"] = 1;
}

echo $usuario["nombre"] . " tiene " . $usuario["puntos_xp"] . " puntos y nivel " . $usuario["nivel"];