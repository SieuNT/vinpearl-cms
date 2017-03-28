/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : vinpearl

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-03-29 03:07:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` enum('banner_left','slide_show','banner_top') COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', 'slide_show', 'Slides1', 'slides1', '1/4n4R4S30oNS8tOgA1fDWkgWuaYiKCv8g.png', '/uploads', '#', '1490699344', '1490723817', '1', '1');
INSERT INTO `banner` VALUES ('2', 'slide_show', 'Slides2', 'slides2', '1/tca2PPnCxOI7pdLpQHXU5ZbzNt8kG4Cb.png', '/uploads', '#', '1490699362', '1490723826', '1', '1');

-- ----------------------------
-- Table structure for `fqa`
-- ----------------------------
DROP TABLE IF EXISTS `fqa`;
CREATE TABLE `fqa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8_unicode_ci,
  `answer` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fqa_project` (`project_id`),
  CONSTRAINT `fk_fqa_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fqa
-- ----------------------------
INSERT INTO `fqa` VALUES ('1', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1490697561', '1490697561', '1', '1');
INSERT INTO `fqa` VALUES ('2', '1', 'Lorem Ipsum is not simply random text', 'lorem-ipsum-is-not-simply-random-text', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n', '1490697673', '1490698057', '1', '1');
INSERT INTO `fqa` VALUES ('3', '1', 'There are many variations of passages of Lorem Ipsum available', 'there-are-many-variations-of-passages-of-lorem-ipsum-available', '', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</span></p>\r\n', '1490697703', '1490697703', '1', '1');
INSERT INTO `fqa` VALUES ('4', '1', 'If you are going to use a passage of Lorem Ipsum, you need', 'if-you-are-going-to-use-a-passage-of-lorem-ipsum-you-need', '', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>\r\n', '1490697727', '1490697727', '1', '1');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1490636512');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1490636515');

-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'Du lịch nghỉ dưỡng biển đảo kết hợp hội thảo tại Vinpearl', 'du-lich-nghi-duong-bien-dao-ket-hop-hoi-thao-tai-vinpearl', '1/mzxQ9hgxA3uk5Jf_giqKkybALZp45ioZ.png', '/uploads', '<p>Tọa lạc tr&ecirc;n những h&ograve;n đảo đẹp, c&aacute;c khu nghỉ dưỡng Vinpearl tại Nha Trang, Ph&uacute; Quốc được kh&aacute;ch lưu tr&uacute; đ&aacute;nh gi&aacute; l&agrave; c&oacute; kh&ocirc;ng gian nghỉ dưỡng biển đảo kết hợp hội thảo to&agrave;n diện.</p>\r\n\r\n<div class=\"the-article-body cms-body\" style=\"box-sizing: border-box; text-rendering: geometricPrecision; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; width: 660px; position: relative; font-family: &quot;Noto Serif&quot;, serif; color: rgb(34, 34, 34); line-height: 30px; -webkit-font-smoothing: antialiased;\">\r\n<p>Khi xu hướng du lịch biển đảo v&agrave; nghỉ dưỡng kết hợp hội thảo (MICE) ng&agrave;y c&agrave;ng ph&aacute;t triển tại Việt Nam, Vinpearl trở th&agrave;nh điểm đến được chọn lựa nhờ đ&aacute;p ứng tốt c&aacute;c y&ecirc;u cầu khắt khe về cơ sở vật chất, dịch vụ.</p>\r\n\r\n<p>C&aacute;c khu nghỉ dưỡng cao cấp của Vinpearl lu&ocirc;n tiếp đ&oacute;n lượng kh&aacute;ch ổn định quanh năm, đặc biệt l&agrave; đối tượng kh&aacute;ch h&agrave;ng doanh nghiệp c&oacute; nhu cầu du lịch kết hợp tổ chức sự kiện, ph&aacute;t triển kinh doanh.</p>\r\n\r\n<p>Nếu như Vinpearl Hạ Long Bay Resort l&agrave; khu nghỉ dưỡng biển 5 sao lớn nhất miền Bắc th&igrave; Vinpearl Nha Trang v&agrave; Ph&uacute; Quốc được xem l&agrave; lựa chọn h&agrave;ng đầu tại miền Trung v&agrave; miền Nam. Hai quần thể nghỉ dưỡng tr&ecirc;n đảo độc đ&aacute;o n&agrave;y đều c&oacute; thời tiết &ocirc;n h&ograve;a quanh năm; vị tr&iacute; ri&ecirc;ng biệt, vừa đảm bảo an ninh vừa tạo kh&ocirc;ng gian ri&ecirc;ng tư; c&oacute; s&acirc;n golf ti&ecirc;u chuẩn quốc tế, quần thể vui chơi giải tr&iacute; c&ugrave;ng nhiều lợi thế kh&aacute;c.</p>\r\n\r\n<p><strong>Hệ thống dịch vụ to&agrave;n diện tại Vinpearl Nha Trang</strong></p>\r\n\r\n<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Du lich nghi duong bien dao ket hop hoi thao tai Vinpearl hinh anh 1\" src=\"http://znews-photo.d.za.zdn.vn/w660/Uploaded/wyhktpu/2016_10_13/1Quan_the_nghi_duong_tu_A_toi_Z_tai_Nha_Trang.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Quần thể nghỉ dưỡng to&agrave;n diện tại Vinpearl Nha Trang.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Được du kh&aacute;ch gọi l&agrave; &ldquo;vi&ecirc;n ngọc trai lấp l&aacute;nh tr&ecirc;n vương miện của nữ ho&agrave;ng biển khơi&rdquo;, Vinpearl Nha Trang tọa lạc tại đảo H&ograve;n Tre, sở hữu hệ thống 4 kh&aacute;ch sạn v&agrave; resort quy m&ocirc; lớn với gần 1.400 ph&ograve;ng kh&aacute;ch sạn, hơn 670 villa: Vinpearl Nha Trang Resort, Vinpearl Golf Land Resort &amp; Villas, Vinpearl Nha Trang Bay Resort &amp; Villas, Vinpearl Luxury Nha Trang.</p>\r\n\r\n<p>Từ s&acirc;n bay quốc tế Cam Ranh, du kh&aacute;ch mất 40 ph&uacute;t di chuyển bằng &ocirc;t&ocirc; v&agrave; 7 ph&uacute;t đi t&agrave;u cao tốc để đến khu nghỉ dưỡng Vinpearl Nha Trang - nơi c&oacute; kh&ocirc;ng gian tổ chức sự kiện chuy&ecirc;n nghiệp, hiện đại. Đặc biệt, kể từ năm 2016, để đ&aacute;p ứng lượng lớn kh&aacute;ch du lịch hội thảo, to&agrave;n bộ chuỗi kh&aacute;ch sạn v&agrave; resort tại Nha Trang đ&atilde; n&acirc;ng số lượng ph&ograve;ng họp l&ecirc;n 9 ph&ograve;ng (thay v&igrave; 2 ph&ograve;ng): 8 ph&ograve;ng quy m&ocirc; vừa v&agrave; nhỏ; một ph&ograve;ng Grand Ballroom với sức chứa hơn 600 chỗ, ph&ugrave; hợp tổ chức hội thảo, hội nghị, những bữa tiệc lớn hay triển l&atilde;m trưng b&agrave;y; trung t&acirc;m hội nghị v&agrave; biểu diễn đa năng với sức chứa 1.350 chỗ, đặc biệt l&agrave; khu s&acirc;n khấu nhạc nước 5.056 chỗ ngồi, trang bị hệ thống kỹ thuật &acirc;m thanh, &aacute;nh s&aacute;ng tối t&acirc;n - nơi diễn ra nhiều sự kiện lớn trong nước v&agrave; quốc tế.</p>\r\n\r\n<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Du lich nghi duong bien dao ket hop hoi thao tai Vinpearl hinh anh 2\" src=\"http://znews-photo.d.za.zdn.vn/w660/Uploaded/wyhktpu/2016_10_13/2Nhung_bai_bien_rieng_tren_dao_Hon_Tre_giup_doanh_nghiep_to_chuc_cac_hoat_dong_team_building_phu_hop.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\" title=\"Du lịch nghỉ dưỡng biển đảo kết hợp hội thảo tại Vinpearl hình ảnh 2\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">B&atilde;i biển ri&ecirc;ng tr&ecirc;n đảo H&ograve;n Tre, Nha Trang.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Nằm b&ecirc;n cạnh l&agrave; s&acirc;n golf 18 lỗ tầm nh&igrave;n hướng biển, bệnh viện kh&aacute;ch sạn 5 sao quốc tế Vinmec v&agrave; c&ocirc;ng vi&ecirc;n vui chơi giải tr&iacute; Vinpearl Land Nha Trang mới được cải tạo quy m&ocirc; v&agrave; hiện đại. Đ&acirc;y l&agrave; nơi th&iacute;ch hợp để tổ chức c&aacute;c hoạt động nh&oacute;m, vui chơi ngo&agrave;i trời. Với lợi thế sở hữu b&atilde;i biển ri&ecirc;ng, Vinpearl Nha Trang đặc biệt ph&ugrave; hợp với sự kiện quy m&ocirc; lớn đi k&egrave;m hoạt động teambuilding, tiệc b&atilde;i biển theo chủ đề.</p>\r\n\r\n<p>Ri&ecirc;ng tại Vinpearl Luxury Nha Trang, du kh&aacute;ch c&ograve;n được tiếp cận thư viện lưu trữ nhiều đầu s&aacute;ch nổi tiếng trong v&agrave; ngo&agrave;i nước tại khu vực Business Center.</p>\r\n\r\n<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Du lich nghi duong bien dao ket hop hoi thao tai Vinpearl hinh anh 3\" src=\"http://znews-photo.d.za.zdn.vn/w660/Uploaded/wyhktpu/2016_10_13/3_He_thong_nha_hang_voi_suc_chua_phu_hop_hoi_thao_quy_mo_lon.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\" title=\"Du lịch nghỉ dưỡng biển đảo kết hợp hội thảo tại Vinpearl hình ảnh 3\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Hệ thống nh&agrave; h&agrave;ng với sức chứa lớn.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Kh&aacute;m ph&aacute; thi&ecirc;n nhi&ecirc;n hoang d&atilde; tại Vinpearl Ph&uacute; Quốc</strong></p>\r\n\r\n<p>Với những đo&agrave;n kh&aacute;ch ưa vận động v&agrave; kh&aacute;m ph&aacute;, đảo ngọc Ph&uacute; Quốc l&agrave; điểm đến l&yacute; tưởng với khung cảnh hoang sơ của G&agrave;nh Dầu, Cửa Cạn, b&atilde;i Thơm, b&atilde;i V&ograve;ng, b&atilde;i Khem, b&atilde;i Sao, b&atilde;i Trường, suối Tranh, suối Đ&aacute; B&agrave;n, Dinh Cậu, ch&ugrave;a Hộ Quốc, vườn quốc gia Ph&uacute; Quốc&hellip;</p>\r\n\r\n<p>Tọa lạc tại một trong 5 b&atilde;i biển đẹp nhất h&agrave;nh tinh, Vinpearl Ph&uacute; Quốc c&oacute; tổng diện t&iacute;ch tr&ecirc;n 300 ha, gồm khu kh&aacute;ch sạn v&agrave; biệt thự 5 sao với 750 ph&ograve;ng, được thiết kế theo phong c&aacute;ch kiến tr&uacute;c đương đại, b&agrave;i tr&iacute; nội thất tinh tế, đem đến cho du kh&aacute;ch trải nghiệm nghỉ dưỡng sang trọng v&agrave; gần gũi với thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Du lich nghi duong bien dao ket hop hoi thao tai Vinpearl hinh anh 4\" src=\"http://znews-photo.d.za.zdn.vn/w660/Uploaded/wyhktpu/2016_10_13/4He_thong_phong_Villas_voi_tam_nhin_huong_bien_mang_du_khach_den_gan_hon_voi_thien_nhien.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\" title=\"Du lịch nghỉ dưỡng biển đảo kết hợp hội thảo tại Vinpearl hình ảnh 4\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Hệ thống villa với tầm nh&igrave;n hướng biển.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>B&ecirc;n cạnh cơ sở lưu tr&uacute; tiện nghi, Vinpearl Resort Ph&uacute; Quốc cũng sở hữu cơ sở vật chất hiện đại, sẵn s&agrave;ng đ&aacute;p ứng c&aacute;c sự kiện tầm cỡ quốc tế như ph&ograve;ng hội nghị quy m&ocirc; 1.500 m2; hệ thống s&acirc;n thể thao, spa cao cấp v&agrave; bể bơi 5.000 m2&hellip;</p>\r\n\r\n<p>Kh&ocirc;ng dừng lại ở đ&oacute;, Vinpearl Ph&uacute; Quốc Resort &amp; Golf đ&aacute;p ứng mọi nhu cầu về hội nghị - hội thảo, nghỉ dưỡng, thể thao, giải tr&iacute;, chăm s&oacute;c sức khỏe, tổ chức sự kiện... với c&aacute;c khu vui chơi giải tr&iacute; Vinpearl Land, Vinpearl Golf Club 27 lỗ, c&ocirc;ng vi&ecirc;n b&aacute;n hoang d&atilde; Vinpearl Safari, Vincharm Spa.</p>\r\n\r\n<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Du lich nghi duong bien dao ket hop hoi thao tai Vinpearl hinh anh 5\" src=\"http://znews-photo.d.za.zdn.vn/w660/Uploaded/wyhktpu/2016_10_13/5_San_Golf_tai_Vinpearl_Phu_Quoc_Resort__Golf_v_i_t_m_nh_n_h__ng_bi_n_duy_nh_t_t_i_Vi_t_Nam.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:660px\" title=\"Du lịch nghỉ dưỡng biển đảo kết hợp hội thảo tại Vinpearl hình ảnh 5\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">S&acirc;n golf 27 lỗ tại Vinpearl Ph&uacute; Quốc Resort &amp; Golf.&nbsp;\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Để c&oacute; được những trải nghiệm l&yacute; th&uacute; nhất cho du lịch kết hợp hội nghị, sự kiện, Vinpearl Ph&uacute; Quốc l&agrave; sự lựa chọn đ&aacute;ng c&acirc;n nhắc.</p>\r\n</div>\r\n', '1490691316', '1490730543', '1', '1');
INSERT INTO `post` VALUES ('2', 'Khai trương biệt thự mẫu Vinpearl Phú Quốc Villas', 'khai-truong-biet-thu-mau-vinpearl-phu-quoc-villas', '1/D8UHEFW9rFvqYGS6a66GyvpKRPDO04EG.png', '/uploads', '<p>Khi xu hướng du lịch biển đảo v&agrave; nghỉ dưỡng kết hợp hội thảo (MICE) ng&agrave;y c&agrave;ng ph&aacute;t triển tại Việt Nam, Vinpearl trở th&agrave;nh điểm đến được chọn lựa nhờ đ&aacute;p ứng tốt c&aacute;c y&ecirc;u cầu khắt khe về cơ sở vật chất, dịch vụ.</p>\r\n\r\n<p>C&aacute;c khu nghỉ dưỡng cao cấp của Vinpearl lu&ocirc;n tiếp đ&oacute;n lượng kh&aacute;ch ổn định quanh năm, đặc biệt l&agrave; đối tượng kh&aacute;ch h&agrave;ng doanh nghiệp c&oacute; nhu cầu du lịch kết hợp tổ chức sự kiện, ph&aacute;t triển kinh doanh.</p>\r\n', '1490730580', '1490730580', '1', '1');
INSERT INTO `post` VALUES ('3', 'Vinpearl đạt giải thưởng kép \'Điểm đến hấp dẫn nhất VN\'', 'vinpearl-dat-giai-thuong-kep-diem-den-hap-dan-nhat-vn', '1/qTkhsPmA5C3G7z8-kh284B8AqNS01To_.png', '/uploads', '<p>Trong đ&oacute;, hạng mục Resort hấp dẫn nhất thuộc về Vinpearl Ph&uacute; Quốc, hạng mục Khu vui chơi giải tr&iacute; hấp dẫn nhất t&ocirc;n vinh Vinpearl Land Nha Trang.</p>\r\n\r\n<p>&quot;Điểm đến hấp dẫn nhất Việt Nam&quot; l&agrave; giải thưởng chuy&ecirc;n m&ocirc;n lần đầu ti&ecirc;n được Hiệp hội Du lịch Việt Nam tổ chức, với Hội đồng gi&aacute;m khảo l&agrave; c&aacute;c chuy&ecirc;n gia về du lịch, nh&agrave; b&aacute;o uy t&iacute;n v&agrave; c&ocirc;ng ch&uacute;ng th&ocirc;ng qua trang web tripi.vn. Giải thưởng bao gồm 5 hạng mục: Resort, Khu vui chơi giải tr&iacute;, L&agrave;ng nghề, Bảo t&agrave;ng, B&atilde;i biển. Mỗi hạng mục vinh danh 3 điểm đến ti&ecirc;u biểu, hấp dẫn nhất Việt Nam.</p>\r\n', '1490730610', '1490730610', '1', '1');
INSERT INTO `post` VALUES ('4', 'Vinpearl công bố thống nhất hệ thống thương hiệu', 'vinpearl-cong-bo-thong-nhat-he-thong-thuong-hieu', '1/QpXyJ0FnpxiQdXtuX5dqTzPAawAdKGf8.png', '/uploads', '<p><span style=\"color:rgb(34, 34, 34); font-family:noto serif,serif; font-size:18px\">Nhằm ph&ugrave; hợp với c&aacute;c ti&ecirc;u chuẩn quốc tế cũng như định hướng ph&aacute;t triển thương hiệu l&acirc;u d&agrave;i, hệ thống du lịch nghỉ dưỡng Vinpearl quyết định quy hoạch dưới một thương hiệu thống nhất. Theo đ&oacute;, từ thương hiệu mẹ Vinpearl Hotels &amp; Resorts, hệ thống sẽ c&oacute; hai d&ograve;ng sản phẩm ch&iacute;nh l&agrave; Resort v&agrave; City Hotel; đồng thời, đặt t&ecirc;n c&aacute;c cơ sở theo địa danh c&ugrave;ng đặc th&ugrave; sản phẩm như Vinpearl Nha Trang Resort, Vinpearl Nha Trang Bay Resort &amp; Villas, Vinpearl Đ&agrave; Nẵng Resort &amp; Villas, Vinpearl Ph&uacute; Quốc Resort, Vinpearl Hotel Landmark 81&hellip;</span></p>\r\n', '1490730639', '1490730639', '1', '1');

-- ----------------------------
-- Table structure for `project`
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', 'Vinpearl Bãi Dài', 'vinpearl-bai-dai', '1/uSoI6SOGF1Ye6i9TYE6aQgpTnq5OCZZ-.png', '/uploads', '1490694176', '1490729923', '1', '1');
INSERT INTO `project` VALUES ('2', 'Vinpearl Nha Trang', 'vinpearl-nha-trang', '1/n7YjGMPouf0ZY4H6Dp27n5__3GsSYn6N.png', '/uploads', '1490694192', '1490729930', '1', '1');
INSERT INTO `project` VALUES ('3', 'Vinpearl Phú Quốc', 'vinpearl-phu-quoc', '1/LnUglqgF4UZJ9yv5vA4Gf8byl3NL_ih5.png', '/uploads', '1490694215', '1490729936', '1', '1');

-- ----------------------------
-- Table structure for `testimonial`
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_testimonial_project` (`project_id`),
  CONSTRAINT `fk_testimonial_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
INSERT INTO `testimonial` VALUES ('1', '1', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p>\r\n', 'Nguyễn Tuấn Siêu', 'IdeasVN', '1490694667', '1490696059', '1', '1');
INSERT INTO `testimonial` VALUES ('2', '1', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n', 'Nguyễn Tuấn Siêu', 'IdeasVN', '1490696112', '1490696112', '1', '1');
INSERT INTO `testimonial` VALUES ('3', '1', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>\r\n', 'Nguyễn Tuấn Siêu', 'IdeasVN', '1490696483', '1490696483', '1', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT '/uploads/avatar/avatar-2.jpg',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '-FpV6ostORtnbKjT3QkBrXYy0Eg7I8aZ', '$2y$13$PMBMy62ZbnfpaiSmuoxbFejIcG7kCRl..c7p2CXeNivRkwmslKce.', null, 'tuan@sieu.com', '/uploads/avatar/avatar-2.jpg', '10', '1490636547', '1490636547');

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_video_project` (`project_id`),
  CONSTRAINT `fk_video_project` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', '1', 'Vinpearl Bãi Dài Nha Trang - Vinpearl Long Beach Villas', 'vinpearl-bai-dai-nha-trang-vinpearl-long-beach-villas', 'https://www.youtube.com/watch?v=5S5nw3mcB98', '1490698789', '1490698789', '1', '1');
