<?php

require_once("pessoa.php");

class Professor extends Pessoa
{
    public array $disciplinas;

    function __construct(string $nome, int $idade, array $disciplinas)
    {
        Pessoa:: __construct($nome, $idade);
        $this->disciplinas = $disciplinas;
    }

}