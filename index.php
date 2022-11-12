<?php
echo 'olá mundo <br>';
echo 'Vagner Lourenço';

/*
http://localhost/curso-php/index.php
*/

print('<h1>escrevendo</h1>');

print_r('<h2>Novo</h2>');

$nome = 'Vagner';
$idade = 41;
$altura = 1.82;
$fumante = true;

echo '<br>';
echo $nome ;
echo '<br>';
echo  $idade;
echo '<br>';
echo $altura;
echo '<br>';
echo $fumante; 
echo '<br>';

//concatenação
echo '<br>';
echo $nome . '<br>';
echo  $idade . '<br>';
echo $altura . '<br>';
echo $fumante . '<br>';

echo 'Olá ' . $nome . ' você tem ' . $idade. 'anos';

echo '<hr>';
// pega o tipo da variável
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($fumante) . '<br>';

$altura = '1.75';
echo gettype($altura) . '<br>';


?>
