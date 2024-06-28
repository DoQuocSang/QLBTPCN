-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2022 lúc 12:13 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elaravel`
--
CREATE DATABASE IF NOT EXISTS `elaravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elaravel`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_02_000508_create_tbl_admin_table', 1),
(5, '2022_04_04_215526_create_tbl_category_product', 2),
(6, '2022_04_09_062826_create_tbl_brand_product', 3),
(7, '2022_04_09_194618_create_tbl_ben10_product', 4),
(8, '2022_04_09_195307_create_tbl_boring_product', 5),
(9, '2022_04_09_195707_create_tbl_brand_product', 6),
(10, '2022_04_09_214111_create_tbl_product', 7),
(11, '2022_04_09_231216_create_tbl_product', 8),
(12, '2022_04_04_215526_create_tbl_category_product1', 9),
(13, '2022_05_08_184415_create_tbl_category_product', 10),
(14, '2022_05_08_185634_create_tbl_category_product', 11),
(15, '2022_05_14_164828_ceate_table_product222', 12),
(16, '2022_05_14_165950_create-tbl_product333', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'adminsang@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'DQ Sang', '0913744538', '2022-04-02 02:00:51', NULL),
(2, 'adminnhat@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'TDM Nhật', '0914388235', '2022-04-02 23:07:01', NULL),
(3, 'admindat@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'NT Đạt', '0943876543', '2022-04-01 23:08:33', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand_product`
--

CREATE TABLE `tbl_brand_product` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand_product`
--

INSERT INTO `tbl_brand_product` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(8, 'Blackmores', 'Blackmores là thương hiệu thực phẩm chức năng hàng đầu tại Úc, được ông Naturopath Maurice Blackmore (1906 - 1977) thành lập năm 1930 - Đất nước với những quy chuẩn về dinh dưỡng và các sản phẩm chăm sóc sức khỏe được xếp hạng khắt khe nhất thế giới. Với bề dày lịch sử hơn 85 năm, Blackmores sở hữu 1 danh mục lớn với hơn 1.200 sản phẩm các loại từ vitamin, khoáng chất, thảo dược và các sản phẩm bổ sung dinh dưỡng hàng ngày, 1.500 điểm phân phối tại hơn 17 quốc gia (Việt Nam, Thái Lan, Trung Quốc, Singapore, Nhật bản,...), tất cả đều đạt tiêu chuẩn kiểm định TGA cực kỳ nghiêm ngặt của Úc.', 1, NULL, NULL),
(9, 'Kirkland', 'Với mục tiêu mang lại những sản phẩm hỗ trợ sức khỏe có nguồn gốc từ thiên nhiên, thương hiệu Kirkland hơn 25 năm qua đã luôn nghiên cứu và sản xuất ra các sản phẩm an toàn, chất lượng. Được mệnh danh là “ ông hoàng bán lẻ” lớn nhất nước Mỹ, Kirkland đến nay đã phủ khắp thế giới với những sản phẩm nổi bật về thực phẩm chức năng, mẹ và bé, làm đẹp, các dòng đồ ăn vặt tốt cho sức khỏe, … góp phần bổ sung dinh dưỡng cho cả gia đình.', 1, NULL, NULL),
(10, 'Healthy Care', 'Healthy Care là thương hiệu chăm sóc sức khỏe tự nhiên hàng đầu của Úc được thành lập năm 2006, là công ty nhỏ thuộc Tập đoàn Nature\'s Care với hơn 30 năm kinh nghiệm nghiên cứu và sản xuất tuân thủ quy định điều trị. Mỗi sản phẩm của Healthy Care trước khi tới tay người tiêu dùng phải trải qua hơn 20 lần kiểm định chất lượng và được cố vấn từ hơn 250 chuyên viên y khoa và dược sĩ nổi tiếng, đáp ứng đủ tiêu chuẩn TGA và CGMP - Hai tiêu chuẩn nghiêm ngặt nhất thế giới.', 1, NULL, NULL),
(11, 'Orihiro', 'Orihiro - Thương hiệu thực phẩm chức năng uy tín hàng đầu Nhật Bản. Với sứ mệnh mong muốn lan tỏa những giá trị tuyệt vời, nâng cao chất lượng cuộc sống con người, thương hiệu thực phẩm chức năng Orihiro Nhật Bản đã không ngừng cố gắng, nghiên cứu và phát triển để mang tới những sản phẩm chất lượng nhất đến tay khách hàng. Các sản phẩm của Orihiro có giá thành phải chăng, đáp ứng được nhu cầu sử dụng của người dùng từ trẻ em, người lớn đến người cao tuổi.', 1, NULL, NULL),
(12, 'Nature Made', 'Nature Made là thương hiệu thực phẩm chức năng (TPCN) nổi tiếng của Mỹ được Hội đồng Dược điển Hoa Kỳ (USP) đánh giá là một trong 5 thương hiệu TPCN thiên nhiên uy tín nhất hiện nay. Với khẩu hiệu “Sản xuất an toàn, sản xuất tinh khiết”, các sản phẩm của Nature Made luôn được đánh giá cao về chất lượng, hiệu quả cũng như độ an toàn đối với sức khỏe người sử dụng.', 1, NULL, NULL),
(13, 'DHC', 'DHC - THƯƠNG HIỆU THỰC PHẨM CHỨC NĂNG VÀ MỸ PHẨM HÀNG ĐẦU TẠI NHẬT BẢN. Công ty DHC được thành lập vào năm 1972, với 30 năm kinh nghiệm nghiên cứu và sản xuất, DHC sở hữu 2 ngành hàng lớn làm nên \"tên tuổi\" bao gồm: Mỹ phẩm DHC và Thực phẩm chức năng DHC. Các sản phẩm làm đẹp của DHC tập trung vào công dụng dưỡng trắng, ngăn ngừa lão hoá da, giảm mụn, mờ thâm,...Trong khi đó, các sản phẩm TPCN DHC tập trung bổ sung các loại vitamin rau củ quả,..giúp bổ dưỡng, tăng cường sức đề kháng cho cơ thể.', 1, NULL, NULL),
(14, 'Swisse', 'Thương hiệu Swisse được thành lập năm 1969 tại Úc, có trụ sở chính tại Melbourne do Kevin Ring sáng lập với nhiệm vụ ban đầu là Swisse DNA - Ước mơ giúp mọi người trên thế giới khỏe mạnh và hạnh phúc hơn. Các dòng sản phẩm của thương hiệu Swisse tập trung bổ sung vitamin và dưỡng chất cần thiết, cung cấp năng lượng cho các hoạt động thể thao, hỗ trợ chăm sóc sắc đẹp, cải thiện sức khỏe thể chất và tinh thần, dùng được cho cả nam và nữ.', 1, NULL, NULL),
(15, 'Natrol', 'Natrol là thương hiệu chuyên cung cấp các sản phẩm chăm sóc sức khỏe nổi tiếng của Mỹ. Chính thức ra mắt thị trường vào năm 1980, đến nay sau hơn 40 năm hình thành và phát triển, các sản phẩm của Natrol không chỉ trở nên quen thuộc tại thị trường Mỹ mà còn được tin dùng tại nhiều quốc gia trên thế giới, trong đó có Việt Nam.', 1, NULL, NULL),
(16, 'Bio Island', 'Nhắc đến Bio Island, chắc hẳn không ít mẹ bỉm sữa sẽ nghĩ ngay đến thương hiệu sở hữu sản phẩm canxi sữa Bio Island Milk Calcium đang “làm mưa làm gió” trong cộng đồng mẹ bỉm sữa Việt hiện nay, được không ít mẹ bỉm sữa Việt tin dùng cho bé yêu của mình. Vậy mẹ có biết Bio Island là thương hiệu của nước nào, có xuất xứ từ đâu và ngoài sản phẩm canxi sữa, Bio Island còn sở hữu những sản phẩm dinh dưỡng tốt nào không?', 1, NULL, NULL),
(17, 'Puritan\'s Pride', 'Vitamin và khoáng chất là những thành phần thiết yếu mà tất cả chúng ta đều cần. Nếu bạn muốn biết cơ thể mình đang cần bổ sung vitamin gì, hãy để Puritan\'s Pride nói với bạn. Từ những thành phần chất lượng cao được tìm kiếm trên toàn thế giới, thương hiệu Puritan\'s Pride Mỹ cung cấp cho khách hàng vitamin chất lượng với giá cả hợp lý. Trải qua hơn 40 năm nghiên cứu và phát triển, thương hiệu Puritan\'s Pride luôn đặt sự trung thành lên hàng đầu, trở thành cốt lõi giá trị.', 1, NULL, NULL),
(18, 'Mudaru', 'MUDARU là nhãn hiệu đã được đăng ký độc quyền của Công ty cổ phần TNB Việt Nam. Cùng với những khao khát mang lại giá trị cốt lõi, chân thật đối với sản phẩm và dịch vụ để cung cấp cho xã hội. Chúng tôi luôn cam kết phấn đấu và đổi mới cũng như đem lại những sản phẩm, dịch vụ và sự tương tác xã hội thật sự tốt, thật sự khác biệt và nguyên bản.', 1, NULL, NULL),
(19, 'Eco Greens', 'Eco Greens là đơn vị chuyên nhập khẩu trực tiếp và độc quyền thực phẩm chức năng Eco Greens có nguồn gốc từ Mỹ.', 1, NULL, NULL),
(20, 'Young Healthy Lush', 'Thương hiệu YHL ra đời, tạo nên sự bứt phá mới trên thị trường mỹ phẩm Việt: Thương hiệu Việt được nghiên cứu và sản xuất tại các nhà máy hàng đầu trên thế giới theo tiêu chuẩn quốc tế và được kiểm định ở nước sở tại, cấp phép bởi Bộ Y tế Việt Nam.', 1, NULL, NULL),
(21, 'Cheong Kwan Jang', 'CHEONG KWAN JANG là thương hiệu hồng sâm được sản xuất và quản lý bởi chính phủ Hàn Quốc rất được ưa chuộng trên thị trường trên Hàn Quốc mà cả thế giới đều biết loại Hồng sâm đặc biệt này. Tập đoàn Nhân Sâm Hàn Quốc (KGC) – Là tập đoàn sản xuất và kinh doanh hồng sâm được Bộ Thương Mại, Công nghiệp và Năng lượng Hàn Quốc bình chọn là Tập đoàn sản xuất các sản phẩm Nhân sâm chất lượng tốt nhất ở Hàn Quốc.', 1, NULL, NULL),
(24, 'Botania', 'Botania là Công ty TNHH Thương Mại Botania phân phối các sản phẩm bảo vệ sức khỏe, dược phẩm và mỹ phẩm hàng đầu của Mỹ và Canada .', 1, NULL, NULL),
(25, 'z', 'z', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand_product_restore`
--

CREATE TABLE `tbl_brand_product_restore` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand_product_restore`
--

INSERT INTO `tbl_brand_product_restore` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(8, 'Blackmores', 'Blackmores là thương hiệu thực phẩm chức năng hàng đầu tại Úc, được ông Naturopath Maurice Blackmore (1906 - 1977) thành lập năm 1930 - Đất nước với những quy chuẩn về dinh dưỡng và các sản phẩm chăm sóc sức khỏe được xếp hạng khắt khe nhất thế giới. Với bề dày lịch sử hơn 85 năm, Blackmores sở hữu 1 danh mục lớn với hơn 1.200 sản phẩm các loại từ vitamin, khoáng chất, thảo dược và các sản phẩm bổ sung dinh dưỡng hàng ngày, 1.500 điểm phân phối tại hơn 17 quốc gia (Việt Nam, Thái Lan, Trung Quốc, Singapore, Nhật bản,...), tất cả đều đạt tiêu chuẩn kiểm định TGA cực kỳ nghiêm ngặt của Úc.', 1, NULL, NULL),
(9, 'Kirkland', 'Với mục tiêu mang lại những sản phẩm hỗ trợ sức khỏe có nguồn gốc từ thiên nhiên, thương hiệu Kirkland hơn 25 năm qua đã luôn nghiên cứu và sản xuất ra các sản phẩm an toàn, chất lượng. Được mệnh danh là “ ông hoàng bán lẻ” lớn nhất nước Mỹ, Kirkland đến nay đã phủ khắp thế giới với những sản phẩm nổi bật về thực phẩm chức năng, mẹ và bé, làm đẹp, các dòng đồ ăn vặt tốt cho sức khỏe, … góp phần bổ sung dinh dưỡng cho cả gia đình.', 1, NULL, NULL),
(10, 'Healthy Care', 'Healthy Care là thương hiệu chăm sóc sức khỏe tự nhiên hàng đầu của Úc được thành lập năm 2006, là công ty nhỏ thuộc Tập đoàn Nature\'s Care với hơn 30 năm kinh nghiệm nghiên cứu và sản xuất tuân thủ quy định điều trị. Mỗi sản phẩm của Healthy Care trước khi tới tay người tiêu dùng phải trải qua hơn 20 lần kiểm định chất lượng và được cố vấn từ hơn 250 chuyên viên y khoa và dược sĩ nổi tiếng, đáp ứng đủ tiêu chuẩn TGA và CGMP - Hai tiêu chuẩn nghiêm ngặt nhất thế giới.', 1, NULL, NULL),
(11, 'Orihiro', 'Orihiro - Thương hiệu thực phẩm chức năng uy tín hàng đầu Nhật Bản. Với sứ mệnh mong muốn lan tỏa những giá trị tuyệt vời, nâng cao chất lượng cuộc sống con người, thương hiệu thực phẩm chức năng Orihiro Nhật Bản đã không ngừng cố gắng, nghiên cứu và phát triển để mang tới những sản phẩm chất lượng nhất đến tay khách hàng. Các sản phẩm của Orihiro có giá thành phải chăng, đáp ứng được nhu cầu sử dụng của người dùng từ trẻ em, người lớn đến người cao tuổi.', 1, NULL, NULL),
(12, 'Nature Made', 'Nature Made là thương hiệu thực phẩm chức năng (TPCN) nổi tiếng của Mỹ được Hội đồng Dược điển Hoa Kỳ (USP) đánh giá là một trong 5 thương hiệu TPCN thiên nhiên uy tín nhất hiện nay. Với khẩu hiệu “Sản xuất an toàn, sản xuất tinh khiết”, các sản phẩm của Nature Made luôn được đánh giá cao về chất lượng, hiệu quả cũng như độ an toàn đối với sức khỏe người sử dụng.', 1, NULL, NULL),
(13, 'DHC', 'DHC - THƯƠNG HIỆU THỰC PHẨM CHỨC NĂNG VÀ MỸ PHẨM HÀNG ĐẦU TẠI NHẬT BẢN. Công ty DHC được thành lập vào năm 1972, với 30 năm kinh nghiệm nghiên cứu và sản xuất, DHC sở hữu 2 ngành hàng lớn làm nên \"tên tuổi\" bao gồm: Mỹ phẩm DHC và Thực phẩm chức năng DHC. Các sản phẩm làm đẹp của DHC tập trung vào công dụng dưỡng trắng, ngăn ngừa lão hoá da, giảm mụn, mờ thâm,...Trong khi đó, các sản phẩm TPCN DHC tập trung bổ sung các loại vitamin rau củ quả,..giúp bổ dưỡng, tăng cường sức đề kháng cho cơ thể.', 1, NULL, NULL),
(14, 'Swisse', 'Thương hiệu Swisse được thành lập năm 1969 tại Úc, có trụ sở chính tại Melbourne do Kevin Ring sáng lập với nhiệm vụ ban đầu là Swisse DNA - Ước mơ giúp mọi người trên thế giới khỏe mạnh và hạnh phúc hơn. Các dòng sản phẩm của thương hiệu Swisse tập trung bổ sung vitamin và dưỡng chất cần thiết, cung cấp năng lượng cho các hoạt động thể thao, hỗ trợ chăm sóc sắc đẹp, cải thiện sức khỏe thể chất và tinh thần, dùng được cho cả nam và nữ.', 1, NULL, NULL),
(15, 'Natrol', 'Natrol là thương hiệu chuyên cung cấp các sản phẩm chăm sóc sức khỏe nổi tiếng của Mỹ. Chính thức ra mắt thị trường vào năm 1980, đến nay sau hơn 40 năm hình thành và phát triển, các sản phẩm của Natrol không chỉ trở nên quen thuộc tại thị trường Mỹ mà còn được tin dùng tại nhiều quốc gia trên thế giới, trong đó có Việt Nam.', 1, NULL, NULL),
(16, 'Bio Island', 'Nhắc đến Bio Island, chắc hẳn không ít mẹ bỉm sữa sẽ nghĩ ngay đến thương hiệu sở hữu sản phẩm canxi sữa Bio Island Milk Calcium đang “làm mưa làm gió” trong cộng đồng mẹ bỉm sữa Việt hiện nay, được không ít mẹ bỉm sữa Việt tin dùng cho bé yêu của mình. Vậy mẹ có biết Bio Island là thương hiệu của nước nào, có xuất xứ từ đâu và ngoài sản phẩm canxi sữa, Bio Island còn sở hữu những sản phẩm dinh dưỡng tốt nào không?', 1, NULL, NULL),
(17, 'Puritan\'s Pride', 'Vitamin và khoáng chất là những thành phần thiết yếu mà tất cả chúng ta đều cần. Nếu bạn muốn biết cơ thể mình đang cần bổ sung vitamin gì, hãy để Puritan\'s Pride nói với bạn. Từ những thành phần chất lượng cao được tìm kiếm trên toàn thế giới, thương hiệu Puritan\'s Pride Mỹ cung cấp cho khách hàng vitamin chất lượng với giá cả hợp lý. Trải qua hơn 40 năm nghiên cứu và phát triển, thương hiệu Puritan\'s Pride luôn đặt sự trung thành lên hàng đầu, trở thành cốt lõi giá trị.', 1, NULL, NULL),
(18, 'Mudaru', 'MUDARU là nhãn hiệu đã được đăng ký độc quyền của Công ty cổ phần TNB Việt Nam. Cùng với những khao khát mang lại giá trị cốt lõi, chân thật đối với sản phẩm và dịch vụ để cung cấp cho xã hội. Chúng tôi luôn cam kết phấn đấu và đổi mới cũng như đem lại những sản phẩm, dịch vụ và sự tương tác xã hội thật sự tốt, thật sự khác biệt và nguyên bản.', 1, NULL, NULL),
(19, 'Eco Greens', 'Eco Greens là đơn vị chuyên nhập khẩu trực tiếp và độc quyền thực phẩm chức năng Eco Greens có nguồn gốc từ Mỹ.', 1, NULL, NULL),
(20, 'Young Healthy Lush', 'Thương hiệu YHL ra đời, tạo nên sự bứt phá mới trên thị trường mỹ phẩm Việt: Thương hiệu Việt được nghiên cứu và sản xuất tại các nhà máy hàng đầu trên thế giới theo tiêu chuẩn quốc tế và được kiểm định ở nước sở tại, cấp phép bởi Bộ Y tế Việt Nam.', 1, NULL, NULL),
(21, 'Cheong Kwan Jang', 'CHEONG KWAN JANG là thương hiệu hồng sâm được sản xuất và quản lý bởi chính phủ Hàn Quốc rất được ưa chuộng trên thị trường trên Hàn Quốc mà cả thế giới đều biết loại Hồng sâm đặc biệt này. Tập đoàn Nhân Sâm Hàn Quốc (KGC) – Là tập đoàn sản xuất và kinh doanh hồng sâm được Bộ Thương Mại, Công nghiệp và Năng lượng Hàn Quốc bình chọn là Tập đoàn sản xuất các sản phẩm Nhân sâm chất lượng tốt nhất ở Hàn Quốc.', 1, NULL, NULL),
(24, 'Botania', 'Botania là Công ty TNHH Thương Mại Botania phân phối các sản phẩm bảo vệ sức khỏe, dược phẩm và mỹ phẩm hàng đầu của Mỹ và Canada .', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `category_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `category_note`, `created_at`, `updated_at`) VALUES
(1, 'Hỗ trợ sức khỏe', 'Sản phẩm hỗ trợ sức khỏe được biết đến là những sản phẩm có khả năng bổ sung các chất thiếu hụt trong cơ thể, mang đến khả năng chuyển hóa các chất trong cơ thể được diễn ra bình thường. Từ đó, đóng góp một phần vào việc cải thiện tình trạng sức khỏe, phòng ngừa một số bệnh cơ bản.', 1, 'Nổi bật', NULL, NULL),
(13, 'Vitamin & khoáng chất', 'Vitamin & khoáng chất là những chất thiết yếu cần thiết cho cơ thể con người, chúng tham gia vào cấu tạo tế bào, chuyển hóa năng lượng nhưng lại cơ thể lại không thể tự tổng hợp được. Chính vì vậy việc bổ sung vitamin tổng hợp & khoáng chất thực sự cần thiết để duy trì sự sống cũng như các hoạt động của cơ thể trong suốt cuộc đời.', 1, 'Nổi bật', NULL, NULL),
(14, 'Collagen', 'Collagen là một loại protein cực kỳ quan trọng đối với sự sống của con người, đặc biệt là sức khỏe và sắc đẹp làn da. Collagen có khả năng hỗ trợ tăng cường độ đàn hồi cho da, giúp trẻ hóa làn da, dự phòng các dấu hiệu tuổi tác trên da, mang đến cho phái đẹp làn da căng mịn săn chắc không tỳ vết.', 1, NULL, NULL, NULL),
(15, 'Đông trùng hạ thảo', 'Đông trùng hạ thảo từ xa xưa được mệnh danh là “vàng mềm Tây Tạng” bởi sự quý hiếm và đắt đỏ của chúng. Với những công dụng tuyệt vời cho sức khỏe và sắc đẹp của con người, sử dụng cho cả nam và nữ, đặc biệt là hỗ trợ tăng cường sinh lý cho phái mạnh.', 1, 'Nổi bật', NULL, NULL),
(16, 'Sữa ong chúa', 'Sở hữu hàm lượng dinh dưỡng cao với nhiều lợi ích tích cực cho sức khỏe người sử dụng. Sữa ong chúa hiện nay được bán dưới dạng thực phẩm năng hỗ trợ làm đẹp, bồi bổ cơ thể, tăng cường và cải thiện một số vấn đề sức khỏe mà người sử dụng đang gặp phải.', 1, 'Nổi bật', NULL, NULL),
(17, 'Nhau thai cừu', 'Nhau thai cừu  được hình thành trong quá trình mang thai, nó kết nối với bào thai bằng dây rốn, bào thai không thể trao đổi chất và hô hấp trực tiếp với oxy bên ngoài do đó phải thông qua nhau thai để trao đổi khí. Cũng chính vì thế mà nhau thai cừu lại chứa rất nhiều chất dinh dưỡng quý giá giúp phái đẹp cuốn hút, tự tin hơn.', 1, NULL, NULL, NULL),
(18, 'Viên uống trắng da', 'Viên uống trắng da là thực phẩm chăm sóc sức khỏe được bào chế dưới dạng viên nén hoặc viên né có chứa các thành phần đã được chứng minh có khả năng dưỡng trắng, làm đẹp da từ sâu bên trong. Sử dụng viên uống trắng da cũng là phương pháp làm trắng da được nhiều chị em tin dùng hiện nay, được đánh giá có khả năng giúp làm trắng da từ sâu bên trong, hiệu quả và bền vững hơn so với các phương pháp làm trắng da bên ngoài khác.', 1, 'Nổi bật', NULL, NULL),
(19, 'Tảo biển', 'Tảo biển là loại thực phẩm giàu dinh dưỡng tốt cho sức khỏe, giúp tăng cường hệ miễn dịch, hạn chế nguy cơ mắc bệnh về tim mạch, duy trì sức khỏe não bộ, tăng cường thị lực, ngăn ngừa và làm chậm quá trình lão hóa tự nhiên của cơ thể đồng thời có thể giúp tăng hoặc giảm cân khi sử dụng đúng cách.', 1, NULL, NULL, NULL),
(20, 'Kiểm soát cân nặng', '7Team phân phối các thuốc giảm cân và thuốc tăng cân của Mỹ, Nhật được chiết xuất từ tự nhiên. Nhờ các tính chất của các loại thực vật tự nhiên như tảo biển, hạt Chia, Garcinia Cambogia, ... hỗ trợ tăng cân hoặc giảm cân nhanh chóng, an toàn.', 1, 'Nổi bật', NULL, NULL),
(21, 'Dinh dưỡng thể hình', 'Dinh dưỡng của người tập thể hình luôn khác biệt với người bình thường, hầu hết tập trung vào việc xây dựng cơ bắp thông qua các bài tập về cử tạ và chế độ ăn uống hàng ngày. Bởi vậy, để cơ bắp không bị mất đi, người tập cần tối ưu hóa kết quả tập luyện theo từng giai đoạn. 7Team hiện cung cấp các sản phẩm dinh dưỡng thể hình chuyên dụng, sử dụng phù hợp nâng cao hiệu quả, cải thiện cơ bắp thông qua nhiều dòng sữa bổ sung dễ uống.', 1, NULL, NULL, NULL),
(22, 'Mọc tóc, trị hói', 'Do sử dụng hóa chất trong việc tạo kiểu, uốn - nhuộm - ép quá thường xuyên hoặc thậm chí là sau sinh nở, … Tất cả nguyên nhân đó khiến tóc của bạn rụng nhiều, khó kiểm soát. Rụng tóc nhiều khiến mái tóc trở nên mỏng và thưa dần, về lâu dài sẽ có thể dẫn đến hói đầu. 7Team cũng cấp các sản phẩm hỗ trợ mọc tóc, trị hói đầu, ngăn ngừa rụng tóc chính hãng từ nhiều thương hiệu nổi tiếng, có thể sử dụng cho cả nam và nữ.', 1, NULL, NULL, NULL),
(23, 'Tăng chiều cao', 'Trẻ em có hai giai đoạn vàng để phát triển chiều cao là dưới 5 tuổi và thời kỳ tiền dậy thì. Trong giai đoạn này, ba mẹ và gia đình cần chăm sóc, bổ sung dinh dưỡng cũng như các sản phẩm hỗ trợ nhằm phát triển chiều cao tối đa cho con trẻ. 7Team cung cấp các sản phẩm chức năng hỗ trợ tăng chiều cao chính hãng, giá tốt, đáp ứng mọi nhu cầu tăng chiều cao ở nhiều lứa tuổi.', 1, 'Nổi bật', NULL, NULL),
(24, 'Viên uống nở ngực', 'Bạn đã thử nhiều phương pháp để tăng kích cỡ vòng 1 của mình nhưng chúng chẳng hề thay đổi. Vòng 1 nhỏ cũng khiến trang phục bạn mặc không được đẹp như ý, vậy để cải thiện vòng 1 căng tròn tự nhiên bằng cách nào? 7Team hiện cung cấp các viên uống hỗ trợ nở ngực chính hãng, giá tốt, đáp ứng nhu cầu sử dụng của bạn.', 1, NULL, NULL, NULL),
(26, 'Nước súc miệng', 'Có nên dùng nước súc miệng không? Nước súc miệng có tác dụng gì? Nếu đang tìm kiếm giải pháp để hơi thở thơm mát thì bạn có rất nhiều lựa chọn. Tuy nhiên, nếu muốn răng và nướu khỏe mạnh, hãy dùng nước súc miệng để chăm sóc răng miệng hàng ngày. Bởi dung dịch súc miệng không chỉ làm giảm nguy cơ sâu răng, viêm nướu, giảm hình thành cao răng, mảng bám mà còn rất có hiệu quả trong việc làm trắng răng.', 1, NULL, NULL, NULL),
(27, 'Nhân sâm', 'Nhân sâm có công dụng tuyệt vời trong việc bồi bổ trí não, phát triển tư duy, trí tuệ, tăng cường hệ miễn dịch, hỗ trợ điều trị ung thư, ngăn ngừa lão hóa. Ngoài ra, loại thảo dược này còn có thể được dùng để hỗ trợ điều trị trong các trường hợp bệnh nhân thiếu máu, mắc các bệnh như viêm dạ dày, hen suyễn hoặc bệnh phổi tắc nghẽn mãn tính…', 1, 'Nổi bật', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product_restore`
--

CREATE TABLE `tbl_category_product_restore` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product_restore`
--

INSERT INTO `tbl_category_product_restore` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Hỗ trợ sức khỏe', 'Sản phẩm hỗ trợ sức khỏe được biết đến là những sản phẩm có khả năng bổ sung các chất thiếu hụt trong cơ thể, mang đến khả năng chuyển hóa các chất trong cơ thể được diễn ra bình thường. Từ đó, đóng góp một phần vào việc cải thiện tình trạng sức khỏe, phòng ngừa một số bệnh cơ bản.', 1, NULL, NULL),
(13, 'Vitamin & khoáng chất', 'Vitamin & khoáng chất là những chất thiết yếu cần thiết cho cơ thể con người, chúng tham gia vào cấu tạo tế bào, chuyển hóa năng lượng nhưng lại cơ thể lại không thể tự tổng hợp được. Chính vì vậy việc bổ sung vitamin tổng hợp & khoáng chất thực sự cần thiết để duy trì sự sống cũng như các hoạt động của cơ thể trong suốt cuộc đời.', 1, NULL, NULL),
(14, 'Collagen', 'Collagen là một loại protein cực kỳ quan trọng đối với sự sống của con người, đặc biệt là sức khỏe và sắc đẹp làn da. Collagen có khả năng hỗ trợ tăng cường độ đàn hồi cho da, giúp trẻ hóa làn da, dự phòng các dấu hiệu tuổi tác trên da, mang đến cho phái đẹp làn da căng mịn săn chắc không tỳ vết.', 1, NULL, NULL),
(15, 'Đông trùng hạ thảo', 'Đông trùng hạ thảo từ xa xưa được mệnh danh là “vàng mềm Tây Tạng” bởi sự quý hiếm và đắt đỏ của chúng. Với những công dụng tuyệt vời cho sức khỏe và sắc đẹp của con người, sử dụng cho cả nam và nữ, đặc biệt là hỗ trợ tăng cường sinh lý cho phái mạnh.', 1, NULL, NULL),
(16, 'Sữa ong chúa', 'Sở hữu hàm lượng dinh dưỡng cao với nhiều lợi ích tích cực cho sức khỏe người sử dụng. Sữa ong chúa hiện nay được bán dưới dạng thực phẩm năng hỗ trợ làm đẹp, bồi bổ cơ thể, tăng cường và cải thiện một số vấn đề sức khỏe mà người sử dụng đang gặp phải.', 1, NULL, NULL),
(17, 'Nhau thai cừu', 'Nhau thai cừu  được hình thành trong quá trình mang thai, nó kết nối với bào thai bằng dây rốn, bào thai không thể trao đổi chất và hô hấp trực tiếp với oxy bên ngoài do đó phải thông qua nhau thai để trao đổi khí. Cũng chính vì thế mà nhau thai cừu lại chứa rất nhiều chất dinh dưỡng quý giá giúp phái đẹp cuốn hút, tự tin hơn.', 1, NULL, NULL),
(18, 'Viên uống trắng da', 'Viên uống trắng da là thực phẩm chăm sóc sức khỏe được bào chế dưới dạng viên nén hoặc viên né có chứa các thành phần đã được chứng minh có khả năng dưỡng trắng, làm đẹp da từ sâu bên trong. Sử dụng viên uống trắng da cũng là phương pháp làm trắng da được nhiều chị em tin dùng hiện nay, được đánh giá có khả năng giúp làm trắng da từ sâu bên trong, hiệu quả và bền vững hơn so với các phương pháp làm trắng da bên ngoài khác.', 1, NULL, NULL),
(19, 'Tảo biển', 'Tảo biển là loại thực phẩm giàu dinh dưỡng tốt cho sức khỏe, giúp tăng cường hệ miễn dịch, hạn chế nguy cơ mắc bệnh về tim mạch, duy trì sức khỏe não bộ, tăng cường thị lực, ngăn ngừa và làm chậm quá trình lão hóa tự nhiên của cơ thể đồng thời có thể giúp tăng hoặc giảm cân khi sử dụng đúng cách.', 1, NULL, NULL),
(20, 'Kiểm soát cân nặng', '7Team phân phối các thuốc giảm cân và thuốc tăng cân của Mỹ, Nhật được chiết xuất từ tự nhiên. Nhờ các tính chất của các loại thực vật tự nhiên như tảo biển, hạt Chia, Garcinia Cambogia, ... hỗ trợ tăng cân hoặc giảm cân nhanh chóng, an toàn.', 1, NULL, NULL),
(21, 'Dinh dưỡng thể hình', 'Dinh dưỡng của người tập thể hình luôn khác biệt với người bình thường, hầu hết tập trung vào việc xây dựng cơ bắp thông qua các bài tập về cử tạ và chế độ ăn uống hàng ngày. Bởi vậy, để cơ bắp không bị mất đi, người tập cần tối ưu hóa kết quả tập luyện theo từng giai đoạn. 7Team hiện cung cấp các sản phẩm dinh dưỡng thể hình chuyên dụng, sử dụng phù hợp nâng cao hiệu quả, cải thiện cơ bắp thông qua nhiều dòng sữa bổ sung dễ uống.', 1, NULL, NULL),
(22, 'Mọc tóc, trị hói', 'Do sử dụng hóa chất trong việc tạo kiểu, uốn - nhuộm - ép quá thường xuyên hoặc thậm chí là sau sinh nở, … Tất cả nguyên nhân đó khiến tóc của bạn rụng nhiều, khó kiểm soát. Rụng tóc nhiều khiến mái tóc trở nên mỏng và thưa dần, về lâu dài sẽ có thể dẫn đến hói đầu. 7Team cũng cấp các sản phẩm hỗ trợ mọc tóc, trị hói đầu, ngăn ngừa rụng tóc chính hãng từ nhiều thương hiệu nổi tiếng, có thể sử dụng cho cả nam và nữ.', 1, NULL, NULL),
(23, 'Tăng chiều cao', 'Trẻ em có hai giai đoạn vàng để phát triển chiều cao là dưới 5 tuổi và thời kỳ tiền dậy thì. Trong giai đoạn này, ba mẹ và gia đình cần chăm sóc, bổ sung dinh dưỡng cũng như các sản phẩm hỗ trợ nhằm phát triển chiều cao tối đa cho con trẻ. 7Team cung cấp các sản phẩm chức năng hỗ trợ tăng chiều cao chính hãng, giá tốt, đáp ứng mọi nhu cầu tăng chiều cao ở nhiều lứa tuổi.', 1, NULL, NULL),
(24, 'Viên uống nở ngực', 'Bạn đã thử nhiều phương pháp để tăng kích cỡ vòng 1 của mình nhưng chúng chẳng hề thay đổi. Vòng 1 nhỏ cũng khiến trang phục bạn mặc không được đẹp như ý, vậy để cải thiện vòng 1 căng tròn tự nhiên bằng cách nào? 7Team hiện cung cấp các viên uống hỗ trợ nở ngực chính hãng, giá tốt, đáp ứng nhu cầu sử dụng của bạn.', 1, NULL, NULL),
(26, 'Nước súc miệng', 'Có nên dùng nước súc miệng không? Nước súc miệng có tác dụng gì? Nếu đang tìm kiếm giải pháp để hơi thở thơm mát thì bạn có rất nhiều lựa chọn. Tuy nhiên, nếu muốn răng và nướu khỏe mạnh, hãy dùng nước súc miệng để chăm sóc răng miệng hàng ngày. Bởi dung dịch súc miệng không chỉ làm giảm nguy cơ sâu răng, viêm nướu, giảm hình thành cao răng, mảng bám mà còn rất có hiệu quả trong việc làm trắng răng.', 1, NULL, NULL),
(27, 'Nhân sâm', 'Nhân sâm có công dụng tuyệt vời trong việc bồi bổ trí não, phát triển tư duy, trí tuệ, tăng cường hệ miễn dịch, hỗ trợ điều trị ung thư, ngăn ngừa lão hóa. Ngoài ra, loại thảo dược này còn có thể được dùng để hỗ trợ điều trị trong các trường hợp bệnh nhân thiếu máu, mắc các bệnh như viêm dạ dày, hen suyễn hoặc bệnh phổi tắc nghẽn mãn tính…', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_note`, `created_at`, `updated_at`) VALUES
(18, 'Sâm Alipas Platinum', 27, 19, 'Hộp 30 Viên, Sinh Lý Nam, Chính Hãng, Bổ Thận, Tráng Dương', 'Sâm Alipas Platinum từ thương hiệu nổi tiếng Eco Green hộp 30 viên, công thức vượt trội Platium với sự kết hợp giữa tinh chất Eurycoma Longifolia và các thành phần thiên nhiên tốt cho sức khỏe của nam giới. Sâm Alipas Platinum hiện đang là sản phẩm bán chạy của hãng trong nhiều năm liên tiếp.', '750.000 VNĐ', 'product-19_49.png', 1, 'Mới', NULL, NULL),
(19, 'Hồng sâm củ Hàn Quốc tẩm mật ong YHL', 27, 20, '10 gói/ hộp lớn (Mỗi gói 22 g)', 'HỒNG SÂM CỦ HÀN QUỐC TẨM MẬT ONG YHL với thành phần chính là hồng sâm cao ly  được chọn lọc kỹ lưỡng và tuân thủ quy trình sản xuất khắt khe nhằm giữ trọn dưỡng chất. HỒNG SÂM CỦ HÀN QUỐC TẨM MẬT ONG YHL chính là món quà sức khỏe ý nghĩa với công dụng hỗ trợ tăng cường sức khỏe, bồi bổ cơ thể.', '675.000 VNĐ', 'product-18_97.png', 1, 'Mới', NULL, NULL),
(20, 'Lương Sâm Nguyên Củ KGC', 27, 21, 'Hộp thiếc 150g chứa 12 củ (KRG GOOD 30 PCS 150G – 12 củ)', 'Lương sâm nguyên củ hay hồng sâm khô nguyên củ là loại hồng sâm cao cấp được tuyển lựa kỳ công, giá trị chỉ sau thiên sâm và địa sâm. Hồng sâm khô nguyên củ KGC với 100% hồng sâm khô 6 năm tuổi được chọn lọc cẩn thận bởi thương hiệu nhân sâm Số 1 thế giới, CheongKwanJang.', '1.180.000 VNĐ', 'product-23_93.png', 1, 'Được đánh giá cao', NULL, NULL),
(21, 'Viên Uống Bổ Sung Vitamin C Blackmores Bio C', 13, 8, 'Hộp 62 viên', 'Blackmores Bio C bổ sung hàm lượng 1000mg vitamin C trong mỗi viên uống, giúp hỗ trợ tăng cường miễn dịch cho cơ thể. Đặc biệt, Blackmores Bio C còn chứa bioflavonoid và khoáng chất ascorbates hỗ trợ cơ thể hấp thu vitamin C tối ưu hơn, mang lại sự khác biệt so với các sản phẩm bổ sung vitamin C khác trên thị trường.', '445.000 VNĐ', 'product-10_99.png', 1, 'Ưu đãi hôm nay', NULL, NULL),
(22, 'Viên Bổ Não Tăng Trí Nhớ Và Tư Duy Blackmores Teen Multi For Guys', 13, 8, 'Hộp 60 viên', 'Blackmores Teen Multi For Guys của Úc cho trẻ dậy thì chứa đầy đủ vitamin và khoáng chất, bao gồm 5 chất dinh dưỡng cần thiết để não trẻ phát triển khỏe mạnh: i-ốt, a-xít béo omega 3, sắt, kẽm, vitamin B12', '415.000 VNĐ', 'product-13_86.png', 1, 'Giảm giá', NULL, NULL),
(23, 'Sữa Ong Chúa Blackmores Royal Jelly Chính Hãng Úc', 27, 21, 'Lọ 365 viên', 'Thuốc Sữa Ong Chúa Blackmores Royal Jelly cung cấp một lượng đáng kể các nguồn dinh dưỡng có lợi cho sức khoẻ; như hỗn hơp vitamin nhóm B, trong đó vitamin B5, vitamin B6 chiếm một lượng lớn. Ngoài ra Sữa ong chúa Royal Jelly còn có Vitamin E, A, C, D, protein, lipid, glucid, hormon, enzym, các chất khoáng (Kali, Natri, sắt, crom, mangan), 18 acid amin; và các nhân tố đặc biệt quan trọng có hoạt tính sinh học hỗ trợ quá trình phục hồi tế bào trong cơ thể.', '895.000 VNĐ', 'product-15_83.png', 1, 'Bán chạy', NULL, NULL),
(24, 'Viên Uống Kirkland Signature Stool Softener', 1, 9, 'Lọ 400 viên', 'Viên Uống Kirkland Signature Stool Softener của thương hiệu Kirkland, Hoa Kỳ. Sản phẩm được nghiên cứu và sản xuất trên dây chuyền hiện đại của Mỹ, không chứa các thành phần bảo quản, không gây ảnh hưởng xấu đến sức khỏe người tiêu dùng.', '350.000 VNĐ', 'product-2_63.png', 1, 'Được đánh giá cao', NULL, NULL),
(25, 'Kẹo Cai Thuốc Lá Kirkland Gum Quit 2', 1, 9, 'Hộp 270 viên', 'Kẹo Cai Thuốc Lá Kirkland Gum Quit 2  chứa hàm lượng Nicotine bằng 1/3 lượng Nicotine trong 1 điếu thuốc lá giúp bạn từ từ quên đi cơn thèm thuốc, đồng thời hạn chế hấp thụ các chất có hại từ thuốc lá vào cơ thể. Sử dụng sản phẩm thường xuyên trong 3 tháng, bạn sẽ cắt được cơn thèm thuốc và cai thuốc thành công.', '550.000 VNĐ', 'product-22_76.png', 1, NULL, NULL, NULL),
(26, 'Nhau Thai Cừu Sheep Placenta Healthy Care 5000mg', 17, 10, 'Hộp 100 viên', 'Nhau Thai Cừu Sheep Placenta là nhau thai cừu cao cấp được sản xuất với quy trình công nghệ hiện đại tại Úc. Với công thức đặc biệt được chiết xuất từ nhau thai cừu tươi và khỏe mạnh, gồm 5 thành phần chính, cùng các axit amin thiết yếu, Sheep Placenta Healthy Care giúp tăng cường sắc đẹp, mang đến làn da sáng bóng và mịn màng.', '520.000 VNĐ', 'product-17_55.png', 1, 'Giảm giá', NULL, NULL),
(27, 'Viên Uống Giảm Cân Healthy Care Green Coffee Bean', 20, 10, 'Hộp 60 viên', 'Hiện nay nhu cầu làm đẹp ngày càng tăng lên, đặc biệt không thể không kể đến việc sử dụng các sản phẩm hỗ trợ giảm cân mang đến một cơ thể săn chắc, một dáng vóc cân đối. Một thực phẩm chức năng hỗ trợ giảm cân mà chị em chắc chắn không thể bỏ qua chính là Viên Uống Giảm Cân Healthy Care Green Coffee Bean xuất xứ từ Úc.', '360.000 VNĐ', 'product-11_64.png', 1, 'Mới', NULL, NULL),
(28, 'Viên Bổ Sung Năng Lượng Orihiro Citrulline Mega Power 1000mg', 21, 11, 'Hộp 240 viên', 'Orihiro Citrulline Mega Power là sự kết hợp của Citrulline, L-citrulline, L-arginine, vitamin B1, vitamin B6, kẽm , Selenium giúp hỗ trợ giảm mệt mỏi khi luyện tập, giúp duy trì năng lượng và sự hoạt động hiệu quả của cơ thể.', '650.000 VNĐ', 'product-12_73.png', 1, 'Bán chạy', NULL, NULL),
(29, 'Viên Uống Hỗ Trợ Mọc Tóc Nature Made Biotin 5000mcg', 22, 12, 'Hộp 120 viên', 'Viên Uống Hỗ Trợ Mọc Tóc Nature Made Biotin được chiết xuất hoàn toàn từ thiên nhiên, với hàm lượng 5000 mcg giúp hỗ trợ làn da khỏe mạnh, tóc dày và bóng, móng chắc khỏe. Đặc biệt Nature Made Biotin 5000mcg, thiết kế dạng viên nang mềm giúp viên uống nhanh chóng tan trong miệng, cơ thể hấp thu dễ dàng hơn.', '450.000 VNĐ', 'product-8_93.png', 1, 'Bán chạy', NULL, NULL),
(30, 'Viên Uống Hỗ Trợ Trắng Da DHC Coix Extract Của Nhật Bản', 18, 13, 'Gói 20 viên', 'Viên uống trắng da DHC 20 ngày Coix Extract với thành phần chính là chiết xuất hạt Coix giúp dưỡng trắng da, làm mờ vết thâm. Bên cạnh đó còn được bổ sung 1 số dưỡng chất, vitamin giúp da mềm mại, khỏe mạnh, giảm thiểu tác hại từ UV, môi trường. Sản phẩm bổ sung an toàn từ bên trong mang hiệu quả đầy bất ngờ.', '150.000 VNĐ', 'product-6_54.png', 1, 'Xu hướng', NULL, NULL),
(31, 'Viên Uống Tảo Xoắn Hữu Cơ Swisse Organic Spirulina', 19, 14, 'Hộp 100 viên', 'Viên uống tảo xoắn hữu cơ Swisse Organic Spirulina thuộc thương hiệu chăm sóc sức khỏe nổi tiếng tại Úc, Swisse. Swisse Organic Spirulina có những đặc tính ưu việt và hàm lượng dinh dưỡng cao hỗ trợ cải thiện sức khỏe toàn diện, giúp bạn luôn khỏe mạnh và tràn đầy sức sống.', '400. 000 VNĐ', 'product-7_32.png', 1, NULL, NULL, NULL),
(32, 'Kẹo Dẻo Natrol Gummies Hair Skin Nails Đẹp Da Móng Tóc', 22, 15, 'Hộp 90 viên', 'Kẹo dẻo Natrol Gummies Hair Skin Nails là sản phẩm thực phẩm chức năng hỗ trợ, chăm sóc da móng tóc hiệu quả. Hương vị thơm nhẹ, dễ sử dụng, mang đến nguồn dưỡng chất cần thiết cho cơ thể người dùng.', '320.000 VNĐ', 'product-21_15.png', 1, 'Bán chạy', NULL, NULL),
(33, 'Natrol Collagen Skin Renewal Dạng Viên Ngăn Ngừa Lão Hóa Da', 14, 15, 'Hộp 120 viên', 'Natrol Collagen Skin Renewal 120 viên là công thức chứa collagen peptide + vitamin C đã được chứng minh là có thể cải thiện nếp nhăn, nếp gấp, tăng độ đàn hồi cho da chỉ sau 4 tuần . Đây là sản phẩm của thương hiệu Natrol uy tín, đã được đánh giá cao trên thị trường.', '580.000 VNĐ', 'product-1_62.png', 1, 'Mới', NULL, NULL),
(34, 'Bột Bio Island Lysine Starter Cho Trẻ Dưới 6 Tuổi Của Úc', 23, 16, 'Hộp 150g', 'Bột hỗ trợ tăng chiều cao Lysine Bio Island hỗ trợ hấp thu canxi, giúp cho việc duy trì cấu trúc xương bình thường. Từng tế bào cơ thể đòi hỏi lysine nhằm xây dựng protein, cung cấp chất dinh dưỡng cần thiết cho quá trình cơ thể bao gồm cả việc hình thành collagen. Lysine có thể cải thiện được sự thèm ăn và thúc đẩy tăng trưởng, nhất là ở trẻ nhỏ có thể không được hấp thụ đủ nhu cầu chế độ ăn uống của chúng. Nó cũng có một vai trò quan trọng trong việc sản xuất năng lượng và chuyển hóa carbohydrate, giúp cho trẻ em có nhu cầu năng lượng phát triển.', '370.000 VNĐ', 'product-4_28.png', 1, 'Được đánh giá cao', NULL, NULL),
(35, 'Đông Trùng Hạ Thảo Puritan\'s Pride Cordyceps Mushroom 750mg', 15, 17, 'Hộp 60 viên', 'Viên Uống Đông Trùng Hạ Thảo Puritan’s Pride Cordyceps Mushroom 60 Viên X 750mg có tác dụng hỗ trợ bảo vệ sức khỏe tim mạch, ổn định lượng đường trong máu, giảm tình trạng đau lưng, mỏi gối xuất hiện khi bước sang tuổi trung niên, bổ thận tráng dương, …', '300.000 VNĐ', 'product-24_99.png', 1, 'Xu hướng', NULL, NULL),
(36, 'Sữa Ong Chúa Royal Jelly 500mg Puritan\'s Pride Mỹ Chính Hãng', 16, 17, 'Lọ 120 viên', 'Thực phẩm chức năng Puritan\'s Pride Royal Jelly 500mg chứa sữa ong chúa giúp hỗ trợ tăng cường sức khỏe, hạn chế quá trình lão hóa, giúp làm đẹp da, cân bằng kích thích tố, nhất là phụ nữ trong thời kỳ mãn kinh, giúp người phụ nữ trong giai đoạn này cảm thấy thoải mái, bớt khó chịu.', '350.000 VNĐ', 'product-3_73.png', 1, 'Xu hướng', NULL, NULL),
(37, 'Collagen Thủy Phân Puritan\'s Pride 1000mg Của Mỹ', 14, 17, 'Lọ 180 viên', 'Giúp cải thiện làn da mịn màng và độ đàn hồi của da để chống lại các dấu hiệu lão hóa như nếp nhăn. Thúc đẩy tóc và móng mạnh mẽ và sáng bóng. Viên Trắng da, Mờ nám Puritan\'s Pride Hydrolyzed Collagen của Mỹ có chứa 1000mg Collagen thủy phân chính là Collagen Type I và III được thủy phân để hấp thụ tối ưu, vì vậy bạn có thể yên tâm rằng bạn có thể lấy collagen ở dạng tốt nhất có thể.', '480.000 VNĐ', 'product-5_61.png', 1, NULL, NULL, NULL),
(38, 'Viên uống khổ qua rừng MUDARU', 1, 18, 'Hộp 90 viên', 'Viên uống Mudaru chiết xuất từ khổ qua rừng được nghiên cứu và sản xuất bởi Công ty Cổ phần TNB Việt Nam (công ty Mudaru) đang nhận được sự tin tưởng và ủng hộ của người tiêu dùng trong việc hỗ trợ điều trị bệnh tiểu đường, ổn định huyết áp, cải thiện giấc ngủ.', '360.000 VNĐ', 'product-20_71.png', 1, 'Ưu đãi hôm nay', NULL, NULL),
(39, 'Boni Smok - Nước Cai Thuốc Lá Thành Phần Thảo Dược, 250ml', 26, 24, 'Chai 250ml', 'Boni-smoking là sản phẩm được sản xuất bởi cơ sở đông dược Đông Hải như bồ công anh, kim ngân hoa, cúc hoa.. giúp hỗ trợ cải thiện mùi của hơi thở. Boni Smok  không chứa phụ gia, không chất gây hại, tốt cho sức khỏe người dùng. Sản phẩm có 2 loại: Boni Smoking 150ml và Boni Smoking 250ml.', '180.000 VNĐ', 'product-16_41.png', 1, 'Xu hướng', NULL, NULL),
(40, 'Viên Uống Hỗ Trợ Cải Thiện Vòng 1 DHC Nhật Bản', 24, 13, 'Gói 60 viên', 'Viên Uống Hỗ Trợ Cải Thiện Vòng 1 DHC Nhật Bản được chiết xuất từ Pueraria - một loại cây họ đậu có nguồn gốc từ vùng ôn đới, như Myanmar và phía Bắc Thái Lan giúp hỗ trợ tốt với vòng 1, giúp cơ thể khỏe mạnh, cải thiện tóc bạc sớm, giúp da căng mịn, sáng hồng.', '445.000 VNĐ', 'product-9_22.png', 1, 'Được đánh giá cao', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_restore`
--

CREATE TABLE `tbl_product_restore` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_restore`
--

INSERT INTO `tbl_product_restore` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_note`, `created_at`, `updated_at`) VALUES
(18, 'Sâm Alipas Platinum', 27, 19, 'Hộp 30 Viên, Sinh Lý Nam, Chính Hãng, Bổ Thận, Tráng Dương', 'Sâm Alipas Platinum từ thương hiệu nổi tiếng Eco Green hộp 30 viên, công thức vượt trội Platium với sự kết hợp giữa tinh chất Eurycoma Longifolia và các thành phần thiên nhiên tốt cho sức khỏe của nam giới. Sâm Alipas Platinum hiện đang là sản phẩm bán chạy của hãng trong nhiều năm liên tiếp.', '750.000 VNĐ', 'product-19_49.png', 1, 'Sản phẩm mới', NULL, NULL),
(19, 'Hồng sâm củ Hàn Quốc tẩm mật ong YHL', 27, 20, '10 gói/ hộp lớn (Mỗi gói 22 g)', 'HỒNG SÂM CỦ HÀN QUỐC TẨM MẬT ONG YHL với thành phần chính là hồng sâm cao ly  được chọn lọc kỹ lưỡng và tuân thủ quy trình sản xuất khắt khe nhằm giữ trọn dưỡng chất. HỒNG SÂM CỦ HÀN QUỐC TẨM MẬT ONG YHL chính là món quà sức khỏe ý nghĩa với công dụng hỗ trợ tăng cường sức khỏe, bồi bổ cơ thể.', '675.000 VNĐ', 'product-18_97.png', 1, 'Sản phẩm mới', NULL, NULL),
(20, 'Lương Sâm Nguyên Củ KGC', 27, 21, 'Hộp thiếc 150g chứa 12 củ (KRG GOOD 30 PCS 150G – 12 củ)', 'Lương sâm nguyên củ hay hồng sâm khô nguyên củ là loại hồng sâm cao cấp được tuyển lựa kỳ công, giá trị chỉ sau thiên sâm và địa sâm. Hồng sâm khô nguyên củ KGC với 100% hồng sâm khô 6 năm tuổi được chọn lọc cẩn thận bởi thương hiệu nhân sâm Số 1 thế giới, CheongKwanJang.', '1.180.000 VNĐ', 'product-23_93.png', 1, 'Được đánh giá cao', NULL, NULL),
(21, 'Viên Uống Bổ Sung Vitamin C Blackmores Bio C', 13, 8, 'Hộp 62 viên', 'Blackmores Bio C bổ sung hàm lượng 1000mg vitamin C trong mỗi viên uống, giúp hỗ trợ tăng cường miễn dịch cho cơ thể. Đặc biệt, Blackmores Bio C còn chứa bioflavonoid và khoáng chất ascorbates hỗ trợ cơ thể hấp thu vitamin C tối ưu hơn, mang lại sự khác biệt so với các sản phẩm bổ sung vitamin C khác trên thị trường.', '445.000 VNĐ', 'product-10_99.png', 1, NULL, NULL, NULL),
(22, 'Viên Bổ Não Tăng Trí Nhớ Và Tư Duy Blackmores Teen Multi For Guys', 13, 8, 'Hộp 60 viên', 'Blackmores Teen Multi For Guys của Úc cho trẻ dậy thì chứa đầy đủ vitamin và khoáng chất, bao gồm 5 chất dinh dưỡng cần thiết để não trẻ phát triển khỏe mạnh: i-ốt, a-xít béo omega 3, sắt, kẽm, vitamin B12', '415.000 VNĐ', 'product-13_86.png', 1, NULL, NULL, NULL),
(23, 'Sữa Ong Chúa Blackmores Royal Jelly Chính Hãng Úc', 27, 21, 'Lọ 365 viên', 'Thuốc Sữa Ong Chúa Blackmores Royal Jelly cung cấp một lượng đáng kể các nguồn dinh dưỡng có lợi cho sức khoẻ; như hỗn hơp vitamin nhóm B, trong đó vitamin B5, vitamin B6 chiếm một lượng lớn. Ngoài ra Sữa ong chúa Royal Jelly còn có Vitamin E, A, C, D, protein, lipid, glucid, hormon, enzym, các chất khoáng (Kali, Natri, sắt, crom, mangan), 18 acid amin; và các nhân tố đặc biệt quan trọng có hoạt tính sinh học hỗ trợ quá trình phục hồi tế bào trong cơ thể.', '895.000 VNĐ', 'product-15_83.png', 1, 'Bán chạy', NULL, NULL),
(24, 'Viên Uống Kirkland Signature Stool Softener', 1, 9, 'Lọ 400 viên', 'Viên Uống Kirkland Signature Stool Softener của thương hiệu Kirkland, Hoa Kỳ. Sản phẩm được nghiên cứu và sản xuất trên dây chuyền hiện đại của Mỹ, không chứa các thành phần bảo quản, không gây ảnh hưởng xấu đến sức khỏe người tiêu dùng.', '350.000 VNĐ', 'product-2_63.png', 1, 'Được đánh giá cao', NULL, NULL),
(25, 'Kẹo Cai Thuốc Lá Kirkland Gum Quit 2', 1, 9, 'Hộp 270 viên', 'Kẹo Cai Thuốc Lá Kirkland Gum Quit 2  chứa hàm lượng Nicotine bằng 1/3 lượng Nicotine trong 1 điếu thuốc lá giúp bạn từ từ quên đi cơn thèm thuốc, đồng thời hạn chế hấp thụ các chất có hại từ thuốc lá vào cơ thể. Sử dụng sản phẩm thường xuyên trong 3 tháng, bạn sẽ cắt được cơn thèm thuốc và cai thuốc thành công.', '550.000 VNĐ', 'product-22_76.png', 1, NULL, NULL, NULL),
(26, 'Nhau Thai Cừu Sheep Placenta Healthy Care 5000mg', 17, 10, 'Hộp 100 viên', 'Nhau Thai Cừu Sheep Placenta là nhau thai cừu cao cấp được sản xuất với quy trình công nghệ hiện đại tại Úc. Với công thức đặc biệt được chiết xuất từ nhau thai cừu tươi và khỏe mạnh, gồm 5 thành phần chính, cùng các axit amin thiết yếu, Sheep Placenta Healthy Care giúp tăng cường sắc đẹp, mang đến làn da sáng bóng và mịn màng.', '520.000 VNĐ', 'product-17_55.png', 1, NULL, NULL, NULL),
(27, 'Viên Uống Giảm Cân Healthy Care Green Coffee Bean', 20, 10, 'Hộp 60 viên', 'Hiện nay nhu cầu làm đẹp ngày càng tăng lên, đặc biệt không thể không kể đến việc sử dụng các sản phẩm hỗ trợ giảm cân mang đến một cơ thể săn chắc, một dáng vóc cân đối. Một thực phẩm chức năng hỗ trợ giảm cân mà chị em chắc chắn không thể bỏ qua chính là Viên Uống Giảm Cân Healthy Care Green Coffee Bean xuất xứ từ Úc.', '360.000 VNĐ', 'product-11_64.png', 1, 'Sản phẩm mới', NULL, NULL),
(28, 'Viên Bổ Sung Năng Lượng Orihiro Citrulline Mega Power 1000mg', 21, 11, 'Hộp 240 viên', 'Orihiro Citrulline Mega Power là sự kết hợp của Citrulline, L-citrulline, L-arginine, vitamin B1, vitamin B6, kẽm , Selenium giúp hỗ trợ giảm mệt mỏi khi luyện tập, giúp duy trì năng lượng và sự hoạt động hiệu quả của cơ thể.', '650.000 VNĐ', 'product-12_73.png', 1, 'Bán chạy', NULL, NULL),
(29, 'Viên Uống Hỗ Trợ Mọc Tóc Nature Made Biotin 5000mcg', 22, 12, 'Hộp 120 viên', 'Viên Uống Hỗ Trợ Mọc Tóc Nature Made Biotin được chiết xuất hoàn toàn từ thiên nhiên, với hàm lượng 5000 mcg giúp hỗ trợ làn da khỏe mạnh, tóc dày và bóng, móng chắc khỏe. Đặc biệt Nature Made Biotin 5000mcg, thiết kế dạng viên nang mềm giúp viên uống nhanh chóng tan trong miệng, cơ thể hấp thu dễ dàng hơn.', '450.000 VNĐ', 'product-8_93.png', 1, 'Bán chạy', NULL, NULL),
(30, 'Viên Uống Hỗ Trợ Trắng Da DHC Coix Extract Của Nhật Bản', 18, 13, 'Gói 20 viên', 'Viên uống trắng da DHC 20 ngày Coix Extract với thành phần chính là chiết xuất hạt Coix giúp dưỡng trắng da, làm mờ vết thâm. Bên cạnh đó còn được bổ sung 1 số dưỡng chất, vitamin giúp da mềm mại, khỏe mạnh, giảm thiểu tác hại từ UV, môi trường. Sản phẩm bổ sung an toàn từ bên trong mang hiệu quả đầy bất ngờ.', '150.000 VNĐ', 'product-6_54.png', 1, 'Xu hướng', NULL, NULL),
(31, 'Viên Uống Tảo Xoắn Hữu Cơ Swisse Organic Spirulina', 19, 14, 'Hộp 100 viên', 'Viên uống tảo xoắn hữu cơ Swisse Organic Spirulina thuộc thương hiệu chăm sóc sức khỏe nổi tiếng tại Úc, Swisse. Swisse Organic Spirulina có những đặc tính ưu việt và hàm lượng dinh dưỡng cao hỗ trợ cải thiện sức khỏe toàn diện, giúp bạn luôn khỏe mạnh và tràn đầy sức sống.', '400. 000 VNĐ', 'product-7_32.png', 1, NULL, NULL, NULL),
(32, 'Kẹo Dẻo Natrol Gummies Hair Skin Nails Đẹp Da Móng Tóc', 22, 15, 'Hộp 90 viên', 'Kẹo dẻo Natrol Gummies Hair Skin Nails là sản phẩm thực phẩm chức năng hỗ trợ, chăm sóc da móng tóc hiệu quả. Hương vị thơm nhẹ, dễ sử dụng, mang đến nguồn dưỡng chất cần thiết cho cơ thể người dùng.', '320.000 VNĐ', 'product-21_15.png', 1, 'Bán chạy', NULL, NULL),
(33, 'Natrol Collagen Skin Renewal Dạng Viên Ngăn Ngừa Lão Hóa Da', 14, 15, 'Hộp 120 viên', 'Natrol Collagen Skin Renewal 120 viên là công thức chứa collagen peptide + vitamin C đã được chứng minh là có thể cải thiện nếp nhăn, nếp gấp, tăng độ đàn hồi cho da chỉ sau 4 tuần . Đây là sản phẩm của thương hiệu Natrol uy tín, đã được đánh giá cao trên thị trường.', '580.000 VNĐ', 'product-1_62.png', 1, 'Sản phẩm mới', NULL, NULL),
(34, 'Bột Bio Island Lysine Starter Cho Trẻ Dưới 6 Tuổi Của Úc', 23, 16, 'Hộp 150g', 'Bột hỗ trợ tăng chiều cao Lysine Bio Island hỗ trợ hấp thu canxi, giúp cho việc duy trì cấu trúc xương bình thường. Từng tế bào cơ thể đòi hỏi lysine nhằm xây dựng protein, cung cấp chất dinh dưỡng cần thiết cho quá trình cơ thể bao gồm cả việc hình thành collagen. Lysine có thể cải thiện được sự thèm ăn và thúc đẩy tăng trưởng, nhất là ở trẻ nhỏ có thể không được hấp thụ đủ nhu cầu chế độ ăn uống của chúng. Nó cũng có một vai trò quan trọng trong việc sản xuất năng lượng và chuyển hóa carbohydrate, giúp cho trẻ em có nhu cầu năng lượng phát triển.', '370.000 VNĐ', 'product-4_28.png', 1, 'Được đánh giá cao', NULL, NULL),
(35, 'Đông Trùng Hạ Thảo Puritan\'s Pride Cordyceps Mushroom 750mg', 15, 17, 'Hộp 60 viên', 'Viên Uống Đông Trùng Hạ Thảo Puritan’s Pride Cordyceps Mushroom 60 Viên X 750mg có tác dụng hỗ trợ bảo vệ sức khỏe tim mạch, ổn định lượng đường trong máu, giảm tình trạng đau lưng, mỏi gối xuất hiện khi bước sang tuổi trung niên, bổ thận tráng dương, …', '300.000 VNĐ', 'product-24_99.png', 1, 'Xu hướng', NULL, NULL),
(36, 'Sữa Ong Chúa Royal Jelly 500mg Puritan\'s Pride Mỹ Chính Hãng', 16, 17, 'Lọ 120 viên', 'Thực phẩm chức năng Puritan\'s Pride Royal Jelly 500mg chứa sữa ong chúa giúp hỗ trợ tăng cường sức khỏe, hạn chế quá trình lão hóa, giúp làm đẹp da, cân bằng kích thích tố, nhất là phụ nữ trong thời kỳ mãn kinh, giúp người phụ nữ trong giai đoạn này cảm thấy thoải mái, bớt khó chịu.', '350.000 VNĐ', 'product-3_73.png', 1, 'Xu hướng', NULL, NULL),
(37, 'Collagen Thủy Phân Puritan\'s Pride 1000mg Của Mỹ', 14, 17, 'Lọ 180 viên', 'Giúp cải thiện làn da mịn màng và độ đàn hồi của da để chống lại các dấu hiệu lão hóa như nếp nhăn. Thúc đẩy tóc và móng mạnh mẽ và sáng bóng. Viên Trắng da, Mờ nám Puritan\'s Pride Hydrolyzed Collagen của Mỹ có chứa 1000mg Collagen thủy phân chính là Collagen Type I và III được thủy phân để hấp thụ tối ưu, vì vậy bạn có thể yên tâm rằng bạn có thể lấy collagen ở dạng tốt nhất có thể.', '480.000 VNĐ', 'product-5_61.png', 1, NULL, NULL, NULL),
(38, 'Viên uống khổ qua rừng MUDARU', 1, 18, 'Hộp 90 viên', 'Viên uống Mudaru chiết xuất từ khổ qua rừng được nghiên cứu và sản xuất bởi Công ty Cổ phần TNB Việt Nam (công ty Mudaru) đang nhận được sự tin tưởng và ủng hộ của người tiêu dùng trong việc hỗ trợ điều trị bệnh tiểu đường, ổn định huyết áp, cải thiện giấc ngủ.', '360.000 VNĐ', 'product-20_71.png', 1, 'Ưu đãi hôm nay', NULL, NULL),
(39, 'Boni Smok - Nước Cai Thuốc Lá Thành Phần Thảo Dược, 250ml', 26, 24, 'Chai 250ml', 'Boni-smoking là sản phẩm được sản xuất bởi cơ sở đông dược Đông Hải như bồ công anh, kim ngân hoa, cúc hoa.. giúp hỗ trợ cải thiện mùi của hơi thở. Boni Smok  không chứa phụ gia, không chất gây hại, tốt cho sức khỏe người dùng. Sản phẩm có 2 loại: Boni Smoking 150ml và Boni Smoking 250ml.', '180.000 VNĐ', 'product-16_41.png', 1, 'Xu hướng', NULL, NULL),
(40, 'Viên Uống Hỗ Trợ Cải Thiện Vòng 1 DHC Nhật Bản', 24, 13, 'Gói 60 viên', 'Viên Uống Hỗ Trợ Cải Thiện Vòng 1 DHC Nhật Bản được chiết xuất từ Pueraria - một loại cây họ đậu có nguồn gốc từ vùng ôn đới, như Myanmar và phía Bắc Thái Lan giúp hỗ trợ tốt với vòng 1, giúp cơ thể khỏe mạnh, cải thiện tóc bạc sớm, giúp da căng mịn, sáng hồng.', '445.000 VNĐ', 'product-9_22.png', 1, 'Được đánh giá cao', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand_product`
--
ALTER TABLE `tbl_brand_product`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_brand_product_restore`
--
ALTER TABLE `tbl_brand_product_restore`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_category_product_restore`
--
ALTER TABLE `tbl_category_product_restore`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_product_restore`
--
ALTER TABLE `tbl_product_restore`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_brand_product`
--
ALTER TABLE `tbl_brand_product`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_brand_product_restore`
--
ALTER TABLE `tbl_brand_product_restore`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product_restore`
--
ALTER TABLE `tbl_category_product_restore`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_product_restore`
--
ALTER TABLE `tbl_product_restore`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
