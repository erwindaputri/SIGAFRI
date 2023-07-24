-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jul 2023 pada 14.10
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigapri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$q0ksul2mKsYnlLcPA7mKMeJS3ftjfqhybgxWCWD8sULmHrxOlMwKa', 'app/admin/1689243159-5wViX.jpg', '2023-07-13 15:08:31', '2023-07-13 15:08:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confir_password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nik`, `nama`, `email`, `username`, `password`, `confir_password`, `alamat`, `poto`, `status`, `created_at`, `updated_at`) VALUES
(6104120906980001, 'Dea Marwan', 'dea@gmail.com', 'dea@gmail.com', '$2y$10$7gHrX0w.Hlkg7Q0YYL2fAOi.DQG4NbNqbXSE78YDKKXKjv9Cod9/q', '12345', 'Sukabangun', 'app/anggota/1689426056-KLUxz.jpg', 2, '2023-07-15 13:00:56', '2023-07-15 13:00:56'),
(6104125404720001, 'Erwinda Putri', 'erwinda@gmail.com', 'erwinda@gmail.com', '$2y$10$VkiX4dNCK.kebVx6pRkTWe9mvzbdLy7e6UK9G4PoEMq5ItEhO1nKS', '12345', 'Sungai Besar', 'app/anggota/1689243159-5wViX.jpg', 2, '2023-07-13 13:14:21', '2023-07-13 13:14:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) NOT NULL,
  `nama_ebook` varchar(200) NOT NULL,
  `sampul` varchar(200) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `nama_ebook`, `sampul`, `pdf`, `created_at`, `updated_at`) VALUES
(7, 'Ansonia spinulifer, Spiny Slender Toad', 'app/sampul/16865864347.png', 'app/pdf/16865864343.pdf', '2023-06-12 09:13:54', '2023-06-12 09:13:54'),
(8, 'Chalcorana chalconota, Schlegel\'s Fro', 'app/sampul/16865865603.png', 'app/pdf/16865865605.pdf', '2023-06-12 09:16:00', '2023-06-12 09:16:00'),
(9, 'Microhyla achatina, Javan Chorus Fro', 'app/sampul/168658676210.png', 'app/pdf/16865867629.pdf', '2023-06-12 09:19:22', '2023-06-12 09:19:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_spesies`
--

CREATE TABLE `galeri_spesies` (
  `id` int(11) NOT NULL,
  `id_spesies` int(11) NOT NULL,
  `gambar_spesies` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_spesies`
--

INSERT INTO `galeri_spesies` (`id`, `id_spesies`, `gambar_spesies`, `created_at`, `updated_at`) VALUES
(5, 1, 'app/spesies/16861525724.jpg', '2023-06-07 08:28:58', '2023-06-07 08:42:52'),
(6, 2, 'app/spesies/16862387696.jpg', '2023-06-08 08:39:29', '2023-06-08 08:39:29'),
(7, 2, 'app/spesies/16862387691.jpg', '2023-06-08 08:39:29', '2023-06-08 08:39:29'),
(8, 2, 'app/spesies/16862387695.jpg', '2023-06-08 08:39:29', '2023-06-08 08:39:29'),
(9, 2, 'app/spesies/16862387691.jpg', '2023-06-08 08:39:29', '2023-06-08 08:39:29'),
(10, 3, 'app/spesies/16862407228.jpg', '2023-06-08 09:12:02', '2023-06-08 09:12:02'),
(11, 3, 'app/spesies/16862407224.jpg', '2023-06-08 09:12:02', '2023-06-08 09:12:02'),
(12, 3, 'app/spesies/168624072210.jpg', '2023-06-08 09:12:02', '2023-06-08 09:12:02'),
(13, 3, 'app/spesies/16862407223.jpg', '2023-06-08 09:12:02', '2023-06-08 09:12:02'),
(14, 3, 'app/spesies/16862407229.jpg', '2023-06-08 09:12:02', '2023-06-08 09:12:02'),
(15, 4, 'app/spesies/16862410925.jpg', '2023-06-08 09:18:12', '2023-06-08 09:18:12'),
(16, 4, 'app/spesies/16862410925.jpg', '2023-06-08 09:18:12', '2023-06-08 09:18:12'),
(17, 4, 'app/spesies/16862410929.jpg', '2023-06-08 09:18:12', '2023-06-08 09:18:12'),
(18, 4, 'app/spesies/16862410933.jpg', '2023-06-08 09:18:13', '2023-06-08 09:18:13'),
(19, 4, 'app/spesies/16862410938.jpg', '2023-06-08 09:18:13', '2023-06-08 09:18:13'),
(20, 5, 'app/spesies/16862442242.jpg', '2023-06-08 10:10:24', '2023-06-08 10:10:24'),
(21, 5, 'app/spesies/16862442248.jpg', '2023-06-08 10:10:24', '2023-06-08 10:10:24'),
(22, 5, 'app/spesies/16862442242.jpg', '2023-06-08 10:10:24', '2023-06-08 10:10:24'),
(23, 5, 'app/spesies/16862442256.jpg', '2023-06-08 10:10:25', '2023-06-08 10:10:25'),
(24, 6, 'app/spesies/16865779389.jpg', '2023-06-12 06:52:18', '2023-06-12 06:52:18'),
(25, 6, 'app/spesies/16865779386.jpg', '2023-06-12 06:52:18', '2023-06-12 06:52:18'),
(26, 6, 'app/spesies/168657793810.jpg', '2023-06-12 06:52:18', '2023-06-12 06:52:18'),
(27, 6, 'app/spesies/16865779381.jpg', '2023-06-12 06:52:18', '2023-06-12 06:52:18'),
(28, 7, 'app/spesies/16865782929.jpg', '2023-06-12 06:58:12', '2023-06-12 06:58:12'),
(29, 7, 'app/spesies/16865782924.jpg', '2023-06-12 06:58:12', '2023-06-12 06:58:12'),
(30, 7, 'app/spesies/168657829210.jpg', '2023-06-12 06:58:12', '2023-06-12 06:58:12'),
(31, 8, 'app/spesies/16865784596.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(32, 8, 'app/spesies/16865784593.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(33, 8, 'app/spesies/16865784594.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(34, 8, 'app/spesies/16865784596.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(35, 9, 'app/spesies/16865786504.jpg', '2023-06-12 07:04:10', '2023-06-12 07:04:10'),
(36, 10, 'app/spesies/168657879210.jpg', '2023-06-12 07:06:32', '2023-06-12 07:06:32'),
(37, 10, 'app/spesies/16865787921.jpg', '2023-06-12 07:06:32', '2023-06-12 07:06:32'),
(38, 10, 'app/spesies/16865787921.jpg', '2023-06-12 07:06:32', '2023-06-12 07:06:32'),
(39, 11, 'app/spesies/16865789355.jpg', '2023-06-12 07:08:55', '2023-06-12 07:08:55'),
(40, 11, 'app/spesies/16865789351.jpg', '2023-06-12 07:08:55', '2023-06-12 07:08:55'),
(41, 12, 'app/spesies/168657908810.jpg', '2023-06-12 07:11:28', '2023-06-12 07:11:28'),
(42, 12, 'app/spesies/16865790885.jpg', '2023-06-12 07:11:28', '2023-06-12 07:11:28'),
(43, 14, 'app/spesies/16865794996.jpg', '2023-06-12 07:18:19', '2023-06-12 07:18:19'),
(44, 14, 'app/spesies/16865794999.jpg', '2023-06-12 07:18:19', '2023-06-12 07:18:19'),
(45, 14, 'app/spesies/168657949910.jpg', '2023-06-12 07:18:19', '2023-06-12 07:18:19'),
(46, 15, 'app/spesies/16865854979.jpg', '2023-06-12 08:58:17', '2023-06-12 08:58:17'),
(47, 16, 'app/spesies/168942405110.jpg', '2023-07-15 12:27:31', '2023-07-15 12:27:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` longtext NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `kategori_kegiatan` varchar(200) NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `kategori_kegiatan`, `gambar_kegiatan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'upacara', 'Seminar', 'app/gambar_kegiatan/16862322254.jpg', '<p>asjkahduhsd</p>\r\n<p>&lt;dfsfd</p>\r\n<p>&lt;</p>\r\n<p>&lt;</p>\r\n<p>&lt;</p>\r\n<p>&lt;</p>\r\n<p>&lt;</p>', '2023-06-07 09:09:19', '2023-06-08 06:53:26'),
(6, 'Getring bulanan yafri', 'Seminar', 'app/gambar_kegiatan/16884895813.jpg', '<p>adsffgvhjkml,,mknjhbvgfcghjkl;kvgbhnjmk,lshbjnmkcfvghbnjmk</p>\r\n<p>adsffgvhjkml,,mknjhbvgfcghjkl;kvgbhnjmk,lshbjnmkcfvghbnjmk</p>\r\n<p>adsffgvhjkml,,mknjhbvgfcghjkl;kvgbhnjmk,lshbjnmkcfvghbnjmk</p>\r\n<p>adsffgvhjkml,,mknjhbvgfcghjkl;kvgbhnjmk,lshbjnmkcfvghbnjmk</p>\r\n<p>adsffgvhjkml,,mknjhbvgfcghjkl;kvgbhnjmk,lshbjnmkcfvghbnjmk</p>', '2023-07-04 16:53:01', '2023-07-04 16:54:53'),
(7, 'Pendampingan Herpetologi Siswa/i SMK Negeri 1 Ketapang ODTWA Lubuk Baji', 'Trip', 'app/gambar_kegiatan/16885659155.jpg', '<p>Hallo sobat AFRIER<br>Minggu kemarin teman-teman&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafriketapang/?hl=id\">@dpdafriketapang</a>&nbsp;melakukan pendampingan kepada Siswa dan Siswi dari&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/smk_negeri1ketapang/?hl=id\">@smk_negeri1ketapang</a><br>.<br>.<br>.<br>Mereka melakukan pendakian ringan di Bukit Lubuk Baji, dimana bukit ini masuk dalam Kawasan Taman Nasional Gunung Palung serta mendapatkan pembelajaran dari kawan-kawan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/yayasan_palung/?hl=id\">@yayasan_palung</a>&nbsp;dan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/btn_gn_palung/?hl=id\">@btn_gn_palung</a><br>.<br>.<br>.<br>Semoga ilmunya berguna di kemudian hari ya</p>', '2023-07-05 14:05:15', '2023-07-05 14:20:03'),
(8, 'Getring bulanan Yayasan Amfibi Reptil Indonesia', 'Berita', 'app/gambar_kegiatan/16885660678.jpg', '<p>Hallo sobat AFRIER<br>akhir bulan ini&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafriketapang/?hl=id\">@dpdafriketapang</a>&nbsp;kembali melaksanakan Gathring bulanan ya.<br>.<br>.<br>.<br>.<br>Pengen kenal, lihat, dan pegang reptil lainnya?<br>Pantau terus media sosial kita dan ikut ramaikan gathring nya.<br>.<br>.<br>.<br>Jangan lupa ajak keluarga, ayah, ibu, adik, kakak, nenek, selingkuhan, dan simpanan ya biar selalu ramai.<br>.<br>.<br>.<br>See you next time</p>', '2023-07-05 14:07:47', '2023-07-05 14:07:47'),
(9, 'Tamasya ke Lubuk Baji', 'Trip', 'app/gambar_kegiatan/16885664931.jpg', '<p>Alhamdulillah tamasya ke Lubuk Baji telah usai, namun ada berbeda dari tamasya kali ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimana kami juga berusaha membawa turun sampah yang menumpuk di atas Lubuk Baji agar tidak mencemari lingkungan asri di alamnya.</p>\r\n<div class=\"_a9zs\">&nbsp;</div>\r\n<div class=\"x9f619 xjbqb8w x78zum5 x168nmei x13lgxp2 x5pf9jr xo71vjh x1xmf6yo x12nagc x1n2onr6 x1plvlek xryxfnj x1c4vz4f x2lah0s xdt5ytf xqjyukv x1qjc9v5 x1oa3qoh x1nhvcw1\">&nbsp;</div>', '2023-07-05 14:14:53', '2023-07-05 14:14:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rescue`
--

CREATE TABLE `rescue` (
  `id` int(11) NOT NULL,
  `nomor_telepon` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rescue`
--

INSERT INTO `rescue` (`id`, `nomor_telepon`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(3, '098765432121', 'erwindaputri2@gmail.com', 'jl di.pennjaitan, ketapang indonesia', '2023-06-07 09:07:54', '2023-06-07 10:10:04'),
(5, '09876543212', 'saya@gmail.com', 'Jl. Meyjen Sutoyo', '2023-07-04 16:38:43', '2023-07-04 16:38:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesies`
--

CREATE TABLE `spesies` (
  `id` int(11) NOT NULL,
  `id_anggota` bigint(20) DEFAULT NULL,
  `level` int(4) DEFAULT NULL,
  `nama_spesies` varchar(100) NOT NULL,
  `nama_latin` varchar(100) NOT NULL,
  `kategori_spesies` varchar(50) NOT NULL,
  `kategori_jenis` varchar(50) NOT NULL,
  `famili` varchar(100) NOT NULL,
  `nama_daerah` varchar(100) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spesies`
--

INSERT INTO `spesies` (`id`, `id_anggota`, `level`, `nama_spesies`, `nama_latin`, `kategori_spesies`, `kategori_jenis`, `famili`, `nama_daerah`, `lat`, `lng`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 6104125404720001, 1, 'Ular Krait Putih', 'BUNGARUS CANDIDUS', 'Reptil', 'Berbisa', 'ELAPIDAE', 'Ciburuy, Garut, Jawa Barat, Indonesia', '-7.2789403', '107.8143012', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif;\">Bungarus candidus, atau ular krait putih, adalah spesies ular berbisa yang tersebar di beberapa wilayah di Asia Tenggara, termasuk Indonesia. Ular ini memiliki penampilan yang khas dengan tubuh ramping dan panjang mencapai 1,2 hingga 1,5 meter. Warna tubuhnya umumnya putih atau putih kekuningan dengan garis-garis hitam yang melintang secara teratur di seluruh tubuhnya. Kepalanya kecil dengan mata berwarna hitam yang menonjol. </span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-size: 12pt; font-family: arial, helvetica, sans-serif;\"><span lang=\"EN-US\" style=\"line-height: 150%;\">Seperti halnya dengan spesies krait lainnya, Bungarus candidus adalah ular berbisa yang memiliki bisa yang sangat berbahaya bagi manusia. Gigitan dari ular ini dapat menyebabkan efek neurotoksik serius, termasuk kelumpuhan otot, gangguan pernapasan, dan bahkan kematian jika tidak segera ditangani dengan benar. Oleh karena itu, penting untuk menjauh dan tidak mengganggu ular ini jika ditemui. Jika terjadi gigitan, segera cari pertolongan medis darurat untuk pengobatan yang tepat.</span></span></p>', '2023-06-12 06:58:11', '2023-07-15 13:58:32'),
(8, 6104125404720001, 1, 'Ular Naga Sungai', 'MATICORA INTESTINALIS', 'Reptil', 'Berbisa', 'ELAPIDAE', 'Dharmasraya, Sumatra Barat, Indonesia', '-1.4769425', '101.5424250', '<p><span lang=\"EN-US\" style=\"font-size: 12pt; line-height: 150%; font-family: arial, helvetica, sans-serif;\">Maticora intestinalis, juga dikenal sebagai Ular Naga Sungai, adalah ular berbisa yang dapat ditemukan di beberapa wilayah Asia Tenggara, termasuk Indonesia. Ular ini memiliki tubuh yang besar dan kuat, dengan panjang mencapai 2 hingga 3 meter. Tubuhnya berwarna cokelat atau abu-abu dengan pola belang atau bintik-bintik gelap yang mencolok. Kepalanya lebar dan kuat, dengan mata yang relatif kecil. Ular Naga Sungai biasanya hidup di daerah aliran sungai, rawa-rawa, dan tepi sungai. Mereka adalah predator yang memangsa ikan, katak, mamalia kecil, dan burung air. Penting untuk diingat bahwa Maticora intestinalis adalah ular berbisa yang dapat menghasilkan racun berbahaya. Jika Anda melihat ular ini, penting untuk menjaga jarak yang aman dan tidak mengganggunya. Jika terjadi gigitan, segera cari bantuan medis darurat karena bisa dari ular ini dapat menyebabkan efek yang serius pada kesehatan manusia.</span></p>', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(9, 6104125404720001, 2, 'Ular Kobra Merah', 'NAJA SPUTATRIX', 'Reptil', 'Berbisa', 'ELAPIDAE', 'Waropen, Papua, Indonesia', '-2.7509422', '137.2756048', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Naja sputatrix, yang lebih dikenal sebagai Ular Kobra Merah, adalah salah satu spesies ular berbisa yang dapat ditemukan di Asia Tenggara, termasuk di beberapa wilayah Indonesia. Ular ini memiliki penampilan yang mencolok, dengan tubuh yang besar dan panjang mencapai 2 meter atau lebih. Warna tubuhnya umumnya cokelat atau kecokelatan dengan pola belang-belang gelap yang khas. Kepalanya yang lebar dan runcing serta kemampuannya untuk mengembangkan leher saat siaga membuatnya menjadi ular yang menakutkan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Naja sputatrix tersebar luas di berbagai habitat, mulai dari hutan dataran rendah hingga hutan pegunungan, dan bahkan di daerah pertanian. Keberadaannya dapat ditemukan di beberapa pulau Indonesia seperti Sumatra, Kalimantan, Jawa, Sulawesi, dan Papua. Meskipun sering dijumpai di alam liar, Ular Kobra Merah juga dapat ditemukan di sekitar pemukiman manusia, menjadikannya sebagai salah satu ular berbisa yang lebih sering berinteraksi dengan manusia.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Seperti kebanyakan kobra, Naja sputatrix memiliki bisa yang sangat berbahaya. Gigitannya dapat menyebabkan efek neurotoksik yang parah pada manusia, termasuk kelumpuhan otot, gangguan pernapasan, dan dalam kasus yang ekstrem, dapat menyebabkan kematian. Oleh karena itu, sangat penting untuk menghindari kontak langsung dengan Ular Kobra Merah dan tidak mencoba mengganggunya.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Apabila Anda menemui Naja sputatrix atau mencurigai adanya keberadaannya, disarankan untuk menjaga jarak yang aman dan memberi tahu pihak yang berwenang agar dapat menanganinya dengan aman. Mengedepankan keselamatan diri dan memahami perilaku serta habitat ular ini akan membantu mencegah terjadinya insiden yang tidak diinginkan.</span></p>', '2023-06-12 07:04:10', '2023-06-12 07:04:10'),
(10, 6104125404720001, 2, 'Cicak Pelari Eurasia', 'TAKYDROMUS SEXLINEATUS', 'Reptil', 'Tidak Berbisa', 'LACERTIDAE', 'Riang Gede, Tabanan, Provinsi Bali, 82114, Indonesia', '-8.4827752', '115.1102548', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Takydromus sexlineatus, atau Cicak Pelari Eurasia, adalah salah satu spesies cicak yang menarik dan unik. Cicak ini memiliki ciri khas berupa ekor yang panjang, ramping, dan memiliki kemampuan berlari dengan cepat. Berikut adalah beberapa informasi lebih lanjut mengenai Takydromus sexlineatus:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Cicak Pelari Eurasia memiliki penampilan yang mencolok dengan tubuh ramping berukuran sedang, mencapai panjang sekitar 20 hingga 25 cm, termasuk panjang ekor mereka. Warna tubuhnya biasanya hijau zaitun atau cokelat keabu-abuan, dengan garis-garis hitam atau kecokelatan yang memanjang sepanjang tubuhnya. Warna yang tersembunyi membantu mereka menyatu dengan lingkungan sekitar mereka.</span></p>', '2023-06-12 07:06:32', '2023-06-12 07:06:32'),
(11, 6104120906980001, 1, 'Kadal Sungai Brooke', 'TROPIDOPHORUS BROOKEI', 'Reptil', 'Tidak Berbisa', 'SCINCIDAE', 'Kalimantan Tengah, Kalimantan, Indonesia', '-0.3258843', '113.8397466', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Kadal Sungai Brooke memiliki tubuh yang ramping dan panjang, dengan panjang rata-rata sekitar 15 hingga 20 cm. </span><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Warna tubuh mereka umumnya cokelat keabu-abuan dengan pola bercak-bercak gelap yang mencolok di sepanjang tubuh mereka. </span><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Mereka memiliki ekor yang panjang dan kepala yang agak melebar.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Persebaran:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Tropidophorus brookei merupakan spesies endemik di Borneo, terutama di wilayah Kalimantan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Mereka biasanya ditemukan di sekitar sungai, rawa-rawa, dan habitat air tawar lainnya, termasuk hutan dataran rendah dan hutan pegunungan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Kadal Sungai Brooke adalah hewan yang aktif pada siang hari. Mereka lebih suka berada di dekat perairan dan sering kali terlihat di sekitar tepi sungai atau di antara vegetasi yang lebat.</span></p>', '2023-06-12 07:08:55', '2023-06-12 07:08:55'),
(12, 6104120906980001, 2, 'Ular Hijau Pulau', 'TRIMERESURUS INSULARIS', 'Reptil', 'Berbisa', 'VIPERIDAE', 'Hulu Sungai, Ketapang, Kalimantan Barat, Indonesia', '-1.1027517', '110.8563212', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Ular Hijau Pulau memiliki tubuh yang ramping dan ukuran sedang, dengan panjang rata-rata antara 70 hingga 90 cm. </span><span lang=\"EN-US\">Warna tubuh mereka umumnya hijau cerah, sering kali dengan pola belang-belang hitam yang kontras. Pola dan warna tubuh dapat bervariasi tergantung pada individu dan habitat tempat mereka tinggal. </span><span lang=\"EN-US\">Ciri khasnya adalah keberadaan sisik-sisik tegak di atas mata yang memberikan tampilan seperti alis yang menonjol.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Ular Hijau Pulau aktif pada malam hari dan sering ditemukan beristirahat di atas pohon atau semak pada siang hari.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Mereka adalah ular berbisa yang menggunakan bisa mereka untuk menangkap dan melumpuhkan mangsanya, yang terdiri dari serangga, katak, dan kadang-kadang juga burung kecil.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Trimeresurus insularis cenderung memiliki sifat yang agresif jika merasa terancam dan mungkin menggigit sebagai respons pertahanan. Oleh karena itu, penting untuk menjaga jarak yang aman dan menghindari kontak langsung dengan ular ini saat berada di habitat mereka.</span></p>', '2023-06-12 07:11:28', '2023-06-12 07:11:28'),
(13, 6104125404720001, 1, 'Katak Gigi Tajam', 'ANSONIA SPINULIFER', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Bayung Lencir, Musi Banyuasin, Sumatera Selatan, Indonesia', '-1.8794164', '103.6774538', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">a</span><span lang=\"EN-US\">nsonia spinulifer, juga dikenal sebagai Katak Gigi Tajam, adalah spesies amfibi endemik yang ditemukan di Indonesia, tepatnya di pulau Sumatra dan Kalimantan. </span><span lang=\"EN-US\">Katak Gigi Tajam memiliki ukuran tubuh yang relatif kecil, dengan panjang mencapai sekitar 3 hingga 4,5 cm. </span><span lang=\"EN-US\">Mereka memiliki tubuh yang kompak dan kepala yang sedikit menonjol. Kulitnya kasar dan berduri, dengan tonjolan-tonjolan kecil di bagian punggung dan sisi tubuhnya. </span><span lang=\"EN-US\">Warna tubuh mereka bervariasi, tetapi umumnya cokelat gelap hingga hitam, dengan bintik-bintik atau corak berwarna cerah yang membentuk pola yang unik di tubuhnya.</span></p>', '2023-06-12 07:13:30', '2023-06-12 07:13:30'),
(14, 6104120906980001, 2, 'Katak Gigi Tajam', 'ANSONIA SPINULIFER', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Pangkal Bulian, Sarolangun, Jambi, Indonesia', '-2.1065925', '102.6720622', '<p class=\"MsoNormal\" style=\"text-indent: 0cm;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">a</span><span lang=\"EN-US\">nsonia spinulifer, juga dikenal sebagai Katak Gigi Tajam, adalah spesies amfibi endemik yang ditemukan di Indonesia, tepatnya di pulau Sumatra dan Kalimantan. Berikut adalah beberapa informasi tentang Ansonia spinulifer:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Gigi Tajam memiliki ukuran tubuh yang relatif kecil, dengan panjang mencapai sekitar 3 hingga 4,5 cm.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka memiliki tubuh yang kompak dan kepala yang sedikit menonjol. Kulitnya kasar dan berduri, dengan tonjolan-tonjolan kecil di bagian punggung dan sisi tubuhnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Warna tubuh mereka bervariasi, tetapi umumnya cokelat gelap hingga hitam, dengan bintik-bintik atau corak berwarna cerah yang membentuk pola yang unik di tubuhnya.</span></p>', '2023-06-12 07:18:18', '2023-06-12 07:18:18'),
(15, 6104125404720001, 2, 'Katak Jangkrik', 'DUTTAPHRYNUS MELANOSTICTUS', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Muara Wahau, Kutai Timur, Kalimantan Timur, Indonesia', '1.4764367', '116.7610174', '<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Duttaphrynus melanostictus, juga dikenal sebagai Katak Jangkrik atau Katak Katak, adalah spesies amfibi yang dapat ditemui di berbagai wilayah Asia, termasuk Indonesia. Berikut adalah beberapa informasi tentang Duttaphrynus melanostictus:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Jangkrik memiliki ukuran tubuh yang relatif besar, dengan panjang mencapai sekitar 12 hingga 15 cm. </span><span lang=\"EN-US\">Mereka memiliki tubuh yang gemuk dan bulat, dengan kulit yang kasar dan berbintik-bintik gelap atau belang-belang pada bagian punggungnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Warna tubuhnya bervariasi, tetapi umumnya berwarna cokelat atau abu-abu dengan pola bintik-bintik atau garis-garis yang lebih gelap.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Persebaran:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Duttaphrynus melanostictus tersebar luas di berbagai negara Asia, termasuk Indonesia, India, Thailand, Malaysia, Filipina, dan sebagian besar wilayah Asia Tenggara.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka dapat ditemui di berbagai habitat, termasuk hutan-hutan lebat, lahan pertanian, dan daerah perkotaan. Mereka memiliki kemampuan untuk beradaptasi dengan lingkungan yang berbeda.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Jangkrik adalah hewan yang aktif pada malam hari. Mereka seringkali terlihat di sekitar daerah yang lembap seperti kolam, rawa-rawa, dan sawah.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Makanan utama Duttaphrynus melanostictus terdiri dari serangga, laba-laba, cacing, dan serangkaian makhluk kecil lainnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka memiliki kemampuan untuk mengeluarkan suara yang keras dan berirama selama musim kawin, yang bertujuan untuk menarik pasangan.</span></p>', '2023-06-12 08:58:17', '2023-06-12 08:58:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `super_admin`
--

INSERT INTO `super_admin` (`id`, `nama`, `email`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'superadmin@gmail.com', '$2y$10$VkiX4dNCK.kebVx6pRkTWe9mvzbdLy7e6UK9G4PoEMq5ItEhO1nKS', 'app/super-admin/1689418299-uWX8m.png', '2023-07-15 10:51:39', '2023-07-15 10:51:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` longtext NOT NULL,
  `gambar_user` varchar(200) NOT NULL,
  `level` enum('Super Admin','Admin','Anggota') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `gambar_user`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Erwinda Putri', 'erwindaputri@gmail.com', '$2y$10$xiG4Y7iXDM6T0HhuPuhMXOdGc8w43sPEIXtcHXY6X7KPTMiqntwCG', 'app/anggota/1687800848-ZYqfT.jpg', 'Super Admin', '2023-06-26 10:09:08', '2023-06-26 10:34:08'),
(3, 'Danu Pudjiastuti lestrai', 'danu@gmail.com', '$2y$10$c34wTxd3PPHeYzcJAZGcsuLS8P0BPiTVzSpzBJ2zu6GmP5pbqK7Le', 'app/anggota/1687800863-qrIwF.jpg', 'Admin', '2023-06-26 10:23:17', '2023-07-07 10:50:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nik`) USING BTREE;

--
-- Indeks untuk tabel `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_spesies`
--
ALTER TABLE `galeri_spesies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rescue`
--
ALTER TABLE `rescue`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spesies`
--
ALTER TABLE `spesies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri_spesies`
--
ALTER TABLE `galeri_spesies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `spesies`
--
ALTER TABLE `spesies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
