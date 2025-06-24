<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Validaciones</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>



<!-- Div para mostrar errores desde JavaScript -->
<div id="errors" style="color: red;"></div>

<form id="contactForm" method="post" action="validate.php">
    <h2>Ejemplo de Validaciones</h2>
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Teléfono: <input type="text" name="telefono" placeholder="123-456-7890"><br><br>

    <!-- CAPTCHA: suma de dos números -->
    <?php
        $n1 = rand(1, 9);
        $n2 = rand(1, 9);
    ?>
    ¿Cuánto es <?php echo "$n1 + $n2"; ?>?<br>
    <input type="hidden" name="n1" value="<?php echo $n1; ?>">
    <input type="hidden" name="n2" value="<?php echo $n2; ?>">
    <input type="text" name="captcha" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<!-- Div para mostrar la respuesta del servidor -->
<div id="response"></div>

<!-- JavaScript para validación -->
<script src="form-handler.js"></script>

</body>
</html>
