# teste-php
teste PHP utilizado em linha de comando

<hr>

## Instalação:
LINUX:EXEC("git clone https://github.com/danielbonatti/teste-php.git")

## Execução
LINUX:EXEC("php teste-php/script.php 7 7")

<hr>

## Observações:
Usando o php com linha de comando temos duas variáveis globais importantes: argc e argv. O argc é o contador de parâmetros passados e enquanto o argv é um array global contendo os parâmetros passados (por padrão o primeiro índice sempre contém o nome do script que está sendo executado).
$argc => O primeiro índice é o nome do arquivo logo temos 3 parâmetros: 0 é o nome do arquivo, 1 é o primeiro número e 2 é o segundo número:
```
php script.php 7 7
```
