CREATE DATABASE `tech_solutions`;
USE `tech_solutions`;

CREATE TABLE `cargos_usuarios` (
  `id_cargos` int NOT NULL AUTO_INCREMENT,
  `cargos` varchar(45) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'0',
  `data_desativacao` date NOT NULL,
  PRIMARY KEY (`id_cargos`,`cargos`)
);

INSERT INTO `cargos_usuarios` VALUES 
(1,'Administrador',_binary '\0','0000-00-00'),
(2,'Suporte',_binary '\0','0000-00-00'),
(3,'Técnico',_binary '\0','0000-00-00'),
(4,'Vendedor',_binary '\0','0000-00-00'),
(5,'Cliente',_binary '\0','0000-00-00');

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `data_desativacao` date NOT NULL,
  `status_conta` int NOT NULL DEFAULT '0',
  `recuperar_conta` varchar(255) NOT NULL,
  `id_cargos` int NOT NULL,
  `id_empresa` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cargos_idx` (`id_cargos`),
  KEY `id_empresa_idx` (`id_empresa`),
  CONSTRAINT `id_cargos` FOREIGN KEY (`id_cargos`) REFERENCES `cargos_usuarios` (`id_cargos`)
);

CREATE TABLE `empresas` (
  `id` int NOT NULL,
  `nome` text NOT NULL,
  `cnpj` int NOT NULL,
  `id_usuarios` int NOT NULL,
  `id_empresa` int DEFAULT NULL,
  PRIMARY KEY (`id`,`cnpj`),
  KEY `id_usuarios_idx` (`id_usuarios`),
  KEY `id_empresa_idx` (`id_empresa`),
  CONSTRAINT `id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`)
);

ALTER TABLE `empresas` ADD FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`);

CREATE TABLE `projetos` (
  `id` int NOT NULL,
  `nome` text,
  `id_desenvolvedor` int NOT NULL,
  `data_inscricao` date NOT NULL,
  `ativo` bit(1) DEFAULT b'0',
  `data_desativacao` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `desenvolvedor_idx` (`id_desenvolvedor`),
  CONSTRAINT `id_desenvolvedor` FOREIGN KEY (`id_desenvolvedor`) REFERENCES `usuarios` (`id`)
);


