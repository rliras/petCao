create database petcao;

use petcao;

create table cadastro_pessoa (
  id_pessoa INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(30) NOT NULL, 
  cpf int(11) unique not null, 
  telefone varchar(20),
  email varchar(100)
);

create table cadastro_animal (
  id_animal int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_pessoa int(6) UNSIGNED,
  nome VARCHAR(30) NOT NULL,
  raca VARCHAR(30) NOT NULL,
  especie VARCHAR(30) NOT NULL
);

create table ficha_atendimento (
  id_ficha int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_pessoa int(6) UNSIGNED,
  id_animal int(6) UNSIGNED,
  nome_veterinario VARCHAR(30) NOT NULL,
  descricao text
);
