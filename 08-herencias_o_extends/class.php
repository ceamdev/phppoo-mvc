<?php

/** PRACTICAS 08 - PHP POO, Heremcoas o Extends en PHP, como heredas atributos y metodos de 1 clase a otra, si y solo sí 
 * los atributos son "public" no se pueden heradas atributos o métodos "private" o "protected" (modificadores de acceso).
 * 
 * */

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    public string $nombre;
    public string $apellido;
    public int $edad;

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct($nombre,$apellido,$edad)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }
    // METODOS
    public function Hablar($sobremi="Te contare sobre mi"){
        return $sobremi." Hola, soy ".$this->nombre." ".$this->apellido." mi edad es ".$this->edad." años";
    }
}

class Hijo extends Padre{
    // ATRBIUTOS 


    // METODOS 
}

// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */