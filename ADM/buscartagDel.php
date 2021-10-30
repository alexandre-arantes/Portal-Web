<html>
<style type="text/css">
                                				  table
                                                                    {
                                                                      font-family: Arial;
                                                                      width: 70%;
                                                                      border-collapse:collapse;
                                                                      color:green;
                                                                    }
                                                                    table td,th
                                                                    {
                                                                      border:5px solid #66CD00;
                                                                      padding:3px 7px 2px 7px;
                                                                    }
                                                                    table th
                                                                    {
                                                                      font-size:1.2em;
                                                                      text-align:left;
                                                                      padding-top:5px;
                                                                      padding-bottom:4px;
                                                                      background-color:#66CD00
                                                                      color:green;
                                                                    }
                                                                    table tr.alt td
                                                                    {
                                                                      color:green;
                                                                      background-color:#66CD00;
                                                                    }
                            </style>
<table>
<html>
<th>Tipo</th>
<th>Número</th>
<th>Nº de Páginas</th>
<th>Local</th>
<th>Data</th>
<th>Visualizar</th>
<tbody>

<?
$con = mysql_connect("localhost","root","") or die('Não foi possível conectar');
mysql_select_db("poc",$con);

$buscar4 = $_POST['buscar4'];
$buscar5 = $_POST['buscar4'];
$buscar6 = $_POST['buscar4'];
$buscar7 = $_POST['buscar4'];
$buscar8 = $_POST['buscar4'];

$sql4 = mysql_query("SELECT * FROM documento JOIN tipo_documento where tag1_documento = '$buscar4' AND tipo_documento_cod = documento_tipo_fk");

$sql5 = mysql_query("SELECT * FROM documento JOIN tipo_documento where tag2_documento = '$buscar5' AND tipo_documento_cod = documento_tipo_fk");

$sql6 = mysql_query("SELECT * FROM documento JOIN tipo_documento where tag3_documento = '$buscar6' AND tipo_documento_cod = documento_tipo_fk");

$sql7 = mysql_query("SELECT * FROM documento JOIN tipo_documento where tag3_documento = '$buscar7' AND tipo_documento_cod = documento_tipo_fk");

$sql8 = mysql_query("SELECT * FROM documento JOIN tipo_documento where tag3_documento = '$buscar8' AND tipo_documento_cod = documento_tipo_fk");

$result4 = mysql_num_rows($sql4);
$result5 = mysql_num_rows($sql5);
$result6 = mysql_num_rows($sql6);
$result7 = mysql_num_rows($sql7);
$result8 = mysql_num_rows($sql8);


if ($result4>=1) 
	{
           echo "Exibindo ".$result4." resultados para : <strong>".$buscar4."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql4)) 
	{
  $tipo = $tbl["tipo_nome"];
  $numero = $tbl["num_documento"];
  $pags = $tbl["numPags_documento"];
  $local = $tbl["local_documento"];
  $data = $tbl["data_documento"];
  $download = $tbl["caminho_documento"];

  echo "<TR>";
  echo "<TD>$tipo</TD>";
  echo "<TD>$numero</TD>";
  echo "<TD>$pags</TD>";
  echo "<TD>$local</TD>";
  echo "<TD>$data</TD>";
  echo "<TD><a href='$download'>Visualizar</a></TD>";
  echo "</TR>";
    }
   
}
?>
<?

if ($result5>=1) 
	{
           echo "Exibindo ".$result5." resultados para : <strong>".$buscar5."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql5)) 
	{
  $tipo = $tbl["tipo_nome"];
  $numero = $tbl["num_documento"];
  $pags = $tbl["numPags_documento"];
  $local = $tbl["local_documento"];
  $data = $tbl["data_documento"];
  $download = $tbl["caminho_documento"];

  echo "<TR>";
  echo "<TD>$tipo</TD>";
  echo "<TD>$numero</TD>";
  echo "<TD>$pags</TD>";
  echo "<TD>$local</TD>";
  echo "<TD>$data</TD>";
  echo "<TD><a href='$download'>Visualizar</a></TD>";
  echo "</TR>";
    }
   
} 
?>
<?

if ($result6>=1) 
	{
           echo "Exibindo ".$result6." resultados para : <strong>".$buscar6."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql6)) 
	{
  $tipo = $tbl["tipo_nome"];
  $numero = $tbl["num_documento"];
  $pags = $tbl["numPags_documento"];
  $local = $tbl["local_documento"];
  $data = $tbl["data_documento"];
  $download = $tbl["caminho_documento"];

  echo "<TR>";
  echo "<TD>$tipo</TD>";
  echo "<TD>$numero</TD>";
  echo "<TD>$pags</TD>";
  echo "<TD>$local</TD>";
  echo "<TD>$data</TD>";
  echo "<TD><a href='$download'>Visualizar</a></TD>";
  echo "</TR>";
    }
   
} 
?>
<?

if ($result7>=1) 
	{
           echo "Exibindo ".$result7." resultados para : <strong>".$buscar7."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql7)) 
	{
  $codigo = $tbl["cod_documento"];
  $tipo = $tbl["tipo_nome"];
  $numero = $tbl["num_documento"];
  $pags = $tbl["numPags_documento"];
  $local = $tbl["local_documento"];
  $data = $tbl["data_documento"];
  $download = $tbl["caminho_documento"];

  echo "<TR>";
  echo "<TD>$codigo</TD>";
  echo "<TD>$tipo</TD>";
  echo "<TD>$numero</TD>";
  echo "<TD>$pags</TD>";
  echo "<TD>$local</TD>";
  echo "<TD>$data</TD>";
  echo "<TD><a href='$download'>Visualizar</a></TD>";
  echo "</TR>";
    }
   
} 
?>
<?

if ($result8>=1) 
	{
           echo "Exibindo ".$result8." resultados para : <strong>".$buscar8."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql8)) 
	{
  $tipo = $tbl["tipo_nome"];
  $numero = $tbl["num_documento"];
  $pags = $tbl["numPags_documento"];
  $local = $tbl["local_documento"];
  $data = $tbl["data_documento"];
  $download = $tbl["caminho_documento"];

  echo "<TR>";
  echo "<TD>$tipo</TD>";
  echo "<TD>$numero</TD>";
  echo "<TD>$pags</TD>";
  echo "<TD>$local</TD>";
  echo "<TD>$data</TD>";
  echo "<TD><a href='$download'>Visualizar</a></TD>";
  echo "</TR>";
    }
   
} 
?></table>
<br>
<br>
<form method="post" action="remover.php">
Código do Documento:&nbsp;<input type="text" name="codigo" size="4">&nbsp;<input type="submit" name="remover" value="Remover">


