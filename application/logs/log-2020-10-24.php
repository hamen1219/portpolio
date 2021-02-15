<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-24 07:25:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-24 07:25:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-24 07:26:26 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-24 07:26:28 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-24 07:26:37 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-10-24 07:26:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-10-24 07:35:33 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' C:\Apache24\htdocs\application\controllers\User.php 81
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\system\database\DB_query_builder.php 2442
ERROR - 2020-10-24 07:45:53 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT (select count(*) from board) total_b, (select count(*) from reply) total_r, (select count(*) from board where user = u.id) total_my_b, (select count(*) from reply where user = u.id) total_my_r, ifnull((select sum(lb.good) from user uu left join board b on uu.id = b.user left join like_b lb on b.num = lb.board_num where uu.id = u.id group by u.id), 0) total_good, ifnull((select sum(lb.poor) from user uu left join board b on uu.id = b.user left join like_b lb on b.num = lb.board_num where uu.id = u.id group by u.id), 0) total_poor, ifnull((select sum(sb.save) from user uu left join board b on uu.id = b.user left join save_b sb on b.num = sb.board_num where uu.id = u.id group by u.id), 0) total_save, ifnull((select sum(lr.good) from user uu left join reply r on uu.id = r.user left join like_r lr on r.num = lr.reply_num where uu.id = u.id group by u.id), 0) total_good_r, ifnull((select sum(lr.poor) from user uu left join reply r on uu.id = r.user left join like_r lr on r.num = lr.reply_num where uu.id = u.id group by u.id), 0) total_poor_r
FROM `user` `u`
WHERE `u`.`id` = Array
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined index: num C:\Apache24\htdocs\application\controllers\User.php 82
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Array to string conversion C:\Apache24\htdocs\application\views\homepage\alert\error.php 41
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 287
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 287
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 287
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 287
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 287
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 289
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 289
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 299
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 299
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 299
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 299
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 299
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 301
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 301
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 310
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 310
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 310
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 310
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 310
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 313
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 313
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 326
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 326
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:45:53 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 338
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 338
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Undefined variable: us2 C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 07:45:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'img' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 192
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'id' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 193
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'img' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 193
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'id' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 200
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'created' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 201
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'name' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 216
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'pw' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 220
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'img' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 224
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'addr' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 228
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Illegal string offset 'intro' C:\Apache24\htdocs\application\views\homepage\user\myroom.php 236
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:46:29 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:47:00 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:47:00 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:48:17 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:48:17 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 07:48:18 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 323
ERROR - 2020-10-24 07:48:18 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\views\homepage\user\myroom.php 335
ERROR - 2020-10-24 08:11:49 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:11:49 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:11:49 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:15:05 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:15:05 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:15:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:15:06 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:15:06 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:15:06 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:16:05 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:16:05 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:16:05 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:16:07 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:16:07 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:16:07 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:17:08 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:17:14 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:17:46 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:18:12 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:18:14 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:18:14 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:18:14 --> Severity: error --> Exception: syntax error, unexpected '0' (T_LNUMBER), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 97
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:18:29 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:21:59 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:23:22 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:23:22 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 103
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:23:22 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 08:24:32 --> Severity: Warning --> Division by zero C:\Apache24\htdocs\application\controllers\User.php 102
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 265
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 268
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 275
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 279
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 302
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 314
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 327
ERROR - 2020-10-24 08:24:32 --> Severity: Notice --> Undefined index: total_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 339
ERROR - 2020-10-24 23:29:21 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ']' C:\Apache24\htdocs\application\controllers\User.php 98
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-24 23:29:38 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 445
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 447
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 448
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 449
ERROR - 2020-10-24 23:29:40 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\base\header.php 450
ERROR - 2020-10-24 23:29:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-10-24 23:29:54 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 23:29:54 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 23:32:55 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 23:32:55 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 23:33:13 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 23:33:13 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 23:34:52 --> Severity: Notice --> Undefined index: total_my_b C:\Apache24\htdocs\application\views\homepage\user\myroom.php 267
ERROR - 2020-10-24 23:34:52 --> Severity: Notice --> Undefined index: total_my_r C:\Apache24\htdocs\application\views\homepage\user\myroom.php 278
ERROR - 2020-10-24 23:52:44 --> Severity: Notice --> Undefined variable: us2_div C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
ERROR - 2020-10-24 23:52:44 --> Severity: Notice --> Trying to access array offset on value of type null C:\Apache24\htdocs\application\views\homepage\user\myroom.php 290
