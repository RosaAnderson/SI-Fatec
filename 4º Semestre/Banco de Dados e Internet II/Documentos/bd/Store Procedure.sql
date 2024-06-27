=========================================*/
/*Criação de PROCEDURE (Stored Procedures)
=========================================*/
#Programas armazenados no servidor de BD.
#Pré-compilados.
#Chamados de forma explícita para executar 
#Alguma lógica de manipulação de dados.
#Podendo retornar ou não algum valor.
/*Ele é executado mais rápido do que comandos 
SQL não compilados que são enviados do 
aplicativo */

/*O procedimento armazenado reduz o tráfego 
entre o aplicativo e o servidor de banco de 
dados porque,em vez de enviar várias 
instruções de comandos SQL longos não 
compilados, o aplicativo precisa apenas 
enviar o nome do procedimento armazenado 
e obter o resultado de volta.  */

#Sintaxe#

DELIMITER //
DROP PROCEDURE IF EXISTS nome //
CREATE PROCEDURE nome (param IN, param OUT)
BEGIN
   *** corpo da PROCEDURE ***;
   ... querys..;
END
//
DELIMITER ;


#Executar uma procedure

CALL nome();

#Apagar uma procedure
DROP PROCEDURE IF EXISTS nome;
 
#===========================================#

/*Exemplo1:
Criar uma procedure para listar todas as 
informações dos clientes da empresa de acordo 
com o critério abaixo:

1.(NULL)....Todos os clientes.
2.(Codigo)..Somente o cliente especificado 
pelo cliente. 
obs: verificar se o cliente esta cadastrado*/

DELIMITER //
DROP PROCEDURE IF EXISTS proc_lista_clientes //
CREATE PROCEDURE proc_lista_clientes (IN cod INT)
BEGIN
 ## Corpo da procedure
 IF (cod IS NULL) THEN
    SELECT * FROM clientes;
    
 ELSE
   IF (cod IN (SELECT id_cliente FROM clientes)) THEN
    SELECT * FROM clientes WHERE cod=id_cliente;
   ELSE
    SELECT CONCAT("Cliente não cadastrado !! - ",cod) AS msg;
   END IF; 
 END IF;
END
//
DELIMITER ;

#Para executar a PROCEDURE - Aplicação

CALL proc_lista_clientes(NULL);
CALL proc_lista_clientes(10);
CALL proc_lista_clientes("jjJ");
 
 
 
 
 
/*Exemplo 2:Criar uma query para montar uma tabela 
de preços de produtos:*/
#opção1:com custo (1)
Codigo - Descritivo - Custo - Venda
#opção2:sem custo (2)
Codigo - Descritivo - Venda


#Obs: Realizar validação do parâmetro de entrada

CALL proc_tabela_precos(1);
CALL proc_tabela_precos(2);
CALL proc_tabela_precos(3);


### Lista de exercicios ###

/*1) Criar uma procedure que liste todos os 
dependentes de um determinado funcionarios
informado pelo usuario.
Obs:A procedure deverá verificar : 
a)Se o funcionario não esta cadastrado.
b)Se o funcionario não tem dependentes*/

Codigo  Nomefuncionario  Nomedependente	

CALL proc_lista_filhos();
CALL proc_lista_filhos();
CALL proc_lista_filhos();

/*2)Criar uma procedure que liste o total 
vendido por um determinado vendedor.
Entrada: Codigo do vendedor
Obs:A procedure deverá verificar : 
a)Se o vendedor esta cadastrado.
b)Se o vendedor não realizou vendas deve vir
  com total zero*/

Codigo         Nome        Total 
	 

/*3)Criar uma procedure que liste o total 
vendido de um determinado produto em um periodo 
determinado pelo usuario.
Entrada: Codigo do cliente
	 Data inicial
	 Data Final


** Procedure para inserir - atualizar - deletar

4)Criar uma query para inserir um vendedor no 
sistema.




5)Criar uma procedure que atualize os produtos 
da empresa em X%.A atualização será feita por 
setor.




6)Criar uma query que delete um produto do 
cadastro da empresa.





7)Criar uma query que delete um funcionário 
do cadastro da empresa.




8) Criar uma procedure para listar todos 
os imoveis locados num determinado periodo
indicado pelo usuario.
Datai - data inicial
Dataf - data final
A procedure deverá receber o periodo a ser 
pesquisado */




/*9)Criar uma procedure para apagar
um determinado imovel do cadastro.
Obs: 
* Um imovel somente pode ser apagado
se existir.Portanto, caso o imovel não
esteja cadastrado, o sistema deverá 
reportar a seguinte mensagem para o usuario:
"Imovel não cadastrado".
* Um imovel não poder ser apagado 
caso esteja locado ou tenha sido locado
anteriormente. Nesse caso a procedure 
deverá reportar uma mensagem para o
usuario : "registro de imovel com vinculos!!".*/




/*10)Criar uma procedure para dar um desconto de X% 
no valor dos imoveis que não estão locados.
A procedure deverá receber o percentual a ser
aplicado de desconto e realizar a operação*/





/*11)Criar uma procedure para listar 
todas as disciplinas de um determinado 
curso de acordo com o layout indicado: 
A procedure deverá receber o codigo do 
curso e reportar para o usuario
caso não haja disciplina para esse curso 
ou caso o curso não esteja cadastrado.*/

Código	Descr. CargaHor.  Valor  Curso

  


/*12)Criar uma procedure para calcular o total 
vendido e o valor a ser pago de comissão para um 
determinado vendedor da empresa em um determinado 
período. 
A procedure deverá receber o código do vendedor e 
o período.*/

Nome   Totalvendido  %Comissão   ValorComissão

  
  
  
/*13) Criar uma procedure para apagar um 
determinado curso.A procedure deverá receber 
o codigo do curso e realizar as verificações 
adequadas para efetuar a ação.*/






/*14) Criar uma procedure para listar o valor
a ser recebido por um proprietario determinado 
pelo usuario.*/

Codigo  Nome  Valor recebido  
              soma dos alugueis dos imoveis
              locados menos o %6 da imobiliaria*/
               
 
  