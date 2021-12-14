CREATE TABLE login_e_senha
(
    id int PRIMARY KEY auto_increment,
    email varchar(50) UNIQUE,
    hash_senha varchar(255)
 ) ENGINE=InnoDB;

