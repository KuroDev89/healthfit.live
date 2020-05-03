<?php
if(isset($_POST['submit'])){
$destino="aurelio.dc.89@gmail.com";
$mail=$_POST["email"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$mobOS=$_POST["mobileOS"];
$exer1=$_POST["excersise1"];
$exer2=$_POST["excersise2"];
$music=$_POST["music"];
$diet1=$_POST["diet1"];
$diet2=$_POST["diet2"];


if ($_POST['stopspam'] != ""){
 // Es un SPAMbot
 exit();
 
} else {
 // Es un usuario real, proceder a enviar el formulario.
 
}

$contenido="mail: " . $mail ."\nage: " . $age . "\nsex: " . $sex . "\nmobileOS: " . $mobOS ."\nexcersise1: " . $exer1 . "\nexcersise2: " .
 $exer2 . "\nmusic: " . $music . "\ndiet1: " . $diet1 . "\ndiet2: " . $diet2;
mail($destino, "Contacto", $contenido);
 
header("Location:thanks.html");
}


?>