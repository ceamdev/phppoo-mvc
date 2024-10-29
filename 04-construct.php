<?php

/** PRACTICAS 04 - PHP POO, método "construct".
 * 
 * */

 class Padre{
    // ATRIBUTOS
    public string $nombre="Jesús";
    public string $apellido;
    public int $edad;
    public string $colorojos="Verdes Claros";
    public string $colorcabello="Negro";
    public int $altura=195;
    public string $contextura="Delgada";
    public string $trabajo="Pintor y Comerciante";
    public string $caminando="caminando...";

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct($apellido,$edad)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->apellido=$apellido;
        $this->edad=$edad;
        //echo "Soy el metodo construct..., yo me auto INVOCO O EJECUTO al inicializar la clase, no hace falta que me instancie directamente.";
    }

    // METODOS
    // public function Saludar(){
    //     return "Hola, soy ".$this->nombre;
    // }
    // public function Trabajar(){
    //     return "Soy ".$this->trabajo;

    // }
    // public function Caminar(){
    //     return "Estoy ".$this->caminando;
    // }
    public function Hablar($sobremi="Te contare sobre mi"){
        return $sobremi." Hola, soy ".$this->nombre." ".$this->apellido." mi edad es ".$this->edad." años, tengo los ojos de color ".$this->colorojos.", cabello color ".$this->colorcabello." mi altura es de ".$this->altura."cm, de contextura ".$this->contextura;
    }
}

// OBJETOS: usando método public function __construct
$mipadre = new Padre("Astudillo",72); // apellido y edad, desde el método __construct($apellido, $edad)
echo $mipadre->Hablar()."<br>";

$otropadre = new Padre("Ramirez",52); // apellido y edad, desde el método __construct($apellido, $edad)
echo $otropadre->Hablar("Te diré quien soy ")."<br>";


// OBJETOS: Es decir INSTACIAMOS, para usar los ATRIBUTOS y MÉTODOS de la CLASE.
// $mipadre = new Padre();
// echo $mipadre->Saludar()."<br/>";
// echo $mipadre->Trabajar()."<br/>";
// echo $mipadre->Caminar()."<br/>";
// echo $mipadre->Hablar()."<br/>";