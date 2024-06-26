<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../core/database/db_connection.php';

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
     http_response_code(403); // Código de status HTTP 403 - Acesso negado
     echo json_encode(['status' => 'error', 'message' => 'Acesso negado. Método não permitido.']);
     exit(); // Termina a execução do script
}

// Executa a consulta SQL para selecionar usuários
$querySelectUser = 'SELECT * FROM usuarios';
$result = mysqli_query($conn, $querySelectUser);

// Verifica se a consulta foi bem-sucedida
if ($result === false) {
     http_response_code(500); // Código de status HTTP 500 - Erro interno do servidor
     echo json_encode(['status' => 'error', 'message' => 'Erro ao executar a consulta SQL.']);
     exit();
}

// Processa os resultados
if (mysqli_num_rows($result) > 0) {
     $usuarios = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $usuarios[] = $row;
     }
     echo json_encode(['status' => 'success', 'usuarios' => $usuarios]);
     // echo json_encode($usuarios);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Nenhum usuário encontrado.']);
}

// Fecha a conexão com o banco de dados
// mysqli_close($conn);

