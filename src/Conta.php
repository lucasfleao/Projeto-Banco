<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

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

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf)
    {
        $this->cpfTitular = $cpf; //Quem chamar este metodo '$this->cpf' irá receber o valor passado na função $cpf
    }

    public function defineNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

}