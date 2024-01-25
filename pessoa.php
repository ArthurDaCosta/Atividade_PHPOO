<?php

abstract class Pessoa
{
    public string $nome;
    public int $idade;

    function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}