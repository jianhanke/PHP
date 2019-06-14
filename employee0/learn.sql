/*
Navicat MySQL Data Transfer

Source Server         : bendi
Source Server Version : 50557
Source Host           : localhost:3306
Source Database       : learn

Target Server Type    : MYSQL
Target Server Version : 50557
File Encoding         : 65001

Date: 2018-10-30 10:52:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8 DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `department` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `remarks` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', '张明', '男', '2018-10-16', '人力部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('2', '李小红', '女', '2018-10-11', '市场部', '她高高的个儿，一头乌黑柔软的头发，梳着许多根又细又长的小辫子。雪白的瓜子脸，细长的眉毛下闪动着一双乌黑发亮的眼睛，流露出聪颖的光芒。她平时爱穿红黄相间的长条衬衫，配上浅绿色的紧身裤，多么像一位从新疆来的维吾尔族小姑娘啊！');
INSERT INTO `employee` VALUES ('3', '王鹏', '男', '2018-08-12', '人力部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('4', '赵小飞', '男', '2018-08-16', '人力部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('5', '刘敏', '女', '2017-06-16', '市场部', '她高高的个儿，一头乌黑柔软的头发，梳着许多根又细又长的小辫子。雪白的瓜子脸，细长的眉毛下闪动着一双乌黑发亮的眼睛，流露出聪颖的光芒。她平时爱穿红黄相间的长条衬衫，配上浅绿色的紧身裤，多么像一位从新疆来的维吾尔族小姑娘啊！');
INSERT INTO `employee` VALUES ('6', '周大海', '男', '2016-03-18', '财务部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('7', '冯黎娟', '女', '2017-03-11', '市场部', '她高高的个儿，一头乌黑柔软的头发，梳着许多根又细又长的小辫子。雪白的瓜子脸，细长的眉毛下闪动着一双乌黑发亮的眼睛，流露出聪颖的光芒。她平时爱穿红黄相间的长条衬衫，配上浅绿色的紧身裤，多么像一位从新疆来的维吾尔族小姑娘啊！');
INSERT INTO `employee` VALUES ('8', '程小凡', '男', '2018-04-18', '生产部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('9', '盛黎明', '男', '2018-01-01', '技术部', '他是一位爱说爱笑的男孩。圆胖的脸蛋，一双大眼睛忽闪忽闪的，特别是那张大嘴巴，笑起来嘴角微微上翘，说起话来非常响亮。他最爱发言，课堂上常常响起他回答问题的声音。他爱穿白色短衬衫，蓝色短裤，又整洁又大方。');
INSERT INTO `employee` VALUES ('10', '解晓芳', '女', '2018-10-04', '市场部', '她高高的个儿，一头乌黑柔软的头发，梳着许多根又细又长的小辫子。雪白的瓜子脸，细长的眉毛下闪动着一双乌黑发亮的眼睛，流露出聪颖的光芒。她平时爱穿红黄相间的长条衬衫，配上浅绿色的紧身裤，多么像一位从新疆来的维吾尔族小姑娘啊！');
