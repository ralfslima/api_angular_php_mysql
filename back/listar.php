<?php
//incluir a conexão
include("conexao.php");

//preparar comando sql
$sql ="SELECT * FROM cursos";

//executar
$executar = mysqli_query($conexao, $sql);

//cria vetor de cursos para armazenar os atributos do curso
$cursos = [];

//Indice
$indice =0;

//laco de repetição
// metodo irá fazer a seleção linha a linha
while($linha = mysqli_fetch_assoc($executar)){
$cursos[$indice]['idCurso']= $linha['idCurso'];
$cursos[$indice]['nomeCurso']=$linha['nomeCurso'];
$cursos[$indice]['valorCurso']=$linha['valorCurso'];

$indice++;
}
//após fazer o laço precisa encapsular em um JSON
echo json_encode($cursos);


?>