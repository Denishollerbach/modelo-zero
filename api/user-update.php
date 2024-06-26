<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../core/database/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "PUT") {
     // Obtém os dados enviados via PUT
     $data = json_decode(file_get_contents("php://input"), true);
     // Verifica se todos os campos necessários foram fornecidos
     if (!isset($data['idUsuario']) || !isset($data['nomeUsuario']) || !isset($data['emailUsuario'])) {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => "Por favor, forneça o ID, nome e email do usuário."]);
          exit();
     }

     // Escapa os valores recebidos para evitar injeção de SQL
     $idUsuario = $conn->real_escape_string($data['idUsuario']);
     $nomeUsuario = $conn->real_escape_string($data['nomeUsuario']);
     $emailUsuario = $conn->real_escape_string($data['emailUsuario']);

     // Atualiza o usuário no banco de dados
     $query = "UPDATE usuarios SET nomeUsuario = '$nomeUsuario', emailUsuario = '$emailUsuario' WHERE idUsuario = '$idUsuario'";

     if ($conn->query($query)) {
          echo json_encode(['status' => 'success', 'message' => "Usuário atualizado com sucesso :)"]);
     } else {
          http_response_code(500);
          echo json_encode(['status' => 'error', 'message' => "Erro ao atualizar o usuário: " . $conn->error]);
     }
} else {
     http_response_code(405);
     echo json_encode(['status' => 'error', 'message' => 'Método não permitido.']);
}
