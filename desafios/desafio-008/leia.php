<table border=1>
<thead>
    <tr>
        <th>Nome / E-mail / País</th>
    </tr>
</thead> 
<tbody> 
<?php
$fornec = "fornecedores.txt";
$arquivo = fopen($fornec,"r");
while(!feof($arquivo)){
    echo "<tr>";
    $linha = fgets($arquivo, 100);
    echo "<td>$linha</td>";
    echo "</tr>";
}
fclose($arquivo);
?>
</tbody> 
</tabble>