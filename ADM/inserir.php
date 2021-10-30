<?php

$con = mysql_connect("localhost","root","") or die('Não foi possível conectar');
mysql_select_db("poc",$con);

$tipo=$_POST['tipo'];
$codigo=$_POST['codigo'];
$numero=$_POST['numero'];
$pags=$_POST['pags'];
$local=$_POST['local'];
$data=$_POST['data'];
$tag1=$_POST['tag1'];
$tag2=$_POST['tag2'];
$tag3=$_POST['tag3'];
$tag4=$_POST['tag4'];
$tag5=$_POST['tag5'];


$name = $_FILES["documento"]["name"];
$type = $_FILES["documento"]["type"];
$size = $_FILES["documento"]["size"];
$temp = $_FILES["documento"]["tmp_name"];
$error = $_FILES["documento"]["error"];



if ($error > 0)
{
	die("Ouve alguns problemas. ! Codigo do<b></b> Erro: $error.");
}
else
{

 if (($type != "application/pdf") || ($size == 1000000))
    {
       die("Arquivo não aceito : tamanho acima do Limite ou formato inválido.");
    }
 else
   {
      move_uploaded_file($temp,"/opt/lampp/htdocs/Portal/ADM/Uploads/".$name);
   }
}

$caminho = ("/Portal/ADM/Uploads/".$name);

$codesql = ("SELECT tipo_documento_cod FROM tipo_documento WHERE tipo_nome = '$tipo'");
$result = (mysql_query($codesql));
$linha = mysql_fetch_array($result);
$fkcod = $linha['tipo_documento_cod'];

$sql=mysql_query("INSERT INTO documento(cod_documento,documento_tipo_fk,num_documento,numPags_documento,local_documento,data_documento,tag1_documento ,tag2_documento,tag3_documento,tag4_documento,tag5_documento,caminho_documento)  VALUES ('$codigo','$fkcod','$numero','$pags','$local','$data','$tag1','$tag2','$tag3','$tag4','$tag5','$caminho')",$con);

echo "<script>alert('Documento cadastrado com sucesso!');</script>";

mysql_close($con);

?>
<html>
<a href="consultar_Resoluções.php">Consultar Resoluções</a><br>
<a href="consultar_portarias.php">Consultar Portarias</a><br>
<a href="consultar_Memorandos.php">Consultar Memorandos</a><br>
<a href="consultar_Atas.php">Consultar Atas de Reuniões</a><br>
</html>
