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

    function __toString()
    {
       return "\n Faculdade Criada \n\n";
    }

}