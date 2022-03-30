<?php
if (!$_SESSION['cpf']) {
    header('Location: index.php');
    exit();
}
