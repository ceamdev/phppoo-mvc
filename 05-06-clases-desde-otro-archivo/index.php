<?php 
require_once("clase.php");
//require("clase.php");
//include("clase.php");

$mipadre = new Padre("Astudillo",72); // apellido y edad, desde el método __construct($apellido, $edad)
echo $mipadre->Hablar()."<br>";

$otropadre = new Padre("Ramirez",52); // apellido y edad, desde el método __construct($apellido, $edad)
echo $otropadre->Hablar("Te diré quien soy ")."<br>";


// OBJETOS: Es decir INSTACIAMOS, para usar los ATRIBUTOS y MÉTODOS de la CLASE.
$mipadre = new Padre("Astudillo Mireles",34); // se colocan los parametros porque se usa __construct()
echo $mipadre->Saludar()."<br/>";
echo $mipadre->Trabajar()."<br/>";
echo $mipadre->Caminar()."<br/>";
echo $mipadre->Hablar()."<br/>";