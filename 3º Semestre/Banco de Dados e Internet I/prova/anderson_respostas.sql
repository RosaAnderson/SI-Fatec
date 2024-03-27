
/**
create database FATEC_PLAY;
/**/

/**
create table genero
(
    gen_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gen_descricao varchar(50) not null
)
/**/

/**
create table filmes
(
    fil_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fil_titulo varchar(50) not null,
    fil_duracao time not null,
    fil_valor double(6,2) not null,
    fil_gen int not null,
    
    FOREIGN KEY (fil_gen) REFERENCES genero (gen_id)
)
/**/

/**
create table usuarios
(
    usu_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usu_nome varchar(50) not null,
    usu_cpf VARCHAR(11) NOT NULL unique,
    usu_nascimento date not null,
    usu_sexo char(1) not null,
    usu_cidade VARCHAR(100) NOT NULL
)
/**/

/**
create table locacao
(
    loc_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    loc_data date not null,
    loc_hora time not null,
    loc_usu int not null,
    loc_fil int not null,
    
    FOREIGN KEY (loc_usu) REFERENCES usuarios (usu_id),
    FOREIGN KEY (loc_fil) REFERENCES filmes (fil_id)
)
/**/

## Exec. 2 #########################################################################################
/**
insert into genero (gen_descricao) value ('terror'),('suspense'),('drama'),('acao'),('comedia'),('ficcao'),('romance');
/**/

/**
insert into filmes (fil_titulo, fil_duracao, fil_valor, fil_gen) value
                   ('estrelas alem do tempo'   , '02:35:00', 15.80, 3),
                   ('viagem al centro da terra', '01:58:00', 6.50, 6),
                   ('hora do pesadelo'         , '01:40:00', 12.00, 1),
                   ('gente grande'             , '01:45:00', 6.50, 5),
                   ('star trek'                , '03:02:00', 33.00, 6),
                   ('constantine'              , '02:10:00', 29.00, 1)
/**/

/**
insert into usuarios (usu_nome, usu_cpf, usu_nascimento, usu_sexo, usu_cidade) value
                     ('Anderson Rosa'   , '00000000000', '1979-07-31', 'm', 'Bocaina'),
                     ('Joana DArk'      , '11111111111', '2003-05-24', 'f', 'Jau'),
                     ('Maria Pasquim'   , '22222222222', '1987-10-30', 'f', 'Bariri'),
                     ('James Henrique'  , '33333333333', '1981-12-25', 'm', 'Jau'),
                     ('Mona Lisa'       , '44444444444', '2004-01-01', 'f', 'Brotas'),
                     ('Leonardo DaVinci', '55555555555', '2010-02-29', 'm', 'Jau'),
                     ('Stephem Hawking' , '66666666666', '1929-05-13', 'm', 'Bocaina')
/**/

/**
insert into locacao (loc_data, loc_hora, loc_fil, loc_usu) value
                    ('2020-01-10', '02:09:17', 1, 7),
                    ('2020-02-20', '02:10:18', 3, 5),
                    ('2021-03-30', '03:11:19', 5, 3),
                    ('2021-04-05', '04:12:20', 2, 1),
                    ('2022-05-15', '05:13:21', 4, 2),
                    ('2022-06-25', '06:14:22', 6, 4),
                    ('2023-07-10', '07:15:23', 1, 6),
                    ('2023-08-15', '08:16:24', 2, 6)
/**/
####################################################################################################

## Exec. 3 #########################################################################################
/**
update filmes set fil_valor =

((SELECT fil_valor FROM filmes WHERE fil_gen = 3 AND (fil_valor BETWEEN 10 AND 30)) +

(((select fil_valor from filmes WHERE fil_gen = 3 AND (fil_valor BETWEEN 10 AND 30)) * 10) / 100))

where fil_gen = 3 and (fil_valor BETWEEN 10 AND 30)
/**/

## Exec. 4 #########################################################################################
/**
delete from genero where gen_descricao = 'romance'
/**/
####################################################################################################

## Exec. 5 #########################################################################################
/**
select fil_id as Codigo, fil_titulo as Titulo, fil_valor as Valor, fil_duracao as Duracao from filmes where fil_valor > 15
/**/
####################################################################################################

## Exec. 6 #########################################################################################
/**
SELECT usu_id AS Codigo, usu_nome AS Nome,

case when usu_sexo = 'f' then
  'Feminino'
else
  'Masculino'
end as Sex,

usu_cidade AS Cidade FROM usuarios WHERE usu_cidade = 'Jau' and  usu_sexo = 'm'
/**/
####################################################################################################

## Exec. 7 #########################################################################################
/**
select usu_id as Codigo, usu_nome as Nome, usu_cidade as Cidade, usu_cpf as CPF from usuarios
where usu_cidade <> 'Jau'
/**/
####################################################################################################
