/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - oguru-academy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `categorys` */

DROP TABLE IF EXISTS `categorys`;

CREATE TABLE `categorys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categorys` */

insert  into `categorys`(`id`,`code`,`name`,`parent`,`slug`,`icon`,`created_at`,`updated_at`) values 
(1,'CAT-25012022','Diklat',0,'diklat','fab fa-accessible-icon','2023-01-25 05:44:22','2023-01-25 05:44:26'),
(2,'CAT-24012022','Teknologi',0,'teknologi','fas fa-desktop',NULL,NULL),
(3,'CAT-23012022','Foto & Videografi',0,'foto-videografi','fas fa-camera-retro',NULL,NULL),
(4,'CAT-22012022','Manajemen & Bisnis',0,'manajemen-bisnis','fas fa-briefcase',NULL,NULL);

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desctiprions` longtext COLLATE utf8mb4_unicode_ci,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `outcomes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` smallint(6) NOT NULL,
  `requirements` longtext COLLATE utf8mb4_unicode_ci,
  `price` double(22,2) DEFAULT NULL,
  `discount` double(22,2) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `overview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_free` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `courses` */

insert  into `courses`(`id`,`title`,`desctiprions`,`start_date`,`end_date`,`outcomes`,`category_id`,`requirements`,`price`,`discount`,`user_id`,`overview`,`status`,`is_free`,`created_at`,`updated_at`) values 
(1,'Workshop Media Pembelajaran Multimedia interaktif','<p>Hi Sobat Oguru! Kamu ingin belajar tentang pengetahuan dasar dan prosedur pembuatan desain grafis; kaidah dan prosedur pengembangan multimedia interaktif; dan kaidah dan prosedur pengembangan e-modul. Kamu sekarang tidak perlu khawatir, sebab dalam kelas ini, kamu akan diajarkan secara intensif bersama kak Fidan Luthfullahi, S.Pd. dari dasar, hingga tips menarik yang akan mempermudah kamu untuk membuat media interaktif dengan mudah. Media Interaktif ini dapat dikerjakan sendirian! Sangat menarik, kan? Yuk, daftar sekarang! Ajak pasangan, keluarga, atau temanmu ya!<br></p>','2021-01-01','2021-02-25','[\"Membekali pengetahuan dasar dan prosedur pembuatan desain grafis\",\"Membekali kaidah dan prosedur pengembangan multimedia interaktif, dan\",\"Membekali kaidah dan prosedur pengembangan e-modul\",\"Free Aplikasi Multimedia Interaktif \\\"Articulate Storyline\\\"\",\"Free E-Modul Prosedur Pengoperasian\",\"E-Sertifikat\",\"Teman Baru\"]',2,'[\"Siapapun yang ingin belajar Multimedia interaktif\",\"Lulusan SMA\\/SMK, Diploma, hingga S1\",\"Semua Guru Indonesia\"]',50000.00,0.00,2,'https://youtu.be/lPQmc91-67c',1,0,'2023-01-25 05:48:41','2023-01-25 05:48:46'),
(2,'Belajar Editing foto dan video dari android','Kelas Interaktif dengan Webinar (Mengajar bagaimana cara mengedit foto dan video enggak ribet dan cepat menggunakan smartphone)','2021-01-01','2023-01-29','[\"Dasar-dasar fotografi menggunakan handphone\",\"Dasar editing LR Mobile, PicsArt, dan Kinemaster\",\"Free preset LR Mobile plus lightroom CC mod apk\",\"Free picart premium apk\",\"Free kinemaster premium apk\",\"Konten jitu bisnis\",\"E-Sertifikat\"]',3,'[\"Siapapun yang ingin belajar editing foto dan video dengan android\",\"Handphone android\",\"Mempunyai aplikasi zoom dan whatsapp\"]',50000.00,0.00,3,'https://youtu.be/uLQzr-nNxGs',1,0,'2023-01-25 05:51:25','2023-01-25 05:51:28'),
(3,'MENJADI TEACHERPRENEUR DI ERA MILENIAL','<p>Teacherpreneur merupakan suatu usaha yang dilakukan oleh seorang guru diluar pekerjaannya tanpa meninggalkan tugas dan kewajibannya sebagai seorang guru. Melalui manajemen humas yang benar dan startegik, hal tersebut dapat menumbuhkan pentingnya informasi kepada masyarakat tentang usaha yang dijalankan, menjaga dan membentuk saling percaya, dan memelihara serta menciptakan kerjasama lebih luas.</p>','2022-04-01','2022-05-05','[\"Instagram For Business\",\"Startegi Konten Instagram\",\"Cara mencari followers Tertarget di IG\",\"Cara membuat IG Ads Melalui Facebook Business\",\"Manager part 1 (Memilih jenis iklan sampai dengan target audience)\",\"Cara membuat IG Ads Melalui Facebook Business\",\"Manager part 2 (Menghubungkan FB Ads ke IG sampai dengan proses Pembayaran\",\"Evaluasi Bersama\"]',4,'[\"Calon Guru atau Guru Aktif\",\"Memiliki Laptop atau Handphone\",\"Jaringan yang mumpuni\",\"Semangat Belajar\"]',0.00,0.00,4,'https://youtu.be/ZTJVWOub7eM',1,1,NULL,NULL);

/*Table structure for table `enrols` */

DROP TABLE IF EXISTS `enrols`;

CREATE TABLE `enrols` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `enrols` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `lessons` */

DROP TABLE IF EXISTS `lessons`;

CREATE TABLE `lessons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lessons` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_01_20_072956_create_categorys_table',2),
(6,'2023_01_20_073018_create_courses_table',2),
(7,'2023_01_20_073058_create_lessons_table',2),
(8,'2023_01_20_073108_create_mitras_table',2),
(9,'2023_01_24_221008_create_sections_table',2),
(10,'2023_01_24_221251_create_enrols_table',2);

/*Table structure for table `mitras` */

DROP TABLE IF EXISTS `mitras`;

CREATE TABLE `mitras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mitras` */

insert  into `mitras`(`id`,`name`,`source`,`status`,`created_at`,`updated_at`) values 
(9,'UNIVERSITAS PGRI KANJURUAN MALANG','https://unikama.ac.id/id/',1,NULL,NULL),
(10,'GERAI SENJA','https://instagram.com/gerai.senja?igshid=1ubvzq90zpp03',1,NULL,NULL),
(12,'UNIVERSITAS NEGERI SURABAYA','https://www.unesa.ac.id/',1,NULL,NULL),
(13,'GRESIK CREATIVE HUB','https://www.instagram.com/gresikcreativehub/',1,NULL,NULL),
(14,'SEPUTAR SEMINAR','https://www.instagram.com/seputarseminar/',1,NULL,NULL),
(17,'REDCOMM PGSD','https://www.instagram.com/redcomm_pgsd/',1,NULL,NULL),
(20,'DINSKOPUKM JATIM','https://diskopukm.jatimprov.go.id/home',1,NULL,NULL),
(21,'FORMATO UNESA','https://www.instagram.com/formato_unesa/',1,NULL,NULL),
(22,'JURUSAN S1 MP UNESA','http://mp.fip.unesa.ac.id/',1,NULL,NULL),
(23,'JURUSAN S1 PGSD UNESA','http://pgsd.fip.unesa.ac.id/',1,NULL,NULL),
(24,'KECE TV BY UNESA','https://www.instagram.com/unesatv/',1,NULL,NULL),
(25,'SOLUSI ERA MEDIATAMA','https://www.instagram.com/solusi_era_mediatama/',1,NULL,NULL),
(26,'KEMENKOPUKM RI','https://kemenkopukm.go.id/',1,NULL,NULL),
(27,'BEC UNIKAMA','https://www.instagram.com/pusatbisnis_unikama/',1,NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sections` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`biography`,`role`,`status`,`created_at`,`updated_at`) values 
(1,'Administrator','oguru@oguru.id',NULL,'$2a$12$lLov3EjSHRYbHAfN0QutHu0W6ID9mMi.Yv3p.eE3IGPjyY/4X1hvm',NULL,NULL,'SUPERADMIN',1,NULL,NULL),
(2,'Fidan Luthfullahi','fidanluth@gmail.com',NULL,'$2a$12$lLov3EjSHRYbHAfN0QutHu0W6ID9mMi.Yv3p.eE3IGPjyY/4X1hvm',NULL,'<p>Hallo Perkenalkan saya Fidan Luthfullahi, SP.d.</p>\r\n<p>Lulusan S1 Teknologi Pendidikan Unesa</p>\r\n<p>Saat ini saya menjadi guru Multimedia di salah satu SMK di Surabaya</p>\r\n<p>Selain itu, saya juga memiliki jasa pembuatan media pembelajaran dan menjadi Pelatih dalam berbagai workshop/pelatihan media pembelajaran</p>','EDUKATOR',1,NULL,NULL),
(3,'Norman Al farisi','normanalfarisi2@gmail.com',NULL,'$2a$12$lLov3EjSHRYbHAfN0QutHu0W6ID9mMi.Yv3p.eE3IGPjyY/4X1hvm',NULL,'<p>Nama :Norman al farisi</p>\r\n<p>Alamat: pangkah wetan-ujungpangkah-gresik</p>','EDUKATOR',1,NULL,NULL),
(4,'Inung Matin','ahmadmatinulhaq1998@gmail.com',NULL,'$2a$12$lLov3EjSHRYbHAfN0QutHu0W6ID9mMi.Yv3p.eE3IGPjyY/4X1hvm',NULL,NULL,'EDUKATOR',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
