<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('tissue');

$sql1 = mysql_query("CREATE TABLE `kinintype` (
  `id` int(3) NOT NULL auto_increment,
  `kinintype` varchar(15) NOT NULL,
  PRIMARY KEY  (`kinintype`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");

$sql1 = mysql_query("INSERT INTO `kinintype` (`id`, `kinintype`) VALUES 
(1, 'KINETIN'),
(2, 'BAP')");


$sql2 = mysql_query("CREATE TABLE `output` (
  `userid` int(3) NOT NULL,
  `auxin` varchar(10) NOT NULL,
  `auxinname` varchar(10) NOT NULL,
  `cytokinin` varchar(10) NOT NULL,
  `cytokininname` varchar(10) NOT NULL,
  `response` decimal(8,2) NOT NULL,
  `treatment` varchar(3) NOT NULL,
  `type` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1");




$sq09 = mysql_query("INSERT INTO `kinintype` (`id`, `kinintype`) VALUES 
(1, 'KINETIN'),
(2, 'BAP')");

$sql4 = mysql_query("CREATE TABLE `treatment` (
  `id` int(2) NOT NULL auto_increment,
  `treatment` varchar(10) NOT NULL,
  PRIMARY KEY  (`treatment`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3") ;

$sql5 = mysql_query("INSERT INTO `treatment` (`id`, `treatment`) VALUES 
(1, 'AE'),
(2, 'SH')");


$sql6 = mysql_query("CREATE TABLE `type` (
  `id` int(2) NOT NULL auto_increment,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`type`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5");

$sql7 = mysql_query("INSERT INTO `type` (`id`, `type`) VALUES 
(1, 'SHOOT'),
(2, 'LEAF'),
(3, 'BUD'),
(4, 'ROOT')");


$sql8 = mysql_query("CREATE TABLE `upload` (
  `userid` int(3) NOT NULL,
  `auxin` varchar(10) NOT NULL,
  `auxinname` varchar(10) NOT NULL,
  `cytokinin` varchar(10) NOT NULL,
  `cytokininname` varchar(10) NOT NULL,
  `response` varchar(10) NOT NULL,
  `treatment` varchar(3) NOT NULL,
  `type` varchar(7) NOT NULL,
  `fileid` int(3) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1");


$sql9 = mysql_query("INSERT INTO `upload` (`userid`, `auxin`, `auxinname`, `cytokinin`, `cytokininname`, `response`, `treatment`, `type`, `fileid`, `contact`) VALUES 
(1, '0', 'NAA', '0', 'BAP', '1.00', 'AE', 'BUD', 1, '08064356543'),
(1, '0', 'NAA', '2', 'BAP', '2.80', 'AE', 'BUD', 1, '08064356543'),
(1, '0', 'NAA', '4', 'BAP', '2.90', 'AE', 'BUD', 1, '08064356543'),
(1, '0', 'NAA', '6', 'BAP', '3.07', 'AE', 'BUD', 1, '08064356543'),
(1, '0', 'NAA', '8', 'BAP', '2.63', 'AE', 'BUD', 1, '08064356543'),
(1, '0.05', 'NAA', '0', 'BAP', '1.00', 'AE', 'BUD', 1, '08064356543'),
(1, '0.05', 'NAA', '2', 'BAP', '2.97', 'AE', 'BUD', 1, '08064356543'),
(1, '0.05', 'NAA', '4', 'BAP', '3.37', 'AE', 'BUD', 1, '08064356543'),
(1, '0.05', 'NAA', '6', 'BAP', '3.70', 'AE', 'BUD', 1, '08064356543'),
(1, '0.05', 'NAA', '8', 'BAP', '2.40', 'AE', 'BUD', 1, '08064356543'),
(1, '0.1', 'NAA', '0', 'BAP', '1.20', 'AE', 'BUD', 1, '08064356543'),
(1, '0.1', 'NAA', '2', 'BAP', '3.17', 'AE', 'BUD', 1, '08064356543'),
(1, '0.1', 'NAA', '4', 'BAP', '3.17', 'AE', 'BUD', 1, '08064356543'),
(1, '0.1', 'NAA', '6', 'BAP', '3.33', 'AE', 'BUD', 1, '08064356543'),
(1, '0.1', 'NAA', '8', 'BAP', '2.03', 'AE', 'BUD', 1, '08064356543'),
(1, '0.5', 'NAA', '0', 'BAP', '1.23', 'AE', 'BUD', 1, '08064356543'),
(1, '0.5', 'NAA', '2', 'BAP', '3.30', 'AE', 'BUD', 1, '08064356543'),
(1, '0.5', 'NAA', '4', 'BAP', '3.53', 'AE', 'BUD', 1, '08064356543'),
(1, '0.5', 'NAA', '6', 'BAP', '2.90', 'AE', 'BUD', 1, '08064356543'),
(1, '0.5', 'NAA', '8', 'BAP', '2.17', 'AE', 'BUD', 1, '08064356543'),
(1, '1', 'NAA', '0', 'BAP', '1.17', 'AE', 'BUD', 1, '08064356543'),
(1, '1', 'NAA', '2', 'BAP', '4.00', 'AE', 'BUD', 1, '08064356543'),
(1, '1', 'NAA', '4', 'BAP', '3.40', 'AE', 'BUD', 1, '08064356543'),
(1, '1', 'NAA', '6', 'BAP', '3.17', 'AE', 'BUD', 1, '08064356543'),
(1, '1', 'NAA', '8', 'BAP', '2.53', 'AE', 'BUD', 1, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '1.00', 'AE', 'BUD', 2, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '3.03', 'AE', 'BUD', 2, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '2.47', 'AE', 'BUD', 2, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '2.33', 'AE', 'BUD', 2, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '1.77', 'AE', 'BUD', 2, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '1.00', 'AE', 'BUD', 2, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '2.37', 'AE', 'BUD', 2, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '2.97', 'AE', 'BUD', 2, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '2.83', 'AE', 'BUD', 2, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '2.03', 'AE', 'BUD', 2, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '1.13', 'AE', 'BUD', 2, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '2.50', 'AE', 'BUD', 2, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '3.00', 'AE', 'BUD', 2, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '3.00', 'AE', 'BUD', 2, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '3.07', 'AE', 'BUD', 2, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '1.50', 'AE', 'BUD', 2, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '2.47', 'AE', 'BUD', 2, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '2.77', 'AE', 'BUD', 2, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '2.90', 'AE', 'BUD', 2, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '2.93', 'AE', 'BUD', 2, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '1.50', 'AE', 'BUD', 2, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '3.00', 'AE', 'BUD', 2, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '3.30', 'AE', 'BUD', 2, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '2.87', 'AE', 'BUD', 2, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '3.17', 'AE', 'BUD', 2, '08064356543'),
(1, '0', 'NAA', '0', 'BAP', '3.87', 'AE', 'LEAF', 3, '08064356543'),
(1, '0', 'NAA', '2', 'BAP', '5.80', 'AE', 'LEAF', 3, '08064356543'),
(1, '0', 'NAA', '4', 'BAP', '5.30', 'AE', 'LEAF', 3, '08064356543'),
(1, '0', 'NAA', '6', 'BAP', '5.67', 'AE', 'LEAF', 3, '08064356543'),
(1, '0', 'NAA', '8', 'BAP', '5.27', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.05', 'NAA', '0', 'BAP', '4.03', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.05', 'NAA', '2', 'BAP', '6.20', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.05', 'NAA', '4', 'BAP', '6.23', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.05', 'NAA', '6', 'BAP', '7.53', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.05', 'NAA', '8', 'BAP', '5.07', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.1', 'NAA', '0', 'BAP', '4.30', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.1', 'NAA', '2', 'BAP', '7.13', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.1', 'NAA', '4', 'BAP', '5.60', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.1', 'NAA', '6', 'BAP', '5.53', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.1', 'NAA', '8', 'BAP', '3.73', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.5', 'NAA', '0', 'BAP', '4.37', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.5', 'NAA', '2', 'BAP', '6.30', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.5', 'NAA', '4', 'BAP', '6.40', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.5', 'NAA', '6', 'BAP', '5.37', 'AE', 'LEAF', 3, '08064356543'),
(1, '0.5', 'NAA', '8', 'BAP', '3.17', 'AE', 'LEAF', 3, '08064356543'),
(1, '1', 'NAA', '0', 'BAP', '3.47', 'AE', 'LEAF', 3, '08064356543'),
(1, '1', 'NAA', '2', 'BAP', '7.23', 'AE', 'LEAF', 3, '08064356543'),
(1, '1', 'NAA', '4', 'BAP', '6.57', 'AE', 'LEAF', 3, '08064356543'),
(1, '1', 'NAA', '6', 'BAP', '5.20', 'AE', 'LEAF', 3, '08064356543'),
(1, '1', 'NAA', '8', 'BAP', '4.63', 'AE', 'LEAF', 3, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '3.70', 'AE', 'LEAF', 4, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '5.70', 'AE', 'LEAF', 4, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '5.37', 'AE', 'LEAF', 4, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '4.80', 'AE', 'LEAF', 4, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '4.03', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '4.33', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '4.03', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '5.83', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '5.37', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '3.93', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '4.27', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '4.73', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '5.53', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '5.57', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '5.53', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '4.27', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '4.07', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '4.20', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '4.30', 'AE', 'LEAF', 4, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '4.13', 'AE', 'LEAF', 4, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '3.33', 'AE', 'LEAF', 4, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '4.17', 'AE', 'LEAF', 4, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '4.17', 'AE', 'LEAF', 4, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '4.37', 'AE', 'LEAF', 4, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '4.37', 'AE', 'LEAF', 4, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '9.60', 'AE', 'ROOT', 5, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '12.60', 'AE', 'ROOT', 5, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '11.00', 'AE', 'ROOT', 5, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '8.60', 'AE', 'ROOT', 5, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '8.80', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '13.40', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '8.60', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '14.40', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '10.80', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '9.20', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '15.40', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '13.40', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '15.60', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '11.20', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '11.00', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '18.00', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '15.00', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '13.80', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '16.40', 'AE', 'ROOT', 5, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '15.80', 'AE', 'ROOT', 5, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '21.20', 'AE', 'ROOT', 5, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '15.00', 'AE', 'ROOT', 5, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '15.80', 'AE', 'ROOT', 5, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '17.20', 'AE', 'ROOT', 5, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '14.20', 'AE', 'ROOT', 5, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '3.08', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '5.06', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '4.50', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '3.70', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '4.40', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '5.40', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '5.22', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '5.84', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '5.28', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '4.60', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '7.64', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '7.86', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '6.54', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '4.40', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '5.78', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '7.36', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '7.42', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '5.28', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '5.76', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '5.58', 'AE', 'SHOOT', 6, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '7.48', 'AE', 'SHOOT', 6, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '5.80', 'AE', 'SHOOT', 6, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '6.04', 'AE', 'SHOOT', 6, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '7.00', 'AE', 'SHOOT', 6, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '5.04', 'AE', 'SHOOT', 6, '08064356543'),
(1, '0', 'NAA', '0', 'BAP', '2.77', 'SH', 'BUD', 7, '08064356543'),
(1, '0', 'NAA', '2', 'BAP', '2.77', 'SH', 'BUD', 7, '08064356543'),
(1, '0', 'NAA', '4', 'BAP', '3.17', 'SH', 'BUD', 7, '08064356543'),
(1, '0', 'NAA', '6', 'BAP', '3.07', 'SH', 'BUD', 7, '08064356543'),
(1, '0', 'NAA', '8', 'BAP', '3.40', 'SH', 'BUD', 7, '08064356543'),
(1, '0.05', 'NAA', '0', 'BAP', '3.70', 'SH', 'BUD', 7, '08064356543'),
(1, '0.05', 'NAA', '2', 'BAP', '3.00', 'SH', 'BUD', 7, '08064356543'),
(1, '0.05', 'NAA', '4', 'BAP', '3.00', 'SH', 'BUD', 7, '08064356543'),
(1, '0.05', 'NAA', '6', 'BAP', '3.10', 'SH', 'BUD', 7, '08064356543'),
(1, '0.05', 'NAA', '8', 'BAP', '3.47', 'SH', 'BUD', 7, '08064356543'),
(1, '0.1', 'NAA', '0', 'BAP', '3.73', 'SH', 'BUD', 7, '08064356543'),
(1, '0.1', 'NAA', '2', 'BAP', '2.80', 'SH', 'BUD', 7, '08064356543'),
(1, '0.1', 'NAA', '4', 'BAP', '2.90', 'SH', 'BUD', 7, '08064356543'),
(1, '0.1', 'NAA', '6', 'BAP', '3.13', 'SH', 'BUD', 7, '08064356543'),
(1, '0.1', 'NAA', '8', 'BAP', '3.50', 'SH', 'BUD', 7, '08064356543'),
(1, '0.5', 'NAA', '0', 'BAP', '3.87', 'SH', 'BUD', 7, '08064356543'),
(1, '0.5', 'NAA', '2', 'BAP', '3.20', 'SH', 'BUD', 7, '08064356543'),
(1, '0.5', 'NAA', '4', 'BAP', '3.17', 'SH', 'BUD', 7, '08064356543'),
(1, '0.5', 'NAA', '6', 'BAP', '3.17', 'SH', 'BUD', 7, '08064356543'),
(1, '0.5', 'NAA', '8', 'BAP', '3.17', 'SH', 'BUD', 7, '08064356543'),
(1, '1', 'NAA', '0', 'BAP', '3.40', 'SH', 'BUD', 7, '08064356543'),
(1, '1', 'NAA', '2', 'BAP', '3.17', 'SH', 'BUD', 7, '08064356543'),
(1, '1', 'NAA', '4', 'BAP', '3.20', 'SH', 'BUD', 7, '08064356543'),
(1, '1', 'NAA', '6', 'BAP', '3.23', 'SH', 'BUD', 7, '08064356543'),
(1, '1', 'NAA', '8', 'BAP', '2.77', 'SH', 'BUD', 7, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '2.53', 'SH', 'BUD', 8, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '4.57', 'SH', 'BUD', 8, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '3.90', 'SH', 'BUD', 8, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '4.07', 'SH', 'BUD', 8, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '4.37', 'SH', 'BUD', 8, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '2.90', 'SH', 'BUD', 8, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '4.67', 'SH', 'BUD', 8, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '3.83', 'SH', 'BUD', 8, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '3.73', 'SH', 'BUD', 8, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '3.97', 'SH', 'BUD', 8, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '3.10', 'SH', 'BUD', 8, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '4.23', 'SH', 'BUD', 8, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '3.60', 'SH', 'BUD', 8, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '3.40', 'SH', 'BUD', 8, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '3.77', 'SH', 'BUD', 8, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '2.33', 'SH', 'BUD', 8, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '4.47', 'SH', 'BUD', 8, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '3.70', 'SH', 'BUD', 8, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '4.07', 'SH', 'BUD', 8, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '3.53', 'SH', 'BUD', 8, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '2.00', 'SH', 'BUD', 8, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '4.23', 'SH', 'BUD', 8, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '3.73', 'SH', 'BUD', 8, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '3.57', 'SH', 'BUD', 8, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '3.43', 'SH', 'BUD', 8, '08064356543'),
(1, '0', 'NAA', '0', 'BAP', '2.43', 'SH', 'LEAF', 9, '08064356543'),
(1, '0', 'NAA', '2', 'BAP', '3.57', 'SH', 'LEAF', 9, '08064356543'),
(1, '0', 'NAA', '4', 'BAP', '3.30', 'SH', 'LEAF', 9, '08064356543'),
(1, '0', 'NAA', '6', 'BAP', '2.80', 'SH', 'LEAF', 9, '08064356543'),
(1, '0', 'NAA', '8', 'BAP', '3.07', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.05', 'NAA', '0', 'BAP', '2.97', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.05', 'NAA', '2', 'BAP', '2.90', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.05', 'NAA', '4', 'BAP', '3.07', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.05', 'NAA', '6', 'BAP', '2.90', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.05', 'NAA', '8', 'BAP', '3.10', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.1', 'NAA', '0', 'BAP', '3.60', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.1', 'NAA', '2', 'BAP', '2.60', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.1', 'NAA', '4', 'BAP', '2.93', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.1', 'NAA', '6', 'BAP', '2.60', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.1', 'NAA', '8', 'BAP', '3.10', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.5', 'NAA', '0', 'BAP', '3.13', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.5', 'NAA', '2', 'BAP', '2.60', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.5', 'NAA', '4', 'BAP', '3.00', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.5', 'NAA', '6', 'BAP', '2.87', 'SH', 'LEAF', 9, '08064356543'),
(1, '0.5', 'NAA', '8', 'BAP', '2.93', 'SH', 'LEAF', 9, '08064356543'),
(1, '1', 'NAA', '0', 'BAP', '2.97', 'SH', 'LEAF', 9, '08064356543'),
(1, '1', 'NAA', '2', 'BAP', '2.97', 'SH', 'LEAF', 9, '08064356543'),
(1, '1', 'NAA', '4', 'BAP', '2.83', 'SH', 'LEAF', 9, '08064356543'),
(1, '1', 'NAA', '6', 'BAP', '3.33', 'SH', 'LEAF', 9, '08064356543'),
(1, '1', 'NAA', '8', 'BAP', '3.20', 'SH', 'LEAF', 9, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '5.47', 'SH', 'LEAF', 10, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '4.97', 'SH', 'LEAF', 10, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '5.70', 'SH', 'LEAF', 10, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '6.03', 'SH', 'LEAF', 10, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '4.50', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '4.63', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '4.00', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '4.33', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '4.60', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '5.00', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '3.93', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '4.33', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '5.93', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '5.83', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '5.37', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '4.03', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '3.70', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '6.50', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '4.30', 'SH', 'LEAF', 10, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '4.73', 'SH', 'LEAF', 10, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '3.87', 'SH', 'LEAF', 10, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '4.23', 'SH', 'LEAF', 10, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '5.57', 'SH', 'LEAF', 10, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '6.03', 'SH', 'LEAF', 10, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '6.23', 'SH', 'LEAF', 10, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '15.80', 'SH', 'ROOT', 11, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '16.00', 'SH', 'ROOT', 11, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '16.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '17.40', 'SH', 'ROOT', 11, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '16.00', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '20.40', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '14.60', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '19.00', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '15.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '13.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '19.60', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '18.60', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '14.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '15.80', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '13.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '15.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '15.60', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '13.40', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '14.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '14.20', 'SH', 'ROOT', 11, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '20.40', 'SH', 'ROOT', 11, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '14.80', 'SH', 'ROOT', 11, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '13.80', 'SH', 'ROOT', 11, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '13.40', 'SH', 'ROOT', 11, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '17.00', 'SH', 'ROOT', 11, '08064356543'),
(1, '0', 'NAA', '0', 'KINETIN', '13.34', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0', 'NAA', '2', 'KINETIN', '10.94', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0', 'NAA', '4', 'KINETIN', '12.12', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0', 'NAA', '6', 'KINETIN', '13.88', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0', 'NAA', '8', 'KINETIN', '11.48', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.05', 'NAA', '0', 'KINETIN', '10.66', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.05', 'NAA', '2', 'KINETIN', '9.92', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.05', 'NAA', '4', 'KINETIN', '9.42', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.05', 'NAA', '6', 'KINETIN', '8.24', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.05', 'NAA', '8', 'KINETIN', '7.74', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.1', 'NAA', '0', 'KINETIN', '11.04', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.1', 'NAA', '2', 'KINETIN', '12.64', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.1', 'NAA', '4', 'KINETIN', '7.80', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.1', 'NAA', '6', 'KINETIN', '8.60', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.1', 'NAA', '8', 'KINETIN', '8.44', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.5', 'NAA', '0', 'KINETIN', '9.56', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.5', 'NAA', '2', 'KINETIN', '9.72', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.5', 'NAA', '4', 'KINETIN', '6.84', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.5', 'NAA', '6', 'KINETIN', '9.06', 'SH', 'SHOOT', 12, '08064356543'),
(1, '0.5', 'NAA', '8', 'KINETIN', '7.42', 'SH', 'SHOOT', 12, '08064356543'),
(1, '1', 'NAA', '0', 'KINETIN', '13.56', 'SH', 'SHOOT', 12, '08064356543'),
(1, '1', 'NAA', '2', 'KINETIN', '9.64', 'SH', 'SHOOT', 12, '08064356543'),
(1, '1', 'NAA', '4', 'KINETIN', '9.68', 'SH', 'SHOOT', 12, '08064356543'),
(1, '1', 'NAA', '6', 'KINETIN', '10.80', 'SH', 'SHOOT', 12, '08064356543'),
(1, '1', 'NAA', '8', 'KINETIN', '9.66', 'SH', 'SHOOT', 12, '08064356543')");

$sql11 = mysql_query("CREATE TABLE `user` (
  `userid` varchar(4) NOT NULL,
  `names` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

$sq03 = mysql_query("INSERT INTO `user` (`userid`, `names`, `username`, `password`, `contact`) VALUES 
('1', 'Ikeokwu John Nwanne', 'ike', '1234', '08023456643')");

?>
