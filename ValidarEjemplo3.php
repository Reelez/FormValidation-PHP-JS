<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validaciones con Fetch</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form id="contactForm" action="process.php" method="post">
    <h2>Validaciones con Fetch</h2>

    <div id="errors"></div>

    Name:
    <input type="text" name="name" required>

    Email:
    <input type="text" name="email" required>

    Teléfono:
    <input type="text" name="telefono" placeholder="123-456-7890" required>

    <?php
        $n1 = rand(1, 9);
        $n2 = rand(1, 9);
    ?>
    ¿Cuánto es <?php echo "$n1 + $n2"; ?>?
    <input type="hidden" name="n1" value="<?php echo $n1; ?>">
    <input type="hidden" name="n2" value="<?php echo $n2; ?>">
    <input type="text" name="captcha" required>

    <input type="submit" name="submit" value="Enviar">
</form>

<div id="response"></div>

<script src="form-handler.js" defer></script>
</body>
</html>
