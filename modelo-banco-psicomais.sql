create database psicomais
default character set utf8
default collate utf8_general_ci;

use piscomais;

create table cliente (
    cli_cpf int not null,
    cli_email varchar(30) not null, 
    cli_telefone int not null,
    cli_endereco varchar(45) not null,
    cli_idade int not null,
    cli_nome varchar(30) not null,
    primary key (cli_cpf)
) 
ENGINE = InnoDB;

create table especialidade (
    esp_codigo int not null,
    esp_nome varchar(30) not null,
    primary key (esp_codigo)
) ENGINE = InnoDB;

create table agenda (
    age_codigo int not null,
    age_data datetime null,
    age_hora datetime null,
    age_local varchar(30) not null,
    primary key (age_codigo)
) ENGINE = InnoDB;

create table instituicao (
 inst_email varchar(30) not null,
 inst_endereco varchar(30) not null,
 inst_nome varchar(30) not null,
 inst_numero int not null,
 primary key (inst_email)    
) ENGINE = InnoDB;

create table profissional(
    pro_cpf int not null,
    pro_telefone int not null,
    pro_endereco varchar(45) not null,
    pro_idade int not null,
    pro_email varchar(30) not null,
    pro_nome varchar(30) not null,
    primary key (pro_cpf),
    esp_pro_codigo int,
    age_pro_codigo int,
    inst_pro_email varchar(30),
    foreign key (esp_pro_codigo) references especialidade (esp_codigo),
    foreign key (age_pro_codigo) references agenda (age_codigo),
    foreign key (inst_pro_email) references instituicao (inst_email)
) ENGINE = InnoDB;

create table consulta(
    con_codigo int not null,
    con_dia datetime not null,
    con_data_hora datetime not null,
    con_endereco varchar(45) not null,
    con_online varchar(3) null,
    primary key (con_codigo),
    cli_con_cpf int, 
    pro_con_cpf int, 
    foreign key (cli_con_cpf) references cliente (cli_cpf),
    foreign key (pro_con_cpf) references profissional (pro_cpf)
) ENGINE = InnoDB;