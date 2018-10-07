<?php  

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Parser;

$yaml = new Parser();

$value = $yaml->parse( file_get_contents('preguntas.yml'));

print_r($value[preguntas]);
echo count($value[preguntas]);