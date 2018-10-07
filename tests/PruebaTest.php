<?php

Namespace ExamenMultipleChoice;

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase {

    public function testLeerArchivo(){
        $prueba= new Prueba('preguntas.yml');
        $prueba->mostrarPrueba();
        $this->assertTrue(TRUE);
    }
    public function testAnda(){
        $this->assertTrue(TRUE);
    }
}