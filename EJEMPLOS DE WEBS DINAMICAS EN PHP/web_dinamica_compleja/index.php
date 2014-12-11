<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Siempre el mismo título</title>
<style type="text/css">
h1 {color: green;}
</style>
</head>

<body>
<h1>probando</h1>
<a href='index.php'>INICIO</a> &nbsp;&nbsp;
<a href='index.php?id=1'>QUIÉNES SOMOS</a> &nbsp;&nbsp;
<a href='index.php?id=2'>PRODUCTOS</a> &nbsp;&nbsp;
<a href='index.php?id=3'>CONTACTO</a> &nbsp;&nbsp;

<?php

	include('controlador.php');

?>

<p> Esto es el pie de la página </p>

</body>
</html>