<?php
session_start();
include("conexao.php");
include("verifica_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Pesquisa Vagas</title>
</head>

<body>
    <div class="box">
        <br>
        <h3 align="center" class="title has-text-grey">Lista de vagas</h3> <br>
        <form action="" method="GET">
            <div class="field">
                <div class="control">
                    <input name="buscar" value="<?php if (isset($_GET['busca'])) echo $_GET['buscar']; ?>" type="text" class="input is-large" placeholder="Digite para pesquiser!" autofocus="">
                </div>
            </div>
            <button type="submit" class="button is-block is-link is-large is-fullwidth">Buscar</button>
        </form>
        <table class="table is-fullwidth">
            <tr>
                <th>Nome da vaga</th>
                <th>Faixa salarial</th>
                <th>Nivel hierarquico</th>
                <th>Cidade</th>
                <th>Descricao</th>
                <th>Situacao da vaga</th>
            </tr>
            <?php
            if (!isset($_GET['buscar'])) {
            ?>
                <tr>
                    <td colspan="5">Digite algo para pesquisar...</td>
                </tr>
                <?php
            } else {
                $pesquisa = $conexao->real_escape_string($_GET['buscar']);
                $sql_code = "SELECT * FROM vaga WHERE nome_vaga LIKE '%$pesquisa%' OR faixa_salarial LIKE '%$pesquisa%' OR nivel_hierarquico LIKE '%$pesquisa%' OR cidade LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%'";
                $sql_query = $conexao->query($sql_code) or die("Error" . $mysqli->error);

                if ($sql_query->num_rows == 0) {
                ?>
                    <tr>
                        <td colspan="3">Nenhum resultado encontrado...</td>
                    </tr>
                    <?php
                } else {
                    while ($dados = $sql_query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $dados['nome_vaga']; ?></td>
                            <td><?php echo $dados['faixa_salarial']; ?></td>
                            <td><?php echo $dados['nivel_hierarquico']; ?></td>
                            <td><?php echo $dados['cidade']; ?></td>
                            <td><?php echo $dados['descricao']; ?></td>
                            <td><a href="#" type="button" class="button is-success">Candidatar-se</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            <?php
            } ?>
        </table>
    </div>
</body>

</html>