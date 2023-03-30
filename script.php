<?php

if ($argc < 2) {
    echo "Parametros invalidos para executar o script!";
    exit(1);
}
$mult = $argv[1] * $argv[2];

echo "\n O resultado da multiplicacao entre os numeros informados eh: $mult";
echo "\n A quantidade de parametros aceitos e que foram informados sao: $argc";
echo "\n Parametros informados para o script:";
print_r($argv);

?>
