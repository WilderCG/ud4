<?php
$misiones = [
  ["titulo" => "Crear formulario", "puntos_xp" => 100],
  ["titulo" => "Configurar Laravel", "puntos_xp" => 200],
  ["titulo" => "Validar datos", "puntos_xp" => 150],
  ["titulo" => "Crear controlador", "puntos_xp" => 300]
];

$total = 0;

foreach ($misiones as $mision) {
  $total = $total + $mision["puntos_xp"];
}

echo "Experiencia total: " . $total . " XP";