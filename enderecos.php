<?php

use Alura\Banco\Modelo\Endereco;
use PHP_CodeSniffer\Autoload;

require_once "autoload.php";

$umEndereco = new Endereco("petropolis", "igarape", "trizidela", "123b");
$outroEndereco = new Endereco("pvh", "joa santana", "mexico", "20f");

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
