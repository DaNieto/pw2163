<?php
//preguntar si los valore existen
$oculto = ""; //inicializando variable
$usuario = "";
$nombre = "";
$clave = "";
$tipo = "";

if (isset($_POST["txtOculto"])) // si trae valores
{
	$oculto = $_POST["txtOculto"];
}
if (isset($_POST["txtUsuario"])) // si trae valores
{
	$oculto = $_POST["txtUsuario"];
}
if (isset($_POST["txtNombre"])) // si trae valores
{
	$oculto = $_POST["txtNombre"];
}
if (isset($_POST["txtClave"])) // si trae valores
{
	$oculto = $_POST["txtClave"];
}
if (isset($_POST["txtTipo"])) // si trae valores
{
	$oculto = $_POST["txtTipo"];
}
function guardaUsuario($usuario,$nombre,$clave,$tipo);
 {
 	//conectarse ak servidor MysQl
 	//mysql_connect(servidor,usario,contraseña)
 	$conexion = mysql_connect("localhost","root","");
 	//seleccionamos la base de datos
 	mysql_select_db("db2163");
 	$consulta = "insert into usuarios values('".$usuario."','".$nombre"','".$clave."','".$tipo."')";
 	//ejecutamos la consulta
 	mysql_query($consulta);
 	//preguntamos si hubo insercion
 	if(mysql_affected_rows() > 0)
 	{
 			print "Registro guardado";
 	}
 	else
 	{
 		print "<a href='ejemplo.php'>Regresar</a>";
 	}
 }
switch ($oculto) {
	case 'guardaUsuario':
	guardaUsuario($usuario,$nombre,$clave,$tipo);
		# code...
		break;
	
	default:
		# code...
		break;
}
?>