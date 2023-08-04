-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 09:40 AM
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
-- Database: `yangonlabourprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `impact_type_des`
--

CREATE TABLE `impact_type_des` (
  `id` int(10) UNSIGNED NOT NULL,
  `impact_type_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_des_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_des_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `impact_type_des`
--

INSERT INTO `impact_type_des` (`id`, `impact_type_no`, `case_des_no`, `case_des_name`, `created_at`, `updated_at`) VALUES
(1, '၁', '၁၁', 'မြင့်မားသော သစ်ပင်များ ၊ အဆောက်အဦးများ ၊ ငြမ်းများ၊ လှေကားများ ၊ စက်များ ၊ ယာဉ်များပေါ်မှဖြစ်စေ မြေကြီးပေါ်မှ နက်သည့်နေရာများဖြစ်သည့် တွင်းများ၊ မြောင်းများ၊ မြေကျင်းတူးထားသည့် နေရာများ၊ အပေါ', NULL, NULL),
(2, '၁', '၁၂', 'ပြင်ညီကြမ်းပြင်ပေါ်တွင် လဲကျခြင်း', NULL, NULL),
(3, '၂', '၂၁', 'မြေး၊ ကျောက်ဆောင်များ၊ ကျောက်တုံးများ၊ နှင်းတောင်များ စသည့်အရာတစ်ခုခု ပြိုကျခြင်း', NULL, NULL),
(4, '၂', '၂၂', 'အဆောက်အဦးများ၊ နရံ၊ ငြမ်း၊ လှေကား၊ ပုံထားသောအရာ တစ်ခုခုပြိုကျခြင်း', NULL, NULL),
(5, '၂', '၂၃', 'ကိုင်တွယ်လုပ်ကိုင်နေသည့် အရာတစ်ခုခု ပြုတ်ကျ၍ ရိုက်မိခြင်း', NULL, NULL),
(6, '၂', '၂၄', 'အခြားနေရာတစ်ခုခုတွင် သတ်မှတ်ဖော်ပြထားခြင်းမရှိသည့် ပြုတ်ကျလာသည့် အရာတစ်ခုခုဖြင့် ရိုက်မိခြင်း', NULL, NULL),
(7, '၃', '၃၁', 'အရာတစ်ခုခုအား ခလုတ်တိုက်မိခြင်း', NULL, NULL),
(8, '၃', '၃၂', 'ယခင်ပြုတ်ကျမှု တစ်ခုခုကြောင့်ဖြစ်သည့် သက်ရောက်မှုမပါဘဲ တည်ငြိမ်၍ ပုံသေတပ်ဆင်ထားသည့် အရာတစ်ခုနှင့် တိုက်မိခြင်း', NULL, NULL),
(9, '၃', '၃၃', 'ရွေ့လျားနေသည့် အရာတစ်ခုနှင့် တိုက်မိခြင်း', NULL, NULL),
(10, '၃', '၃၄', 'လွင့်စင်လာသည့် အစိတ်အပိုင်းများ၊ အပိုင်းအစများအပါအဝင် ပြုတ်ကျလာသည့်အရာတစ်ခုခုကြောင့်မဟုတ်ဘဲ ရွေ့လျားနေသည့် အရာတစ်ခုခုနှင့် တိုက်မိခြင်း', NULL, NULL),
(11, '၄', '၄၁', 'အရာတစ်ခုခုဖြင့် ညပ်မိခြင်း', NULL, NULL),
(12, '၄', '၄၂', 'တည်ငြိမ်၍ ပုံသေတပ်ဆင်ထားသည့် အရာတစ်ခုခုနှင့် ရွေ့လျားနေသည့် အရာများအကြားညပ်မိခြင်း', NULL, NULL),
(13, '၄', '၄၃', 'လွင့်စင်ခြင်း သို့မဟုတ် ပြုတ်ကျခြင်းကြောင့် မဟုတ်ဘဲ တစ်ခုခုကြောင့် ရွေ့လျားနေသည့် အရာများအကြား ညပ်မိခြင်း', NULL, NULL),
(14, '၅', '၅၁', 'အင်းအားစိုက်ထုတ်၍ ပစ္စည်းတစ်ခုခုအား မခြင်း', NULL, NULL),
(15, '၅', '၅၂', '\r\nအင်အားစိုက်ထုတ်၍ ပစ္စည်းတစ်ခုခုအား တွန်းခြင်း သို့မဟုတ် ဆွဲယူခြင်း', NULL, NULL),
(16, '၅', '၅၃', 'အင်အားစိုက်ထုတ်၍ ပစ္စည်းတစ်ခုခုအား ကိုင်တွယ်ခြင်း သို့မဟုတ် အတင်အချ ပြုလုပ်ခြင်း', NULL, NULL),
(17, '၅', '၅၄', 'ပြင်ထန်စွာလှုပ်ရှားဆောင်ရွက်ရခြင်း', NULL, NULL),
(18, '၆', '၆၁', 'လေထု သို့မဟုတ် ပတ်ဝန်းကျင်တွင်ရှိသည့် အပူသက်ရောက်ခြင်း', NULL, NULL),
(19, '၆', '၆၂', 'လေထု သို့်မဟုတ် ပတ်ဝန်းကျင်တွင်ရှိသည့် အအေးသက်ရောက်ခြင်း', NULL, NULL),
(20, '၆', '၆၃', 'ပူသည့် အရာတစ်ခုခုကို ထိတွေ့ကိုင်တွယ်ရခြင်း', NULL, NULL),
(21, '၆', '၆၄', 'အေးလွန်းသည့်အရာတစ်ခုခုကို ထိတွေ့ကိုင်တွယ်ရခြင်း', NULL, NULL),
(22, '၇', '၇၁', 'လျှပ်စစ်ဓာတ်အား သက်ရောက်ခံရခြင်း (သို့မဟုတ်) ဓါတ်လိုက်ခြင်း', NULL, NULL),
(23, '၈', '၈၁', 'အန္တရယ်ရှိသော အရာများ အသက်ရှုလမ်းကြောင်း သို့မဟုတ် အစာလမ်းကြောင်းမှ ဝင်ရောက်ခြင်း သို့မဟုတ် အရေပြားမှ စိမ့်ဝင်ခြင်း', NULL, NULL),
(24, '၈', '၈၂', 'အိုင်ယွန်ဓါတ်ပါသည့် ဓါတ်ရောင်ခြည် သက်ရောက်ခြင်း', NULL, NULL),
(25, '၉', '၉၁', 'သတ်မှတ်ဖော်ပြထားမှုမရှိသည့် အခြားလုပ်ငန်းခွင် ထိခိုက်မှု အမျိုးအစားများ', NULL, NULL),
(26, '၉', '၉၂', 'ပြည့်စုံလုံလောက်သည့် အချက်အလက် မရရှိခြင်းကြောင့် အမျိုးအစားခွဲခြား သတ်မှတ်နိုင်ခြင်းမရှိသည့် လုပ်ငန်းခွင်ထိခိုက်မှု', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `impact_type_des`
--
ALTER TABLE `impact_type_des`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `impact_type_des`
--
ALTER TABLE `impact_type_des`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
