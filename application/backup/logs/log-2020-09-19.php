<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-19 03:53:47 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::join(), 1 passed in C:\Apache24\htdocs\application\views\homepage\board\admin\read.php on line 236 and at least 2 expected C:\Apache24\htdocs\system\database\DB_query_builder.php 526
ERROR - 2020-09-19 03:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '60 DESC' at line 3 - Invalid query: SELECT *
FROM `reply`
ORDER BY `reply`.`board_num =` 60 DESC
ERROR - 2020-09-19 04:04:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:06:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*, sum(like_r.good)
ORDER BY `created` DESC' at line 2 - Invalid query: SELECT *
FROM `reply` *, sum(like_r.good)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:11:01 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Apache24\htdocs\system\database\DB_query_builder.php 1232
ERROR - 2020-09-19 04:11:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1232
ERROR - 2020-09-19 04:11:01 --> Severity: Warning --> explode() expects parameter 2 to be string, array given C:\Apache24\htdocs\system\database\DB_query_builder.php 1232
ERROR - 2020-09-19 04:11:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Apache24\htdocs\system\database\DB_query_builder.php 1232
ERROR - 2020-09-19 04:11:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)' at line 3 - Invalid query: SELECT *
FROM `reply`
WHERE reply *, sum(like_r.good), sum(like_r.poor)
ERROR - 2020-09-19 04:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
ORDER BY `created` DESC' at line 3 - Invalid query: SELECT *
FROM `reply`
WHERE reply *, sum(like_r.good), sum(like_r.poor)
ORDER BY `created` DESC
ERROR - 2020-09-19 04:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`reply_num`
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC' at line 1 - Invalid query: SELECT `reply`.`num =` `like_r`.`reply_num`
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:13:38 --> Query error: Unknown column 'like_r.reply_num' in 'field list' - Invalid query: SELECT reply.num = like_r.reply_num
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
' at line 1 - Invalid query: SELECT `reply` *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:17:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:22:46 --> Severity: Notice --> Undefined property: Result::$db C:\Apache24\htdocs\application\libraries\Result.php 116
ERROR - 2020-09-19 04:22:46 --> Severity: error --> Exception: Call to a member function join() on null C:\Apache24\htdocs\application\libraries\Result.php 116
ERROR - 2020-09-19 04:23:04 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::join(), 1 passed in C:\Apache24\htdocs\application\libraries\Result.php on line 116 and at least 2 expected C:\Apache24\htdocs\system\database\DB_query_builder.php 526
ERROR - 2020-09-19 04:27:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` ' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM (`reply`, `like_r`)
JOIN `like_r` ON `r' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM (`reply`, `like_r`)
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` ' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` ' at line 1 - Invalid query: SELECT `reply` *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` ' at line 1 - Invalid query: SELECT reply *, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:41:51 --> Severity: error --> Exception: syntax error, unexpected '}' C:\Apache24\htdocs\application\views\homepage\board\admin\read.php 237
ERROR - 2020-09-19 04:45:38 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:11 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:12 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:12 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:13 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:13 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:13 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:13 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:46:59 --> Query error: Unknown column 'like_r' in 'field list' - Invalid query: SELECT reply.*, like_r, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
ERROR - 2020-09-19 04:47:43 --> Query error: Column 'created' in order clause is ambiguous - Invalid query: SELECT reply.*, user.*, sum(like_r.good), sum(like_r.poor)
FROM `reply`
JOIN `like_r` ON `reply`.`num` = `like_r`.`reply_num`
JOIN `user` ON `user`.`id` = `like_r`.`user`
WHERE `reply`.`board_num` = 60
ORDER BY `created` DESC
