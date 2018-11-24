<?php  
Namespace ExamenMultipleChoice;
require_once __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Parser;
$prueba = new Prueba;
$yaml = new Parser();

$value = $yaml->parse(file_get_contents('preguntas.yml'));

print_r($value);
