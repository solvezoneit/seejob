/*
SQLyog Community v12.4.1 (64 bit)
MySQL - 10.1.28-MariaDB : Database - cjobcjob
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cjobcjob` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cjobcjob`;

/*Table structure for table `admin_reg` */

DROP TABLE IF EXISTS `admin_reg`;

CREATE TABLE `admin_reg` (
  `admin_reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_reg_name` varchar(255) NOT NULL,
  `admin_reg_email` varchar(255) NOT NULL,
  `admin_reg_password` varchar(255) NOT NULL,
  `admin_reg_date` varchar(255) NOT NULL,
  `uplode_image` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `city_tbl` */

DROP TABLE IF EXISTS `city_tbl`;

CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `city_country_id` varchar(255) NOT NULL,
  `city_state_id` varchar(255) NOT NULL,
  `city_district_id` varchar(255) NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1244 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_add` */

DROP TABLE IF EXISTS `cj_add`;

CREATE TABLE `cj_add` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `bname` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `desc` longtext,
  `addposetion` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `admin_status` int(11) DEFAULT '0',
  `flag` int(11) DEFAULT '1',
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `cj_advertise` */

DROP TABLE IF EXISTS `cj_advertise`;

CREATE TABLE `cj_advertise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `upload_time` datetime NOT NULL,
  `modification_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `advertise_location` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_apply_job` */

DROP TABLE IF EXISTS `cj_apply_job`;

CREATE TABLE `cj_apply_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) DEFAULT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `contact` varchar(222) DEFAULT NULL,
  `location` varchar(222) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `flag` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_cv` */

DROP TABLE IF EXISTS `cj_cv`;

CREATE TABLE `cj_cv` (
  `cv_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `cv_name` varchar(200) NOT NULL,
  `cv_contact` varchar(200) NOT NULL,
  `cv_resume` varchar(200) NOT NULL,
  `cv_msofc` varchar(200) NOT NULL,
  `cv_language` varchar(200) NOT NULL,
  `cj_salary` varchar(200) NOT NULL,
  `cj_company` varchar(200) NOT NULL,
  `cj_experience` int(11) NOT NULL,
  `cj_designation` varchar(200) NOT NULL,
  `cj_board` varchar(200) NOT NULL,
  `cj_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_job_post` */

DROP TABLE IF EXISTS `cj_job_post`;

CREATE TABLE `cj_job_post` (
  `job_post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_desc` varchar(255) DEFAULT NULL,
  `page_keyword` varchar(255) DEFAULT NULL,
  `job_cat` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `sub_location` varchar(255) DEFAULT NULL,
  `exp_min` int(11) DEFAULT NULL,
  `exp_max` int(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `salary_min` int(11) DEFAULT NULL,
  `salary_max` int(11) DEFAULT NULL,
  `work_shifts` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age_min` int(11) DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL,
  `job_desc` text,
  `remail` varchar(255) DEFAULT NULL,
  `rcontact` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `flag` int(11) DEFAULT '1',
  PRIMARY KEY (`job_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_jobs` */

DROP TABLE IF EXISTS `cj_jobs`;

CREATE TABLE `cj_jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_cat` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `job_desc` longtext,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_language` */

DROP TABLE IF EXISTS `cj_language`;

CREATE TABLE `cj_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_location` */

DROP TABLE IF EXISTS `cj_location`;

CREATE TABLE `cj_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tl` varchar(255) NOT NULL,
  `l1` varchar(255) NOT NULL,
  `l2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9042 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_slider` */

DROP TABLE IF EXISTS `cj_slider`;

CREATE TABLE `cj_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `upload_date` datetime NOT NULL,
  `modification_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `cj_user` */

DROP TABLE IF EXISTS `cj_user`;

CREATE TABLE `cj_user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(300) DEFAULT NULL,
  `name` varchar(600) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `address` text,
  `location` varchar(600) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `state` varchar(300) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `pincode` varchar(300) DEFAULT NULL,
  `profile_pic` varchar(600) DEFAULT NULL,
  `banner_pic` varchar(600) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `mod_date` timestamp NULL DEFAULT NULL,
  `description` longtext,
  `altr_contact` varchar(50) DEFAULT NULL,
  `anual_salary` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `m_s` varchar(50) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `profile_status` int(11) NOT NULL DEFAULT '1',
  `socialmedia_status` int(11) NOT NULL DEFAULT '1',
  `flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `country_tbl` */

DROP TABLE IF EXISTS `country_tbl`;

CREATE TABLE `country_tbl` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `countrycode` varchar(255) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `district_tbl` */

DROP TABLE IF EXISTS `district_tbl`;

CREATE TABLE `district_tbl` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) NOT NULL,
  `district_country_id` varchar(255) NOT NULL,
  `district_state_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Table structure for table `fresher_tbl` */

DROP TABLE IF EXISTS `fresher_tbl`;

CREATE TABLE `fresher_tbl` (
  `fri_id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `universityname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`fri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `graduation` */

DROP TABLE IF EXISTS `graduation`;

CREATE TABLE `graduation` (
  `graduation_id` int(11) NOT NULL AUTO_INCREMENT,
  `graduation_name` varchar(255) NOT NULL,
  `graduation_type` varchar(255) NOT NULL,
  PRIMARY KEY (`graduation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Table structure for table `highest_qualification` */

DROP TABLE IF EXISTS `highest_qualification`;

CREATE TABLE `highest_qualification` (
  `highest_qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `highest_qualification_name` varchar(255) NOT NULL,
  PRIMARY KEY (`highest_qualification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `highest_qualification_course` */

DROP TABLE IF EXISTS `highest_qualification_course`;

CREATE TABLE `highest_qualification_course` (
  `highest_qualification_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `highest_qualification_course_name` varchar(255) NOT NULL,
  `highest_qualification_course_h_q_id` varchar(255) NOT NULL,
  `Bord` int(11) NOT NULL,
  PRIMARY KEY (`highest_qualification_course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `location` */

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) NOT NULL,
  `location_table_country_state_district_city` varchar(255) NOT NULL,
  `location_id_country_state_district_city` varchar(255) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1294 DEFAULT CHARSET=latin1;

/*Table structure for table `paginate` */

DROP TABLE IF EXISTS `paginate`;

CREATE TABLE `paginate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Table structure for table `qualification_specialization` */

DROP TABLE IF EXISTS `qualification_specialization`;

CREATE TABLE `qualification_specialization` (
  `qs_id` int(11) NOT NULL AUTO_INCREMENT,
  `qs_hq_id` varchar(255) NOT NULL,
  `qs_hqc_id` varchar(255) NOT NULL,
  `hq_name` varchar(255) NOT NULL,
  PRIMARY KEY (`qs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `skills_tbl` */

DROP TABLE IF EXISTS `skills_tbl`;

CREATE TABLE `skills_tbl` (
  `skills_id` int(255) NOT NULL AUTO_INCREMENT,
  `skills_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`skills_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `state_tbl` */

DROP TABLE IF EXISTS `state_tbl`;

CREATE TABLE `state_tbl` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `state_country_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `subcity` */

DROP TABLE IF EXISTS `subcity`;

CREATE TABLE `subcity` (
  `subcity_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcity_name` varchar(255) NOT NULL,
  `subcity_country_id` varchar(255) NOT NULL,
  `subcity_state_id` varchar(255) NOT NULL,
  `subcity_district_id` varchar(255) NOT NULL,
  `subcity_city_id` varchar(255) NOT NULL,
  PRIMARY KEY (`subcity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(222) COLLATE latin1_general_ci NOT NULL,
  `adminPassword` varchar(222) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `add_date` datetime NOT NULL,
  `mod_date` datetime NOT NULL,
  `flag` int(9) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Table structure for table `tbl_merchant` */

DROP TABLE IF EXISTS `tbl_merchant`;

CREATE TABLE `tbl_merchant` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `merchant_id` varchar(300) DEFAULT NULL,
  `name` varchar(600) DEFAULT NULL,
  `business_name` varchar(600) DEFAULT NULL,
  `contact` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `address` text,
  `location` varchar(600) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `state` varchar(300) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `pincode` varchar(300) DEFAULT NULL,
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `admin_status` varchar(300) DEFAULT NULL,
  `profile_status` varchar(9) DEFAULT NULL,
  `profile_pic` varchar(600) DEFAULT NULL,
  `banner_pic` varchar(600) DEFAULT NULL,
  `title` text,
  `keyword` text,
  `description` text,
  `add_date` datetime DEFAULT NULL,
  `mod_date` timestamp NULL DEFAULT NULL,
  `joining` varchar(300) DEFAULT NULL,
  `website` varchar(600) DEFAULT NULL,
  `gst` varchar(300) DEFAULT NULL,
  `pan_card` varchar(300) DEFAULT NULL,
  `tin` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
