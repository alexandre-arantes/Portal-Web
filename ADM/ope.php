<?php  

session_start();

 // as vari�veis login e senha recebem os dados digitados na p�gina anterior 

$login = $_POST['login']; 
$senha = ($_POST['senha']); 

// as pr�ximas 3 linhas s�o respons�veis em se conectar com o bando de dados. 

$con = mysql_connect("localhost", "root", "") or die ("Sem conex�o com o servidor"); 
$select = mysql_select_db("poc") or die("Sem acesso ao BD");

 // A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios 

$result = mysql_query("SELECT * FROM usuario WHERE usu_email = '$login' AND usu_senha = '$senha'"); 

/* Logo abaixo temos um bloco com if e else, verificando se a vari�vel $result foi bem sucedida, ou seja se ela estiver encontrado algum registro id�ntico o seu valor ser� igual a 1, se n�o, se n�o tiver registros seu valor ser� 0. Dependendo do resultado ele redirecionar� para a pagina site.php ou retornara para a pagina do formul�rio inicial para que se possa tentar novamente realizar o login */

 if(mysql_num_rows ($result) >= 1) 

   { 
       $_SESSION['login'] = $login; 
       $_SESSION['senha'] = $senha; 
       header('location:ADM_index.php');

   } 
   
   else

   { 
       unset ($_SESSION['login']); 
       unset ($_SESSION['senha']); 
       header('location:login.html');  

   } 

?>
