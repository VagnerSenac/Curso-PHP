<?php

///site de referencia para manipular arquivos:
// https://eufacoprogramas.com/como-manipular-arquivos-em-php/
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
$conteudo =  fread($arquivo, filesize($nomearquivo));
echo $conteudo;
fclose($arquivo);



?>
