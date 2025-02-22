<?php
if($_POST["nombre"] && $_POST["email"] && $_POST["apellido"] && $_POST["consulta"] != ""){
	$de = $_POST["nombre"];
	$destino = "fronzaroli@gmail.com";
	$asunto = "Consulta desde la Web de Arrotino Ferrante";
	$mensaje .= "DESDE: Gestoría Ferrante (OnLine)"."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . utf8_decode($_POST["nombre"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "APELLIDO: " . utf8_decode($_POST["apellido"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "CONSULTA: " . utf8_decode($_POST["consulta"]) ."\n";
	$mensaje .= "\n";
    $emailheader = "From: Arrotino Ferrante (OnLine) <fronzaroli@gmail.com>\r\n";
    mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Vuelva a intentarlo.");
    echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));
	} else {
    if($_POST["nombre"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["apellido"] == ""){
    echo utf8_encode ('Por favor, indica tu apellido.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
    if($_POST["consulta"] == ""){
    echo utf8_encode ('Por favor, indica tu consulta.');
    exit; }
}
?>