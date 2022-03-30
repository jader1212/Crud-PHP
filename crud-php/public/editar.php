<?php
include("painel.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <?php
                    if (isset($_SESSION['status_editar'])) :
                    ?>
                        <div class="notification is-success">
                            <p>Editado com sucesso!</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_editar']);
                    ?>

                    <div class="box">
                        <h3 class="title has-text-grey">Editar</h3>
                        <form action="editar_action.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" placeholder="CPF" required="required" maxlength="11" minlength="11" readonly>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha" required="required" maxlength="32" minlength="6" readonly>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="E-mail" autofocus="" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="nome_completo" type="text" class="input is-large" placeholder="Nome Completo" autofocus="" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="data_nascimento" type="date" class="input is-large" placeholder="Data Nascimento" autofocus="" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="foto" type="file" accept="image/*" class="input is-large" placeholder="foto" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="endereco" type="text" class="input is-large" placeholder="Endereco" autofocus="" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="formacao" type="text" class="input is-large" placeholder="Formacao" autofocus="" required="required">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="experiencia" type="text" class="input is-large" placeholder="Experiencia" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea name="competencia" type="text" class="input is-large" placeholder="Competencia" autofocus=""></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="linkedin" type="text" class="input is-large" placeholder="Linkedin" autofocus="">
                                </div>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>