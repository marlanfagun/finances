CREATE TABLE
  `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) DEFAULT NULL,
    `user` varchar(50) DEFAULT NULL,
    `password` varchar(50) DEFAULT NULL,
    `level` varchar(15) DEFAULT NULL,
    `active` varchar(1) DEFAULT NULL,
    PRIMARY KEY (`id`)
  )

INSERT INTO `users` (`id`, `name`, `user`, `password`, `level`, `active`) VALUES ('1', 'Administrador', 'admin', 'admin', 'Administrador', 'Y');