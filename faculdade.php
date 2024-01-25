<?php

class Faculdade
{
    public string $nome;
    public array $disciplinas;

    function __construct(string $nome, array $disciplinas)
    {
        $this->nome = $nome;
        $this->disciplinas = $disciplinas;
    }

}