-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2022 pada 15.07
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hanzsoft`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` text DEFAULT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`no`, `nama`, `isi`, `type`) VALUES
(37, 'Guest', 'Ini akan terjadi jika kalian menggunakan nama Yohanes Di Kolom Komentar', 1),
(46, 'Dicky Affandi', 'ini kondisi pemakaian nama yang baik tidak akan terpengaruh', 1),
(60, 'Yohanes Oktanio', 'Selamat Mencoba Stay Creative', 1),
(67, 'Orang Terdepan', 'Kita belati kita adalah belati tak sempurna jauh darri merdeka kita bernyanyi kita adalah belati', 110);

-- --------------------------------------------------------

--
-- Struktur dari tabel `f_soft`
--

CREATE TABLE `f_soft` (
  `no` int(10) NOT NULL,
  `nsi` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `version` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `sys` text DEFAULT NULL,
  `DL` text DEFAULT NULL,
  `D2` text DEFAULT NULL,
  `D2L` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `f_soft`
--

INSERT INTO `f_soft` (`no`, `nsi`, `nama`, `version`, `Description`, `icon`, `sys`, `DL`, `D2`, `D2L`) VALUES
(1, 100, 'Comming Soon', 'none', NULL, 'c-soon-0.webp', NULL, NULL, NULL, NULL),
(2, 101, 'Corel Draw', 'G suite X7', 'Corel Graphic Suite Adalah kumpulan program komputer editor grafik vektor yang berfungsi untuk mengolah gambar dan banyak digunakan pada bidang publikasi, percetakan, dan bidang lain yang membutuhkan proses visualisasi.', 'corel-draw.webp', '- Microsoft Windows 10 8/8.1 (32-bit or 64-bit editions), Windows 7 (32-bit or 64-bit editions), all with latest service packs installed<br>\r\n- Intel Core 2 Duo or AMD Athlon 64<br>\r\n- 2 GB RAM<br>\r\n- 1 GB hard disk space (for installation without content)<br>\r\n- 1280 x 768 screen resolution<br>', 'https://drive.google.com/file/d/1ZkMIjIm1L2GLJa1FPbiO2OrbIoz65oYd/view?usp=sharing', 'Download Fab', 'https://drive.google.com/file/d/1---0E5AIWSrIbGUFaXLEIBmvUadqnDlh/view?usp=sharing'),
(3, 102, 'After Effect', 'cc 2019', 'Adobe After Effects adalah produk peranti lunak yang dikembangkan oleh Adobe, digunakan untuk film dan pos produksi pada video. Pada awalnya merupakan sebuah software produk dari Macromedia yang sekarang sudah menjadi salah satu produk Adobe.', 'after-effect.webp', 'Microsoft Windows 10 (64-bit) version 1709 atau lebih tinggi<br>\r\nMicrosoft® Windows 10 (64-bit)<br>\r\n8 GB of RAM (at least 16 GB recommended)<br>\r\n5 GB of available hard disk space for installation; additional free space required during installation (cannot install on flash drives)<br>\r\nScreen resolution of 1280×1080 (1920×1080 or higher recommended)<br>', 'https://drive.google.com/file/d/1VxkJC5aF-JHP7G2dSQM5Gin0OVIG0p_-/view?usp=sharing', 'none', NULL),
(4, 103, 'Adobe Animate', 'cc 2022', 'Adobe Animate adalah multimedia yang berguna untuk membuat animasi dari Adobe Inc. Adobe Animate digunakan untuk merancang grafik vektor dan animasi untuk program televisi, video online, situs web, aplikasi web, aplikasi internet yang kaya, dan permainan video', 'animate.webp', 'Microsoft Windows 10 (64-bit) version 1709 atau lebih tinggi<br>\r\nMicrosoft® Windows 10 (64-bit)<br>\r\n8 GB of RAM (at least 16 GB recommended)<br>\r\n5 GB of available hard disk space for installation; additional free space required during installation (cannot install on flash drives)<br>\r\nScreen resolution of 1280×1080 (1920×1080 or higher recommended)<br>', 'http://od.meong.club/kuy8/file8/Animate2022.22.0.5.191.kuyhAa.7z', 'none', NULL),
(5, 104, 'Photoshop', 'CC 2018', 'Adobe Photoshop, atau biasa disebut Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek.', 'Photoshop.webp', 'Intel® Pentium® 4 or AMD Athlon® 64 processor (2 GHz or faster)<br>\r\nWindows 7 with Service Pack 1, Windows 8, or Windows 8.1, Windows 10<br>\r\n2 GB of RAM (8 GB recommended)<br>\r\n2 GB hard disk space (for installation without content)<br>', 'https://drive.google.com/file/d/10b0imsByIgpQ3ZmGSTswKqW_cjwOpymK/view', 'none', NULL),
(6, 105, 'Premiere Pro', 'CC 2021', 'Adobe Premiere Pro adalah sebuah program penyunting video berbasis non-linier dari Adobe Systems. Itu adalah salah satu produk software dari Adobe Creative Suite, tetapi juga bisa dibeli personal. Bahkan kalau dibeli personal, itu termasuk Adobe Encore dan Adobe OnLocation', 'Premiere-Pro.webp', '64-bit version of Microsoft Windows 10 (version 1803 or later) ; 64-bit version of Microsoft Windows 10<br>\r\nIntel 6th Generation or AMD equivalent processor (Intel 7th Generation or AMD equivalent processor recommended)<br>\r\n8 GB RAM (16 GB RAM recommended for HD media; 32 GB for 4K media or more)<br>\r\n8 GB of free hard disk space for installation; during installation, additional free space is required (cannot be installed on removable flash drives);<br> SSD recommended<br>', 'https://drive.google.com/file/d/1BcKO3o8ATu4dAMLF-SKxZvec2eRmmOwZ/view', 'none', NULL),
(7, 106, 'Adobe Flash', 'CS6', 'Adobe Flash adalah salah satu perangkat lunak komputer yang merupakan produk unggulan Adobe Systems. Adobe Flash digunakan untuk membuat gambar vektor maupun animasi gambar tersebut.', 'Adobe-Flash.webp', 'Intel® Core™ i7 processor with 64-bit support.<br>\r\nMicrosoft® Windows® 7 with Service Pack 1 and Windows® 8. ...<br>\r\n4 GB of RAM (8 GB recommended)<br>\r\n1 GB of available hard-disk space for installation.<br>\r\n1680 x 1050 display required; 1920 x 1080 display and second professionally calibrated viewing display recommended.<br>', 'https://drive.google.com/file/d/1O5dL1LpSTfgeWN2OMKU07iNS6pbdt95m/view', 'none', NULL),
(8, 107, 'Ms Office', '16-19 x64', 'Microsoft Office adalah perangkat lunak paket aplikasi perkantoran buatan Microsoft dan dirancang untuk dijalankan di bawah sistem operasi Microsoft Windows dan Mac OS X. Beberapa aplikasi di dalam Microsoft Office yang terkenal adalah Excel, Word, dan PowerPoint', 'Office.webp', '64-bit version of Microsoft Windows 7 with SP1 or Windows 10 (version 1709 or later)\r\nMicrosoft Internet Explorer 11 or higher)<br>\r\nIntel Core 2 or AMD Athlon 64 processor; 2 GHz or faster<br>\r\n2 GB of RAM (8 GB recommended)<br>\r\nOpenGL 4.x<br>', 'https://drive.google.com/file/d/1Z_FFYOXJUsax0x4IMTd-ar_SKWhZysgp/view?usp=drivesdk', 'none', NULL),
(9, 108, 'Inkscape', 'Updated-1.2.1', 'Inkscape adalah sebuah perangkat lunak editor gambar vektor yang bersifat perangkat lunak bebas di bawah lisensi GNU GPL. Tujuan utama dari Inkscape adalah menjadi perangkat grafik mutakhir yang memenuhi standar XML, SVG, dan CSS.', 'inkscape.webp', 'Intel® Pentium® 4 or AMD Athlon® 64 processor (2 GHz or faster)<br>\r\nWindows 7 with Service Pack 1, Windows 8, or Windows 8.1, Windows 10<br>\r\n2 GB of RAM (8 GB recommended)<br>\r\n2 GB hard disk space (for installation without content)<br>', 'https://inkscape.org/gallery/item/34668/inkscape-1.2.1_2022-07-14_9c6d41e410-x64_qPmYh2W.msi', 'none', NULL),
(10, 109, 'Ilustrator', 'CC 2019', 'Adobe Illustrator adalah program editor grafis vektor terkemuka, dikembangkan dan dipasarkan oleh Adobe Systems. Illustrator CC merupakan versi terkini program ini, generasi kedua puluh untuk produk Illustrator.', 'Ilustrator.webp', '64-bit version of Microsoft Windows 7 with SP1 or Windows 10 (version 1709 or later)<br>\r\nMicrosoft Internet Explorer 11 or higher)<br>\r\nIntel Core 2 or AMD Athlon 64 processor; 2 GHz or faster<br>\r\n2 GB of RAM (8 GB recommended)<br>\r\nOpenGL 4.x<br>', NULL, 'none', NULL),
(11, 110, 'Blender 3D', 'updated - 3.4', 'Blender evolves every day. Experimental builds have the latest features and while there might be cool bug fixes too, they are unstable and can mess up your files.\r\n\r\nIt is not recommended to use these on production environments.', 'Blender.png', '64-bit eight core CPU.<br>\r\n32 GB RAM.<br>\r\n2560×1440 display.<br>\r\nThree button mouse or pen+tablet.\r\nGraphics card with 8 GB RAM.<br>', 'https://ftp.halifax.rwth-aachen.de/blender/release/Blender3.4/blender-3.4.0-windows-x64.msi', 'none', NULL),
(12, 111, 'Nexus 10 os', 'vGaming_Edition', 'Nexus lite os adalah os modification dari nexus dari segi system dan software sehingga menghasilkan os yang stabil dan lancar apalagi digunakan untuk gaming dan aplikasi berat.\r\n\r\nakan tetapi akan ada banyak perubahan dari segi tampilan dan bloatware yang tersedia namun sudah disediakan untuk recovery aplikasi bawaan dan settian bawaan tanpa mengubah keaslian windows 10 nya.', 'Nexus10.webp', 'Added tons of tweaks<br>\r\nLow resiurce comsuming<br>\r\nBetter FPS at Games<br>\r\nAdded Custom Powerplans<br>\r\nGreat for 4GB ram Users(Recomended 4gb+)<br>\r\nADD StartBack, Old Calculator<br>', 'https://drive.google.com/file/d/1U9MYwyWX0x4Z1mgDKxCJNn7tFRc2K_sZ/view', 'none', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_q`
--

CREATE TABLE `product_q` (
  `no` int(100) NOT NULL,
  `n-one` int(100) NOT NULL,
  `n-two` int(100) NOT NULL,
  `n-tree` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_q`
--

INSERT INTO `product_q` (`no`, `n-one`, `n-two`, `n-tree`) VALUES
(1, 101, 102, 103),
(3, 104, 105, 109),
(4, 107, 108, 106),
(5, 110, 111, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `f_soft`
--
ALTER TABLE `f_soft`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `product_q`
--
ALTER TABLE `product_q`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `f_soft`
--
ALTER TABLE `f_soft`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `product_q`
--
ALTER TABLE `product_q`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
