CREATE TABLE plantacao (
  idplantacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descritivo VARCHAR(80) NULL,
  PRIMARY KEY(idplantacao)
);

CREATE TABLE area (
  idarea INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  medida FLOAT NULL,
  unidade VARCHAR(50) NULL,
  latitude VARCHAR(15) NULL,
  longitude VARCHAR(15) NULL,
  PRIMARY KEY(idarea)
);

CREATE TABLE colheita (
  idcolheita INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idarea INTEGER UNSIGNED NOT NULL,
  idplantacao INTEGER UNSIGNED NOT NULL,
  data_colheita DATE NULL,
  quantidade FLOAT NULL,
  unidade VARCHAR(50) NULL,
  PRIMARY KEY(idcolheita),
  INDEX colheita_FKIndex1(idplantacao),
  INDEX colheita_FKIndex2(idarea),
  FOREIGN KEY(idplantacao)
    REFERENCES plantacao(idplantacao)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(idarea)
    REFERENCES area(idarea)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


