<?php
    /** La clase Hijo extiende de la clase Padre sus metodos y atributos. */
class Hijo extends Padre{
    // ATRBIUTOS 
    public string $generoHijo="Varón"; // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

    // METODOS 
    public function Genero(){
       return $this->generoHijo;
    }
}