<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<?php
if (!$_POST){

}else{
    //Estoy recibiendo el formulario, compongo el cuerpo
    $cuerpo = "Formulario enviado\n";
    $cuerpo .= "Nombre: " . $_POST["nombre"] . "\n";
	$cuerpo .= "Poblacion: " . $_POST["poblacion"] . "\n";
	$cuerpo .= "Telefono: " . $_POST["telefono"] . "\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\n";
    $cuerpo .= "Comentarios: " . $_POST["coment"] . "\n";

    //mando el correo... ( SUSTITUIR POR TU EMAIL )
    mail("loquesea@loquesea.com","Formulario recibido",$cuerpo);

}
?>
</head>

<body>
<h1> TU MENSAJE HA SIDO ENVIADO. ¡GRACIAS!</h1>
</body>
</html>
