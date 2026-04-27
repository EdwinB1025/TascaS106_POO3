<?php
include __DIR__ . '/NewClass.php';

$a = new Example('Full Stack', 23, 'PHP');
echo $a;
echo var_dump($a);
$a->setName("Especializacion en full stack development");
