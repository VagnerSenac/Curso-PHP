<?php
if(file_exists("dados.csv")){
$arquivo = fopen("dados.csv","r");
echo "<table border=2>";
while(($dados = fgetcsv($arquivo,100,";")) != FALSE){
    echo "<tr>";
    foreach($dados as $campo){
     echo "<td>$campo</td>";
    }
    echo "</tr>";   
    }
    echo "</table>";
}else{
    echo "Arquivo não Encontrado";
}


?>