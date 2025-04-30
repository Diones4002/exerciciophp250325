<?php 
echo "sistema de emprestimo de livros para alunos e professores </br></br>";
$livroASerEmprestado = "senhor dos aneis";
$tipoUsuario = "aluno";

function verificarTipo($tipoUsuario, $livroASerEmprestado) {
    if ($tipoUsuario == "aluno") {
        return  "o livro ".  $livroASerEmprestado . " e o aluno tem 3 dias para devolver";
    } else if ($tipoUsuario == "professor") {
        return "o livro ".  $livroASerEmprestado . " e o professor tem 10 dias para devolver";
    } else {
        return "tipo de usuario invalido";
    }
}

echo verificarTipo($tipoUsuario, $livroASerEmprestado);
?>