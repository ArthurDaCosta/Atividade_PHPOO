<?php

class Disciplina
{
    public string $nome;
    public float $cargaHoraria;
    public string $professor;
    public array $alunos;

    function __construct(string $nome, float $cargaHoraria, string $professor, array $alunos)
    {
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }
}