<!DOCTYPE html>
<html>

<head>
    <title>Conversor de Temperatura</title>
</head>

<body>

    <h2>Conversão de Fº para Cº</h2>

    <form method="post">
        <label for="fahrenheit">Digite a temperatura em Fº:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function fahrenheitParaCelsius($fahrenheit) {

            return ($fahrenheit - 32) * 5 / 9;
        }

        $fahrenheit = $_POST["fahrenheit"];
        $celsius = fahrenheitParaCelsius($fahrenheit);

        echo "<p>$fahrenheit °F é igual a " . number_format($celsius, 2) . " °C</p>";
    }

    ?>

</body>

</html>