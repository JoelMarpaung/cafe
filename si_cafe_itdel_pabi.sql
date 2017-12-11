-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jan 2017 pada 06.21
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_cafe_itdel_pabi`
--
CREATE DATABASE IF NOT EXISTS `si_cafe_itdel_pabi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `si_cafe_itdel_pabi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `name`, `type`, `quantity`, `deskripsi`, `created_at`, `updated_at`) VALUES
(32, 'Kursi bundar', 'Kayu', '20', 'Tinggi 80cm. Terbuat dari kayu jati', NULL, NULL),
(33, 'Vas Bunga', 'Keramik', '20', 'Berukuran 45cm. Tidak bermotif', NULL, NULL),
(34, 'Sendok', 'Sendok Aluminium', '300 buah', 'Berukuran 25 cm.  \r\n                ', '2017-01-03 07:36:54', '2017-01-03 08:16:33'),
(35, 'Garpu', 'Garpu aluminium', '300 buah', 'Berpasangan dengan sendok\r\n                ', '2017-01-03 07:42:57', '2017-01-03 07:42:57'),
(36, 'Vassy', 'Vas Bunga', '20 buah', ' Berwarna cokelat polos\r\n                ', '2017-01-03 07:44:30', '2017-01-03 07:44:30'),
(37, 'Choco Chair', 'Kursi kayu', '20 buah', ' Terbuat dari kayu jati\r\n                ', '2017-01-03 07:45:55', '2017-01-03 07:45:55'),
(38, 'Tabel Boo', 'Meja Kayu', '20 buah', 'Terbuat dari kayu jati                ', '2017-01-03 07:47:09', '2017-01-03 07:47:09'),
(39, 'Washy', 'Wastafel', '3 buah', ' Terbuat dari keramik\r\n                ', '2017-01-03 07:48:38', '2017-01-03 07:48:38'),
(40, 'Cosmos', 'Rice Cooker', '3', ' Menghasilkan beras yang empuk dan tidak berbau.\r\n                ', '2017-01-03 07:49:55', '2017-01-03 07:49:55'),
(42, 'Sendok Kayu dan Plastik', 'Sendok', '300', '5 cm\r\n                ', '2017-01-20 08:19:11', '2017-01-20 08:19:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_data`
--

CREATE TABLE `customer_data` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `balance` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer_data`
--

INSERT INTO `customer_data` (`id`, `username`, `first_name`, `last_name`, `balance`, `created_at`, `updated_at`) VALUES
(18, 'ester', 'Ester', 'Marbun', 19500, '2017-01-05 18:14:26', '2017-01-06 00:43:05'),
(19, 'eko', 'Eko', 'Simanjuntak', 30000, '2017-01-05 18:14:44', '2017-01-05 18:34:06'),
(20, 'amendo', 'Amendo', 'Sitinjak', 30000, '2017-01-05 18:14:59', '2017-01-05 18:33:48'),
(21, 'anastasya', 'Anastasya', 'Manullang', 30000, '2017-01-05 18:15:20', '2017-01-05 18:33:37'),
(22, 'anggiat', 'Anggiat', 'Tambunan', 30000, '2017-01-05 18:15:35', '2017-01-05 18:33:29'),
(23, 'arren', 'Arren', 'Situngkir', 30000, '2017-01-05 18:15:50', '2017-01-05 18:33:20'),
(24, 'chika', 'Chika', 'Hutapea', 30000, '2017-01-05 18:16:27', '2017-01-05 18:33:03'),
(25, 'edward', 'Edward', 'Simarmata', 30000, '2017-01-05 18:17:41', '2017-01-05 18:32:44'),
(26, 'gideon', 'Gideon', 'Panjaitan', 30000, '2017-01-05 18:18:45', '2017-01-05 18:32:36'),
(27, 'greace', 'Greace', 'Situmorang', 30000, '2017-01-05 18:20:39', '2017-01-05 18:32:27'),
(28, 'irene', 'Irene', 'Panjaitan', 30000, '2017-01-05 18:21:22', '2017-01-05 18:32:13'),
(29, 'jhon', 'Jhon', 'Tampubolon', 30000, '2017-01-05 18:22:04', '2017-01-05 18:32:05'),
(30, 'joel', 'Joel', 'Marpaung', 82500, '2017-01-05 18:22:15', '2017-01-20 08:10:49'),
(31, 'johan', 'Johan', 'Lumbanbatu', 30000, '2017-01-05 18:23:08', '2017-01-05 18:31:44'),
(32, 'juliper', 'Juliper', 'Simanjuntak', 30000, '2017-01-05 18:23:24', '2017-01-05 18:31:34'),
(33, 'lestari', 'Lestari', 'Siregar', 30000, '2017-01-05 18:23:40', '2017-01-05 18:31:09'),
(34, 'lily', 'Lily', 'Naibaho', 30000, '2017-01-05 18:23:54', '2017-01-05 18:31:01'),
(35, 'martupa', 'Martupa', 'Lumbantoruan', 30000, '2017-01-05 18:24:09', '2017-01-05 18:30:34'),
(36, 'palti', 'Palti', 'Sinaga', 30000, '2017-01-05 18:24:21', '2017-01-05 18:30:10'),
(37, 'patota', 'Patota', 'Siahaan', 30000, '2017-01-05 18:24:34', '2017-01-05 18:30:01'),
(38, 'pratiwi', 'Pratiwi', 'Manik', 30000, '2017-01-05 18:24:47', '2017-01-05 18:29:53'),
(39, 'rahel', 'Rahel', 'Purba', 30000, '2017-01-05 18:24:59', '2017-01-05 18:29:33'),
(40, 'rizky', 'Rizky', 'Manurung', 30000, '2017-01-05 18:25:11', '2017-01-05 18:29:21'),
(41, 'winda', 'Winda', 'Sianipar', 30000, '2017-01-05 18:25:34', '2017-01-05 18:29:02'),
(42, 'yessica', 'Yessica', 'Sitorus', 30000, '2017-01-05 18:25:51', '2017-01-05 18:28:52'),
(43, 'yolanda', 'Yolanda', 'Hutajulu', 30000, '2017-01-05 18:26:06', '2017-01-05 18:28:41'),
(44, 'yonatan', 'Yonatan', 'Parapat', 30000, '2017-01-05 18:26:22', '2017-01-05 18:28:26'),
(45, 'hans', 'Hans', 'Purba', 30000, '2017-01-05 18:26:33', '2017-01-05 18:28:12'),
(46, 'jhoncha', 'Jhon', 'Sipahutar', 30000, '2017-01-05 18:27:09', '2017-01-05 18:28:04'),
(47, 'rinto', 'Rinto', 'Tambunan', 65000, '2017-01-05 18:27:24', '2017-01-08 23:54:22'),
(49, 'christine', 'christine', 'christine', 0, '2017-01-09 05:55:52', '2017-01-09 05:55:52'),
(50, 'berta', 'Berta', 'Nainggolan', 10000, '2017-01-10 02:38:31', '2017-01-10 02:40:18'),
(53, 'dapot', 'Dapot', 'Napitupulu', 0, '2017-01-20 08:34:54', '2017-01-20 08:34:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dapur`
--

CREATE TABLE `dapur` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dapur`
--

INSERT INTO `dapur` (`id`, `name`, `type`, `quantity`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'Wortel', 'Sayur', '3 kg', 'Berwarna jingga cerah\r\n                ', '2017-01-03 07:51:57', '2017-01-03 07:51:57'),
(8, 'Tepung terigu', 'Tepung', '10 kg', 'Lembut dan menjadikan masakan lebih enak    \r\n                ', '2017-01-03 07:53:34', '2017-01-03 07:53:34'),
(9, 'Jeruk', 'Buah', '3 kg', 'Jeruk sunkist    \r\n                ', '2017-01-03 07:54:43', '2017-01-03 07:54:43'),
(10, 'Choco chips', 'Cemilan', '1 kg', 'Berbentuk butir-butir    \r\n                ', '2017-01-03 07:56:51', '2017-01-03 07:56:51'),
(11, 'Aspartam', 'Gula', '20 kg', 'Berbentuk kristal dan rasa manis yang tinggi.    \r\n                ', '2017-01-03 07:58:43', '2017-01-03 07:58:43'),
(12, 'Garam Laut', 'Garam', '10 kg', 'Putih bersih berbentuk kristal    \r\n                ', '2017-01-03 08:00:07', '2017-01-03 08:00:07'),
(13, 'Ladaku', 'Lada', '800 gr', 'Rasa spicy dan wangi    \r\n                ', '2017-01-03 08:01:47', '2017-01-03 08:01:47'),
(14, 'Mericaaca', 'Merica', '800 gr', 'Wangi dan sedikit manis\r\n                ', '2017-01-03 08:03:59', '2017-01-03 08:03:59'),
(15, 'Kopi Robusta', 'Kopi', '3 kg', 'Wangi dan tahan lama    \r\n                ', '2017-01-03 08:05:19', '2017-01-03 08:05:19'),
(16, 'Susu kental manis', 'Susu', '3 kaleng', 'Manis dan kaya kalsium    \r\n                ', '2017-01-03 08:06:47', '2017-01-03 08:06:47'),
(17, 'Udang', 'Ikan laut', '3 kg', 'Diambil dari Bikini Buttom    \r\n                ', '2017-01-03 08:08:43', '2017-01-03 08:08:43'),
(19, 'Cabai merah', 'Cabai', '10 kg', '    Pedas       ', '2017-01-20 08:19:46', '2017-01-20 08:19:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `customer`, `subjek`, `kriteria`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'rinto', 'Pelayanan', 'Pujian', 'Menu makanan di tempat ini sangat beragam dan sangat enak, terlebih lagi makanan nya steril dan sehat', '2017-01-05 19:10:55', '2017-01-05 19:10:55'),
(8, 'ester', 'Website', 'Pujian', 'Sistem informasi ini sangat bermanfaat dikarenakan saya tak lagi repot untuk memesan makanan yang akan saya pesan dan tidak akan membutuhkan waktu yang lama untuk melakukan pemesanan.', '2017-01-05 19:14:22', '2017-01-05 19:14:22'),
(9, 'joel', 'Tempat', 'Kritik', 'Meja yang saya tempati tadi agak berantakan dan kotor, mohon untuk selanjutnya agar lebih di perhatikan, terimakasih.        ', '2017-01-05 19:17:41', '2017-01-05 19:17:41'),
(10, 'rinto', 'Menu', 'Pujian', '                Menunya bagus', '2017-01-06 00:38:39', '2017-01-06 00:38:39'),
(11, 'joel', 'Website', 'Pujian', 'Bagus Websitenya     ', '2017-01-08 23:39:05', '2017-01-08 23:39:05'),
(12, 'joel', 'Menu', 'Pujian', 'Bagus      ', '2017-01-08 23:39:41', '2017-01-08 23:39:41'),
(13, 'joel', 'Menu', 'Pujian', 'coba', '2017-01-08 23:39:53', '2017-01-08 23:39:53'),
(14, 'joel', 'Menu', 'Pujian', 'coba             ', '2017-01-08 23:40:08', '2017-01-08 23:40:08'),
(15, 'dapot', 'Menu', 'Pujian', '  Menunya bagus', '2017-01-20 08:12:09', '2017-01-20 08:12:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `product_name`, `product_type`, `price`, `deskripsi`, `status`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Nasi Goreng', 'Makanan', 15000, 'Nasi goreng makanan yang dibuat dari nasi yang digoreng dengan bumbu dan bahan-bahan lainnya. Nasi goreng adalah makanan populer di Asia Timur dan Asia Tenggara. Nasi adalah sebuah bagian penting dari masakan tradisional Tionghoa, menurut catatan sejarah sudah mulai ada sejak 4000 SM. Nasi goreng kemudian tersebar ke Asia Tenggara dibawa oleh perantau-perantau Tionghoa yang menetap di sana dan menciptakan nasi goreng khas lokal yang didasarkan atas perbedaan bumbu-bumbu dan cara menggoreng. Nasi goreng sebenarnya muncul dari beberapa sifat dalam kebudayaan Tionghoa, yang tidak suka mencicipi makanan dingin dan juga membuang sisa makanan beberapa hari sebelumnya. Makanya, nasi yang dingin itu kemudian digoreng untuk dihidangkan kembali di meja makan.\r\n\r\n                \r\n                \r\n                ', 'Tersedia', '1483665408.png', '2017-01-05 11:05:30', '2017-01-05 11:16:48'),
(15, 'Pecel lele', 'Makanan', 10000, '   \r\n               Pecel lele (atau Pecek lele) ini adalah nama sebuah makanan yang terbuat dari ikan lele. Makanan yang dimaksud adalah ikan lele yang digoreng kering dengan minyak dan lalu disajikan dengan sambal tomat dan lalapan. Lalapan biasa terdiri dari kemangi, kubis, ketimun dan kacang panjang. Pecel lele adalah sebuah makanan yang murah dan meriah. Makanan ini sangat digemari di pulau Jawa sebagai alternatif masakan ayam, terutama ayam goreng.\r\n ', 'Tersedia', '1483664899.jpg', '2017-01-05 11:08:19', '2017-01-05 11:08:19'),
(16, 'Nasi Kuning', 'Makanan', 15000, 'Makanan ini terbuat dari beras yang dimasak bersama dengan kunyit serta santan dan rempah-rempah. Dengan ditambahkannya bumbu-bumbu dan santan, nasi kuning memiliki rasa yang lebih gurih daripada nasi putih. Nasi kuning adalah salah satu variasi dari nasi putih yang sering digunakan sebagai tumpeng. Nasi kuning biasa disajikan dengan bermacam lauk-pauk khas Indonesia.\r\n                \r\n                \r\n                ', 'Tersedia', '1483665473.png', '2017-01-05 11:11:29', '2017-01-05 11:17:53'),
(17, 'Gudeg', 'Makanan', 15500, '   \r\nGudeg (bahasa Jawa gudheg) adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat masakan ini. Warna coklat biasanya dihasilkan oleh daun jati yang dimasak bersamaan. Gudeg dimakan dengan nasi dan disajikan dengan kuah santan kental (areh), ayam kampung, telur, tahu dan sambal goreng krecek.       ', 'Tersedia', '1483665199.jpg', '2017-01-05 11:13:19', '2017-01-05 11:13:19'),
(18, 'Gado-gado', 'Makanan', 20000, 'Gado-gado ini adalah salah satu makanan yang berasal dari Indonesia yang berupa sayur-sayuran yang direbus dan dicampur jadi satu, dengan bumbu kacang atau saus dari kacang tanah yang dihaluskan disertai irisan telur dan di atasnya ditaburkan bawang goreng. Sedikit emping goreng atau kerupuk (ada juga yang memakai kerupuk udang) juga ditambahkan. Gado-gado dapat dimakan begitu saja seperti salad dengan bumbu/saus kacang, tapi juga dapat dimakan beserta nasi putih atau kadang-kadang juga disajikan dengan lontong.\r\n      \r\n                \r\n                \r\n                ', 'Tersedia', '1483665640.png', '2017-01-05 11:20:18', '2017-01-05 11:24:59'),
(19, 'Keripik kentang', 'Snack', 10000, '                Rasa gurih dari kripik kentang membawa makanan ini menjadi makanan gurih yang banyak memiliki idola. Rasanya yang renyah dan enak menjadikan makanan ini masuk dalam jajaran makanan enak di cafe ini.    \r\n                ', 'Tersedia', '1483665847.png', '2017-01-05 11:24:07', '2017-01-05 11:29:48'),
(20, 'Bakwan', 'Gorengan', 1000, '                Bakwan merupakan makanan yang berisi beraneka sayuran yang dicampur dengan tepung kemudian digoreng. Biasanya makanan ini dijual oleh tukang gorengan, baik yang menggunakan gerobak, amupun di warung-warung. Setiap kota memiliki panggilan yang berbeda untuk makanan ini. seperti di Jawa Barat menamainya dengan bala-bala, di Jakarta menamainya Bakwan, sedangkan di Surabaya menamainya Ote-Ote. Biasanya bahan-bahan sayuran yang digunakan untuk membuat bakwan ini bisa berupa tauge, kubis, dan wortel yang di potong tipis-tipis kemudian dicampurkan.\r\n                ', 'Tidak Tersedia', '1483666114.png', '2017-01-05 11:28:34', '2017-01-05 11:30:27'),
(21, 'Lumpia', 'Gorengan', 2000, 'Makanan ini salah satu cemilan yang paling favorit oleh banyak orang karena memiliki rasa yang enak. Makanan ini berasal dari Semarang, Jawa Tengah. Di Semarang kita bisa menemukan cemilan ini di Restoran hingga pedagang kaki lima.', 'Tersedia', '1483666501.png', '2017-01-05 11:35:01', '2017-01-05 11:35:01'),
(22, 'Cireng', 'Gorengan', 3000, 'Cireng merupakan singkatan dari Aci (Kanji) digoreng adalah makanan cemilan yang berasal dari daerah Sunda yang dibuat dengan cara menggoreng campuran adonan yang berbahan utama tepung kanji atau tapioka. Makanan ini sangat popluer di daerah Jawa Barat, bahkan di Bandung makanan ini dijual dalam berbagai bentuk dan variasi rasa. bahan makanan ini antara lain terdiri dari tepung kanji, tepung terigu, air, merica bubuk, garam, bawang putih, keelai, daun bawang dan minyak goreng.  ', 'Tidak Tersedia', '1483666950.png', '2017-01-05 11:42:30', '2017-01-05 11:42:30'),
(23, 'Lentho', 'Snack', 3000, '                Makanan ini biasa disajikan sebagai menu pendamping Lontong Balap. Tapi, makanan ini juga bisa dimakan sebagai cemilan juga. Makanan ini terasa lebih enak bila dinikmati dengan sambal petis.     \r\n                ', 'Tersedia', '1483667458.png', '2017-01-05 11:49:07', '2017-01-05 11:50:58'),
(24, 'Kue Mangkok', 'Snack', 2000, '                Kue ini berbentuk sangat lucu, imut-imut, dan memiliki rasa yang sangat enak.  Kue mangkok memiliki rasa manis dan sedikit asam, karena di dalamnya terdapat campuran tapai ketan.  Biasanya, di dasar kue mangkok digunakan daun pisang untuk membungkus sekaligus memperindahnya.  Kue mangkok juga bisa diberi pewarna agar lebih menarik ketika disajikan.\r\n                ', 'Tersedia', '1483667770.png', '2017-01-05 11:56:10', '2017-01-09 05:40:15'),
(25, 'Nasi Goreng 2', 'Makanan', 20000, '                Makanan Sehat\r\n                \r\n                ', 'Tersedia', '1484925236.jpg', '2017-01-20 08:13:58', '2017-01-20 08:14:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` int(20) NOT NULL,
  `table_number` int(10) NOT NULL,
  `customer_username` varchar(100) NOT NULL,
  `product_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_product`
--

INSERT INTO `order_product` (`id`, `product_name`, `product_type`, `quantity`, `total_price`, `table_number`, `customer_username`, `product_id`, `created_at`, `updated_at`) VALUES
(14, 'Nasi Kuning', 'Makanan', 1, 15000, 4, 'joel', 16, '2017-01-05 19:21:07', '2017-01-05 19:21:07'),
(15, 'Gudeg', 'Makanan', 3, 46500, 3, 'joel', 17, '2017-01-05 19:21:08', '2017-01-05 19:21:08'),
(16, 'Pecel lele', 'Makanan', 1, 10000, 5, 'joel', 15, '2017-01-05 19:21:09', '2017-01-05 19:21:09'),
(17, 'Lumpia', 'Gorengan', 2, 4000, 6, 'joel', 21, '2017-01-05 19:21:10', '2017-01-05 19:21:10'),
(18, 'Keripik kentang', 'Snack', 1, 10000, 7, 'rinto', 19, '2017-01-06 00:24:45', '2017-01-06 00:24:45'),
(19, 'Kue Mangkok', 'Snack', 3, 6000, 4, 'joel', 24, '2017-01-06 00:42:13', '2017-01-06 00:42:13'),
(20, 'Gudeg', 'Makanan', 1, 15500, 1, 'ester', 17, '2017-01-06 00:43:05', '2017-01-06 00:43:05'),
(21, 'Kue Mangkok', 'Snack', 1, 2000, 1, 'joel', 24, '2017-01-08 23:48:07', '2017-01-08 23:48:07'),
(22, 'Kue Mangkok', 'Snack', 1, 2000, 1, 'joel', 24, '2017-01-08 23:57:26', '2017-01-08 23:57:26'),
(23, 'Pecel lele', 'Makanan', 1, 10000, 1, 'berta', 15, '2017-01-10 02:40:18', '2017-01-10 02:40:18'),
(24, 'Keripik kentang', 'Snack', 2, 20000, 2, 'joel', 19, '2017-01-20 08:10:49', '2017-01-20 08:10:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product_temp`
--

CREATE TABLE `order_product_temp` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `table_number` int(10) NOT NULL,
  `customer_username` varchar(100) NOT NULL,
  `product_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup_history`
--

CREATE TABLE `topup_history` (
  `id` int(10) NOT NULL,
  `balance` int(20) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `topup_history`
--

INSERT INTO `topup_history` (`id`, `balance`, `customer_username`, `created_at`, `updated_at`) VALUES
(18, 30000, 'rinto', '2017-01-05 18:27:55', '2017-01-05 18:27:55'),
(19, 30000, 'jhoncha', '2017-01-05 18:28:04', '2017-01-05 18:28:04'),
(20, 30000, 'hans', '2017-01-05 18:28:12', '2017-01-05 18:28:12'),
(21, 30000, 'yonatan', '2017-01-05 18:28:26', '2017-01-05 18:28:26'),
(22, 30000, 'yolanda', '2017-01-05 18:28:41', '2017-01-05 18:28:41'),
(23, 30000, 'yessica', '2017-01-05 18:28:53', '2017-01-05 18:28:53'),
(24, 30000, 'winda', '2017-01-05 18:29:02', '2017-01-05 18:29:02'),
(25, 30000, 'rizky', '2017-01-05 18:29:21', '2017-01-05 18:29:21'),
(26, 30000, 'rahel', '2017-01-05 18:29:33', '2017-01-05 18:29:33'),
(27, 30000, 'pratiwi', '2017-01-05 18:29:53', '2017-01-05 18:29:53'),
(28, 30000, 'patota', '2017-01-05 18:30:01', '2017-01-05 18:30:01'),
(29, 30000, 'palti', '2017-01-05 18:30:10', '2017-01-05 18:30:10'),
(30, 30000, 'martupa', '2017-01-05 18:30:34', '2017-01-05 18:30:34'),
(31, 30000, 'lily', '2017-01-05 18:31:01', '2017-01-05 18:31:01'),
(32, 30000, 'lestari', '2017-01-05 18:31:09', '2017-01-05 18:31:09'),
(33, 30000, 'juliper', '2017-01-05 18:31:35', '2017-01-05 18:31:35'),
(34, 30000, 'johan', '2017-01-05 18:31:44', '2017-01-05 18:31:44'),
(35, 30000, 'joel', '2017-01-05 18:31:55', '2017-01-05 18:31:55'),
(36, 30000, 'jhon', '2017-01-05 18:32:05', '2017-01-05 18:32:05'),
(37, 30000, 'irene', '2017-01-05 18:32:13', '2017-01-05 18:32:13'),
(38, 30000, 'greace', '2017-01-05 18:32:27', '2017-01-05 18:32:27'),
(39, 30000, 'gideon', '2017-01-05 18:32:36', '2017-01-05 18:32:36'),
(40, 30000, 'edward', '2017-01-05 18:32:45', '2017-01-05 18:32:45'),
(41, 30000, 'chika', '2017-01-05 18:33:03', '2017-01-05 18:33:03'),
(42, 30000, 'arren', '2017-01-05 18:33:20', '2017-01-05 18:33:20'),
(43, 30000, 'anggiat', '2017-01-05 18:33:29', '2017-01-05 18:33:29'),
(44, 30000, 'anastasya', '2017-01-05 18:33:38', '2017-01-05 18:33:38'),
(45, 30000, 'amendo', '2017-01-05 18:33:48', '2017-01-05 18:33:48'),
(46, 30000, 'eko', '2017-01-05 18:34:06', '2017-01-05 18:34:06'),
(47, 30000, 'ester', '2017-01-05 18:34:14', '2017-01-05 18:34:14'),
(48, 100000, 'joel', '2017-01-05 19:19:35', '2017-01-05 19:19:35'),
(49, 10000000, 'rinto', '2017-01-05 20:13:34', '2017-01-05 20:13:34'),
(50, 15000, 'rinto', '2017-01-06 00:29:18', '2017-01-06 00:29:18'),
(51, 10000, 'rinto', '2017-01-06 00:30:14', '2017-01-06 00:30:14'),
(52, 5000, 'ester', '2017-01-06 00:32:33', '2017-01-06 00:32:33'),
(53, 10000, 'rinto', '2017-01-06 00:33:21', '2017-01-06 00:33:21'),
(54, 10000, 'baru', '2017-01-08 23:52:54', '2017-01-08 23:52:54'),
(55, 10000, 'joel', '2017-01-08 23:54:18', '2017-01-08 23:54:18'),
(56, 10000, 'rinto', '2017-01-08 23:54:22', '2017-01-08 23:54:22'),
(57, 1000, 'joel', '2017-01-08 23:55:10', '2017-01-08 23:55:10'),
(58, 1000, 'joel', '2017-01-08 23:55:33', '2017-01-08 23:55:33'),
(59, 10000, 'joel', '2017-01-08 23:57:41', '2017-01-08 23:57:41'),
(60, 20000, 'joel', '2017-01-08 23:57:44', '2017-01-08 23:57:44'),
(61, 10000, 'joel', '2017-01-08 23:58:46', '2017-01-08 23:58:46'),
(62, 10000, 'joel', '2017-01-08 23:59:26', '2017-01-08 23:59:26'),
(63, 1000, 'baru', '2017-01-09 05:38:37', '2017-01-09 05:38:37'),
(64, 20000, 'berta', '2017-01-10 02:39:17', '2017-01-10 02:39:17'),
(65, 10000, 'dapot', '2017-01-20 08:16:13', '2017-01-20 08:16:13'),
(66, 20000, 'dapot', '2017-01-20 08:16:36', '2017-01-20 08:16:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup_request`
--

CREATE TABLE `topup_request` (
  `id` int(10) NOT NULL,
  `balance` int(20) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$A19nzArRlsMiqYeofRyc0uspK8O2tE9eirHIRnMjZsHUVx0wHlO7q', 'admin', 'x9Vt41OVfgWhc0wrTwLJ6nvb0UlwEpF33CxHYP2W0pl6GEJyTm6m4du900Wx', '2016-12-22 19:20:37', '2017-01-20 08:35:32'),
(46, 'kasir', '$2y$10$9INQvmugHQuZO/jj07j78eIx2mMMLkaEBGeubZH/AotdZjDox0QpG', 'kasir', 'KlRD2E8sqmoByvohxqJ0Kf7qXyQYKSwjMmxT20kSQMMra1B5ci2atrUT8sJP', '2016-12-27 00:42:36', '2017-01-20 08:17:07'),
(47, 'inventori', '$2y$10$TE1leDON290mDbCxQoKWQu8jImfzYr1.YAElhftDkon.8hpsUsGky', 'inventori', 'M5MDjyisGXmRbLr09HuTXumf4FVVNOfocsqHqS25AyyfVcPLat8wFjWLyRrC', '2016-12-27 00:42:52', '2017-01-20 08:20:12'),
(48, 'pelayan', '$2y$10$RidUSaTSHEsuId.pDqxndO4wNNb2VKuOVy4yhtVY74Q2yd0n56Gy.', 'pelayan', 'WLmvkF27KzNZ5arnrs7e1jTNwdtsGzk5Sc1QPsQvR7GahSop7C341jCsoOqP', '2016-12-27 00:43:01', '2017-01-20 08:15:07'),
(52, 'ester', '$2y$10$1.SkCwPIElomojWhCPZMOu3tdI4kITlVdA1duDHP6vGJEiBh7bPNO', 'customer', '5vKGkx66oP7fMB5C5ySep5zv7r2ow8diC7N5cl1nug99lwePdyJe94qkAN0d', '2017-01-05 18:14:26', '2017-01-06 00:43:08'),
(53, 'eko', '$2y$10$ao405UVwW4bsDMvx/Brv4Oz84V/5n05Vvl8maD9et1aOx.AXhiizu', 'customer', NULL, '2017-01-05 18:14:44', '2017-01-05 18:14:44'),
(54, 'amendo', '$2y$10$vdDA4nh4XdvJGt3.iCJy/O87cVIPr5wFfKbogs3aTwJdfPobwEmgK', 'customer', NULL, '2017-01-05 18:14:59', '2017-01-05 18:14:59'),
(55, 'anastasya', '$2y$10$m9mZ4LQJBzEqbMfefV4a1.k9OJkER8x25OZL5jdoip/u6pBXpTsxa', 'customer', NULL, '2017-01-05 18:15:20', '2017-01-05 18:15:20'),
(56, 'anggiat', '$2y$10$fxhMv8iYqZSRhxJgDdNkouGEP.xn6wPX9nunM1dpDUnwsN757M7h.', 'customer', NULL, '2017-01-05 18:15:35', '2017-01-05 18:15:35'),
(57, 'arren', '$2y$10$QYkfcNZNh4hPMo7lVIaUz.VTO3HAY8zVje590lfGYbbwENFvE8yW2', 'customer', NULL, '2017-01-05 18:15:50', '2017-01-05 18:15:50'),
(58, 'chika', '$2y$10$vcn7V4MCizZbdrIHGfjxWe.fhqalDA/VVUUIf7e42k2/.vFJFtgga', 'customer', NULL, '2017-01-05 18:16:27', '2017-01-05 18:16:27'),
(59, 'edward', '$2y$10$Ira0xb7ktdsYAy3W6nitbuybcraRwMAQqQNyONmQ9buK/eFSajAdy', 'customer', NULL, '2017-01-05 18:17:41', '2017-01-05 18:17:41'),
(60, 'gideon', '$2y$10$7jdFNlIPgKq57Ef3MOH5HukPFFJm.rkYXQ.sjb6T4uUbFaWkJzg6O', 'customer', NULL, '2017-01-05 18:18:44', '2017-01-05 18:18:44'),
(61, 'greace', '$2y$10$FmL0JbBpRWrQXdu07AVAFOTZJkOe2OaXOqvgbgpHGi1zrFqcKaDfC', 'customer', NULL, '2017-01-05 18:20:39', '2017-01-05 18:20:39'),
(62, 'irene', '$2y$10$Zlycxdh1phN.rmfoiK2YWO1D4tH3EKQffsLdlXZJkIzJPBJAAzGca', 'customer', NULL, '2017-01-05 18:21:22', '2017-01-05 18:21:22'),
(63, 'jhon', '$2y$10$mjXG2y4VKU3Ay9HldpvQKOEqANpCq616HyzNmt9UGGvaPpqUlW5gS', 'customer', NULL, '2017-01-05 18:22:04', '2017-01-05 18:22:04'),
(64, 'joel', '$2y$10$JS22efjwfGLimhN7GonYROoOx5i9TIVu8g2Z8ZdkG3EC5LU82OwBi', 'customer', 'F51NrJ3Ntf9T2qyK5tYwtAF6FOGBGXJkyB6dKvzHZNOV03DPXuxqaVyzywDz', '2017-01-05 18:22:15', '2017-01-20 08:11:17'),
(65, 'johan', '$2y$10$d8fXZYfnn3bkpbbbre1.buDvp/PSrxPaQvsv7wccUPaJlpaCsPzoa', 'customer', NULL, '2017-01-05 18:23:08', '2017-01-05 18:23:08'),
(66, 'juliper', '$2y$10$qpStTxd6xciHnRna9.Bzl.korHeBKvFa5l/Fq/frbxXYfUapov8h.', 'customer', NULL, '2017-01-05 18:23:24', '2017-01-05 18:23:24'),
(67, 'lestari', '$2y$10$riK8kTXUb3sbGUOEYdu0AeZlD4xSTiFBj2QKnWDy6YtKa4BFoCipi', 'customer', NULL, '2017-01-05 18:23:40', '2017-01-05 18:23:40'),
(68, 'lily', '$2y$10$c4HF9rfwoPbqyOUgGSU7aOTHvgGSJoUHZntc9uuIFwiCIk2CaaZ.O', 'customer', NULL, '2017-01-05 18:23:54', '2017-01-05 18:23:54'),
(69, 'martupa', '$2y$10$YuThH3AtEcecijuX29YLauCqGm4mIdjYFEnbhAJDgosiWqJb88pUC', 'customer', NULL, '2017-01-05 18:24:09', '2017-01-05 18:24:09'),
(70, 'palti', '$2y$10$HvOAakQKLDXIp69AimQmbOkhKdhAkwdd3jqMNBV.CZNnHKOQ1J9Nq', 'customer', NULL, '2017-01-05 18:24:21', '2017-01-05 18:24:21'),
(71, 'patota', '$2y$10$h3/WtY57IQV0LyvX5LvrGuj1kood0VfgXjwYAuY8Ub/EJqWbfP2wW', 'customer', NULL, '2017-01-05 18:24:34', '2017-01-05 18:24:34'),
(72, 'pratiwi', '$2y$10$zinaF3shDRNdccPvaIBNeOw.4VhrI37jTPZKDLWm/qD2jfEbA2jN2', 'customer', NULL, '2017-01-05 18:24:47', '2017-01-05 18:24:47'),
(73, 'rahel', '$2y$10$wSKh/UQhu8KBMdXTlHaFaOK6HVCn3Do27t0c8Be784nRha1nT8NLS', 'customer', NULL, '2017-01-05 18:24:58', '2017-01-05 18:24:58'),
(74, 'rizky', '$2y$10$cHsMVfYorE5wK/Tw5A0abOJTX7AriXYx6yciUHzDdzcXw2WQC30.e', 'customer', NULL, '2017-01-05 18:25:11', '2017-01-05 18:25:11'),
(75, 'winda', '$2y$10$CzdyOr20u8HvQE.i0Fq1ous1KZnSClNViQQBbHebT8I4njHt3i7cC', 'customer', NULL, '2017-01-05 18:25:34', '2017-01-05 18:25:34'),
(76, 'yessica', '$2y$10$KhvUVMAz2VSnoR1/UAk81ejkFiG/ggwU9nHtR.DxKkG//dQnELBZ.', 'customer', NULL, '2017-01-05 18:25:51', '2017-01-05 18:25:51'),
(77, 'yolanda', '$2y$10$EU0S5STwKWXDUWQ.Gt4EDOhqsgmD0FPskjfiWlTjhTYoSq2uq9dQK', 'customer', NULL, '2017-01-05 18:26:06', '2017-01-05 18:26:06'),
(78, 'yonatan', '$2y$10$ccJ/kckNJLQYpOEXyIeEtu8vBETqP4Uq.usAzAuYnWHeirT1LVpYK', 'customer', NULL, '2017-01-05 18:26:22', '2017-01-05 18:26:22'),
(79, 'hans', '$2y$10$Na/UejmGKYjiX4R9XzIAZ.DEra/0i5fu.QYTsbm29rdnrynfWU7aK', 'customer', NULL, '2017-01-05 18:26:33', '2017-01-05 18:26:33'),
(80, 'jhoncha', '$2y$10$rWU12Bzy.F/UjZmEuvwVFedMjoBoJKm/9dRdtBuAXuIB/kMT0i5O6', 'customer', NULL, '2017-01-05 18:27:09', '2017-01-05 18:27:09'),
(81, 'rinto', '$2y$10$Jj1Jbi2gKLkhp1jlxscpKemRpe9uubR3pzjQlkH/xZHXTeKfVRZdy', 'customer', '29iyGeO7IFTh4ub4QlSkPjcQYSEgLa6qWmGFqPzPFxanIl7YnZUIRIrFdq1s', '2017-01-05 18:27:24', '2017-01-06 00:38:51'),
(85, 'christine', '$2y$10$cd1pCSnr16eP/AJhk7zFOuHOjhHvCTxAyC7R2B/Xv2py60TLVjT2e', 'customer', NULL, '2017-01-09 05:55:52', '2017-01-09 05:55:52'),
(86, 'berta', '$2y$10$6FxN9gTn./rOYWzCPU9QHO99QfxbvogNYWRHFsb2jkaCoVGAxuqUe', 'customer', 'HUE7npvFjtTCnXcntTBJd8NJHDrUeo10qEP9wbS989NnXCD1XTXwLitakS5m', '2017-01-10 02:38:31', '2017-01-10 02:41:31'),
(87, 'gue', '$2y$10$AjPe2aJZ2tPkB1La56WPRubbDm/jB0RKtVyzGlbeDTVJi.JXmXjPy', 'admin', NULL, '2017-01-17 01:08:32', '2017-01-17 01:08:32'),
(88, 'guest', '$2y$10$bnbdHWsxPKcc.Qh1Td/27e7JuNMHJbqMd9rZw4uUsNeyKqJmT4pYK', 'admin', NULL, '2017-01-17 01:08:43', '2017-01-17 01:08:43'),
(92, 'dapot', '$2y$10$D9vf7sThm4xxzv0kHsdCrOiXp4/x44JXWCXfF.WpD.2PZE9TyQoSu', 'customer', 'BGBNK7MJfGkgBKnTls0Uv7wBGozIWtAhvmdWZDtZ4G02uzFJ4pHaltrsaM4y', '2017-01-20 08:34:54', '2017-01-20 08:35:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `dapur`
--
ALTER TABLE `dapur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_username`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_product_temp`
--
ALTER TABLE `order_product_temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_username`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `topup_history`
--
ALTER TABLE `topup_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup_request`
--
ALTER TABLE `topup_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `customer_data`
--
ALTER TABLE `customer_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `dapur`
--
ALTER TABLE `dapur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `order_product_temp`
--
ALTER TABLE `order_product_temp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topup_history`
--
ALTER TABLE `topup_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `topup_request`
--
ALTER TABLE `topup_request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
