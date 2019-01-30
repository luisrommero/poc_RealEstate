create schema eos_poc_real_estate;
use eos_poc_real_estate;

create table list (
id_list INT PRIMARY KEY AUTO_INCREMENT,
name_list VARCHAR (10),
name_owner VARCHAR (25),
inv_min FLOAT,
percentage FLOAT);

create table project (
id_project INT PRIMARY KEY AUTO_INCREMENT,
id_list INT (11),
p_address VARCHAR (15),
p_type ENUM("res","com","ind"),
p_desc TEXT,
p_goal FLOAT,
FOREIGN KEY (id_list) REFERENCES list(id_list));

create table invests (
id_inv INT PRIMARY KEY AUTO_INCREMENT,
id_list INT (11),
name VARCHAR (25),
amount FLOAT,
FOREIGN KEY (id_list) REFERENCES list(id_list));
