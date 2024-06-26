<?php
// ob_start(); // No início do seu script não afete a resposta final JSON.
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once('db_settings.php');
$conn = mysqli_connect($hostname, $username, $credential, $database);
$conn->set_charset("utf8"); // Configura a codificação para UTF-8

// Reposta de retorno padrao
$resposta = ['status' => 'error', 'message' => 'Ocorreu um erro inesperado'];


if (!$conn) {
     $resposta['message'] = 'Falha na conexão com o banco de dados';
     echo json_encode($resposta);
     exit;
}

// Ajustes do Banco
date_default_timezone_set('America/Sao_Paulo');

global $mysqli; // add this