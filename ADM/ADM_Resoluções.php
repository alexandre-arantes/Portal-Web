<?php 

 session_start(); 
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) 

{ 
   unset($_SESSION['login']); 
   unset($_SESSION['senha']); 
   header('location:login.html');

} 

$logado = $_SESSION['login']; 
 
echo 'Olá '.$logado.' Seja Bem Vindo!' ?>
<html><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Portal dos Cursos Técnicos em Informática - IFMG Campus Formiga</title>
        <meta name="generator" content="Bootply">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
            <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <link href="css/styles.css" rel="stylesheet">
    </head><body>
        <!-- /.navbar -->
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well pull-left">
                            <a href="index.html">
              <img src="Formiga-Simples.jpg" width="850">
              </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-static">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>

              <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-success">Cadastrar</button>
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="ADM_Inserir.php">Documentos</a>
                </li>
                <li>
                  <a href="ADM_Tipo.php">Tipo</a>
                </li>
              </ul>
            </div>
                        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-success">Consultar</button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="ADM_Atas.php">Atas de Reuniões</a>
                                </li>
                                <li>
                                    <a href="ADM_Portarias.php">Portarias</a>
                                </li>
                                <li>
                                    <a href="ADM_Memorandos.php">Memorandos</a>
                                </li>
                                <li>
                                    <a href="ADM_Resoluções.php">Resoluções</a>
                                </li>
                            </ul>
                        </div>
                        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
                        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                        <script>
                            $(function () {
                                                                                                                      $('.dropdown-toggle').dropdown();
                                                                                                                    });
                        </script><button type="button" class="btn btn-lg btn-success" onclick="location.href='ADM_Remover.php'">Remover</button>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"></ul>
                </div>
                </div>
            </nav>
        </header>
        <!-- Begin Body -->
        <div class="container">
            <a tabindex="-1" href="#" &gt;ação<="" li="">
      </a>
            <div class="no-gutter row">
                <a tabindex="-1" href="#" &gt;ação<="" li="">
        <!-- left side column -->
        </a>
                <div class="col-md-2">
                    <a tabindex="-1" href="#" &gt;ação<="" li="">
          </a>
                    <div class="panel panel-default" id="sidebar">
                        <a tabindex="-1" href="#" &gt;ação<="" li="">
            <div class="panel-heading" style="background-color:#7FFF00;color:#fff;">Menu</div>
            </a>
                        <div class="panel-body">
                            <a tabindex="-1" href="#" &gt;ação<="" li="">
              </a>
                            <ul class="nav nav-stacked">
                                <a tabindex="-1" href="#" &gt;ação<="" li="">
                </a>
                                <li>
                                    <a tabindex="-1" href="#" &gt;ação<="" li="">
                  </a>
                                    <a href="ADM_Atas.php">Atas de Reuniões</a>
                                </li>
                                <li>
                                    <a href="ADM_Resoluções.php">Resoluções</a>
                                </li>
                                <li>
                                    <a href="ADM_Portarias.php">Portarias</a>
                                </li>
                                <li>
                                    <a href="ADM_Memorandos.php">Memorandos</a>
                                </li>
                            </ul>
                            <div class="accordion" id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading"></div>
                                    <div id="collapseOne" class="accordion-body collapse in"></div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading"></div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">Another collapse panel. Content here for links, ads, etc..</div>
                                    </div>
                                </div>
                            </div>
                            <!--/acc-->
                            <hr>
                            <div class="col col-span-12">
                                <i class="icon-2x icon-facebook"></i>&nbsp;
                                <i class="icon-2x icon-twitter"></i>&nbsp;
                                <i class="icon-2x icon-linkedin"></i>&nbsp;
                                <i class="icon-2x icon-pinterest"></i>
                            </div>
                        </div>
                        <!--/panel body-->
                    </div>
                    <!--/panel-->
                </div>
                <!--/end left column-->
                <!--mid column-->
                <div class="col-md-3">
                    <div class="panel" id="midCol">
                        <div class="panel-heading" style="background-color:#76EE00;color:#eee;">IFMG</div>
                        <div class="panel-body">
                            <div class="well">
                                <img src="head.jpg" class="img-responsive">
                                <h3>
                                    <a href="http://formiga.ifmg.edu.br">Campus Formiga</a>
                                </h3>
                                <p>Conheça nosso <i>campus</i>, temos novidades em nosso vestibular,nos nossos cursos e muitas outras
informações que poderão ser encontradas no site do <i>campus</i> Formiga.</p>
                                <p>
                                    
                                </p>
                            </div>
                            <hr>
                            <div class="media"></div>
                            <div class="media"></div>
                        </div>
                    </div>
                    <!--/panel-->
                </div>
                <!--/end mid column-->
                <!-- right content column-->
                <div class="col-md-7" id="content">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#66CD00;color:#fff;">Técnicos em Informática</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>Resoluções</h2>
                                    <br>
                                        
                                </div>
                            </div>
<b>Nota : </b><p>&nbsp;&nbsp;&nbsp;&nbsp;Os documentos assumidos como norteadores para a proposta aqui apresentada são as bases legais contidas na Lei de Diretrizes e Bases da Educação Nacional de 20 de dezembro de 1996, bem como o Catálogo Nacional de Cursos Técnicos do MEC (Ministério da Educação) Parecer CNE/CEB nº 11/2012 que trata das Diretrizes Curriculares Nacionais para a Educação Profissional Técnica de Nível Médio; Resolução CNE/CEB nº 06/2012 que define as Diretrizes Curriculares Nacionais para a Educação Profissional Técnica de Nível Médio; Decreto nº 5.154/2004 que regulamenta o § 72º do art. 36 e os artigos 39 a 41 da Lei nº 9.394 de 1996; Parâmetros Curriculares do Ensino Médio / 2000.</p><br>
                                    <form method="post" action="buscarNum.php">                     Número : &nbsp;<input type="text" name="buscar2">&nbsp;<input type="submit" value="Buscar" name="buscar"></form>
<form method="post" action="buscardata.php">
<br><br>
				 Data de Criação :&nbsp;<input type="date" name="buscar3">&nbsp;<input type="submit" value="Buscar" name="buscar"></form>

<br><br><form method="post" action="buscartag.php">
				Palavras Chave : &nbsp;<input type="text" name="buscar4">&nbsp;<input type="submit" value="Buscar" name="buscar"></form>
                            <hr>
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
                                            <tbody><tr>
                                                <td>Tipo</td>
                                                <td>Número</td>
                                                <td>Nº de Páginas</td>
                                                <td>Local</td>
                                                <td>Data</td>
                                                <td>Fazer
                                                    <i>Visualizar</i>
                                                </td>
                                            </tr>
                                            <? 
						$con=mysql_connect( "localhost", "root", "") or die( 'Não foi possível conectar'); 							mysql_select_db("poc",$con);

						$sql="SELECT * FROM documento JOIN tipo_documento where tipo_nome = 'Resoluções' AND tipo_documento_cod = documento_tipo_fk"; 
						$result=mysql_query($sql); 

						while ($tbl=mysql_fetch_array($result))
	                                            { 
							$tipo=$tbl["tipo_nome"]; 
							$numero=$tbl["num_documento"]; 	
							$pags=$tbl["numPags_documento"]; 
							$local=$tbl["local_documento"]; 
							$data=$tbl["data_documento"]; 
							$visualizar=$tbl["caminho_documento"];
 						    } 
 					    
							echo "<tr>";
							echo "<td>$tipo</td>";
							echo "<td>$numero</td>";
							echo "<td>$pags</td>";
							echo "<td>$local</td>";
							echo  "<td>$data</td>";
							echo "<td><a href=$visualizar>Visualizar</a></td>";
						        echo "</tr></tbody>";
						?>
				</table>
                        </div>
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->
                    <!--/end right column-->
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <h5>©Company 2014</h5>
                    </div>
                </div>
            </div>
        </footer>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    

</body></html>
