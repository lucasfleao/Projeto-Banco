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
}