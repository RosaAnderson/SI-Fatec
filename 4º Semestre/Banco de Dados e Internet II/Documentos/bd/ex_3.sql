/*

3.(rh_empresas) Criar uma Trigger que seja disparada quando um funcionario atingir o total de 3 dependentes (filhos (as)). 
A Trigger deverá realizar um acréscimo de 10% no salário do funcionário. (Salario*1.10).
Obs: O funcionário somente terá o acréscimo ao atingir o número de dependentes igual a 3 e uma única vez, ou seja, 
após esse total o funcionario não terá mais acréscimos, mesmo se tiver mais filhos.  (3.0)

*/

DELIMITER //
DROP TRIGGER IF EXISTS trg_aumento_salario_dependentes //
CREATE TRIGGER trg_aumento_salario_dependentes
AFTER INSERT ON dependentes
FOR EACH ROW
BEGIN
    DECLARE total_dependentes INT;

    SELECT COUNT(*) INTO total_dependentes
    FROM dependentes
    WHERE id_funcionario = NEW.id_funcionario;

    IF total_dependentes = 3 THEN
        
        IF NOT EXISTS (
            SELECT * 
            FROM funcionarios
            WHERE id_funcionario = NEW.id_funcionario
              AND salario = salario * 1.10) THEN

            UPDATE funcionarios
            SET salario = salario * 1.10
            WHERE id_funcionario = NEW.id_funcionario;
        END IF;
    END IF;
END//

DELIMITER ;


INSERT INTO dependentes (nome, sexo, datan, id_funcionario)
VALUES ('Wdson', 'M', '2010-01-15', 1);
