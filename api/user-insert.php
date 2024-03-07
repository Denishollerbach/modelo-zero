<?php
// Conexão com o banco de dados
require_once __DIR__ . '/../includes/db_connection.php';

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     // Obtém os dados enviados no corpo da requisição
     $data = json_decode(file_get_contents("php://input"), true);

     // Verifica se todos os campos necessários foram enviados
     if (!isset($data['nomeUsuario']) || !isset($data['emailUsuario']) || !isset($data['senhaUsuario'])) {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => "Por favor, forneça o nome, email e senha do usuário."]);
          exit();
     }

     // Escapa os valores recebidos para evitar injeção de SQL
     $nomeUsuario = $mysqli->real_escape_string($data['nomeUsuario']);
     $emailUsuario = $mysqli->real_escape_string($data['emailUsuario']);
     $senhaUsuario = $mysqli->real_escape_string($data['senhaUsuario']);

     // Query para inserir um novo usuário no banco de dados
     $query = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario')";

     // Executa a query no banco de dados
     if ($mysqli->query($query)) {
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
