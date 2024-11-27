<?php 
require("classPadre.php");
require("classHijo.php");

$mipadre = new Padre("Jesús", "Astudillo", "73",5);
// echo $mipadre->Hablar()."<br>";
echo "Desde Clase Padre:<br>";
echo $mipadre->Genero("Mujer")."<br>";
echo $mipadre->Genero("Hombre")."<br>";

$hijo = new Hijo("Carlos", "Astudillo", "34",5);

// echo $hijo->Hablar()."<br>";
echo "Desde Clase Hijo:<br>";
echo $hijo->Genero("Hembra")."<br>";
echo $hijo->Genero("Varón")."<br>";