<?php

$usuario = [
  "nombre" => "Ana",
  "puntos_xp" => 50,
  "nivel" => 1
];

$misiones = [
  ["titulo" => "Crear formulario", "puntos_xp" => 100, "estado" => "completada"],
  ["titulo" => "Configurar Laravel", "puntos_xp" => 200, "estado" => "pendiente"],
  ["titulo" => "Validar datos", "puntos_xp" => 150, "estado" => "completada"],
  ["titulo" => "Diseñar interfaz", "puntos_xp" => 50, "estado" => "pendiente"],
  ["titulo" => "Crear controlador", "puntos_xp" => 300, "estado" => "completada"]
];

echo "Misiones completadas: " . "\n";

foreach ($misiones as $mision) {
  if ($mision["estado"] === "completada") {
    $usuario["puntos_xp"] = $usuario["puntos_xp"] + $mision["puntos_xp"];
    echo $mision["titulo"] . " - " . $mision["puntos_xp"] . " XP" . "\n";
  } 
  
  }
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

echo "\n";
echo $usuario["nombre"] . " tiene " . $usuario["puntos_xp"] . " puntos y nivel " . $usuario["nivel"];