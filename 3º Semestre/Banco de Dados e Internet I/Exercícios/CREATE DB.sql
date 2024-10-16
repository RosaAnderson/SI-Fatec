/**
  create database ARClinic;
/**/

/**
create table ESPECIALIZACOES
	(
		ESP_ID         INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
		ESP_DESCRICAO  VARCHAR(40) NOT NULL
	);
/**/

/**
create table MEDICO
	(
		MED_ID         INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
		MED_CRM        INT          NOT NULL                UNIQUE,
		MED_NOME       VARCHAR(100) NOT NULL,
		MED_ESP        INT          NOT NULL,
		FOREIGN KEY (MED_ESP) REFERENCES ESPECIALIZACOES (ESP_ID)
	);
/**/

/**
CREATE TABLE TELEFONES
	(
		TEL_ID        INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
		TEL_MED       INT         NOT NULL                UNIQUE,
		TEL_DDD       CHAR(2)     NOT NULL,
		TEL_NUMERO    VARCHAR(14) NOT NULL,
		FOREIGN KEY (TEL_MED) REFERENCES MEDICOS (MED_ID)
	);
/**/

/**
CREATE TABLE EXAMES
	(
		EXA_ID        INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
		EXA_DESCRICAO VARCHAR(40)  NOT NULL,
		EXA_VALOR     DECIMAL(6,2) NOT NULL
	);
/**/

/**
CREATE TABLE PACIENTES
	(
		PAC_ID         INT           NOT NULL AUTO_INCREMENT PRIMARY KEY,
		PAC_NOME       VARCHAR(100)  NOT NULL,
		PAC_NASCIMENTO DATE          NOT NULL,
		PAC_SEXO       ENUM("F","M") NOT NULL,
		PAC_CPF        VARCHAR(11)   NOT NULL UNIQUE,
		PAC_LOGRADOURO VARCHAR(100)  NOT NULL,
		PAC_BAIRRO     VARCHAR(100)  NOT NULL,
		PAC_CEP        VARCHAR(10)   NOT NULL,
		PAC_CIDADE     VARCHAR(100)  NOT NULL
	);
/**/

/**
CREATE TABLE REL_MEDPAC
	(
		RMP_ID        INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
		RMP_MED       INT         NOT NULL,
		RMP_PAC       INT         NOT NULL,
		RMP_DATA      DATE        NOT NULL,
		RMP_HORA      TIME        NOT NULL,
		FOREIGN KEY (RMP_MED) REFERENCES MEDICOS   (MED_ID),
		FOREIGN KEY (RMP_PAC) REFERENCES PACIENTES (PAC_ID)
	);
/**/

/**
CREATE TABLE REL_PACEXA
	(
		RPE_ID        INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
		RPE_PAC       INT         NOT NULL,
		RPE_EXA       INT         NOT NULL,
		RPE_DATA      DATE        NOT NULL,
		RPE_HORA      TIME        NOT NULL,
		FOREIGN KEY (RPE_PAC) REFERENCES PACIENTES (PAC_ID),
		FOREIGN KEY (RPE_EXA) REFERENCES EXAMES    (EXA_ID)
	);
/**/
