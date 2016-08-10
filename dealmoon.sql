/*
Navicat MySQL Data Transfer

Source Server         : jd
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : dealmoon

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-08-10 22:52:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL COMMENT '图片地址',
  `url` varchar(255) DEFAULT NULL COMMENT 'url访问地址',
  `start_time` int(13) DEFAULT NULL COMMENT '开始时间',
  `end_time` int(13) DEFAULT NULL COMMENT '结束时间',
  `order` int(11) DEFAULT NULL COMMENT '排序',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `title_en` varchar(255) DEFAULT NULL COMMENT '英文标题',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `description_en` varchar(255) DEFAULT NULL COMMENT '英文描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '/statics/image/home/banner.jpg', 'http://www.baidu.com', null, null, '1', 'natural material ', 'natural material ', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs');
INSERT INTO `banner` VALUES ('2', '/statics/image/home/banner1.jpg', 'http://www.baidu.com', null, null, '2', 'natural material ', 'natural material ', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs');
INSERT INTO `banner` VALUES ('3', '/statics/image/home/banner2.jpg', 'http://www.baidu.com', null, null, '3', 'natural material ', 'natural material ', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs');
INSERT INTO `banner` VALUES ('4', '/statics/image/home/banner.jpg', 'www.baidu.com', null, null, '1', 'natural material ', 'natural material ', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs', 'FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers\r\n                                exact requirements which minimises wastage; we do not supply in packs');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '中文',
  `en_name` varchar(255) NOT NULL COMMENT '英文名称',
  `url` varchar(255) NOT NULL COMMENT 'url地址',
  `order` int(11) DEFAULT NULL COMMENT '排序',
  `class` varchar(255) DEFAULT NULL COMMENT '样式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('1', '首页', 'HOME', '', '1', null);
INSERT INTO `nav` VALUES ('2', '关于我们', 'ABOUT US', '', '2', null);
INSERT INTO `nav` VALUES ('3', '新闻动态', 'NEWS', '', '3', null);
INSERT INTO `nav` VALUES ('4', '产品展示', 'PRODUCT', '', '4', null);
INSERT INTO `nav` VALUES ('5', '应用案例', 'CASE', '', '5', null);
INSERT INTO `nav` VALUES ('6', '下载中心', 'DOWNLOAD', '', '6', null);
INSERT INTO `nav` VALUES ('7', '留言中心', 'MESSAGE', '', '7', null);
INSERT INTO `nav` VALUES ('8', '联系我们', 'CONNECT US', '', '8', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) NOT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) DEFAULT NULL COMMENT '重置密码token',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `role` smallint(6) NOT NULL DEFAULT '10' COMMENT '角色等级',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('6', 'admin', 'mwDGS0h.92EP6g7ze3XiaOn4TMSybcEf', '$2y$13$0Ikc12/XaxfNgHsGX0oEheo9PfyzME8rqtk/W2QqhaTFUm61ITclC', 'Vky6_iQTHSusvnGMMp0l7g6lYEi.win._1467723635', 'heyiwei492007413@qq.com', '10', '10', '1467534209', '1467723635');
INSERT INTO `user` VALUES ('7', 'heyiwei', 'tQ6LIC_41TN1hwlCMCQ5CjbxjcnfgC7z', '$2y$13$XPZt5EIoh/Iu84zaVPCCGO0bKWcUT7AO7eXPIKPRnDMs.dsgR.PaK', null, '123@qq.com', '10', '10', '1468513228', '1468513228');
INSERT INTO `user` VALUES ('8', 'hahah123', 'PrFTBL013DhJtuU6H6F2PZbukVwAtIzq', '$2y$13$tp6JsuHWAUQyHL8FA4tmBebCaLXlpWbMFJC4nuLw782ivODAyO32C', null, 'hahah123@qq.com', '10', '10', '1468513262', '1468513262');
INSERT INTO `user` VALUES ('9', 'lalala', 'zfhmeNkwmIkybtanKjN855y3sQf3HzhR', '$2y$13$Ysxs9KkPnqPn52jBMezb9uHXQFnV5fNFMA4N1RhavAvmmhjNo/ZEO', null, 'lalala@qq.com', '10', '10', '1468513297', '1468513297');
INSERT INTO `user` VALUES ('10', 'hahaha123123', 'uzCMKWznK7E3IbVStTwDqx4KXhVHTiSm', '$2y$13$pzl2Vr1uvSz9M2LO.mbQR.fYq5K5R2XGRxYxeOZu1P0i2agOrrrsC', null, 'hahah123123@qq.com', '10', '10', '1468513345', '1468513345');
INSERT INTO `user` VALUES ('11', 'bitch123', 'dP1hU2ds6aDq8UzxZlXmLKKIxd-ofhS7', '$2y$13$oWX7Ow13HIfXU4yAAdFa9.phSCwbIz014hbdAOFIFBPoF.15X33Ky', null, 'bitch123@qq.com', '10', '10', '1468513373', '1468513373');
INSERT INTO `user` VALUES ('12', 'fuck123123123', 'TG5cBYpHoYwlYBOxzpDvxTEDRD1dfXye', '$2y$13$cudm.xKX/B9c7su4sRRyROPIz8Fp9/15HUP4C3sei54fHMMSkpCye', null, 'fuck@qq.com', '10', '10', '1468513409', '1468513409');

-- ----------------------------
-- Table structure for user_data
-- ----------------------------
DROP TABLE IF EXISTS `user_data`;
CREATE TABLE `user_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `sex` int(11) NOT NULL COMMENT '性别',
  `occupation` varchar(255) DEFAULT NULL COMMENT '职业',
  `interest` int(11) DEFAULT NULL COMMENT '兴趣',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_data
-- ----------------------------
INSERT INTO `user_data` VALUES ('1', '6', null, '0', null, null);
