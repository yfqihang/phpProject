/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : php_project

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 09/05/2022 22:19:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `press` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `num` int(255) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 147 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES (1, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (2, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (3, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (4, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (5, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (6, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (7, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (8, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (9, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (10, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (11, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (12, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (13, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (14, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (15, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (16, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (17, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (18, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (19, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (20, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (21, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (22, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (23, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (24, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (25, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (26, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (27, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (28, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (29, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (30, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (31, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (32, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (33, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (34, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (35, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (36, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (37, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (38, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (39, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (40, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (41, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (42, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (43, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (44, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (45, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (46, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (47, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (48, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (49, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (50, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (51, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (52, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (53, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (54, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (55, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (56, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (57, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (58, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (59, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (60, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (61, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (62, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (63, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (64, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (65, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (66, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (67, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (68, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (69, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (70, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (71, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (72, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (73, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (74, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (75, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (76, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (77, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (78, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (79, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (80, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (81, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (82, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (83, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (84, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (85, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (86, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (87, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (88, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (89, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (90, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (91, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (92, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (93, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (94, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (95, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (96, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (97, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (98, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (99, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (100, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (101, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (102, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (103, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (104, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (105, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (106, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (107, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (108, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (109, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (110, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (111, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (112, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (113, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (114, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (115, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (116, '住在时光里', '籽月', '百花洲出版社', 1, 25);
INSERT INTO `book` VALUES (117, '看见', '柴静', '广西师范大学出版社', 2, 30);
INSERT INTO `book` VALUES (118, '微机原理', '吴宁', '清华大学出版社', 10, 45);
INSERT INTO `book` VALUES (119, 'AE教程', '杨静华', '中国水利电力出版社', 2, 110);
INSERT INTO `book` VALUES (120, '茶花女', '小仲马', '汕头大学出版社', 8, 60);
INSERT INTO `book` VALUES (121, '简·爱', '勃朗特', '黄河出版传媒', 9, 20);
INSERT INTO `book` VALUES (122, '笑猫日记', '杨红樱', '浙江儿童出版社', 6, 15);
INSERT INTO `book` VALUES (123, 'javaweb教程', '黑马程序员', '人邮学院', 6, 50);
INSERT INTO `book` VALUES (124, 'JS教程', '黄真', '公信出版社', 2, 60);
INSERT INTO `book` VALUES (125, '格林童话', '格林', '格林童话出版社', 1, 20);
INSERT INTO `book` VALUES (126, 'PHP基础', '黑马程序员', '人民邮电出版社', 2, 30);
INSERT INTO `book` VALUES (127, '论语', '孔子', '邢台出版社', 6, 50);
INSERT INTO `book` VALUES (128, '东周列国传', '冯梦龙', '天地出版社', 8, 80);
INSERT INTO `book` VALUES (146, '住在时光里', '籽月', '百花洲出版社', 1, 25);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `account` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('李四', '123', '456');
INSERT INTO `user` VALUES ('小明', '111', '222');
INSERT INTO `user` VALUES ('张三', '789', '789');
INSERT INTO `user` VALUES ('扬帆起航', '777', '888');
INSERT INTO `user` VALUES ('扬帆起航', '110', '110');
INSERT INTO `user` VALUES ('王五', '123456', '2');

SET FOREIGN_KEY_CHECKS = 1;
