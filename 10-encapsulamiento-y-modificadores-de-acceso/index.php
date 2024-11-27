<?php 
require("class.php");
// require("classPadre.php");
// require("classHijo.php");

$mipadre = new Padre("Jesús", "Astudillo", "73",5);
// echo $mipadre->Hablar()."<br>";
echo "Desde Clase Padre:<br>";
echo $mipadre->Genero("Mujer")."<br>";
echo $mipadre->Genero("Hombre")."<br>";
$mipadre->Presentar("Carlos","Eduardo","Astudillo","Mireles","34","1990");

echo "<hr>";
$hijo = new Hijo("Carlos", "Astudillo", "34",5);
// echo $hijo->Hablar()."<br>";
echo "Desde Clase Hijo:<br>";
echo $hijo->Genero("Hembra")."<br>";
echo $hijo->Genero("Varón")."<br>";
$hijo->Presentar("Carlos","Eduardo","Astudillo","Mireles","34","1990");

echo "<hr>";
$nieto = new Nieto();
// echo $hijo->Hablar()."<br>";
echo "Desde Clase Nieto:<br>";
echo $nieto->Saludar();