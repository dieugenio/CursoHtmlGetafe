
<?php


if (isset($_GET['id']))  /* isset=significa si est� definida la variable, en este caso cuando no est� definida la id del _GET remitir� a la portada.php */
{
	if ($_GET['id']==1)
	{
	include('principales/quienes.php');
	}

	if ($_GET['id']==2)
	{
	include('principales/productos.php');
	}

	if ($_GET['id']==3)
	{
	include('principales/contacto.php');
	}
}
else
{
	include('principales/portada.php');
}


?>