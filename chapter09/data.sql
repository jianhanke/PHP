
# 此文件用于部署项目时导入数据库
# 在实际上线时，不应公开此文件，以避免重要信息泄露

# 创建数据库
CREATE DATABASE `php_wish`;

# 选择数据库
USE `php_wish`;

# 愿望表
CREATE TABLE `wish` (
  `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(12) DEFAULT '' NOT NULL COMMENT '作者名字',
  `content` VARCHAR(80) DEFAULT '' NOT NULL COMMENT '许愿内容',
  `time` INT UNSIGNED DEFAULT 0 NOT NULL COMMENT '发表时间',
  `color` VARCHAR(10) DEFAULT '' NOT NULL COMMENT '贴纸颜色',
  `password` VARCHAR(6) DEFAULT '' NOT NULL COMMENT '保护密码'
) DEFAULT CHARSET=utf8;

# 测试数据
INSERT INTO `wish` (`id`, `name`, `content`, `time`, `color`, `password`) VALUES
(1, '张三', '天天开心、心想事成、大吉大利、一帆风顺。', 1490240257, 'red', '111'),
(2, 'PHP爱好者', '祝愿PHP越来越好！', 1490241675, 'yellow', ''),
(3, '匿名', '争取毕业月薪过万！', 1490251234, 'blue', '000000'),
(4, '小明', '考上清华大学', 1490252675, 'green', '123');
