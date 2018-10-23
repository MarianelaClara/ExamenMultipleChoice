<?php

Namespace ExamenMultipleChoice;

use PHPUnit\Framework\TestCase;

class PreguntasTest extends TestCase {

    public function testObtenerItems(){
        $array= [];
        $array["respuestas_incorrectas"] = [2,3,4];
        $array["respuestas_correctas"] = [1];
        $preguntas= new Pregunta ($array);
        
    }


}