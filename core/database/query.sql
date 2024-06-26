-- Cria o banco de dados hbach-template
CREATE DATABASE IF NOT EXISTS db_hbach_template;

-- Seleciona o banco de dados hbach-template
USE hbach_template;

-- Cria a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nomeUsuario VARCHAR(255),
    emailUsuario VARCHAR(255),
    senhaUsuario VARCHAR(255),
    criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insere um novo usuário
INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario) VALUES ('Denis', 'devhollerbach@gmail.com', 'senha123');

-- Seleciona todos os usuários
SELECT * FROM usuarios;

-- Atualiza o nome de um usuário
UPDATE usuarios SET nomeUsuario = 'denishollerbach' WHERE idUsuario = 1;

-- Deleta um usuário
DELETE FROM usuarios WHERE idUsuario = 1;
