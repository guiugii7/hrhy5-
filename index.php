<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $unit = $_POST['unit'];

    if ($unit === 'celsius') {
        $converted_temperature = ($temperature * 9/5) + 32;
        echo "Температура в Фаренгейтах: " . $converted_temperature;
    } elseif ($unit === 'fahrenheit') {
        $converted_temperature = ($temperature - 32) * 5/9;
        echo "Температура в Цельсиях: " . $converted_temperature;
    }
}
?>

