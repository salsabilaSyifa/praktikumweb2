<?php
$celcius = 37.841;
$cFarenheit = ((9/5)*$celcius)+32;
$cReamur = (4/5)*$celcius;
$cKelvin = $celcius+273;

printf("Farenheit (F) = %.4f ",$cFarenheit);
echo "<br>";

printf("Reamur (R) = %.4f ",$cReamur);
echo "<br>";

printf("Kelvin (K) = %.4f ",$cKelvin);
echo "<br>";
?>