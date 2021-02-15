<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-18 22:50:01 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-18 22:50:14 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-18 22:50:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-18 23:28:08 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: UPDATE `reply` SET `contents` = '작성자가 삭제한 댓글입니다'
WHERE `reply_num` = '90'
AND `user` = 'hamen1219'
ERROR - 2020-10-18 23:29:41 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: UPDATE `reply` SET `contents` = '작성자가 삭제한 댓글입니다'
WHERE `reply_num` = '90'
ERROR - 2020-10-18 23:30:42 --> Query error: Unknown column 'reply_num' in 'where clause' - Invalid query: UPDATE `reply` SET `contents` = '작성자가 삭제한 댓글입니다'
WHERE `reply_num` = '90'
AND `user` = 'hamen1219'
ERROR - 2020-10-18 23:31:34 --> Severity: Notice --> Undefined index: board_num C:\Apache24\htdocs\application\models\Reply_m.php 64
ERROR - 2020-10-18 23:44:08 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '그게 가능해여????', '60', '7', 'null')
ERROR - 2020-10-18 23:46:01 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '키야.....', '60', '3', 'null')
ERROR - 2020-10-18 23:46:04 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', '키야.....', '60', '3', 'null')
ERROR - 2020-10-18 23:46:07 --> Query error: Duplicate entry 'hamen1219-7' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('7', 'hamen1219', 1)
ERROR - 2020-10-18 23:46:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', 'ㅇㅇㅇ', '60', '3', 'null')
ERROR - 2020-10-18 23:46:46 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test`.`reply`, CONSTRAINT `reply_ibfk_3` FOREIGN KEY (`parent_num`) REFERENCES `reply` (`num`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `reply` (`user`, `contents`, `board_num`, `reply_group`, `parent_num`) VALUES ('hamen1219', 'ㅏㅏㅏ', '60', '3', 'null')
ERROR - 2020-10-18 23:52:14 --> Query error: Duplicate entry 'hamen1219-7' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `poor`) VALUES ('7', 'hamen1219', 1)
ERROR - 2020-10-18 23:56:39 --> Query error: Duplicate entry 'hamen1219-93' for key 'PRIMARY' - Invalid query: INSERT INTO `like_r` (`reply_num`, `user`, `good`) VALUES ('93', 'hamen1219', 1)
