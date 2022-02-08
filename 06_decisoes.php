<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais que 18 anos.";
echo "a partir de 16 acompanhado" . PHP_EOL;

if ($idade >= 18){
  echo "Você tem $idade anos. Pode entrar" . PHP_EOL;
  echo 'Pode entrar.';
}
else {
 echo "Você só tem $idade anos, você não pode entrar!";
}

echo PHP_EOL . "Adeus";