
<?php
/**
 * UT2 - Actividad 4
 * Manejo de errores y depuración
 * Gestión de stocks
 */

// Datos iniciales
$stock = 80;
$pedido = 65;

try {
    // Comprobamos si hay stock suficiente
    if ($pedido > $stock) {
        throw new Exception("Stock insuficiente para el pedido.");
    }

    // Actualizamos las existencias
    $stock = $stock - $pedido;
    echo "Pedido procesado. Stock restante: $stock\n";

} catch (Exception $error) {
    // Mostramos el error
    echo "Error: " . $error->getMessage() . "\n";

    // Registramos el error en un archivo
    error_log(
        $error->getMessage() . "\n",
        3,
        __DIR__ . "/errores.log"
    );
}
?>
