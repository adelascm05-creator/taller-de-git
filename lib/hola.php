<?php
// Autor: Adela Sánchez-Crespo Moñino <adelascm05@gmail.com>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
