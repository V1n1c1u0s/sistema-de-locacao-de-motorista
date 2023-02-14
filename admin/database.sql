create database if not exists UFRPE
default character set utf8
default collate utf8_general_ci;

use UFRPE;

create table if not exists Usuarios (
Nome varchar (300) not null,
Usuario varchar (50) not null, 
Email varchar (320) not null, 
Contato char (14) not null, 
Perfil enum ('administrador','motorista','solicitante'),
CPF char (11) not null,
senha VARCHAR(40) not null,
data_cadastro DATETIME
) default charset = utf8;
