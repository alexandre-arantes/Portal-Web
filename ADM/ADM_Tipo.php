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
                            <img src="Formiga-Simples.jpg" width="850">
                            <a href="index.html"></a>
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
                    </div>
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
informações que poderão ser encontradas no site do <i>campus</i> Formiga</p></p>
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
                            <b>
                                <h2>Cadastrar Tipo de Documento</h2>
                            </b>
                            <br>
                            <br>
                            <form method="post" action="inserirTipo.php" enctype="multipart/form-data">
                                <div>
                                    <input type="hidden" name="codigo">
                                    <br>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome :
                                    <input type="text" name="nome">
                                            <br>
                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;Descrição :
                                            <input type="text" name="descricao">
                                                <br>
                                                        <br>
                                                        <br>
                                                        <center>
                                                            <button class="btn btn-success btn-lg ">CADASTRAR TIPO DE DOCUMENTO</button>
                            <br>                           
                            <hr>
                            </center></div></form>
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
                            <h5>Desenvolvedor - Alexandre Arantes</h5>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- script references -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
    

</div></body></html>
