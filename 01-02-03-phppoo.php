<?php

/** PRACTICAS 01, 02 y 03 - PHP POO
 * ¿Qué es POO (Programción Orientada a Objetos), enfocado en PHP.
 * 
 * Se considera un "paradigma de programación", uno de los más usados, ya que su "forma o estilo de programación";
 * tiene su basamento en conceptos de "clases" y "objetos"; lo qee permite que pueda ser utilizado para estructurar
 * un programa de software en piezas simples y reutilizables de planos de código (clases) para crear instancias individuales
 * de objetos.
 * 
 * Se puede afirmar que una "clase", es un "plantilla" que define de manera genérica como van a ser los "objetos". las clases
 * tienen "atributos" (característicass o variables) y "métodos" (acciones o funciones).
 * 
 * Creamos clases con Atributos, por ejemplo sobre un "Arbol Familiar"
 * 
 * Si creamos un clases llamada.
 * PADRE: esta contendria:
 * ATRIBUTOS, como: Nombre, Color de Ojos, Color de Cabello, Altura, Contextura, entre otros.
 * MÉTODOS, como: Saludar, Trabajar, Caminar, Hablar, entre otros. 
 * 
 * 
 * NOTA: LOS ATRIBUTOS Y MÉTODOS (FUNCIONES), SE PUEDE TIPAR O NO (SE RECOMIENDA TIPARLOS PARA HACER ESTRICTO EL DESARROLLO)
 * */

 class Padre{
    // ATRIBUTOS
    public string $nombre="Jesús Astudillo";
    public string $colorojos="Verdes Claros";
    public string $colorcabello="Negro";
    public int $altura=195;
    public string $contextura="Delgada";
    public string $trabajo="Pintor y Comerciante";
    public string $caminando="caminando...";

    // METODOS
    public function Saludar(){
        return "Hola, soy ".$this->nombre;
    }
    public function Trabajar(){
        return "Soy ".$this->trabajo;

    }
    public function Caminar(){
        return "Estoy ".$this->caminando;
    }
    public function Hablar(){
        return "Hola, soy ".$this->nombre." tengo los ojos de color ".$this->colorojos.", cabello color ".$this->colorcabello." mi altura es de ".$this->altura."cm, de contextura ".$this->contextura;
    }
}

/** PRACTICAS 02 - PHP POO: Instanciando una clase **/
// OBJETOS: Es decir INSTACIAMOS, para usar los ATRIBUTOS y MÉTODOS de la CLASE.
$mipadre = new Padre();
echo $mipadre->Saludar()."<br/>";
echo $mipadre->Trabajar()."<br/>";
echo $mipadre->Caminar()."<br/>";
echo $mipadre->Hablar()."<br/>";


echo "<br/><hr/><br/>"; // para separar las clases
 /** 
 * Otro ejemplo muy usado, es crear una Clase.
 * BaseDeDatos. esta contendria:
 * ATRIBUTOS, como: ost, nombre, usuario, contraseña, puerto, entre otros.
 * METODOS, como: Guardar, Seleccionar, Actualizar, Eliminar, entre otros. 
 */

 class ConectarDB{
    // ATRIBUTOS
    public string $host="localhost";
    public string $database="PruebaDB";
    public string $user="root";
    public string $password="123456";
    public string $port="21";

    // METODOS
    public function Guardar(){
        return "Estoy guardando los datos de la DB: ".$this->database;
    }
    public function Seleccionar(){
        return "Estoy seleccionando los datos de la DB: ".$this->database;

    }
    public function Actualizar(){
        return "Estoy actualizando los datos de la DB: ".$this->database;
    }
    public function Eliminar(){
        return "Estoy eliminando los datos de la DB: ".$this->database;
    }
}

// OBJETOS: Es decir INSTACIAMOS, para usar los ATRIBUTOS y MÉTODOS de la CLASE.
$conexion = new ConectarDB();
echo $conexion->Guardar()."<br/>";
echo $conexion->Seleccionar()."<br/>";
echo $conexion->Actualizar()."<br/>";
echo $conexion->Eliminar()."<br/>";