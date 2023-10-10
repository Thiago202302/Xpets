CREATE DATABASE IF NOT EXISTS xpet_pdv
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE xpet_pdv;

CREATE TABLE IF NOT EXISTS Tutor (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    contato INT(11) NOT NULL,
    cpf BIGINT(11) UNSIGNED ZEROFILL NOT NULL UNIQUE
    rua VARCHAR(255),
    casa VARCHAR(255),
    bairro VARCHAR(255),
    cidade VARCHAR(255)

);

CREATE TABLE IF NOT EXISTS PET (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codigo_tutor INT NOT NULL,
    nome VARCHAR(255),
    idade INT,
    sexo TINYINT(1), -- 0 para Macho, 1 para Fêmea
    especie VARCHAR(100),
    FOREIGN KEY (codigo_tutor) REFERENCES Tutor (codigo)
);


CREATE TABLE IF NOT EXISTS produto (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(200) NOT NULL,
    estoque INT NOT NULL
);

CREATE TABLE IF NOT EXISTS compra (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    codigo_cliente INT NOT NULL,
    data_hora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    FOREIGN KEY (codigo_cliente) REFERENCES Tutor (codigo)
);

CREATE TABLE IF NOT EXISTS item (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    codigo_compra INT NOT NULL,
    codigo_produto INT NOT NULL,
    FOREIGN KEY (codigo_compra) REFERENCES compra (codigo),
    FOREIGN KEY (codigo_produto) REFERENCES produto (codigo)
);
