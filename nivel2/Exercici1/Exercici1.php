<?php
require_once 'BackedString.php';
require_once 'ResourceType.php';
require_once 'Topic.php';
require 'DidacticResource.php';


$a = new DidacticResource('PHP Avanzado', 'PkP', 'internet', 'https://itacademy.barcelonactiva.cat/mod/page/view.php?id=14508');
$a->setTopic('php');
$a->setResource('internet');
$a->setResource('web');
$b = new DidacticResource('PHP Avanzado', 'LARaVeL', 'Video', 'https://itacademy.barcelonactiva.cat/mod/page/view.php?id=14508');
echo var_dump($a);
echo var_dump($b);
