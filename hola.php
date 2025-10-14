<?php
// Autor: Adela Sánchez-Crespo Moñino <adelascm05@gmail.com>
// El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
print new HolaMundo($nombre);