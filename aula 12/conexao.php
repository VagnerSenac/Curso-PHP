<?php
$servidor = '127.0.0.1';
$banco = 'bd_tarefas';
$usuario = 'root';
$senha = '';

try{
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
}catch(Exception $e){
     echo "<br>";
     echo "Erro na conexão com o Banco de Dados: $e";
     exit();
}
?>