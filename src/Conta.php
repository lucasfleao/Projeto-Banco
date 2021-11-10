<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valorASacar) :void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        
        $this->saldo -= $valorASacar;
        
    } 

    public function depositar(float $ValorADepositar):void
    {
        if ($ValorADepositar < 0) {
            echo "O Valor precisa ser positivo";
            return;
        }
            
        $this->saldo += $ValorADepositar;
        
    }

    public function transferir (float $valorATransferir, Conta $contaDestino):void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }
}