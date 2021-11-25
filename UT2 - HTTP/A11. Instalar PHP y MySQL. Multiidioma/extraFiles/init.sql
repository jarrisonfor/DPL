DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` varchar(255) CHARACTER SET ascii NOT NULL,
    `password` varchar(255) CHARACTER SET ascii NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = latin1;

INSERT INTO `usuarios` (`id`, `username`, `password`)
VALUES (1, 'yeray', 'csas1234'),
    (2, 'juan', 'csas1234'),
    (3, 'pedro', 'csas1234'),
    (4, 'jose', 'csas1234'),
    (5, 'maria', 'csas1234');
