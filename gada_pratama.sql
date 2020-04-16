-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Apr 2020 pada 03.20
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gada_pratama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(100) DEFAULT NULL,
  `id_kategori` varchar(3) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `posting` varchar(30) DEFAULT NULL,
  `editing` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `id_kategori`, `tgl`, `jam`, `hari`, `posting`, `editing`) VALUES
(1, 'NNMNM', '<p>NNMNMNMNM</p>', 'berita_1580171249', '1', '2020-01-28', '07:27:29', 'Selasa', 'administrator', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `ket`) VALUES
(2, 'galeri_1502674392.jpg', 'sdghgdsfdssd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(1, 'fgsd', 'sdfs', 'sdfsfs'),
(2, 'ksdfkjdsfndsnfm', 'm,nsc,sndfds', 'm cdndsfnsdf '),
(3, 'Harapan Baru berkembang', 'tegarsatyanegara.if@gmail.com', 'nmvcgd '),
(4, 'jhg', '085642752364', 'nbb'),
(5, 'dsfd', 'sdfd', 'sdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Artikel 1'),
(2, 'Artikel 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jumlah_bayar` int(7) DEFAULT NULL,
  `tgl_bayar` varchar(15) DEFAULT NULL,
  `kode_pendaftaran` varchar(10) DEFAULT NULL,
  `jenis_pembayaran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jumlah_bayar`, `tgl_bayar`, `kode_pendaftaran`, `jenis_pembayaran`) VALUES
(1, 120000, '2017-09-04', 'kdm002', 'baru'),
(2, 120000, '2017-09-04', 'kdm001', 'baru'),
(3, 9, '2020-01-21', 'ID005', 'baru'),
(4, 56000000, '2020-02-04', 'ID001', 'baru'),
(5, 2147483647, '2020-02-11', 'IDPDPL001', 'baru'),
(6, 90900, NULL, 'IDPDPL002', 'perpanjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `kode_pendaftaran` varchar(10) DEFAULT NULL,
  `instansi_bujp` varchar(100) DEFAULT NULL,
  `alamat_bujp` varchar(100) DEFAULT NULL,
  `polres` varchar(20) DEFAULT NULL,
  `nama` varchar(23) DEFAULT NULL,
  `tempat_tgl_lahir` varchar(100) DEFAULT NULL,
  `alamat_rumah` varchar(100) DEFAULT NULL,
  `tinggi_badan` int(10) DEFAULT NULL,
  `berat_badan` int(10) DEFAULT NULL,
  `golongan_darah` varchar(10) DEFAULT NULL,
  `no_ktp` int(40) DEFAULT NULL,
  `no_npwp` int(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_hp` int(14) DEFAULT NULL,
  `rumus_sidik_jari` varchar(255) DEFAULT NULL,
  `nama_istri` varchar(50) DEFAULT NULL,
  `nama_suami` varchar(50) DEFAULT NULL,
  `jumlah_anak` varchar(50) DEFAULT NULL,
  `nama_orang_tua` varchar(50) DEFAULT NULL,
  `sd_tahun` int(20) DEFAULT NULL,
  `sltp_tahun` int(20) DEFAULT NULL,
  `slta_tahun` int(20) DEFAULT NULL,
  `diploma_tahun` int(20) DEFAULT NULL,
  `sarjana` int(20) DEFAULT NULL,
  `gada_pratama_tahun` int(20) DEFAULT NULL,
  `no_ijazah_gada_pratama` int(40) DEFAULT NULL,
  `gada_madya_tahun` int(20) DEFAULT NULL,
  `no_ijazah_gada_madya` int(40) DEFAULT NULL,
  `gada_utama_tahun` int(20) DEFAULT NULL,
  `no_ijazah_gada_utama` int(40) DEFAULT NULL,
  `spesialisasi` varchar(255) DEFAULT NULL,
  `no_sertifikat_spesialisasi` int(255) DEFAULT NULL,
  `brivet` varchar(255) DEFAULT NULL,
  `pengalaman_kerja_tni_polri` varchar(100) DEFAULT NULL,
  `security` varchar(255) DEFAULT NULL,
  `tanda_jasa` varchar(255) DEFAULT NULL,
  `catatan_khusus` varchar(255) DEFAULT NULL,
  `tgl_kedaluarsa` date DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status_bayar` varchar(2) DEFAULT 't'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `kode_pendaftaran`, `instansi_bujp`, `alamat_bujp`, `polres`, `nama`, `tempat_tgl_lahir`, `alamat_rumah`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `no_ktp`, `no_npwp`, `email`, `no_hp`, `rumus_sidik_jari`, `nama_istri`, `nama_suami`, `jumlah_anak`, `nama_orang_tua`, `sd_tahun`, `sltp_tahun`, `slta_tahun`, `diploma_tahun`, `sarjana`, `gada_pratama_tahun`, `no_ijazah_gada_pratama`, `gada_madya_tahun`, `no_ijazah_gada_madya`, `gada_utama_tahun`, `no_ijazah_gada_utama`, `spesialisasi`, `no_sertifikat_spesialisasi`, `brivet`, `pengalaman_kerja_tni_polri`, `security`, `tanda_jasa`, `catatan_khusus`, `tgl_kedaluarsa`, `tgl`, `status_bayar`) VALUES
(3, 'IDPDPL001', 'polres bandung', 'alun-alun kajen', 'kabupaten pekalongan', 'tegar satya negara', 'pekalongan 28  april 1999', 'desa jagung rt 03 rw 03', 80, 90, 'A', 80327963, 98932768, 'tegarsatyanegara.if@gmail.com', NULL, 'pop', '-', '-', NULL, 'eko susilo', 2009, 2013, 2016, 0, 2020, 0, 0, 0, 0, 0, 0, 'popcroon', 2147483647, 'popo', 'ga pernah', 'ga pernah', NULL, 'programmer', NULL, '2020-02-09', 'y'),
(4, 'ID001', 'daerah pekalongan', 'kesesi pekalongan', 'pekalongan', 'tegar satya negara', 'pekalongan, 28 april 1999', 'desa jagung', 234, 60, 'A', 988888, 44444, 'tegarsatyanegara.if@gmail.com', NULL, 'e', 'ria', 'tegar', '0', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 2016, 1, 2017, 2, 2018, 3, 'ngopi', 4, 'hhhhnnn', 'gak ada', 'ada', 'ngopi bersama', 'backend developer', NULL, '2020-02-04', 'y'),
(5, 'IDPDPL002', 'perudahaan scurity pekalongan', 'pekalongan jawa barat', 'pekalongan', 'tegar satya negara', 'pekalongan 28  april 1999', 'desa jagung rt 03 rw 03 kecamatan kesesi', 180, 60, 'A', 23233, 333333, 'tegarsatyanegara.if@gmail.com', 2147483647, 'e', 'nnmnmm', 'sadsad', '34345', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 3333, 333, 3333, 33333, 212, 21121, 'vfvfv', 333, 'ffg', 'jnn', 'nbnbnn', 'nbnbnb', 'nbnbnbn', NULL, '2020-02-04', 'y'),
(6, 'IDPDPL001', 'instansi benar', 'pelatihan semarang', 'pekalongan', 'tegar satya negara', 'pekalongan 28  april 1999', 'desa jagung', 175, 60, 'A', 3260, 343, 'tegarsatyanegara.if@gmail.com', 2147483647, 'A', 'fsafddsafd', '-', '45', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 222, 333, 3333, 44, 212, 21121, 'naik gunung', 9090, 'nnnnn', 'tidak ada', 'tidak pernah', 'ngopi', 'kkkk', NULL, '2020-02-06', 't'),
(7, 'IDPDPL001', 'instansi benar', 'pelatihan semarang', 'pekalongan', 'tegar satya negara', 'pekalongan 28  april 1999', 'desa jagung', 175, 60, 'A', 3260, 343, 'tegarsatyanegara.if@gmail.com', 2147483647, 'A', 'fsafddsafd', '-', '45', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 222, 333, 3333, 44, 212, 21121, 'naik gunung', 9090, 'nnnnn', 'tidak ada', 'tidak pernah', 'ngopi', 'kkkk', NULL, '2020-02-06', 't'),
(8, 'IDPDPL001', 'instansi benar', 'pelatihan semarang', 'pekalongan', 'tegar satya negara', 'pekalongan 28  april 1999', 'desa jagung', 175, 60, 'A', 3260, 343, 'tegarsatyanegara.if@gmail.com', 2147483647, 'A', 'fsafddsafd', '-', '45', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 222, 333, 3333, 44, 212, 21121, 'naik gunung', 9090, 'nnnnn', 'tidak ada', 'tidak pernah', 'ngopi', 'kkkk', NULL, '2020-02-06', 't'),
(9, 'ID001', 'pt. teknologi indonesia', 'ccc', 'ccccccc', 'xxxxx', 'pekalongan 28  april 1999', 'nnmmnmnmn', 175, 60, 'A', 3260, 343, 'tegarsatyanegara.if@gmail.com', 2147483647, 'A', 'csacsdasdsadsa', 'sadsad', '45', 'eko susilo', 2020, 2020, 2020, 2020, 2020, 222, 333, 3333, 44, 212, 4555, 'nmnm', 9090, 'nmnmmm', 'nmmnmmmm', ',m,,,mmmmm', 'nmnmnmm', 'nmnmnmmmm', NULL, '2020-02-06', 't');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statis`
--

CREATE TABLE `statis` (
  `id_statis` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statis`
--

INSERT INTO `statis` (`id_statis`, `judul`, `isi`) VALUES
(1, 'Tentang Kami', '<p>Ini Halaman Tentang kami</p>'),
(2, 'Service', '<p>Ini Halaman Service</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin'),
(2, 'tegar satya negara', 'tegar', 'tegar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `link_video` varchar(100) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `statis`
--
ALTER TABLE `statis`
  ADD PRIMARY KEY (`id_statis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statis`
--
ALTER TABLE `statis`
  MODIFY `id_statis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
