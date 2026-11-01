<?php
/**
 * UT2 - Actividad 2
 * Separación de lógica y presentación
 * Controlador de la calculadora
 */

// Definimos los números
$numero1 = 10.5;
$numero2 = 2.5;

// Realizamos las operaciones
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;

// Comprobamos que podemos dividir
$divisionValida = ($numero2 != 0 && is_numeric($numero1));

if ($divisionValida) {
    $division = $numero1 / $numero2;
} else {
    $division = null;
}

// Cargamos la vista
require __DIR__ . '/UT2_actividad2_vista.php';