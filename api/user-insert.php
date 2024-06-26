<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../core/database/db_connection.php';

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     // Verifica se todos os campos necessários foram enviados
     if (!isset($_POST['nomeUsuario']) || !isset($_POST['emailUsuario']) || !isset($_POST['senhaUsuario'])) {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => "Por favor, forneça o nome, email e senha do usuário."]);
          exit();
     }

     // Escapa os valores recebidos para evitar injeção de SQL
     $nomeUsuario = $_POST['nomeUsuario'];
     $emailUsuario = $_POST['emailUsuario'];
     $senhaUsuario = $_POST['senhaUsuario'];

     // Query para inserir um novo usuário no banco de dados
     $queryInsertContato = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario')";

     // Executa a query no banco de dados
     if (mysqli_query($conn, $queryInsertContato)) {
          // Retorna uma resposta de sucesso em formato JSON
          echo json_encode(['status' => 'success', 'message' => "Usuário cadastrado com sucesso :)"]);
     } else {
          // Se houver erro, retorna uma resposta de erro em formato JSON
          http_response_code(500);
          echo json_encode(['status' => 'error', 'message' => "Erro ao cadastrar o usuário: " . $mysqli->error]);
     }
} else {
     // Se o método da requisição não for POST, retorna um erro de método não permitido
     http_response_code(405);
     echo json_encode(['status' => 'error', 'message' => 'Método não permitido.']);
}
