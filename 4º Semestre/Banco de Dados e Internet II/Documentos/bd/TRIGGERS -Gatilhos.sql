###=========================###
###======= TRIGGERS ========###
###=========================###

/*Gatilho é um objeto de banco de dados, associado a 
uma tabela, definido para ser disparado ou acionado, 
respondendo a um evento em particular. 

Tais eventos são os comandos DML: */
   INSERT, DELETE ou UPDATE

/*Podemos definir inúmeros*/ TRIGGERS /*em uma base de 
dados baseados diretamente em qual dos comandos acima 
irá dispará-lo, sendo que, para cada um, podemos 
definir apenas um gatilho.

Os TRIGGERS poderão ser disparados antes*/

BEFORE - AFTER /* do evento*/.

### Sintaxe ###

DELIMITER //
DROP TRIGGER IF EXISTS nome_da_trigger //

CREATE TRIGGER nome_da_trigger 
AFTER/BEFORE 
INSERT/UPDATE/DELETE ON nome_da_tabela
FOR EACH ROW
BEGIN
     ## corpo da triggers ##          
     ## query´s...........;
END//
DELIMITER ;

#Apagando uma trigger
DROP TRIGGER nome_da_trigger;

#Visualizando todas as triggers
SHOW TRIGGERS

/*Operadores : NEW e OLD.

Em gatilhos executados após a inserção de registros, 
a palavra reservada NEW dá acesso ao novo registro. 
Pode-se acessar as colunas da tabela como atributo 
do registro NEW.

O operador OLD funciona de forma semelhante, porém 
em gatilhos que são executados com a exclusão
de dados
*/

/*Exemplos/*

/*1.Quando realizamos uma venda de um produto 
precisamos atualizar o estoque dando baixa na 
quantidade vendida do produto.
Criar uma trigger para realizar essa tarefa*/

DELIMITER //
DROP TRIGGER IF EXISTS tr_venda_produtos //
CREATE TRIGGER tr_venda_produtos
AFTER INSERT ON itens_nfv
FOR EACH ROW
BEGIN
 ## ação a ser realizada ##
 UPDATE produtos SET estoque = estoque - new.quantidade
 WHERE id_produto = new.id_produto;
END//
DELIMITER ;

#Aplicação#
### evento externo  ###

INSERT INTO itens_nfv
           (id_nfv,id_produto,quantidade,pvenda)
VALUES (1,10,2,72.48);


### Acão - realizada na trigger ###
UPDATE .......

/*2.Criar uma trigger para atualizar o estoque do produto 
quando o mesmo for deletado dos itens de venda.*/

#Gatilho

#Evento externo - Aplicação


/*3.Criar um gatilho que no momento de deletar uma 
nota fiscal de venda verifique se a mesma possui 
itens. Caso afirmativo primeiro deleta os itens 
da NF e depois o cabeçalho da nota.*/


#Gatilho

#Evento


/*4.Criar uma trigger que identifique se o cliente 
faz aniversário no mesmo mes da compra que esta 
efetuando e de um desconto de 20% no valor da nota 
fiscal do mesmo*/

#Gatilho

#evento 










DELIMITER //

DROP TRIGGER IF EXISTS verfic_compra //

CREATE TRIGGER verfic_compra 
AFTER INSERT ON nf_vendas
FOR EACH ROW
BEGIN
    DECLARE total_compras INT;

    -- Calculate total_compras for the current cliente_id
    SELECT COUNT(*) INTO total_compras
    FROM nf_vendas
    WHERE cliente_id = NEW.id_cliente;

    IF total_compras >= 2 AND total_compras <= 2 THEN
        -- Conceder 5% de desconto
        UPDATE nf_vendas
        SET valor = NEW.valor * 0.95
        WHERE id_nfv = NEW.id_nfv; -- Assuming id_nfv is the primary key
    ELSEIF total_compras >= 3 AND total_compras <= 4 THEN
        -- Conceder 8% de desconto
        UPDATE nf_vendas
        SET valor = NEW.valor * 0.92
        WHERE id_nfv = NEW.id_nfv;
    ELSEIF total_compras > 4 THEN
        -- Conceder 10% de desconto
        UPDATE nf_vendas
        SET valor = NEW.valor * 0.90
        WHERE id_nfv = NEW.id_nfv;
    END IF;
END//

DELIMITER ;