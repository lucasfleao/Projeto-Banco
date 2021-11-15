<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private float $saldo;
    private static int $numeroDeContas=0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    
    }

    public function sacar(float $valorASacar) :void
    {

        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
        
    } 

    public function depositar(float $ValorADepositar):void
    {
        if ($ValorADepositar < 0) {
            echo "O Valor precisa ser positivo";
            return;
        }
            
        $this->saldo += $ValorADepositar;
        
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }
    

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }
    
    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int 
    {
        return self::$numeroDeContas;
    }

    abstract public function percentualTarifa() : float;
    

}