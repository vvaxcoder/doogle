CREATE TABLE doogle.sites (
	id INT auto_increment NOT NULL,
	url varchar(512) NULL,
	title varchar(512) NULL,
	description VARCHAR(512) NULL,
	keywords varchar(512) NULL,
	clicks INT NULL,
	PRIMARY KEY(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;