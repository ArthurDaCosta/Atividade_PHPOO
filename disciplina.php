<?php

class Disciplina
{
    public string $nome;
    public float $cargaHoraria;
    public $professor;
    public array $alunos;

    function __construct(string $nome, float $cargaHoraria, $professor, array $alunos)
    {
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }
}