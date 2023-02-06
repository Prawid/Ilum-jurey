-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2023 pada 03.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `ID_Admin` int(3) NOT NULL,
  `Nama_Admin` varchar(20) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`ID_Admin`, `Nama_Admin`, `Alamat`, `Username`, `Password`, `role`) VALUES
(123, 'Rayyan', '', 'rayangntg', '12345678', ''),
(1211, 'rudi', 'bogor', 'rudi123', '123456', ''),
(12342, 'arief', 'bogor', 'arief123', '123456', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `ID_Pengunjung` int(5) NOT NULL,
  `Nama_Pengunjung` varchar(20) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `No_Telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karir`
--

CREATE TABLE `karir` (
  `ID_loker` int(3) NOT NULL,
  `Nama_peker` text NOT NULL,
  `syarat` text NOT NULL,
  `jobdesk` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karir`
--

INSERT INTO `karir` (`ID_loker`, `Nama_peker`, `syarat`, `jobdesk`, `gambar`) VALUES
(111, 'Logistik', 'Pendidikan minimal D3 Teknik Sipil / Elektro / Mesin atau STM Pengalaman sebagai Staff Logistik Gudang lebih diutamakan Memiliki pemahaman yang baik mengenai material dan peralatan konstruksi bangunan Menguasai / mahir menggunakan komputer (Ms. Office) Siap bekerja lembur jika diperlukan', 'Logistik dapat diartikan sebagai proses yang meliputi perencanaan, pelaksanaan, serta pengawasan terhadap suatu proses perpindahan baik berupa barang, jasa, energi hingga sumber daya lain dari satu tempat ke tempat lain.', 'gambar1672622007.jpg'),
(121, 'Pelaksana lapangan', 'Pendidikan minimal D3 Teknik Sipil / STM Bangunan Pengalaman minimal 3 tahun Menguasai sistem manajemen mutu, standar toleransi, dan instruksi kerja di proyek. Diutamakan yang menguasai estimasi volume. Mampu bekerja di bawah tekanan / tight schedule Siap bekerja lembur', '1. Melakukan Survei · 2. Melakukan Konsultasi · 3. Mempersiapkan Dokumen · 4. Mengurus Perizinan · 5. Melakukan Sosialisasi Proyek', 'gambar1672422177.jpg'),
(123, 'Mechanical Electrical', 'Pendidikan minimal D3 Elektronik atau setara Pengalaman minimal 3 tahun Mampu bekerja di bawah tekanan / tight schedule', 'Mechanical electrical adalah elemen pekerjaan di industri konstruksi untuk melengkapi fungsi gedung. ', 'gambar1672622130.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `ID_Layanan` int(3) NOT NULL,
  `Nama_Layanan` varchar(20) NOT NULL,
  `Deskripsi_Layanan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(3) NOT NULL,
  `Nama_Produk` text NOT NULL,
  `Deskripsi_Produk` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Deskripsi_Produk`, `gambar`) VALUES
(1, 'BAJA RINGAN', 'Baja Ringan adalah baja karbon yang bersifat kaku dan kuat sehingga banyak digunakan untuk keperluan konstruksi. ', 'gambar1672324198.jpg'),
(2, 'HEBEL', 'hebel atau bata ringan adalah bata yang terbuat dari adonan pasir silika, gypsum, batu kapur, semen, air dan aluminium bubuk. Adonan tersebut kemudian diawetkan dengan cara dipanaskan dan diberi tekanan tinggi menggunakan alat yang autoclave.', 'gambar1673756976.jpg'),
(3, 'BESI BETON', 'Besi beton adalah rangka besi yang digunakan untuk memperkuat struktur beton pada bangunan. Besi beton yang disebut juga concrete steel atau rebar dalam bahasa Inggris ini menambah daya lentur pada beton, sehingga tahan terhadap beban statis maupun beban dinamis.', 'gambar1673756994.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `ID_Proyek` int(3) NOT NULL,
  `Nama_Proyek` text NOT NULL,
  `Deskripsi_Proyek` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`ID_Proyek`, `Nama_Proyek`, `Deskripsi_Proyek`, `gambar`) VALUES
(1, 'Ruko Grande ', 'Ruko 2 Lantai di kawasan strategis ', 'gambar1673830919.jpg'),
(2, 'Masjid At- Taqwa', 'Masjid At-Taqwa dibangun pada tahun 2019 berdiri pada lahan seluas 1123 m persegi', 'gambar1673831817.jpg'),
(217, 'Rumah Subsidi Telaga Harmony Residence Cikarang', 'Perumahan Subsidi Type29 Dp 15juta Ready Cikarang Selatan TELAGA HARMONY RESIDENCE Hunian terbaik Dan berkualitas di cikarang selatan', 'gambar1673757132.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resume`
--

CREATE TABLE `resume` (
  `ID_Resume` int(3) NOT NULL,
  `ID_Karir` int(3) NOT NULL,
  `ID_Pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resume1`
--

CREATE TABLE `resume1` (
  `id_resume` int(3) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `domisili` varchar(20) NOT NULL,
  `email_user` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `resume_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resume1`
--

INSERT INTO `resume1` (`id_resume`, `nama_user`, `domisili`, `email_user`, `no_hp`, `resume_user`) VALUES
(14, 'akmal', 'Bogor', 'akmal@gmail.com', '087873854013', 'resume_user1673833133.pdf'),
(15, 'Ari', 'Bogor', 'test', '081234556005', 'resume_user1673838354.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indeks untuk tabel `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  ADD PRIMARY KEY (`ID_Pengunjung`);

--
-- Indeks untuk tabel `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`ID_loker`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`ID_Layanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`ID_Proyek`);

--
-- Indeks untuk tabel `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`ID_Resume`),
  ADD KEY `ID_Pengunjung` (`ID_Pengunjung`),
  ADD KEY `ID_Karir` (`ID_Karir`);

--
-- Indeks untuk tabel `resume1`
--
ALTER TABLE `resume1`
  ADD PRIMARY KEY (`id_resume`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `ID_Layanan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `resume1`
--
ALTER TABLE `resume1`
  MODIFY `id_resume` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`ID_Pengunjung`) REFERENCES `data_pengunjung` (`ID_Pengunjung`),
  ADD CONSTRAINT `resume_ibfk_2` FOREIGN KEY (`ID_Karir`) REFERENCES `karir` (`ID_loker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
