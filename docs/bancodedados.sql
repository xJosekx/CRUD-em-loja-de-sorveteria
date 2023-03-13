CREATE TABLE acompanhamentos (
  id_acompanhamentos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Sabores_id_sabores INTEGER UNSIGNED NOT NULL,
  nome_acompanhamento VARCHAR(30) NULL,
  data_val_acompanhamentos DATE NULL,
  PRIMARY KEY(id_acompanhamentos),
  INDEX acompanhamentos_FKIndex2(Sabores_id_sabores)
);

CREATE TABLE cliente (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_cliente VARCHAR(255) NULL,
  email_cliente VARCHAR(255) NULL,
  fone_cliente VARCHAR(20) NULL,
  cpf_cliente INTEGER UNSIGNED NULL,
  dt_nasc_cliente DATE NULL,
  PRIMARY KEY(id_cliente)
);

CREATE TABLE compra (
  id_compra INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  data_compra DATE NULL,
  PRIMARY KEY(id_compra),
  INDEX compra_FKIndex1(cliente_id_cliente)
);

CREATE TABLE Sabores (
  id_sabores INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  compra_id_compra INTEGER UNSIGNED NOT NULL,
  nome_sabores VARCHAR(30) NULL,
  PRIMARY KEY(id_sabores),
  INDEX Sabores_FKIndex1(compra_id_compra)
);

CREATE TABLE sorveteria (
  id_sorveteria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_sorveteria VARCHAR(45) NULL,
  PRIMARY KEY(id_sorveteria)
);

CREATE TABLE vendedor (
  id_vendedor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  sorveteria_id_sorveteria INTEGER UNSIGNED NOT NULL,
  nome_vendedor VARCHAR(255) NULL,
  PRIMARY KEY(id_vendedor),
  INDEX vendedor_FKIndex1(sorveteria_id_sorveteria),
  INDEX vendedor_FKIndex2(cliente_id_cliente)
);


