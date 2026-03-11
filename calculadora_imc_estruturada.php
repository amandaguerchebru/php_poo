<?php
$anaNome = 'Ana Latorre';
$anaPeso = 50;
$anaAltura =  1.63;
$anaImc = number_format($anaPeso / ($anaAltura*$anaAltura), 2, ",", ".");

echo "$anaNome, seu IMC é $anaImc. <br>";

$gustavoNome = 'Gustavo Almeida';
$gustavoPeso = 160;
$gustavoAltura =  1.93;
$gustavoImc = number_format($gustavoPeso / ($gustavoAltura*$gustavoAltura), 2, ",", ".");

echo "$gustavoNome, seu IMC é $gustavoImc. <br>";
