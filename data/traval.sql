# Host: localhost  (Version: 5.5.47)
# Date: 2016-09-08 17:55:24
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "traval_access"
#

DROP TABLE IF EXISTS `traval_access`;
CREATE TABLE `traval_access` (
  `role_id` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '角色ID',
  `node_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '节点ID',
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '权限等级',
  `module` varchar(50) DEFAULT NULL COMMENT '权限描述',
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='权限控制表';

#
# Data for table "traval_access"
#

/*!40000 ALTER TABLE `traval_access` DISABLE KEYS */;
INSERT INTO `traval_access` VALUES (1,4,2,NULL),(1,3,3,NULL),(1,2,2,NULL);
/*!40000 ALTER TABLE `traval_access` ENABLE KEYS */;

#
# Structure for table "traval_classify"
#

DROP TABLE IF EXISTS `traval_classify`;
CREATE TABLE `traval_classify` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '分类标题',
  `desc` varchar(500) DEFAULT NULL COMMENT '描述',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `classimg` varchar(255) DEFAULT NULL COMMENT '分类图标',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `is_display` int(4) DEFAULT NULL COMMENT '是否显示',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='套餐分类';

#
# Data for table "traval_classify"
#


#
# Structure for table "traval_details"
#

DROP TABLE IF EXISTS `traval_details`;
CREATE TABLE `traval_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL COMMENT '标题',
  `imgs` varchar(255) DEFAULT NULL COMMENT '套餐图片',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `yearold` varchar(255) DEFAULT NULL COMMENT '年龄段',
  `signeuptime` int(10) DEFAULT '0' COMMENT '报名时间',
  `gooutime` int(10) DEFAULT NULL COMMENT '出行时间',
  `address` varchar(500) DEFAULT NULL COMMENT '地点',
  `contents` text COMMENT '套餐详情',
  `cid` int(11) DEFAULT NULL COMMENT '套餐分类id',
  `rid` int(11) DEFAULT NULL COMMENT '套餐评论id',
  `area_id` int(11) DEFAULT NULL COMMENT '地区id',
  `signnum` int(11) DEFAULT NULL COMMENT '报名人数',
  `sort` int(5) DEFAULT NULL COMMENT '排序',
  `tags` varchar(255) DEFAULT NULL COMMENT '套餐关键字',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `days` int(2) DEFAULT NULL COMMENT '出行天数',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `is_end` varchar(4) DEFAULT NULL COMMENT '是否结束',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='旅游套餐详情';

#
# Data for table "traval_details"
#


#
# Structure for table "traval_node"
#

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "traval_node"
#

/*!40000 ALTER TABLE `traval_node` DISABLE KEYS */;
INSERT INTO `traval_node` VALUES (1,'Admin',NULL,1,'后台管理应用',NULL,0,1,1),(2,'Index',NULL,1,'后台首页控制器',NULL,1,2,1),(3,'index',NULL,1,'首页欢饮页显示',NULL,2,3,1),(4,'User',NULL,1,'用户管理模块',NULL,1,2,1);
/*!40000 ALTER TABLE `traval_node` ENABLE KEYS */;

#
# Structure for table "traval_role"
#

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "traval_role"
#

/*!40000 ALTER TABLE `traval_role` DISABLE KEYS */;
INSERT INTO `traval_role` VALUES (1,'SupperManner',NULL,1,'超级管理员');
/*!40000 ALTER TABLE `traval_role` ENABLE KEYS */;

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

#
# Structure for table "traval_user"
#

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

#
# Data for table "traval_user"
#

INSERT INTO `traval_user` VALUES (2,'admina','25d55ad283aa400af464c76d713c07ad','slade','Upload/UserImages/2016/09/03/39831472866114.png','0','','','2016-09-04','0','','',0,1472866115,NULL),(4,'adminaa','25d55ad283aa400af464c76d713c07ad','slade','Upload/UserImages/2016/09/03/7851472866336.png','0','','','2016-09-04','0','','',0,1472866336,NULL),(5,'1234567','25d55ad283aa400af464c76d713c07ad','',NULL,'1','什么是冬冬','萨达萨达','2016-09-04','13698056423','suinw@qq.com','打算的撒',1,NULL,NULL);

#
# Structure for table "traval_user_role"
#

DROP TABLE IF EXISTS `traval_user_role`;
CREATE TABLE `traval_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "traval_user_role"
#

/*!40000 ALTER TABLE `traval_user_role` DISABLE KEYS */;
INSERT INTO `traval_user_role` VALUES (1,1,'2'),(2,1,'5');
/*!40000 ALTER TABLE `traval_user_role` ENABLE KEYS */;

#
# Structure for table "traval_userleve"
#

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

#
# Data for table "traval_userleve"
#

INSERT INTO `traval_userleve` VALUES (1,'普通会员',0,'普通会员','Upload/UserLeveImages/2016/09/04/81801472990963.png',0,1472990963),(2,'普通会员',0,'普通会员','Upload/UserLeveImages/2016/09/04/17551472990980.png',0,1472990980);
