<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
       $this->nome = $nome;
       $this->cpf = $cpf; 
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function validaNomeTitular(string $nomeTitular) 
    {
        if(strlen($nomeTitular) <= 3){
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}