<?php

include("Persona.php");
include("Encarregat.php");

$persona1 = new Persona("Daniela", "Martinez");
$persona2 = new Persona("Ivana", "Gomez");
$persona3 = new Persona("Ioana", "Fernandez");
$persona4 = new Persona("Cris", "Garcia");
$persona5 = new Persona("Krisztyna", "Martin");
$persona6 = new Persona("Ana", "Delgado");
$persona7 = new Persona("Gina", "Serrano");
$persona8 = new Persona("Manolo", "eldelbombo");


echo($persona1->saludar());
echo($persona2->saludar());
echo($persona3->saludar());
echo($persona4->saludar());
echo($persona5->saludar());
echo($persona6->saludar());
echo($persona7->saludar());



echo ($persona8->getNom() . "<br>");
echo ($persona8->getCognom() . "<br>");
$persona8->setNom("Pedro");
echo ($persona8->getNom() . "<br>");
$persona8->setCognom("picovena");
echo ($persona8->getCognom() . "<br>");


$encarregat1 = new Encarregat("Udo", "Romano", 2000);
$encarregat1->aplicarPlus();
echo($encarregat1->getSou() . "<br>");
echo($encarregat1->saludar() . "<br>");



?>