<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora básica en PHP</title>
</head>
<body>
    <h1>Calculadora básica</h1>

    <p>Primer número: <?= $numero1 ?></p>
    <p>Segundo número: <?= $numero2 ?></p>

    <p>Suma: <?= $suma ?></p>
    <p>Resta: <?= $resta ?></p>
    <p>Multiplicación: <?= $multiplicacion ?></p>

    <?php if ($divisionValida): ?>
        <p>División: <?= $division ?></p>
    <?php else: ?>
        <p>No se puede realizar la división.</p>
    <?php endif; ?>

</body>
</html>