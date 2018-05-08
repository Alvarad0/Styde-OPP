<?php
require "src/helpers.php";
#Autocarga de Clases
spl_autoload_register(function ($className) {
    if (file_exists("src/$className.php"))
        require "src/$className.php";
    });

$ramm = new Soldier('Ramm');
$silence = new Archer('Alvarado');
#$silence->move('el norte');
$silence->attack($ramm);
$silence->attack($ramm);
$ramm->attack($silence);