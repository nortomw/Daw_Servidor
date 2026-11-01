<?php
/**
 * UT2 - Actividad 3
 * Gestión de entradas de cine
 * Ejemplos de while, do-while, for y foreach
 */

// Datos de la sesión
$entradasDisponibles = 5;
$entradasVendidas = 0;
$peliculas = ["Avatar", "Titanic", "Interstellar"];

// WHILE: vendemos entradas mientras queden disponibles
echo "VENTA DE ENTRADAS\n";

while ($entradasDisponibles > 0) {
    $entradasVendidas++;
    $entradasDisponibles--;

    echo "Entrada vendida: $entradasVendidas\n";
}

// DO-WHILE: comprobamos al menos una vez el estado de la sesión
echo "\nESTADO DE LA SESIÓN\n";

do {
    if ($entradasDisponibles == 0) {
        echo "Entradas agotadas.\n";
    } else {
        echo "Quedan $entradasDisponibles entradas.\n";
    }
} while ($entradasDisponibles > 0);

// FOR: numeramos las entradas vendidas
echo "\nENTRADAS VENDIDAS\n";

for ($i = 1; $i <= $entradasVendidas; $i++) {
    echo "Entrada número $i\n";
}

// FOREACH: recorremos el listado de películas
echo "\nPELÍCULAS DISPONIBLES\n";

foreach ($peliculas as $pelicula) {
    echo "- $pelicula\n";
}
?>