-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.38-MariaDB-0ubuntu0.20.04.1 - Ubuntu 20.04
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_iuri
CREATE DATABASE IF NOT EXISTS `db_iuri` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_iuri`;

-- Copiando estrutura para tabela db_iuri.tb_usuarios
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `usu_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(255) NOT NULL,
  `usu_email` varchar(255) NOT NULL,
  `usu_senha` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_iuri.tb_usuarios: ~3 rows (aproximadamente)
INSERT INTO `tb_usuarios` (`usu_id`, `usu_nome`, `usu_email`, `usu_senha`) VALUES
	(1, 'nome', 'email', 'senha'),
	(2, 'teste', 'teste@teste', '$argon2i$v=19$m=65536,t=4,p=1$WS82ZXA5WFJMUERBSXkuOQ$lU4UIQNdXOA1tMqWKqXyAIS0GPycXdm82sG7UljOG5Q'),
	(3, 'aaa', 'bb@bb', '$argon2i$v=19$m=65536,t=4,p=1$YUJEU3ZWaHJsSVhBaXJsag$c0H9ZXbWn4qoTAC7v4Vtg9Kv3DzMEJBF9UI6z1xSx/Q');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
