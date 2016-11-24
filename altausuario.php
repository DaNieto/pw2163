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
 		print "No se guardo nada";
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

<h1>Alta de Ususarios</h1>
<form action="ejemplo.php" method="POST">
	<input type="hidden" name="txtOculto" value="guardaUsuario"> <br>
	<input type="text" name="txtUsuario" id="txtUsuario"> <br>
	<input type="text" name="txtNombre" id="txtNombre"> <br>
	<input type="password" name="txtClave" id="txtClave"> <br>
	<select name="txtTipo" id="txtTipo">
		<option value="Administrador">Administrador</option>
		<option value="Invitado">Invitado</option>
		<option value="Colado">Colado</option>
	</select>
	<input type="submit" Value="Enviar">
</form>
<?php

?>
