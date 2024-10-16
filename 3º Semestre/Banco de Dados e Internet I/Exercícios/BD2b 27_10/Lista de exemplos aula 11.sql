### Junção entre tabelas  - inner join (tenho uma tabela e com isso posso relacioná-la com outra, pra pegar a informação da outra tabela e apresentá-las)###
/*consigo buscar apenas em tabelas que já estão vinculadas pelas chaves primarias e estrangeiras, ligação entre as tabelas por um campo*/

#Exemplo 1 : relatório de todos os filmes com os seus respectivos generos #
#* generaliza todos os campos#
Codigo Titulo Genero
SELECT f.id_filme "Código", f.titulo, g.descritivo "Genero"
/*toda vez que tiver inner join tem mais de uma tabela então aponta tabela.o que tem na tabela*/
FROM filmes f INNER JOIN generos g 
ON (f.id_genero=g.id_genero)
/*posso colocar um apelido pra tabela nessa caso filmes virou f e generos virou g (o apelido sempre no from) depois que atribui o apelido, o nome 
anterior não vele mais nesse query, mas se fizer outra query vale. Vale apenas pra esse execução em específic(uma vez com apelido não se pode usar o nome original)*/


/*Exemplo 2 : Criar uma query para listar todos os usuários com seus respectivos telefones de contato*/
Código	Nome	Telefone

/*sempre começa com SELECT e FROM
PRIMEIRO FROM para identifcar as tabelas e os campos que eu vou utilizar, coloco o INNER JOIN para fazer a junção ON estabelece onde eles estão ligados
faço FRON e as junções e coloco * pra testar, depois eu crio meo layout no SELECT pra organizar*/
SELECT u.id_usuario "Código", u.nome "Nome", t.numero "Telefone"
FROM usuarios u INNER JOIN telefones t
ON (u.id_usuario=t.id_usuario)/*só pode-se igualar conteúdos iguais, idependente do nome ser igual ou diferente, o que importa é o conteúdo*/


/*Exemplo 3.1 : Criar uma query para listar os filmes locados por todos os usuários*/
/*nesse caso precisaremos usar a tabela do relacionamento entre usuarios e filmes, para poder fazer o INNER JOIN, por que elas não se ligam*/
/*somente no primeiro a tabela vem anbtes pra começar a junção, depois usa INNER JOINA  e depois tabela pra ir fazer as ligações*/
/*toda vez que acontever um novo INNER JOIN acontece um novo ON*/

Código	Nome	Filme

SELECT U.ID_USUARIO "Código", u.nome "Nome", f.titulo "Filme"
FROM usuarios u INNER JOIN locacao l
ON (u.id_usuario=l.id_usuario) INNER JOIN filmes f
ON (l.id_filme=f.id_filme)


/*Exemplo 3.2 : Acrescentar a data e a hora da locação*/
Código	Nome	Filme	Data_locação	Horario
/*DATE_FORMAT é uma função que formata o campo que guarda a data(não pode colocar espaço entre o nome da função e os parenteses)*/
SELECT u.id_usuario "Código", u.nome "Nome", f.titulo "Filme", DATE_FORMAT(l.datal, "%d/%m/%Y") "Data_locação", l.horal "Horário"
FROM usuarios u INNER JOIN locacao l
ON (u.id_usuario=l.id_usuario) INNER JOIN filmes f
ON (l.id_filme=f.id_filme)

/*Exemplo 3.3 : Filtrar somente os filmes cujo valor seja menos do que 18.00*/
Código	Nome	Filme	Data_locação	Horario

/*FORMAT para formatar o valor de USA para BR, e depois vamos concatenar o valor como string*/
SELECT u.id_usuario "Código", u.nome "Nome", f.titulo "Filme", DATE_FORMAT(l.datal, "%d/%m/%Y") "Data_locação", l.horal "Horário", 
CONCAT("R$", FORMAT(f.valor,2,"de_DE"))"Valor"
FROM usuarios u INNER JOIN locacao l
ON (u.id_usuario=l.id_usuario) INNER JOIN filmes f
ON (l.id_filme=f.id_filme)
 /*com WHERE fazemos um filtro de busca*/
WHERE f.valor < 18.00

/*Exemplo 4 : Criar um query para listar todos os filmes com seus respectivos usuários*/
Código 	Título	ValorR$	Gênero	Usuários

# tabelas: filmes, generos, locação, usuarios#
SELECT u.id_usuario "Código", f.titulo "Título", CONCAT("R$", FORMAT(f.valor,2,"de_DE"))"Valor", g.descritivo "Gênero", u.nome "Usuario"
FROM filmes f INNER JOIN generos g
ON (f.id_genero=g.id_genero) INNER JOIN locacao l
ON (l.id_filme=f.id_filme) INNER JOIN usuarios u
ON (l.id_usuario=u.id_usuario)
/*parar classificar em ordem alfabética*/
ORDER BY f.titulo
/*se quiser odenar por valor
ORDER BY f.valor (dessa forma do menos pro maior, se quiser fazer o contrario usar DESC)*/ 
/*Se quiser listar com mais de dois critérios ir ordenando e separando por vírgula ex: ORDER BY g.descritivo, f.valor*/
