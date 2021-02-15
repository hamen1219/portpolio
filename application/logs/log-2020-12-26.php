<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-26 03:31:00 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`baby`, CONSTRAINT `baby_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `baby` (`name`, `class`, `old`, `parent`) VALUES ('낄끼루삥뽕', '2', '4', 0)
ERROR - 2020-12-26 03:31:22 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`baby`, CONSTRAINT `baby_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `baby` (`name`, `class`, `old`, `parent`) VALUES ('ㄹㄹ', '1', '3', 0)
