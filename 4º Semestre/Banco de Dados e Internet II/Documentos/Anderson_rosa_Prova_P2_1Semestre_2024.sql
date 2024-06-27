/** 
exercicio 01.(rh_empresa) Criar uma procedure (parâmetros IN) para apagar um
	determinado projeto da tabela de projetos da empresa. Efetuar todas as
	validações necessárias para que a tarefa seja realizada. A procedure
	deverá receber o código do projeto. (3.0)
•	Verificar se o projeto está cadastrado. 
•	Verificar se o projeto está associado a algum funcionario.
/**/
DELIMITER //
DROP PROCEDURE IF EXISTS pc_projetos //
CREATE PROCEDURE pc_projetos (IN pro_id INT)
BEGIN
		IF (SELECT id_projeto FROM projetos WHERE id_projeto = pro_id) THEN
			IF (SELECT id_projeto FROM funcionarios_projetos WHERE id_projeto = pro_id) THEN
				DELETE FROM funcionarios_projetos WHERE id_projeto = pro_id;
				DELETE FROM projetos WHERE id_projeto = pro_id;
			ELSE
				DELETE FROM projetos WHERE id_projeto = pro_id;
			END IF;
		ELSE
			SELECT CONCAT('Nenhum projeto encontrado para o código ', pro_id) AS msg;
		END IF;
END //
DELIMITER ;

CALL pc_projetos(2);

/**
 exercicio 02.(Fatecvan) Criar uma Trigger que identifique, no momento da venda,
 se o cliente já realizou 2 ou mais compras na loja. Se sim conceder um desconto
 no valor da nota fiscal de venda de acordo com os critérios da tabela abaixo.
Obs: Sempre que o cliente fizer uma compra, o sistema irá verificar se ele tem
desconto ou não.  (3.0)

>=1 e <=2	5%
>= 3 e <= 4	8%
> 4	10%

/**/

DELIMITER //
DROP TRIGGER IF EXISTS tr_desconto //
CREATE TRIGGER tr_desconto
BEFORE INSERT ON itens_nfv
FOR EACH ROW
BEGIN
	DECLARE tot_com INT;

    SELECT COUNT(*) INTO tot_com FROM nf_vendas WHERE id_cliente = NEW.id_cliente;
 
    IF tot_com >= 1 AND tot_com <= 2 THEN
        UPDATE nf_vendas SET valor = NEW.valor * 0.95 WHERE id_cliente = NEW.id_cliente AND id_venda = NEW.id_venda;
    ELSEIF tot_com >= 3 AND tot_com <= 4 THEN
        UPDATE nf_vendas SET valor = NEW.valor * 0.92 WHERE id_cliente = NEW.id_cliente AND id_venda = NEW.id_venda;
    ELSEIF tot_com > 4 THEN
        UPDATE nf_vendas SET valor = NEW.valor * 0.90 WHERE id_cliente = NEW.id_cliente AND id_venda = NEW.id_venda;
    END IF;
END //
DELIMITER ;

INSERT INTO itens_nfv
           (id_nfv,id_produto,quantidade,pvenda)
VALUES (1,10,2,71.48);

/**
exercicio 03.(Fatecvan) Criar uma Trigger que seja disparada quando um funcionario
 atingir o total de 3 dependentes (filhos (as)). A Trigger deverá realizar um
  acréscimo de 10% no salário do funcionário. (Salario*1.10).
Obs: O funcionário somente terá o acréscimo ao atingir o número de dependentes igual
 a 3 e uma única vez, ou seja, após esse total o funcionario não terá mais acréscimos,
  mesmo se tiver mais filhos.  (3.0)
/**/

DELIMITER //
DROP TRIGGER IF EXISTS tr_cont_dependentes //
CREATE TRIGGER tr_cont_dependentes
AFTER INSERT ON dependentes
FOR EACH ROW
BEGIN
    DECLARE tot_dependentes INT;

    SELECT COUNT(*) INTO tot_dependentes FROM dependentes WHERE id_funcionario = NEW.id_funcionario;

    IF tot_dependentes = 3 THEN
        IF NOT EXISTS (SELECT id_funcionario FROM funcionarios WHERE id_funcionario = NEW.id_funcionario) THEN
			UPDATE funcionarios SET salario = salario * 1.10 WHERE id_funcionario = NEW.id_funcionario;
        END IF;
    END IF;
END //
DELIMITER ;


INSERT INTO dependentes (nome, sexo, datan, id_funcionario)
VALUES ('Josef', 'M', '2024-01-15', 6);



/**
exercicio 04.(rh_empresa) Conceder o privilégio de CONSULTAR o id_funcionario, nome,
 data de admissão e salario e conceder o privilégio de ATUALIZAR somente os campos
 nome e data de admissão da tabela de funcionários. Realizar as seguintes ações (1.0):
	
•	Conceder
•	Mostrar os privilégios
•	Revogar o privilégio de atualização dos campos 
•	Apagar o usuário.
*/

GRANT SELECT ON rh_empresas.funcionarios(id_funcionario, nome, admissao, salario) TO 'ar'@'localhost';

GRANT UPDATE (nome, admissao) ON rh_empresas.funcionarios TO 'ar'@'localhost';

SHOW GRANTS FOR 'ar'@'localhost';

REVOKE UPDATE (nome, admissao) ON rh_empresas.funcionarios FROM 'ar'@'localhost';

DROP USER 'ar'@'localhost';
