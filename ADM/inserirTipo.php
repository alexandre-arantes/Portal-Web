<?

$con = mysql_connect("localhost","root","") or die('Não foi possível conectar');
mysql_select_db("poc",$con);

$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];

$sql=("INSERT INTO tipo_documento(tipo_documento_cod,tipo_nome,tipo_descricao) VALUES ('$codigo','$nome','$descricao')");
$result=mysql_query($sql);

echo "<script>alert('Tipo de documento incluído com sucesso!');</script>";


mysql_close($con);

?>

