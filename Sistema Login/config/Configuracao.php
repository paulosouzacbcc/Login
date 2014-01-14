<?php 

$host = 'localhost';
$dataBase = 'sistema_login';
$user  = 'root';
$senha = 'paul8197';

//Conexão com o servidor
$conect = mysql_connect($host, $user, $senha);

// se der erro, mostra mensagem.
if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

// se estiver tudo certo, seleciona a base de dados.
$db = mysql_select_db($dataBase);

/*Cinfigurando este arquivo, depois para dar um include em suas paginas php, isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados
 você altera somente um arquivo  exemplo o index.php*/
?>
