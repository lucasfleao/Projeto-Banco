<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar) :void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
        }
        else {
            $this->saldo -= $valorASacar;
        }
    } 

    public function depositar(float $ValorADepositar):void
    {
        if ($ValorADepositar > 0) {
            $this->saldo += $ValorADepositar;
        } else {
            echo "O Valor precisa ser positivo";
        }
    }
}