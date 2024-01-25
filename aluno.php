<?php

require_once("pessoa.php");

class Aluno extends Pessoa
{
    public int $matricula;
    public array $notas;

    function __construct(string $nome, int $idade, int $matricula, array $notas)
    {
        Pessoa:: __construct($nome, $idade);
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

}