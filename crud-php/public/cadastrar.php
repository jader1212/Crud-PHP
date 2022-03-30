<?php
session_start();
include("conexao.php");

$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$nome_completo = mysqli_real_escape_string($conexao, trim($_POST['nome_completo']));
$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
//foto
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$formacao = mysqli_real_escape_string($conexao, trim($_POST['formacao']));
$experiencia = mysqli_real_escape_string($conexao, trim($_POST['experiencia']));
$competencia = mysqli_real_escape_string($conexao, trim($_POST['competencia']));
$linkedin = mysqli_real_escape_string($conexao, trim($_POST['linkedin']));

$sql = "select count(*) as total from usuario where cpf = '$cpf'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['cpf_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (cpf, senha, email, nome_completo, data_nascimento, endereco, formacao, experiencia, competencia, linkedin) VALUES ('$cpf', '$senha', '$email','$nome_completo','$data_nascimento','$endereco','$formacao','$experiencia','$competencia','$linkedin')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit;
