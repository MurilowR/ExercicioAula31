CREATE DATABASE agendaVirtual;
USE agendaVirtual;

CREATE TABLE pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(20),
    email VARCHAR(100),
    idade INT
);

INSERT INTO pessoas (nome, cpf, email, idade)
VALUES ('Ana', '123.456.789-00', 'ana@example.com', 28);