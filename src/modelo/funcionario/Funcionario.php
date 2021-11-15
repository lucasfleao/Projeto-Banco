<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\{Pessoa,Cpf};

abstract class Funcionario extends Pessoa
{
    
    private string $cargo;
    private string $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;
        
    }

    public function recuperaCargo(): string
    {
       return $this->cargo;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }


    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float;

}