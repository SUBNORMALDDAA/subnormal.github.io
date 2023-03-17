<?
$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="db_formularios";
$db_connection=mysqli_connect($db_host,$db_user,$db_pasword);
if (!$db_connection) {
	die('no se ha podido conectar');

}
$subs_name=utf8_decode($_POST['nombre']);
$sub_apellido=utf8_decode($_POST['apellido']);
$sub_email=utf8_decode($_POST['email']);
$resultado=mysql_query('insert into cliente $nombre'nombre','apellido','email'values ("'.subs_name.'","'.subs_apellido.'","'.subs_email.'")');

if (mysql_num_rows($result)<0) {
	die('dato no registrado');
	else{
		die('dato registrado');
	}
	# code...
}

?>