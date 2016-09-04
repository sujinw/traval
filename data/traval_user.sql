/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : traval

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-09-04 22:12:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for traval_user
-- ----------------------------
DROP TABLE IF EXISTS `traval_user`;
CREATE TABLE `traval_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(50) DEFAULT NULL COMMENT '用户密码',
  `nickname` varchar(50) DEFAULT '' COMMENT '用户nickname',
  `userimg` varchar(500) DEFAULT NULL COMMENT '用户头像',
  `sex` varchar(2) DEFAULT '0' COMMENT '性别（0保密1男2女）',
  `surname` varchar(20) DEFAULT '' COMMENT '姓名',
  `babayname` varchar(20) DEFAULT NULL COMMENT '宝宝名称',
  `babaybirthday` date DEFAULT NULL COMMENT '宝宝生日',
  `phone` varchar(11) DEFAULT '0' COMMENT '联系电话',
  `email` varchar(200) DEFAULT NULL COMMENT '邮箱',
  `address` varchar(500) DEFAULT NULL COMMENT '地址',
  `is_display` tinyint(2) DEFAULT '1' COMMENT '是否可操作用户1否（锁定）0是（正常）',
  `create_time` int(10) DEFAULT NULL COMMENT '注册时间',
  `leve_id` int(11) unsigned zerofill DEFAULT NULL COMMENT '会员等级id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_user
-- ----------------------------
INSERT INTO `traval_user` VALUES ('2', 'admina', '25d55ad283aa400af464c76d713c07ad', 'slade', 'Upload/UserImages/2016/09/03/39831472866114.png', '0', '', '', '2016-09-04', '0', '', '', '0', '1472866115', null);
INSERT INTO `traval_user` VALUES ('4', 'admina', '25d55ad283aa400af464c76d713c07ad', 'slade', 'Upload/UserImages/2016/09/03/7851472866336.png', '0', '', '', '2016-09-04', '0', '', '', '0', '1472866336', null);
INSERT INTO `traval_user` VALUES ('5', '1234567', '25d55ad283aa400af464c76d713c07ad', '', null, '1', '什么是冬冬', '萨达萨达', '2016-09-04', '13698056423', 'suinw@qq.com', '打算的撒', '1', null, null);
