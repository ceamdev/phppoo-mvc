<?php

/** PRACTICA 10 - Encapsulamiento y Modificadores de Acceso - PHP POO.
 * 
 * Encapsulamiento hace referencia a la forma en como "mostramos" y "ocultamos" información, dentro
 * de nuestros códigos para restringirlos fuera de entorno de una clase, cuando esta se hereda de una a otra.
 * permitiendo o no el acceso a esta mediante los modificadores de acceso (public, private y protected, además de el static).
 * 
 * Los modificadores de acceso, permiten indicar como será el accesos a las propiedades (atributos) y métodos (funciones)
 * dentro de la clases.
 * 
 * Public - Permite el acceso a la clase desde cualquier parte del programa, incluyendo otras clases e instancias de objetos.
 * Protected - Permite el acceso solo dentro de la misma clases y las clases que esta hereda (extends).
 * Private - Permite el acceso solo denrto de la misma clase.
 * 
 */

 class Padre{
    /** no hacen falta los atributos en la clase para trabajar con estos __construct */
    // ATRIBUTOS
    
    public string $nombre;
    public string $segundonombre;
    public string $apellido;
    protected string $segundoapellido;
    protected string $edad;
    private string $anionacimiento;
    private string $generoHijo; // ATRIBUTO EN COMÚN PADRE E HIJO // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

    /** MÉTODO "construct", nos permite definir valores (parametros) de los atributos de una clase, cuando estos estan en null (es decir no tienen datos asignados). Por Ej. apellido, edad*/
    public function __construct($nombre,$apellido,$edad)
    {
        // llamamos a los parametros para poder usarlos en la instancia de la clase.
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }

    //protected function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
    //private function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
    public function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
        echo $this->nombre=$nombre."<br>";
        echo $this->segundonombre=$segundonombre."<br>";
        echo $this->apellido=$apellido."<br>";
        echo $this->segundoapellido=$segundoapellido."<br>";
        echo $this->edad=$edad."<br>";
        echo $this->anionacimiento=$anionacimiento."<br>";
    }    
    // METODOS EN COMÚN LA CLASE PADRE E HIJO.
    public function Genero($genero){
       return $this->generoHijo=$genero;
    }
}

/** La clase Hijo extiende de la clase Padre sus metodos y atributos. */
class Hijo extends Padre{
    // ATRBIUTOS 
    public string $generoHijo; // ATRIBUTO EN COMÚN PADRE E HIJO // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

  // METODOS EN COMÚN LA CLASE PADRE E HIJO.
    public function Genero($genero){
        return $this->generoHijo=$genero;
 }
    //protected function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
    //private function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
    public function Presentar($nombre, $segundonombre, $apellido, $segundoapellido, $edad, $anionacimiento){
     echo $this->nombre=$nombre."<br>";
     echo $this->segundonombre=$segundonombre."<br>";
     echo $this->apellido=$apellido."<br>";
     echo $this->segundoapellido=$segundoapellido."<br>";
     echo $this->edad=$edad."<br>";
     echo $this->anionacimiento=$anionacimiento."<br>";
 } 
}

    class Nieto{

        public string $nombre="Sharon";

        public function Saludar(){
            return $this->nombre;
        }
    }
// OBJETOS: usando método public function __construct
/** Las instancias $mipadre = new Padre(); estan en el index.php */