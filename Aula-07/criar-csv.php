<?php
$pessoas = array(
    ["Nome", "Idade","Cidade"],
    ["Vagner",41,"Americana"],
    ["Daniela Taranto",43,"Americana"]
);
echo "<pre>";
print_r($pessoas);
echo "</pre>";
$arquivo = fopen("dados.csv","a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo, $uma_pessoa,";");
}

fclose($arquivo);
?>