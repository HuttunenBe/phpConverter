<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="resultCircle">
        <h1>Converter</h1>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convertTemperature']) && $_POST['temperature'] !== '') {
            $tempCelsius = $_POST['temperature'];
            $fahrenheit = $tempCelsius * 9 / 5 + 32;
            $kelvin = $tempCelsius + 273.15;

            echo "<p>$tempCelsius °C = $fahrenheit °F</p>";
            echo "<p>$tempCelsius °C =  $kelvin  K</p>";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convertSpeed']) && $_POST['speed'] !== '') {
            $speedKmH = $_POST['speed'];
            $speedMS = $speedKmH / 3.6;
            $speedKnots = $speedKmH / 1.852;

            echo "<p>$speedKmH km/h =  $speedMS  m/s</p>";
            echo "<p>$speedKmH km/h =  $speedKnots knots</p>";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convertMass']) && $_POST['mass'] !== '') {
            $massKg = $_POST['mass'];
            $kgToGrams = $massKg * 1000;

            echo "<p> $massKg kg =   $kgToGrams  grams</p>";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convertGrams']) && $_POST['grams'] !== '') {
            $grams = $_POST['grams'];
            $gramsToKg = $grams / 1000;

            echo "<p>$grams grams =  $gramsToKg kg</p>";
        }
        ?>

        <div class="container">
            <form method="POST">
                <label>Temperature (Celsius):</label>
                <input type="number" name="temperature"><br>
                <input type="submit" name="convertTemperature" value="Convert Celcius to °F & K">
            </form>

            <form method="POST">
                <h2>Speed (km/h):</h2>
                <input type="number" name="speed"><br>
                <input type="submit" name="convertSpeed" value="Convert Speed to m/s & knots">
            </form>

            <form method="POST">
                <label>Mass (kg):</label>
                <input type="number" name="mass"><br>
                <input type="submit" name="convertMass" value="Convert Kg to Grams">
            </form>

            <form method="POST">
                <h2>Mass (grams):</h2>
                <input type="number" name="grams"><br>
                <input type="submit" name="convertGrams" value="Convert Grams to Kg">
            </form>
        </div>
</body>

</html>

<!--if ($_SERVER['REQUEST_METHOD'] === 'POST' (CHECK IF FORM WAS SUBMITTED) && isset($_POST['convertTemperature']) (CHECKS IF BUTTON WAS PUSHED) && $_POST['temperature'] !== '') (CHECKS THAT INPUT IS NOT EMPTY){
        $tempCelsius = $_POST['temperature']; (THIS STORES THE INPUT!)
            $fahrenheit = $tempCelsius * 9 / 5 + 32; (VARIABLE STORES THE RESULT)
            $kelvin = $tempCelsius + 273.15; 
            
            DIV OUTSIDE PHP= <div class="result"></div>
            DIV INSIDE PHP = '<div class="result">''</div>'
            CAN ALSO WRAP EACH ECHO RESULT IN <P>
            -->