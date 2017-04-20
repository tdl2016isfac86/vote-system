CREATE TABLE `chatroom` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `chatroom` VALUES (1,'touteseule');

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `user` VALUES (1,'Ginette'),(2,'Jean-Diego'),(3,'Débarah');

CREATE TABLE `say` (
  `datetime` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `chatroom_id` int(10) unsigned DEFAULT NULL,
  `receiver_id` int(10) unsigned DEFAULT NULL,
  `message` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `say` VALUES ('2016-11-24 10:25:29',1,NULL,2,'coucou'),('2016-11-24 10:25:29',2,NULL,1,'cc cv'),('2016-11-24 10:25:29',1,NULL,2,'oui ça va bien merci mais tu parles français ou pas ?'),('2016-11-24 10:33:04',3,1,NULL,'coucou, y\'a quelqu\'un ?');

