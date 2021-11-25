DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` varchar(255) CHARACTER SET ascii NOT NULL,
    `password` varchar(255) CHARACTER SET ascii NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = latin1;

INSERT INTO `users` (`id`, `username`, `password`)
VALUES (1, 'yeray', '{SHA}bRcVwdBg04S2e8HcBDZklKJHmKY=');
