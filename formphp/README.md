# form input to a mariadb database using php
 <pre>
This is a php mysql (mariaBD) application 
 Cody by C Coleman(Tri-Tech)
- create table code:
- use database stream;
- grant all privileges on stream.* TO 'user'@'localhost' IDENTIFIED BY 'passwords'; 
CREATE TABLE IF NOT EXISTS `formdata` (
  `id` int(32) NOT NULL auto_increment,
  `ip` varchar(64) NOT NULL,
  `timein` varchar(32) NOT NULL,
  `datein` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

</pre>
