<?php

Namespace ExamenMultipleChoice;

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase {

    public function testLeerArchivo(){
        $prueba= new Prueba('preguntas.yml');
        //$prueba->mostrarPrueba();
        $this->assertTrue(TRUE);
    }
    
    public function testMezclar(){
        $prueba= new Prueba('preguntas.yml');
        $prueba2= new Prueba('preguntas.yml');
        $prueba->mezclarPreguntas();
        $prueba->mostrarPrueba();
        $this->assertNotEquals($prueba->obtenerPreguntas(), $prueba2->obtenerPreguntas());
    }
}