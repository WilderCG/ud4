<?php
$misiones = [
  ["titulo" => "Crear formulario", "puntos_xp" => 100],
  ["titulo" => "Configurar Laravel", "puntos_xp" => 200],
  ["titulo" => "Validar datos", "puntos_xp" => 150],
  ["titulo" => "Diseñar interfaz", "puntos_xp" => 50],
  ["titulo" => "Crear controlador", "puntos_xp" => 300]
];

foreach ($misiones as $mision) {
  if ($mision["puntos_xp"] >= 150) {
    echo $mision["titulo"] . " - " . $mision["puntos_xp"] . " XP " . "\n";
  }
}