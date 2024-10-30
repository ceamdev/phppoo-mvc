<?php class Hijo extends Padre{
    // ATRBIUTOS 
    public string $generoHijo; // ATRIBUTO EN COMÚN PADRE E HIJO // para extenders, deben cmpartie el mismo atributo ambas clases padre e hijo.

  // METODOS EN COMÚN LA CLASE PADRE E HIJO.
    public function Genero($genero){
        return $this->generoHijo=$genero;
 }
}
