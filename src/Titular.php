<?php

require_once 'Cpf.php';

class Titular 
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome); 
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    private function validaNomeTitular(string $nomeTitular) 
    {
        if(strlen($nomeTitular) <= 3){
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}