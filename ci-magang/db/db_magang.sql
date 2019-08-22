-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2019 pada 19.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(31, 'Faizzz', 'fz@gmail.id', 'default.png', '$2y$10$5e7q.OZXG01WWvHuSJ8TxeayvB4jysTitN3awGp1VgYhv2KzP4UOq', 1, 1, 1563941550),
(32, 'Yoyozzz', 'yoz@gmail.co', 'yoyoz.png', '$2y$10$xo4dfKMDejx9BGiQTthl5.dgxuZ1STI8/9yrpcCjJBBo7rhCMbAou', 2, 1, 1564036131),
(33, 'Koteee', 'kote@bib.id', 'default.jpg', '$2y$10$XVye2xhyAOuzM1kEwUxWtuCSU0AIelE81PjLtcN88x57f3..yxPl2', 2, 1, 1564040827);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kegiatan`
--

CREATE TABLE `detail_kegiatan` (
  `id_det` int(10) NOT NULL,
  `id_keg` int(10) NOT NULL,
  `image` varchar(128) NOT NULL,
  `harga` float NOT NULL,
  `tgl_keg` date NOT NULL,
  `id_pem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(10) NOT NULL,
  `nama_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(5401, 'Makanan  '),
(5402, 'Minuman   '),
(5404, 'Emmm Hmm    '),
(5405, 'Tjoba'),
(5406, 'Popopop'),
(5408, 'Popopopooppp'),
(5409, 'Typo ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_keg` int(10) NOT NULL,
  `nama_keg` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `id_lok` int(10) NOT NULL,
  `id_sub` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_keg`, `nama_keg`, `image`, `id_lok`, `id_sub`) VALUES
(11202201, 'Rok an', '', 9804, 9210),
(11202202, 'Joba', '', 9803, 9202);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lok` int(10) NOT NULL,
  `nama_lok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lok`, `nama_lok`) VALUES
(9801, 'Bogor '),
(9803, 'Batavia'),
(9804, 'Pantai Gading ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `id_mem` varchar(20) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(180) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_kat` varchar(30) NOT NULL,
  `id_sub` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `id_lok` int(10) NOT NULL,
  `role_id` varchar(5) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `id_mem`, `username`, `email`, `image`, `password`, `id_kat`, `id_sub`, `alamat`, `telp`, `is_active`, `id_lok`, `role_id`, `date_created`) VALUES
(1, '', '', 't@t.t', 'default.jpg', '$2y$10$nkFVGAToOXg22', '', '9210', 'SSK', '93179', '1', 9801, '2', '1565157693'),
(2, 'BR507082019001', 'wewww', 'ran@m.m', 'default.jpg', '$2y$10$P9VOH4xlvYgHC', '5402', '9210', 'ASASAH', '123214', '1', 9803, '2', '1565166481');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(10) NOT NULL,
  `id_user` varchar(60) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `id_user`, `username`, `jenis_kel`, `email`, `password`, `telp`, `role_id`, `is_active`) VALUES
(1, 'wk', 'wk', 'Laki-Laki', 'qlsh@t.v', '$2y$10$BL.1VE2bmrHBB', '08564', 3, '1'),
(2, 'Hmm', 'Hmm', 'Laki-Laki', 'hm@hm.hm', '$2y$10$n37hPFRNdznU4', '08564', 0, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub` int(10) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `id_kat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub`, `nama_sub`, `id_kat`) VALUES
(9202, 'Nganu uu', 5402),
(9210, 'P', 5402);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(10) NOT NULL,
  `id_pes` int(10) NOT NULL,
  `id_det` int(10) NOT NULL,
  `bayar_nominal` float NOT NULL,
  `jenis_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `email` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `jenis_kel`, `email`, `image`, `password`, `telp`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Kote', 'P', 'kote@bib.id', 'member.png', '$2y$10$zlI6C.bmRRLue7QhE0FqDub52PXlNBCrg360MuLM.R/Fo5BUDzq0m', '0892832', 2, 1, 1564127848),
(2, 'wAw', 'P', 'w@w.w', 'user.png', '$2y$10$z1LLBmI6mL.rmlkDuRLV0OEWgfk.H3BPon/urTqv5qjxIj9XATIR6', '087937188', 3, 1, 1564376700),
(3, 'Faizzz', 'L', 'faiz@g.com', 'default.png', '$2y$10$ESEJO0m.LdfiXUkTsZnP8OOjsg/iraAd8/apeBtQc5Ri/o4qwy5oe', '0827712', 1, 1, 1564633869),
(5, 'Hmm', 'P', 'hm@hm.hm', 'default.jpg', '$2y$10$8nCehzedZqRdOvDrJAUVzOtGFy3CXKcnK8DP.OhPM81Eac0KOiZLy', '084572', 3, 1, 1565070981),
(6, '', '', 't@t.t', 'default.jpg', '$2y$10$rEXXc/NnIloVWZ5JB13zfODUYnBuBGVukf24YCVzBSEmurO6K7876', '93179', 2, 1, 1565157692),
(7, 'Typo', '', 's@h.h', 'default.jpg', '$2y$10$tLkkqzxfp41iSA5H/sOf5uKfha8AT72e/NQRFpGXR70IrsKza04Ga', '127001297', 2, 1, 1565166344),
(8, 'wewww', '', 'ran@m.m', 'default.jpg', '$2y$10$8JQxy8pk2XOqVC1lPVmpIO/XopH/psIZLh.Yqsv4NjAf6RQlDWOyG', '123214', 2, 1, 1565166481);

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_akses`
--

CREATE TABLE `u_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_akses`
--

INSERT INTO `u_akses` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_menu`
--

CREATE TABLE `u_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_menu`
--

INSERT INTO `u_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_role`
--

CREATE TABLE `u_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_role`
--

INSERT INTO `u_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_submenu`
--

CREATE TABLE `u_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_submenu`
--

INSERT INTO `u_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/Home', 'settings_input_svideo', 1),
(2, 1, 'Member', 'admin/Member', 'supervisor_account', 1),
(3, 1, 'User', 'admin/User', 'supervisor_account', 1),
(4, 1, 'Kegiatan', 'admin/Kegiatan', 'library_books', 1),
(5, 1, 'Transaksi', '#', 'shopping_basket', 1),
(6, 1, 'Kategori', 'admin/Kategori', 'view_day', 1),
(7, 1, 'Subkategori', 'admin/Sub', 'list', 1),
(8, 1, 'Lokasi', 'admin/Lokasi', 'location_on', 1),
(9, 1, 'Akun detail', 'admin/Profil', '	\r\nperm_identity', 1),
(10, 2, 'Dashboard', 'member/Member', 'dashboard', 1),
(11, 2, 'Kegiatan', 'member/Kegiatan', 'library_books', 1),
(12, 2, 'Transaksi', '#', 'shopping_basket', 1),
(13, 2, 'Lokasi', 'member/Lokasi', 'location_on', 1),
(14, 2, 'Akun Detail', 'member/Member/detail', 'perm_identity', 1),
(15, 3, 'Dashboard', 'user/User', 'dashboard', 1),
(16, 3, 'Kegiatan', 'user/User/Keg', 'library_books', 1),
(17, 3, 'Akun Detail', 'user/User/Detail', 'perm_identity', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  ADD PRIMARY KEY (`id_det`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lok`),
  ADD KEY `id_lok` (`id_lok`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `u_akses`
--
ALTER TABLE `u_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `u_menu`
--
ALTER TABLE `u_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `u_role`
--
ALTER TABLE `u_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `u_submenu`
--
ALTER TABLE `u_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  MODIFY `id_det` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5410;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_keg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11202203;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9805;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9211;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `u_akses`
--
ALTER TABLE `u_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `u_menu`
--
ALTER TABLE `u_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `u_role`
--
ALTER TABLE `u_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `u_submenu`
--
ALTER TABLE `u_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
