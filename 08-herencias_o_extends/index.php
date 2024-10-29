<?php 
require("class.php");

$mipadre = new Padre("Jesús", "Astudillo", "73");

echo $mipadre->Hablar()."<br>";

$hijo = new Padre("Carlos", "Astudillo", "34");

echo $hijo->Hablar()."<br>";