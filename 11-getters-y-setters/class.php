<?php

/** PRACTICA 11 - GETTERS Y SETTERS, Estos  metodos permiten el accesos a metodos y propiedades, asi estas
 * tengo los modificadores de acceso que no lo permitan (protected y private)..
 * 
 * Getter: nos pemiten obtener acceso el o los valores de una prpiedad de la clase y asi poder utilizar dicho 
 * valor en diferentes meétodos.
 * 
 * Setter: nos brinda la posibilidad de acceso a propiedades especificas para poder asignar un valor distinto fuera 
 * de la clase.
*/

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    
    private string $nombre;
    private string $apellido;
    private string $genero;

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null 
     * (es decir no tienen datos asignados). Por Ej. apellido, edad
     * */
    public function __construct($nombre,$apellido,$genero)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->genero=$genero;
    }

    public function Presentar(){
           echo $this->nombre;
           echo $this->apellido;
           echo $this->genero;
    }

    /** USO DE GETTER */
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getGenero(){
        return $this->genero;
    }

    /** USO DE SETTER */
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->nombre=$apellido;
    }
    public function setGenero($genero){
        $this->nombre=$genero;
    }
}

/** La clase Hijo extiende de la clase Padre sus metodos y atributos. */
class Hijo extends Padre{

        // METODOS EN COMÚN LA CLASE PADRE E HIJO.

        public function Presentar(){
            echo $this->nombre;
            echo $this->apellido;
            echo $this->genero;
    }
}

class Nieto extends Hijo{


        public function Presentar(){
            echo $this->nombre;
            echo $this->apellido;
            echo $this->genero;
    }
}    
// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */