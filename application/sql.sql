use thinkphp;


/*创建事务表*/
    
CREATE TABLE `things` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
 `contents` text COLLATE utf8_unicode_ci NOT NULL,
 `time` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

