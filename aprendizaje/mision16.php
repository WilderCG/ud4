<?php
$misiones = [
  ["titulo" => "Crear formulario", "puntos_xp" => 100],
  ["titulo" => "Configurar Laravel", "puntos_xp" => 200],
  ["titulo" => "Validar datos", "puntos_xp" => 150]
];

foreach ($misiones as $mision) {
  echo $mision["titulo"] . " - " . $mision["puntos_xp"] . "\n";
}