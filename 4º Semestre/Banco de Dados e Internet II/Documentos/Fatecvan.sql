/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.27 : Database - fatecvan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`fatecvan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fatecvan`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(80) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categoria`,`descritivo`) values (1,'Moda'),(2,'Cama-Mesa-Banho'),(3,'Eletro'),(4,'Eletrônicos'),(5,'Utilidades domésticas'),(6,'Automotivos'),(7,'teste'),(9,'Esportes');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `datanasc` date NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `clientes` */

insert  into `clientes`(`id_cliente`,`nome`,`sexo`,`datanasc`,`logradouro`,`bairro`,`cidade`) values (1,'Lucas','M','1994-02-01','Rua Vitoria 1900','Jardim das Flores','São Carlos'),(2,'Gabriel','M','1996-03-02','Rua das flores 2900','Centro','Araraquara'),(3,'Wdson','M','1998-06-03','Rua das rosas 3900','Jd Bandeirantes','Jahu'),(4,'Gilmar','M','1990-05-04','Rua Sucesso 4900','Parque das Arvores','Araraquara'),(5,'Patricia','F','1991-06-05','Rua sem saida 5900','Centro','Bauru'),(6,'Beatriz','F','1965-07-06','Av bandeirantes 6900','Planalto','Ibate'),(7,'Adriana','F','1989-08-07','Av Miguel Petroni 7900','Santa Marta','São Carlos'),(8,'Isabela','F','1991-09-08','Rua Tirandentes 900','Queto','Bocaina'),(9,'Carla','F','1993-02-10','Rua Delta 49','Palmares','Americo'),(10,'Camila','F','1992-11-21','Rua Pele 1350','Centro','Brotas');

/*Table structure for table `formapagto` */

DROP TABLE IF EXISTS `formapagto`;

CREATE TABLE `formapagto` (
  `id_fp` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_fp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `formapagto` */

insert  into `formapagto`(`id_fp`,`descritivo`) values (1,'a vista'),(2,'a prazo');

/*Table structure for table `fornecedores` */

DROP TABLE IF EXISTS `fornecedores`;

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(80) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `fornecedores` */

insert  into `fornecedores`(`id_fornecedor`,`razao_social`,`cidade`,`estado`,`contato`,`telefone`) values (1,'Vende tudo ltda','Campinas','SP','Luiz','19992345646'),(2,'Casa Tudo S/A','Rio de Janeiro','RJ','Paulo','21992341234'),(3,'Mercadao ltda','São Paulo','SP','Laiz','11992345646'),(4,'Aqui tem S/A','São Carlos','SP','Flavio','16992885646'),(5,'Vem que tem','Rio Claro','SP','Bruno','19991345646'),(6,'Kade ltda','Belo Horizonte','MG','Felipe','31992349876');

/*Table structure for table `fornecimentos` */

DROP TABLE IF EXISTS `fornecimentos`;

CREATE TABLE `fornecimentos` (
  `id_forn` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `dataulc` date NOT NULL,
  `quantc` int(11) NOT NULL,
  PRIMARY KEY (`id_forn`),
  KEY `id_produto` (`id_produto`),
  KEY `id_fornecedor` (`id_fornecedor`),
  CONSTRAINT `fornecimentos_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  CONSTRAINT `fornecimentos_ibfk_2` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedores` (`id_fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fornecimentos` */

/*Table structure for table `itens_nfc` */

DROP TABLE IF EXISTS `itens_nfc`;

CREATE TABLE `itens_nfc` (
  `id_infc` int(11) NOT NULL AUTO_INCREMENT,
  `id_nfc` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pcusto` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id_infc`),
  KEY `id_nfc` (`id_nfc`),
  KEY `id_produto` (`id_produto`),
  CONSTRAINT `itens_nfc_ibfk_1` FOREIGN KEY (`id_nfc`) REFERENCES `nf_compras` (`id_nfc`),
  CONSTRAINT `itens_nfc_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `itens_nfc` */

/*Table structure for table `itens_nfv` */

DROP TABLE IF EXISTS `itens_nfv`;

CREATE TABLE `itens_nfv` (
  `id_infv` int(11) NOT NULL AUTO_INCREMENT,
  `id_nfv` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pvenda` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id_infv`),
  KEY `id_nfv` (`id_nfv`),
  KEY `id_produto` (`id_produto`),
  CONSTRAINT `itens_nfv_ibfk_1` FOREIGN KEY (`id_nfv`) REFERENCES `nf_vendas` (`id_nfv`),
  CONSTRAINT `itens_nfv_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `itens_nfv` */

insert  into `itens_nfv`(`id_infv`,`id_nfv`,`id_produto`,`quantidade`,`pvenda`) values (1,1,1,1,'45.00'),(2,1,4,1,'45.00'),(3,1,3,1,'35.00'),(4,2,3,1,'75.00'),(5,2,4,1,'30.00'),(6,2,6,1,'40.00'),(15,6,10,1,'72.48'),(16,6,1,2,'51.25');

/*Table structure for table `nf_compras` */

DROP TABLE IF EXISTS `nf_compras`;

CREATE TABLE `nf_compras` (
  `id_nfc` int(11) NOT NULL,
  `emissao` date NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `id_fp` int(11) NOT NULL,
  PRIMARY KEY (`id_nfc`),
  KEY `id_fornecedor` (`id_fornecedor`),
  KEY `id_fp` (`id_fp`),
  CONSTRAINT `nf_compras_ibfk_1` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedores` (`id_fornecedor`),
  CONSTRAINT `nf_compras_ibfk_2` FOREIGN KEY (`id_fp`) REFERENCES `formapagto` (`id_fp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nf_compras` */

/*Table structure for table `nf_vendas` */

DROP TABLE IF EXISTS `nf_vendas`;

CREATE TABLE `nf_vendas` (
  `id_nfv` int(11) NOT NULL AUTO_INCREMENT,
  `emissao` date NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `id_fp` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_nfv`),
  KEY `id_fp` (`id_fp`),
  KEY `id_vendedor` (`id_vendedor`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `nf_vendas_ibfk_1` FOREIGN KEY (`id_fp`) REFERENCES `formapagto` (`id_fp`),
  CONSTRAINT `nf_vendas_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id_vendedor`),
  CONSTRAINT `nf_vendas_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `nf_vendas` */

insert  into `nf_vendas`(`id_nfv`,`emissao`,`valor`,`id_fp`,`id_vendedor`,`id_cliente`) values (1,'2023-01-02','125.00',1,1,1),(2,'2023-01-03','145.00',2,1,1),(6,'2024-03-10','100.00',1,1,1),(8,'2024-06-07','400.00',1,1,5),(9,'2024-06-11','800.00',1,1,3),(21,'2024-06-14','1900.00',1,1,2),(22,'2024-06-14','950.00',1,1,2),(23,'2024-06-14','920.00',1,1,4),(24,'2024-06-14','900.00',1,1,6);

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `descritivo` varchar(80) NOT NULL,
  `estoque` int(11) NOT NULL,
  `custo` decimal(6,2) NOT NULL,
  `venda` decimal(6,2) NOT NULL,
  `lucro` int(11) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `produtos` */

insert  into `produtos`(`id_produto`,`descritivo`,`estoque`,`custo`,`venda`,`lucro`,`id_categoria`) values (1,'Calça cigarrete feminina preto',80,'30.00','51.25',50,1),(2,'Calça cigarrete feminina branco',30,'30.00','53.37',50,1),(3,'Camisa Manga longa feminina Rose',45,'25.00','46.12',40,1),(4,'Blusa feminina Malha laranja',55,'50.00','97.85',50,1),(5,'Shorts Jeans feminino azul claro',70,'20.00','43.48',50,1),(6,'Regata feminina com alça larga viscose',35,'25.00','52.71',60,1),(7,'Blusão masculino com estampa azul',29,'40.00','79.06',50,1),(8,'Bermuda Moletom masculina azul',51,'35.00','76.11',50,1),(9,'Camiseta masculina Disney branca',121,'20.00','43.48',50,1),(10,'Polo plus size masculina básica bordô',101,'25.00','72.48',50,1),(11,'Kit colcha colteiro Microfibra Salmão',99,'30.00','45.00',50,2),(12,'Cobertor casal 1,80X2,20M Azul',50,'35.00','52.50',50,2),(13,'Cobertor casal microfibra 180X220cm Estampado',55,'35.00','52.50',50,2),(14,'Toalha De Banho 70X130cm Prisma - Cinza',75,'20.00','30.00',50,2),(15,'Toalha De Banho Flora - Rosa',40,'20.00','30.00',50,2),(16,'Cobertor Solteiro Microfibra Dobby 270G/M² - Jeans',120,'15.00','22.50',50,2),(17,'Cobertor Solteiro Kids Flannel Lilás',20,'15.00','22.50',50,2),(18,'Cobertor Solteiro Kids Flannel Estampado',25,'15.00','22.50',50,2),(19,'Aspirador de Pó Ciclone Force PAS06 1250W Philco',30,'80.00','120.00',50,3),(20,'Aspirador de Pó Vertical Wap 2 em 1 Portátil 1000W',45,'85.00','127.50',50,3),(21,'Aspirador de Pó Britânia BAS1430',20,'90.00','135.00',50,3),(22,'Micro-ondas Philco 28 Litros Sem Prato Giratório',40,'150.00','225.00',50,3),(23,'Forno Elétrico Philco 47L de Embutir PFE47E',18,'120.00','180.00',50,3),(24,'Forno Micro-ondas de Embutir 30L PME31B Philco',10,'130.00','195.00',50,3),(25,'Caixa De Som Bluetooth Xboom Go Pl5 Lg - Azul',28,'130.00','195.00',50,4),(26,'Webcam Kross Fullhd 1080P Usb Com Tripé Ajustável',30,'135.00','202.50',50,4),(27,'Tablet Multilaser M7 Wi-Fi 7 1G + 32Gb Quad-Core - Preto',23,'180.00','270.00',50,4),(28,'Teclado Gamer N-Keys Shooter Mecânico ELG - Preto',13,'80.00','120.00',50,4),(29,'Mousepad Gamer Flakes Power Speed ELG FLKMP001 - Preto',45,'110.00','165.00',50,4),(30,'Impressora Multifuncional HP Ink Tank 416 WiFi - Bivolt',65,'230.00','345.00',50,4),(31,'Notebook Philco Core I5 8G Ram 1Tb Tela De 15.6 W10 - Cinza',87,'1500.00','2250.00',50,4),(32,'Fone De Ouvido Headset Gamer Warrior Askari P3 Stereo Ps4',45,'180.00','270.00',50,4),(33,'Pote De Vidro Com Tampa  500Ml - Colors',60,'60.00','90.00',50,5),(34,'Abridor De Latas Casa 19Cm - Inox',70,'30.00','45.00',50,5),(35,'Afiador de Facas e Tesouras Finecasa - Preto',60,'40.00','60.00',50,5),(36,'Amassador De Alho 12Cm - Inox',30,'60.00','90.00',50,5),(37,'Aparelho De Jantar 20 Peças Porcelana',40,'160.00','240.00',50,5),(38,'Aparelho De Jantar Oxford 20 Peças',90,'160.00','240.00',50,5),(39,'Assadeira De Cupcake 41Cm - Preto & Vermelho',25,'260.00','390.00',50,5),(40,'Aromatizante Miniatura Central Sul - Sortido',35,'20.00','30.00',50,6),(41,'Cabo de Bateria 600A 3,5M + 1 Par de Luvas',35,'10.00','15.00',50,6),(42,'Capa Para Volante Sport Belmax 8750',35,'25.00','37.50',50,6),(43,'Chave de Roda 17mm/19mm Meghazine - Cromado',35,'20.00','30.00',50,6),(44,'Lubrificante E Desengripante Aerossol 300Ml Wd-40 - Azul',35,'20.00','30.00',50,6);

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `telefones` */

insert  into `telefones`(`id_telefone`,`numero`,`id_cliente`) values (1,'16991271861',1),(2,'1699271862',2),(3,'16993371863',3),(4,'14994471864',4),(5,'16994471864',4),(6,'16995571865',5),(7,'16995571865',5),(8,'16996671866',6),(9,'14996671866',6),(10,'16997771867',7),(11,'11997771867',7),(12,'16998871868',8),(13,'16999971869',9),(14,'16991118610',10);

/*Table structure for table `vendedores` */

DROP TABLE IF EXISTS `vendedores`;

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `comissao` int(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `salario_fixo` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id_vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `vendedores` */

insert  into `vendedores`(`id_vendedor`,`nome`,`sexo`,`comissao`,`telefone`,`salario_fixo`) values (1,'José','M',10,'16991271861','1800.00'),(2,'Carlos','M',10,'16992272862','1800.00'),(3,'Antonio','M',55,'16993273863','1800.00'),(4,'Maria','F',15,'16994274864','1800.00'),(5,'João','M',10,'16995275865','1800.00'),(6,'Pedro','M',20,'16995276866','1800.00'),(7,'Henrique','M',10,'16997277867','1800.00'),(8,'Roberta','F',15,'16992287868','1800.00'),(9,'Maria','F',10,'16992268765','1500.00'),(17,'Leo',NULL,50,'','0.00'),(18,'José',NULL,50,'','0.00'),(20,'José',NULL,50,'','0.00'),(21,'Paty',NULL,10,'','0.00');

/* Trigger structure for table `itens_nfv` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_buscar_valor_venda` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_buscar_valor_venda` BEFORE INSERT ON `itens_nfv` FOR EACH ROW begin
  if (new.id_produto in (select id_produto
                         from produtos)) then
   set new.pvenda = (select venda from produtos
        where id_produto=new.id_produto);
  end if;
end */$$


DELIMITER ;

/* Trigger structure for table `nf_vendas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_desc_idade_cliente` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_desc_idade_cliente` BEFORE INSERT ON `nf_vendas` FOR EACH ROW begin
  declare idade int;
  set idade = YEAR(new.emissao)-(SELECT YEAR(datanasc)
        FROM clientes WHERE id_cliente=new.id_cliente);
  if (idade<30) then
   set new.valor = new.valor*0.95;
  else
   if (idade BETWEEN 30 and 50) then
    SET new.valor = new.valor*0.92;
   else
    SET new.valor = new.valor*0.90;
   end if;
  end if;
end */$$


DELIMITER ;

/* Trigger structure for table `nf_vendas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tr_apaga_nfv` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tr_apaga_nfv` BEFORE DELETE ON `nf_vendas` FOR EACH ROW BEGIN
  #Ação 
  IF (old.id_nfv IN (SELECT DISTINCT(id_nfv) 
                     FROM itens_nfv)) THEN
   DELETE FROM itens_nfv WHERE id_nfv = old.id_nfv;
  END IF;    
END */$$


DELIMITER ;

/* Procedure structure for procedure `proc_apaga_funcionario` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_apaga_funcionario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_apaga_funcionario`(in codf int)
begin
  ## Corpo da Procedure
  if (codf in (select id_funcionario from funcionarios)) then # verifico cadastro
   if (codf not in (select id_funcionario from dependentes)) then # verifico se tem filhos
    if (codf not in (select id_funcionario from funcionarios_projetos)) then # verifico se participa de projetos
     if (codf not in (select id_funcionarios from telefones)) then # verifico se tem telefones
      delete from funcionarios where codf = id_funconario;
     else
      select "Funcionario possui telefones" as msg;
     end if;
    else
     select "Funcionario participa de projetos" as msg;
    end if;
   else
    select "Funcionario possui filhos" as msg;
   end if;
  else
   select "Funcionario não cadastrado" as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_apaga_produto` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_apaga_produto` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_apaga_produto`(in codp int)
begin
   ## corpo da procedure
   if (codp in (select id_produto from produtos)) then # produto cadastrado
     if (codp not in (select id_produto from itens_nfv)) then # verificar vinculos itens_nfv
       delete from produtos where codp=id_produto;
       select "produto deletado com sucesso" as msg;
     else
       select "Produto possui vendas associadas" as msg;
     end if;
   else
    select "Produto não está cadastrado" as msg;
   end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_apaga_produtos` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_apaga_produtos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_apaga_produtos`(in codp int)
begin
 # Corpo da procedure
 if (codp in (select id_produto from produtos)) then
   if (codp not in (select id_produto from itens_nfv)) then
    delete from produtos
    where codp = id_produto;
    select "Produto deletado com sucesso" as msg;
   else
    select "Produto possui vendas" as msg;
   end if;
 else
  select "Produto não cadastrado" as msg;
 end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_atualiza_categoria` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_atualiza_categoria` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_atualiza_categoria`(in codc int, perc int)
begin
 ## Corpo procedure
 if (codc in (select id_categoria from categorias)) then
   if (codc in (select id_categoria from produtos)) then
    update produtos set venda = venda + (venda*perc/100)
    where codc=id_categoria;
   else
    select "Categoria não possui produtos" as msg;   
   end if;
 else
  select "Categoria não cadastrada" as msg;
 end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_atualiza_produtos` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_atualiza_produtos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_atualiza_produtos`(in codc int, perc int)
begin
  ## corpo ##
  if (codc in (select id_categoria from categorias)) then
     if (codc in (select id_categoria from produtos)) then
       update produtos set venda = venda + (venda*perc/100)
       where codc = id_categoria;
     else
      select "Não existe produtos associados a categoria" as msg;
     end if;
  else
   select "Categoria não cadastrada" as msg;
  end if;  
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_cadastra_vendedor` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_cadastra_vendedor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_cadastra_vendedor`(in vnome varchar(100), vsexo char(1),
           vcomissao int, vtelefone varchar(11),
           vsalario_fixo DECIMAL(8,2))
begin
 insert into vendedores (nome,sexo,comissao,
               telefone,salario_fixo)
 values (vnome,vsexo,vcomissao,vtelefone,vsalario_fixo);      
 select "Registro inserido com sucesso !!" as msg;        
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_desconto_venda` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_desconto_venda` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_desconto_venda`(in val decimal(8,2),codfp int ,codv int,codc int)
begin
  if (codc IN (SELECT id_cliente FROM clientes)) then
   if (codfp in (select id_fp from formapagto)) then
     if (codv in (select id_vendedor from vendedores)) then
       INSERT INTO nf_vendas
         (emissao,valor,id_fp,id_vendedor,id_cliente)
       VALUES
         (CURRENT_DATE,val,codfp,codv,codc);  
     else
      select "Vendedor não cadastrado" as msg;
     end if;
   else
    select "Forma de pagto não cadastrada" as msg;
   end if;
  else
   select "Cliente não cadastrado" as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_inseri_vendedor` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_inseri_vendedor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_inseri_vendedor`(in vnome varchar(100), vsexo char(1), vcomissao int,
     vtelefone varchar(11), vsalario_fixo decimal(8,2))
begin
  insert into vendedores (nome,sexo,comissao,telefone,salario_fixo)
  values (vnome,vsexo,vcomissao,vtelefone,vsalario_fixo);
  select "registro inserido com sucesso !!" as msg;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_lista_clientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_lista_clientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_lista_clientes`(IN cod INT)
BEGIN
  # corpo da procedure
  IF (cod IS NULL) THEN
     #verdade
     SELECT * FROM clientes;
  ELSE
     # falso
   IF (cod IN (SELECT id_cliente FROM clientes)) THEN 
     SELECT * FROM clientes 
     WHERE cod=id_cliente;
    ELSE
     ## Mensagem para a aplicação  
     SELECT "Cliente não cadastrado !!" AS msg;
    END IF;  
  END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `proc_lista_vendas` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_lista_vendas` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_lista_vendas`(in codv int)
begin
  ## Corpo da procedure
  if (codv in (select id_vendedor from vendedores)) then
   select v.id_vendedor "Código", v.nome "Nome",
   concat("R$ ",format(ifnull(sum(nf.valor),0),2,"de_DE")) "TotalVendido"
   from vendedores v inner join nf_vendas nf
   on (v.id_vendedor=nf.id_vendedor)
   where codv=v.id_vendedor;
  else
   select concat("Vendedor ",codv," não cadastrado") as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_nroprod_cat` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_nroprod_cat` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_nroprod_cat`(in codc int,
           out nomec varchar(100), out nrop int )
begin
  ## corpo da procedure ##
  if (codc in (select id_categoria from categorias)) then
   if (codc in (select id_categoria from produtos)) then
    select c.descritivo, count(p.id_categoria)
           into nomec,nrop 
    from categorias c inner join produtos p 
    on (c.id_categoria=p.id_categoria)
    where codc = c.id_categoria;
   else
    select "Categoria não possui produtos" as msg;   
   end if; 
  else
   select "Categoria não cadastrada" as msg;
  end if;
  
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_tabela_preços` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_tabela_preços` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_tabela_preços`(in var int)
begin
  if (var=1) then
    select id_produto "código", descritivo,
    concat("R$ ",format(custo,2,"de_DE")) "Custo",
    CONCAT("R$ ",FORMAT(venda,2,"de_DE")) "Venda"
    from produtos;
  else
    if (var=2) then
     SELECT id_produto "código", descritivo,
     CONCAT("R$ ",FORMAT(venda,2,"de_DE")) "Venda"
    FROM produtos;
    else
     select "Parãmetro invalido !!" as msg;    
    end if;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_vendas_produtos` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_vendas_produtos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_vendas_produtos`(in codp int, datai date, dataf date)
begin
  # Corpo procedure
  if (codp in (select id_produto from produtos)) then # verificar se o produto esta cadastrado
   if (codp in (select id_produto from itens_nfv iv
                inner join nf_vendas nf on
                (iv.id_nfv=nf.id_nfv)
                where nf.emissao BETWEEN datai and dataf)) then # verificar se tem vendas
    select p.id_produto "Código", p.descritivo,
     sum(iv.quantidade*iv.pvenda) "TotalVendido" 
    from produtos p inner join itens_nfv iv
    on (p.id_produto=iv.id_produto) inner join
    nf_vendas nf on (iv.id_nfv=nf.id_nfv)
    where codp = p.id_produto and
          nf.emissao BETWEEN datai and dataf; 
   else
    select "Produto não tem vendas no periodo" as msg;
   end if;
  else
   select "Produto não cadastrado" as msg;
  end if;
end */$$
DELIMITER ;

/* Procedure structure for procedure `proc_vendas_vendedor` */

/*!50003 DROP PROCEDURE IF EXISTS  `proc_vendas_vendedor` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_vendas_vendedor`(in codv int)
begin
  ## Corpo da procedure
  if (codv in (select id_vendedor from vendedores)) then
    if (codv in (select id_vendedor from nf_vendas)) then
      select v.id_vendedor "Codigo", v.nome,
             sum(nf.valor) "TotalVendido"          
      from vendedores v inner join nf_vendas nf
      on (v.id_vendedor=nf.id_vendedor)
      where codv = nf.id_vendedor;
    else
       SELECT v.id_vendedor "Codigo", v.nome,
             0 "TotalVendido"          
      FROM vendedores v 
      WHERE codv =v.id_vendedor; 
    end if;
  else
   select "Vendedor não cadastrado !!" as msg;
  end if;
end */$$
DELIMITER ;

/*Table structure for table `teste` */

DROP TABLE IF EXISTS `teste`;

/*!50001 DROP VIEW IF EXISTS `teste` */;
/*!50001 DROP TABLE IF EXISTS `teste` */;

/*!50001 CREATE TABLE `teste` (
  `avg(venda)` decimal(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_lista_de_produtos` */

DROP TABLE IF EXISTS `vw_lista_de_produtos`;

/*!50001 DROP VIEW IF EXISTS `vw_lista_de_produtos` */;
/*!50001 DROP TABLE IF EXISTS `vw_lista_de_produtos` */;

/*!50001 CREATE TABLE `vw_lista_de_produtos` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `descritivo` varchar(80) NOT NULL,
  `Categoria` varchar(80) NOT NULL,
  `venda` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listagem_categoria` */

DROP TABLE IF EXISTS `vw_listagem_categoria`;

/*!50001 DROP VIEW IF EXISTS `vw_listagem_categoria` */;
/*!50001 DROP TABLE IF EXISTS `vw_listagem_categoria` */;

/*!50001 CREATE TABLE `vw_listagem_categoria` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `descritivo` varchar(80) NOT NULL,
  `TotalVendido` varchar(92) CHARACTER SET utf8 DEFAULT NULL,
  `NroVendas` bigint(21) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listagem_nf` */

DROP TABLE IF EXISTS `vw_listagem_nf`;

/*!50001 DROP VIEW IF EXISTS `vw_listagem_nf` */;
/*!50001 DROP TABLE IF EXISTS `vw_listagem_nf` */;

/*!50001 CREATE TABLE `vw_listagem_nf` (
  `NroFiscal` int(11) NOT NULL DEFAULT '0',
  `Emissão` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Valor` varchar(49) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Cliente` varchar(50) NOT NULL,
  `Vendedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_listagem_vendedores` */

DROP TABLE IF EXISTS `vw_listagem_vendedores`;

/*!50001 DROP VIEW IF EXISTS `vw_listagem_vendedores` */;
/*!50001 DROP TABLE IF EXISTS `vw_listagem_vendedores` */;

/*!50001 CREATE TABLE `vw_listagem_vendedores` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `Nome` varchar(50) NOT NULL DEFAULT '',
  `Total_Avista` decimal(30,2) DEFAULT NULL,
  `Total_Aprazo` decimal(30,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_tabela_precos` */

DROP TABLE IF EXISTS `vw_tabela_precos`;

/*!50001 DROP VIEW IF EXISTS `vw_tabela_precos` */;
/*!50001 DROP TABLE IF EXISTS `vw_tabela_precos` */;

/*!50001 CREATE TABLE `vw_tabela_precos` (
  `Codigo` int(11) NOT NULL DEFAULT '0',
  `descritivo` varchar(80) NOT NULL,
  `concat("R$ ",format(p.venda,2,"de_DE"))` varchar(46) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `custo` decimal(6,2) NOT NULL,
  `Categoria` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_teste` */

DROP TABLE IF EXISTS `vw_teste`;

/*!50001 DROP VIEW IF EXISTS `vw_teste` */;
/*!50001 DROP TABLE IF EXISTS `vw_teste` */;

/*!50001 CREATE TABLE `vw_teste` (
  `Código` int(11) NOT NULL DEFAULT '0',
  `Produto` varchar(80) NOT NULL,
  `Categotia` varchar(80) NOT NULL,
  `TotalVendido` decimal(32,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*View structure for view teste */

/*!50001 DROP TABLE IF EXISTS `teste` */;
/*!50001 DROP VIEW IF EXISTS `teste` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teste` AS select avg(`produtos`.`venda`) AS `avg(venda)` from `produtos` */;

/*View structure for view vw_lista_de_produtos */

/*!50001 DROP TABLE IF EXISTS `vw_lista_de_produtos` */;
/*!50001 DROP VIEW IF EXISTS `vw_lista_de_produtos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_lista_de_produtos` AS select `p`.`id_produto` AS `Codigo`,`p`.`descritivo` AS `descritivo`,`c`.`descritivo` AS `Categoria`,`p`.`venda` AS `venda` from (`produtos` `p` join `categorias` `c` on((`p`.`id_categoria` = `c`.`id_categoria`))) */;

/*View structure for view vw_listagem_categoria */

/*!50001 DROP TABLE IF EXISTS `vw_listagem_categoria` */;
/*!50001 DROP VIEW IF EXISTS `vw_listagem_categoria` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listagem_categoria` AS select `c`.`id_categoria` AS `Codigo`,`c`.`descritivo` AS `descritivo`,concat('R$ ',format(sum((`iv`.`quantidade` * `iv`.`pvenda`)),2,'de_DE')) AS `TotalVendido`,count(`p`.`id_categoria`) AS `NroVendas` from ((`produtos` `p` join `categorias` `c` on((`p`.`id_categoria` = `c`.`id_categoria`))) join `itens_nfv` `iv` on((`p`.`id_produto` = `iv`.`id_produto`))) group by `c`.`id_categoria` order by `c`.`descritivo` */;

/*View structure for view vw_listagem_nf */

/*!50001 DROP TABLE IF EXISTS `vw_listagem_nf` */;
/*!50001 DROP VIEW IF EXISTS `vw_listagem_nf` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listagem_nf` AS select `nf`.`id_nfv` AS `NroFiscal`,date_format(`nf`.`emissao`,'%d/%m/%Y') AS `Emissão`,concat('R$ ',format(`nf`.`valor`,2,'de_DE')) AS `Valor`,`c`.`nome` AS `Cliente`,`v`.`nome` AS `Vendedor` from ((`nf_vendas` `nf` join `clientes` `c` on((`nf`.`id_cliente` = `c`.`id_cliente`))) join `vendedores` `v` on((`nf`.`id_vendedor` = `v`.`id_vendedor`))) order by `nf`.`emissao` */;

/*View structure for view vw_listagem_vendedores */

/*!50001 DROP TABLE IF EXISTS `vw_listagem_vendedores` */;
/*!50001 DROP VIEW IF EXISTS `vw_listagem_vendedores` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_listagem_vendedores` AS select `v`.`id_vendedor` AS `Codigo`,`v`.`nome` AS `Nome`,sum(`nf`.`valor`) AS `Total_Avista`,0 AS `Total_Aprazo` from (`vendedores` `v` join `nf_vendas` `nf` on((`v`.`id_vendedor` = `nf`.`id_vendedor`))) where (`nf`.`id_fp` = 1) group by `v`.`id_vendedor` union select `v`.`id_vendedor` AS `Codigo`,`v`.`nome` AS `Nome`,0 AS `0`,sum(`nf`.`valor`) AS `SUM(nf.valor)` from (`vendedores` `v` join `nf_vendas` `nf` on((`v`.`id_vendedor` = `nf`.`id_vendedor`))) where (`nf`.`id_fp` = 2) group by `v`.`id_vendedor` */;

/*View structure for view vw_tabela_precos */

/*!50001 DROP TABLE IF EXISTS `vw_tabela_precos` */;
/*!50001 DROP VIEW IF EXISTS `vw_tabela_precos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_tabela_precos` AS select `p`.`id_produto` AS `Codigo`,`p`.`descritivo` AS `descritivo`,concat('R$ ',format(`p`.`venda`,2,'de_DE')) AS `concat("R$ ",format(p.venda,2,"de_DE"))`,`p`.`custo` AS `custo`,`c`.`descritivo` AS `Categoria` from (`produtos` `p` join `categorias` `c` on((`p`.`id_categoria` = `c`.`id_categoria`))) */;

/*View structure for view vw_teste */

/*!50001 DROP TABLE IF EXISTS `vw_teste` */;
/*!50001 DROP VIEW IF EXISTS `vw_teste` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_teste` AS select `p`.`id_produto` AS `Código`,`p`.`descritivo` AS `Produto`,`c`.`descritivo` AS `Categotia`,ifnull(sum(`iv`.`quantidade`),0) AS `TotalVendido` from ((`produtos` `p` left join `itens_nfv` `iv` on((`p`.`id_produto` = `iv`.`id_produto`))) join `categorias` `c` on((`p`.`id_categoria` = `c`.`id_categoria`))) group by `p`.`id_produto` order by sum(`iv`.`quantidade`) desc */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
