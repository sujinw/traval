/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : traval

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-09-06 21:43:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for traval_access
-- ----------------------------
DROP TABLE IF EXISTS `traval_access`;
CREATE TABLE `traval_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  KEY `role_id` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_access
-- ----------------------------

-- ----------------------------
-- Table structure for traval_node
-- ----------------------------
DROP TABLE IF EXISTS `traval_node`;
CREATE TABLE `traval_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_node
-- ----------------------------

-- ----------------------------
-- Table structure for traval_role
-- ----------------------------
DROP TABLE IF EXISTS `traval_role`;
CREATE TABLE `traval_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_role
-- ----------------------------

-- ----------------------------
-- Table structure for traval_siteconfig
-- ----------------------------
DROP TABLE IF EXISTS `traval_siteconfig`;
CREATE TABLE `traval_siteconfig` (
  `site_title` varchar(200) DEFAULT NULL COMMENT '网站标题',
  `site_des` varchar(500) DEFAULT NULL COMMENT '网站描述',
  `site_keywords` varchar(500) DEFAULT NULL COMMENT '网站关键字',
  `site_mintitle` varchar(12) DEFAULT NULL COMMENT '网站简称（最多5个汉字12个字符）',
  `site_vbname` varchar(20) DEFAULT NULL COMMENT '积分名称',
  `site_registermessage` varchar(500) DEFAULT NULL COMMENT '注册成功提示信息',
  `site_tovbfirst` int(10) DEFAULT '0' COMMENT '注册送积分',
  `site_icp` varchar(100) DEFAULT NULL COMMENT '备案信息',
  `admin_email` varchar(200) DEFAULT NULL COMMENT '站长邮箱',
  `admin_qq` int(20) DEFAULT NULL COMMENT '站长qq',
  `site_state` varchar(4) NOT NULL DEFAULT '0' COMMENT '网站状态（0锁定1开启）',
  `site_register_state` varchar(4) NOT NULL DEFAULT '0' COMMENT '网站注册状态',
  `site_qq_register` varchar(4) NOT NULL DEFAULT '0' COMMENT 'qq注册状态',
  `site_wx_register` varchar(4) NOT NULL DEFAULT '0' COMMENT '微信注册',
  `code_length` int(10) NOT NULL DEFAULT '0' COMMENT '验证码位数',
  `site_logo` varchar(200) DEFAULT NULL COMMENT '网站logo',
  `site_wxpay_state` varchar(4) NOT NULL DEFAULT '0' COMMENT '微信支付状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_siteconfig
-- ----------------------------
INSERT INTO `traval_siteconfig` VALUES ('测试下', '测试下', '测试下', '测试下', '测试下', '测试下测试下', '200', '测试下测试下测试下', '测试下测试下', '943866180', '0', '1', '1', '1', '4', 'Upload/ConfigImages/71481473069804.png', '0');

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

-- ----------------------------
-- Table structure for traval_userleve
-- ----------------------------
DROP TABLE IF EXISTS `traval_userleve`;
CREATE TABLE `traval_userleve` (
  `leve_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员等级id',
  `leve_name` varchar(50) NOT NULL DEFAULT '' COMMENT '会员等级名称',
  `leve_rid` int(11) DEFAULT NULL COMMENT '排序',
  `leve_des` varchar(200) DEFAULT '' COMMENT '等级说明',
  `leve_img` varchar(500) DEFAULT '' COMMENT '等级图标',
  `is_display` tinyint(4) DEFAULT NULL COMMENT '是否锁定',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`leve_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_userleve
-- ----------------------------
INSERT INTO `traval_userleve` VALUES ('1', '普通会员', '0', '普通会员', 'Upload/UserLeveImages/2016/09/04/81801472990963.png', '0', '1472990963');
INSERT INTO `traval_userleve` VALUES ('2', '普通会员', '0', '普通会员', 'Upload/UserLeveImages/2016/09/04/17551472990980.png', '0', '1472990980');

-- ----------------------------
-- Table structure for traval_user_role
-- ----------------------------
DROP TABLE IF EXISTS `traval_user_role`;
CREATE TABLE `traval_user_role` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of traval_user_role
-- ----------------------------
