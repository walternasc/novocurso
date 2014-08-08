<?php 

$servidor   = "localhost";
$usuario    = "sicaes";
$senha      = "sicaes";
$dbname     = "sicaes";

$con = pg_connect("host=$servidor user=$usuario password=$senha dbname=$dbname")
	or die("Nao foi possivel se conectar wow");


//caso a conexao tenha efetuada com sucesso exibi a mensagem do echo
//if($con){
//    echo "Conectou";
//}