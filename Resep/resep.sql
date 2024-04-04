-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 01:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_user`, `username`, `password`) VALUES
(1, 'Rivano', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `dataresep`
--

CREATE TABLE `dataresep` (
  `id_resep` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `waktu` int(4) NOT NULL,
  `bahan` varchar(5000) NOT NULL,
  `langkah` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataresep`
--

INSERT INTO `dataresep` (`id_resep`, `judul`, `kategori`, `waktu`, `bahan`, `langkah`) VALUES
(1, 'Siomay Ikan', 'Appetizer', 50, '- 350 gr ikan\r\n- 3 sdm tepung kanji\r\n- 2 butir telur\r\n- 2 siung bawang putih\r\n- 1 sdt garam\r\n- 2 batang daun bawang\r\n- 1 buah wortel, cincang\r\n- gula secukupnya', '1.Haluskan ikan. Haluskan bawang putih dan merica bubuk. Campur dengan semua bahan hingga jadi adonan. Tambahkan air jika terlalu padat. Tes rasa.\r\n2.Bentuk adonan dan bungkus dengan kulit siomay.\r\n3.Panaskan kukusan, dan kukus siomay kurang lebih 20 menit atau hingga matang.'),
(2, 'Serabi', 'Appetizer', 120, '- 300 ml santan kelapa\r\n- 8 sdm tepung beras\r\n- 5 sdm gula pasir\r\n- Sejumput garam\r\n- Ragi instan secukupnya', '1.Masak santan dengan gula hingga mendidih. Kemudian biarkan santan dingin terlebih dahulu.\r\n2.Dalam wadah lain, masukkan tepung beras, garam, ragi dan santan yang telah dingin, campur hingga rata.\r\n3.Panaskan cetakan dengan api kecil, dapat juga menggunakan wajan gerabah. Ambilah satu sendok sayur dan tuang ke dalam cetakan.\r\n4.Biarkan serabi hingga muncul rongga-rongga dan serabi benar-benar matang. Angkat dan lakukan pada adonan yang masih tersisa.\r\n5.Sajikan serabi Jawa dengan parutan kelapa supaya lebih nikmat.'),
(3, 'Martabak Telur', 'Appetizer', 45, '- 10 lembar kulit lumpia\r\n- 1 blok tahu putih\r\n- 2 butir telur ayam\r\n- 2 lembar daun bawang\r\n- 1/2 sdt garam\r\n- cabai rawit hijau secukupnya\r\n- 2 siung bawang putih dan 10 butir - merica, dihaluskan', '1.Haluskan tahu. Potong halus cabai rawit dan daun bawang. Aduk rata, tambahkan garam.\r\n2.Tumis bawang putih dan merica yang sudah dihaluskan. Masukkan tahu, masak setengah matang. Dinginkan.\r\n3.Masukkan telur ke campuran tahu. Aduk rata.\r\n4.Masukkan isian ke kulit lumpia. Lipat jadi segi empat.\r\n5.Panaskan minyak. Goreng martabak tahu sampai kecokelatan. Angkat dan tiriskan.'),
(4, 'Lumpia Isi Bihun', 'Appetizer', 30, '- Kulit lumpia (secukupnya, kira-kira 10 buah)\r\n- 1 siung bawang bombay (cincang halus)\r\n- 2 siung bawang putih (memarkan, cincang halus)\r\n- 100 gram bihun (seduh pakai panas, tiriskan dan cincang kasar)\r\n- Garam (secukupnya)\r\n- Lada bubuk (secukupnya)\r\n- 1 buah wortel (cincang halus)\r\n- 1 batang daun bawang (cincang halus)\r\n- 1 batang daun seledri (cincang halus)\r\n- Kaldu ayam bubuk (secukupnya)\r\n- Minyak goreng (secukupnya)\r\n- 1 butir telur', '1.Buat isian lumpia. Tumis bawang putih dan bawang bombay hingga harum.\r\n2.Masukkan wortel, daun bawang, daun seledri dan bihun.\r\n3.Tambahkan garam, lada bubuk dan kaldu ayam. Masak hingga matang dan bumbu meresap. Angkat lalu sisihkan sebentar.\r\n4.Siapkan kulit lumpia dan letakkan isiannya (bihun) di atasnya. Lipat hingga lumpia tertutup dengan baik.\r\n5.Agar kulit lumpia tidak lepas saat digoreng, oleskan telur di bagian ujung lipatan kulit lumpia. Buat hingga semua lumpia jadi.\r\n6.Goreng lumpia di minyak panas hingga kecokelatan dan matang.\r\n7.Angkat lumpia dan segera sajikan selagi masih hangat.'),
(5, 'Bakwan Goreng Udang', 'Appetizer', 20, '- 2 buah kentang\r\n- 500 gr udang, cincang atau haluskan\r\n- 5 sdm tepung maizena\r\n- 2 butir telur\r\n- 2 siung bawang putih, cincang\r\n- 1 batang daun bawang, potong halus\r\n- 3 buah cabai rawit, potong kasar\r\n- Garam, lada, gula, dan penyedap rasa secukupnya\r\n- Minyak Goreng untuk menggoreng', '1.Kupas kentang, cuci bersih, lalu potong menjadi beberapa bagian. Rebus kentang dengan air mendidih, biarkan sampai kentang benar-benar matang.\r\n2.Jika kentang sudah matang, angkat dan tiriskan, lalu haluskan kentang. kupas kulit udang dan hilangkan kepalanya. Cuci dengan air bersih dan megalir. Selanjutnya haluskan atau cincang udang.\r\n3.Masukkan udang ke dalam adonan kentang yang telah dihaluskan sebelumnya. Masukkan semua bahan, kemudian aduk hingga rata.\r\n4.Panaskan minyak goreng di dalam wajan dengan api sedang. Lalu bentuk bulat-bulat adonan menggunakan sendok sembari dimasukkan ke dalam minyak panas.\r\n5.Goreng bakwan udang hingga berwarna kekuningan, jika sudah matang, angkat dan tiriskan.'),
(6, 'French Toast', 'Main Course', 60, '- 2 butir telur ayam\r\n- 2 sdm gula pasir\r\n- 2 sdm susu cair\r\n- 4 lembar roti tawar\r\n- minyak atau mentega secukupnya', '1.Kocok lepas telur, gula, dan susu di mangkuk.\r\n2.Celupkan roti ke adonan telur hingga kedua sisinya terendam.\r\n3.Olesi wajan teflon dengan minyak atau mentega.\r\n4.Panggang roti hingga matang di kedua sisinya.'),
(7, 'Pudding Custard', 'Dessert', 30, '- 1 bungkus agar-agar (7 gr)\r\n- 800 cc air\r\n- 1 liter susu cair\r\n- 8 sdm tepung custard\r\n- 20 sdm gula pasir (sesuai selera)\r\n- 4 butir kuning telur, kocok lepas\r\n- 1/2 sdt garam\r\n- 1 sdt essence vanila\r\n- 2 sdt rum (boleh tidak memakainya)', '1.Campur semua bahan ke dalam panci kecuali rum, aduk rata\r\n2.Panaskan di atas kompor dengan api sedang sambil terus diaduk hingga mendidih dan mengental. Matikan api dan tambahkan rum, aduk terus sampai agak dingin\r\n3.Tuang ke dalam cetakan dan biarkan beku. Hias atasnya dengan buah\r\n4.Siap dihidangkan.'),
(8, 'Lekker Holland (Boterkoek)', 'Dessert', 60, '-200 gr butter\r\n-1 butir telur\r\n-100 gr gula halus\r\n-200 gr tepung terigu\r\n-25 gr susu bubuk\r\n-1 butir kuning telur (olesan)', '1.Mixer butter dan telur hingga terlihat putih dan mengembang (kecepatan dari rendah ke sedang).\r\n2.Masukkan gula halus dan mixer hingga rata.\r\n3.Tambahkan tepung dan susu, aduk dengan spatula.\r\n4.Cetak adonan ke dalam loyang yang sudah diberi baking paper, bagian atas diberi olesan kuning telur dan topping sesuai selera.\r\n5.Panggang dengan suhu 170 derajat selama 20 menit (disesuaikan dengan oven dan loyang masing2).\r\n6.Keluarkan dari oven, diamkan sampai agak dingin dan potong sesuai selera.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dataresep`
--
ALTER TABLE `dataresep`
  ADD PRIMARY KEY (`id_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dataresep`
--
ALTER TABLE `dataresep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
