<?php

$arquivo = fopen("clientes.txt","w");

$listaClientes = [
    [
        "nome" => "Vagner",
        "idade" => 41
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ]
    ,
    [
        "nome" => "Marcia",
        "idade" => 35
    ],
    [
        "nome" => "Rogério",
        "idade" => 50
    ],
    [
        "nome" => "Garcia",
        "idade" => 20
    ]
];

print_r($listaClientes[0]["nome"]. "\t");
print_r($listaClientes[0]["idade"]);
echo "<br>";

for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);
?>