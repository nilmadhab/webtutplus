
CREATE TABLE IF NOT EXISTS `chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `chart` ( `product_name`, `quantity`) VALUES
( 'mobile phone', 1000),
('computers', 100),
( 'earphones', 50),
( 'key board', 90);


