<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '12345');
define('DB', 'crud');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('erro ao conectar');
