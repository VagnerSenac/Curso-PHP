<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Lista de Fornecedores</title>
</head>
<body>
    

<table class="table table-dark table-hover">
<thead>
    <tr>
        <th>Nome / Phone / E-mail / País</th>
    </tr>
</thead> 
<tbody> 
<?php
$fornec = "contatos.txt";
$arquivo = fopen($fornec,"r");
while(!feof($arquivo)){
    echo "<tr>";
    $linha = fgets($arquivo, 100);
    echo "<td> $linha</td>";
    echo "</tr>";
}
fclose($arquivo);
?>
</tbody> 
</tabble>


</body>
</html>
