-- Post Table

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(124) NOT NULL,
  `post_body` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO post VALUES('1','comment here','with proper name');

-- Comment Table

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(8) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
