<?php

require_once ("faculdade.php");
require_once ("disciplina.php");
require_once ("professor.php");
require_once ("aluno.php");

$faculdade= new Faculdade("UNISC", $inicio=[]);

$professor = new Professor("Viviane", 18, $inicio=[]);

$disciplina = new Disciplina("Matematica", 3600, "", $inicio=[]);

$aluno = new Aluno("Richard", 14, 5002, $inicio=[]);

array_push($faculdade->disciplinas, $disciplina);
$disciplina->professor = $professor->nome;
array_push($disciplina->alunos, $aluno);

$faculdadeJSON=fopen("Faculdade.json","w");
fwrite($faculdadeJSON, json_encode($faculdade, JSON_PRETTY_PRINT));