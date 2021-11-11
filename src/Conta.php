<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static int $numeroDeContas=0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->validaNomeTitular($nomeTitular);
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    
    }

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

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular) 
    {
        if(strlen($nomeTitular) <= 3){
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function recuperaNumeroDeContas():int 
    {
        return self::$numeroDeContas;
    }

}