<?php
// Inclua a conexão com o banco de dados
// require_once '../includes/db_connection.php';
require_once __DIR__ . '/../includes/db_connection.php';



// Função para buscar tarefas com base em um termo de pesquisa
function searchTasks($searchTerm)
{
     global $mysqli;

     // Escapa o termo de pesquisa para evitar injeção de SQL
     $searchTerm = $mysqli->real_escape_string($searchTerm);

     // Query para buscar tarefas que contenham o termo de pesquisa no título ou na observação
     $query = "SELECT * FROM usuarios WHERE nomeUsuario LIKE '%$searchTerm%' OR emailUsuario LIKE '%$searchTerm%'";
     $result = $mysqli->query($query);

     $tasks = [];
     while ($row = $result->fetch_assoc()) {
          $tasks[] = $row;
     }
     return $tasks;
}

// Verifica se o parâmetro 'q' foi passado na URL
if (isset($_GET['q'])) {
     // Obtém o valor do parâmetro 'q'
     $searchTerm = $_GET['q'];

     // Busca as tarefas com base no termo de pesquisa
     $tasks = searchTasks($searchTerm);

     // Retorna as tarefas encontradas como JSON
     header('Content-Type: application/json; charset=utf-8');
     echo json_encode($tasks);
} else {
     // Se nenhum termo de pesquisa for fornecido, retorna todas as tarefas
     function getTasks()
     {
          global $mysqli;

          $query = "SELECT * FROM tasks";
          $result = $mysqli->query($query);

          $tasks = [];
          while ($row = $result->fetch_assoc()) {
               $tasks[] = $row;
          }
          return $tasks;
     }

     $tasks = getTasks();

     // Retorna todas as tarefas como JSON
     header('Content-Type: application/json; charset=utf-8');
     echo json_encode($tasks);
}