<?php
session_start();
include("verifica_login.php");
include_once("conexao_pdo.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Painel Crud</title>
</head>

<body>
    <div class='hero-body'>
        <div class="tabs is-toggle is-fullwidth is-large">
            <ul>
                <li class="is-active">
                    <a href="painel.php">
                        <span class="icon"><i class="fas fa-image" aria-hidden="true"></i></span>
                        <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="vagas.php">
                        <span class="icon"><i class="fas fa-music" aria-hidden="true"></i></span>
                        <span>Vagas</span>
                    </a>
                </li>
                <li>
                    <a href="editar.php">
                        <span class="icon"><i class="fas fa-film" aria-hidden="true"></i></span>
                        <span>Editar</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php" >
                        <span class="icon"><i class="far fa-file-alt" aria-hidden="true"></i></span>
                        <span>Sair</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class='box' text-align='center'>

            <?php

            $query_usuarios = "SELECT * FROM usuario WHERE cpf = '{$_SESSION['cpf']}'";
            $result_usuarios = $conn->prepare($query_usuarios);
            $result_usuarios->execute();

            if (($result_usuarios) and ($result_usuarios->rowCount() != 0)) {
                while ($row_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
                    extract($row_usuarios);
                    echo
                    "
                    <p class='title is-4'>CPF: $cpf </p>
                    <p class='title is-4'>E-Mail: $email </p>
                    <p class='title is-4'>Nome: $nome_completo </p>
                    <p class='title is-4'>Data: $data_nascimento </p>
                    <p class='title is-4'>Endereco: $endereco </p>
                    <p class='title is-4'>Formacao: $formacao </p>
                    <p class='title is-4'>Experiencia: $experiencia </p>
                    <p class='title is-4'>Competencia: $competencia </p>
                    <p class='title is-4'>Linkedin: $linkedin </p>
                    ";
                }
            } else {
                echo ('Error');
            }
            ?>
            <a href="logout.php" type="button" class="button is-danger">__Sair__</a>

            <a type="button" href="vagas.php" class="button is-warning">_Vagas_</a>
        </div>
    </div>

</body>

</html>