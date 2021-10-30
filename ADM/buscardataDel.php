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
<th>Código</th>
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

$buscar3 = $_POST['buscar3'];


$sql3 = mysql_query("SELECT * FROM documento JOIN tipo_documento where data_documento = '$buscar3' AND tipo_documento_cod = documento_tipo_fk");


$result3 = mysql_num_rows($sql3);

if ($result3>=1) 
	{
           echo "Exibindo ".$result3." resultados para documentos que foram criados nesta data : <strong>".$buscar3."</strong><br><br>";
           while($tbl = mysql_fetch_array($sql3)) 
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
   
} else 
{
    echo "Não foi encontrado nenhum resultado para <strong>".$buscar2."</strong>";
}
?></table>
<br>
<br>
<form method="post" action="remover.php">
Código do Documento:&nbsp;<input type="text" name="codigo" size="4">&nbsp;<input type="submit" name="remover" value="Remover">
