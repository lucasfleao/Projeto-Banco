<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular,contaCorrente, contaPoupanca};
use Alura\Banco\Modelo\{Endereco, Cpf};



$endereco = new Endereco('Belo Horizonte', 'Tupi', 'Rua João Dornas Filho', '109');

$primeiraConta = new ContaCorrente(new Titular(new Cpf('123.456.789-10'), 'Lucas Leão', $endereco));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new ContaCorrente(new Titular(new Cpf('987.654.321-10'), 'Thales Leão', $endereco));

echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;
var_dump($segundaConta);

echo ContaCorrente::recuperaNumeroDeContas();