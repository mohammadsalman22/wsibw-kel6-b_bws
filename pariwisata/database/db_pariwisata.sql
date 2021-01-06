-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2021 at 12:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_gambar` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galery`
--

INSERT INTO `tb_galery` (`id_gambar`, `gambar`) VALUES
(5, 'galery1.jpeg'),
(9, 'galery2.jpeg'),
(10, 'galery3.jpeg'),
(11, 'galery4.jpeg'),
(12, 'galery5.jpeg'),
(13, 'galery6.jpeg'),
(14, 'galery7.jpeg'),
(15, 'galery8.jpeg'),
(16, 'galery9.jpeg'),
(17, 'galery10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_homepage`
--

CREATE TABLE `tb_homepage` (
  `id_homepage` int(5) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `logo_aplikasi` text NOT NULL,
  `deskripsi_homepage` text NOT NULL,
  `alamat_homepage` text NOT NULL,
  `kontak_homepage` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_homepage`
--

INSERT INTO `tb_homepage` (`id_homepage`, `nama_aplikasi`, `logo_aplikasi`, `deskripsi_homepage`, `alamat_homepage`, `kontak_homepage`) VALUES
(1, 'Jeg - Jeg', 'Brand.png', 'Website Pariwisata ini merupakan sarana  penyampaian  informasi  kepada  masyarakat yang  ingin  mengetahui  daerah-daerah  pariwisata yang  ada  di  Bondowoso. Selain itu, website ini dapat menarik wisatawan lokal maupun wisatawan asing untuk  berwisata  di  daerah  Bondowoso.  Serta, dengan adanya website pariwisata ini,  maka  objek-objek  wisata  di  daerah  Bondowoso  akan  lebih dikenal oleh masyarakat luar.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.829017166164!2d113.82697734992377!3d-7.912922894271795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcc189532a17%3A0x9d3e7d37667ab0e1!2sPoliteknik%20Negeri%20Jember%20Kampus%20Bondowoso!5e0!3m2!1sid!2sid!4v1609171089143!5m2!1sid!2sid\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '+6281252600127');

-- --------------------------------------------------------

--
-- Table structure for table `tb_homestay`
--

CREATE TABLE `tb_homestay` (
  `id_homestay` int(5) NOT NULL,
  `nama_homestay` varchar(100) NOT NULL,
  `gambar_homestay` varchar(255) NOT NULL,
  `harga_homestay` varchar(10) NOT NULL,
  `alamat_homestay` text NOT NULL,
  `deskripsi_homestay` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_homestay`
--

INSERT INTO `tb_homestay` (`id_homestay`, `nama_homestay`, `gambar_homestay`, `harga_homestay`, `alamat_homestay`, `deskripsi_homestay`, `slug`) VALUES
(2, 'Karona Berg', 'homestay1.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15800.996577708454!2d114.2221844!3d-8.0760529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x321ae9d8174f9bb4!2sKarona%20Berg!5e0!3m2!1sid!2sid!4v1609519503117!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'HomeStay yang terbaik dan terbagus di daerah ijen, Tempat nyaman aman bersih, fasilitas lengkap, owner dan para staff sangat ramah, terdapat juga cafe yg menyajikan makanan dan minuman yg sangat enak, tdk terlalu jauh dr pintu masuk ijen, view yg sangat bagus untuk foto foto.\r\n\r\nAlamat:Â Jl. Kawah Ijen, Perk. Sri Wulung, Tamansari, Licin, Kabupaten Banyuwangi, Jawa Timur 68454\r\nTelepon:Â 0812-5900-1049\r\nProvinsi:Â Jawa Timur', 'karona-berg'),
(4, 'Farel Homestay Kawah ijen', 'homestay2.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7898.70065684535!2d114.24841941823827!3d-8.16741573962108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14e98346ec48d%3A0x29f6f781fb156f66!2sFAREL%20HOMESTAY%20Kawah%20ijen!5e0!3m2!1sid!2sid!4v1609519731948!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Tempat yang asri, indah dan nyaman. Harga terjangkau dengan kualitas yang bagus dan lengkap. Cocok untuk kawan-kawan yang ingin mendaki ke kawah ijen. Jarak tempuh dari lokasi ke pos 1 ijen, sekitar 30 menit.\r\n\r\njln.kawah ijen,Dsn.tanahlos, RT.2/RW.01, Tamansari, Licin, Kabupaten Banyuwangi, Jawa Timur 68454â€¢0822-4404-3576', 'farel-homestay-kawah-ijen'),
(5, 'Arabika Homestay', 'homestay3.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.9975033268474!2d114.14838074992431!3d-7.999192994210979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd134ae983b3737%3A0x2fcfff67fde31f29!2sArabica%20Homestay!5e0!3m2!1sid!2sid!4v1609520098761!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Arabica Hotel terletak di Bondowoso dan menawarkan akomodasi dengan Wi-Fi gratis, kolam renang, restoran, lounge bersama, serta pemandangan taman. Semua unit memiliki area tempat duduk, TV satelit layar datar, serta kamar mandi pribadi dengan perlengkapan mandi gratis, bidet, dan shower. Untuk menambah kenyamanan Anda, akomodasi ini dapat menyediakan handuk dan seprai dengan biaya tambahan. Anda dapat menikmati kegiatan hiking dan bersepeda di daerah terdekat, atau bersantai di taman.\r\n\r\nAlamat:Â Jl. Kawah Ijen, Kalisat, Sempol, Kalisari, Kalisat, Sempol, Kabupaten Bondowoso, Jawa Timur 68288\r\nTelepon:Â 0852-5959-5955\r\nProvinsi:Â Jawa Timur', 'arabika-homestay'),
(6, 'Guest House Jampit', 'homestay4.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.26011330246!2d114.13649154992495!3d-8.074931594157574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6b555facb449d%3A0xc015aa592bd233e1!2sGuest%20House%20Jampit!5e0!3m2!1sid!2sid!4v1609520285595!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Guest House Jampit berada di Kawasan Agro Wisata Jampit. Tempat ini berupa rumah peninggalan Belanda yang mulanya digunakan sebagai tempat peristirahatan pengawas perkebunan. Suasana di sini sangat sejuk dan menyegarkan. Pengunjung dapat menjumpai perkebunan kopi di sekitar Guest House Jampit. Desain bangunan ini sangat khas eropa, mulai dari material kayunya, bentuk teras, interior kamarnya hingga perapian yang ada di dalam ruang utama. Tempat ini sangat cocok digunakan untuk acara gathering keluarga atau komunitas\r\n\r\nAlamat:Â Jampit, Sempol, Jampit, Sempol, Kabupaten Bondowoso, Jawa Timur 68288\r\nTelepon:Â 0852-5959-5955', 'guest-house-jampit'),
(7, 'Ijen Bondowoso Homestay', 'homestay5.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.840079268476!2d113.81834614992364!3d-7.9117688942725835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dce7901ed243%3A0xd7569f6f471b955f!2sIjen%20Bondowoso%20Homestay!5e0!3m2!1sid!2sid!4v1609520401833!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Menginap di Ijen Bondowoso Homestay Syariah tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda. Ijen Bondowoso Homestay Syariah merupakan akomodasi rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain.\r\n\r\nAlamat:Â Jl Diponegoro, Gg. I No.19, Kauman, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68213\r\nTelepon:Â 0852-0461-6666\r\nProvinsi:Â Jawa Timur', 'ijen-bondowoso-homestay'),
(8, 'RedDoorz Syariah @ Bondowoso City Center', 'homestay6.jpeg', '142500', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.858356022848!2d113.82477084992372!3d-7.909861894273941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dda118a627bf%3A0xba533bdfa8f85a7d!2sRedDoorz%20Syariah%20%40%20Bondowoso%20City%20Center!5e0!3m2!1sid!2sid!4v1609520537878!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Pelayanan sangat ramah dan kebersihan sangat dijaga serta Tempatnya enak dan nyaman\r\n\r\nAlamat:Â Blindungan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68212\r\nTelepon:Â (021) 80629666\r\nProvinsi:Â Jawa Timur	', 'reddoorz-syariah-bondowoso-city-center'),
(9, 'Azzam home stay', 'homestay7.png', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1640188565716!2d113.9076109499235!3d-7.877900994296504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6db1eebc31531%3A0x5adbc0fb2274c835!2sAzzam%20home%20stay!5e0!3m2!1sid!2sid!4v1609521013694!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Udaranya bersih dan sejuk serta tempat dan pemandangannya sangat bagus. Bisa untuk refreshing pada saat liburan dan sangat tepat untuk bermain anak. karena banyak macam main anak-anak.\r\n\r\nAlamat : Gardu Otak, Jurang Sapi, Tapen, Kabupaten Bondowoso, Jawa Timur 68283', 'azzam-home-stay'),
(10, 'Home stay Suraji', 'homestay8.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0824456827113!2d113.9615482!3d-7.7810831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6d77820503097%3A0xa1be9493726cb4fe!2sHOME%20STAY%20SURAJI!5e0!3m2!1sid!2sid!4v1609521288578!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Udaranya bersih dan sejuk serta tempat dan pemandangannya sangat bagus. Bisa untuk refreshing pada saat liburan\r\n\r\nAlamat:Â Paterongan, Walidono, Prajekan, Kabupaten Bondowoso, Jawa Timur 68285\r\nTelepon:Â 0852-3615-2325\r\nProvinsi:Â Jawa Timur', 'home-stay-suraji'),
(11, 'Bondowoso Hostel', 'homestay9.jpeg', '0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.9248340611684!2d113.8242495499244!3d-8.0066885942057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c3d961e02f4b%3A0x18385ae3da1d7d6!2sBondowoso%20Hostel!5e0!3m2!1sid!2sid!4v1609521407728!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'ondowoso HostelÂ terletak di Bondowoso, menawarkan akomodasi bintang 1 dengan lounge bersama dan taman. Akomodasi ini menyediakan beragam fasilitas, di antaranya adalah restoran, resepsionis 24 jam, dapur bersama, serta WiFi gratis. Terdapat juga fasilitas karaoke dan layanan kamar. Daerahnya populer untuk aktivitas bersepeda, dan layanan penyewaan sepeda dan mobil tersedia di hostel.Â \r\n\r\n\r\nAlamat : Kalianyar Selatan, Desa, Karang Tengah, Kalianyar, Tamanan, Kabupaten Bondowoso, Jawa Timur 68263â€¢0823-3157-6900', 'bondowoso-hostel'),
(12, 'Bondowoso Ijen Bamboo Homestay', 'homestay10.jpeg', '102500', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.801444084132!2d113.82874504992382!3d-7.915798594269791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcc6b9f82b4b%3A0xc89d9589af3b7c0d!2sBondowoso%20Ijen%20Bamboo%20Homestay!5e0!3m2!1sid!2sid!4v1609521534267!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Ijen Bondowoso Bamboo HomestayÂ terletak strategis di Bondowoso, salah satu daerah lokal paling terkenal. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang aktif ini. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dikunjungi di kota ini. Ijen Bondowoso Bamboo HomestayÂ menawarkan pelayanan sempurna dan segala fasilitas penting untuk memanjakan para wisatawan. Ada beberapa fasilitas hotel ini seperti layanan kamar 24 jam, WiFi gratis di semua kamar, satpam 24 jam, layanan tiket, tempat parkir mobil. \r\n\r\nAlamat : Jl. Kolonel Sugiono No.26, Mandaluki, Kademangan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68217â€¢0812-3325-9350', 'bondowoso-ijen-bamboo-homestay');

-- --------------------------------------------------------

--
-- Table structure for table `tb_travel`
--

CREATE TABLE `tb_travel` (
  `id_travel` int(5) NOT NULL,
  `nama_travel` varchar(100) NOT NULL,
  `gambar_travel` varchar(255) NOT NULL,
  `alamat_travel` text NOT NULL,
  `deskripsi_travel` text NOT NULL,
  `harga_travel` varchar(10) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_travel`
--

INSERT INTO `tb_travel` (`id_travel`, `nama_travel`, `gambar_travel`, `alamat_travel`, `deskripsi_travel`, `harga_travel`, `slug`) VALUES
(1, 'Tour Travel Rental N2R Wibisono', 'travel1.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.623713912!2d113.8205829!3d-7.9309578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63cd04fe1426b1c!2sTour%20Travel%20Rental%20N2R%20Wibisono!5e0!3m2!1sid!2sid!4v1609467251145!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Alamat:Â Jl. Santawi No.556, Nangkaan Timur, Nangkaan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68216\r\nTelepon:Â 0852-0122-7441\r\nProvinsi:Â Jawa Timur', '0', 'tour-travel-rental-n2r-wibisono'),
(3, 'Centini Trans Grup Bondowoso', 'travel2.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15805.33638542726!2d113.8015307!3d-7.9643831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa65b022f2f01fb22!2sCentini%20trans%20grup%20%3A%20Rental%20Mobil%2C%20Trans%20%26%20Travel!5e0!3m2!1sid!2sid!4v1609467471412!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Alamat:Â Blok B-4 RT 32 RW 13, desa Pancuran, Pd. Pancoran Mas, Pancoran, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68219\r\nTelepon:Â 0852-5876-2139\r\nProvinsi:Â Jawa Timur', '0', 'centini-trans-grup-bondowoso'),
(4, 'DNtrans Bondowoso', 'travel3.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.08137271228!2d113.9233809!3d-7.8667532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcc3d86d7bc443b5!2sDNtrans%20Bondowoso!5e0!3m2!1sid!2sid!4v1609467820442!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', ' Tour & Travel Bondowoso\r\nKami siap melayani perjalanan anda kemanapun dan kapanpun.. ENJOY YOUR TRIP WITH US!!\r\n\r\n\r\n\r\n    Kami Menyediakan Microbus Elf Long & Short\r\n    Untuk Minibus kami menyediakan Luxio\r\n    Fasilitas TV,Full AC,Karaoke,Charger HP\r\n    Driver yg berpengalaman/Profesional \r\n\r\nMinat Hubungi : 085331205982\r\nJln.Raya Situbondo Ds.Kalitapen RT02/RW01\r\nKecamatan Tapen\r\nKabupaten Bondowoso\r\n\r\nSitus Website : http://naufaltranstravel.blogspot.com/\r\nAlamat:Â Drasah, Kalitapen, Tapen, Kabupaten Bondowoso, Jawa Timur 68283\r\nJam buka:Â \r\nRabu\r\n08.00â€“18.30\r\nKamis\r\n08.00â€“18.30\r\nJumat\r\n(Hari Tahun Baru Masehi)\r\n08.00â€“18.30\r\nJam buka dapat berbeda\r\nSabtu\r\n08.00â€“18.30\r\nMinggu\r\n08.00â€“14.00\r\nSenin\r\n08.00â€“18.30\r\nSelasa\r\n08.00â€“18.30\r\nProvinsi:Â Jawa Timur', '0', 'dntrans-bondowoso'),
(5, 'Fathihtour Wisata Bondowoso', 'travel4.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.44649622769!2d113.79540387711174!3d-7.909520858833968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6ddcfc00a3e67%3A0x5c3356c8a656d2d!2sFathihtour%20Wisata%20Bondowoso!5e0!3m2!1sid!2sid!4v1609519098562!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Alamat:Â Jl. Saliwiryo Pranowo PSP20, Pattian, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68213\r\nJam buka:Â \r\nKamis\r\nBuka 24 jam\r\nJumat\r\n(Hari Tahun Baru Masehi)\r\nBuka 24 jam\r\nJam buka dapat berbeda\r\nSabtu\r\nBuka 24 jam\r\nMinggu\r\nBuka 24 jam\r\nSenin\r\nBuka 24 jam\r\nSelasa\r\nBuka 24 jam\r\nRabu\r\nBuka 24 jam\r\nTelepon:Â 0812-4911-1518\r\nProvinsi:Â Jawa Timur', '0', 'fathihtour-wisata-bondowoso'),
(6, 'Rentalindo', 'travel5.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.636699956938!2d113.7768761578591!3d-8.03634032883912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c1c2996918e9%3A0xce17e009a1ba3503!2sRentalindo!5e0!3m2!1sid!2sid!4v1609519253094!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Alamat:Â Jl. mastrib raya No.25, Krajan Atas, Suger Lor, Maesan, Kabupaten Bondowoso, Jawa Timur 68262\r\nTelepon:Â (0336) 882004\r\nProvinsi:Â Jawa Timur', '0', 'rentalindo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` text NOT NULL,
  `gambar_wisata` varchar(255) NOT NULL,
  `deskripsi_wisata` text NOT NULL,
  `harga_wisata` varchar(10) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `gambar_wisata`, `deskripsi_wisata`, `harga_wisata`, `slug`) VALUES
(7, 'Gunung Ijen', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31603.34017697806!2d114.23516052551325!3d-8.058823226805693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sGn.%20Ijen!5e0!3m2!1sid!2sid!4v1609522117656!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'wisata1.jpeg', 'Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan antara Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.386 mdpl dan terletak berdampingan dengan Gunung Merapi. Gunung Ijen terakhir meletus pada tahun 1999. Kawah Ijen adalah sebuahÂ danauÂ kawah yang bersifat asam yang berada di puncak Gunung Ijen dengan kedalaman danau 200 meter dan luas kawah mencapai 5.466 Hektar. Danau kawah Ijen dikenal merupakan danau air asam kuat terbesar di dunia. Kawah Ijen berada dalam wilayah Cagar Alam Taman Wisata Ijen Kabupaten Bondowoso danÂ Kabupaten Banyuwangi,Â Jawa Timur. Fenomena eternalÂ blue fireÂ atau api biru abadi berada di dalam kawah Ijen, dan pemandangan alami ini hanya terjadi di dua tempat di dunia yaituÂ EtiopiaÂ (gunung Dallol) dan Ijen.\r\nHarga Tiket Masuk Kawah Ijen 2020\r\nWisatawan      Hari Biasa       Hari Libur\r\nNusantara       IDR 5.000       IDR 7.500\r\nMancanegara  IDR 100.000   IDR 150.000\r\n\r\nHarga Tiket Parkir Kendaraan Kawah Ijen\r\nKendaraan      Tiket Masuk\r\nRoda Dua        IDR 5.000\r\nRoda Empat    IDR 10.000\r\nRoda Empat    IDR 5.000', '7500', 'gunung-ijen'),
(8, ' Kawah Wurung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.358687404517!2d114.15913004992473!3d-8.06484779416471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd13534fdbc47a5%3A0x5c5b0e5a9e8d9955!2sKawah%20Wurung!5e0!3m2!1sid!2sid!4v1609522221075!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'wisata2.jpeg', 'Kawah WurungÂ terkenal akan perbukitannya yang diselimuti padang rumput hijau. Seperti namanya, kawasan ini sesungguhnya memang adalah area kawah. Namun tidak mengeluarkan isi perut bumi selayaknya kawah-kawah lainnya. Objek wisata ini dikelilingi bukit-bukit yang lebih tinggi di sekitarnya.membuat kawasan ini terlihat seperti perbukitan daripada kawah. Lokasinya terletak tidak terlalu jauh dari Kawah Ijen, tepatnya hanya berjarak sekitar 10 km. Lokasinya bisa ditempuh melalui pusat kota Bondowoso maupun Banyuwangi.\r\nHarga Tiket Masuk Kawah Wurung\r\nTiket Wisatawan Domestik\r\nRp5.000\r\nTiket Wisatawan Mancanegara\r\nRp20.000\r\nPre Wedding\r\nRp300.000\r\nKegiatan Komersial\r\nRp1.500.000\r\nATV 30 Menit\r\nRp50.000\r\nTenda Per Malam\r\nRp50.000\r\nSepeda Gunung Per Jam\r\nRp10.000\r\nTiket Parkir KendaraanÂ \r\nTiket Motor\r\nRp2.000\r\nTiket Mobil\r\nRp4.000\r\nTiket Elf/Mini Bus\r\nRp10.000\r\nTiket Pick Up/Truck\r\nRp20.000\r\n', '5000', '-kawah-wurung'),
(11, 'Air Terjun Tancak Kembar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6269713942115!2d113.69386294992383!3d-7.933970994256946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6e623dfa316cf%3A0x87433cc720dc2c85!2sAir%20Terjun%20Tancak%20Kembar!5e0!3m2!1sid!2sid!4v1609522447958!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'wisata3.jpeg', 'Air Terjun Tancak Kembar terletak di Desa Andongsari, Kecamatan Pakem, atau sekitar 25 km ke arah barat Kota Bondowoso. Masing-masing air terjun ini memiliki ketinggian sekitar 25 meter, dan terletak di ketinggian 900 mdpl, tepatnya di bawah lereng Pegunungan Argopuro. Untuk menuju Air Terjun Tancak Kembar ini, kamu bisa menggunakan kendaraan roda dua maupun roda empat. Atau, kamu bisa juga menggunakan jasa ojek yang banyak tersedia di pusat Kota Bondowoso. Untuk tarif, kamu bisa menawarnya dengan biaya paling rendah. Tiket masuk ke obyek wisata ini Rp. 3000. Kalau kamu membawa kendaraan bermotor, maka kamu harus membayar lagi dengan harga Rp. 2000 dan Rp. 5000.', '3000', 'air-terjun-tancak-kembar'),
(12, 'Bendungan Sampean Baru', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.657409047217!2d113.93517624992297!3d-7.826037194333102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6d9e97746df3b%3A0xc4e0566cf8286232!2sBendungan%20Sampean%20Baru!5e0!3m2!1sid!2sid!4v1609522550174!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'wisata4.jpeg', 'Bendungan Sampean Baru ini dibangun sejak tahun 1979 dan baru selesai di tahun 1983. Bendungan ini baru hits beberapa tahun belakangan setelah banyak pengunjung yang datang mengunggah keindahan pemandangannya di sosial media. Bendungan ini punya konstruksi yang sekilas tampak seperti bendungan-bendungan megah di luar negeri. Beton-beton yang disusun rapi di depan bendungan dan tumbuhan enceng gondok di sekitarnya membuatnya tampak sangat cantik di foto. Enceng gondok yang tumbuh disekitaran bendungan ini semakin membuat foto kalian tambah estetik.', '0', 'bendungan-sampean-baru'),
(13, 'Tasnan Forest', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.178652489619!2d113.80193584992416!3d-7.980477594224126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c2516fee58d9%3A0x4d5205fe1a8d41ae!2sTasnan%20Forest!5e0!3m2!1sid!2sid!4v1609522621302!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'wisata5.jpeg', 'Wisata Tasnan BondowosoÂ adalah salah satu tempat wisata pemandian yang berada diÂ Desa Taman, Kecamatan Grujugan, Kabupaten Bondowoso,Provinsi Jawa Timur. Wisata ini banyak dikunjungi oleh wisatawan pada hari libur atau hari hari biasa. Tempatnya sangat indah dan bisa memberikan suasana yang menghibur kejenuhan akan aktivitas kita sehari hari.Umumnya, harga tiket untuk masuk tempat wisata berbeda antara hari libur, minggu atau hari biasa. Berikut kami sertakan daftar harga tiket masuk ke area Kab Bondowoso. Harga bisa berubah sewaktu-waktu. Saat weekday, harga tiket masuk Hutan Tasnan adalahÂ Rp5,000.00. Sementara saat weekend, harga tiket masuk Hutan Tasnan adalahÂ Rp5,000.00. Ada baiknya konfirmasi harga lewat call center di bawah. Harga weekday umumnya berarti hari Senin-Jumat, sementara weekend Sabtu dan Minggu.', '5000', 'tasnan-forest');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(4, 'user', 'user12');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ip_address` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`ip_address`, `waktu`) VALUES
('127.0.0.1', '2021-01-05 15:22:11'),
('192.168.1.11', '2021-01-05 15:32:33'),
('192.168.43.1', '2020-12-24 14:50:25'),
('192.168.43.119', '2020-12-28 16:12:25'),
('192.168.43.168', '2020-12-24 14:49:58'),
('vb', '2020-12-24 14:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_homepage`
--
ALTER TABLE `tb_homepage`
  ADD PRIMARY KEY (`id_homepage`);

--
-- Indexes for table `tb_homestay`
--
ALTER TABLE `tb_homestay`
  ADD PRIMARY KEY (`id_homestay`);

--
-- Indexes for table `tb_travel`
--
ALTER TABLE `tb_travel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`ip_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_gambar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_homepage`
--
ALTER TABLE `tb_homepage`
  MODIFY `id_homepage` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_homestay`
--
ALTER TABLE `tb_homestay`
  MODIFY `id_homestay` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_travel`
--
ALTER TABLE `tb_travel`
  MODIFY `id_travel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
