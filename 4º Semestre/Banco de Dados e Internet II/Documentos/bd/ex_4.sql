
/*4.(rh_empresa) 
	Conceder o privilégio de CONSULTAR o id_funcionario, nome, data de nascimento, data de admissão e salario 
	e conceder o privilégio de ATUALIZAR somente os campos nome e data de admissão da tabela de funcionários.
	Realizar as seguintes ações (1.0):
	
•	Conceder
•	Mostrar os privilégios
•	Revogar o privilégio de atualização dos campos 
•	Apagar o usuário.
*/


GRANT SELECT ON rh_empresas.funcionarios(id_funcionario, nome, datan, admissao, salario) TO 'pma'@'localhost';


GRANT UPDATE (nome, admissao) ON rh_empresas.funcionarios TO 'pma'@'localhost';

SHOW GRANTS FOR 'pma'@'localhost';

REVOKE UPDATE (nome, admissao) ON rh_empresas.funcionarios FROM 'pma'@'localhost';


DROP USER 'pma'@'localhost';



