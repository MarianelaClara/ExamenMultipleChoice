<?php

Namespace ExamenMultipleChoice;

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Parser;

class Prueba {

    protected $archivo;
    protected $preguntas;
    protected $indice="preguntas";
    public function __construct($direccion=""){
        $yaml = new Parser();
        $this->archivo = $yaml->parse( file_get_contents($direccion));
        $this->preguntas= [];
        for($i=0; $i<count($this->archivo[$this->indice]); $i++){
            $this->preguntas[$i]= new Pregunta($this->archivo[$this->indice][$i]);
        }
    }
    public function obtenerArchivo(){
        return $this->archivo;
    }

    public function obtenerPreguntas(){
        return $this->preguntas;
    }

    public function mezclarPreguntas(){
        shuffle($this->preguntas);
    }
    //$yaml = new Parser();

    //$value = $yaml->parse( file_get_contents('../preguntas.yml'));
    public function mostrarPrueba(){
        print_r($this->archivo);
    }
    /*$array= [];
    $array[0]= "hola";
    $array[1]= "xd";
    $yaml = Yaml::dump($array);
    file_put_contents('../preguntas.yml', $yaml);
    echo Yaml::dump($yaml, 3,2);

    $value = Yaml::parseFile('../preguntas.yml');
    */
}