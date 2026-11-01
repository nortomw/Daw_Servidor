<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora básica en PHP</title>
</head>
<body>
    <h1>Calculadora básica</h1>

    <?php
    // Definimos los números
    $numero1 = 10.5;
    $numero2 = 2.5;

    // Realizamos las operaciones
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    ?>

    <p>Primer número: <?= $numero1 ?></p>
    <p>Segundo número: <?= $numero2 ?></p>

    <p>Suma: <?= $suma ?></p>
    <p>Resta: <?= $resta ?></p>
    <p>Multiplicación: <?= $multiplicacion ?></p>

    <?php if ($numero2 != 0 && is_numeric($numero1)): ?>
        <p>División: <?= $numero1 / $numero2 ?></p>
    <?php else: ?>
        <p>No se puede realizar la división.</p>
    <?php endif; ?>

</body>
</html>