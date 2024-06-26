<?php
require_once __DIR__ . '/../core/database/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
     // Obtém o corpo da requisição
     $body = file_get_contents("php://input");
     // var_dump($body);

     // Analisa os dados do corpo da requisição
     parse_str($body, $params);

     // Obtém o ID do usuário a ser excluído dos parâmetros do corpo da requisição
     $idUsuario = $params['idUsuario'] ?? null;
     // var_dump($idUsuario);
     // Verifica se o ID do usuário foi fornecido
     if (!$idUsuario) {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => "Por favor, forneça o ID do usuário."]);
          exit();
     }

     // Escapa o ID do usuário para evitar SQL injection
     // $idUsuario = $mysqli->real_escape_string($idUsuario);
     // echo $idUsuario;

     // Monta a consulta SQL para excluir o usuário com o ID fornecido
     $queryDeleteUser = "DELETE FROM usuarios WHERE idUsuario = '$idUsuario'";
     $result = mysqli_query($conn, $queryDeleteUser);

     // Executa a consulta SQL
     if ($result) {
          echo json_encode(['status' => 'success', 'message' => "Usuário deletado com sucesso :)"]);
     } else {
          http_response_code(500);
          echo json_encode(['status' => 'error', 'message' => "Erro ao deletar o usuário: " . $mysqli->error]);
     }
} else {
     // Se a requisição não for do tipo DELETE, retorna um erro 405 Method Not Allowed
     http_response_code(405);
     echo json_encode(['status' => 'error', 'message' => 'Método não permitido.']);
}
