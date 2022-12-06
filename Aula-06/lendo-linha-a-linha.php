<ul>
<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
while(!feof($arquivo)){
    $linha = fgets($arquivo, 100);
    echo "<li>$linha</li>";
}
fclose($arquivo);
?>
</ul>

<table border=1>
<thead>
    <tr>
        <th>Nome / Idade</th>
    </tr>
</thead> 
<tbody> 
<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
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