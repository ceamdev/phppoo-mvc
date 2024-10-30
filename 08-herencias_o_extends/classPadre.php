<?php

/** PRACTICAS 08 s- PHP POO, Heremcoas o Extends en PHP, como heredas atributos y metodos de 1 clase a otra, si y solo sí 
 * los atributos son "public" no se pueden heradas atributos o métodos "private" o "protected" (modificadores de acceso).
 * 
 * NOTA: PHP no prmite la herencias multiples. 
 * Se pueden separar por archivos.
 * */

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $generoHijo="Hembra";
    public int $numeroHijo;

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct($nombre,$apellido,$edad,$numeroHijo)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->numeroHijo=$numeroHijo;
    }
    // METODOS
    public function Hablar($sobremi="Te contare sobre mi"){
        return $sobremi." Hola, soy ".$this->nombre." ".$this->apellido." mi edad es ".$this->edad." años"." i primer hijo es: ".$this->generoHijo." ";
    }
}

/** Se puede separa las clases que heradan en otro archivo como classHijo.php y llamarlo con require en index.php
 * 
 */
// /** La clase Hijo extiende de la clase Padre sus metodos y atributos. */
// class Hijo extends Padre{
//     // ATRBIUTOS 
//     public string $generoHijo="Varón"; // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

//     // METODOS 
//     public function Genero(){
//        return $this->generoHijo;
//     }
// }

// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */