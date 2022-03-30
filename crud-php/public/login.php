<?php
session_start();
include("conexao.php");

if (empty($_POST['cpf']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}

$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, cpf from usuario where cpf = '{$cpf}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['cpf'] = $cpf;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
