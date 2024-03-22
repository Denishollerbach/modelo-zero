<?php

require_once('db_settings.php');

// Ajustes do Banco
date_default_timezone_set('America/Sao_Paulo');

// Attempt MySql server connection. Assuming you are running MySql server with default setting (user 'root' with no password)
$conn = mysqli_connect($hostname, $username, $credential, $database);
$conn->set_charset("utf8"); // Configura a codificação para UTF-8



// Verifica a conexão
if ($conn === false) {
     // echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
     // exit();
     die("ERROR: could not connect. " . mysqli_connect_error() );
}
