<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Lucas Leão'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('987.654.321-10'), 'Thales Leão'));

echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();