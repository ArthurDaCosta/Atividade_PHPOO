<?php

require_once ("faculdade.php");
require_once ("disciplina.php");
require_once ("professor.php");
require_once ("aluno.php");

$faculdade= new Faculdade("UNISC", []);

$professor = new Professor("Viviane", 18, []);

$disciplina = new Disciplina("Matematica", 3600, "", []);

$aluno = new Aluno("Richard", 14, 5002, [7.0, 5.6, 1.3]);

array_push($faculdade->disciplinas, $disciplina);
$disciplina->professor = $professor;
array_push($professor->disciplinas, $disciplina->nome);
array_push($disciplina->alunos, $aluno);

$faculdadeJSON=fopen("Faculdade.json","w");
fwrite($faculdadeJSON, json_encode($faculdade, JSON_PRETTY_PRINT));

echo $faculdade;