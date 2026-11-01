
<?php
/**
 * UT2 - Actividad 1
 * Calculadora básica en PHP
 *
 * Realiza las cuatro operaciones aritméticas con dos números enteros o decimales
 * y evita la división entre cero.
 */

// Números utilizados en las operaciones
$numero1 = 10.5;
$numero2 = 2.5;

// Realizamos las operaciones aritméticas
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;

// Comprobamos que podemos dividir entre el segundo número
$divisionValida = ($numero2 != 0);

// Mostramos los resultados
echo "Calculadora básica en PHP\n";
echo "Primer número: $numero1\n";
echo "Segundo número: $numero2\n";

echo "Suma: $suma\n";
echo "Resta: $resta\n";
echo "Multiplicación: $multiplicacion\n";

// Evitamos dividir entre cero
if ($divisionValida && is_numeric($numero1)) {
    $division = $numero1 / $numero2;
    echo "División: $division\n";
} else {
    echo "No se puede realizar la división.\n";
}
?>
