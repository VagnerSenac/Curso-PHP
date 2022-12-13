
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cadastrar Clientes</title>
</head>
<body>
<!--
Crie um programa aonde você tenha um 
formulário para cadastrar o nome e e-mail 
de uma pessoa. As informações devem ser 
armazenadas em um arquivo de texto 
chamado "estudantes.txt" seu programa 
deve contem uma tela para exibir os 
cadastros dos alunos à partir da leitura
 desse arquivo texto.

-->
    <main class="container">
        <div class="row">
            <dic class="col">
                <h1>Cadastro de Clientes</h1>
</div>
</div>
<form class="row" action="cadastrar.php" method="post">
    <div class="col">
        <label class="form-label">Nome</label>
        <input class="form-control" placeholder="Nome" name="nome">
</div>
<div class="col">
    <label class="form-label">E-mail</label>
    <input class="form-control" type="email" name="email" placeholder="E-Mail">
</div>
<div class="col-2">
    <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
</main>
    
</body>
</html>