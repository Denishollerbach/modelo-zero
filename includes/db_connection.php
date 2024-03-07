<?php
// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "root", "", "hbach_template");
$mysqli->set_charset("utf8"); // Configura a codificação para UTF-8

// Verifica a conexão
if ($mysqli->connect_errno) {
     echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
     exit();
}
