<?php
require_once __DIR__ . '/../includes/db_connection.php';

// Verifica se a requisição é do tipo GET
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
     http_response_code(403); // Código de status HTTP 403 - Acesso negado
     echo json_encode(['status' => 'error', 'message' => 'Acesso negado. Método não permitido.']);
     exit(); // Termina a execução do script
}

// Se a requisição for do tipo GET, continua com o processamento normal
$query = "SELECT * FROM usuarios";

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
     $usuarios = [];
     while ($row = $result->fetch_assoc()) {
          $usuarios[] = $row;
     }
     echo json_encode(['status' => 'success', 'usuarios' => $usuarios]);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Nenhum usuário encontrado.']);
}
?>
