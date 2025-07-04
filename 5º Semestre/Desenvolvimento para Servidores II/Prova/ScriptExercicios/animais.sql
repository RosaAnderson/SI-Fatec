CREATE TABLE proprietario (
  idproprietario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(80) NULL,
  celular VARCHAR(20) NULL,
  PRIMARY KEY(idproprietario)
);

CREATE TABLE animais (
  idanimais INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idproprietario INTEGER UNSIGNED NOT NULL,
  raca VARCHAR(80) NULL,
  nome VARCHAR(80) NULL,
  idade INT NULL,
  cor VARCHAR(100) NULL,
  PRIMARY KEY(idanimais),
  INDEX animais_FKIndex1(idproprietario),
  FOREIGN KEY(idproprietario)
    REFERENCES proprietario(idproprietario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE vacinas (
  idvacinas INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idanimais INTEGER UNSIGNED NOT NULL,
  data_aplicacao DATE NULL,
  descritivo VARCHAR(100) NULL,
  PRIMARY KEY(idvacinas),
  INDEX vacinas_FKIndex1(idanimais),
  FOREIGN KEY(idanimais)
    REFERENCES animais(idanimais)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


