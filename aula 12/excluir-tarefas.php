<?php
include "conexao.php";
$id = $_GET['id'];

$sqlExluir = "delete from t_tarefas where id = $id";

mysqli_query($conexao, $sqlExluir);

mysqli_close($conexao);

?>