<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Conexão com o banco de dados
$hostname = getenv('DB_HOST');
$username = getenv('DB_USER');
$credential = getenv('DB_PASSWORD');
$database = 'db_circuito_engov';
$conn = mysqli_connect($hostname, $username, $credential, $database);
$conn->set_charset("utf8mb4");

header('Content-Type: application/json');


// Geracao de cupom
$queryGetCupom = 'SELECT * FROM cupons WHERE statusCupom = \'livre\' ORDER BY idCupom ASC LIMIT 1;';
$getCupom = mysqli_query($conn, $queryGetCupom);

if (mysqli_num_rows($getCupom) != 1) {
     echo json_encode(['status' => 'sem-brinde', 'message' => 'Sem cupons disponiveis']);
} else {
     $dadosCupom = mysqli_fetch_assoc($getCupom);
     $cupom = $dadosCupom['codigoCupom'];
     $querySetUpdateCupom = 'UPDATE cupons SET statusCupom = \'utilizado\' WHERE idCupom = \'' . $dadosCupom['idCupom'] . '\' ';
     $setUpdateCupom = mysqli_query($conn, $querySetUpdateCupom);
     // Verificar se o e-mail, CPF e nome foram enviados
     if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['dataNascimento']) && isset($_POST['email'])) {
          // Escapar os valores para evitar SQL injection
          $nome = mysqli_real_escape_string($conn, $_POST['nome']);
          $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $dataNascimento = mysqli_real_escape_string($conn, $_POST['dataNascimento']);

          // Consulta se o e-mail já existe no banco de dados
          $emailQuery = 'SELECT COUNT(*) AS total FROM contatos WHERE emailContato = \'' . $email . '\'';
          $emailResult = mysqli_query($conn, $emailQuery);

          // Consulta se o CPF já existe no banco de dados
          $cpfQuery = 'SELECT COUNT(*) AS total FROM contatos WHERE cpfContato = \'' . $cpf . '\'';
          $cpfResult = mysqli_query($conn, $cpfQuery);

          // Verifica se as consultas foram bem-sucedidas
          if ($emailResult && $cpfResult) {
               // Obtém o resultado das consultas
               $emailTotal = mysqli_fetch_assoc($emailResult)['total'];
               $cpfTotal = mysqli_fetch_assoc($cpfResult)['total'];

               // Verifica se o CPF já existe
               if ($cpfTotal > 0) {
                    echo json_encode(['status' => 'error', 'message' => 'CPF já cadastrado']);
               }
               // Verifica se o e-mail já existe
               else if ($emailTotal > 0) {
                    echo json_encode(['status' => 'error', 'message' => 'E-mail já cadastrado']);
               } else {
                    // Inserir dados na tabela contatos
                    $insertQuery = 'INSERT INTO contatos(nomeContato, cpfContato, emailContato, dataNascimentoContato, cupomContato) VALUES (\'' . $nome . '\',\'' . $cpf . '\',\'' . $email . '\',\'' . $dataNascimento . '\',\'' . $cupom . '\');';
                    if (mysqli_query($conn, $insertQuery)) {

                         echo json_encode([
                              'status' => 'success', 'message' => 'Contato cadastrado com sucesso!', 'cupom' => $cupom
                         ]);
                    } else {
                         echo json_encode(['status' => 'error', 'message' => 'Erro ao inserir dados no banco de dados']);
                    }
               }
          } else {
               // Se houver um erro na consulta, retorna false
               echo json_encode(['status' => 'error', 'message' => 'Erro na consulta ao banco de dados']);
          }
     } else {
          // Se o e-mail, CPF ou nome não foram enviados, retorna um erro
          echo json_encode(['status' => 'error', 'message' => 'E-mail, CPF ou nome não fornecidos']);
     }
}
