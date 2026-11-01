
<?php
/**
 * UT2 - Actividad 4
 * Análisis de demanda y gestión de stocks
 * Funciones con paso por valor y por referencia
 */

// Datos iniciales
$stock = 50;
$demanda = 12;
$salidas = 8;

// PASO POR VALOR
// Calculamos el stock previsto sin modificar el original
function analizarDemanda(int $stock, int $demanda): int {
    return $stock - $demanda;
}

// PASO POR REFERENCIA
// Actualizamos el stock con las salidas confirmadas
function actualizarStock(int &$stock, int $salidas): void {
    $stock = $stock - $salidas;
}

// Mostramos el stock inicial
echo "Stock inicial: $stock unidades\n";

// Análisis de la demanda
$stockPrevisto = analizarDemanda($stock, $demanda);

echo "\nANÁLISIS DE DEMANDA\n";
echo "Demanda prevista: $demanda unidades\n";
echo "Stock previsto: $stockPrevisto unidades\n";
echo "Stock original sin modificar: $stock unidades\n";

// Gestión de stocks
actualizarStock($stock, $salidas);

echo "\nGESTIÓN DE STOCKS\n";
echo "Salidas confirmadas: $salidas unidades\n";
echo "Stock actualizado: $stock unidades\n";
?>
