<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../core/database/db_connection.php';

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
     http_response_code(500);
     echo json_encode(['status' => 'error', 'message' => 'Erro ao conectar ao banco de dados']);
     exit();
}

// Obtém os dados enviados via POST
// $_POST = json_decode(file_get_contents("php://input"), true);

// Verifica se o e-mail foi enviado
if (isset($_POST['emailUsuario'])) {
     // Escapa o e-mail para evitar SQL injection
     $email = $conn->real_escape_string($_POST['emailUsuario']);

     // Consulta se o e-mail já existe no banco de dados
     $consulta = "SELECT COUNT(*) AS total FROM usuarios WHERE emailUsuario = '$email'";
     $resultado = $conn->query($consulta);

     // Verifica se a consulta foi bem-sucedida
     if ($resultado) {
          // Obtém o resultado da consulta
          $total = $resultado->fetch_assoc()['total'];

          // Retorna true se o e-mail existe, false caso contrário
          echo json_encode(['status' => 'success', 'existe' => $total > 0]);
     } else {
          // Se houver um erro na consulta, retorna um erro
          http_response_code(500);
          echo json_encode(['status' => 'error', 'message' => 'Erro ao consultar o e-mail']);
     }
} else {
     // Se o e-mail não foi enviado, retorna um erro
     http_response_code(400);
     echo json_encode(['status' => 'error', 'message' => 'E-mail não fornecido']);
}
