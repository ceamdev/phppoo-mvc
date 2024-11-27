<?php 
require("class.php");
// require("classPadre.php");
// require("classHijo.php");

$mipadre = new Padre("Jesus<br>","Astudillo<br>","Masculino<br>");
echo "Desde Clase Padre:<br>";
$mipadre->Presentar("Jesus","Astudillo","Masculino");

echo "<hr>";
$hijo = new Hijo("Carlos<br>","Astudillo<br>","Masculino<br>");
echo "Desde Clase Hijo:<br>";
echo $hijo->Presentar();
echo "<br>Accediendo desde Getter: ".$hijo->getNombre()."<br>";
echo "Accediendo desde Getter: ".$hijo->getApellido()."<br>";
echo "Accediendo desde Getter: ".$hijo->getGenero()."<br>";
echo "Cambiando desde Setter: " . $hijo->setNombre("Eduardo") . $hijo->getNombre();
echo "<br>Accediendo desde Getter con el nombre modificado desde el Setter: ".$hijo->getNombre()."<br>";

echo "<hr>";
$nieto = new Nieto("Sharon<br>", "Astudillo<br>", "Femenino<br>");
echo "Desde Clase Nieto:<br>";
$nieto->Presentar();
echo "<br>Accediendo desde Getter: ".$nieto->getNombre()."<br>";
echo "Accediendo desde Getter: ".$nieto->getApellido()."<br>";
echo "Accediendo desde Getter: ".$nieto->getGenero()."<br>";
echo "Cambiando desde Setter: " . $nieto->setNombre("Alanna") . $nieto->getNombre();
echo "<br>Accediendo desde Getter con el nombre modificado desde el Setter: ".$nieto->getNombre()."<br>";