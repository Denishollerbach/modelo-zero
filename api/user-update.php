<?php
require_once __DIR__ . '/../includes/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "PUT") {
     $data = json_decode(file_get_contents("php://input"), true);

     if (!isset($data['idUsuario']) || !isset($data['nomeUsuario']) || !isset($data['emailUsuario'])) {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => "Por favor, forneça o ID, nome e email do usuário."]);
          exit();
     }

     $idUsuario = $mysqli->real_escape_string($data['idUsuario']);
     $nomeUsuario = $mysqli->real_escape_string($data['nomeUsuario']);
     $emailUsuario = $mysqli->real_escape_string($data['emailUsuario']);

     $query = "UPDATE usuarios SET nomeUsuario = '$nomeUsuario', emailUsuario = '$emailUsuario' WHERE idUsuario = '$idUsuario'";

     if ($mysqli->query($query)) {
          echo json_encode(['status' => 'success', 'message' => "Usuário atualizado com sucesso :)"]);
     } else {
          http_response_code(500);
          echo json_encode(['status' => 'error', 'message' => "Erro ao atualizar o usuário: " . $mysqli->error]);
     }
} else {
     http_response_code(405);
     echo json_encode(['status' => 'error', 'message' => 'Método não permitido.']);
}
