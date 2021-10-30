<?php

$con = mysql_connect("localhost","root","") or die('Não foi possível conectar');
mysql_select_db("poc",$con);

?>

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
$sql = "SELECT * FROM documento JOIN tipo_documento where tipo_nome= 'Memorandos' AND tipo_documento_cod = documento_tipo_fk";
$result = mysql_query($sql);
while ($tbl = mysql_fetch_array($result))

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

?>
</tbody>
</table>
</html>
