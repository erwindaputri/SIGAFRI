-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 10.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afri`
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
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$q0ksul2mKsYnlLcPA7mKMeJS3ftjfqhybgxWCWD8sULmHrxOlMwKa', 'app/admin/1691338987-SdlUP.png', '2023-08-06 16:23:07', '2023-08-06 16:23:07'),
(2, 'Erwinda Putri', 'erwindaputri123@gmail.com', 'Admin cantik', '$2y$10$g/WzIbfl48DiagTGEIaxieboEBYC1gxN89G6sPug1ZFAgbT5bFsG.', 'app/admin/1689945241-VNSiV.png', '2023-07-24 07:00:03', '2023-07-24 07:00:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nomor` char(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confir_password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nomor`, `nama`, `email`, `username`, `password`, `confir_password`, `alamat`, `poto`, `status`, `created_at`, `updated_at`) VALUES
('0857532911234', 'riska febriani', 'riska@gmail.com', 'riska', '$2y$10$jd391nZItdSylSrsy9DsSuj.PXPKxjYdSejha2fvetxOq2i8Sp7nK', '12345', 'pelang', 'app/anggota/1691339246-zWi8T.png', 2, '2023-08-14 09:00:33', '2023-08-14 09:00:33'),
('0857532911812', 'mimi', 'mimi@gmail.com', 'mimi', '$2y$10$vaYpMN2an7Nw/VxyBVS8nefEl5REd6t84fAdMyhRnxn8n9TROUe9y', '12345', 'ketapang', 'app/anggota/1690257232-Fuhyf.png', 2, '2023-07-25 03:53:52', '2023-07-25 03:53:52'),
('08575329234', 'feri', 'fer@gmail.com', 'fer', '$2y$10$LkdLmvyakFME1V.sHiyyauf07p5lslFTxR0sP32nkfwQX7/QBDF.C', '12345', 'jauh', 'app/anggota/1690685554-qZOYg.png', 2, '2023-07-30 02:54:30', '2023-07-30 02:54:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(200) NOT NULL,
  `kategori_berita` varchar(200) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `nama_berita`, `kategori_berita`, `gambar_berita`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'Pendampingan Herpetologi Siswa/i SMK Negeri 1 Ketapang', 'Trip', 'app/gambar_berita/16885659155.jpg', '<p>Hallo sobat AFRIER<br>Minggu kemarin teman-teman&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafriketapang/?hl=id\">@dpdafriketapang</a>&nbsp;melakukan pendampingan kepada Siswa dan Siswi dari&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/smk_negeri1ketapang/?hl=id\">@smk_negeri1ketapang</a><br>.<br>.<br>.<br>Mereka melakukan pendakian ringan di Bukit Lubuk Baji, dimana bukit ini masuk dalam Kawasan Taman Nasional Gunung Palung serta mendapatkan pembelajaran dari kawan-kawan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/yayasan_palung/?hl=id\">@yayasan_palung</a>&nbsp;dan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/btn_gn_palung/?hl=id\">@btn_gn_palung</a><br>.<br>.<br>.<br>Semoga ilmunya berguna di kemudian hari ya</p>', '2023-07-05 14:05:15', '2023-07-21 09:50:07'),
(8, 'Getring bulanan Yayasan Amfibi Reptil Indonesia', 'Kegiatan', 'app/gambar_berita/16885660678.jpg', '<p>Hallo sobat AFRIER<br>akhir bulan ini&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafriketapang/?hl=id\">@dpdafriketapang</a>&nbsp;kembali melaksanakan Gathring bulanan ya.<br>.<br>.<br>.<br>.<br>Pengen kenal, lihat, dan pegang reptil lainnya?<br>Pantau terus media sosial kita dan ikut ramaikan gathring nya.<br>.<br>.<br>.<br>Jangan lupa ajak keluarga, ayah, ibu, adik, kakak, nenek, selingkuhan, dan simpanan ya biar selalu ramai.<br>.<br>.<br>.<br>See you next time</p>', '2023-07-05 14:07:47', '2023-07-05 14:07:47'),
(9, 'Tamasya ke Lubuk Baji', 'Trip', 'app/gambar_berita/16885664931.jpg', '<p>Alhamdulillah tamasya ke Lubuk Baji telah usai, namun ada berbeda dari tamasya kali ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Dimana kami juga berusaha membawa turun sampah yang menumpuk di atas Lubuk Baji agar tidak mencemari lingkungan asri di alamnya.</p>\r\n<div class=\"_a9zs\">&nbsp;</div>\r\n<div class=\"x9f619 xjbqb8w x78zum5 x168nmei x13lgxp2 x5pf9jr xo71vjh x1xmf6yo x12nagc x1n2onr6 x1plvlek xryxfnj x1c4vz4f x2lah0s xdt5ytf xqjyukv x1qjc9v5 x1oa3qoh x1nhvcw1\">&nbsp;</div>', '2023-07-05 14:14:53', '2023-07-05 14:14:53'),
(10, 'Pemantapan Materi Yayasan  AFRRI', 'Seminar', 'app/gambar_berita/16896807809.jpg', '<p>Hallo sobat AFRIER dalam rangka melatih soft skill pengurus Yayasan Amfibi Reptil Indonesia, Kali ini Afri melakukan kegiatan penyurunan modul edukasi Yayasan hingga pemantapan modul edukasi yang menitik fokuskan pada pelajar SMP, SMA dan perguruan tinggi.</p>', '2023-07-18 11:46:20', '2023-07-18 11:46:20'),
(11, 'Edukasi di SMA N 1 Ketapang', 'Seminar', 'app/gambar_berita/16896812299.jpg', '<p>Pemateri :&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/ekatriprasetiyaofficial/\">@ekatriprasetiyaofficial</a><br>Fg :&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/ff18.ktp_/\">@ff18.ktp_</a></p>', '2023-07-18 11:53:49', '2023-07-18 11:53:49'),
(12, 'Gathring AFRI', 'Seminar', 'app/gambar_berita/16896815085.jpg', '<p>Hallo sobat AFRIER<br>akhir bulan ini&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafriketapang/\">@dpdafriketapang</a>&nbsp;kembali melaksanakan Gathring bulanan ya.<br><br>Pengen kenal, lihat, dan pegang reptil lainnya?<br>Pantau terus media sosial kita dan ikut ramaikan gathring nya.<br><br>Jangan lupa ajak keluarga, ayah, ibu, adik, kakak, nenek, selingkuhan, dan simpanan ya biar selalu ramai.</p>', '2023-07-18 11:58:28', '2023-07-18 11:58:28'),
(13, 'Getring AFRI', 'Seminar', 'app/gambar_berita/16896817044.jpg', '<p>Nah kalo yang ini adalah giat gathring dan edukasi yang dilaksanakan oleh DPW AFRI Papua ya.<br><br>Gak kalah seru juga pastinya.<br><br>Yuk kinjungi giat gathring dan edukasi di daerah kalian.</p>', '2023-07-18 12:01:44', '2023-07-18 12:01:44'),
(14, 'Gathring AFRI Taman Kota', 'Seminar', 'app/gambar_berita/16896818383.jpg', '<p>Hallo guys, hari ini Yayasan Amfibi Reptil Indonesia kembali melaksanakan gathring rutin bulanan dalam rangka mengedukasi masyarakat setempat.</p>', '2023-07-18 12:03:58', '2023-07-18 12:03:58'),
(15, 'Gath Taman Kota Landak', 'Seminar', 'app/gambar_berita/16896820769.jpg', '<div class=\"_a9zs\">\r\n<p class=\"_aacl _aaco _aacu _aacx _aad7 _aade\" dir=\"auto\">Yuk kita intip keseruan AFRIER&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafrilandak/\">@dpdafrilandak</a>&nbsp;lakukan gath di Taman Kota Intan Landak buat edukasi masyarakat</p>\r\n</div>\r\n<p class=\"x9f619 xjbqb8w x78zum5 x168nmei x13lgxp2 x5pf9jr xo71vjh x1xmf6yo x12nagc x1n2onr6 x1plvlek xryxfnj x1c4vz4f x2lah0s xdt5ytf xqjyukv x1qjc9v5 x1oa3qoh x1nhvcw1\">&nbsp;</p>', '2023-07-18 12:07:56', '2023-07-18 12:07:56'),
(16, 'Refleksi 5 Tahun amfibi reptil indonesia', 'Kegiatan', 'app/gambar_berita/16896824248.jpg', '<p>Hallo sahabat AFRIER Rangkaian demi rangkaian kegiatan telah kita lewati.&nbsp;5 Tahun Yayasan Afri berdiri dan berkiprah di dunia konservasi amfibi dan reptil.&nbsp;Semoga pada refleksi 5 Tahun amfibi reptil indonesia dapat berkomitmen dalam membangun peradaban.&nbsp;Terimakasih bapak&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/martin_rantan/\">@martin_rantan</a>&nbsp;selaku pimpinan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/ketapangkab/\">@ketapangkab</a>&nbsp;yang meluangkan waktunya bersama bapak&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/febri.fhatir/\">@febri.fhatir</a>&nbsp;selaku ketua DPRD, terimakasih pula kepada mas&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/heru.gundul/\">@heru.gundul</a> yang memberikan waktunya untuk mengisi Talkshow di Pendopo Bupati Ketapang sebagai Narasumber.</p>', '2023-07-18 12:13:44', '2023-07-18 12:13:44'),
(17, 'Open recruitmen', 'Kegiatan', 'app/gambar_berita/16896826205.jpg', '<p>Hallo sahabat AFRIER<br>ingin ambil bagian dalam dunia herpetofauna?&nbsp;Atau ingin jadi bagian dari keluarga AFRI?<br>Yuk gas kan.&nbsp;Saat ini Sobat AFRI membuka open recruitmen dan mencari koordinator di daerah seluruh Indonesia lo.&nbsp;jadi pengurus AFRI tentu banyak untungnya 💪💪💪💪<br><br>Tertarik?<br>Isi link berikut :<br>Https://bit.ly/rekruitmenafri2021</p>', '2023-07-18 12:17:00', '2023-07-18 12:17:00'),
(18, 'MOU beasiswa POLITAP', 'Kegiatan', 'app/gambar_berita/16896827677.jpg', '<p>Hallo sahabat AFRIER<br>Kali ini kami berkunjung ke Politeknik Negeri Ketapang lo.<br><br>Dimana dalam kunjungannya, Yayasan Amfibi Reptil Indonesia akan mengadakan MOU yang ke dua terkait beasiswa Kuliah Gratis bagi yang tidak mampu dan atau yang berprestasi.<br><br>Rencananya Beasiswa akan dimulai dari tahun depan (2022)<br><br>Terimakasih buat&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/politekniknegeriketapang/\">@politekniknegeriketapang</a><br>Bersama kita bangun vokasi dari desa</p>', '2023-07-18 12:19:27', '2023-07-18 12:19:27'),
(19, 'Katak Endemik Borneo', 'Kegiatan', 'app/gambar_berita/16896829392.jpg', '<p>Haloo sahabat AFRIER<br>mimin punya info keren nih.<br>Ternyata Kalimantan memiliki beberapa satwa endimik lo.<br>.Salah satunya adalah Barbourula kalimantanensis, selain katak ini adalah katak endemik, ternyata katak ini juga unik lo.<br><br>Dimana katak ini tidak memiliki paru-paru seperti kebanyakan kataknlainnya, dia juga bernapas menggunakan kulitnya. jadi itu informasi dari kami, jika anda menemukan hewan unik lainnya silahkan tag kami, dan kami akan berusaha untuk menjawabnya.<br><br>Trimakasih<br>&copy; :&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/sm.syaraa/\">@sm.syaraa</a></p>', '2023-07-18 12:22:19', '2023-07-18 12:22:19'),
(20, 'Kegiatan Amal Peduli Banjir Ketapang', 'Kegiatan', 'app/gambar_berita/16896831516.jpg', '<p>Hallo Sahabat AFRIER kembali hingga saat ini kami masih terus menyalurkan bantuan berupa sembako, susu bayi, popok, dan minyak kayuputih sebanyak 80 paket kepada masyarakat Desa Tanjungpasar, Kabupaten Ketapang, Kalimantan Barat yang terdampak bencana banjir.</p>', '2023-07-18 12:25:51', '2023-07-18 12:25:51'),
(21, 'Penyaluran Bantuan Banjir Masyarakat Tanjung Pasar', 'Kegiatan', 'app/gambar_berita/16896832618.jpg', '<p>Hallo Sahabat AFRIER kembali hingga saat ini kami masih terus menyalurkan bantuan berupa sembako, susu bayi, popok, dan minyak kayuputih sebanyak 80 paket kepada masyarakat Desa Tanjungpasar, Kabupaten Ketapang, Kalimantan Barat yang terdampak bencana banjir.</p>', '2023-07-18 12:27:41', '2023-07-18 12:27:41'),
(22, 'Silahturahmi Bersama Ketua DPRD Ketapang', 'Kegiatan', 'app/gambar_berita/16896834381.jpg', '<p>Hallo sobat AFRIER dalam rangka membangun sinergi antara Pemerintah Daerah dan Yayasan. Kali ini Yayasan Amfibi Reptil Indonesia melakukan kunjungan ke Sekretariat Dewan Perwakilan Rakyat Daerah Kabupaten Ketapang.<br>.<br>.<br>.<br>Adapun hasil pertemuan membahas seputar kegiatan kepeloporan, peningkatan kapasitas SDM, serta fasilitasi program Yayasan.</p>', '2023-07-18 12:30:38', '2023-07-18 12:30:38'),
(23, 'Refleksi 5 Tahun AFRI', 'Kegiatan', 'app/gambar_berita/16896836014.jpg', '<p>Hallo sahabat AFRIER Rangkaian demi rangkaian kegiatan telah kita lewati.<br>.<br>.<br>5 Tahun Yayasan Afri berdiri dan berkiprah di dunia konservasi amfibi dan reptil.<br>.<br>Semoga pada refleksi 5 Tahun amfibi reptil indonesia dapat berkomitmen dalam membangun peradaban.<br>.<br>Terimakasih bapak&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/martin_rantan/\">@martin_rantan</a>&nbsp;selaku pimpinan&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/ketapangkab/\">@ketapangkab</a>&nbsp;yang meluangkan waktunya bersama bapak&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/febri.fhatir/\">@febri.fhatir</a>&nbsp;selaku ketua DPRD, terimakasih pula kepada mas&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/heru.gundul/\">@heru.gundul</a> yang memberikan waktunya untuk mengisi Talkshow di Pendopo Bupati Ketapang sebagai Narasumber.</p>', '2023-07-18 12:33:21', '2023-07-18 12:33:21'),
(24, 'DIKSAR  Kayong Utara', 'Trip', 'app/gambar_berita/16896839673.jpg', '<p>Selamat kepada&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/dpdafrikayong/\">@dpdafrikayong</a>&nbsp;atas terlaksananya kegiatan DIKSAR yang di hadiri langsung oleh Ketua Umum DPP AFRI&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/fhio_kasra_gerung/\">@fhio_kasra_gerung</a>&nbsp;dan Kepala DIKLAT&nbsp;<a class=\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/senja_n_pagi/\">@senja_n_pagi</a>&nbsp;pada tanggal 04-05 Januari 2020 di Kabupaten Kayong Utara.<br><br>Semoga menjadi Kader yang berguna untuk masyarakat luas</p>', '2023-07-18 12:39:27', '2023-07-18 12:39:27'),
(26, 'df', 'Seminar', 'app/gambar_berita/16902085833.jpg', '<p>dfdb b</p>', '2023-07-24 14:23:03', '2023-07-24 14:23:03'),
(27, 'ef', 'Kegiatan', 'app/gambar_berita/16902086161.jpg', '<p>dcfs</p>', '2023-07-24 14:23:36', '2023-07-24 14:23:36'),
(28, 'hjhjk', 'Seminar', 'app/gambar_berita/169055114210.jpg', '<p>tfgfh</p>', '2023-07-28 13:32:22', '2023-07-28 14:00:50'),
(29, 'fe', 'Kegiatan', 'app/gambar_berita/16905511663.png', '<p>dfef</p>', '2023-07-28 13:32:46', '2023-07-28 14:15:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) NOT NULL,
  `nama_ebook` varchar(200) NOT NULL,
  `penulis` varchar(255) DEFAULT 'belum ada penulis',
  `tahun` varchar(255) DEFAULT '2016',
  `sampul` varchar(200) NOT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `nama_ebook`, `penulis`, `tahun`, `sampul`, `pdf`, `created_at`, `updated_at`) VALUES
(7, 'Ansonia spinulifer, Spiny Slender Toad', 'belum ada penulis', '2016', 'app/sampul/16865864347.png', 'app/pdf/16913742756.pdf', '2023-06-12 09:13:54', '2023-08-07 02:11:15'),
(8, 'Chalcorana chalconota, Schlegel\'s Fro', 'belum ada penulis', '2016', 'app/sampul/16865865603.png', 'app/pdf/16865865605.pdf', '2023-06-12 09:16:00', '2023-06-12 09:16:00'),
(9, 'Microhyla achatina, Javan Chorus Fro', 'belum ada penulis', '2016', 'app/sampul/168658676210.png', 'app/pdf/16865867629.pdf', '2023-06-12 09:19:22', '2023-06-12 09:19:22');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(31, 8, 'app/spesies/16865784596.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(32, 8, 'app/spesies/16865784593.jpg', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
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
(47, 16, 'app/spesies/168942405110.jpg', '2023-07-15 12:27:31', '2023-07-15 12:27:31'),
(49, 17, 'app/spesies/16900079159.jpg', '2023-07-22 06:38:35', '2023-07-22 06:38:35'),
(50, 18, 'app/spesies/16900091708.jpg', '2023-07-22 06:59:30', '2023-07-22 06:59:30'),
(51, 17, 'app/spesies/16900456284.jpg', '2023-07-22 17:07:08', '2023-07-22 17:07:08'),
(53, 17, 'app/spesies/16900456285.jpg', '2023-07-22 17:07:08', '2023-07-22 17:07:08'),
(54, 19, 'app/spesies/16900489454.jpg', '2023-07-22 18:02:25', '2023-07-22 18:02:25'),
(55, 19, 'app/spesies/16900489456.jpg', '2023-07-22 18:02:25', '2023-07-22 18:02:25'),
(56, 19, 'app/spesies/16900489453.jpg', '2023-07-22 18:02:25', '2023-07-22 18:02:25'),
(57, 19, 'app/spesies/16900489457.jpg', '2023-07-22 18:02:25', '2023-07-22 18:02:25'),
(58, 19, 'app/spesies/16900489456.jpg', '2023-07-22 18:02:25', '2023-07-22 18:02:25'),
(59, 15, 'app/spesies/16901744736.jpg', '2023-07-24 04:54:33', '2023-07-24 04:54:33'),
(74, 7, 'app/spesies/16913740649.jpg', '2023-07-24 13:37:11', '2023-08-07 02:07:44'),
(75, 7, 'app/spesies/16902058318.jpg', '2023-07-24 13:37:11', '2023-07-24 13:37:11'),
(77, 7, 'app/spesies/16902058312.jpg', '2023-07-24 13:37:11', '2023-07-24 13:37:11'),
(78, 20, 'app/spesies/16902068905.jpg', '2023-07-24 13:54:50', '2023-07-24 13:54:50'),
(79, 20, 'app/spesies/16902068904.jpg', '2023-07-24 13:54:50', '2023-07-24 13:54:50'),
(80, 20, 'app/spesies/169020689010.jpg', '2023-07-24 13:54:50', '2023-07-24 13:54:50'),
(81, 20, 'app/spesies/16902068904.jpg', '2023-07-24 13:54:50', '2023-07-24 13:54:50'),
(82, 21, 'app/spesies/16902076646.png', '2023-07-24 14:07:44', '2023-07-24 14:07:44'),
(83, 21, 'app/spesies/16902076647.png', '2023-07-24 14:07:44', '2023-07-24 14:07:44'),
(84, 21, 'app/spesies/16902076648.png', '2023-07-24 14:07:44', '2023-07-24 14:07:44'),
(85, 21, 'app/spesies/16902076646.png', '2023-07-24 14:07:44', '2023-07-24 14:07:44'),
(86, 21, 'app/spesies/16902076643.png', '2023-07-24 14:07:44', '2023-07-24 14:07:44'),
(87, 22, 'app/spesies/16906903368.jpg', '2023-07-30 04:12:16', '2023-07-30 04:12:16'),
(89, 23, 'app/spesies/16913725013.jpg', '2023-08-07 01:41:41', '2023-08-07 01:41:41'),
(90, 24, 'app/spesies/16913739898.jpg', '2023-08-07 02:06:29', '2023-08-07 02:06:29'),
(91, 25, 'app/spesies/16913751125.png', '2023-08-07 02:25:12', '2023-08-07 02:25:12');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rescue`
--

INSERT INTO `rescue` (`id`, `nomor_telepon`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(10, '+62 823-5308-8973', 'afri@gmail.com', 'Kota Ketapang dan sekitar', '2023-08-02 13:15:38', '2023-08-05 02:08:59');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spesies`
--

INSERT INTO `spesies` (`id`, `id_anggota`, `level`, `nama_spesies`, `nama_latin`, `kategori_spesies`, `kategori_jenis`, `famili`, `nama_daerah`, `lat`, `lng`, `deskripsi`, `created_at`, `updated_at`) VALUES
(8, 6104125404720001, 1, 'Ular Naga Sungai', 'MATICORA INTESTINALIS', 'Reptil', 'Berbisa', 'ELAPIDAE', 'Dharmasraya, Sumatra Barat, Indonesia', '-1.4769425', '101.5424250', '<p><span lang=\"EN-US\" style=\"font-size: 12pt; line-height: 150%; font-family: arial, helvetica, sans-serif;\">Maticora intestinalis, juga dikenal sebagai Ular Naga Sungai, adalah ular berbisa yang dapat ditemukan di beberapa wilayah Asia Tenggara, termasuk Indonesia. Ular ini memiliki tubuh yang besar dan kuat, dengan panjang mencapai 2 hingga 3 meter. Tubuhnya berwarna cokelat atau abu-abu dengan pola belang atau bintik-bintik gelap yang mencolok. Kepalanya lebar dan kuat, dengan mata yang relatif kecil. Ular Naga Sungai biasanya hidup di daerah aliran sungai, rawa-rawa, dan tepi sungai. Mereka adalah predator yang memangsa ikan, katak, mamalia kecil, dan burung air. Penting untuk diingat bahwa Maticora intestinalis adalah ular berbisa yang dapat menghasilkan racun berbahaya. Jika Anda melihat ular ini, penting untuk menjaga jarak yang aman dan tidak mengganggunya. Jika terjadi gigitan, segera cari bantuan medis darurat karena bisa dari ular ini dapat menyebabkan efek yang serius pada kesehatan manusia.</span></p>', '2023-06-12 07:00:59', '2023-06-12 07:00:59'),
(9, 6104125404720001, 2, 'Ular Kobra Merah', 'NAJA SPUTATRIX', 'Reptil', 'Berbisa', 'ELAPIDAE', 'Waropen, Papua, Indonesia', '-2.7509422', '137.2756048', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Naja sputatrix, yang lebih dikenal sebagai Ular Kobra Merah, adalah salah satu spesies ular berbisa yang dapat ditemukan di Asia Tenggara, termasuk di beberapa wilayah Indonesia. Ular ini memiliki penampilan yang mencolok, dengan tubuh yang besar dan panjang mencapai 2 meter atau lebih. Warna tubuhnya umumnya cokelat atau kecokelatan dengan pola belang-belang gelap yang khas. Kepalanya yang lebar dan runcing serta kemampuannya untuk mengembangkan leher saat siaga membuatnya menjadi ular yang menakutkan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Naja sputatrix tersebar luas di berbagai habitat, mulai dari hutan dataran rendah hingga hutan pegunungan, dan bahkan di daerah pertanian. Keberadaannya dapat ditemukan di beberapa pulau Indonesia seperti Sumatra, Kalimantan, Jawa, Sulawesi, dan Papua. Meskipun sering dijumpai di alam liar, Ular Kobra Merah juga dapat ditemukan di sekitar pemukiman manusia, menjadikannya sebagai salah satu ular berbisa yang lebih sering berinteraksi dengan manusia.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Seperti kebanyakan kobra, Naja sputatrix memiliki bisa yang sangat berbahaya. Gigitannya dapat menyebabkan efek neurotoksik yang parah pada manusia, termasuk kelumpuhan otot, gangguan pernapasan, dan dalam kasus yang ekstrem, dapat menyebabkan kematian. Oleh karena itu, sangat penting untuk menghindari kontak langsung dengan Ular Kobra Merah dan tidak mencoba mengganggunya.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Apabila Anda menemui Naja sputatrix atau mencurigai adanya keberadaannya, disarankan untuk menjaga jarak yang aman dan memberi tahu pihak yang berwenang agar dapat menanganinya dengan aman. Mengedepankan keselamatan diri dan memahami perilaku serta habitat ular ini akan membantu mencegah terjadinya insiden yang tidak diinginkan.</span></p>', '2023-06-12 07:04:10', '2023-06-12 07:04:10'),
(10, 6104125404720001, 2, 'Cicak Pelari Eurasia', 'TAKYDROMUS SEXLINEATUS', 'Reptil', 'Tidak Berbisa', 'LACERTIDAE', 'Riang Gede, Tabanan, Provinsi Bali, 82114, Indonesia', '-8.4827752', '115.1102548', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Takydromus sexlineatus, atau Cicak Pelari Eurasia, adalah salah satu spesies cicak yang menarik dan unik. Cicak ini memiliki ciri khas berupa ekor yang panjang, ramping, dan memiliki kemampuan berlari dengan cepat. Berikut adalah beberapa informasi lebih lanjut mengenai Takydromus sexlineatus:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Cicak Pelari Eurasia memiliki penampilan yang mencolok dengan tubuh ramping berukuran sedang, mencapai panjang sekitar 20 hingga 25 cm, termasuk panjang ekor mereka. Warna tubuhnya biasanya hijau zaitun atau cokelat keabu-abuan, dengan garis-garis hitam atau kecokelatan yang memanjang sepanjang tubuhnya. Warna yang tersembunyi membantu mereka menyatu dengan lingkungan sekitar mereka.</span></p>', '2023-06-12 07:06:32', '2023-06-12 07:06:32'),
(11, 6104120906980001, 1, 'Kadal Sungai Brooke', 'TROPIDOPHORUS BROOKEI', 'Reptil', 'Tidak Berbisa', 'SCINCIDAE', 'Kalimantan Tengah, Kalimantan, Indonesia', '-0.3258843', '113.8397466', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Kadal Sungai Brooke memiliki tubuh yang ramping dan panjang, dengan panjang rata-rata sekitar 15 hingga 20 cm. </span><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Warna tubuh mereka umumnya cokelat keabu-abuan dengan pola bercak-bercak gelap yang mencolok di sepanjang tubuh mereka. </span><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Mereka memiliki ekor yang panjang dan kepala yang agak melebar.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Persebaran:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Tropidophorus brookei merupakan spesies endemik di Borneo, terutama di wilayah Kalimantan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Mereka biasanya ditemukan di sekitar sungai, rawa-rawa, dan habitat air tawar lainnya, termasuk hutan dataran rendah dan hutan pegunungan.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\" style=\"font-family: arial, helvetica, sans-serif;\">Kadal Sungai Brooke adalah hewan yang aktif pada siang hari. Mereka lebih suka berada di dekat perairan dan sering kali terlihat di sekitar tepi sungai atau di antara vegetasi yang lebat.</span></p>', '2023-06-12 07:08:55', '2023-06-12 07:08:55'),
(12, 6104120906980001, 2, 'Ular Hijau Pulau', 'TRIMERESURUS INSULARIS', 'Reptil', 'Berbisa', 'VIPERIDAE', 'Hulu Sungai, Ketapang, Kalimantan Barat, Indonesia', '-1.1027517', '110.8563212', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Ular Hijau Pulau memiliki tubuh yang ramping dan ukuran sedang, dengan panjang rata-rata antara 70 hingga 90 cm. </span><span lang=\"EN-US\">Warna tubuh mereka umumnya hijau cerah, sering kali dengan pola belang-belang hitam yang kontras. Pola dan warna tubuh dapat bervariasi tergantung pada individu dan habitat tempat mereka tinggal. </span><span lang=\"EN-US\">Ciri khasnya adalah keberadaan sisik-sisik tegak di atas mata yang memberikan tampilan seperti alis yang menonjol.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Ular Hijau Pulau aktif pada malam hari dan sering ditemukan beristirahat di atas pohon atau semak pada siang hari.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Mereka adalah ular berbisa yang menggunakan bisa mereka untuk menangkap dan melumpuhkan mangsanya, yang terdiri dari serangga, katak, dan kadang-kadang juga burung kecil.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"EN-US\">Trimeresurus insularis cenderung memiliki sifat yang agresif jika merasa terancam dan mungkin menggigit sebagai respons pertahanan. Oleh karena itu, penting untuk menjaga jarak yang aman dan menghindari kontak langsung dengan ular ini saat berada di habitat mereka.</span></p>', '2023-06-12 07:11:28', '2023-06-12 07:11:28'),
(13, 6104125404720001, 1, 'Katak Gigi Tajam', 'ANSONIA SPINULIFER', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Bayung Lencir, Musi Banyuasin, Sumatera Selatan, Indonesia', '-1.8794164', '103.6774538', '<p class=\"MsoNormal\" style=\"text-indent: 0cm; text-align: justify;\" align=\"center\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">a</span><span lang=\"EN-US\">nsonia spinulifer, juga dikenal sebagai Katak Gigi Tajam, adalah spesies amfibi endemik yang ditemukan di Indonesia, tepatnya di pulau Sumatra dan Kalimantan. </span><span lang=\"EN-US\">Katak Gigi Tajam memiliki ukuran tubuh yang relatif kecil, dengan panjang mencapai sekitar 3 hingga 4,5 cm. </span><span lang=\"EN-US\">Mereka memiliki tubuh yang kompak dan kepala yang sedikit menonjol. Kulitnya kasar dan berduri, dengan tonjolan-tonjolan kecil di bagian punggung dan sisi tubuhnya. </span><span lang=\"EN-US\">Warna tubuh mereka bervariasi, tetapi umumnya cokelat gelap hingga hitam, dengan bintik-bintik atau corak berwarna cerah yang membentuk pola yang unik di tubuhnya.</span></p>', '2023-06-12 07:13:30', '2023-06-12 07:13:30'),
(14, 6104120906980001, 2, 'Katak Gigi Tajam', 'ANSONIA SPINULIFER', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Pangkal Bulian, Sarolangun, Jambi, Indonesia', '-2.1065925', '102.6720622', '<p class=\"MsoNormal\" style=\"text-indent: 0cm;\"><span lang=\"IN\" style=\"mso-ansi-language: IN;\">a</span><span lang=\"EN-US\">nsonia spinulifer, juga dikenal sebagai Katak Gigi Tajam, adalah spesies amfibi endemik yang ditemukan di Indonesia, tepatnya di pulau Sumatra dan Kalimantan. Berikut adalah beberapa informasi tentang Ansonia spinulifer:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Gigi Tajam memiliki ukuran tubuh yang relatif kecil, dengan panjang mencapai sekitar 3 hingga 4,5 cm.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka memiliki tubuh yang kompak dan kepala yang sedikit menonjol. Kulitnya kasar dan berduri, dengan tonjolan-tonjolan kecil di bagian punggung dan sisi tubuhnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Warna tubuh mereka bervariasi, tetapi umumnya cokelat gelap hingga hitam, dengan bintik-bintik atau corak berwarna cerah yang membentuk pola yang unik di tubuhnya.</span></p>', '2023-06-12 07:18:18', '2023-06-12 07:18:18'),
(15, 6104125404720001, 2, 'Katak Jangkrik', 'DUTTAPHRYNUS MELANOSTICTUS', 'Amfibi', 'Tidak Berbisa', 'BUFONIDAE', 'Muara Wahau, Kutai Timur, Kalimantan Timur, Indonesia', '1.4764367', '116.7610174', '<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Duttaphrynus melanostictus, juga dikenal sebagai Katak Jangkrik atau Katak Katak, adalah spesies amfibi yang dapat ditemui di berbagai wilayah Asia, termasuk Indonesia. Berikut adalah beberapa informasi tentang Duttaphrynus melanostictus:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Jangkrik memiliki ukuran tubuh yang relatif besar, dengan panjang mencapai sekitar 12 hingga 15 cm. </span><span lang=\"EN-US\">Mereka memiliki tubuh yang gemuk dan bulat, dengan kulit yang kasar dan berbintik-bintik gelap atau belang-belang pada bagian punggungnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Warna tubuhnya bervariasi, tetapi umumnya berwarna cokelat atau abu-abu dengan pola bintik-bintik atau garis-garis yang lebih gelap.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Persebaran:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Duttaphrynus melanostictus tersebar luas di berbagai negara Asia, termasuk Indonesia, India, Thailand, Malaysia, Filipina, dan sebagian besar wilayah Asia Tenggara.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka dapat ditemui di berbagai habitat, termasuk hutan-hutan lebat, lahan pertanian, dan daerah perkotaan. Mereka memiliki kemampuan untuk beradaptasi dengan lingkungan yang berbeda.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Sifat dan Perilaku:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Katak Jangkrik adalah hewan yang aktif pada malam hari. Mereka seringkali terlihat di sekitar daerah yang lembap seperti kolam, rawa-rawa, dan sawah.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Makanan utama Duttaphrynus melanostictus terdiri dari serangga, laba-laba, cacing, dan serangkaian makhluk kecil lainnya.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.8pt; text-indent: 0cm;\"><span lang=\"EN-US\">Mereka memiliki kemampuan untuk mengeluarkan suara yang keras dan berirama selama musim kawin, yang bertujuan untuk menarik pasangan.</span></p>', '2023-06-12 08:58:17', '2023-06-12 08:58:17'),
(22, 857532911812, 2, 'Ular Krait Putih', 'ANSONIA SPINULIFER', 'Reptil', 'Berbisa', 'BUFONIDAE', 'Hulu Sungai, Ketapang, Kalimantan Barat, Indonesia', '-0.9475276', '110.8081055', 'dkdf', '2023-07-30 04:12:16', '2023-07-30 04:12:16'),
(23, 857532911812, 2, 'ular sanca', 'Pythonidae', 'Amfibi', 'Berbisa', 'BUFONIDAE', 'Matan Hilir Selatan, Ketapang, Kalimantan Barat, Indonesia', '-1.8374916', '110.1681519', 'sanca', '2023-08-07 01:41:41', '2023-08-07 01:41:41'),
(24, 1, 2, 'ular', 'ANSONIA SPINULIFER', 'Reptil', 'Tidak Berbisa', 'BUFONIDAE', 'Sungai Pelang, Matan Hilir Selatan, Ketapang, Kalimantan Barat, Indonesia', '-1.9300408', '110.0868230', '<p>ular</p>', '2023-08-07 02:06:29', '2023-08-07 02:06:29'),
(25, 857532911812, 2, 'kodok', 'Dendroaspis polylepis', 'Amfibi', 'Tidak Berbisa', 'ELAPIDAE', 'Peninjauan, Ogan Komering Ulu, Sumatera Selatan, Indonesia', '-3.8265741', '104.2272949', 'kodok', '2023-08-07 02:25:12', '2023-08-07 02:25:12');

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
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `super_admin`
--

INSERT INTO `super_admin` (`id`, `nama`, `email`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
(4, 'wulandari', 'wulandari24@gmail.com', 'ulan', '$2y$10$NuUyw96Z8n6mvu70g2SfRumx3Itfc.fNJVEekVXKevlAcW6KRptk.', 'app/super-admin/1689942909-pbS89.png', '2023-07-21 12:35:09', '2023-07-21 12:35:09'),
(7, 'admin cantik', 'admincantik@gmail.com', 'admin cantik', '$2y$10$OF6smOU1XF6D2BW3LxtwyOgE9GFctUfzvqAzAR32ENht.6GUHcx76', 'app/super-admin/1691374412-pFd7E.png', '2023-08-07 02:13:32', '2023-08-07 02:13:32');

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
  ADD PRIMARY KEY (`nomor`) USING BTREE;

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `galeri_spesies`
--
ALTER TABLE `galeri_spesies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `rescue`
--
ALTER TABLE `rescue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `spesies`
--
ALTER TABLE `spesies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
