<?php
require_once 'BackedString.php';
require_once 'ResourceType.php';
require_once 'Topic.php';
require 'DidacticResource.php';

$a = new DidacticResource('PHP Avanzado', 'PkP', 'internet', 'https://itacademy.barcelonactiva.cat/mod/page/view.php?id=14508');
echo $a->log;
$a->setTopic('php');
echo $a->log;
$a->setResource('internet');
echo $a->log;
$a->setResource('web');
echo $a->log;
$b = new DidacticResource('PHP Avanzado', 'LARaVeL', 'Video', 'https://itacademy.barcelonactiva.cat/mod/page/view.php?id=14508');
echo $a->log;
echo var_dump($a);
echo var_dump($b);
