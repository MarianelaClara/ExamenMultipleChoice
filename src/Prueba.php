<?php

Namespace ExamenChoice;

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Parser;
$yaml = new Parser();

$value = $yaml->parse( file_get_contents('../preguntas.yml'));

print_r($value[preguntas][0]);

/*$array= [];
$array[0]= "hola";
$array[1]= "xd";
$yaml = Yaml::dump($array);
file_put_contents('../preguntas.yml', $yaml);
echo Yaml::dump($yaml, 3,2);

$value = Yaml::parseFile('../preguntas.yml');
*/