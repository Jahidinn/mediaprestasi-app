-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 03:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediaprestasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori-artikel` varchar(50) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `url_title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `article` varchar(20000) NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `id_users`, `tanggal`, `kategori-artikel`, `judul`, `url_title`, `image`, `article`, `keywords`) VALUES
(1, 'kk', '2019-02-24', 'pendidikan', 'Cara meraih beasiswa ke luarnegeri bareng dia dan siapa yah ngga tau', 'cara-meraih-beasiswa-ke-luarnegeri-bareng-dia-dan-siapa-yah-ngga-tau', '7345dfc703d06f3e8b2bf5e670cb72c2.jpg', '<p>caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui caranya adalah dengan mengetahui</p>\r\n', 'beasiswa'),
(2, 'Kk', '2019-02-24', 'Pendidikan', 'cara meraih beasiswa ke jepang', 'cara-meraih-beasiswa-ke-jepang', 'b062cf11aee3c94a96675b6aa3d7d3b4.png', '<p>caranya adalaaaah</p>\r\n', 'beasiswa, lomba, luar negeri'),
(3, 'Kk', '2019-02-24', 'Pendidikan', 'Cara meraih beasiswa ke luarnegeri dengan beasiswa', 'cara-meraih-beasiswa-ke-luarnegeri-dengan-beasiswa', '019851eb1e99d0cc860471bf10ecdd2a.PNG', '<p>caranya yaitu</p>\r\n', 'beasiswa, lomba, luar negeri'),
(5, 'Kk', '2019-03-09', 'Pendidikan', 'Cara meraih beasiswa ke luarnegeri bersama saya', 'cara-meraih-beasiswa-ke-luarnegeri-bersama-saya', 'db6891dff563c220ef176bff6952c2ff.jpg', '<p>jajajjajaja</p>\r\n', 'beasiswa, lomba, luar negeri');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `link_upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `kategori`, `icon`, `link`, `link_upload`) VALUES
(1, 'Lomba', 'lomba.png', 'lomba', 'event/add'),
(2, 'Beasiswa', 'beasiswa.png', 'beasiswa', 'event/add'),
(3, 'Event', 'event.png', 'event', 'event/add'),
(4, 'Ebook', 'ebook.png', 'ebook', 'ebook/add'),
(5, 'Lainya', 'lainya.png', 'lainya', 'event/add'),
(6, 'Sponsor', 'sponsor.png', 'sponsor', 'sponsor/add'),
(7, 'Artikel', 'sponsor.png', 'artikel', 'artikel/add');

-- --------------------------------------------------------

--
-- Table structure for table `comment_reply`
--

CREATE TABLE `comment_reply` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `balasan` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_reply`
--

INSERT INTO `comment_reply` (`id`, `id_event`, `id_comment`, `id_user`, `email`, `nama`, `tanggal`, `jam`, `balasan`) VALUES
(1, 8, 1, 'Kk', 'jahidin.inspirit@gmail.com', 'Jahidin', '2019-03-09', '07:58 AM', 'klik link ini'),
(2, 8, 2, 'Kk', 'jahidin.inspirit@gmail.com', 'Jahidin', '2019-03-09', '08:42 AM', 'wahh'),
(3, 8, 2, 'Kk', 'jahidin.inspirit@gmail.com', 'Jahidin', '2019-03-09', '08:48 AM', 'okee');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id` int(11) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori-ebook` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `url_title` varchar(220) NOT NULL,
  `file` varchar(200) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `keywords` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `id_users`, `tanggal`, `kategori-ebook`, `judul`, `url_title`, `file`, `deskripsi`, `keywords`) VALUES
(1, 'kk', '2019-02-24', 'Pendidikan', 'Cara meraih beasiswa ke luarnegeri 1', 'cara-meraih-beasiswa-ke-luarnegeri-1', 'Jahidin_53014160101.pdf', '<p>okedeh gann</p>\r\n', 'beasiswa, lomba, luar negeri');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `id_users` varchar(500) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `link` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `peserta` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `deskripsi` varchar(50000) NOT NULL,
  `views` mediumtext NOT NULL,
  `likes` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `id_users`, `kategori`, `judul`, `link`, `deadline`, `image`, `peserta`, `instansi`, `deskripsi`, `views`, `likes`) VALUES
(1, 'Kk', 'Event', 'Beasiswa VDMS 2019 untuk mahasiswa s1', 'Vdms2019', '0000-00-00', '64382c73fb4e33af85662494eae9dbce.jpg', 'Mahasiswa d3/s1', 'Van deveter mass indonesia', '<p><strong>ketentuan umum :</strong></p>\r\n\r\n<p>1. Mahasiswa</p>\r\n\r\n<p>2. Sedang kuliah</p>\r\n', '', ''),
(2, 'Kk', 'Lomba', 'Lomba cipta puisi nasional 2019', 'Puisi2019', '0000-00-00', 'b70169906dd6e125a9839c05ebe46fa2.jpg', 'Mahasiswa dan siswa', 'Ristek dikti', '<p>Syarat peserta :</p>\r\n\r\n<p>1. Manusia</p>\r\n\r\n<p>2. mahassiswa</p>\r\n\r\n<p>lomba puisi</p>\r\n', '', ''),
(3, 'kk', 'Seminar', 'Beasiswa tokopedia 2019 untuk mahasiswa s1 semester 5', 'tokopedia2019', '0000-00-00', 'ae27ad8425e7abe94afa93691a085cea.jpg', 'Mahasiswa s1', 'Pt. Tokopedia indonesia', '<p><strong>syarat beasiswa :</strong></p>\r\n\r\n<p>1. Mahasiswa indonesia</p>\r\n', '', ''),
(4, 'Kk', 'Lomba', 'Lomba karya tulis ilmiah nasional', 'lktin', '0000-00-00', '54d8b74a4c297233d74f90be3512d6a4.jpg', 'Siswa tua ', 'Unnes', '<p>Lombanya adalah</p>\r\n', '', ''),
(5, 'kk', 'Beasiswa', 'Lomba masak air putih 2019', 'lktin201892', '0000-00-00', '1a85d9df9ee150cc51ec2d9737637337.jpg', 'Orang indonesia', 'unnes', '<p>ajajjaja ssjsjs nahaha naha kksk</p>\r\n', '', ''),
(7, 'kk', 'Beasiswa', 'Beasiswa bidikmisi Tahun 2019 oleh pemerintah naik 900?ri tahun-tahun sebelumnya yang hanya ', 'bidikmisi2019', '0000-00-00', '8b694532e304dc653a8cb0959b2fe8b9.jpg', 'Mahasiswa - Nasional', 'Ristek dikti', '<p><strong>Persyaratan :</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><strong>Hadiah :</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Link ebook <a href=\"http://google.com\">Disini</a></p>\r\n', '', ''),
(8, 'Jay', 'Beasiswa', 'Lomba masak ikan mateng', 'masak2019', '0000-00-00', 'b89717e798dfdc8fdc593fedf8591f1d.jpeg', 'mahasiswa- Jawa tengah', 'Universitas negara indonesia', '<p><strong>Syarat :</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><strong>Hadiah :</strong></p>\r\n\r\n<p>Lorem ipsum dolor si amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>daftar segera !! <a href=\"http://google.com\">Daftar</a></p>\r\n', '', ''),
(9, 'Jay', 'Lowongan pekerjaan', 'Lomba masak ikan mateng', 'masak2019', '0000-00-00', 'c7d3a3d8cf8791b911eb502996d33e45.jpg', 'mahasiswa- Jawa tengah', 'Universitas negara indonesia', '<p><strong>Syarat :</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><strong>Hadiah :</strong></p>\r\n\r\n<p>Lorem ipsum dolor si amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>daftar segera !! <a href=\"http://google.com\">Daftar</a></p>\r\n', '', ''),
(10, 'Jay', 'Lowongan pekerjaan', 'Lomba masak ikan mateng', 'masak2019', '0000-00-00', 'fe7848a638a95bc58c982fc3ef6379ab.jpg', 'mahasiswa- Jawa tengah', 'Universitas negara indonesia', '<p><strong>Syarat :</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><strong>Hadiah :</strong></p>\r\n\r\n<p>Lorem ipsum dolor si amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>daftar segera !! <a href=\"http://google.com\">Daftar</a></p>\r\n', '', ''),
(11, 'kk', 'Lowongan pekerjaan', 'Lowongan kerja di perusahaan saya', 'Lowongan201o1', '0000-00-00', '5fc6ffcc76efadcfa23e466f6457cdcf.jpg', 'Fresh graduate', 'Ristek dikti 2019', '<p><strong>syarat peserta :</strong></p>\r\n\r\n<p>1. Peserta adalah manusia</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` varchar(1000) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `komentar` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_event`, `id_user`, `nama`, `email`, `tanggal`, `jam`, `komentar`) VALUES
(1, 8, '0', 'Jahidin', 'jahidin.inspirit@gmail.com', '2019-03-08', '09:32 AM', 'caranya gimana?'),
(2, 8, '0', 'makanan', 'admin@admin.com', '2019-03-08', '09:33 PM', 'hallo'),
(3, 11, 'jahidin.inspirit@gmail.com', 'Jahidin', 'jahidin.inspirit@gmail.com', '2019-03-09', '12:45 AM', 'cara daftarnya gimana ?'),
(4, 2, 'jahidin@jay.com', 'Jahidin jay', 'jahidin@jay.com', '2019-03-09', '09:25 AM', 'Cara daftarnya gimana gan ini,?');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `catatan` varchar(500) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama`, `catatan`, `foto`) VALUES
(102, 'Kk', 'jahidin.inspirit@gmail.com', '294f20e956d51ef84cb769b2d58c2fb8cbac7f70831ef3ecc93d0476aebb46d4f3f63fe416d106ac8aae8ea833e42c9b66eb8b5660b99fe6f87c1590e3839db3Y5qxt4I70g6SrJkpngfon3Eq0Mb2SG85HqAzO0+mm4s=', 'Jahidin', 'saya adalah orang yang paling rajin', 'a39d399cceb8bb35dc55e0d14bc4c77a.jpg'),
(103, 'Jay', 'admin@admin.com', '496118322c06503edaeed749539783ba8558bd65ce2b5ddcb6e0f274e941be4bf29c784e5f01b06ad88b312f9448278d41f9345451c7752e9ac00976b0431d5c9I+CAkl9iFFlMMkOdwa0oi4RbbBvsfp4401YquNjRFE=', 'Jahidin jay', 'Mulailah dari sekarang atau orang lain yang akan memulainya', '9a02ab7c37575c109d0a31cbfb07cf59.jpg'),
(104, 'Jahidin', 'Jahidin@students.unnes.ac.id', 'ac7aaf297c0f66fbfac4e5fa45d325dcad3d268d34665ef363aa5038857f66b4795d567bf9b539bd566d445b4374caa2b5986367bc1bc857fd0526501ffcffe8fu6lRhLCCbClNEWVqGNym2+uX4hnAZ4pGQEDerTIWL8=', 'Jahidin', 'Mulailah dari sekarang atau orang lain yang akan memulainya', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_reply`
--
ALTER TABLE `comment_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment_reply`
--
ALTER TABLE `comment_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
