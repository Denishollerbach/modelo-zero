<?php
// Inicia a sessão
session_start();

// Inclui o arquivo de conexão com o banco de dados
require_once 'modelo-zero/db.php';

// Verifica se a variável de sessão 'usuario_logado' está definida
if (isset($_SESSION['usuario_logado'])) {
     echo "Usuário está logado.";
     // Aqui você pode redirecionar o usuário para uma página protegida ou realizar outras ações necessárias
} else {
     // Obtém o usuário e a senha do POST
     $usuario = $_POST['usuario'] ?? '';
     $senha = $_POST['senha'] ?? '';

     // Verifica se as credenciais são fornecidas
     if (!empty($usuario) && !empty($senha)) {
          // A conexão com o banco de dados já está estabelecida em db.php
          // Supondo que $conexao seja a variável de conexão disponibilizada por db.php

          // Prepara a consulta SQL para verificar as credenciais
          $stmt = $conexao->prepare('SELECT * FROM contatos WHERE usuario = ? AND senha = ?');
          $stmt->bind_param('ss', $usuario, $senha);
          $stmt->execute();
          $resultado = $stmt->get_result();

          if ($resultado->num_rows > 0) {
               // Credenciais válidas, cria a sessão do usuário
               $_SESSION['usuario_logado'] = $usuario;

               // Retorna uma resposta JSON indicando sucesso no login
               echo json_encode(['sucesso' => true, 'mensagem' => 'Login realizado com sucesso.']);
          } else {
               // Credenciais inválidas, retorna uma resposta JSON indicando falha no login
               echo json_encode(['sucesso' => false, 'mensagem' => 'Usuário ou senha inválidos.']);
          }

          // Fecha a conexão
          $stmt->close();
          // Não é necessário fechar a conexão aqui se db.php gerencia isso
     } else {
          // Credenciais não fornecidas, retorna uma resposta JSON indicando falha no login
          echo json_encode(['sucesso' => false, 'mensagem' => 'Usuário e senha são obrigatórios.']);
     }
}
