CREATE DATABASE IF NOT EXISTS doe_sorrisos;
USE doe_sorrisos;

-- Tabela para o formulário de contato
CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  mensagem TEXT NOT NULL,
  criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela para o formulário de doação
CREATE TABLE doacoes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  tipo_doacao ENUM('dinheiro', 'roupas', 'brinquedos', 'material_escolar', 'outro') NOT NULL,
  valor DECIMAL(10, 2) NULL,
  descricao TEXT NULL,
  criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);
