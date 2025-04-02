<?php
$notaAluno1 = 0;
$nota2Aluno1 = 10;
$notaAluno2 = 5;
$nota2Aluno2 = 10;

$totalAlunoAprovado = 0;
$totalAlunoReprovado = 0;
$totalAlunoExame = 0;

function tirarMediade2($nota1, $nota2)
{
    $soma = $nota1 + $nota2;
    return $soma / 2;
}

function verificarMedia($media)
{
    global $totalAlunoAprovado, $totalAlunoExame, $totalAlunoReprovado;
    if ($media < 3) {
        $totalAlunoReprovado++;
        echo "Reprovado";
    } else if ($media >= 3 && $media < 7) {
        $totalAlunoExame++;
        echo "Exame";
    } else if ($media >= 7 && $media <= 10) {
        $totalAlunoAprovado++;
        echo "Aprovado";
    } else {
        echo "Nota Invalida";
    }
}

verificarMedia(tirarMediade2($notaAluno1, $nota2Aluno1));
echo "</br>";
verificarMedia(tirarMediade2($notaAluno2, $nota2Aluno2));
echo "</br>";
echo "o total de alunos reprovados foi: $totalAlunoReprovado";
echo "</br>";
echo "o total de alunos de exame foi: $totalAlunoExame";
echo "</br>";
echo "o total de alunos aprovado foi: $totalAlunoAprovado";
