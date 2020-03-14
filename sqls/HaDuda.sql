CREATE SCHEMA IF NOT EXISTS bosta;
CREATE TABLE IF NOT EXISTS bosta.usuario(

		id INT(50) NOT NULL AUTO_INCREMENT,
		senha VARCHAR(10) NOT NULL,
		renda VARCHAR(50) NOT NULL,
		login VARCHAR(50) NOT NULL,
		PRIMARY KEY(id)
);
CREATE TABLE IF NOT EXISTS bosta.conta(
		numero INT(50) NOT NULL,
		banco VARCHAR(40) NOT NULL,
		tipo VARCHAR(20) NOT NULL,
		saldo VARCHAR(50) NOT NULL,
		id_usuario INT NOT NULL,
		PRIMARY KEY (numero),
		FOREIGN KEY id_usuario REFERENCES usuario(id)
);