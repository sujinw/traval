/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : traval

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-09-04 22:13:06
*/

SET FOREIGN_KEY_CHECKS=0;

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
