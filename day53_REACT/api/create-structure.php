<?php

require 'setup.php';

$query = "
    CREATE TABLE IF NOT EXISTS `posts` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
    `text` text NULL COLLATE utf8_general_ci DEFAULT NULL,
    `published_at` datetime NULL DEFAULT NULL,
    `likes` int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
    
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
";

$stmt = db::execute($query);

$seed = "
    INSERT INTO `posts` 
    (`id`, `title`, `text`, `published_at`, `likes`) 
    VALUES
    (1, 'There was a boy', 'A very strange enchanted boy.\r\nThey say he wandered very far, very far, over land and sea.\r\n\r\nA little shy and sad of eye but very wise was he.', '2017-01-01 00:00:00', 0),
    (2, 'And then one day,', 'a magic day he passed my way.\r\n\r\nAnd while we spoke of many things,\r\nfools and kings, this he said to me.\r\n\r\nThe greatest thing you\'ll ever learn is just to love and be loved in return.\r\n', '2017-02-01 00:00:00', 3)
    ON DUPLICATE KEY UPDATE `id` = `id`
";

$stmt = db::execute($seed);

$response = array(
    'status' => 'OK'
);

echo json_encode($response);
exit();