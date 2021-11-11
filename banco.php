<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Lucas Leão');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();