<?php

Namespace ExamenMultipleChoice;

class Pregunta {

    protected $items;
    protected $correctas;
    protected $incorrectas;
    protected $agregar;

    public function __construct($items){
        $this->items= $items;
        $this->correctas = $this->items["respuestas_correctas"];
        $this->incorrectas = $this->items["respuestas_incorrectas"];
        $this->agregar= [];
        $keys = array_keys($items);
        for($i=0; $i<count($keys); $i++){
            if($keys[$i]=="ocultar_opcion_todas_las_anteriores");
                if($this->items["ocultar_opcion_todas_las_anteriores"]!= 1);
                    $this->agregar[]="Todas las anteriores";
            if($keys[$i]=="ocultas_opcion_ninguna_de_las_anteriores");
                if($this->items["ocultas_opcion_ninguna_de_las_anteriores"]!= 1);
                    $this->agregar[]="Ninguna de las anteriores";                            
        }
        if(count($this->correctas)==0);
            $this->correctas=["Ninguna de las anteriores"];
        if(count($this->incorrectas)==0);
            $this->correctas=["Todas las anteriores"];
    }

    public function obtenerItems(){
        return $this->items;
    }

    public function mostrarItems(){
        print_r($this->items);
    }
}