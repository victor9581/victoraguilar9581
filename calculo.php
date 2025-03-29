<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        if ($num1 > 0 && $num2 > 0) {
            echo "Suma: " . ($num1 + $num2) . "<br>";
            echo "Resta: " . ($num1 - $num2) . "<br>";
            echo "Multiplicación: " . ($num1 * $num2) . "<br>";
            echo "División: " . ($num1 / $num2) . "<br>";
        } else {
            echo "Ambos números deben ser mayores que 0.";
        }
    }
?>
<form method="post">
    Número 1: <input type="number" name="num1" required>
    Número 2: <input type="number" name="num2" required>
    <button type="submit">Calcular</button>
</form>
