-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getfuture`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_soal1s`
--

CREATE TABLE `data_soal1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_soal` int(11) NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_soal1s`
--

INSERT INTO `data_soal1s` (`id`, `no_soal`, `soal`, `a`, `b`, `c`, `d`, `e`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bila menemukan alat, maka saya cenderung', 'Menganalisis', 'Menganalisis kemudian memanfaatkan', 'Menganalisis sambil memanfaatkan', 'Memanfaatkan dengan sedikit menganalisis', 'Memanfaatkan', '2022-05-18 03:24:23', '2022-05-18 03:24:23'),
(2, 2, 'Bila menemukan suatu teknik, maka saya cenderung', 'Menganalisis', 'Menganalisis kemudian menerapkan', 'Menganalisis sambil menerapkan', 'Menerapkan dengan dengan sedikit menganalisis', 'Menerapkan', '2022-05-18 03:25:08', '2022-05-18 03:25:08'),
(3, 3, 'Bila melihat sebuah kejadian, maka saya cenderung', 'Mencermati, menanyakan, dan memikirkan', 'Mencermati dan Menanyakan', 'Mencermati tindakan orang di sekitar', 'Memikirkan tindakan yang diperlukan', 'Melakukan tindakan yang diperlukan', '2022-05-18 03:25:59', '2022-05-18 17:43:43'),
(4, 4, 'Bila melihat orang melakukan kegiatan, maka saya cenderung', 'Mencermati, menanyakan, dan memikirkan kegiatan tersebut', 'Mencermati dan menanyakan kegiatan tersebut', 'Mencermati tindakan orang tersebut', 'Memikirkan untuk melakukan kegiatan tersebut', 'Melakukan kegiatan tersebut', '2022-05-18 03:26:48', '2022-05-18 17:44:04'),
(5, 5, 'Bila ada orang berbicara tentang komputer, maka saya cenderung', 'Memikirkan ilmunya', 'Memikirkan ilmunya sambil memikirkan penerapannya', 'Memikirkan penerapannya', 'Menguasai keterampilannya', 'Menerapkan keterampilannya', '2022-05-18 03:27:30', '2022-05-18 03:27:30'),
(6, 6, 'Bila melihat bangunan yang megah, maka saya ingin', 'Menguasai ilmu yang melandasinya', 'Menguasai ilmu yang melandasi serta penerapannya', 'Menguasai bangunan tersebut', 'Mendesain bangunan serupa', 'Membuat bangunan serupa', '2022-05-18 03:28:16', '2022-05-18 03:28:16'),
(7, 7, 'Melihat begitu banyak manfaat listrik, saya ingin …', 'Menguasai ilmu yang melandasinya', 'Menguasai ilmu yang melandasi serta penerapannya', 'Menciptakan alat yang menggunakan listrik', 'Memodifikasi alat yang menggunakan listrik', 'Mengoperasikan alat yang menggunakan listrik', '2022-05-18 03:28:59', '2022-05-18 03:28:59'),
(8, 8, 'Melihat perkembangan teknologi informasi yang begitu pesat, saya ingin …', 'Menguasai ilmu yang melandasinya', 'Menguasai ilmu yang melandasi serta penerapannya', 'Menciptakan perangkat lunak', 'Memodifikasi perangkat keras yang ada', 'Mengoperasikan peralatan berbasis teknologi informasi', '2022-05-18 03:29:43', '2022-05-18 03:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `data_soal2s`
--

CREATE TABLE `data_soal2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_soal` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_soal2s`
--

INSERT INTO `data_soal2s` (`id`, `no_soal`, `kategori`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kemampuan Verbal', 'Evokasi = ?', 'Penggugah rasa', 'Penilaian', 'Perubahan', 'Pengungsian', 'Ijin menetap', 'Penggugah rasa', '', '2022-05-18 03:34:32', '2022-05-22 07:53:36'),
(2, 2, 'Kemampuan Verbal', 'Evakuasi = ?', 'Pengungsian', 'Penyelamatan', 'Pengugah rasa', 'Penyikiran', 'Penilaian', 'Pengungsian', '', '2022-05-18 03:36:16', '2022-05-22 07:45:12'),
(3, 3, 'Kemampuan Verbal', 'Tsunami = ?', 'Gempa dan gelombang pasang', 'Melanda Aceh', 'Tidal Wave', 'Bahasa Jepang', 'jawaban A dan B', 'Gempa dan gelombang pasang', '', '2022-05-18 03:37:55', '2022-05-22 07:45:14'),
(4, 4, 'Kemampuan Verbal', 'BBM = ?', 'Bahan bakar minyak', 'Pertamina', 'Mesin', 'Top 1', 'Apec', 'Bahan bakar minyak', '', '2022-05-18 03:38:36', '2022-05-22 07:45:16'),
(5, 5, 'Kemampuan Verbal', 'Dikotomi = ?', 'Dibelah dua', 'Dipecah dua', 'Dua kekuatan', 'Kembar dua', 'Dwi fungsi', 'Dua kekuatan', '', '2022-05-18 03:42:36', '2022-05-22 07:45:18'),
(6, 6, 'Kemampuan Verbal', 'Narkoba =?', 'Gosby', 'Psikotropika', 'Narkotika, Kokain obat terlarang', 'Ganja', 'Hukuman mati', 'Psikotropika', '', '2022-05-18 03:43:21', '2022-05-22 07:45:19'),
(7, 7, 'Kemampuan Verbal', 'Anjungan  = ?', 'Panggung', 'Dayung', 'Buyung', 'Puji', 'Angkat', 'Panggung', '', '2022-05-18 03:44:11', '2022-05-22 07:45:21'),
(8, 8, 'Kemampuan Verbal', 'Listrik = ?', 'Indonesia power', 'Daya positif negatif', 'PLN', 'Dinamo', 'Paiton', 'Daya positif negatif', '', '2022-05-18 03:45:11', '2022-05-22 07:45:23'),
(9, 9, 'Kemampuan Verbal', 'Bala = ?', 'Rapat sekali', 'Bencana', 'Bantuan', 'Merasakan', 'Melawan', 'Bantuan', '', '2022-05-18 03:53:08', '2022-05-22 07:45:24'),
(10, 10, 'Kemampuan Verbal', 'Kisi-kisi = ?', 'Alat menangkap ikan', 'Alat hitung', 'Tabel', 'Blue print', 'Terali', 'Blue print', '', '2022-05-18 03:53:56', '2022-05-22 07:45:37'),
(11, 11, 'Kemampuan Verbal', 'Lawan kata mandiri ...  ?', 'Intimidasi', 'Interaksi', 'Korelasi', 'Dependen', 'Invalid', 'Dependen', '', '2022-05-18 03:54:33', '2022-05-22 07:45:39'),
(12, 12, 'Kemampuan Verbal', 'Lawan kata  cantik ...?', 'Buruk hati', 'Buruk rupa', 'Buruk perasaan', 'Buruk sangka', 'Buruk hidung', 'Buruk rupa', '', '2022-05-18 03:59:01', '2022-05-22 07:45:40'),
(13, 13, 'Kemampuan Verbal', 'Lawan kata ressafel... ?', 'Mengganti', 'Status quo', 'Mengubah', 'Memberhentikan', 'Memecat', 'Mengganti', '', '2022-05-18 04:00:11', '2022-05-22 07:45:43'),
(14, 14, 'Kemampuan Verbal', 'Lawan kata prinsip... ?', 'Kebenaran', 'Bagian', 'Azas', 'Pokok', 'Dasar', 'Bagian', '', '2022-05-18 04:00:48', '2022-05-22 07:45:45'),
(15, 15, 'Kemampuan Verbal', 'Lawan kata besar mulut ... ?', 'Pendiam', 'Sombong', 'Pemalu', 'Pembohong', 'Penipu', 'Pemalu', '', '2022-05-18 04:01:26', '2022-05-22 07:45:46'),
(16, 16, 'Kemampuan Verbal', 'Lawan kata Prominen... ?', 'Terkemuka', 'Pendukung', 'Biasa', 'Setuju', 'Pelapor', 'Biasa', '', '2022-05-18 04:02:36', '2022-05-22 07:45:48'),
(17, 17, 'Kemampuan Verbal', 'Lawan kata terbang ...?', 'Mendarat', 'Mengapung', 'Berjalan', 'Melayang', 'Berenang', 'Mendarat', '', '2022-05-18 04:03:20', '2022-05-22 07:45:50'),
(18, 18, 'Kemampuan Verbal', 'Lawan kata bersimbah ... ?', 'Kusut', 'Kering', 'Gersang', 'Bebas', 'Bertahan', 'Kering', '', '2022-05-18 04:03:55', '2022-05-22 07:45:51'),
(19, 19, 'Kemampuan Verbal', 'Lawan kata simpulan ...?', 'Kata kunci', 'Pembahasan', 'Tak beraturan', 'Sembarangan', 'Fokus pembahasan', 'Pembahasan', '', '2022-05-18 04:04:38', '2022-05-22 07:45:53'),
(20, 20, 'Kemampuan Verbal', 'Lawan kata motivasi ... ?', 'Kecewa', 'Niat', 'Gurau', 'Tawa', 'Dorongan', 'Kecewa', '', '2022-05-18 04:05:20', '2022-05-22 07:45:55'),
(21, 21, 'Kemampuan Verbal', 'Seminar : Sarjana = ?', 'Akademi : Taruna', 'Rumah Sakit : Pasien', 'Ruang pengadilan : Saksi', 'Konservator : Seniman', 'Perpustakaan : Peneliti', 'Perpustakaan : Peneliti', '', '2022-05-18 04:07:00', '2022-05-22 07:45:56'),
(22, 22, 'Kemampuan Verbal', 'Kulit : Sisik  = ?', 'Tegel : Lantai', 'Rumah : Kamar', 'Keramik : Mosaik', 'Dinding : Cat', 'Atap : Genteng', 'Keramik : Mosaik', '', '2022-05-18 04:08:00', '2022-05-22 07:45:58'),
(23, 23, 'Kemampuan Verbal', 'Fiktif : Fakta = ?', 'Dagelan : Sandiwara', 'Dongeng : Peristiwa', 'Dugaan : Rekanan', 'Data : Estimasi', 'Rencana : Projeksi', 'Dongeng : Peristiwa', '', '2022-05-18 04:09:55', '2022-05-22 07:45:59'),
(24, 24, 'Kemampuan Verbal', 'Panas : Api = ?', 'Hujan : Awan', 'Terang : Matahari', 'Abu : Arang', 'Hangat : LIstrik', 'Dingin : Beku', 'Terang : Matahari', '', '2022-05-18 17:46:19', '2022-05-22 07:46:01'),
(25, 25, 'Kemampuan Verbal', 'Mata : Telinga = ?', 'Kaki : Paha', 'Lutut : Siku', 'Lidah : Hidung', 'Perut : Dada', 'Jari : Tangan', 'Lidah : Hidung', '', '2022-05-18 17:49:24', '2022-05-22 07:46:02'),
(26, 26, 'Kemampuan Verbal', 'Lapar : Nasi  = ?', 'Membaca : Gambar', 'Bosan : Tidur', 'Mengantuk : Melamun', 'Haus : Air', 'Mual : Obat', 'Haus : Air', '', '2022-05-18 18:56:03', '2022-05-22 07:46:04'),
(27, 27, 'Kemampuan Verbal', 'Kepala : Gundul = ?', 'Botak : Kepala', 'Pakaian : Bugil', 'Mobil : Mogok', 'Lantai : Licin', 'Bulu : Silet', 'Mobil : Mogok', '', '2022-05-19 22:13:40', '2022-05-22 07:46:06'),
(28, 28, 'Kemampuan Verbal', 'Kepala : Helm = ?', 'Panci : Kompor', 'Kaki : Kaus', 'Album : Foto', 'Jari : Cincin', 'Rumah : Atap', 'Kaki : Kaus', '', '2022-05-19 22:14:37', '2022-05-22 07:46:07'),
(29, 29, 'Kemampuan Verbal', 'Senapan : Berburu = ?', 'Kapal : Selam', 'Pancing : Ikan', 'Perangkap : Tikus', 'Golok : Serawad', 'Maling : Penjara', 'Perangkap : Tikus', NULL, '2022-05-19 22:17:35', '2022-05-22 07:46:09'),
(30, 30, 'Kemampuan Verbal', 'Pohon : Buah = ?', 'Domba : Daging', 'Sapi : Susu', 'Ketam : Sapit', 'Telur : Ayam', 'Jentik : Nyamuk', 'Sapi : Susu', '', '2022-05-19 22:18:34', '2022-05-22 07:46:10'),
(31, 31, 'Kemampuan Numerik', 'Berapakah 19 dikalikan 11?', '199', '200', '209', '219', '220', '209', '', '2022-05-19 22:21:34', '2022-05-22 07:46:51'),
(32, 32, 'Kemampuan Numerik', 'Berapakah 60% dari 250?', '175', '150', '125', '100', '200', '150', '', '2022-05-22 02:07:45', '2022-05-22 07:46:53'),
(33, 33, 'Kemampuan Numerik', 'Jika 12 dikalikan 6 dan dibagi 3, maka hasilnya ....', '23', '24', '25', '26', '27', '24', '', '2022-05-22 02:08:20', '2022-05-22 07:46:55'),
(34, 34, 'Kemampuan Numerik', 'Berapakah 5/6 dari 360?', '200', '240', '260', '300', '320', '300', '', '2022-05-22 02:09:18', '2022-05-22 07:46:56'),
(35, 35, 'Kemampuan Numerik', 'Berapakah 20% dari 135 ditambah 35?', '26', '27', '72', '30', '62', '62', '', '2022-05-22 02:13:33', '2022-05-22 07:46:58'),
(36, 36, 'Kemampuan Numerik', 'Jika 28 dibagi 7 kemudian ditambahkan pada 15 dikalikan 4, maka hasilnya ....', '76', '77', '75', '72', '74', '76', '', '2022-05-22 02:14:14', '2022-05-22 07:46:59'),
(37, 37, 'Kemampuan Numerik', 'Berapakah 595 dibagi 7?', '88', '86', '87', '84', '85', '85', '', '2022-05-22 02:14:52', '2022-05-22 07:47:01'),
(38, 38, 'Kemampuan Numerik', '28+27+39+18+36 = .....', '194', '149', '148', '185', '184', '148', '', '2022-05-22 02:15:34', '2022-05-22 07:47:02'),
(39, 39, 'Kemampuan Numerik', 'Berapakah hasil dari 869 dikurangkan dari 2482?', '1613', '1614', '1615', '1416', '1316', '1613', '', '2022-05-22 02:17:04', '2022-05-22 07:47:04'),
(40, 40, 'Kemampuan Numerik', 'Jika 3/4 dari 216 dijumlahkan dengan 3/5 dari 75, maka hasilnya .....', '126', '162', '207', '270', '227', '207', '', '2022-05-22 02:17:59', '2022-05-22 07:47:06'),
(41, 41, 'Kemampuan Numerik', '0, 1, 2, 3, 5, 7, 9, 12, 15, 18, ?', '20', '22', '24', '26', '28', '22', '', '2022-05-22 02:18:24', '2022-05-22 07:47:07'),
(42, 42, 'Kemampuan Numerik', '1000, 975, 925, 850, 750, ?', '625', '620', '615', '600', '575', '625', '', '2022-05-22 02:18:56', '2022-05-22 07:47:09'),
(43, 43, 'Kemampuan Numerik', '12; 8,5; 5; 1,5;  ?', '2', '1', '-1', '-2', '-3', '-1', '', '2022-05-22 02:19:39', '2022-05-22 07:47:10'),
(44, 44, 'Kemampuan Numerik', '8, 16, 64, 128, 512, 1024, ?', '4096', '4960', '4069', '4690', '4906', '4096', '', '2022-05-22 02:24:55', '2022-05-22 07:47:12'),
(45, 45, 'Kemampuan Numerik', '12, 11, 9, 6, 2, ?', '0', '-1', '-2', '-3', '-4', '-3', '', '2022-05-22 02:25:23', '2022-05-22 07:47:14'),
(46, 46, 'Kemampuan Numerik', '5, 6, 7, 8, 10, 12, 14, 20, 15, 18, ?, ?', '24, 30', '21, 24', '20, 30', '24, 32', '26, 32', '21, 24', '', '2022-05-22 02:26:38', '2022-05-22 07:47:15'),
(47, 47, 'Kemampuan Numerik', '19, 38, 57, 76, 95, 114; ?', '133', '138', '141', '144', '146', '133', '', '2022-05-22 02:27:20', '2022-05-22 07:47:17'),
(48, 48, 'Kemampuan Numerik', '10; 9,75; 9,25; 8,5; 7,5; 6,25; ?', '5,5', '5,25', '4,75', '4,5', '4', '4,75', '', '2022-05-22 02:29:16', '2022-05-22 07:47:19'),
(49, 49, 'Kemampuan Numerik', '10; 11,75; 9,25; 11; 8,5; ?', '12,75', '11,25', '6', '6,75', '5', '6', '', '2022-05-22 02:31:02', '2022-05-22 07:47:21'),
(50, 50, 'Kemampuan Numerik', 'Temukan lima bilangan berurutan pada barisan bilangan 5,8,2,3,6,3,9,4, 7,2,1,6,5,8,3,4,2,5,9,4,2,3 yang jumlahnya 21!', '7,3,4,3,4', '5,5,6,2,3', '7,2,1,6,5', '5,6,3,2,5', '5,6,7,3,4', '7,3,4,3,4', '', '2022-05-22 02:36:08', '2022-05-22 07:47:22'),
(51, 51, 'Kemampuan Numerik', 'Berapakah rerata bilangan yang lebih besar dari 6 pada barisan bilangan 3,2,9,7,4,8,5,7,9,2,4,5,7,1,9,3,8,4,1,8,2,5', '6', '7', '8', '9', '10', '8', '', '2022-05-22 02:36:46', '2022-05-22 07:50:36'),
(52, 52, 'Kemampuan Numerik', 'Jika Ani memberi Tuti uang sebanyak Rp 2000, maka perbandingan uang Ani dan  uang tuti adalah 1:3. Akan tetapi, jika Tuti member Ani uang sebanyak Rp 2000, maka uang mereka sama. Berapa banyak uang Ani dan Tuti mula-mula?', 'Rp 5.000,00 dan Rp 9.000,00', 'Rp 6.000,00 dan Rp 10.000,00', 'Rp 7.000,00 dan Rp 11.000,00', 'Rp 8.000,00 danRp 12.000,00', 'Rp 9.000,00 danRp 12.000,00', 'Rp 6.000,00 dan Rp 10.000,00', '', '2022-05-22 02:37:49', '2022-05-22 07:47:26'),
(54, 53, 'Kemampuan Numerik', 'Usia Nyoman ditambah usia Gede adalah 27 tahun. Usia Nyoman ditambah usia Ngurah adalah 38 tahun. Usia Gede ditambah usia Ngurah adalah 33 tahun. Berapakah usia Nyoman, Gede, dan Ngurah?', '13, 14, dan 19 tahun', '14, 13, dan 20 tahun', '15, 12, dan 21 tahun', '16, 12, dan 20 tahun', '16, 11, dan 22 tahun', '16, 11, dan 22 tahun', '', '2022-05-22 02:38:56', '2022-05-22 07:47:28'),
(55, 54, 'Kemampuan Numerik', 'Sebuah rumah dijual dengan harga Rp 280 juta. Karena seminggu tidak laku, pada minggu kedua harga diturunkan 15%. Ternyata rumah belum juga laku, sehingga pada minggu ketiga harga diturunkan lagi 10% dari harga minggu sebelumnya sehingga rumah terjual. Berapa harga rumah saat terjual?', 'Rp 214.200.000,00', 'Rp 214.400.000,00', 'Rp 212.200.000,00', 'Rp 212.400.000,00', 'Rp 216.400.000,00', 'Rp 214.200.000,00', '', '2022-05-22 02:40:32', '2022-05-22 07:47:29'),
(56, 55, 'Kemampuan Numerik', 'Sebuah bangunan diselesaikan oleh 5 orang pekerja dalam 21 hari. Berapa lama bangunan yang sama dapat diselesaikan oleh 7 orang pekerja, bila diasumsikan semua pekerja memiliki kemampuan yang sama?', '15', '16', '17', '18', '19', '15', '', '2022-05-22 02:46:44', '2022-05-22 07:47:31'),
(57, 56, 'Kemampuan Numerik', 'Berapakah besar sudut X pada gambar di bawah ini?', '30', '35', '40', '45', '50', '35', 'gambar_soal/1653234697soal.png', '2022-05-22 02:49:59', '2022-05-22 07:51:37'),
(58, 57, 'Kemampuan Numerik', 'Seorang sopir mengetahui ada 4 jalur berbeda dari Singaraja ke Denpasar dan 3 jalur berbeda dari Denpasar ke Gianyar. Berapa banyak jalur berbeda dari Singaraja ke Gianyar melalui Denpasar?', '7', '12', '17', '34', '32', '12', '', '2022-05-22 03:05:21', '2022-05-22 07:47:35'),
(59, 58, 'Kemampuan Numerik', 'Rerata tiga bilangan adalah 29. Bila rerata dari dua bilangan pertama adalah 41, maka berapakah bilangan yang ketiga?', '5', '6', '7', '8', '9', '5', '', '2022-05-22 03:05:47', '2022-05-22 07:47:37'),
(60, 59, 'Kemampuan Numerik', 'Hari minggu pagi pedagang buah menjual 720 butir buah-buahan yang terdiri dari apel, jeruk, dan salak dengan perbandingan 3: 4: 2. Berapa butir masing-masing buah yang dijual?', '240, 320, 160 butir', '220, 340, 160 butir', '220, 320, 180 butir', '240, 300, 180 butir', '240, 300, 160 butir', '240, 320, 160 butir', '', '2022-05-22 03:06:51', '2022-05-22 07:47:38'),
(61, 60, 'Kemampuan Numerik', 'Harga minuman Yakult Rp 2.400,00 lebih mahal bila dibeli per-botol daripada dibeli satu kotak, tiap kotak terdiri dari 6 botol. Satu kotak Yakult harganya Rp 27.600,00. Berapa harga 5 botol Yakult?', 'Rp 20.000,00', 'Rp 22.600,00', 'Rp 25.600,00', 'Rp 25.000,00', 'Rp 27.000,00', 'Rp 25.000,00', '', '2022-05-22 03:07:40', '2022-05-22 07:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_soal1s`
--

CREATE TABLE `jawaban_soal1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_soal1s`
--

INSERT INTO `jawaban_soal1s` (`id`, `user_id`, `skor`, `created_at`, `updated_at`) VALUES
(1, 2, 27, '2022-05-20 23:35:27', '2022-05-22 21:02:07'),
(2, 1, 40, '2022-05-22 14:11:23', '2022-05-22 14:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_soal2s`
--

CREATE TABLE `jawaban_soal2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `verbal` int(11) DEFAULT NULL,
  `numerik` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_soal2s`
--

INSERT INTO `jawaban_soal2s` (`id`, `user_id`, `verbal`, `numerik`, `created_at`, `updated_at`) VALUES
(1, 2, 30, 21, '2022-05-21 05:32:19', '2022-05-22 13:38:48'),
(2, 1, 1, 8, '2022-05-22 13:03:57', '2022-05-22 14:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_sarans`
--

CREATE TABLE `kritik_sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritik_sarans`
--

INSERT INTO `kritik_sarans` (`id`, `user_id`, `nama`, `email`, `saran`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Doyok', 'doyok998@gmail.com', 'Test Saran', 'TF0Ld1RMmJfKrYBohu7XoILP4PND7SCth4tcqwye', '2022-05-23 22:24:24', '2022-05-23 22:24:24'),
(2, NULL, 'Doyok2', 'doyok998@gmail.com', 'Test Saran2', 'TF0Ld1RMmJfKrYBohu7XoILP4PND7SCth4tcqwye', '2022-05-23 22:25:51', '2022-05-23 22:25:51'),
(3, NULL, 'Bang', 'bangbang@gmail.com', 'Bang test', 'TF0Ld1RMmJfKrYBohu7XoILP4PND7SCth4tcqwye', '2022-05-23 22:27:54', '2022-05-23 22:27:54'),
(4, NULL, 'Jokok', 'jokok998@gmail.com', 'test jokok', 'TF0Ld1RMmJfKrYBohu7XoILP4PND7SCth4tcqwye', '2022-05-23 22:32:09', '2022-05-23 22:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_10_075652_create_sessions_table', 1),
(7, '2022_04_26_042801_soal', 1),
(8, '2022_04_27_060613_create_data_soal2s_table', 1),
(9, '2022_05_10_141515_create_jawaban_soal1s_table', 1),
(10, '2022_05_13_023313_create_kritik_sarans_table', 1),
(11, '2022_05_15_152754_create_jawaban_soal2s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HfRdch8qH2FZVTFP6fn7IwosU8ACd63ak5H70gyw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEYwTGQxUk1tSmZLcllCb2h1N1hvSUxQNFBORDdTQ3RoNHRjcXd5ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1653373959);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `admin_status`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', 'admin@admin.com', 1, NULL, '$2y$10$Hv7FhY49lV/sq0kkf08VbOvdDKC4YK41QgwyhdpMtMZQVyoqaIu0S', NULL, NULL, NULL, NULL, NULL, '2022-05-18 03:15:59', '2022-05-18 03:15:59'),
(2, 'Yoga', 'yoga', 'yoga@yoga.com', 0, NULL, '$2y$10$YuNvPhASg48VzjmVpfitLet7XpC1COLBUulrH1OKeEkyKkswyNYDm', NULL, NULL, NULL, NULL, NULL, '2022-05-18 03:16:28', '2022-05-18 03:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_soal1s`
--
ALTER TABLE `data_soal1s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_soal1_no_soal_unique` (`no_soal`);

--
-- Indexes for table `data_soal2s`
--
ALTER TABLE `data_soal2s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_soal2s_no_soal_unique` (`no_soal`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawaban_soal1s`
--
ALTER TABLE `jawaban_soal1s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_soal1s_user_id_index` (`user_id`);

--
-- Indexes for table `jawaban_soal2s`
--
ALTER TABLE `jawaban_soal2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_soal2s_user_id_index` (`user_id`);

--
-- Indexes for table `kritik_sarans`
--
ALTER TABLE `kritik_sarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kritik_sarans_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_soal1s`
--
ALTER TABLE `data_soal1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_soal2s`
--
ALTER TABLE `data_soal2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_soal1s`
--
ALTER TABLE `jawaban_soal1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawaban_soal2s`
--
ALTER TABLE `jawaban_soal2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kritik_sarans`
--
ALTER TABLE `kritik_sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
