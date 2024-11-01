<?php

/** PRACTICAS 09 - POLOMORFISMO EN PHP POO, se puede traducir como la capacidad que tiene un metodo para comportarse
 * o responder de distinta forma en diferentes clases que se Heredan (Extends) por ejemplo una clase (Padre - Hijo)
 * 
 * En las Heremcoas o Extends en PHP, como heredas atributos y metodos de una clase a otra, si y solo sí 
 * los atributos son "public" no se pueden heradas atributos o métodos "private" o "protected" (modificadores de acceso).
 * Luego aprendere a trabaja con los modificadores de acceso "private", "protected" y "static". 
 * NOTA: PHP no prmite la herencias multiples.
 *  
 * */

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $generoHijo; // ATRIBUTO EN COMÚN PADRE E HIJO // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct($nombre,$apellido,$edad)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }
    // METODOS
    // public function Hablar($sobremi="Te contare sobre mi"){
    //     return $sobremi." Hola, soy ".$this->nombre." ".$this->apellido.", mi edad es ".$this->edad." años";
    // } 
    
    // METODOS EN COMÚN LA CLASE PADRE E HIJO.
    public function Genero($genero){
       return $this->generoHijo=$genero;
    }
}
/** La clase Hijo extiende de la clase Padre sus metodos y atributos. classHijo.php */

// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */