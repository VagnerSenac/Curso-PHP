
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Clientes</title>
</head>
<body>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
if (file_exists("estudantes.txt")) {
    $arquivo = fopen("estudantes.txt","a+");
    fwrite($arquivo, "\n$nome \t $email");
} else {
    $arquivo = fopen("estudantes.txt","a+");
    fwrite($arquivo, "$nome \t $email");
}
fclose($arquivo);

/*
$arquivo = fopen("estudantes.txt","r");
$conteudo = fread($arquivo, filesize("estudantes.txt"));
echo $conteudo;
*/
?>
<main class="container">
    <div class="row">
        <div class="col"><h1> Listagem de estudantes</h1>
</div>
<div class="row">
    <div class="col-12">
        <a href="index.php" class="btn btn-link">Cadastrar novo estudante</a>
</div>
<div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th>Nome - E-mail</th>
</th>
</thead>
</tbody>
<?php
$arquivo = fopen("estudantes.txt", "r");
while(!feof($arquivo)){
    $linha = fgets($arquivo, 100);
    echo "<tr>";
    echo "<td>$linha</td>";
    echo "</tr>";
}
fclose($arquivo);
?>
</tbody>
</table>
</div>
</div>
</main>



</body>
</html>