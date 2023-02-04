<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tarefas</title>
</head>
<body>
<main class="container">
<div class="row">
    <div class="col">
        <h1>Controle de Tarefas</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <h2>Nova Tarefa</h2>
    </div>
</div>
<form name="nova-tarefa" action="inserir-tarefa.php" method="post">
    <div class="row">
        <div class="col">
            <input class="form-control" name="tarefa" placeholder="Digite a descrição da tarefa">
        </div>
    </div>
    <div class="row pt-3">
     <div class="col">
        <button type="submit" class="btn btn-success">Salvar</button>
     </div>
    </div> 
</form>  
<?php
include "conexao.php";
$sqlBusca = "select * from t_tarefas";
$todasastarefas = mysqli_query($conexao, $sqlBusca);
while($umatarefa = mysqli_fetch_assoc($todasastarefas)){
    ?>
    <?php echo $umatarefa['id']; ?>
    <?php echo $umatarefa['descricao'];?>
    <a class='btn btn-warning'>Alterar</a>
    <a class='btn btn-danger' href="excluir-tarefas.php?id=<?php echo $umatarefa['id'];?>">Exluir </a>
    <br>
    <?php
}
?>    
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

