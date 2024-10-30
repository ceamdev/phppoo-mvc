<?php 
require("classPadre.php");
require("classHijo.php"); // classHijo.php heredando (extends) de classPadre.php 

$mipadre = new Padre("Jesús", "Astudillo", "73",5);

echo $mipadre->Hablar()."<br>";

$hijo = new Hijo("Carlos", "Astudillo", "34",5);

echo $hijo->Hablar()."<br>";
echo $hijo->Genero()."<br>";