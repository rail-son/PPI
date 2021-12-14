CREATE TABLE medicos
(
     id int PRIMARY KEY auto_increment,
     nome_medico varchar(100),
     telefone_medico varchar(12) UNIQUE,
     especialidade_medico varchar(15) 
 ) ENGINE=InnoDB;

INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dr. Adailton Carvalho de Resende','(81)98216-2551','cardiologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dr. Isaac Benedito Pereira','(81)2662-0607','cardiologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dr. Manoel Lucca Silveira','(95)3758-7284','cardiologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dra. Isabela Olivia de Paula','(31)2863-2485','dermatologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dra. Hadassa Raimunda Débora Monteiro','(82)99382-0502','dermatologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dr. Anderson Danilo Mendes','(54)3817-6839','dermatologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dra. Julia Rosângela Rezende','(92)98727-5850','oftalmologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dra. Carla Bárbara Aragão','(51)2683-7032','oftalmologista');
INSERT INTO `medicos`(`nome_medico`, `telefone_medico`, `especialidade_medico`) VALUES ('Dr. Nicolas Kauê Sales','(66)3900-1617','oftalmologista');