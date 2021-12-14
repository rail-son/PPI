CREATE TABLE endereco
(
   id int PRIMARY KEY auto_increment,
   cep char(9) UNIQUE,
   rua varchar(100),
   bairro varchar(50),
   cidade varchar(50)
)
/*
INSERT INTO `endereco` (`cep`, `rua`, `bairro`, `cidade`) VALUES
('38400-100', 'Av João Naves', 'Santa Mônica', 'Uberlândia');

INSERT INTO `endereco` (`cep`, `rua`, `bairro`, `cidade`) VALUES
('38400-200', 'Av Floriano Peixoto', 'Centro', 'Uberlândia');

INSERT INTO `endereco` (`cep`, `rua`, `bairro`, `cidade`) VALUES
('38400-300', 'Av Afonso Pena', 'Martins', 'Uberlândia');

INSERT INTO `endereco` (`cep`, `rua`, `bairro`, `cidade`) VALUES
('38400-000', 'R. Cel. Severiano', 'Tabajaras', 'Uberlândia');

*/