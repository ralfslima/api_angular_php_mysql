<?php
//incluir a conexão
inclue("conexao.php");

//obter dados com um input via php
$obterDados = file_get_contents("php://input");

//extrair os dados do json
$extrair = json_decode($obterDados);

//separando os dados do JSON
$idCurso = $extrair -> $cursos -> idCurso;
$nomeCurso = $extrair -> $cursos -> nomeCurso;
$valorCurso = $extrair -> $cursos -> valorCurso;
//SQL para cadastrar no banco

$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso='$valorCurso' WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);

// Exportar os dados ccadastrados via JSON quando a ação de envio ocorrer
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso'=> $nomeCurso,
    'valorCurso' => $valorCurso
]
json_encode(['curso']=>$curso);

?>