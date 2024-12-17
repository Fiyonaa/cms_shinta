-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2024 pada 10.26
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(12, 'Judul 3', '20241211124528.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `foto` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `id_kategori` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `judul`, `id_kategori`, `tanggal`, `username`) VALUES
(7, '20241206132219.jpg', 'Tenggir Park', '14', '2024-12-06', 'tata'),
(8, '20241206132311.jpg', 'Tenggir Park1', '14', '2024-12-06', 'tata'),
(9, '20241206132346.jpg', 'Tenggir Park2', '15', '2024-12-06', 'tata'),
(10, '20241206132404.jpg', 'Tenggir Park3', '15', '2024-12-06', 'tata'),
(11, '20241206132421.jpg', 'Tenggir Park4', '15', '2024-12-06', 'tata'),
(12, '20241206132435.jpg', 'Tenggir Park5', '15', '2024-12-06', 'tata'),
(13, '20241206132454.jpg', 'Tenggir Park6', '15', '2024-12-06', 'tata'),
(14, '20241206132515.jpg', 'Tenggir Park7', '15', '2024-12-06', 'tata'),
(15, '20241206132531.jpg', 'Tenggir Park8', '15', '2024-12-06', 'tata'),
(16, '20241206132546.jpg', 'Tenggir Park9', '15', '2024-12-06', 'tata'),
(17, '20241210063809.jpg', 'Tenggir Park10', '17', '2024-12-10', 'tata'),
(18, '20241210064257.jpg', 'Tenggir Park11', '17', '2024-12-10', 'tata'),
(19, '20241210064330.jpg', 'Tenggir Park12', '17', '2024-12-10', 'tata'),
(20, '20241210064438.jpg', 'Tenggir Park13', '17', '2024-12-10', 'tata'),
(21, '20241210064457.jpg', 'Tenggir Park14', '17', '2024-12-10', 'tata'),
(22, '20241210064528.jpg', 'Tenggir Park15', '17', '2024-12-10', 'tata'),
(23, '20241210064544.jpg', 'Tenggir Park16', '17', '2024-12-10', 'tata'),
(24, '20241210064656.jpg', 'Tenggir Park17', '17', '2024-12-10', 'tata'),
(25, '20241210064728.jpg', 'Tenggir Park18', '17', '2024-12-10', 'tata'),
(26, '20241210064743.jpg', 'Tenggir Park19', '17', '2024-12-10', 'tata'),
(27, '20241210065101.jpg', 'Watu Gambir', '19', '2024-12-10', 'tata'),
(28, '20241210065111.jpg', 'Watu Gambir1', '19', '2024-12-10', 'tata'),
(29, '20241210065125.jpg', 'Watu Gambir2', '19', '2024-12-10', 'tata'),
(30, '20241210065137.jpg', 'Watu Gambir3', '19', '2024-12-10', 'tata'),
(31, '20241210065157.jpg', 'Watu Gambir4', '19', '2024-12-10', 'tata'),
(32, '20241210065209.jpg', 'Watu Gambir5', '19', '2024-12-10', 'tata'),
(33, '20241210065222.jpg', 'Watu Gambir6', '19', '2024-12-10', 'tata'),
(34, '20241210065236.jpg', 'Watu Gambir7', '19', '2024-12-10', 'tata'),
(35, '20241210065408.jpg', 'Watu Gambir8', '19', '2024-12-10', 'tata'),
(36, '20241210070505.jpg', 'Kemuning Sky Hils', '18', '2024-12-10', 'tata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(16, 'Tawangmangu'),
(17, 'Ngargoyoso'),
(18, 'Kemuning'),
(19, 'Karangpandan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_wa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Agrowisata', 'Kumpulan Wisata Tawangmangu dan Sekitarnya', 'https://instagram.com/kknzootaa', 'https://facebook.com', 'ayushinta851@gmail.com', 'mars dan saturnus', '+62384746387');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kategori` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(16, 'Taman Hutan Raya', 'Tahura ini didirikan dengan tujuan utama untuk melestarikan keanekaragaman hayati di kawasan kaki Gunung Lawu. Letaknya yang strategis di wilayah Kabupaten Karanganyar, menjadikan Tahura Tawangmangu sebagai paru-paru hijau yang penting bagi sekitarnya.\r\nPendirian Tahura ini merupakan inisiatif dari KGPAA Mangkunagoro I, seorang tokoh yang sangat peduli terhadap pelestarian alam dan lingkungan. Beliau melihat pentingnya menjaga kelestarian hutan untuk generasi mendatang.\r\nLokasi: Dusun Sukuh, Desa Berjo, Kecamatan Ngargoyoso, Kabupaten Karanganyar.\r\nJam buka: 08.00 – 18.00 WIB.\r\nHarga tiket masuk: Rp4.000.\r\nTahura Karanganyar adalah salah satu ruang terbuka hijau kebanggaan Karanganyar, khususnya bagi warga Ngragoyoso. \r\nKetika berjalan-jalan di sekitar Tahura Karanganyar, pengunjung akan menemukan banyak taman konservasi karena memang dijadikan lokasi penelitan hingga konservasi. Suasananya sangat sejuk, jauh dari polusi udara.', '20241211124811.jpg', 'Taman-Hutan-Raya', '17', '2024-12-11', 'tata'),
(22, 'Candi Cetho', 'Ingin berwisata sekaligus melihat peninggalan bersejarah? Karanganyar punya Candi Cetho. Candi yang dibangun pada masa Majapahit pada abad 15 Masehi ini menyimpan kisah sejarah yang menarik untuk dipelajari.\r\n\r\nBentuk arsitekturnya yang cantik serta menyuguhkan keindahan panorama langit nan biru, berlatarkan Gunung Lawu menjadikan tempat ini wajib untuk dikunjungi. Candi Cetho merupakan wisata budaya yang terletak di Dusun Ceto, Desa Gumeng, Kecamatan Jenawi, Kabupaten Karanganyar, Jawa Tengah.\r\n\r\nBuka dari jam 08.00-17.00 WIB. Untuk dapat masuk ke Candi Cetho wisatawan cukup membayar tiket masuk untuk wisatawan lokal sebesar Rp10.000,- dan untuk wisatawan mancanegara sebesar Rp30.000,-. Untuk tiket masuk Candi Cetho sudah menggunakan e-ticketing.\r\n\r\nSejarah Singkat Candi Cetho\r\nCandi Cetho adalah salah satu candi Hindu yang terletak di lereng Gunung Lawu, Jawa Tengah. Candi ini memiliki keunikan tersendiri karena bentuknya yang berundak-undak mengikuti kontur lereng gunung.\r\nCandi Cetho diperkirakan dibangun pada masa Kerajaan Majapahit, sekitar abad ke-15 Masehi. Lebih tepatnya, diperkirakan dibangun pada masa pemerintahan Raja Brawijaya V.\r\nCandi ini digunakan sebagai tempat untuk melakukan ritual ruwatan atau tolak bala. Ruwatan adalah upacara pembersihan diri dari segala kotoran atau sial, sedangkan tolak bala adalah upacara untuk menolak segala marabahaya.\r\nCandi Cetho pertama kali ditemukan pada tahun 1842 oleh seorang warga negara Belanda bernama Van der Vlis. Saat ditemukan, candi ini dalam kondisi rusak dan tertutup oleh tanah dan tumbuhan.\r\nSetelah ditemukan, Candi Cetho mengalami beberapa kali pemugaran. Pemugaran terbesar dilakukan pada tahun 1970-an.\r\nNama \"Cetho\" berasal dari bahasa Jawa yang artinya \"jelas\" atau \"nampak dengan jelas\". Nama ini merujuk pada pemandangan yang sangat indah dari puncak candi.', '20241211133254.jpg', 'Candi-Cetho', '16', '2024-12-11', 'tata'),
(23, 'Kampung Karet', 'Lokasi: Dukuh Kenteng, Desa Putukrejo, Kecamatan Ngargoyoso, Kabupaten Karanganyar.\r\nJam buka: 08.00 – 17.00 WIB.\r\nHarga tiket masuk: Rp6.000 hingga Rp10.000.\r\nAgrowisata Kampung Karet mempunyai fasilitas wisata yang bisa dimanfaatkan oleh semua tingkatan usia mulai dari anak-anak hingga usia senja. Agrowisata Kampung Karet mempunyai banyak wisata seru dan edukatif.', '20241211133538.jpg', 'Kampung-Karet', '17', '2024-12-11', 'tata'),
(24, 'Jurang Jero', 'Lokasi: Dusun Kalongan, Gerdu, Kecamatan Karangpandan, Kabupaten Karanganyar.\r\nJam buka: 24 jam.\r\nTiket masuk: Gratis\r\nGrojogan Jurang Jero menjadi pilihan tempat wisata yang tepat untuk dikunjungi, apalagi aksesnya cukup dekat dari lokasi parkir bahkan puncak air terjunnya sudah dapat terlihat.', '20241211133621.jpg', 'Jurang-Jero', '19', '2024-12-11', 'tata'),
(25, 'Telaga Mardirda', 'Telaga Madirda, sebuah destinasi alam berupa telaga alami, terletak di Dusun Tlogo, Desa Berjo, Kecamatan Ngargoyoso, Kabupaten Karanganyar, Jawa Tengah. Wisata ini buka setiap hari dengan jam operasional pukul 08.00-16.00 WIB pada hari kerja dan 08.00-17.30 WIB pada akhir pekan, sementara camping ground dapat diakses 24 jam.\r\n\r\nHarga tiket masuk berkisar Rp15.000,- per orang untuk wisatawan lokal maupun mancanegara. Telaga Madirda menyediakan beragam wahana dan fasilitas, termasuk gazebo, camping ground, spot untuk berswafoto, mushola, tempat parkir, dan penjual makanan.\r\n\r\nTelaga madirda menyuguhkan keindahan alam serta flora dan faunanya, Telaga Madirda menawarkan pemandangan yang menakjubkan dengan udara yang jernih dan sejuk. Telaga Madirda Karanganyar dapat menjadi alternatif yang sempurna bagi mereka yang ingin melarikan diri dari hiruk pikuk kesekharian dan menikmati keindahan alam yang masih alami.', '20241211133714.jpg', 'Telaga-Mardirda', '17', '2024-12-11', 'tata'),
(26, 'Sakura Hills', 'Sakura Hills Tawangmangu merupakan destinasi wisata dengan nuansa tradisional di Jepang dengan menyediakan tempat-tempat berfoto menarik. Dibuka pada tahun 2019 diatas lahan seluas kurang lebih 5 hektare destinasi ini ramai dikunjungi wisatawan.\r\n\r\nBerlokasi di Jalan Tawangmangu-Magetan, Kecamatan Tawangmangu, Kabupaten Karanganyar. Taman Sakura Hills Tawangmangu buka setiap hari mulai pukul 08.00-16.00 WIB. Harga tiket masuk untuk wisatawan lokal dan mancanegara untuk weekday dewasa Rp.20.000 anak-anak Rp.15.000, untuk weekend dewasa Rp.25.000 anak-anak Rp.15.000 per orang.', '20241211135010.jpg', 'Sakura-Hills', '16', '2024-12-11', 'tata'),
(27, 'Grojogan Sewu', 'Nama Grojogan Sewu berasal dari bahasa Jawa, yaitu grojogan yang berarti air terjun dan sewu yang berarti seribu. Kata sewu merujuk pada tinggi air terjun yang disebut setinggi seribu atau sewu pecak. Satu sewu pecak sama dengan satu telapak kaki orang dewasa. \r\nMitos\r\nSalah satu mitos yang berkembang di masyarakat setempat adalah mitos Kretek Pegat. Mitos ini berbunyi bahwa jika sepasang kekasih yang belum menikah melintasi jembatan kayu yang ada di depan air terjun, maka hubungan mereka tidak akan bertahan lama. \r\nSelain itu, ada juga mitos yang mengatakan bahwa Grojogan Sewu merupakan tempat pertemuan para roh leluhur dan makhluk gaib lainnya. Hal inilah yang menyebabkan tempat ini dinilai angker oleh para warga di sekitarnya.\r\nAir terjun ini menawarkan keindahan alam yang memesona. Dikelilingi oleh pepohonan hijau dan batu-batu alami, Grojogan Sewu memberikan pengalaman yang menenangkan. Tetes air yang jatuh membentuk latar belakang foto yang sempurna untuk memperkaya galeri Instagram Anda.\r\n\r\nTerletak di Jl. Raya Tawangmangu, Beji, Kec. Tawangmangu, Kabupaten Karanganyar, Jawa Tengah 57792. Air Terjun Grojogan Sewu buka setiap hari dari jam 08.00-16.00 WIB. Harga tiket masuk untuk wisatawan lokal sebesar Rp.22.000,- adapun wisatawan mancanegara Rp150.000,- di hari kerja dan Rp175.000,- pada saat akhir pekan.', '20241211135124.jpg', 'Grojogan-Sewu', '16', '2024-12-11', 'tata'),
(28, 'Kemuning Sky Hils', 'Kemuning Sky Hills merupakan daya tarik wisata di Kemuning Ngargoyoso. Berrupa Jembatan kaca sepanjang 120 meter dengan ketinggian mencapai 60 meter dengan ketebalan kaca sekitar 3 cm.\r\n\r\nkemuning sky hills menyuguhkan pengalaman yang berbeda melewati jembatan kaca transparan, yang di bawahnya berupa hamparan kebun teh yang luas dengan suasana yang sejuk serta pemandangan yang indah dan mempesona. Kemuning Sky Hills merupakan wisata buatan yang terletak di Jl. Karangpandan-Ngargoyoso, Sumbersari, Kemuning, Kec. Ngargoyoso, Kabupaten Karanganyar, Jawa Tengah.\r\n\r\nBuka mulai pukul 09.00-18.30 WIB dengan harga tiket masuk sebesar Rp10.000,-.Berbagai fasilitas yang ditawarkan di Kemuning Sky Hills mulai dari wana wisata jembatan kaca yang ikonik hingga kafe, toilet, tempat parkir, dan mushola. Tempatnya yang dipenuhi hamparan kebun membuat tempat ini sangat instagramable.', '20241211141615.jpg', 'Kemuning-Sky-Hils', '18', '2024-12-11', 'tata'),
(29, 'Watu Gambir', 'Watu Gambir Park adalah destinasi wisata baru yang menarik di Karangpandan, menawarkan keindahan alam yang masih asri.\r\nTaman ini menyajikan pemandangan pegunungan yang menakjubkan, udara sejuk, dan suasana yang tenang.\r\nWatu Gambir Park menjadi pilihan tepat bagi kamu yang ingin melepas penat dari hiruk pikuk kota.\r\nDengan berbagai fasilitas yang tersedia, pengunjung dapat menikmati waktu bersantai dengan nyaman.\r\nAktivitas yang bisa dilakukan: Berkemah, piknik, trekking, atau sekadar bersantai.\r\nFasilitas yang tersedia: Area parkir, toilet, warung makan, spot foto menarik.\r\nWatu Gambir Park menawarkan spot foto yang instagramable dengan latar belakang pegunungan yang hijau.', '20241211141737.jpg', 'Watu-Gambir', '19', '2024-12-11', 'tata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `isi_saran`, `tanggal`, `nama`, `email`) VALUES
(1, 'aaaaaaaaaaaaa', '2024-11-26', 'Shinta', 'ayushinta851@gmail.com'),
(2, 'aaaaaaaaaaaaaaaa', '2024-11-26', 'tata', 'ayushinta851@gmail.com'),
(3, 'aaaaaaaaaaaaa', '2024-11-26', 'rarar', 'ayushinta851@gmail.com'),
(4, 'lucuuuu', '2024-12-16', 'Shinta', 'ayushinta851@gmail.com'),
(5, 'oke', '2024-12-16', 'aku', 'ayushinta851@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, 'tata', 'tata', '1234', 'admin'),
(2, 'rar', 'raraaa', '1234', 'user'),
(36, 'andj', 'assjdba', 'ajsdja', 'admin'),
(37, 'cipa2008', 'test1', 'test1', 'admin'),
(38, 'aa', 'aa', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
