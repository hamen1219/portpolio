<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-19 00:28:53 --> Severity: error --> Exception: syntax error, unexpected '&&' (T_BOOLEAN_AND) C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 518
ERROR - 2020-10-19 00:58:03 --> Query error: Duplicate entry 'hamen1219-5' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('5', 'hamen1219', 1)
ERROR - 2020-10-19 01:00:12 --> Query error: Duplicate entry 'hamen1219-91' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('91', 'hamen1219', 1)
ERROR - 2020-10-19 01:52:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '되니....?', '60', '8', 'null')
ERROR - 2020-10-19 01:58:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '되니>??', '60', '8', 'null')
ERROR - 2020-10-19 01:58:40 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '되니>??', '60', '8', 'null')
ERROR - 2020-10-19 02:00:48 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 02:09:28 --> Query error: Duplicate entry 'hamen1219-99' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('99', 'hamen1219', 1)
ERROR - 2020-10-19 02:09:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:08:40 --> Severity: Notice --> Undefined index: reply_num C:\Apache24\htdocs\application\controllers\Ajax.php 126
ERROR - 2020-10-19 03:08:40 --> Query error: Column 'reply_num' cannot be null - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES (NULL, 'hamen1219', 1)
ERROR - 2020-10-19 03:18:14 --> Severity: Notice --> Undefined index: reply_num C:\Apache24\htdocs\application\controllers\Ajax.php 126
ERROR - 2020-10-19 03:18:14 --> Query error: Column 'reply_num' cannot be null - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES (NULL, 'hamen1219', 1)
ERROR - 2020-10-19 03:23:49 --> Query error: Duplicate entry 'hamen1219-7' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('7', 'hamen1219', 1)
ERROR - 2020-10-19 03:23:52 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:23:57 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:24:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:24:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:24:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:26 --> Query error: Duplicate entry 'hamen1219-5' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('5', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:28 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:28 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:30 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:30 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:26:34 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:28:11 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:28:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:28:12 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:28:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:29:48 --> Query error: Duplicate entry 'hamen1219-5' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('5', 'hamen1219', 1)
ERROR - 2020-10-19 03:31:15 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:31:17 --> Severity: Notice --> Undefined index: reply_num C:\Apache24\htdocs\application\controllers\Ajax.php 127
ERROR - 2020-10-19 03:31:17 --> Query error: Column 'reply_num' cannot be null - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES (NULL, 'hamen1219', 1)
ERROR - 2020-10-19 03:33:02 --> Severity: Notice --> Undefined index: reply_num C:\Apache24\htdocs\application\controllers\Ajax.php 127
ERROR - 2020-10-19 03:33:02 --> Query error: Column 'reply_num' cannot be null - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES (NULL, 'hamen1219', 1)
ERROR - 2020-10-19 03:33:16 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('1', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:17 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('1', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:36 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:33:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`like_r`, CONSTRAINT `like_r_ibfk_2` FOREIGN KEY (`reply_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('undefined', 'hamen1219', 1)
ERROR - 2020-10-19 03:34:08 --> Query error: Duplicate entry 'hamen1219-97' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('97', 'hamen1219', 1)
ERROR - 2020-10-19 03:34:25 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`board_num`, `user`, `poor`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:34:27 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`board_num`, `user`, `poor`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:34:27 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`board_num`, `user`, `save`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:34:28 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`board_num`, `user`, `save`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:35:13 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`board_num`, `user`, `good`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:35:14 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `save_b` (`board_num`, `user`, `save`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:35:15 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`board_num`, `user`, `poor`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 03:35:15 --> Query error: Duplicate entry 'hamen1219-60' for key 'PRIMARY' - Invalid query: INSERT INTO `like_b` (`board_num`, `user`, `good`) VALUES ('60', 'hamen1219', 1)
ERROR - 2020-10-19 13:05:10 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF) C:\Apache24\htdocs\application\models\Board_m.php 84
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-19 13:05:51 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-19 13:05:56 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-19 13:06:09 --> Severity: Warning --> A non-numeric value encountered C:\Apache24\htdocs\application\models\Board_m.php 88
ERROR - 2020-10-19 13:06:09 --> Severity: Warning --> A non-numeric value encountered C:\Apache24\htdocs\application\models\Board_m.php 88
ERROR - 2020-10-19 13:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM 0
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WH' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM 0
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 116
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:06:09 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:07:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM board b (select user from board where user = 'hame' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM board b (select user from board where user = 'hamen1219') my
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 116
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:07:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user =' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user = 'hamen1219') my)
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 116
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:08:12 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM (`reply`, `board`)
LEFT JOIN `user` `u` ON `u`.`id' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM (`reply`, `board`)
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:10:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:37:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user =' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user = 'hamen1219') my)
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:37:29 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user =' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user = 'hamen1219') my)
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:37:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:38:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user =' at line 1 - Invalid query: SELECT `u`.*, `b`.*, `u`.`img` `user_img`, `u`.`created` `user_created`, (select count(*) from reply where board_num = b.num) reply_cnt, (select ifnull(sum(good), 0) from like_b where user = u.id and board_num = b.num) good, (select ifnull(sum(poor), 0) from like_b where user = u.id and board_num = b.num) poor, (select ifnull(sum(save), 0) from save_b where user = u.id and board_num = b.num) save ifnull(my.user, '') user
FROM (`board` `b`, (select user from board where user = 'hamen1219') my)
LEFT JOIN `user` `u` ON `u`.`id` = `b`.`user`
WHERE `b`.`num` = '60'
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:38:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 13:45:32 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Undefined index: rs C:\Apache24\htdocs\application\models\Board_m.php 120
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 364
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 366
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 367
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 368
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 377
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 380
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 381
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 382
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 391
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 399
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 407
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 414
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 456
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 599
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 656
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 670
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 695
ERROR - 2020-10-19 15:08:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\board\crud\read.php 708
