<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {



    // Validar CAPTCHA
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$captcha = $_POST['captcha'];

if ((int)$captcha !== ((int)$n1 + (int)$n2)) {
    echo "CAPTCHA incorrecto.";
    exit;
}

    // Sanitize and validate name
    $name = test_input($_POST["name"]);
    $nameErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    
    // Sanitize and validate email
    $email = test_input($_POST["email"]);
    $emailErr = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    //Sanitize and validate teléfono
$telefono = test_input($_POST["telefono"]);
$telefonoErr = "";
if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $telefono)) {
   $telefonoErr = "El teléfono debe tener el formato 123-456-7890";
}


    
    // ... Additional validation checks ...


    if ($nameErr != "" || $emailErr != "" || $telefonoErr != "") {
    echo "<b>Error:</b>";
    echo "<br>" . $nameErr;
    echo "<br>" . $emailErr;
    echo "<br>" . $telefonoErr;
}

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}   
?>