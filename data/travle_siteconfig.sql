/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : traval

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-09-04 22:12:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for travle_siteconfig
-- ----------------------------
DROP TABLE IF EXISTS `travle_siteconfig`;
CREATE TABLE `travle_siteconfig` (
  `site_title` varchar(200) DEFAULT NULL COMMENT '网站标题',
  `site_des` varchar(500) DEFAULT NULL COMMENT '网站描述',
  `site_keywors` varchar(500) DEFAULT NULL COMMENT '网站关键字',
  `site_mintitle` varchar(12) DEFAULT NULL COMMENT '网站简称（最多5个汉字12个字符）',
  `site_vbname` varchar(20) DEFAULT NULL COMMENT '积分名称',
  `site_registermessage` varchar(500) DEFAULT NULL COMMENT '注册成功提示信息',
  `site_tovbfirst` tinyint(4) DEFAULT NULL COMMENT '注册送积分',
  `site_icp` varchar(100) DEFAULT NULL COMMENT '备案信息',
  `admin_email` varchar(200) DEFAULT NULL COMMENT '站长邮箱',
  `admin_qq` int(20) DEFAULT NULL COMMENT '站长qq',
  `site_state` varchar(4) DEFAULT NULL COMMENT '网站状态（0锁定1开启）',
  `site_register_state` varchar(4) DEFAULT NULL COMMENT '网站注册状态',
  `site_qq_register` varchar(4) DEFAULT NULL COMMENT 'qq注册状态',
  `site_wx_register` varchar(4) DEFAULT NULL COMMENT '微信注册',
  `code_lenth` varchar(10) DEFAULT NULL COMMENT '验证码位数',
  `site_logo` varchar(200) DEFAULT NULL COMMENT '网站logo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of travle_siteconfig
-- ----------------------------
