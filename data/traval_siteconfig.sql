# Host: localhost  (Version: 5.5.47)
# Date: 2016-09-05 18:05:06
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "traval_siteconfig"
#

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

#
# Data for table "traval_siteconfig"
#

INSERT INTO `traval_siteconfig` VALUES ('测试下','测试下','测试下','测试下','测试下','测试下测试下',200,'测试下测试下测试下','测试下测试下',943866180,'0','1','1','1',4,'Upload/ConfigImages/71481473069804.png','0');
