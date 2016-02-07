create database guestbook1;

create table entries
(
	id int NOT NULL  AUTO_INCREMENT,
	name  varchar(255),
	email  varchar(255),
	date   date,
	message   text,
    PRIMARY KEY(id)
);