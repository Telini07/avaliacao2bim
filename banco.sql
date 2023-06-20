CREATE DATABASE prova2;
USE prova2;

DROP TABLE fluxo_caixa

CREATE TABLE fluxo_caixa
(
    id_f integer not null auto_increment,
    data date not null,
    tipo varchar(10) not null,
    valor decimal(10,2) not null,
    historico varchar(150) not null,
    cheque varchar(3) not null,
    PRIMARY KEY (id)
)