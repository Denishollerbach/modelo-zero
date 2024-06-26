<?php
// Inclua a conexão com o banco de dados
require_once __DIR__ . '/../core/database/db_connection.php';

// Verifica se o parâmetro 'q' foi passado na URL
if (isset($_GET['q'])) {
     // Obtém o valor do parâmetro 'q'
     $searchTerm = $_GET['q'];

     // Busca os usuários com base no termo de pesquisa
     $users = searchUsers($searchTerm, $conn); // Passa a conexão como parâmetro

     // Retorna os usuários encontrados como JSON
     header('Content-Type: application/json; charset=utf-8');
     echo json_encode($users);
} else {
     // Se nenhum termo de pesquisa for fornecido, retorna uma mensagem de erro
     http_response_code(400);
     echo json_encode(['status' => 'error', 'message' => 'Por favor, forneça um termo de pesquisa.']);
}

// Função para buscar usuários com base em um termo de pesquisa
function searchUsers($searchTerm, $conn)
{
     // Escapa o termo de pesquisa para evitar injeção de SQL
     $searchTerm = $conn->real_escape_string($searchTerm);

     // Query para buscar usuários que contenham o termo de pesquisa no nome ou no email
     $query = "SELECT * FROM usuarios WHERE nomeUsuario LIKE '%$searchTerm%' OR emailUsuario LIKE '%$searchTerm%'";
     $result = $conn->query($query);

     $users = [];
     while ($row = $result->fetch_assoc()) {
          $users[] = $row;
     }
     return $users;
}
