create database octaEscola;

use octaEscola;

create table aluno(
	matr varchar(50) not null unique,
    nome varchar(50) not null,
    nomeMae varchar(50),
    nomePai varchar(50),
    cpf varchar(15),
    tel varchar(15),
    renda double,
    primary key(matr)
);

select * from aluno;