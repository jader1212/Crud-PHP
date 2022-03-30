<?php
session_start();
include("conexao.php");

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$nome_completo = mysqli_real_escape_string($conexao, trim($_POST['nome_completo']));
$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
//foto
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$formacao = mysqli_real_escape_string($conexao, trim($_POST['formacao']));
$experiencia = mysqli_real_escape_string($conexao, trim($_POST['experiencia']));
$competencia = mysqli_real_escape_string($conexao, trim($_POST['competencia']));
$linkedin = mysqli_real_escape_string($conexao, trim($_POST['linkedin']));

$sql = "UPDATE usuario SET email='$email', nome_completo='$nome_completo', data_nascimento='$data_nascimento', endereco='$endereco', formacao='$formacao', experiencia='$experiencia', competencia='$competencia', linkedin='$linkedin' WHERE cpf = '{$_SESSION['cpf']}'";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_editar'] = true;
}

$conexao->close();
header('Location: painel.php');
exit;
