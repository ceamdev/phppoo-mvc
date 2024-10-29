<?php

/** PRACTICAS 04 - PHP POO, método "construct" con los property promotion, nuevo a partir de  php 8.x.
 * Es una nueva y mas corta forma de escribir los constructs, para simplificar su uso.
 * */

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    // public string $nombre;
    // public string $apellido;
    // public int $edad;

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct(public string $nombre,public string $apellido, public int $edad)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        //echo "Soy el metodo construct..., yo me auto INVOCO O EJECUTO al inicializar la clase, no hace falta que me instancie directamente.";
    }

    // METODOS
    public function Hablar($sobremi="Te contare sobre mi"){
        return $sobremi." Hola, soy ".$this->nombre." ".$this->apellido." mi edad es ".$this->edad." años";
    }
}

// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */