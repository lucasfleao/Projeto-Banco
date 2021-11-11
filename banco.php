<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Lucas Leão');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta('987.654.321-10', 'Thales Leão');

echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();