<?php
$anaNome = 'Ana Latorre';
$anaPeso = 50;
$anaAltura =  1.63;
$imc = number_format($anaPeso / ($anaAltura*$anaAltura), 2, ",", ".");

echo "$anaNome, seu IMC é $imc.";
