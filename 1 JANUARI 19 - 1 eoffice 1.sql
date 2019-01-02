/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : ci_eoffice

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2019-01-01 23:28:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bagian
-- ----------------------------
DROP TABLE IF EXISTS `bagian`;
CREATE TABLE `bagian` (
  `bagian_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bagian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bagian
-- ----------------------------
INSERT INTO `bagian` VALUES ('1', 'Bagian Perencanaan', '0000-00-00 00:00:00');
INSERT INTO `bagian` VALUES ('2', 'Bagian Kepegawaian', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for subbagian
-- ----------------------------
DROP TABLE IF EXISTS `subbagian`;
CREATE TABLE `subbagian` (
  `subbagian_id` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subbagian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subbagian
-- ----------------------------
INSERT INTO `subbagian` VALUES ('4', '2', 'Ini Sub Kepegawaian A', '2019-01-01 23:04:56');
INSERT INTO `subbagian` VALUES ('3', '1', 'Ini Sub Perencanaan', '2019-01-01 23:04:47');
INSERT INTO `subbagian` VALUES ('5', '2', 'Ini Sub Kepegawaian B', '2019-01-01 23:05:06');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `bagian_id` int(11) DEFAULT NULL,
  `subbagian_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', '63a9f0ea7bb98050796b649e85481845', 'Master Root', 'Root Master', 'maulanacahya45@gmail.com', '08122229879', '', 'root', null, null, '1', '0000-00-00 00:00:00');
INSERT INTO `user` VALUES ('2', 'a', '0cc175b9c0f1b6a831c399e269772661', 'Root A', 'Root Master', 'maulanacahya45@gmail.com', '08122229879', '', 'root', null, null, '1', '0000-00-00 00:00:00');
INSERT INTO `user` VALUES ('3', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'Admin', 'Admin', 'maulanacahya45@gmail.com', '08122229879', '', 'admin', '1', '2', '1', '0000-00-00 00:00:00');
