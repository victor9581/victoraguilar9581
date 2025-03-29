formulario.php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $email = trim($_POST["email"]);
        $edad = trim($_POST["edad"]);
        
        $errores = [];
        if (empty($nombre)) {
            $errores[] = "El nombre no puede estar vacío.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo no es válido.";
        }
        if (!is_numeric($edad) || $edad <= 0) {
            $errores[] = "La edad debe ser un número mayor que 0.";
        }
        
        if (empty($errores)) {
            echo "Hola $nombre, tus datos han sido registrados correctamente.";
        } else {
            foreach ($errores as $error) {
                echo "$error <br>";
            }
        }
    }
?>
<form method="post">
    Nombre: <input type="text" name="nombre" required>
    Correo: <input type="email" name="email" required>
    Edad: <input type="number" name="edad" required>
    <button type="submit">Enviar</button>
</form>