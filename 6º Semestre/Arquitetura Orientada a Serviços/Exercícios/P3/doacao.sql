CREATE TABLE tipo (
  idtipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(80) NULL,
  PRIMARY KEY(idtipo)
);

CREATE TABLE doador (
  iddoador INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  celular VARCHAR(30) NULL,
  PRIMARY KEY(iddoador)
);

CREATE TABLE doacao (
  iddoacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  iddoador INTEGER UNSIGNED NOT NULL,
  idtipo INTEGER UNSIGNED NOT NULL,
  data_dacao DATE NULL,
  descricao TEXT NULL,
  PRIMARY KEY(iddoacao),
  INDEX doacao_FKIndex1(idtipo),
  INDEX doacao_FKIndex2(iddoador),
  FOREIGN KEY(idtipo)
    REFERENCES tipo(idtipo)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(iddoador)
    REFERENCES doador(iddoador)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


