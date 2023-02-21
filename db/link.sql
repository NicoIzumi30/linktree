-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 03:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `image`) VALUES
(2, 'Instagram', 'ea4f24e5592e29a2030337d8e9eb9866.png'),
(3, 'Whatsapp', 'd7f629a40c8232e9f9b1064e85d78e1d.png'),
(4, 'Github', 'cdf4fbf3eff708a99b7023a366478a3d.png'),
(5, 'Twitter', 'c5aee7993ad002069626209fab2e6707.png'),
(6, 'Website', '94fbc7c11a51a668eaca871ad2d6ee22.png'),
(7, 'Linkedin', '7eb05faf4bb695542763a55fcb5dcf4f.png'),
(8, 'Tiktok', '7187b2e674c438710ce84e5842fc99fe.png'),
(9, 'Facebook', 'aa9830e4cb4f4f0d9d36502efc209dd2.png');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_link` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_link`, `id_kategori`, `url`, `user_id`) VALUES
(1, 2, 'https://instagram.com/in.zellaa_', 1),
(4, 3, 'wa.me/62859126462972', 1),
(5, 4, 'https://github.com/NicoIzumi30', 1),
(6, 6, 'https://niczumi.my.id/', 1),
(7, 7, 'https://www.linkedin.com/in/heru-kristanto-12a86a251/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `deskripsi`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Heru Kristanto', 'izumi@mail.com', 'niczumi', ' I have a high interest in website and application development.', 'a34a95a1fc73f1b7321c1e648d973149.jpg', '$2y$10$eZ1zsN22l6Epwl.umfdGQO0.zx0CK1R2Zh5BQPonX11Irmclk/tfW', 1, 1, 1664092535),
(8, 'Rafi', 'jal@admin.com', '', '', 'default.jpg', '$2y$10$PiQVnpM8Bmm3eBDST3oNx./mxUJs7kTs0skpRQIBgiTVRWMUp.iui', 1, 0, 1665026453),
(9, 'Bella', 'bela@mail.com', '', '', 'default.jpg', '$2y$10$kw3RdQwa.rY.miSDS/tRkeWA6ZJwDA.HZihdZ9CgLnh6u4B/JdHZC', 7, 1, 1668475090),
(10, 'Bella', 'izumi123@mail.com', '', '', 'default.jpg', '$2y$10$5WXClpm84pgo0221cx/26Ol8CUFD6gvJR4W6VEyrFztbgcIck98eC', 2, 1, 1668484918),
(15, 'Nico Izumi', 'tantoyk7@gmail.com', '', '', 'default.jpg', '$2y$10$RZzN8HBfawAumuDGAy1GAuXEethiOZnNtKeZ3pYzMsyLBbosVZ1P6', 7, 1, 1668875356),
(16, 'Buka Lapak', 'cobaan@mail.com', '', '', 'default.jpg', '$2y$10$mA3wTfnE6gD498/yIAwik.cIx6BJY367/rZWck11xwCTcRpkPKf/G', 7, 1, 1668888991),
(17, 'Ridho Pamungkas', 'ridhopamungkas@gmail.com', '', '', 'default.jpg', '$2y$10$7V0Y5AyatD123SrfvfO54uKOb.r4D2w1jtPkvqjAdGhPETaujZ/mK', 7, 1, 1674101823),
(18, 'Gilang Ramahan Pratama', 'gilangrmdhan@gmail.com', '', '', 'default.jpg', '$2y$10$35Nl9PCEIbvspYA.qKPjyOec21grkgZs7MUqyt9o3LjLknyjItBvC', 7, 1, 1674102470),
(19, 'Heru Kristanto', 'herukristanto2@gmail.com', '', '', 'default.jpg', '$2y$10$GSGTDU2xmw0ZvmaGE48N3OLroFG/WohBHVZkWUOlwQmHPkvSnxodC', 7, 1, 1674102939),
(20, 'Heru Kristanto', 'herukristanto30@gmail.com', '', '', 'default.jpg', '$2y$10$hvUNoNfMwuWV.FDxTA6ckuvI61qo9vCJCjZBJtFF13zzJJezT1Gh.', 7, 1, 1674169562);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 5),
(11, 1, 10),
(13, 1, 12),
(14, 1, 13),
(15, 2, 1),
(16, 2, 5),
(17, 2, 11),
(18, 2, 13),
(22, 1, 9),
(23, 1, 11),
(28, 1, 6),
(29, 2, 2),
(31, 1, 15),
(36, 1, 16),
(37, 1, 17),
(38, 1, 18),
(39, 1, 19),
(41, 1, 2),
(42, 1, 14),
(45, 7, 2),
(46, 7, 17),
(47, 7, 1),
(48, 1, 20),
(49, 1, 22),
(50, 1, 23),
(51, 7, 23),
(52, 1, 24),
(53, 1, 25),
(54, 8, 1),
(55, 8, 2),
(56, 8, 24),
(57, 8, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user_client`
--

CREATE TABLE `user_client` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_client`
--

INSERT INTO `user_client` (`id`, `full_name`, `email`, `telp`, `password`, `image`, `is_active`, `role`, `date_created`) VALUES
(1, 'Izumii', 'xzumi3@gmail.com', '859126462972', '$2y$10$K4d.D3Lg4JVeoyktkh/0SuwTMhoUPijfXvwfs17QjQJpSDdaiWx7.', 'default.jpg', '1', 'member', '1667233868'),
(2, 'Izumii', 'xzumi31@gmail.com', '859126462972', '$2y$10$i5pQ6AfTeS3ycdkQIXdhle9SDkVQEIU2pOMxhFZEvc2XoUEHRF3la', 'default.jpg', '1', 'partner', '1667234340'),
(3, 'Izumii', 'xzumi311@gmail.com', '234242', '$2y$10$62AhBpxB2anpgrsWYj5Kt.PKXhOJiDEihogUgkZFNB3eNDk4nCmZC', 'default.jpg', '1', 'member', '1668325799'),
(4, 'Heru Kristanto', 'heru@mail.com', '12345678', '$2y$10$kE9EGuckpp/TBjuo1yrQ1.8M6sa2psU3XZGW8eMD4XhHRr/LTU01u', 'default.jpg', '1', 'member', '1669168996'),
(5, 'Heru Kristanto', 'herukristanto2@mail.com', '0859126462972', '$2y$10$.VbFd3JlnGCXe9dxAas.3./8lji0m4TA4plxw7.k.dnXpgncUzqdS', 'default.jpg', '1', 'member', '1674088696'),
(6, 'Ridho Pamungkas', 'ridhopamungkas@gmail.com', '085696232418', '$2y$10$e1feVBrdcoZGKF9VWvCRYulUQHyqCtzhPW2oOGueeucuetLUQwIIm', 'default.jpg', '1', 'member', '1674101532'),
(7, 'Gilang Ramadhan Pratama', 'gilangrmdhan@gmail.com', '082110432047', '$2y$10$Ek1kCSqhXWbLlJ0vN8JgCuCD/Qn88oFyQ/5fwj.fIo/zdFMzGIxui', 'default.jpg', '1', 'member', '1674102196'),
(8, 'Heru Kristanto', 'herukristanto2@gmail.com', '081316592005', '$2y$10$rQPhZmYAZPDXowpmKQ9gv.PLhGDMtTMQip/R0BpxkROuLr1gFf/Uu', 'default.jpg', '1', 'member', '1674102700'),
(9, 'Rahayu Putri Selina', 'rhyuptrilina@gmail.com', '087882129535', '$2y$10$dg8K1EQv5NZ1.loeOjmXreo1pPV947FCmWwZPh3QeikvYwU8p./7u', 'default.jpg', '1', 'member', '1674103089'),
(10, 'Heru Kristanto', 'herukristanto30@gmail.com', '0859126462972', '$2y$10$tMLMRIuEyiqAZL6zeoVu/Oo5Ez3Z/Twx6adKScs18yMt1H4ki9br.', 'default.jpg', '1', 'member', '1674168543');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`) VALUES
(1, 'Dashboard', 'fas fa-fw fa-tachometer-alt'),
(2, 'Profile', 'fas fa-fw fa-user'),
(6, 'Menu', 'fas fa-fw fa-folder'),
(14, 'Users', 'fas fa-fw fa-users'),
(24, 'kategori', 'fas fa-fw fa-users'),
(25, 'Linktree', 'fas fa-fw fa-city');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(8, 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 1),
(2, 2, 'My Profile', 'profile', 1),
(3, 2, 'Edit Profile', 'profile/edit', 1),
(4, 5, 'Data Kategori Menu', 'product/category', 1),
(5, 5, 'Data Variasi Menu', 'product/variasi', 1),
(6, 6, 'Menu Management', 'menu', 1),
(7, 6, 'Sub Menu Management', 'menu/submenu', 1),
(12, 10, 'Article', 'pr/article', 1),
(13, 11, 'Article', 'pr/article', 1),
(14, 12, 'Laporan Survey', 'survey', 1),
(15, 13, 'Pinter Hits Challenge', 'challenge', 1),
(16, 11, 'Upload Image', 'pr/upload_image', 1),
(17, 6, 'Role', 'menu/role', 1),
(18, 2, 'Change Password', 'profile/changepassword', 1),
(19, 19, 'List City', 'city', 1),
(20, 15, 'List Type', 'type', 1),
(21, 16, 'Data Hotel', 'hotel', 1),
(22, 17, 'Data room', 'room', 1),
(23, 14, 'User Admin', 'users/user_admin', 1),
(25, 20, 'Data Pengajuan Hotel', 'pengajuan/data', 1),
(26, 20, 'Data Pesan', 'pengajuan/tampungan', 1),
(27, 22, 'Category Payment Method', 'payment/category', 1),
(28, 22, 'Payment Method', 'payment', 1),
(29, 23, 'Pesanan', 'transaksi/pesanan', 1),
(30, 23, 'Data Transaksi', 'transaksi', 1),
(31, 23, 'Pesanan Gagal', 'transaksi/failed_order', 1),
(32, 24, 'Data Kategoti', 'kategori', 1),
(33, 25, 'Link Tree', 'linktree', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_client`
--
ALTER TABLE `user_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_client`
--
ALTER TABLE `user_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
