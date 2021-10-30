<?
$con = mysql_connect("localhost","root","") or die('Não foi possível conectar');
mysql_select_db("poc",$con);

$codigo=$_POST['codigo'];

$sql=mysql_query("DELETE FROM documento where cod_documento = '$codigo'");

echo "<script> alert ('Deletado com sucesso!');</script>";

echo "Documento deletado com sucesso!";

mysql_close($con);
?>
