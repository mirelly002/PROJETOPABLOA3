CREATE DATABASE meusite;

USE meusite;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Inserir um admin padrão
INSERT INTO usuarios (username, senha, role) 
VALUES ('admin', MD5('admin123'), 'admin');
