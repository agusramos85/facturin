delimiter $$

CREATE DATABASE `facturin` /*!40100 DEFAULT CHARACTER SET latin1 */$$

delimiter $$

CREATE TABLE `cheques` (
  `idCheque` int(11) NOT NULL AUTO_INCREMENT,
  `importe` float DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  `dado_a` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  PRIMARY KEY (`idCheque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

delimiter $$

CREATE TABLE `facturas` (
  `idFactura` int(11) NOT NULL AUTO_INCREMENT,
  `fechaAlta` date DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  `cancela` varchar(45) DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`idFactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$


delimiter $$

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `idCheque` int(11) DEFAULT NULL,
  `concepto` varchar(45) DEFAULT NULL,
  `detalle` varchar(45) DEFAULT NULL,
  `importe` float DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$


delimiter $$

CREATE TABLE `pagos` (
  `idPago` int(11) NOT NULL AUTO_INCREMENT,
  `alta` date DEFAULT NULL,
  `concepto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

delimiter $$

CREATE TABLE `pagos_items` (
  `idPago` int(11) NOT NULL,
  `idItem` int(11) DEFAULT NULL,
  `idCheque` int(11) DEFAULT NULL,
  `concepto` varchar(45) DEFAULT NULL,
  `importe` float DEFAULT NULL,
  PRIMARY KEY (`idPago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1$$

