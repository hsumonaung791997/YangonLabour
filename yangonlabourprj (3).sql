-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 03:01 PM
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
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'U Thura Aung', 'Create Factory Inspection Inform .', 1, 'App\\FactoryInspectionInforms', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"tempoary\":null,\"factory_id\":\"23599\",\"inspectedtimes\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspectiontype\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"inspectiondate\":\"2019-12-09\",\"lastinspectiondate\":null,\"workerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\\u1026\\u1038\",\"workerowneraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ownername\":\"\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"owneraddress\":\"\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"registerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\\u1026\\u1038\",\"workertotal\":\"\\u1010\\u1005\\u103a\\u101c \\u1045\\u1040\\u1040\\u1040\\u1040\",\"managername\":\"\\u1026\\u1038\\u1000\\u103c\\u100a\\u103a\\u1010\\u1004\\u1037\\u103a\",\"manageraddress\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"intervieweename\":null,\"intervieweerank\":null,\"machinetype\":null,\"horsepower\":null,\"producttype\":\"\\u1021\\u1014\\u1031\\u102c\\u1000\\u103a\\u1010\\u102d\\u102f\\u1004\\u103a\\u1038\\u101d\\u1010\\u103a\\u1005\\u102f\\u1036 and \\u1000\\u102f\\u1010\\u103a\",\"productquantity\":null,\"factoryaddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"jobopen\":\"0\",\"closeddate\":null,\"Mmenworker\":\"\\u1042\\u1042\",\"Mwomenworker\":\"\\u1042\\u1042\",\"MAmaleworker\":\"\\u1043\\u1043\",\"MAfemaleworker\":\"\\u1042\\u1042\",\"Cmenworker\":\"\\u1041\\u1041\\u1041\",\"Cwomenworker\":\"\\u1041\\u1041\\u1041\",\"Dmenworker\":\"\\u1042\\u1042\",\"Dwomenworker\":\"\\u1042\\u1042\",\"DAmaleworker\":\"\\u1042\\u1042\",\"DAfemaleworker\":\"\\u1042\",\"DCmaleworker\":\"\\u1042\\u1042\\u1042\",\"DCfemaleworker\":\"\\u1042\\u1042\",\"Pmenworker\":\"\\u1042\",\"Pwomenworker\":\"\\u1042\",\"PAmaleworker\":\"\\u1042\",\"PAfemaleworker\":\"\\u1042\",\"PCmaleworker\":\"\\u1042\",\"PCfemaleworker\":\"\\u1042\",\"MCmaleworker\":\"\\u1042\",\"MCfemaleworker\":\"\\u1042\",\"CAmaleworker\":\"\\u1042\",\"CAfemaleworker\":\"\\u1042\",\"CCmaleworker\":\"\\u1042\",\"CCfemaleworker\":\"\\u1042\",\"totalMaleWorker\":\"\\u1044\\u1044\\u1044\",\"totalFemaleWorker\":\"\\u1042\\u1041\\u1043\",\"inspection_name\":\"\\u1005\\u1005\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"inspectionid\":\"18\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"user_id\":18}', '2019-12-08 21:20:33', '2019-12-08 21:20:33'),
(2, 'U Thura Aung', 'Create Factory Inspection Safety.', 1, 'App\\FactoryInspectionSafety', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"tempoary\":\"save\",\"factoryname\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"factoryid\":\"23599\",\"workType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"workTime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c\\u1021\\u1011\\u102d 08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1044\\u1044\\u1044\",\"womenworker\":\"\\u1042\\u1041\\u1043\",\"totalworker\":\"\\u1046\\u1045\\u1047\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"factoryinspectioninform_id\":1}', '2019-12-08 21:21:32', '2019-12-08 21:21:32'),
(3, 'U Thura Aung', 'Create Factory Inspection Labour Law.', 1, 'App\\FactoryLabourInspectionLaw', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"tempoary\":null,\"factory_id\":\"23599\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":\"2019-12-09\",\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":\"\\u101c\\u102f\\u1015\\u103a\\u1001\\u1014\\u103e\\u102f\\u1014\\u103a\\u1038\\u1011\\u102c\\u1038\",\"diffrentotpayment\":\"\\u101c\\u102f\\u1015\\u103a\\u1001\\u1014\\u103e\\u102f\\u1014\\u103a\\u1038\\u1011\\u102c\\u1038\",\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":\"\\u1021\\u1019\\u103b\\u102d\\u102f\\u1038\\u1021\\u1019\\u100a\\u103a\",\"washamount\":\"\\u1021\\u1019\\u103b\\u102d\\u102f\\u1038\\u1021\\u1019\\u100a\\u103a\",\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":\"\\u1021\\u1019\\u103b\\u102d\\u102f\\u1038\\u1021\\u1019\\u100a\\u103a\",\"sitamount\":\"\\u1021\\u101b\\u1031\\u1021\\u1010\\u103d\\u1000\\u103a\",\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":\"\\u1010\\u100a\\u103a\\u1014\\u1031\\u101b\\u102c\",\"watercleanence\":\"\\u101e\\u1031\\u102c\\u1000\\u103a\\u101b\\u1031\\u101e\\u1014\\u1037\\u103a\\u101b\\u103e\\u1004\\u103a\\u1038\\u1019\\u103e\\u102f\",\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":\"\\u1021\\u1019\\u103b\\u102d\\u102f\\u1038\\u1021\\u1005\\u102c\\u1038\",\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":\"\\u1042\",\"mtioletroom\":\"\\u1041\",\"ftioletroom\":\"\\u1041\",\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":18,\"factoryinspectioninform_id\":1}', '2019-12-08 21:24:05', '2019-12-08 21:24:05'),
(4, 'U Thura Aung', 'Print pdf factory_safety.', 235, 'App\\Document', 18, 'App\\User', '[\"1\"]', '2019-12-08 21:26:19', '2019-12-08 21:26:19'),
(5, 'U Thura Aung', 'Print pdf factory Labour Law.', 236, 'App\\Document', 18, 'App\\User', '[\"1\"]', '2019-12-08 21:26:21', '2019-12-08 21:26:21'),
(6, 'U Thura Aung', 'Create Case.', 51, 'App\\CaseOpen', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"factoryid\":\"23599\",\"filename\":{\"1\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactorySafety-1582045248.pdf\",\"2\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactoryLabourLaw-1212563744.pdf\"},\"createdate\":\"2019-12-09\",\"registername\":\"U Thura Aung\",\"inspector\":\"\\u1005\\u1005\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"zone\":\"\\u101b\\u103d\\u103e\\u1031\\u101c\\u1004\\u103a\\u1015\\u1014\\u103a\\u1038\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a\",\"township\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"1\",\"inspecteddate\":\"2019-12-09\",\"townshipid\":\"3\",\"districtid\":\"5\",\"zoneid\":\"1\",\"factorytype\":\"1\",\"save\":\"opencase\"}', '2019-12-08 21:28:30', '2019-12-08 21:28:30'),
(7, 'U Thura Aung', 'Create Shop Inspection Inform', 1, 'App\\ShopInspectionInform', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"ShopId\":\"48108\",\"shopname\":\"Noble Shop\",\"tempoary\":null,\"inspectiondate\":\"2019-12-09\",\"lastinspectiondate\":null,\"inspectedtime\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspection_type\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"shopaddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\\u104aaddress\",\"property\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\",\"ownername\":\"\\u1026\\u1038\\u1021\\u1031\\u102c\\u1004\\u103a\\u1005\\u102d\\u102f\\u1038\",\"owneraddress\":\"\\u1045 \\u1015\\u103c\\u100a\\u103a\\u101c\\u1019\\u103a\\u1038 \\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"addmore\":[{\"share\":null}],\"workcategory\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"managername\":\"\\u1026\\u1038\\u101e\\u1014\\u1037\\u103a\",\"manageraddress\":\"d\",\"othershop\":[{\"othershopname\":null,\"othershopaddress\":null}],\"intervieweename\":null,\"intervieweenamerank\":null,\"above18m\":\"\\u1042\\u1042\",\"above15m\":\"\\u1042\\u1042\",\"above13m\":\"\\u1042\\u1042\",\"totalm\":\"\\u1046\\u1046\",\"above18f\":\"\\u1042\\u1042\",\"above15f\":\"\\u1042\\u1042\",\"above13f\":\"\\u1042\\u1042\",\"totalf\":\"\\u1046\\u1046\",\"workers\":[{\"name\":\"name\",\"position\":\"occupation\",\"salary\":\"wage\",\"daily_work_hours\":\"work time\",\"break_time\":\"relax\",\"weekly_off_day\":\"holiday\",\"joning_date\":\"2019-01-01\",\"note\":\"dd\"}],\"inspection_name\":\"U Nyi Nyi\",\"inspectionid\":18,\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1019\\u103e\\u1030\\u1038\"}', '2019-12-08 22:44:33', '2019-12-08 22:44:33'),
(8, 'U Thura Aung', 'Create Shop Inspection Safety', 1, 'App\\ShopInspectionSafety', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"tempoary\":\"save\",\"shop_id\":\"48108\",\"producedProduct\":\"sd\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103aSunday 08:00\\u1019\\u103e17:00\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1046\\u1046\",\"womenworker\":\"\\u1046\\u1046\",\"totalworker\":\"\\u1041\\u1043\\u1042\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"U Nyi Nyi\",\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1019\\u103e\\u1030\\u1038\",\"check_id\":1,\"user_id\":18}', '2019-12-08 22:45:07', '2019-12-08 22:45:07'),
(9, 'U Thura Aung', 'Create Shop Inspection Labour Law', 1, 'App\\ShopLabourInspectionLaw', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"tempoary\":null,\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":\"\\u1010\\u1005\\u103a\\u1014\\u103e\\u1005\\u103a\\u101c\\u103b\\u103e\\u1004\\u103a \\u1001\\u1036\\u1005\\u102c\\u1038\\u1001\\u103d\\u1004\\u1037\\u103a\\u1015\\u103c\\u102f\\u101e\\u1031\\u102c \\u1006\\u1031\\u1038\\u101c\\u1000\\u103a\\u1019\\u103e\\u1010\\u103a \\u1021\\u101b\\u1031\\u1021\\u1010\\u103d\\u1000\\u103a\",\"addmore\":[{\"medicalworker\":\"name\"},{\"medicalworker\":\"name1\"}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 08:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 17:00\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 00:00\\u1019\\u103e13:00\\u1021\\u1011\\u102d\",\"shop_id\":\"48108\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"Sunday\",\"inspectionname\":\"U Nyi Nyi\",\"check_id\":1,\"user_id\":18}', '2019-12-08 22:45:50', '2019-12-08 22:45:50'),
(10, 'U Thura Aung', 'Print pdf Shop Inspection Safety.', 239, 'App\\Document', 18, 'App\\User', '[\"1\"]', '2019-12-08 22:48:21', '2019-12-08 22:48:21'),
(11, 'U Thura Aung', 'Print pdf Shop Inspection Labour Law.', 240, 'App\\Document', 18, 'App\\User', '[\"1\"]', '2019-12-08 22:48:22', '2019-12-08 22:48:22'),
(12, 'U Thura Aung', 'Create Case.', 52, 'App\\CaseOpen', 18, 'App\\User', '{\"_token\":\"Dzir11madD1IJdGZUouMsP4p1zlwZ80IyOodp8Cf\",\"factoryid\":\"48108\",\"filename\":{\"1\":\"-shop_safety-1577926244.pdf\",\"2\":\"Noble Shop-ShopLabourLaw-645774324.pdf\"},\"createdate\":\"2019-12-09\",\"registername\":\"U Thura Aung\",\"inspector\":\"U Nyi Nyi\",\"zone\":null,\"township\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"1\",\"inspecteddate\":\"2019-12-09\",\"townshipid\":\"3\",\"districtid\":\"5\",\"zoneid\":null,\"factorytype\":\"2\",\"save\":\"opencase\"}', '2019-12-08 22:48:34', '2019-12-08 22:48:34'),
(13, 'admin', 'Close Factory.', 12, 'App\\FactoryClose', 1, 'App\\User', '{\"_token\":\"QNffRrHzfnpe3rbXOrPMLsbwCWWu1fjsUmdSrlUj\",\"factory_id\":\"9062\",\"FactoryAddress\":\"\\u104a address\",\"totalWorker\":\"\\u1041\\u1048\",\"NoticeDate\":\"2019-12-10\",\"CloseDate\":\"2019-12-31\",\"DesCloseFactory\":\"dd\"}', '2019-12-09 20:59:13', '2019-12-09 20:59:13'),
(14, 'admin', 'Update Factory.', 61, 'App\\Factory', 1, 'App\\User', '{\"_token\":\"QNffRrHzfnpe3rbXOrPMLsbwCWWu1fjsUmdSrlUj\",\"_method\":\"PUT\",\"FactoryName\":\"overSeaCompany Ltdrddddd\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"097800300\",\"NoticeAddress\":\"address\",\"ContactAddress\":\"contact address\",\"WorkedPower\":null,\"ElectricPower\":null,\"PreNoticeDate\":\"2019-12-12\",\"RegDate\":\"2019-12-26\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"3\",\"zone_id\":\"1\",\"FactoryAddress\":\"address\",\"NextYearProcess\":null,\"StreamHP\":null,\"GasHP\":null,\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"\\u1042\\u1042\",\"WomenWorker\":\"\\u1042\\u1042\",\"AMenWorker\":\"\\u1042\\u1042\",\"AWomenWorker\":\"\\u1042\\u1042\",\"CMenWorker\":\"\\u1042\\u1042\",\"CWomenWorker\":\"\\u1042\\u1042\",\"DailyMenWorker\":\"\\u1042\\u1042\",\"DailyWomenWorker\":\"\\u1042\\u1042\",\"ADailyMenWorker\":\"\\u1042\\u1042\",\"ADailyWomenWorker\":\"\\u1042\\u1042\",\"CDailyMenWorker\":\"\\u1042\\u1042\",\"CDailyWomenWorker\":\"\\u1042\\u1042\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"0\",\"APieceMenWorker\":\"0\",\"APieceWomenWorker\":\"0\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"StartDate\":\"2019-12-12\",\"ManagerName\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\\u1021\\u1019\\u100a\\u103a\",\"OwnerName\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"OwnerNrc\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a \\u1019\\u103e\\u1010\\u103a\\u1015\\u102f\\u1036\\u1010\\u1004\\u103a\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"OwnerAddress\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a \\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"OwnerPhno\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a \\u1016\\u102f\\u1014\\u103a\\u1038\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\",\"UsedPower\":null,\"MonthlyAmounts\":null,\"Investment\":\"LDI\",\"ProducedProduct\":null,\"ProducedOthers\":null,\"RawMaterials\":null,\"Goods\":null,\"section_id\":\"1\",\"division_id\":\"1\",\"group_id\":\"1\",\"class_name\":\"0111\",\"Contract\":\"0\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"0\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1049\\u1048\",\"CitizenWomenWorker\":\"\\u1047\\u1048\",\"ForeignerMenWorker\":\"\\u1042\\u1042\",\"ForeignerWomenWorker\":\"\\u1042\\u1042\",\"SalaryDate\":\"\\u101c\\u1000\\u102f\\u1014\\u103a\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"200000\",\"MaximumSalary\":\"5000000\",\"WorkTimeType\":\"0\",\"MToSTimein\":\"08:00\",\"MToSTimeout\":\"17:00\",\"LunchStartTimeLaw1\":\"00:00\",\"LunchEndTimeLaw1\":\"13:00\",\"MToFTimein\":null,\"MToFTimeout\":null,\"LunchStartTimeLaw2\":\"00:00\",\"LunchEndTimeLaw2\":\"13:00\",\"STimein\":null,\"STimeout\":null,\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":\"00:00\",\"LunchEndTimeLaw3\":\"13:00\",\"SignatureName\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"SignatureRank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"SubscriberName\":\"\\u1005\\u102c\\u101b\\u1004\\u103a\\u1038\\u101e\\u103d\\u1004\\u103a\\u1038\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"SubscriberRank\":\"\\u1005\\u102c\\u101b\\u1004\\u103a\\u1038\\u101e\\u103d\\u1004\\u103a\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"LunchStartTime\":\"00:00\",\"LunchEndTime\":\"13:00\"}', '2019-12-09 22:41:46', '2019-12-09 22:41:46'),
(15, 'admin', 'Delete Factory.', 60, 'App\\Factory', 1, 'App\\User', '{\"id\":60,\"FactoryId\":\"12809\",\"FactoryName\":\"testing\",\"NoticeAddress\":\"address\",\"ContactAddress\":\"address\",\"ContactPhone\":\"09883883\",\"ContactFax\":null,\"EmailAdd\":null,\"FactoryAddress\":\"address\",\"NextYearProcess\":null,\"StreamHP\":\"\\u101b\\u1031\\u1014\\u103d\\u1031\\u1038\\u1004\\u103d\\u1031\\u1037\\u1016\\u103c\\u1004\\u1037\\u103a\\u101c\\u100a\\u103a\\u101e\\u1031\\u102c\\u1005\\u1000\\u103a\",\"GasHP\":null,\"MotorHP\":null,\"WaterHP\":null,\"WorkedPower\":null,\"ElectricPower\":null,\"PreNoticeDate\":\"2019-11-20\",\"MenWorker\":\"\\u1042\",\"WomenWorker\":\"\\u1042\",\"DailyMenWorker\":\"\\u1042\",\"DailyWomenWorker\":\"\\u1042\",\"PieceMenWorker\":\"\\u1042\",\"PieceWomenWorker\":\"\\u1042\",\"CMenWorker\":\"\\u1042\",\"CWomenWorker\":\"\\u1042\",\"CDailyMenWorker\":\"\\u1042\",\"CDailyWomenWorker\":\"\\u1042\",\"CPieceMenWorker\":\"\\u1042\",\"CPieceWomenWorker\":\"\\u1042\",\"AMenWorker\":\"\\u1042\",\"AWomenWorker\":\"\\u1042\",\"ADailyMenWorker\":\"\\u1042\",\"ADailyWomenWorker\":\"\\u1042\",\"APieceMenWorker\":\"\\u1042\",\"APieceWomenWorker\":\"\\u1042\",\"MCmaleworker\":\"0\",\"MCfemaleworker\":\"0\",\"CAmaleworker\":\"0\",\"CAfemaleworker\":\"0\",\"CCmaleworker\":\"0\",\"CCfemaleworker\":\"0\",\"totalMaleWorker\":\"\\u1041\\u1048\",\"totalFemaleWorker\":\"\\u1041\\u1048\",\"StartDate\":\"2019-11-20\",\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"TestingDate\":\"2019-11-19\",\"WorkTimeType\":0,\"MToSTimein\":\"01:00\",\"MToSTimeout\":\"13:00\",\"MToFTimein\":null,\"MToFTimeout\":null,\"STimein\":null,\"STimeout\":null,\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTime\":\"01:00\",\"LunchEndTime\":\"01:00\",\"ManagerName\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c \\u1021\\u1019\\u100a\\u103a\",\"OwnerName\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"OwnerNrc\":\"\\u1019\\u103e\\u1010\\u103a\\u1015\\u102f\\u1036\\u1010\\u1004\\u103a\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"OwnerAddress\":\"address\",\"OwnerPhno\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1042\\u1040\\u1043\\u1018\\u102e)  \\u101b\\u103d\\u103e\\u1031\\u1010\\u1031\\u102c\\u1004\\u103a\\u1000\\u103c\\u102c\\u1038\\u101c\\u1019\\u103a\\u1038 \\u1017\\u101f\\u1014\\u103a\\u1038\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerFax\":\"\\u1016\\u1000\\u103a\\u1005\\u103a\",\"OwnerEmail\":\"\\u1021\\u102e\\u1038\\u1019\\u1031\\u1038\",\"OwnerPassport\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\\u1000\\u1030\\u1038\\u101c\\u1000\\u103a\\u1019\\u103e\\u1010\\u103a\",\"RegDate\":\"2019-11-20\",\"IndustryCategory_Id\":null,\"UsedPower\":null,\"Investment\":\"LDI\",\"PropertyType\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\",\"Contract\":\"0\",\"ProducedProduct\":null,\"ProducedOthers\":null,\"NoticeStatus\":0,\"RawMaterials\":null,\"Goods\":null,\"section_id\":1,\"division_id\":1,\"group_id\":1,\"class_name\":\"0111\",\"MonthlyAmounts\":null,\"CitizenMenWorker\":\"\\u1041\\u1048\",\"CitizenWomenWorker\":\"\\u1041\\u1048\",\"ForeignerMenWorker\":\"\\u1042\\u1042\",\"ForeignerWomenWorker\":\"\\u1042\\u1042\",\"SalaryDate\":\"\\u101c\\u1000\\u102f\\u1014\\u103a\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"200000\",\"MaximumSalary\":\"400000\",\"OverTime\":0,\"OTPermit\":0,\"SafteySide\":0,\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u101b\\u103e\\u102d\",\"SafetyRank\":\"\\u1000\\u103c\\u102e\\u1038\\u1000\\u103c\\u1015\\u103a\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"SSB\":0,\"ManagementExpert\":0,\"SignatureName\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"SignatureRank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"SubscriberName\":\"\\u1005\\u102c\\u101b\\u1004\\u103a\\u1038\\u101e\\u103d\\u1004\\u103a\\u1038\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"SubscriberRank\":\"\\u1005\\u102c\\u101b\\u1004\\u103a\\u1038\\u101e\\u103d\\u1004\\u103a\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"created_at\":\"2019-11-19 07:53:56\",\"updated_at\":\"2019-12-04 03:23:44\",\"region_id\":9,\"district_id\":5,\"township_id\":3,\"zone_id\":1,\"status\":0,\"self_id\":null}', '2019-12-09 22:42:02', '2019-12-09 22:42:02'),
(16, 'admin', 'Create Seminar', 9, 'App\\Seminar', 1, 'App\\User', '{\"_token\":\"QNffRrHzfnpe3rbXOrPMLsbwCWWu1fjsUmdSrlUj\",\"factoryid\":\"23599\",\"factorytype\":\"1\",\"date\":\"2019-12-10\",\"FactoryName\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"seminarleader\":\"U Soe Nyi Nyi\",\"seminarleaderrank\":\"\\u1025\\u1015\\u1012\\u1031\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"contributor1\":null,\"contributor1rank\":null,\"contributor2\":null,\"contributor2rank\":null,\"contributor3\":null,\"contributor3rank\":null,\"district_id\":\"5\",\"township_id\":\"3\",\"splace\":\"test\",\"trainingclass\":\"test\",\"stimes\":\"second\",\"men\":\"\\u1042\\u1042\",\"women\":\"\\u1042\\u1042\"}', '2019-12-09 23:00:35', '2019-12-09 23:00:35'),
(17, 'admin', 'Print pdf factory_safety.', 242, 'App\\Document', 1, 'App\\User', '[\"1\"]', '2019-12-10 01:27:25', '2019-12-10 01:27:25'),
(18, 'admin', 'Print pdf factory Labour Law.', 243, 'App\\Document', 1, 'App\\User', '[\"1\"]', '2019-12-10 01:27:27', '2019-12-10 01:27:27'),
(19, 'Chan myae Thu', 'Create Factory.', 62, 'App\\Factory', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"ElectricPower\":\"EPC \\u104a \\u1000\\u102d\\u102f\\u101a\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1019\\u102e\\u1038\\u1005\\u1000\\u103a\",\"PreNoticeDate\":\"2019-12-03\",\"RegDate\":\"2019-12-16\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"StreamHP\":\"\\u1043\",\"GasHP\":\"\\u1045\",\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"\\u1041\\u1045\",\"WomenWorker\":\"\\u1044\\u1040\",\"AMenWorker\":\"0\",\"AWomenWorker\":\"0\",\"CMenWorker\":\"0\",\"CWomenWorker\":\"0\",\"DailyMenWorker\":\"0\",\"DailyWomenWorker\":\"0\",\"ADailyMenWorker\":\"0\",\"ADailyWomenWorker\":\"0\",\"CDailyMenWorker\":\"0\",\"CDailyWomenWorker\":\"0\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"0\",\"APieceMenWorker\":\"0\",\"APieceWomenWorker\":\"0\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"totalMan\":\"0\",\"totalWomen\":\"0\",\"totalAman\":\"0\",\"totalAwomen\":\"0\",\"totalCman\":\"0\",\"totalCwomen\":\"0\",\"totalMaleWorker\":null,\"totalFemaleWorker\":null,\"StartDate\":\"2019-12-09\",\"ManagerName\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1042\\u1043\\u1045\\u1045\\u1049\",\"OwnerAddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerPhno\":\"\\u1040\\u1049\\u1048\\u1047\\u1046\\u1045\\u1044\\u1044\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"300hp\",\"MonthlyAmounts\":\"\\u1043\\u1040\\u1040\\u1040\\u1040\",\"Investment\":\"FDI\",\"ProducedProduct\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a\",\"ProducedOthers\":null,\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"3\",\"division_id\":\"12\",\"group_id\":\"35\",\"class_name\":\"1399\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"1\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1041\\u1045\",\"CitizenWomenWorker\":\"\\u1044\\u1040\",\"ForeignerMenWorker\":\"0\",\"ForeignerWomenWorker\":\"0\",\"SalaryDate\":\"\\u101c\\u1006\\u1014\\u103a\\u1038(\\u1045)\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\\u1040\",\"MaximumSalary\":\"\\u1048\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":null,\"LunchEndTimeLaw1\":null,\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"17:00\",\"LunchStartTimeLaw2\":null,\"LunchEndTimeLaw2\":null,\"STimein\":\"08:00\",\"STimeout\":\"00:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":null,\"LunchEndTimeLaw3\":null,\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"FactoryId\":61125,\"LunchStartTime\":null,\"LunchEndTime\":null}', '2019-12-11 22:10:22', '2019-12-11 22:10:22'),
(20, 'Chan myae Thu', 'Create Factory Inspection Inform .', 2, 'App\\FactoryInspectionInforms', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"tempoary\":null,\"factory_id\":\"61125\",\"inspectedtimes\":\"\\u1012\\u102f\\u1010\\u102d\\u101a\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspectiontype\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"inspectiondate\":\"2019-12-03\",\"lastinspectiondate\":\"2019-11-05\",\"workerownername\":\"Mr.Yan Xiao Ming\",\"workerowneraddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"ownername\":\"\\u1026\\u1038\\u101c\\u103e\\u101d\\u1004\\u103a\\u1038\",\"owneraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1044)\\u104a \\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"registerownername\":\"Mr.Yan Xiao Ming\",\"workertotal\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"managername\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"manageraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1043\\u1044)\\u104a \\u1021\\u1004\\u103a\\u1038\\u1005\\u102d\\u1014\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"intervieweename\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"intervieweerank\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\",\"machinetype\":\"motor\",\"horsepower\":\"567hp\",\"producttype\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a and null\",\"productquantity\":\"\\u1043\\u1040\\u1040\\u1040\\u1040\",\"factoryaddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"jobopen\":\"0\",\"closeddate\":null,\"Mmenworker\":\"0\",\"Mwomenworker\":\"0\",\"MAmaleworker\":\"0\",\"MAfemaleworker\":\"0\",\"Cmenworker\":\"0\",\"Cwomenworker\":\"0\",\"Dmenworker\":\"0\",\"Dwomenworker\":\"0\",\"DAmaleworker\":\"0\",\"DAfemaleworker\":\"0\",\"DCmaleworker\":\"0\",\"DCfemaleworker\":\"0\",\"Pmenworker\":\"0\",\"Pwomenworker\":\"0\",\"PAmaleworker\":\"0\",\"PAfemaleworker\":\"0\",\"PCmaleworker\":\"0\",\"PCfemaleworker\":\"0\",\"MCmaleworker\":\"0\",\"MCfemaleworker\":\"0\",\"CAmaleworker\":\"0\",\"CAfemaleworker\":\"0\",\"CCmaleworker\":\"0\",\"CCfemaleworker\":\"0\",\"totalMaleWorker\":null,\"totalFemaleWorker\":null,\"inspection_name\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"inspectionid\":\"24\",\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"user_id\":24}', '2019-12-11 22:20:30', '2019-12-11 22:20:30'),
(21, 'Chan myae Thu', 'Create Factory Inspection Safety.', 2, 'App\\FactoryInspectionSafety', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"tempoary\":\"save\",\"factoryname\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"factoryid\":\"61125\",\"workType\":\"\\u1021\\u1001\\u103c\\u102c\\u1038\\u1021\\u1011\\u100a\\u103a\\u1021\\u101c\\u102d\\u1015\\u103a \\u1011\\u102f\\u1010\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038(\\u1021\\u1001\\u103c\\u102c\\u1038\\u1019\\u100a\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\\u1010\\u103d\\u1004\\u103a\\u1019\\u103e \\u101e\\u1010\\u103a\\u1019\\u103e\\u1010\\u103a\\u1001\\u103b\\u1000\\u103a \\u1016\\u1031\\u102c\\u103a\\u1015\\u103c\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u101e\\u1031\\u102c)\",\"workTime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c\\u1021\\u1011\\u102d 08:00 \\u1019\\u103e 17:00\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 00:00\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1042\\u1043\",\"womenworker\":\"\\u1045\\u1040\",\"totalworker\":\"\\u1047\\u1043\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u101e\\u1004\\u1037\\u103a\",\"drainflow\":\"\\u100a\\u1036\\u1037\",\"employmentPaint\":\"\\u101e\\u1004\\u1037\\u103a\",\"workenvironment\":\"\\u101b\\u1031\\u1019\\u103c\\u1031\\u102c\\u1004\\u103a\\u1038\\u1019\\u103b\\u102c\\u1038\\u101b\\u1031\\u1005\\u102e\\u1038\\u1006\\u1004\\u103a\\u1038\\u1019\\u103e\\u102f\\u1021\\u102c\\u1038\\u1014\\u100a\\u103a\\u1038\",\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u100a\\u1036\\u1037\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1001\\u103d\\u1004\\u103a\\u1021\\u1015\\u1030\\u1001\\u103b\\u102d\\u1014\\u103a\\u1019\\u103b\\u102c\\u1038\",\"populationstatus\":\"\\u101e\\u1004\\u1037\\u103a\",\"population\":null,\"nature\":\"\\u101e\\u1004\\u1037\\u103a\",\"sunlight\":\"\\u101e\\u1004\\u1037\\u103a\",\"natureandlight\":null,\"drinkingwater\":\"\\u101e\\u1004\\u1037\\u103a\",\"drinkingwatermana\":null,\"toilet\":\"\\u101e\\u1004\\u1037\\u103a\",\"toiletType\":\"\\u101e\\u1004\\u1037\\u103a\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u101e\\u1004\\u1037\\u103a\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u100a\\u1036\\u1037\",\"sittingplan\":\"\\u1021\\u1011\\u100a\\u103a\\u1005\\u1005\\u103a\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1001\\u103d\\u1004\\u103a \\u1011\\u102d\\u102f\\u1004\\u103a\\u1001\\u102f\\u1036\\u1019\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u101e\\u1004\\u1037\\u103a\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1001\\u1014\\u103a\\u1038\\u101b\\u103e\\u102d\",\"accidentinform\":\"\\u101e\\u1004\\u1037\\u103a\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u101e\\u1004\\u1037\\u103a\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u101e\\u1004\\u1037\\u103a\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1001\\u103d\\u1004\\u103a\\u1021\\u1015\\u1030\\u1001\\u103b\\u102d\\u1014\\u103a \\u1019\\u103c\\u1004\\u1037\\u103a\\u1019\\u102c\\u1038\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u1021\\u1031\\u102c\\u1004\\u103a \\u1005\\u102e\\u1019\\u1036\\u1006\\u102c\\u1004\\u103a\\u101b\\u103d\\u1000\\u103a\\u101b\\u1014\\u103a\",\"change2\":\"\\u101e\\u1031\\u102c\\u1000\\u103a\\u101b\\u1031\\u1019\\u103b\\u102c\\u1038\\u101c\\u102f\\u1036\\u101c\\u1031\\u102c\\u1000\\u103a\\u1021\\u1031\\u102c\\u1004\\u103a\\u1005\\u102e\\u1019\\u1036\\u1015\\u1031\\u1038\\u101b\\u1014\\u103a\",\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"factoryinspectioninform_id\":2}', '2019-12-11 22:27:46', '2019-12-11 22:27:46'),
(22, 'Chan myae Thu', 'Print pdf factory_safety.', 244, 'App\\Document', 24, 'App\\User', '[\"2\"]', '2019-12-11 22:31:44', '2019-12-11 22:31:44'),
(23, 'Chan myae Thu', 'Print pdf factory_safety.', 245, 'App\\Document', 24, 'App\\User', '[\"2\"]', '2019-12-11 22:31:45', '2019-12-11 22:31:45'),
(24, 'Chan myae Thu', 'Print pdf factory_safety.', 246, 'App\\Document', 24, 'App\\User', '[\"2\"]', '2019-12-11 22:32:16', '2019-12-11 22:32:16'),
(25, 'Chan myae Thu', 'Print pdf factory_safety.', 247, 'App\\Document', 24, 'App\\User', '[\"2\"]', '2019-12-11 22:32:19', '2019-12-11 22:32:19');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(26, 'Chan myae Thu', 'Create Case.', 53, 'App\\CaseOpen', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"factoryid\":\"61125\",\"filename\":{\"1\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactorySafety-482325343.pdf\",\"2\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactorySafety-1767499319.pdf\",\"3\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactorySafety-486236989.pdf\",\"4\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a-FactorySafety-1570384858.pdf\"},\"createdate\":\"2019-12-12\",\"registername\":\"Chan myae Thu\",\"inspector\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"zone\":\"\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"township\":\"\\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"2\",\"inspecteddate\":\"2019-12-03\",\"townshipid\":\"10\",\"districtid\":\"5\",\"zoneid\":\"7\",\"factorytype\":\"1\",\"save\":\"opencase\"}', '2019-12-11 22:32:43', '2019-12-11 22:32:43'),
(27, 'Chan myae Thu', 'Create Factory Inspection Inform .', 3, 'App\\FactoryInspectionInforms', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"tempoary\":null,\"factory_id\":\"23467\",\"inspectedtimes\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspectiontype\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"inspectiondate\":\"2019-12-09\",\"lastinspectiondate\":\"2019-12-01\",\"workerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"workerowneraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ownername\":\"\\u1026\\u1038\\u101d\\u1004\\u103a\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\",\"owneraddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\",\"registerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"workertotal\":\"\\u1010\\u1005\\u103a\\u101c \\u1045\\u1040\\u1040\\u1040\\u1040\",\"managername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"manageraddress\":\"\\u1021\\u1004\\u103a\\u1038\\u1005\\u102d\\u1014\\u103a\",\"intervieweename\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"intervieweerank\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\",\"machinetype\":\"Gen\",\"horsepower\":\"500hp\",\"producttype\":\"\\u1021\\u1014\\u1031\\u102c\\u1000\\u103a\\u1010\\u102d\\u102f\\u1004\\u103a\\u1038\\u101d\\u1010\\u103a\\u1005\\u102f\\u1036 and \\u1000\\u102f\\u1010\\u103a\",\"productquantity\":\"5000\",\"factoryaddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"jobopen\":\"0\",\"closeddate\":null,\"Mmenworker\":\"\\u1042\\u1040\",\"Mwomenworker\":\"\\u1042\\u1042\",\"MAmaleworker\":\"\\u1043\\u1043\",\"MAfemaleworker\":\"\\u1042\\u1042\",\"Cmenworker\":\"\\u1041\\u1041\\u1041\",\"Cwomenworker\":\"\\u1041\\u1041\\u1041\",\"Dmenworker\":\"\\u1042\\u1042\",\"Dwomenworker\":\"\\u1042\\u1042\",\"DAmaleworker\":\"\\u1042\\u1042\",\"DAfemaleworker\":\"\\u1042\",\"DCmaleworker\":\"\\u1042\\u1042\\u1042\",\"DCfemaleworker\":\"\\u1042\\u1042\",\"Pmenworker\":\"\\u1042\",\"Pwomenworker\":\"\\u1041\",\"PAmaleworker\":\"\\u1042\",\"PAfemaleworker\":\"\\u1042\",\"PCmaleworker\":\"\\u1042\",\"PCfemaleworker\":\"\\u1042\",\"MCmaleworker\":\"\\u1042\",\"MCfemaleworker\":\"\\u1042\",\"CAmaleworker\":\"\\u1042\",\"CAfemaleworker\":\"\\u1042\",\"CCmaleworker\":\"\\u1042\",\"CCfemaleworker\":\"\\u1042\",\"totalMaleWorker\":\"\\u1044\\u1044\\u1042\",\"totalFemaleWorker\":\"\\u1042\\u1041\\u1042\",\"inspection_name\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"inspectionid\":\"24\",\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"user_id\":24}', '2019-12-12 00:16:36', '2019-12-12 00:16:36'),
(28, 'Chan myae Thu', 'Create Factory Inspection Safety.', 3, 'App\\FactoryInspectionSafety', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"tempoary\":\"save\",\"factoryname\":\"blue mountain\",\"factoryid\":\"23467\",\"workType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"workTime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c\\u1021\\u1011\\u102d 08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1044\\u1044\\u1042\",\"womenworker\":\"\\u1042\\u1041\\u1042\",\"totalworker\":\"\\u1046\\u1045\\u1044\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":\"\\u1021\\u101c\\u1004\\u103a\\u1038\\u101b\\u1031\\u102c\\u1004\\u103a\\u1021\\u102c\\u1038\\u1014\\u100a\\u103a\\u1038\",\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":\"\\u1021\\u101c\\u1004\\u103a\\u1038\\u101b\\u1031\\u102c\\u1004\\u103a\\u101c\\u102f\\u1036\\u101c\\u1031\\u102c\\u1000\\u103a\\u1021\\u1031\\u102c\\u1004\\u103a\\u1006\\u1031\\u102c\\u1004\\u103a\\u101b\\u103d\\u1000\\u103a\\u101b\\u1014\\u103a\",\"change2\":\"\\u1021\\u1015\\u1030\\u1001\\u103b\\u102d\\u1014\\u103a\\u1019\\u103c\\u1004\\u1037\\u103a\\u1019\\u102c\\u1038\\u1019\\u103e\\u102f\",\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"inspectorrank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"factoryinspectioninform_id\":3}', '2019-12-12 00:18:35', '2019-12-12 00:18:35'),
(29, 'Chan myae Thu', 'Update Factory.', 43, 'App\\Factory', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"_method\":\"PUT\",\"FactoryName\":\"blue mountain\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"09400424444\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1045\\u1040\\u1040\\u1040\\u1040\",\"ElectricPower\":\"EPC\",\"PreNoticeDate\":\"2019-09-11\",\"RegDate\":\"2019-09-14\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038\",\"StreamHP\":\"10HP\",\"GasHP\":\"500KVA\",\"MotorHP\":\"350KVA\",\"WaterHP\":null,\"MenWorker\":\"\\u1042\\u1040\",\"WomenWorker\":\"\\u1042\\u1042\",\"AMenWorker\":\"\\u1043\\u1043\",\"AWomenWorker\":\"\\u1042\\u1042\",\"CMenWorker\":\"\\u1041\\u1041\\u1041\",\"CWomenWorker\":\"\\u1041\\u1041\\u1041\",\"DailyMenWorker\":\"\\u1042\\u1042\",\"DailyWomenWorker\":\"\\u1042\\u1042\",\"ADailyMenWorker\":\"\\u1042\\u1042\",\"ADailyWomenWorker\":\"\\u1042\",\"CDailyMenWorker\":\"\\u1042\\u1042\\u1042\",\"CDailyWomenWorker\":\"\\u1042\\u1042\",\"PieceMenWorker\":\"\\u1042\",\"PieceWomenWorker\":\"\\u1041\",\"APieceMenWorker\":\"\\u1042\",\"APieceWomenWorker\":\"\\u1042\",\"CPieceMenWorker\":\"\\u1042\",\"CPieceWomenWorker\":\"\\u1042\",\"StartDate\":\"2019-09-14\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1043\\u1044\\u1044\\u1048\\u1047\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"OwnerPhno\":\"0923232323\",\"OwnerFax\":\"098765\",\"OwnerEmail\":\"asiathamardi@gmail.com\",\"OwnerPassport\":null,\"TestingDate\":\"2019-09-12\",\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"\\u1041\\u1040\\u1040Hp\",\"MonthlyAmounts\":null,\"Investment\":\"LDI\",\"ProducedProduct\":\"\\u1021\\u1014\\u1031\\u102c\\u1000\\u103a\\u1010\\u102d\\u102f\\u1004\\u103a\\u1038\\u101d\\u1010\\u103a\\u1005\\u102f\\u1036\",\"ProducedOthers\":\"\\u1000\\u102f\\u1010\\u103a\",\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1010\\u103d\\u1004\\u103a\\u1038\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"1\",\"division_id\":\"1\",\"group_id\":\"1\",\"class_name\":\"0111\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"0\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u101b\\u103e\\u102d\",\"SafetyRank\":\"\\u1000\\u103c\\u102e\\u1038\\u1000\\u103c\\u1015\\u103a\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"CitizenMenWorker\":\"\\u1042\\u1040\\u1048\",\"CitizenWomenWorker\":\"\\u1041\\u1047\\u1040\\u1045\",\"ForeignerMenWorker\":\"\\u1048\",\"ForeignerWomenWorker\":\"\\u1042\",\"SalaryDate\":\"\\u101c\\u1000\\u102f\\u1014\\u103a\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\",\"MaximumSalary\":\"\\u1045\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":\"01:00\",\"LunchEndTimeLaw1\":\"01:00\",\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"16:30\",\"LunchStartTimeLaw2\":\"01:00\",\"LunchEndTimeLaw2\":\"01:00\",\"STimein\":\"08:00\",\"STimeout\":\"12:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":\"01:00\",\"LunchEndTimeLaw3\":\"01:00\",\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"LunchStartTime\":\"01:00\",\"LunchEndTime\":\"01:00\"}', '2019-12-12 00:21:38', '2019-12-12 00:21:38'),
(30, 'Chan myae Thu', 'Print pdf factory_safety.', 251, 'App\\Document', 24, 'App\\User', '[\"3\"]', '2019-12-12 00:22:01', '2019-12-12 00:22:01'),
(31, 'Chan myae Thu', 'Create Case.', 54, 'App\\CaseOpen', 24, 'App\\User', '{\"_token\":\"wuJ4WSDrhtxsdHjVym0Gh3HthVUwFTp4bp8PqxWf\",\"factoryid\":\"23467\",\"filename\":{\"1\":\"blue mountain-FactorySafety-681885774.pdf\"},\"createdate\":\"2019-12-12\",\"registername\":\"Chan myae Thu\",\"inspector\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"zone\":\"\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"township\":\"\\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"3\",\"inspecteddate\":\"2019-12-09\",\"townshipid\":\"10\",\"districtid\":\"5\",\"zoneid\":\"7\",\"factorytype\":\"1\",\"save\":\"opencase\"}', '2019-12-12 00:23:18', '2019-12-12 00:23:18'),
(32, 'test', 'Print pdf factory_safety.', 265, 'App\\Document', 21, 'App\\User', '[\"1\"]', '2019-12-29 21:12:25', '2019-12-29 21:12:25'),
(33, 'test', 'Print pdf factory Labour Law.', 266, 'App\\Document', 21, 'App\\User', '[\"1\"]', '2019-12-29 21:12:26', '2019-12-29 21:12:26'),
(34, 'test', 'Create Factory Inspection Inform .', 4, 'App\\FactoryInspectionInforms', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"inspectedtimes\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspectiontype\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"inspectiondate\":\"2020-01-02\",\"lastinspectiondate\":null,\"workerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"workerowneraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"owneraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"registerownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"workertotal\":null,\"managername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"manageraddress\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"intervieweename\":null,\"intervieweerank\":null,\"machinetype\":null,\"horsepower\":null,\"producttype\":\"\\u1021\\u1014\\u1031\\u102c\\u1000\\u103a\\u1010\\u102d\\u102f\\u1004\\u103a\\u1038\\u101d\\u1010\\u103a\\u1005\\u102f\\u1036 and \\u1000\\u102f\\u1010\\u103a\",\"productquantity\":null,\"factoryaddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"jobopen\":\"0\",\"closeddate\":null,\"Mmenworker\":\"\\u1042\\u1040\",\"Mwomenworker\":\"\\u1042\\u1042\",\"MAmaleworker\":\"\\u1043\\u1043\",\"MAfemaleworker\":\"\\u1042\\u1042\",\"Cmenworker\":\"\\u1041\\u1041\\u1041\",\"Cwomenworker\":\"\\u1041\\u1041\\u1041\",\"Dmenworker\":\"\\u1042\\u1042\",\"Dwomenworker\":\"\\u1042\\u1042\",\"DAmaleworker\":\"\\u1042\\u1042\",\"DAfemaleworker\":\"\\u1042\",\"DCmaleworker\":\"\\u1042\\u1042\\u1042\",\"DCfemaleworker\":\"\\u1042\\u1042\",\"Pmenworker\":\"\\u1042\",\"Pwomenworker\":\"\\u1041\",\"PAmaleworker\":\"\\u1042\",\"PAfemaleworker\":\"\\u1042\",\"PCmaleworker\":\"\\u1042\",\"PCfemaleworker\":\"\\u1042\",\"MCmaleworker\":\"\\u1042\",\"MCfemaleworker\":\"\\u1042\",\"CAmaleworker\":\"\\u1042\",\"CAfemaleworker\":\"\\u1042\",\"CCmaleworker\":\"\\u1042\",\"CCfemaleworker\":\"\\u1042\",\"totalMaleWorker\":\"\\u1044\\u1044\\u1042\",\"totalFemaleWorker\":\"\\u1042\\u1041\\u1042\",\"inspection_name\":\"U Aung\",\"inspectionid\":\"21\",\"inspectorrank\":\"Rank\",\"user_id\":21}', '2020-01-01 22:03:00', '2020-01-01 22:03:00'),
(35, 'test', 'Create Factory Inspection Safety.', 4, 'App\\FactoryInspectionSafety', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":\"save\",\"factoryname\":\"blue mountain\",\"factoryid\":\"23467\",\"workType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"workTime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c\\u1021\\u1011\\u102d 08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1044\\u1044\\u1042\",\"womenworker\":\"\\u1042\\u1041\\u1042\",\"totalworker\":\"\\u1046\\u1045\\u1044\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"factoryinspectioninform_id\":4}', '2020-01-01 22:03:26', '2020-01-01 22:03:26'),
(36, 'test', 'Print pdf factory_safety.', 267, 'App\\Document', 21, 'App\\User', '[4]', '2020-01-01 22:03:27', '2020-01-01 22:03:27'),
(37, 'test', 'Create Case.', 55, 'App\\CaseOpen', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"factoryid\":\"23467\",\"filename\":{\"1\":\"blue mountain-FactorySafety-1151432760.pdf\"},\"createdate\":\"2020-01-02\",\"registername\":\"test\",\"inspector\":\"U Aung\",\"zone\":\"\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"township\":\"\\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"4\",\"inspecteddate\":\"2020-01-02\",\"townshipid\":\"10\",\"districtid\":\"5\",\"zoneid\":\"7\",\"factorytype\":\"1\",\"save\":\"opencase\"}', '2020-01-01 22:09:44', '2020-01-01 22:09:44'),
(38, 'test', 'Update Factory.', 62, 'App\\Factory', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"_method\":\"PUT\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"ElectricPower\":\"EPC \\u104a \\u1000\\u102d\\u102f\\u101a\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1019\\u102e\\u1038\\u1005\\u1000\\u103a\",\"PreNoticeDate\":\"2019-12-04\",\"RegDate\":\"2019-12-16\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"StreamHP\":\"\\u1043\",\"GasHP\":\"\\u1045\",\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"0\",\"WomenWorker\":\"0\",\"AMenWorker\":\"0\",\"AWomenWorker\":\"0\",\"CMenWorker\":\"0\",\"CWomenWorker\":\"0\",\"DailyMenWorker\":\"0\",\"DailyWomenWorker\":\"0\",\"ADailyMenWorker\":\"0\",\"ADailyWomenWorker\":\"0\",\"CDailyMenWorker\":\"0\",\"CDailyWomenWorker\":\"0\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"0\",\"APieceMenWorker\":\"0\",\"APieceWomenWorker\":\"0\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"StartDate\":\"2019-12-09\",\"ManagerName\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1042\\u1043\\u1045\\u1045\\u1049\",\"OwnerAddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerPhno\":\"\\u1040\\u1049\\u1048\\u1047\\u1046\\u1045\\u1044\\u1044\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"300hp\",\"MonthlyAmounts\":null,\"Investment\":\"FDI\",\"ProducedProduct\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a\",\"ProducedOthers\":null,\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"3\",\"division_id\":\"12\",\"group_id\":\"35\",\"class_name\":\"1399\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"1\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1041\\u1045\",\"CitizenWomenWorker\":\"\\u1044\\u1040\",\"ForeignerMenWorker\":\"0\",\"ForeignerWomenWorker\":\"0\",\"SalaryDate\":\"\\u101c\\u1006\\u1014\\u103a\\u1038(\\u1045)\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\\u1040\",\"MaximumSalary\":\"\\u1048\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":null,\"LunchEndTimeLaw1\":null,\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"17:00\",\"LunchStartTimeLaw2\":null,\"LunchEndTimeLaw2\":null,\"STimein\":\"08:00\",\"STimeout\":\"00:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":null,\"LunchEndTimeLaw3\":null,\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"LunchStartTime\":null,\"LunchEndTime\":null}', '2020-01-02 02:18:31', '2020-01-02 02:18:31'),
(39, 'test', 'Update Factory.', 62, 'App\\Factory', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"_method\":\"PUT\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"ElectricPower\":\"EPC \\u104a \\u1000\\u102d\\u102f\\u101a\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1019\\u102e\\u1038\\u1005\\u1000\\u103a\",\"PreNoticeDate\":\"2019-12-04\",\"RegDate\":\"2020-01-02\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"StreamHP\":\"\\u1043\",\"GasHP\":\"\\u1045\",\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"0\",\"WomenWorker\":\"0\",\"AMenWorker\":\"0\",\"AWomenWorker\":\"0\",\"CMenWorker\":\"0\",\"CWomenWorker\":\"0\",\"DailyMenWorker\":\"0\",\"DailyWomenWorker\":\"0\",\"ADailyMenWorker\":\"0\",\"ADailyWomenWorker\":\"0\",\"CDailyMenWorker\":\"0\",\"CDailyWomenWorker\":\"0\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"0\",\"APieceMenWorker\":\"0\",\"APieceWomenWorker\":\"0\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"StartDate\":\"2019-12-09\",\"ManagerName\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1042\\u1043\\u1045\\u1045\\u1049\",\"OwnerAddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerPhno\":\"\\u1040\\u1049\\u1048\\u1047\\u1046\\u1045\\u1044\\u1044\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"300hp\",\"MonthlyAmounts\":null,\"Investment\":\"FDI\",\"ProducedProduct\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a\",\"ProducedOthers\":null,\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"3\",\"division_id\":\"12\",\"group_id\":\"35\",\"class_name\":\"1399\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"1\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1041\\u1045\",\"CitizenWomenWorker\":\"\\u1044\\u1040\",\"ForeignerMenWorker\":\"0\",\"ForeignerWomenWorker\":\"0\",\"SalaryDate\":\"\\u101c\\u1006\\u1014\\u103a\\u1038(\\u1045)\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\\u1040\",\"MaximumSalary\":\"\\u1048\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":null,\"LunchEndTimeLaw1\":null,\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"17:00\",\"LunchStartTimeLaw2\":null,\"LunchEndTimeLaw2\":null,\"STimein\":\"08:00\",\"STimeout\":\"00:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":null,\"LunchEndTimeLaw3\":null,\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"LunchStartTime\":null,\"LunchEndTime\":null}', '2020-01-02 02:19:12', '2020-01-02 02:19:12'),
(40, 'test', 'Update Factory.', 62, 'App\\Factory', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"_method\":\"PUT\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"ElectricPower\":\"EPC \\u104a \\u1000\\u102d\\u102f\\u101a\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1019\\u102e\\u1038\\u1005\\u1000\\u103a\",\"PreNoticeDate\":\"2019-12-04\",\"RegDate\":\"2020-01-02\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"StreamHP\":\"\\u1043\",\"GasHP\":\"\\u1045\",\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"0\",\"WomenWorker\":\"0\",\"AMenWorker\":\"0\",\"AWomenWorker\":\"0\",\"CMenWorker\":\"0\",\"CWomenWorker\":\"0\",\"DailyMenWorker\":\"0\",\"DailyWomenWorker\":\"0\",\"ADailyMenWorker\":\"0\",\"ADailyWomenWorker\":\"0\",\"CDailyMenWorker\":\"0\",\"CDailyWomenWorker\":\"0\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"0\",\"APieceMenWorker\":\"0\",\"APieceWomenWorker\":\"0\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"StartDate\":\"2020-01-02\",\"ManagerName\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1042\\u1043\\u1045\\u1045\\u1049\",\"OwnerAddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerPhno\":\"\\u1040\\u1049\\u1048\\u1047\\u1046\\u1045\\u1044\\u1044\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"300hp\",\"MonthlyAmounts\":null,\"Investment\":\"FDI\",\"ProducedProduct\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a\",\"ProducedOthers\":null,\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"3\",\"division_id\":\"12\",\"group_id\":\"35\",\"class_name\":\"1399\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"1\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1041\\u1045\",\"CitizenWomenWorker\":\"\\u1044\\u1040\",\"ForeignerMenWorker\":\"0\",\"ForeignerWomenWorker\":\"0\",\"SalaryDate\":\"\\u101c\\u1006\\u1014\\u103a\\u1038(\\u1045)\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\\u1040\",\"MaximumSalary\":\"\\u1048\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":null,\"LunchEndTimeLaw1\":null,\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"17:00\",\"LunchStartTimeLaw2\":null,\"LunchEndTimeLaw2\":null,\"STimein\":\"08:00\",\"STimeout\":\"00:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":null,\"LunchEndTimeLaw3\":null,\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"LunchStartTime\":null,\"LunchEndTime\":null}', '2020-01-02 02:20:42', '2020-01-02 02:20:42'),
(41, 'test', 'Update Factory.', 62, 'App\\Factory', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"_method\":\"PUT\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"EmailAdd\":null,\"ContactFax\":null,\"ContactPhone\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"NoticeAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"ContactAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"WorkedPower\":\"\\u1010\\u1005\\u103a\\u101c \\u1021\\u1011\\u100a\\u103a\\u101b\\u1031 (\\u1043\\u1040\\u1040\\u1040\\u1040)\",\"ElectricPower\":\"EPC \\u104a \\u1000\\u102d\\u102f\\u101a\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1019\\u102e\\u1038\\u1005\\u1000\\u103a\",\"PreNoticeDate\":\"2019-12-04\",\"RegDate\":\"2020-01-02\",\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"10\",\"zone_id\":\"7\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"NextYearProcess\":\"\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"StreamHP\":\"\\u1043\",\"GasHP\":\"\\u1045\",\"MotorHP\":null,\"WaterHP\":null,\"MenWorker\":\"2\",\"WomenWorker\":\"2\",\"AMenWorker\":\"2\",\"AWomenWorker\":\"2\",\"CMenWorker\":\"2\",\"CWomenWorker\":\"22\",\"DailyMenWorker\":\"2\",\"DailyWomenWorker\":\"2\",\"ADailyMenWorker\":\"2\",\"ADailyWomenWorker\":\"2\",\"CDailyMenWorker\":\"2\",\"CDailyWomenWorker\":\"0\",\"PieceMenWorker\":\"0\",\"PieceWomenWorker\":\"5\",\"APieceMenWorker\":\"5\",\"APieceWomenWorker\":\"5\",\"CPieceMenWorker\":\"0\",\"CPieceWomenWorker\":\"0\",\"StartDate\":\"2020-01-02\",\"ManagerName\":\"\\u1012\\u1031\\u102b\\u103a\\u101c\\u1032\\u1037\\u101c\\u1032\\u1037\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"OwnerNrc\":\"\\u1041\\u1042\\/\\u1021\\u1005\\u1014(\\u1014\\u102d\\u102f\\u1004\\u103a)\\u1042\\u1043\\u1045\\u1045\\u1049\",\"OwnerAddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"OwnerPhno\":\"\\u1040\\u1049\\u1048\\u1047\\u1046\\u1045\\u1044\\u1044\",\"OwnerFax\":null,\"OwnerEmail\":null,\"OwnerPassport\":null,\"TestingDate\":null,\"TypeofFactory\":\"\\u1000\\u103c\\u102e\\u1038\",\"PropertyType\":\"\\u1015\\u102f\\u1002\\u1039\\u1002\\u101c\\u102d\\u1000\",\"UsedPower\":\"300hp\",\"MonthlyAmounts\":null,\"Investment\":\"FDI\",\"ProducedProduct\":\"\\u1021\\u101d\\u1010\\u103a\\u1021\\u1011\\u100a\\u103a\",\"ProducedOthers\":null,\"RawMaterials\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"Goods\":\"\\u1015\\u103c\\u100a\\u103a\\u1015\",\"section_id\":\"3\",\"division_id\":\"12\",\"group_id\":\"35\",\"class_name\":\"1399\",\"Contract\":\"1\",\"OverTime\":\"0\",\"OTPermit\":\"0\",\"SSB\":\"0\",\"NoticeStatus\":\"0\",\"SafteySide\":\"1\",\"ManagementExpert\":\"0\",\"Welfare\":\"0\",\"AccidentRecordBook\":\"\\u101b\\u103e\\u102d\",\"SafetyHealth\":\"\\u1019\\u101b\\u103e\\u102d\",\"SafetyRank\":null,\"CitizenMenWorker\":\"\\u1041\\u1045\",\"CitizenWomenWorker\":\"\\u1044\\u1040\",\"ForeignerMenWorker\":\"0\",\"ForeignerWomenWorker\":\"0\",\"SalaryDate\":\"\\u101c\\u1006\\u1014\\u103a\\u1038(\\u1045)\\u101b\\u1000\\u103a\",\"MinimumSalary\":\"\\u1041\\u1044\\u1044\\u1040\\u1040\\u1040\",\"MaximumSalary\":\"\\u1048\\u1040\\u1040\\u1040\\u1040\\u1040\",\"WorkTimeType\":\"1\",\"MToSTimein\":null,\"MToSTimeout\":null,\"LunchStartTimeLaw1\":null,\"LunchEndTimeLaw1\":null,\"MToFTimein\":\"08:00\",\"MToFTimeout\":\"17:00\",\"LunchStartTimeLaw2\":null,\"LunchEndTimeLaw2\":null,\"STimein\":\"08:00\",\"STimeout\":\"00:00\",\"MToFTimeInOther\":null,\"MToFTimeoutOther\":null,\"LunchStartTimeLaw3\":null,\"LunchEndTimeLaw3\":null,\"SignatureName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SignatureRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"SubscriberName\":\"\\u1012\\u1031\\u102b\\u103a\\u1001\\u103b\\u1019\\u103a\\u1038\\u1019\\u103c\\u1031\\u1037\\u101e\\u1030\",\"SubscriberRank\":\"\\u1026\\u1038\\u1005\\u102e\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d(\\u1021\\u101c\\u102f\\u1015\\u103a\\u101b\\u102f\\u1036)\",\"LunchStartTime\":null,\"LunchEndTime\":null}', '2020-01-02 02:21:25', '2020-01-02 02:21:25');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(42, 'test', 'Create Factory Inspection Labour Law.', 2, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:22:27', '2020-01-02 02:22:27'),
(43, 'test', 'Create Factory Inspection Labour Law.', 3, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:23:22', '2020-01-02 02:23:22'),
(44, 'test', 'Create Factory Inspection Labour Law.', 4, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:23:46', '2020-01-02 02:23:46'),
(45, 'test', 'Create Factory Inspection Labour Law.', 5, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:24:10', '2020-01-02 02:24:10'),
(46, 'test', 'Create Factory Inspection Labour Law.', 6, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:24:33', '2020-01-02 02:24:33'),
(47, 'test', 'Create Factory Inspection Labour Law.', 7, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:25:34', '2020-01-02 02:25:34'),
(48, 'test', 'Create Factory Inspection Labour Law.', 8, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:25:52', '2020-01-02 02:25:52'),
(49, 'test', 'Create Factory Inspection Labour Law.', 9, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:26:27', '2020-01-02 02:26:27'),
(50, 'test', 'Create Factory Inspection Labour Law.', 10, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"factory_id\":\"23467\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c08:00 \\u1019\\u103e 16:30\\u1021\\u1011\\u102d\\u1005\\u1014\\u1031\\u1014\\u1031\\u103708:00 \\u1019\\u103e 12:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u101e\\u1031\\u102c\\u1000\\u103c\\u102c \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\",\"resttime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1010\\u1005\\u103a\\u101d\\u1000\\u103a\\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":4}', '2020-01-02 02:27:34', '2020-01-02 02:27:34'),
(51, 'test', 'Print pdf factory Labour Law.', 269, 'App\\Document', 21, 'App\\User', '[4]', '2020-01-02 02:27:36', '2020-01-02 02:27:36'),
(52, 'test', 'Create Shop Inspection Inform', 2, 'App\\ShopInspectionInform', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"ShopId\":\"89490\",\"shopname\":\"Shwe Htike Tan\",\"tempoary\":null,\"inspectiondate\":\"2020-01-02\",\"lastinspectiondate\":null,\"inspectedtime\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspection_type\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"shopaddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\\u104a\\u1017\\u101f\\u1014\\u103a\\u1038\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"property\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\",\"ownername\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\",\"owneraddress\":\"\\u1045 \\u1015\\u103c\\u100a\\u103a\\u101c\\u1019\\u103a\\u1038 \\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"addmore\":[{\"share\":null}],\"workcategory\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"managername\":\"\\u1026\\u1038\\u1004\\u103d\\u1031\\u1021\\u1031\\u102c\\u1004\\u103a\",\"manageraddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1042\\u1040\\u1043\\u1018\\u102e)  \\u101b\\u103d\\u103e\\u1031\\u1010\\u1031\\u102c\\u1004\\u103a\\u1000\\u103c\\u102c\\u1038\\u101c\\u1019\\u103a\\u1038 \\u1017\\u101f\\u1014\\u103a\\u1038\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"othershop\":[{\"othershopname\":null,\"othershopaddress\":null}],\"intervieweename\":null,\"intervieweenamerank\":null,\"above18m\":\"0\",\"above15m\":\"0\",\"above13m\":\"0\",\"totalm\":null,\"above18f\":\"0\",\"above15f\":\"0\",\"above13f\":\"0\",\"totalf\":null,\"workers\":[{\"name\":null,\"position\":null,\"salary\":null,\"daily_work_hours\":null,\"break_time\":null,\"weekly_off_day\":null,\"joning_date\":null,\"note\":null}],\"inspection_name\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"inspectionid\":21,\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\"}', '2020-01-02 02:28:41', '2020-01-02 02:28:41'),
(53, 'test', 'Create Shop Inspection Safety', 2, 'App\\ShopInspectionSafety', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":\"save\",\"shop_id\":\"89490\",\"producedProduct\":\"sd\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103aSunday 08:00\\u1019\\u103e17:00\\u1021\\u1011\\u102d\",\"menworker\":\"22\",\"womenworker\":\"22\",\"totalworker\":\"44\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":null,\"inspectorrank\":null,\"check_id\":2,\"user_id\":21}', '2020-01-02 02:30:39', '2020-01-02 02:30:39'),
(54, 'test', 'Create Shop Inspection Safety', 3, 'App\\ShopInspectionSafety', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":\"save\",\"shop_id\":\"89490\",\"producedProduct\":\"sd\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103aSunday 08:00\\u1019\\u103e17:00\\u1021\\u1011\\u102d\",\"menworker\":\"22\",\"womenworker\":\"22\",\"totalworker\":\"44\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:31:19', '2020-01-02 02:31:19');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(55, 'test', 'Create Shop Inspection Safety', 4, 'App\\ShopInspectionSafety', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":\"save\",\"shop_id\":\"89490\",\"producedProduct\":\"sd\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103aSunday 08:00\\u1019\\u103e17:00\\u1021\\u1011\\u102d\",\"menworker\":\"22\",\"womenworker\":\"22\",\"totalworker\":\"44\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:32:00', '2020-01-02 02:32:00'),
(56, 'test', 'Create Shop Inspection Safety', 5, 'App\\ShopInspectionSafety', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":\"save\",\"shop_id\":\"89490\",\"producedProduct\":\"sd\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103aSunday 08:00\\u1019\\u103e17:00\\u1021\\u1011\\u102d\",\"menworker\":\"22\",\"womenworker\":\"22\",\"totalworker\":\"44\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:32:25', '2020-01-02 02:32:25'),
(57, 'test', 'Print pdf Shop Inspection Safety.', 270, 'App\\Document', 21, 'App\\User', '[2]', '2020-01-02 02:32:26', '2020-01-02 02:32:26'),
(58, 'test', 'Create Shop Inspection Labour Law', 2, 'App\\ShopLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":null,\"addmore\":[{\"medicalworker\":null}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 08:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 17:00\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 00:00\\u1019\\u103e13:00\\u1021\\u1011\\u102d\",\"shop_id\":\"89490\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"Sunday\",\"inspectionname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:34:33', '2020-01-02 02:34:33'),
(59, 'test', 'Create Shop Inspection Labour Law', 3, 'App\\ShopLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":null,\"addmore\":[{\"medicalworker\":null}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 08:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 17:00\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 00:00\\u1019\\u103e13:00\\u1021\\u1011\\u102d\",\"shop_id\":\"89490\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"Sunday\",\"inspectionname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:35:19', '2020-01-02 02:35:19'),
(60, 'test', 'Create Shop Inspection Labour Law', 4, 'App\\ShopLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":null,\"addmore\":[{\"medicalworker\":null}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 08:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 17:00\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 00:00\\u1019\\u103e13:00\\u1021\\u1011\\u102d\",\"shop_id\":\"89490\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"Sunday\",\"inspectionname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:35:45', '2020-01-02 02:35:45'),
(61, 'test', 'Create Shop Inspection Labour Law', 5, 'App\\ShopLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"SQU3VGz9gtfIPej4JkQ9gVtymprQvprmWvaVRPN4\",\"tempoary\":null,\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":null,\"addmore\":[{\"medicalworker\":null}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 08:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 17:00\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 00:00\\u1019\\u103e13:00\\u1021\\u1011\\u102d\",\"shop_id\":\"89490\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"Sunday\",\"inspectionname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"check_id\":2,\"user_id\":21}', '2020-01-02 02:36:04', '2020-01-02 02:36:04'),
(62, 'test', 'Print pdf Shop Inspection Labour Law.', 271, 'App\\Document', 21, 'App\\User', '[2]', '2020-01-02 02:36:05', '2020-01-02 02:36:05'),
(63, 'test', 'Create Case.', 56, 'App\\CaseOpen', 21, 'App\\User', '{\"_token\":\"KUiu11AnoBACitMPc37LN4LjOCcDW5nY1qH3vCz4\",\"factoryid\":\"23467\",\"filename\":{\"1\":\"blue mountain-FactorySafety-1151432760.pdf\",\"2\":\"blue mountain-FactoryLabourLaw-895641918.pdf\"},\"createdate\":\"2020-01-03\",\"registername\":\"test\",\"inspector\":\"U Aung\",\"zone\":\"\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"township\":\"\\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"district\":\"\\u1019\\u103c\\u1031\\u102c\\u1000\\u103a\\u1015\\u102d\\u102f\\u1004\\u103a\\u1038\\u1001\\u101b\\u102d\\u102f\\u1004\\u103a\",\"checkid\":\"4\",\"inspecteddate\":\"2020-01-02\",\"townshipid\":\"10\",\"districtid\":\"5\",\"zoneid\":\"7\",\"factorytype\":\"1\",\"save\":\"opencase\"}', '2020-01-02 23:05:58', '2020-01-02 23:05:58'),
(64, 'test', 'Create Factory Inspection Inform .', 5, 'App\\FactoryInspectionInforms', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"tempoary\":null,\"factory_id\":\"9062\",\"inspectedtimes\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspectiontype\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"inspectiondate\":\"2020-01-01\",\"lastinspectiondate\":null,\"workerownername\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"workerowneraddress\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a \\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"ownername\":\"\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"owneraddress\":\"\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"registerownername\":\"\\u101c\\u102f\\u1015\\u103a\\u1004\\u1014\\u103a\\u1038\\u1015\\u102d\\u102f\\u1004\\u103a\\u101b\\u103e\\u1004\\u103a\\u1021\\u1019\\u100a\\u103a\",\"workertotal\":null,\"managername\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\\u1021\\u1019\\u100a\\u103a\",\"manageraddress\":\"\\u1019\\u1014\\u103a\\u1014\\u1031\\u1002\\u103b\\u102c\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"intervieweename\":null,\"intervieweerank\":null,\"machinetype\":null,\"horsepower\":null,\"producttype\":\"null and null\",\"productquantity\":null,\"factoryaddress\":\"address\",\"jobopen\":\"0\",\"closeddate\":null,\"Mmenworker\":\"0\",\"Mwomenworker\":\"0\",\"MAmaleworker\":\"0\",\"MAfemaleworker\":\"0\",\"Cmenworker\":\"0\",\"Cwomenworker\":\"0\",\"Dmenworker\":\"0\",\"Dwomenworker\":\"0\",\"DAmaleworker\":\"0\",\"DAfemaleworker\":\"0\",\"DCmaleworker\":\"0\",\"DCfemaleworker\":\"0\",\"Pmenworker\":\"0\",\"Pwomenworker\":\"0\",\"PAmaleworker\":\"0\",\"PAfemaleworker\":\"0\",\"PCmaleworker\":\"0\",\"PCfemaleworker\":\"0\",\"MCmaleworker\":\"0\",\"MCfemaleworker\":\"0\",\"CAmaleworker\":\"0\",\"CAfemaleworker\":\"0\",\"CCmaleworker\":\"0\",\"CCfemaleworker\":\"0\",\"totalMaleWorker\":null,\"totalFemaleWorker\":null,\"inspection_name\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"inspectionid\":\"21\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"user_id\":21}', '2020-01-03 02:52:12', '2020-01-03 02:52:12'),
(65, 'test', 'Create Factory Inspection Safety.', 5, 'App\\FactoryInspectionSafety', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"tempoary\":\"save\",\"factoryname\":\"test\",\"workType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"workTime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1021\\u1011\\u102d 01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"menworker\":\"2\",\"womenworker\":\"2\",\"totalworker\":null,\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u100a\\u1036\\u1037\",\"drainflow\":\"\\u101e\\u1004\\u1037\\u103a\",\"employmentPaint\":\"\\u101e\\u1004\\u1037\\u103a\",\"workenvironment\":null,\"aircondition\":\"\\u101e\\u1004\\u1037\\u103a\",\"weather\":\"\\u101e\\u1004\\u1037\\u103a\",\"particals\":\"\\u101e\\u1004\\u1037\\u103a\",\"accomodation\":null,\"populationstatus\":\"\\u101e\\u1004\\u1037\\u103a\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u100a\\u1036\\u1037\",\"natureandlight\":null,\"drinkingwater\":\"\\u101e\\u1004\\u1037\\u103a\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u101e\\u1004\\u1037\\u103a\",\"toiletType2\":\"\\u100a\\u1036\\u1037\",\"genderdivide\":\"\\u101e\\u1004\\u1037\\u103a\",\"toiletquantity\":\"\\u101e\\u1004\\u1037\\u103a\",\"tioletfinding\":null,\"noiseprotect\":\"\\u100a\\u1036\\u1037\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u100a\\u1036\\u1037\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"factoryinspectioninform_id\":5}', '2020-01-03 03:16:14', '2020-01-03 03:16:14'),
(66, 'test', 'Print pdf factory_safety.', 272, 'App\\Document', 21, 'App\\User', '[5]', '2020-01-03 03:16:16', '2020-01-03 03:16:16'),
(67, 'test', 'Create Factory Inspection Labour Law.', 11, 'App\\FactoryLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"tempoary\":null,\"factory_id\":\"9062\",\"sentnotice\":\"\\u1015\\u103c\\u102f\",\"shownotice\":\"\\u1015\\u103c\\u102f\",\"workingduration\":null,\"repeatitivework\":\"\\u101b\\u103e\\u102d\",\"changenotice\":\"\\u101b\\u103e\\u102d\",\"informchangenotice\":\"\\u1000\\u103c\\u102c\\u1038\",\"equalnotice\":\"\\u101c\\u102f\\u1015\\u103a\",\"dailyworktime\":\"01:00 \\u1019\\u103e 01:00\\u1021\\u1011\\u102d\",\"weeklyworktime\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u101c\\u102c\\u1019\\u103e \\u1005\\u1014\\u1031\\u1014\\u1031\\u1037\\u1021\\u1011\\u102d\",\"resttime\":\"01:00 \\u1019\\u103e 02:00\\u1021\\u1011\\u102d\",\"weekendholiday\":\"\\u1010\\u1014\\u1004\\u103a\\u1039\\u1002\\u1014\\u103d\\u1031\\u1014\\u1031\\u1037\",\"prepermit\":\"\\u101b\\u103e\\u102d\",\"workwithpermit\":\"\\u101b\\u103e\\u102d\",\"otpayscale\":null,\"diffrentotpayment\":null,\"allowtimecalculate\":\"\\u101b\\u103e\\u102d\",\"illegalotallow\":null,\"illegalottime\":null,\"illegalotpayment\":null,\"twofacbyday\":\"\\u101b\\u103e\\u102d\",\"definedworktime\":\"\\u101b\\u103e\\u102d\",\"stosworktime\":\"\\u101b\\u103e\\u102d\",\"washcategory\":null,\"washamount\":null,\"washusestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sitcategory\":null,\"sitamount\":null,\"situsestate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"medicalcaretype\":\"\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\\u1006\\u1031\\u1038\\u101e\\u1031\\u1010\\u1039\\u1010\\u102c\",\"babysittingroom\":\"\\u101b\\u103e\\u102d\",\"dinningroom\":\"\\u101b\\u103e\\u102d\",\"waterplace\":null,\"watercleanence\":null,\"suffientamount\":\"\\u101b\\u103e\\u102d\",\"cooling\":\"\\u101b\\u103e\\u102d\",\"tioletcategroy\":null,\"tioletplace\":\"\\u101b\\u103e\\u102d\",\"tioletclean\":\"\\u101b\\u103e\\u102d\",\"genderdivide\":\"\\u101b\\u103e\\u102d\",\"tioletroom\":null,\"mtioletroom\":null,\"ftioletroom\":null,\"accidentcase\":\"\\u101b\\u103e\\u102d\",\"workerregistrationbook\":\"\\u101b\\u103e\\u102d\",\"childregistrationbook\":\"\\u101b\\u103e\\u102d\",\"generalbook\":\"\\u101b\\u103e\\u102d\",\"wokerofficetimebook\":\"\\u101b\\u103e\\u102d\",\"otbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"causalleave\":\"\\u1015\\u1031\\u1038\",\"annualleave\":\"\\u1015\\u1031\\u1038\",\"medicalleave\":\"\\u1015\\u1031\\u1038\",\"maternity\":\"\\u1015\\u1031\\u1038\",\"publicholiday\":\"\\u1015\\u1031\\u1038\",\"weekholiday\":\"\\u1015\\u1031\\u1038\",\"leavenote\":\"\\u1011\\u102c\\u1038\",\"Mpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Dpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Ppaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"Cpaymentduration\":\"\\u101c\\u1006\\u1014\\u103a\\u1038\\u1045\\u101b\\u1000\\u103a\",\"OTplan\":null,\"OTpaymentplan\":null,\"miniexperprize\":null,\"maxexperprize\":null,\"miniregularprize\":null,\"maxregularprizee\":null,\"miniproductprize\":null,\"maxproductprize\":null,\"fine\":\"\\u101b\\u103e\\u102d\",\"deductamount\":null,\"illegaldeductedtime\":null,\"illegaldeductedworkers\":null,\"illegaldedutedamount\":null,\"paymentnote\":\"\\u101b\\u103e\\u102d\",\"deductednote\":\"\\u101b\\u103e\\u102d\",\"allowotnote\":\"\\u101b\\u103e\\u102d\",\"instruction1\":null,\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"inspection_id\":21,\"factoryinspectioninform_id\":5}', '2020-01-03 03:19:13', '2020-01-03 03:19:13'),
(68, 'test', 'Print pdf factory Labour Law.', 273, 'App\\Document', 21, 'App\\User', '[5]', '2020-01-03 03:19:14', '2020-01-03 03:19:14'),
(69, 'test', 'Create Shop Inspection Inform', 3, 'App\\ShopInspectionInform', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"ShopId\":\"29728\",\"shopname\":\"testing shop\",\"tempoary\":null,\"inspectiondate\":\"2020-01-03\",\"lastinspectiondate\":null,\"inspectedtime\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"inspection_type\":\"\\u1015\\u102f\\u1036\\u1019\\u103e\\u1014\\u103a\",\"shopaddress\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\\u104aaddress\",\"property\":\"\\u1014\\u102d\\u102f\\u1004\\u103a\\u1004\\u1036\",\"ownername\":\"owner name\",\"owneraddress\":\"adddress\",\"addmore\":[{\"share\":null}],\"workcategory\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"managername\":\"managername\",\"manageraddress\":\"address\",\"othershop\":[{\"othershopname\":null,\"othershopaddress\":null}],\"intervieweename\":null,\"intervieweenamerank\":null,\"above18m\":\"2\",\"above15m\":\"2\",\"above13m\":\"2\",\"totalm\":\"\\u1046\",\"above18f\":\"2\",\"above15f\":\"2\",\"above13f\":\"2\",\"totalf\":\"\\u1046\",\"workers\":[{\"name\":null,\"position\":null,\"salary\":null,\"daily_work_hours\":null,\"break_time\":null,\"weekly_off_day\":null,\"joning_date\":null,\"note\":null}],\"inspection_name\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"inspectionid\":21,\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\"}', '2020-01-03 03:22:04', '2020-01-03 03:22:04'),
(70, 'test', 'Create Shop Inspection Safety', 6, 'App\\ShopInspectionSafety', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"tempoary\":\"save\",\"shop_id\":\"29728\",\"producedProduct\":\"0\",\"workTime\":\"\\u1015\\u102d\\u1010\\u103a\\u101b\\u1000\\u103asunday 01:00\\u1019\\u103e01:01\\u1021\\u1011\\u102d\",\"menworker\":\"\\u1046\",\"womenworker\":\"\\u1046\",\"totalworker\":\"\\u1041\\u1042\",\"medicalticket\":\"\\u101b\\u103e\\u102d\",\"workclean\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drainflow\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"employmentPaint\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"workenvironment\":null,\"aircondition\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"weather\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"particals\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accomodation\":null,\"populationstatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"population\":null,\"nature\":\"\\u100a\\u1036\\u1037\",\"sunlight\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"natureandlight\":null,\"drinkingwater\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"drinkingwatermana\":null,\"toilet\":\"\\u100a\\u1036\\u1037\",\"toiletType\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"genderdivide\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"toiletquantity\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"tioletfinding\":null,\"noiseprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"noiceprotection\":null,\"dangerprotect\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"protectmach\":null,\"machinestatus\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machineprotection\":null,\"machinepieces\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"load\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"inspectionentry\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"machinefinding\":null,\"wearing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"wearingstatus\":null,\"ladder\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"ladderstatus\":null,\"holecover\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"holecoverstatus\":null,\"dangergas\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dangergasuses\":null,\"escapeman\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"firealam\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"emergencyentrace\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"cleargoway\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"aboutfire\":null,\"seat\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"sittingplan\":null,\"dinningroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"dinningroomplan\":null,\"babysittingroom\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"babysittingplan\":null,\"washing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"washingplan\":null,\"nursing\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"nursinginstruction\":null,\"accidentinform\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"accidentinformation\":null,\"selfprotectwear\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"selfprotection\":null,\"safetyhealth\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"negotiate\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"training\":\"\\u1000\\u1031\\u102c\\u1004\\u103a\\u1038\",\"safteyhealthcare\":null,\"change1\":null,\"change2\":null,\"change3\":null,\"change4\":null,\"change5\":null,\"inspectorname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u1021\\u1019\\u100a\\u103a\",\"inspectorrank\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d \\u101b\\u102c\\u1011\\u1030\\u1038\",\"check_id\":3,\"user_id\":21}', '2020-01-03 03:30:53', '2020-01-03 03:30:53'),
(71, 'test', 'Print pdf Shop Inspection Safety.', 274, 'App\\Document', 21, 'App\\User', '[3]', '2020-01-03 03:30:53', '2020-01-03 03:30:53'),
(72, 'test', 'Create Shop Inspection Labour Law', 6, 'App\\ShopLabourInspectionLaw', 21, 'App\\User', '{\"_token\":\"jyxojor7pUaEeq5t9RjlJVsnpi0kGzzWqcvBzThl\",\"numholidays\":\"\\u1019\\u101b\\u103e\\u102d\",\"opportunityhol\":\"\\u1015\\u103c\\u102f\",\"paidwage\":\"\\u1019\\u101b\\u103e\\u102d\",\"vacationdays\":\"\\u1019\\u1015\\u1031\\u1038\",\"workerfrees\":\"\\u101b\\u103e\\u102d\",\"annual\":\"\\u1019\\u101b\\u103e\\u102d\",\"contract\":\"\\u101b\\u103e\\u102d\",\"registrationbook\":\"\\u1019\\u101b\\u103e\\u102d\",\"medicalticketqan\":null,\"addmore\":[{\"medicalworker\":null}],\"passionremark\":null,\"generalremark\":null,\"officeremark\":null,\"work_duration\":\"\\u1021\\u101c\\u102f\\u1015\\u103a\\u1005\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 01:00 \\u104a \\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103c\\u102e\\u1038\\u101e\\u100a\\u1037\\u103a\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a - 01:01\\u104a \\u1021\\u102c\\u1038\\u101c\\u1015\\u103a\\u1001\\u103b\\u102d\\u1014\\u103a - 01:01\\u1019\\u103e01:00\\u1021\\u1011\\u102d\",\"shop_id\":\"29728\",\"worktime_notice\":\"\\u1019\\u1015\\u103c\\u102f\",\"SSB\":\"\\u1011\\u102c\\u1038\",\"salary_time\":\"\\u1019\\u1015\\u1031\\u1038\",\"weekend_holiday\":\"sunday\",\"inspectionname\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101e\\u1030\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\\u1021\\u1019\\u100a\\u103a\",\"check_id\":3,\"user_id\":21}', '2020-01-03 03:33:04', '2020-01-03 03:33:04'),
(73, 'test', 'Print pdf Shop Inspection Labour Law.', 275, 'App\\Document', 21, 'App\\User', '[3]', '2020-01-03 03:33:04', '2020-01-03 03:33:04'),
(74, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ထည့်သွင်းခြင်း', 14, 'App\\AffectedInformation', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"Type\":\"1\",\"Factory_IDno\":\"61125\",\"Factory_Name\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"Factory_Type\":\"\\u1021\\u1001\\u103c\\u102c\\u1038\\u1021\\u1011\\u100a\\u103a\\u1021\\u101c\\u102d\\u1015\\u103a \\u1011\\u102f\\u1010\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038(\\u1021\\u1001\\u103c\\u102c\\u1038\\u1019\\u100a\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\\u1010\\u103d\\u1004\\u103a\\u1019\\u103e \\u101e\\u1010\\u103a\\u1019\\u103e\\u1010\\u103a\\u1001\\u103b\\u1000\\u103a \\u1016\\u1031\\u102c\\u103a\\u1015\\u103c\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u101e\\u1031\\u102c)\",\"Factory_Phno\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"Factory_Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"Shop_IDno\":null,\"Shop_Name\":null,\"ShopOwnerName\":null,\"Shop_Type\":null,\"Shop_Phno\":null,\"Shop_Address\":null,\"empName\":\"name\",\"empAge\":\"21\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"cleaner\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"99880434\",\"accDay\":\"2020-01-15\",\"accTime\":\"01:00\",\"accPlace\":\"place\",\"accType\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"accDetail\":\"\\u1016\\u103c\\u1005\\u103a\\u1005\\u1009\\u103a\\u1021\\u1000\\u103b\\u1009\\u103a\\u1038\",\"accLeave\":\"2\",\"painType\":\"\\u1041\\u1040\",\"painPart\":\"A\",\"painPiece\":\"1\",\"painArea\":\"2\",\"painCase\":\"\\u1041\",\"painCase_des\":\"\\u1041\\u1041\",\"FactoryID\":\"61125\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"FactoryPhno\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"FactoryType\":\"\\u1021\\u1001\\u103c\\u102c\\u1038\\u1021\\u1011\\u100a\\u103a\\u1021\\u101c\\u102d\\u1015\\u103a \\u1011\\u102f\\u1010\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038(\\u1021\\u1001\\u103c\\u102c\\u1038\\u1019\\u100a\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\\u1010\\u103d\\u1004\\u103a\\u1019\\u103e \\u101e\\u1010\\u103a\\u1019\\u103e\\u1010\\u103a\\u1001\\u103b\\u1000\\u103a \\u1016\\u1031\\u102c\\u103a\\u1015\\u103c\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u101e\\u1031\\u102c)\"}', '2020-01-13 21:48:42', '2020-01-13 21:48:42'),
(75, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ပြင်ဆင်ခြင်း', 13, 'App\\AffectedInformation', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"_method\":\"PUT\",\"Type\":\"1\",\"Factory_IDno\":\"61125\",\"Factory_Name\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"OwnerName\":\"Mr.Yan Xiao Ming\",\"Factory_Type\":\"\\u1021\\u1001\\u103c\\u102c\\u1038\\u1021\\u1011\\u100a\\u103a\\u1021\\u101c\\u102d\\u1015\\u103a \\u1011\\u102f\\u1010\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038(\\u1021\\u1001\\u103c\\u102c\\u1038\\u1019\\u100a\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\\u1010\\u103d\\u1004\\u103a\\u1019\\u103e \\u101e\\u1010\\u103a\\u1019\\u103e\\u1010\\u103a\\u1001\\u103b\\u1000\\u103a \\u1016\\u1031\\u102c\\u103a\\u1015\\u103c\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u101e\\u1031\\u102c)\",\"Factory_Phno\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"Factory_Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"empName\":\"sddd\",\"empAge\":\"dsdsdsdsdssd\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"\\u101b\\u102c\\u1011\\u1030\\u1038 \\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u102c\\u1040\\u1014\\u103a\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"\\u1016\\u102f\\u1014\\u103a\\u1038\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"accDay\":\"2019-01-01\",\"accTime\":\"sd\",\"accPlace\":\"\\u101e\\u1031\\u1006\\u102f\\u1036\\u1038\",\"accDetail\":\"sdsd\",\"accLeave\":\"dss\",\"painType\":\"\\u1043\\u1040\",\"painPart\":\"B\",\"painPiece\":\"3\",\"painArea\":\"2\",\"painCase\":\"\\u1043\",\"painCase_des\":\"\\u1042\\u1041\",\"FactoryID\":\"61125\",\"FactoryName\":\"Best Hubo \\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1047\\/\\u1048)\\u104a \\u1000\\u1004\\u103a\\u1038\\u101d\\u1014\\u103a\\u1019\\u1004\\u103a\\u1038\\u1000\\u103c\\u102e\\u1038\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1044)\",\"FactoryPhno\":\"\\u1040\\u1049\\u1045\\u1046\\u1048\\u1049\\u1046\\u1044\\u1044\",\"FactoryType\":\"\\u1021\\u1001\\u103c\\u102c\\u1038\\u1021\\u1011\\u100a\\u103a\\u1021\\u101c\\u102d\\u1015\\u103a \\u1011\\u102f\\u1010\\u103a\\u101c\\u102f\\u1015\\u103a\\u1001\\u103c\\u1004\\u103a\\u1038(\\u1021\\u1001\\u103c\\u102c\\u1038\\u1019\\u100a\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\\u1010\\u103d\\u1004\\u103a\\u1019\\u103e \\u101e\\u1010\\u103a\\u1019\\u103e\\u1010\\u103a\\u1001\\u103b\\u1000\\u103a \\u1016\\u1031\\u102c\\u103a\\u1015\\u103c\\u1019\\u103e\\u102f\\u1019\\u101b\\u103e\\u102d\\u101e\\u1031\\u102c)\"}', '2020-01-13 21:53:05', '2020-01-13 21:53:05'),
(76, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ဖျက်ခြင်းခြင်း', 6, 'App\\AffectedInformation', 21, 'App\\User', '[\"6\"]', '2020-01-13 22:01:02', '2020-01-13 22:01:02'),
(77, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ဖျက်ခြင်းခြင်း', 8, 'App\\AffectedInformation', 21, 'App\\User', '{\"id\":8,\"Type\":\"1\",\"FactoryID\":\"68252\",\"FactoryName\":\"ok dollar 2\",\"OwnerName\":\"owner  name\",\"FactoryType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"FactoryPhno\":\"097882002\",\"FactoryAddress\":\"address\",\"empName\":\"\\u1021\\u1019\\u100a\\u103a\",\"empAge\":\"\\u1021\\u101e\\u1000\\u103a \\u1014\\u103e\\u1004\\u1037\\u103a \\u101c\\u102f\\u1015\\u103a\\u101e\\u1000\\u103a\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"\\u101b\\u102c\\u1011\\u1030\\u1038 \\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u102c\\u1040\\u1014\\u103a\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"\\u1016\\u102f\\u1014\\u103a\\u1038\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"accDay\":\"2019-11-15\",\"accTime\":\"\\u1021\\u1001\\u103b\\u102d\\u1014\\u103a\",\"accPlace\":\"\\u1014\\u1031\\u101b\\u102c\",\"accType\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"accDetail\":\"\\u1016\\u103c\\u1005\\u103a\\u1005\\u1009\\u103a\\u1021\\u1000\\u103b\\u1009\\u103a\\u1038\",\"accLeave\":\"5\",\"painType\":\"\\u1043\\u1040\",\"painPart\":\"A\",\"painPiece\":\"2\",\"painArea\":\"2\",\"painCase\":\"\\u1042\",\"painCaseDes\":\"\\u1042\\u1041\",\"affectedInform1\":null,\"affectedInform2\":null,\"affectedInform3\":null,\"affectedInform4\":null,\"affectedInform5\":null,\"created_at\":\"2019-11-14 02:33:43\",\"updated_at\":\"2019-11-14 02:33:43\"}', '2020-01-13 22:07:45', '2020-01-13 22:07:45'),
(78, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ယာယီသိမ်းဆည်းခြင်း', 8, 'App\\TempFactoryInspectionImpact', 21, 'App\\User', '{\"affected_inform_id\":\"9\",\"workname\":\"shop.com.mm\",\"typeofwork\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"ownername\":\"Owner\",\"managername\":\"Manager\",\"contactphone\":\"0978299202\",\"contactemail\":null,\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"3\",\"address\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\\u104a\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\\r\\n\\u101c\\u102d\\u1015\\u103a\\u1005\\u102c\",\"workermale\":\"\\u1046\",\"workerfemale\":\"\\u1046\",\"dieworkername\":\"\\u1021\\u1019\\u100a\\u103a\",\"occupation\":\"\\u101b\\u102c\\u1011\\u1030\\u1038 \\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u102c\\u1040\\u1014\\u103a\",\"dieworkerage\":\"\\u1021\\u101e\\u1000\\u103a \\u1014\\u103e\\u1004\\u1037\\u103a \\u101c\\u102f\\u1015\\u103a\\u101e\\u1000\\u103a\",\"dieworkerex\":\"\\u1021\\u101e\\u1000\\u103a \\u1014\\u103e\\u1004\\u1037\\u103a \\u101c\\u102f\\u1015\\u103a\\u101e\\u1000\\u103a\",\"typeofsex\":\"\\u1000\\u103b\\u102c\\u1038\",\"estimatedloss\":\"\\u1001\\u1014\\u1037\\u103a\\u1019\\u103e\\u1014\\u103a\\u1038\\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103b\\u1000\\u103a\\u101b\\u1000\\u103a\",\"absentworkday\":\"\\u1001\\u1014\\u1037\\u103a\\u1019\\u103e\\u1014\\u103a\\u1038\\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103b\\u1000\\u103a\\u101b\\u1000\\u103a\",\"returnwork\":\"\\u1019\\u101b\\u103e\\u102d\",\"returnworkdate\":null,\"injury\":\"\\u1006\\u1031\\u1038\\u1000\\u102f\\u101e\\u1014\\u1031\\u1006\\u1032\",\"casecondition\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"coverage\":\"\\u1019\\u101b\\u103e\\u102d\",\"damageoccur\":\"\\u1014\\u1031\\u101b\\u102c\",\"occurdate\":\"2019-11-14\",\"occurtime\":null,\"affectpart\":\"A.2.2\",\"categoryname\":\"A.0111\",\"typeofaffect\":\"\\u1043\\u1040\",\"causehurm\":\"\\u1042.\\u1042\\u1041\",\"receivenoti\":null,\"inspectiondate\":null,\"check\":null,\"checkName\":null,\"checkPosition\":null,\"injurybrief\":null,\"photo\":null,\"fullprocess\":null,\"underlyingcauses\":null,\"basiccauses\":null,\"review\":null,\"witnessname1\":null,\"witnessposition1\":null,\"witnessname2\":null,\"witnessposition2\":null,\"witnessownername\":null,\"witnessmanagername\":null,\"inspector\":null,\"user_id\":21,\"updated_at\":\"2020-01-14 04:51:50\",\"created_at\":\"2020-01-14 04:51:50\",\"id\":8}', '2020-01-13 22:21:50', '2020-01-13 22:21:50'),
(79, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ထည့်သွင်းခြင်း', 15, 'App\\AffectedInformation', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"Type\":\"1\",\"Factory_IDno\":\"68252\",\"Factory_Name\":\"ok dollar 2\",\"OwnerName\":\"owner  name\",\"Factory_Type\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"Factory_Phno\":\"097882002\",\"Factory_Address\":\"address\",\"Shop_IDno\":null,\"Shop_Name\":null,\"ShopOwnerName\":null,\"Shop_Type\":null,\"Shop_Phno\":null,\"Shop_Address\":null,\"empName\":\"df\",\"empAge\":\"ss\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"ds\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"e\",\"accDay\":\"2020-01-01\",\"accTime\":\"01:00\",\"accPlace\":\"place\",\"accType\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"accDetail\":\"df\",\"accLeave\":\"2\",\"painType\":\"\\u1042\\u1045\",\"painPart\":\"C\",\"painPiece\":\"3\",\"painArea\":\"2\",\"painCase\":\"\\u1047\",\"painCase_des\":\"\\u1047\\u1041\",\"FactoryID\":\"68252\",\"FactoryName\":\"ok dollar 2\",\"FactoryAddress\":\"address\",\"FactoryPhno\":\"097882002\",\"FactoryType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\"}', '2020-01-13 22:47:16', '2020-01-13 22:47:16');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(80, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ထည့်သွင်းခြင်း', 19, 'App\\FactoryInspectionImpact', 21, 'App\\User', '{\"affected_inform_id\":\"15\",\"workname\":\"ok\",\"typeofwork\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"ownername\":\"owner\",\"managername\":\"manager\",\"contactphone\":\"097882002\",\"contactemail\":null,\"region_id\":\"9\",\"district_id\":\"5\",\"township_id\":\"3\",\"zone_id\":\"1\",\"address\":\"address\",\"workermale\":\"\\u1042\\u1040\",\"workerfemale\":\"\\u1042\\u1040\",\"dieworkername\":\"df\",\"occupation\":\"ds\",\"dieworkerage\":\"ss\",\"dieworkerex\":\"ss\",\"typeofsex\":\"\\u1000\\u103b\\u102c\\u1038\",\"estimatedloss\":\"2\",\"absentworkday\":\"2\",\"returnwork\":\"\\u1019\\u101b\\u103e\\u102d\",\"returnworkdate\":null,\"injury\":\"\\u1006\\u1031\\u1038\\u1000\\u102f\\u101e\\u1014\\u1031\\u1006\\u1032\",\"casecondition\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"coverage\":\"\\u1019\\u101b\\u103e\\u102d\",\"damageoccur\":\"place\",\"occurdate\":\"2020-01-01\",\"occurtime\":\"01:00\",\"affectpart\":\"C.3.2\",\"categoryname\":\"A.0111\",\"typeofaffect\":\"\\u1042\\u1045\",\"causehurm\":\"\\u1047.\",\"receivenoti\":null,\"inspectiondate\":null,\"check\":null,\"checkName\":null,\"checkPosition\":null,\"injurybrief\":null,\"photo\":null,\"fullprocess\":null,\"underlyingcauses\":null,\"basiccauses\":null,\"review\":null,\"witnessname1\":null,\"witnessposition1\":null,\"witnessname2\":null,\"witnessposition2\":null,\"witnessownername\":null,\"witnessmanagername\":null,\"inspector\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"updated_at\":\"2020-01-14 05:17:42\",\"created_at\":\"2020-01-14 05:17:42\",\"id\":19}', '2020-01-13 22:47:42', '2020-01-13 22:47:42'),
(81, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ပြင်ဆင်ခြင်း', 19, 'App\\FactoryInspectionImpact', 21, 'App\\User', '{\"id\":19,\"affected_inform_id\":15,\"workname\":\"ok\",\"typeofwork\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"ownername\":\"owner\",\"managername\":\"manager\",\"contactphone\":\"097882002\",\"contactemail\":null,\"district_id\":\"5\",\"township_id\":\"3\",\"region_id\":\"9\",\"zone_id\":\"1\",\"address\":\"address\",\"workermale\":\"\\u1042\\u1040\",\"workerfemale\":\"\\u1042\\u1040\",\"dieworkername\":\"df\",\"occupation\":\"ds\",\"dieworkerage\":\"ss\",\"dieworkerex\":\"ss\",\"typeofsex\":\"\\u1019\",\"estimatedloss\":\"2\",\"absentworkday\":\"2\",\"returnwork\":\"\\u1019\\u101b\\u103e\\u102d\",\"returnworkdate\":null,\"injury\":\"\\u1006\\u1031\\u1038\\u1000\\u102f\\u101e\\u1014\\u1031\\u1006\\u1032\",\"casecondition\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"coverage\":\"\\u1019\\u101b\\u103e\\u102d\",\"damageoccur\":\"place\",\"occurdate\":\"2020-01-01\",\"occurtime\":\"01:00\",\"affectpart\":\"C.3.2\",\"categoryname\":\"A.0111\",\"typeofaffect\":\"\\u1042\\u1045\",\"causehurm\":\"\\u1047.\",\"receivenoti\":null,\"inspectiondate\":null,\"check\":null,\"checkName\":null,\"checkPosition\":null,\"injurybrief\":null,\"photo\":null,\"fullprocess\":null,\"underlyingcauses\":null,\"basiccauses\":null,\"review\":null,\"witnessname1\":null,\"witnessposition1\":null,\"witnessname2\":null,\"witnessposition2\":null,\"witnessownername\":null,\"witnessmanagername\":null,\"inspector\":\"\\u1005\\u1005\\u103a\\u1006\\u1031\\u1038\\u101b\\u1031\\u1038\\u1021\\u101b\\u102c\\u101b\\u103e\\u102d\",\"created_at\":\"2020-01-14 05:17:42\",\"updated_at\":\"2020-01-14 05:21:18\"}', '2020-01-13 22:51:18', '2020-01-13 22:51:18'),
(82, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း', 2, 'App\\ImpactInstruction', 21, 'App\\User', '{\"refdoc\":\"\\u101b\\u100a\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1038\\u1005\\u102c\\u1021\\u1019\\u103e\\u1010\\u103a\",\"docmentno\":\"fff\",\"create_date\":\"2020-01-14\",\"instructiontitle\":\"ss\",\"name\":\"ok dollar 2\",\"inspected_date\":\"2019-12-11\",\"lastdodate\":\"2020-01-14\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-23\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instructor\":\"fdf\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"instruction1\":\"fd\",\"instruction2\":\"fdf\",\"instruction3\":\"fdf\",\"instruction4\":\"fd\",\"instruction5\":\"fd\",\"factory_id\":\"68252\",\"case_id\":\"15\",\"township_id\":\"3\",\"district_id\":\"5\",\"role_id\":\"1\",\"factory_type\":\"1\",\"user_id\":21,\"updated_at\":\"2020-01-14 05:25:34\",\"created_at\":\"2020-01-14 05:25:34\",\"id\":2}', '2020-01-13 22:55:34', '2020-01-13 22:55:34'),
(83, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း', 3, 'App\\ImpactInstruction', 21, 'App\\User', '{\"refdoc\":\"\\u101b\\u100a\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1038\\u1005\\u102c\\u1021\\u1019\\u103e\\u1010\\u103a\",\"docmentno\":\"fff\",\"create_date\":\"2020-01-14\",\"instructiontitle\":\"fdf\",\"name\":\"TestFor\",\"inspected_date\":\"2019-12-09T11:00\",\"lastdodate\":\"2020-01-14\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-22\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instructor\":\"fd\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"instruction1\":\"fdf\",\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"factory_id\":\"74188\",\"case_id\":\"11\",\"township_id\":\"3\",\"district_id\":\"5\",\"role_id\":\"1\",\"factory_type\":\"2\",\"user_id\":21,\"updated_at\":\"2020-01-14 05:26:15\",\"created_at\":\"2020-01-14 05:26:15\",\"id\":3}', '2020-01-13 22:56:15', '2020-01-13 22:56:15'),
(84, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း', 4, 'App\\ImpactInstruction', 21, 'App\\User', '{\"refdoc\":\"\\u101b\\u100a\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1038\\u1005\\u102c\\u1021\\u1019\\u103e\\u1010\\u103a\",\"docmentno\":\"fff\",\"create_date\":\"2020-01-14\",\"instructiontitle\":\"fdf\",\"name\":\"TestFor\",\"inspected_date\":\"2019-12-09T11:00\",\"lastdodate\":\"2020-01-14\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-22\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instructor\":\"fd\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"instruction1\":\"fdf\",\"instruction2\":null,\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"factory_id\":\"74188\",\"case_id\":\"11\",\"township_id\":\"3\",\"district_id\":\"5\",\"role_id\":\"1\",\"factory_type\":\"2\",\"user_id\":21,\"updated_at\":\"2020-01-14 05:26:37\",\"created_at\":\"2020-01-14 05:26:37\",\"id\":4}', '2020-01-13 22:56:37', '2020-01-13 22:56:37'),
(85, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း', 5, 'App\\ImpactInstruction', 21, 'App\\User', '{\"refdoc\":\"d\",\"docmentno\":\"ddddd\",\"create_date\":\"2020-01-14\",\"instructiontitle\":\"dd\",\"name\":\"ok dollar 2\",\"inspected_date\":\"2019-10-01T01:00\",\"lastdodate\":\"2020-01-07\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-30\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instructor\":\"dd\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"instruction1\":\"ddd\",\"instruction2\":\"dd\",\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"factory_id\":\"68252\",\"case_id\":\"15\",\"township_id\":\"3\",\"district_id\":\"5\",\"role_id\":\"1\",\"factory_type\":\"1\",\"user_id\":21,\"updated_at\":\"2020-01-14 06:34:57\",\"created_at\":\"2020-01-14 06:34:57\",\"id\":5}', '2020-01-14 00:04:57', '2020-01-14 00:04:57'),
(86, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း', 6, 'App\\ImpactInstruction', 21, 'App\\User', '{\"refdoc\":\"d\",\"docmentno\":\"ddddd\",\"create_date\":\"2020-01-14\",\"instructiontitle\":\"dd\",\"name\":\"ok dollar 2\",\"inspected_date\":\"2019-10-01T01:00\",\"lastdodate\":\"2020-01-07\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-30\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instructor\":\"dd\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"instruction1\":\"ddd\",\"instruction2\":\"dd\",\"instruction3\":null,\"instruction4\":null,\"instruction5\":null,\"factory_id\":\"68252\",\"case_id\":\"15\",\"township_id\":\"3\",\"district_id\":\"5\",\"role_id\":\"1\",\"factory_type\":\"1\",\"user_id\":21,\"updated_at\":\"2020-01-14 06:38:25\",\"created_at\":\"2020-01-14 06:38:25\",\"id\":6}', '2020-01-14 00:08:25', '2020-01-14 00:08:25'),
(87, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ပြင်ခြင်း', 6, 'App\\ImpactInstruction', 21, 'App\\User', '{\"id\":6,\"factory_type\":1,\"case_id\":15,\"factory_id\":\"68252\",\"create_date\":\"2020-01-14\",\"lastdodate\":\"2020-01-07\",\"instructiontitle\":\"dd\",\"instructiondep\":\"Ministry\",\"instructiondate\":\"2020-01-30\",\"user_id\":21,\"docmentno\":\"ddddd\",\"refdoc\":\"d\",\"inspected_date\":\"2019-10-01\",\"name\":\"ok dollar 2\",\"documenttype\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"instruction1\":\"ddd\",\"instruction2\":\"dd\",\"instruction3\":\"dd\",\"instruction4\":null,\"instruction5\":null,\"role_id\":1,\"township_id\":3,\"district_id\":5,\"instructor\":\"dd\",\"instructor_rank\":\"\\u101c\\u1000\\u103a\\u1011\\u1031\\u102c\\u1000\\u103a\\u100a\\u103d\\u103e\\u1014\\u103a\\u1000\\u103c\\u102c\\u1038\\u101b\\u1031\\u1038\\u1019\\u103e\\u1030\\u1038\",\"status\":0,\"created_at\":\"2020-01-14 06:38:25\",\"updated_at\":\"2020-01-14 06:42:04\"}', '2020-01-14 00:12:04', '2020-01-14 00:12:04'),
(88, 'test', 'အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ထည့်သွင်းခြင်း', 10, 'App\\Seminar', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"factoryid\":\"92981\",\"factorytype\":\"1\",\"date\":\"2020-01-14\",\"FactoryName\":\"Asia Co Ltd\",\"seminarleader\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u1015\\u103d\\u1032\\u1026\\u1038\\u1006\\u1031\\u102c\\u1004\\u103a\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"seminarleaderrank\":\"fdf\",\"contributor1\":null,\"contributor1rank\":null,\"contributor2\":null,\"contributor2rank\":null,\"contributor3\":null,\"contributor3rank\":null,\"district_id\":\"4\",\"township_id\":\"15\",\"splace\":\"place\",\"trainingclass\":\"fdf\",\"stimes\":\"ddf\",\"men\":\"22\",\"women\":\"22\"}', '2020-01-14 00:16:04', '2020-01-14 00:16:04'),
(89, 'test', 'အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ပြင်ဆင်ခြင်း', 3, 'App\\Seminar', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"factoryid\":\"23599\",\"factorytype\":\"1\",\"township_id\":\"3\",\"district_id\":\"5\",\"seminarid\":\"3\",\"helddate\":\"2019-10-04\",\"FactoryName\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"seminarleader\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u1015\\u103d\\u1032\\u1026\\u1038\\u1006\\u1031\\u102c\\u1004\\u103a\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"seminarleaderrank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u1015\\u103d\\u1032\\u1026\\u1038\\u1006\\u1031\\u102c\\u1004\\u103a\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"contributor1\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030\\u1041\",\"contributor1rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"contributor2\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u1042\",\"contributor2rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"contributor3\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u1044\",\"contributor3rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"district\":\"\\u101c\\u103e\\u102d\\u102f\\u1004\\u103a\\u101e\\u102c\\u101a\\u102c\\u1019\\u103c\\u102d\\u102f\\u1037\\u1014\\u101a\\u103a\",\"splace\":\"\\u1000\\u103b\\u1004\\u103a\\u1038\\u1015\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\",\"trainingclass\":\"\\u101e\\u1004\\u103a\\u1010\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u102c\\u1004\\u103a\\u1038\\u1021\\u1019\\u100a\\u103a\",\"stimes\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"men\":\"\\u1042\\u1044\",\"women\":\"\\u1042\\u1042\"}', '2020-01-14 00:18:16', '2020-01-14 00:18:16'),
(90, 'test', 'အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ဖျက်ခြင်း', 3, 'App\\Seminar', 21, 'App\\User', '{\"id\":3,\"ftype\":1,\"s_leader\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u1015\\u103d\\u1032\\u1026\\u1038\\u1006\\u1031\\u102c\\u1004\\u103a\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u1030 \\u1021\\u1019\\u100a\\u103a\",\"s_leaderrank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u1015\\u103d\\u1032\\u1026\\u1038\\u1006\\u1031\\u102c\\u1004\\u103a\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"s_contributor1\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030\\u1041\",\"s_contributor1rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"s_contributor2\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u1042\",\"s_contributor2rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"s_contributor3\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u1044\",\"s_contributor3rank\":\"\\u1006\\u103d\\u1031\\u1038\\u1014\\u103d\\u1031\\u1038\\u101e\\u1030 \\u101b\\u102c\\u1011\\u1030\\u1038\",\"s_place\":\"\\u1000\\u103b\\u1004\\u103a\\u1038\\u1015\\u1015\\u103c\\u102f\\u101c\\u102f\\u1015\\u103a\\u101e\\u100a\\u1037\\u103a\\u1014\\u1031\\u101b\\u102c\",\"township_id\":3,\"factory_id\":23599,\"factoryname\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"trainingclass\":\"\\u101e\\u1004\\u103a\\u1010\\u1014\\u103a\\u1038\\u1000\\u103b\\u1031\\u102c\\u1004\\u103a\\u1038\\u1021\\u1019\\u100a\\u103a\",\"emen\":24,\"ewomen\":22,\"mmen\":\"\\u1042\\u1044\",\"mwomen\":\"\\u1042\\u1042\",\"s_times\":\"\\u1015\\u1011\\u1019\\u1021\\u1000\\u103c\\u102d\\u1019\\u103a\",\"user_id\":21,\"created_at\":\"2019-10-04 04:29:44\",\"updated_at\":\"2020-01-14 06:48:16\",\"helddate\":\"2019-10-04\",\"district_id\":5}', '2020-01-14 00:20:50', '2020-01-14 00:20:50'),
(91, 'test', 'တရားစွဲဆိုမှု ထည့်သွင်းခြင်း', 8, 'App\\FactoryProsecuted', 21, 'App\\User', '{\"chooseType\":\"1\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"ManagerAddress\":\"fdf\",\"PlaintiffName\":\"df\",\"PlaintiffLvl\":\"dfdff\",\"PlaintiffTownship\":\"df\",\"PlaintiffZone\":\"fdf\",\"ProsecutedAbout\":\"fdf\",\"ProsecutedLaw\":\"fdf\",\"ProsecutedDay\":\"2020-01-14\",\"CourtName\":\"fdf\",\"DecreeDay\":\"2020-01-14\",\"getDecreeDay\":\"2020-01-21\",\"DecreeID\":\"dfd\",\"noOfemp\":\"fd\",\"empGetmoney\":\"dfd\",\"DecreeAct\":\"fdd\",\"judgmentDay\":\"2020-01-14\",\"judgment\":\"fdf\",\"Name\":\"blue mountain\",\"Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Township\":\"10\",\"Zone\":\"7\",\"IDno\":\"23467\",\"updated_at\":\"2020-01-14 06:56:03\",\"created_at\":\"2020-01-14 06:56:03\",\"id\":8}', '2020-01-14 00:26:03', '2020-01-14 00:26:03'),
(92, 'test', 'တရားစွဲဆိုမှု ပြင်ခြင်း', 8, 'App\\FactoryProsecuted', 21, 'App\\User', '{\"id\":8,\"chooseType\":\"1\",\"IDno\":\"23467\",\"Name\":\"blue mountain\",\"Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Township\":\"10\",\"Zone\":\"7\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"ManagerAddress\":\"fdf\",\"PlaintiffName\":\"df\",\"PlaintiffLvl\":\"dfdff\",\"PlaintiffTownship\":\"df\",\"PlaintiffZone\":\"fdf\",\"ProsecutedAbout\":\"fdf\",\"ProsecutedLaw\":\"fdf\",\"ProsecutedDay\":\"2020-01-14\",\"CourtName\":\"fdf\",\"DecreeDay\":\"2020-01-14\",\"getDecreeDay\":\"2020-01-21\",\"DecreeID\":\"dfd\",\"noOfemp\":\"fd\",\"empGetmoney\":\"dfd\",\"DecreeAct\":\"fdd\",\"judgmentDay\":\"2020-01-14\",\"judgment\":\"fdff\",\"created_at\":\"2020-01-14 06:56:03\",\"updated_at\":\"2020-01-14 07:00:53\"}', '2020-01-14 00:30:53', '2020-01-14 00:30:53'),
(93, 'test', 'တရားစွဲဆိုမှု ပြင်ခြင်း', 8, 'App\\FactoryProsecuted', 21, 'App\\User', '{\"id\":8,\"chooseType\":\"1\",\"IDno\":\"23467\",\"Name\":\"blue mountain\",\"Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Township\":\"10\",\"Zone\":\"7\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"ManagerAddress\":\"fdf\",\"PlaintiffName\":\"df\",\"PlaintiffLvl\":\"dfdff\",\"PlaintiffTownship\":\"df\",\"PlaintiffZone\":\"fdf\",\"ProsecutedAbout\":\"fdf\",\"ProsecutedLaw\":\"fdf\",\"ProsecutedDay\":\"2020-01-14\",\"CourtName\":\"fdf\",\"DecreeDay\":\"2020-01-14\",\"getDecreeDay\":\"2020-01-21\",\"DecreeID\":\"dfd\",\"noOfemp\":\"fd\",\"empGetmoney\":\"dfd\",\"DecreeAct\":\"fdd\",\"judgmentDay\":\"2020-01-14\",\"judgment\":\"fdff\",\"created_at\":\"2020-01-14 06:56:03\",\"updated_at\":\"2020-01-14 07:00:53\"}', '2020-01-14 00:47:15', '2020-01-14 00:47:15'),
(94, 'test', 'တရားစွဲဆိုမှု ပြင်ခြင်း', 8, 'App\\FactoryProsecuted', 21, 'App\\User', '{\"id\":8,\"chooseType\":\"1\",\"IDno\":\"23467\",\"Name\":\"blue mountain\",\"Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Township\":\"10\",\"Zone\":\"7\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"ManagerAddress\":\"fdf\",\"PlaintiffName\":\"df\",\"PlaintiffLvl\":\"dfdff\",\"PlaintiffTownship\":\"df\",\"PlaintiffZone\":\"fdf\",\"ProsecutedAbout\":\"fdf\",\"ProsecutedLaw\":\"fdf\",\"ProsecutedDay\":\"2020-01-14\",\"CourtName\":\"fdf\",\"DecreeDay\":\"2020-01-14\",\"getDecreeDay\":\"2020-01-21\",\"DecreeID\":\"dfd\",\"noOfemp\":\"fd\",\"empGetmoney\":\"dfd\",\"DecreeAct\":\"fdd\",\"judgmentDay\":\"2020-01-14\",\"judgment\":\"fdfff\",\"created_at\":\"2020-01-14 06:56:03\",\"updated_at\":\"2020-01-14 07:17:25\"}', '2020-01-14 00:47:25', '2020-01-14 00:47:25'),
(95, 'test', 'တရားစွဲဆိုမှု ပြင်ခြင်း', 8, 'App\\FactoryProsecuted', 21, 'App\\User', '{\"id\":8,\"chooseType\":\"1\",\"IDno\":\"23467\",\"Name\":\"blue mountain\",\"Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Township\":\"10\",\"Zone\":\"7\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\",\"OwnerAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a \\u101b\\u103d\\u103e\\u1031\\u1015\\u103c\\u100a\\u103a\\u101e\\u102c\\u1005\\u1000\\u103a\\u1019\\u103e\\u102f\\u1007\\u102f\\u1014\\u103a(\\u1043)\",\"ManagerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1000\\u103b\\u1031\\u102c\\u103a\",\"ManagerAddress\":\"fdf\",\"PlaintiffName\":\"df\",\"PlaintiffLvl\":\"dfdff\",\"PlaintiffTownship\":\"df\",\"PlaintiffZone\":\"fdf\",\"ProsecutedAbout\":\"fdf\",\"ProsecutedLaw\":\"fdf\",\"ProsecutedDay\":\"2020-01-14\",\"CourtName\":\"fdf\",\"DecreeDay\":\"2020-01-14\",\"getDecreeDay\":\"2020-01-21\",\"DecreeID\":\"dfd\",\"noOfemp\":\"fd\",\"empGetmoney\":\"dfd\",\"DecreeAct\":\"fdd\",\"judgmentDay\":\"2020-01-14\",\"judgment\":\"fdfff\",\"created_at\":\"2020-01-14 06:56:03\",\"updated_at\":\"2020-01-14 07:17:25\"}', '2020-01-14 00:50:09', '2020-01-14 00:50:09'),
(96, 'test', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းခြင်း', 5, 'App\\PermissionOtFactory', 21, 'App\\User', '{\"factory_id\":\"23467\",\"FromDay\":\"2020-01-14\",\"ToDay\":\"2020-01-14\",\"TotalWorker\":\"\\u1042\",\"Othour\":\"\\u1045\",\"totalOthour\":\"\\u1041\\u1040\",\"township\":\"10\",\"district\":\"5\",\"factorytype\":\"1\",\"touser_id\":20,\"user_id\":21,\"updated_at\":\"2020-01-14 07:35:15\",\"created_at\":\"2020-01-14 07:35:15\",\"id\":5}', '2020-01-14 01:05:15', '2020-01-14 01:05:15'),
(97, 'test', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ပြင်ခြင်း', 5, 'App\\PermissionOtFactory', 21, 'App\\User', '{\"id\":5,\"factory_id\":23467,\"FromDay\":\"2020-01-14\",\"ToDay\":\"2020-01-14\",\"TotalWorker\":\"\\u1042\",\"Othour\":\"\\u1046\",\"totalOthour\":\"\\u1041\\u1042\",\"user_id\":21,\"created_at\":\"2020-01-14 07:35:15\",\"updated_at\":\"2020-01-14 07:38:02\",\"factorytype\":1,\"township\":10,\"district\":5,\"touser_id\":20,\"self_id\":null}', '2020-01-14 01:08:02', '2020-01-14 01:08:02'),
(98, 'test', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ပြင်ခြင်း', 5, 'App\\PermissionOtFactory', 21, 'App\\User', '{\"id\":5,\"factory_id\":23467,\"FromDay\":\"2020-01-14\",\"ToDay\":\"2020-01-14\",\"TotalWorker\":\"\\u1042\",\"Othour\":\"\\u1046\",\"totalOthour\":\"\\u1041\\u1042\",\"user_id\":21,\"created_at\":\"2020-01-14 07:35:15\",\"updated_at\":\"2020-01-14 07:38:02\",\"factorytype\":1,\"township\":10,\"district\":5,\"touser_id\":20,\"self_id\":null}', '2020-01-14 01:09:47', '2020-01-14 01:09:47'),
(99, 'test', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ပြင်ခြင်း', 1, 'App\\PermissionOtFactory', 21, 'App\\User', '{\"id\":1,\"factory_id\":23599,\"FromDay\":\"2019-12-09\",\"ToDay\":\"2019-12-17\",\"TotalWorker\":\"\\u1042\\u1042\",\"Othour\":\"\\u1042\",\"totalOthour\":\"\\u1044\\u1044\",\"user_id\":18,\"created_at\":\"2019-12-09 05:22:19\",\"updated_at\":\"2019-12-09 05:22:19\",\"factorytype\":1,\"township\":3,\"district\":5,\"touser_id\":20,\"self_id\":null}', '2020-01-14 01:10:15', '2020-01-14 01:10:15'),
(100, 'test', 'Change Password', 21, 'App\\User', 21, 'App\\User', '{\"id\":21,\"name\":\"test\",\"email\":\"lwinthaungtin@gmail.com\",\"email_verified_at\":null,\"township_id\":3,\"district_id\":null,\"region_id\":null,\"phoneno\":\"9989349343743\",\"accessibletwonship\":\"3,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28\",\"created_at\":\"2019-12-04 10:52:24\",\"updated_at\":\"2020-01-14 07:43:10\"}', '2020-01-14 01:13:10', '2020-01-14 01:13:10'),
(101, 'test', 'Create District', 9, 'App\\District', 21, 'App\\User', '{\"region_id\":\"10\",\"district_name\":\"mdy\",\"updated_at\":\"2020-01-14 07:50:03\",\"created_at\":\"2020-01-14 07:50:03\",\"id\":9}', '2020-01-14 01:20:03', '2020-01-14 01:20:03'),
(102, 'test', 'Create Township', 29, 'App\\Township', 21, 'App\\User', '{\"district_id\":\"4\",\"township_name\":\"test\",\"updated_at\":\"2020-01-14 07:52:00\",\"created_at\":\"2020-01-14 07:52:00\",\"id\":29}', '2020-01-14 01:22:00', '2020-01-14 01:22:00'),
(103, 'test', 'Create Zone', 11, 'App\\Industrialzone', 21, 'App\\User', '{\"township_id\":\"3\",\"industrialzone_name\":\"test\",\"updated_at\":\"2020-01-14 07:54:37\",\"created_at\":\"2020-01-14 07:54:37\",\"id\":11}', '2020-01-14 01:24:37', '2020-01-14 01:24:37'),
(104, 'test', 'create new user', 29, 'App\\User', 21, 'App\\User', '{\"name\":\"name\",\"email\":\"test1@gmail.com\",\"phoneno\":null,\"region_id\":null,\"district_id\":null,\"township_id\":\"15\",\"accessibletwonship\":\"15\",\"updated_at\":\"2020-01-14 08:04:15\",\"created_at\":\"2020-01-14 08:04:15\",\"id\":29}', '2020-01-14 01:34:15', '2020-01-14 01:34:15'),
(105, 'test', 'Create Section for workType', 25, 'App\\EconomicSection', 21, 'App\\User', '{\"Section\":\"z\",\"SectionName\":\"df\",\"updated_at\":\"2020-01-14 08:13:33\",\"created_at\":\"2020-01-14 08:13:33\",\"id\":25}', '2020-01-14 01:43:33', '2020-01-14 01:43:33'),
(106, 'test', 'Create Division For worktype', 33, 'App\\EconomicDivision', 21, 'App\\User', '{\"division_code\":\"11\",\"division_name\":\"test\",\"section_id\":\"1\",\"updated_at\":\"2020-01-14 08:16:32\",\"created_at\":\"2020-01-14 08:16:32\",\"id\":33}', '2020-01-14 01:46:32', '2020-01-14 01:46:32'),
(107, 'test', 'create group for worktype', 97, 'App\\EconomicGroup', 21, 'App\\User', '{\"group_code\":\"11\",\"group_name\":\"test\",\"division_id\":\"1\",\"updated_at\":\"2020-01-14 08:19:02\",\"created_at\":\"2020-01-14 08:19:02\",\"id\":97}', '2020-01-14 01:49:02', '2020-01-14 01:49:02'),
(108, 'test', 'create class for worktype', 95, 'App\\EconomicClass', 21, 'App\\User', '{\"class_code\":\"d\",\"class_name\":\"d\",\"group_id\":\"1\",\"updated_at\":\"2020-01-14 08:22:19\",\"created_at\":\"2020-01-14 08:22:19\",\"id\":95}', '2020-01-14 01:52:19', '2020-01-14 01:52:19'),
(109, 'test', 'လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ထည့်သွင်းခြင်း', 16, 'App\\AffectedInformation', 21, 'App\\User', '{\"_token\":\"u5coVcWMY1qjPiZnCpI1Gn5WxfPHRjOX8zQF2FWU\",\"Type\":\"1\",\"township_id\":\"3\",\"Factory_IDno\":\"23599\",\"Factory_Name\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"OwnerName\":\"\\u1026\\u1038\\u1019\\u1031\\u102c\\u1004\\u103a\\u1019\\u1031\\u102c\\u1004\\u103a\\u1026\\u1038\",\"Factory_Type\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"Factory_Phno\":\"09400424444\",\"Factory_Address\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"Shop_IDno\":null,\"Shop_Name\":null,\"ShopOwnerName\":null,\"Shop_Type\":null,\"Shop_Phno\":null,\"Shop_Address\":null,\"empName\":\"dfdf\",\"empAge\":\"dd\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"fdf9898928e9\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"9080808\",\"accDay\":\"2020-01-14\",\"accTime\":\"01:00\",\"accPlace\":\"fdf\",\"accType\":\"\\u101b\\u103e\\u1031\\u1038\\u1026\\u1038\\u101e\\u1030\\u1014\\u102c\\u1015\\u103c\\u102f\",\"accDetail\":\"fdd\",\"accLeave\":\"dfd\",\"painType\":\"\\u1042\\u1040\",\"painPart\":\"B\",\"painPiece\":\"2\",\"painArea\":\"1\",\"painCase\":\"\\u1046\",\"painCase_des\":\"\\u1046\\u1041\",\"FactoryID\":\"23599\",\"FactoryName\":\"\\u1021\\u102c\\u101b\\u103e\\u101e\\u1019\\u102c\\u1013\\u102d\\u1021\\u1011\\u100a\\u103a\\u1001\\u103b\\u102f\\u1015\\u103a\",\"FactoryAddress\":\"\\u1021\\u1019\\u103e\\u1010\\u103a(\\u1041\\u1045\\u1040\\/\\u1041\\u1045\\u1041)\\u104a \\u1026\\u1038\\u1011\\u103d\\u1014\\u103a\\u1038\\u100a\\u102d\\u102f\\u101c\\u1019\\u103a\\u1038\\u104a\",\"FactoryPhno\":\"09400424444\",\"FactoryType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\"}', '2020-01-14 02:55:17', '2020-01-14 02:55:17'),
(110, 'default', 'Look, I logged something', NULL, NULL, NULL, NULL, '[]', '2020-01-17 02:39:26', '2020-01-17 02:39:26'),
(111, 'Htet Nyi Aung', 'Change Password.', NULL, NULL, NULL, NULL, '{\"_token\":\"tmJ2EgPPTVgunPL6784ZgZzjWC84550vEZtylXdq\",\"current-password\":\"123456\",\"new-password\":\"123456789\",\"new-password_confirmation\":\"123456789\"}', '2020-01-17 02:47:40', '2020-01-17 02:47:40'),
(112, 'Htet Nyi Aung', 'Change Password.', 3, 'App\\Selfregistration', 3, 'App\\Selfregistration', '{\"_token\":\"tmJ2EgPPTVgunPL6784ZgZzjWC84550vEZtylXdq\",\"current-password\":\"123456789\",\"new-password\":\"123456\",\"new-password_confirmation\":\"123456\"}', '2020-01-17 02:48:51', '2020-01-17 02:48:51'),
(113, 'Htet Nyi Aung', 'လုပ်ငန်းခွင် ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ စာရင်းသွင်း From SelfRegistration', 18, 'App\\AffectedInformation', 3, 'App\\Selfregistration', '{\"_token\":\"tmJ2EgPPTVgunPL6784ZgZzjWC84550vEZtylXdq\",\"Factory_IDno\":\"68252\",\"Factory_Name\":\"ok dollar 2\",\"township_id\":\"3\",\"OwnerName\":\"owner  name\",\"Factory_Type\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\",\"Factory_Phno\":\"097882002\",\"Factory_Address\":\"address\",\"Shop_IDno\":null,\"Shop_Name\":null,\"ShopOwnerName\":null,\"Shop_Type\":null,\"Shop_Phno\":null,\"Shop_Address\":null,\"empName\":\"\\u1021\\u1019\\u100a\\u103a\",\"empAge\":\"\\u1021\\u101e\\u1000\\u103a \\u1014\\u103e\\u1004\\u1037\\u103a \\u101c\\u102f\\u1015\\u103a\\u101e\\u1000\\u103a\",\"empGender\":\"\\u1000\\u103b\\u102c\\u1038\",\"empLvl\":\"\\u101b\\u102c\\u1011\\u1030\\u1038 \\u1014\\u103e\\u1004\\u1037\\u103a \\u1010\\u102c\\u1040\\u1014\\u103a\",\"empLama\":\"\\u101b\\u103e\\u102d\",\"empPhno\":\"\\u1016\\u102f\\u1014\\u103a\\u1038\\u1014\\u1036\\u1015\\u102b\\u1010\\u103a\",\"accDay\":\"2020-01-17\",\"accTime\":\"01:00\",\"accPlace\":\"\\u1014\\u1031\\u101b\\u102c\",\"accType\":\"\\u101e\\u102c\\u1019\\u1014\\u103a\",\"accDetail\":\"\\u1016\\u103c\\u1005\\u103a\\u1005\\u1009\\u103a\\u1021\\u1000\\u103b\\u1009\\u103a\\u1038\",\"accLeave\":\"\\u1001\\u1014\\u1037\\u103a\\u1019\\u103e\\u1014\\u103a\\u1038\\u1021\\u101c\\u102f\\u1015\\u103a\\u1015\\u103b\\u1000\\u103a\\u101b\\u1000\\u103a\",\"painType\":\"\\u1042\\u1040\",\"painPart\":\"A\",\"painPiece\":\"1\",\"painArea\":\"3\",\"painCase\":\"\\u1041\",\"painCase_des\":\"\\u1041\\u1041\",\"affectedInform1\":null,\"affectedInform2\":null,\"affectedInform3\":null,\"affectedInform4\":null,\"affectedInform5\":null,\"Type\":1,\"FactoryID\":\"68252\",\"FactoryName\":\"ok dollar 2\",\"FactoryAddress\":\"address\",\"FactoryPhno\":\"097882002\",\"FactoryType\":\"\\u1014\\u103e\\u1036\\u1005\\u102c\\u1038\\u1015\\u1004\\u103a(\\u1006\\u1014\\u103a\\u1005\\u1015\\u102b\\u1038\\u1019\\u103e\\u1021\\u1015)\\u104a \\u1015\\u1032\\u1010\\u1031\\u102c\\u1004\\u1037\\u103a\\u101b\\u103e\\u100a\\u103a \\u1000\\u1031\\u102c\\u1000\\u103a\\u1015\\u1032\\u101e\\u102e\\u1038\\u1014\\u103e\\u1036\\u1014\\u103e\\u1004\\u1037\\u103a \\u1006\\u102e\\u1011\\u103d\\u1000\\u103a\\u1021\\u1005\\u1031\\u1037\\u1019\\u103b\\u102c\\u1038 \\u1005\\u102d\\u102f\\u1000\\u103a\\u1015\\u103b\\u102d\\u102f\\u1038\\u1001\\u103c\\u1004\\u103a\\u1038\"}', '2020-01-17 03:10:23', '2020-01-17 03:10:23'),
(114, 'Htet Nyi Aung', 'လုပ်ငန်းခွင် ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ  ပြင်ခြင်း  From SelfRegistration', 18, 'App\\AffectedInformation', 3, 'App\\Selfregistration', '[\"18\"]', '2020-01-17 03:13:53', '2020-01-17 03:13:53'),
(115, 'Htet Nyi Aung', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းခြင်း From SelfRegistration', 7, 'App\\PermissionOtFactory', 3, 'App\\Selfregistration', '{\"_token\":\"tmJ2EgPPTVgunPL6784ZgZzjWC84550vEZtylXdq\",\"factory_id\":\"68252\",\"FromDay\":\"2020-01-17\",\"ToDay\":\"2020-01-19\",\"TotalWorker\":\"22\",\"Othour\":\"2\",\"totalOthour\":\"\\u1044\\u1044\",\"role\":\"7\",\"township\":\"3\",\"district\":\"5\",\"factorytype\":\"1\",\"touser_id\":19,\"self_id\":3}', '2020-01-17 03:21:50', '2020-01-17 03:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `affected_bodies`
--

CREATE TABLE `affected_bodies` (
  `id` int(10) UNSIGNED NOT NULL,
  `body_code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affected_bodies`
--

INSERT INTO `affected_bodies` (`id`, `body_code`, `body_name`, `created_at`, `updated_at`) VALUES
(1, 'A', 'ဦးခေါင်းပိုင်း', NULL, NULL),
(2, 'B', 'လည်ပင်းပိုင်း', NULL, NULL),
(3, 'C', 'ကိုယ်လုံးပိုင်း', NULL, NULL),
(4, 'D', 'ခန္ဓာကိုယ်အပေါ် ပိုင်း', NULL, NULL),
(5, 'E', 'ခန္ဓာကိုယ်အောက်ပိုင်း', NULL, NULL),
(6, 'F', 'ခန္ဓာကိုယ်အစိတ်အပိုင်း နေရာအများအပြား ထိခိုက်မိခြင်း', NULL, NULL),
(7, 'G', 'အထွေထွေ ထိခိုက်ဒဏ်ရာ ရရှိမှုများ (အခြားထိခိုက်မှုများ)', NULL, NULL),
(8, 'H', 'ထိခိုက်မှုနေရာအတိအကျ သတ်မှတ်မရနိုင်ခြင်း', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `affected_body_pieces`
--

CREATE TABLE `affected_body_pieces` (
  `id` int(10) UNSIGNED NOT NULL,
  `affected_body_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peice_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peice_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affected_body_pieces`
--

INSERT INTO `affected_body_pieces` (`id`, `affected_body_code`, `peice_no`, `peice_name`, `created_at`, `updated_at`) VALUES
(1, 'A', '1', 'ဦးခေါင်းခွံအပိုင်း (ဦးခေါင်းခွံ၊ ဦးနှောက်၊ ဦးရေပြား၊ ဦးနှောက်အာရုံကြောနှင့် သွေးကြောများ)\r\n', NULL, NULL),
(2, 'A', '2', 'မျက်လုံး (သူငယ်အိမ်၊ အမြင်အာရုံကြော)', NULL, NULL),
(3, 'A', '3', 'နား', NULL, NULL),
(4, 'A', '4', 'ပါးစပ် (နှုတ်ခမ်း၊သွားနှင့် လျှာ အပါအဝင်)', NULL, NULL),
(5, 'A', '5', 'နှာခေါင်း', NULL, NULL),
(6, 'A', '6', 'မျက်နှာအစိတ်အပိုင်း (နေရာအတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(7, 'A', '7', 'ဦးခေါင်း (နေရာအနှံ့အပြား ထိခိုက်မိသည့်အခါ)', NULL, NULL),
(8, 'A', '8', 'ဦးခေါင်း (ထိခိုက်မိသည့်နေရာ အတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(9, 'A', '9', 'ဦးခေါင်း (အထက်ဖော်ပြထားသည့် နေရာများမဟုတ်သည့် အခါ)', NULL, NULL),
(10, 'B', '1', 'လည်ပင်းနှင့်ဆက်ထားသည့် ကျောရိုးနှင့် ကျောရိုးဆစ်များ', NULL, NULL),
(11, 'B', '2', 'လည်ပင်းနှင့်ဆက်ထားသည့် ကျောရိုးနှင့် ကျောရိုးဆစ်များ (ထိခိုက်သည့်နေရာ အတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(12, 'B', '3', 'လည်ပင်းနှင့်ဆက်ထားသည့် ကျောရိုးနှင့် ကျောရိုးဆစ်များ (အထက်ဖော်ပြထားသည့် နေရာများမဟုတ်သည့် အခါ)', NULL, NULL),
(13, 'C', '1', 'ကိုယ်ခန္ဓာနောက်ကျောပိုင်း (ကျောရိုး၊ ကျောရိုး ကြွက်သားများနှင့် အာရုံကြောများ)', NULL, NULL),
(14, 'C', '2', 'ကိုယ်ခန္ဓာနောက်ကျောပိုင်း (အထက်ဖော်ပြထားသည့် နေရာများမဟုတ်သည့် အခါ)', NULL, NULL),
(15, 'C', '3', 'ရင်အုပ် (နံရိုး၊ ရင်ညွန့်ရိုးနှင့် ရင်ဘတ်ပိုင်းရှိ ကိုယ်တွင်းအင်္ဂါအစိတ်အပိုင်းများ)', NULL, NULL),
(16, 'C', '4', 'ဝမ်းဗိုက် (ဝမ်းဗိုက်ပိုင်းရှိ ကိုယ်တွင်းအင်္ဂါအစိတ်အပိုင်းများ)', NULL, NULL),
(17, 'C', '5', 'တင်ပါးဆုံရိုး\r\n', NULL, NULL),
(18, 'C', '6', 'ကိုယ်လုံးနှင့်ဆက်ထားသည့် ကျောရိုးနှင့် ကျောရိုးဆစ်များ', NULL, NULL),
(19, 'C', '7', 'ကိုယ်လုံးပိုင်း(နေရာအနှံ့အပြား ထိခိုက်မိသည့်အခါ)', NULL, NULL),
(20, 'C', '8', 'ကိုယ်လုံးပိုင်း(ထိခိုက်မိသည့်နေရာ အတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(21, 'C', '9', 'ကိုယ်လုံးပိုင်း(အထက်ဖော်ပြထားသည့် နေရာများမဟုတ်သည့် အခါ)', NULL, NULL),
(22, 'D', '1', 'ပုခုံးနှင့် ပုခုံးအဆစ်(ညှပ်ရိုးနှင့် လက်ပြင်ရိုး)', NULL, NULL),
(23, 'D', '2', 'လက်မောင်းအပေါ်ပိုင်း', NULL, NULL),
(24, 'D', '3', 'တံတောင်ဆစ်', NULL, NULL),
(25, 'D', '4', 'လက်ဖျံ', NULL, NULL),
(26, 'D', '၅', 'လက်ကောက်ဝတ်', NULL, NULL),
(27, 'D', '၆', 'လက် (လက်ချောင်းများမှ လွဲ၍)', NULL, NULL),
(28, 'D', '၇', 'လက်ချောင်းများ', NULL, NULL),
(29, 'D', '၈', 'ခန္ဓာကိုယ်အပေါ်ပိုင်း (နေရာအနှံအပြား ထိခိုက်မိသည့်အခါ)', NULL, NULL),
(30, 'D', '၉', 'ခန္ဓာကိုယ်အပေါ်ပိုင်း (ထိခိုက်သည့်နေရာ အတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(31, 'D', '၁၀', 'ခန္ဓာကိုယ်အပေါ်ပိုင်း (အထက်ဖော်ပြထားသည့် နေရာများမဟုတ်သည့် အခါ)', NULL, NULL),
(32, 'E', '၁', 'တင်ပါး (အဆစ်များအပါအဝင်)', NULL, NULL),
(33, 'E', '၂', 'ပေါင်', NULL, NULL),
(34, 'E', '၃', 'ဒူး\r\n', NULL, NULL),
(35, 'E', '၄', 'ခြေထောက်', NULL, NULL),
(36, 'E', '၅', 'ခြေကျဉ်းဝတ်', NULL, NULL),
(37, 'E', '၆', 'ခြေဖဝါး (ခြေချောင်းများမှ လွဲ၍)', NULL, NULL),
(38, 'E', '၇', 'ခြေချောင်းများ\r\n', NULL, NULL),
(39, 'E', '၈', 'ခန္ဓာကိုယ်အောက်ပိုင်း (နေရာအနှံ့အပြား ထိခိုက်မိသည့်အခါ)', NULL, NULL),
(40, 'E', '၉', 'ခန္ဓာကိုယ်အောက်ပိုင်း (ထိခိုက်သည့်နေရာ အတိအကျ မသတ်မှတ်နိုင်သည့် အခါ)', NULL, NULL),
(41, 'E', '၁၀', 'ခန္ဓာကိုယ်အောက်ပိုင်း (အထက်ဖော်ပြထားသည့် နေရာများ မဟုတ်သည့်အခါ)', NULL, NULL),
(42, 'F', '၁', 'ဦးခေါင်းပိုင်းနှင့် ကိုယ်လုံးပိုင်း၊ ဦးခေါင်းနှင့် ခြေလက်အင်္ဂါ တစ်ခု သို့မဟုတ် တစ်ခုထက်ပိုသော အစိတ်အပိုင်းများ', NULL, NULL),
(43, 'F', '၂', 'ကိုယ်လုံးနှင့် ခြေလက်အင်္ဂါ တစ်ခု သို့မဟုတ် တစ်ခုထက်ပိုသော အစိတ်အပိုင်းများ', NULL, NULL),
(44, 'F', '၃', 'ကိုယ်ခန္ဓာအပေါ်ပိုင်း တစ်ခုနှင့် ကိုယ်ခန္ဓာအောက်ပိုင်း တစ်ခု သို့မဟုတ် တစ်ခုထက် ပိုသော အင်္ဂါအစိတ်အပိုင်းများ', NULL, NULL),
(45, 'F', '၄', 'အခြားသော ကိုယ်ခန္ဓာအစိတ်အပိုင်း အများအပြား ထိခိုက်မိခြင်း', NULL, NULL),
(46, 'F', '၅', 'နေရာအတိအကျ သတ်မှတ်မရနိုင်သည့် ကိုယ်ခန္ဓာအစိတ်အပိုင်းများ', NULL, NULL),
(47, 'G', '၁', 'သွေးလည်ပတ်မှုစနစ် ထိခိုက်ခြင်း', NULL, NULL),
(48, 'G', '၂', 'အသက်ရှူလမ်းကြောင်းဆိုင်ရာ ထိခိုက်ခြင်း', NULL, NULL),
(49, 'G', '၃', 'အစာခြေစနစ်ဆိုင်ရာ ထိခိုက်ခြင်း', NULL, NULL),
(50, 'G', '၄', 'အာရုံကြောစနစ်ဆိုင်ရာ ထိခိုက်ခြင်း', NULL, NULL),
(51, 'G', '၅', 'အခြားသော အထွေထွေ ထိခိုက်ဒဏ်ရာ ရရှိမှုများ\r\n', NULL, NULL),
(52, 'G', '၆', 'အတိအကျ သတ်မှတ်မရနိုင်သည့် အထွေထွေ ထိခိုက်မှုဒဏ်ရာ ရရှိမှုများ\r\n', NULL, NULL),
(53, 'H', '၁', 'ထိခိုက်မှုနေရာ အတိအကျ သတ်မှတ်မရနိုင်ခြင်း\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `affected_informations`
--

CREATE TABLE `affected_informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryPhno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empAge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empGender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empLvl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empLama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empPhno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accTime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accPlace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accDetail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accLeave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `painType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `painPart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `painPiece` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `painArea` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `painCase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `painCaseDes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectedInform1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectedInform2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectedInform3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectedInform4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectedInform5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affected_informations`
--

INSERT INTO `affected_informations` (`id`, `Type`, `FactoryID`, `FactoryName`, `OwnerName`, `FactoryType`, `FactoryPhno`, `FactoryAddress`, `empName`, `empAge`, `empGender`, `empLvl`, `empLama`, `empPhno`, `accDay`, `accTime`, `accPlace`, `accType`, `accDetail`, `accLeave`, `painType`, `painPart`, `painPiece`, `painArea`, `painCase`, `painCaseDes`, `affectedInform1`, `affectedInform2`, `affectedInform3`, `affectedInform4`, `affectedInform5`, `created_at`, `updated_at`, `township_id`) VALUES
(4, '1', '23599', 'အာရှသမာဓိအထည်ချုပ်', 'ဦးမောင်မောင်ဦး', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '09400424444', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမည်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ရာထူး နှင့် တာ၀န်', 'ရှိ', 'ဖုန်းနံပါတ်', '2019-10-02', 'အချိန်', 'နေရာ', 'ရှေးဦးသူနာပြု', 'ဖြစ်စဉ်အကျဉ်း', 'ခန့်မှန်းအလုပ်ပျက်ရက်', '၃၀', 'A', '2', '2', '၂', '၂၁', NULL, NULL, NULL, NULL, NULL, '2019-10-09 03:38:24', '2019-10-09 03:38:24', 0),
(5, '2', '48108', 'shop', 'U Moe Aung', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '0927883044', 'ရွှေပြည်သာမြို့နယ်၊address', 'အမည်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ရာထူး နှင့် တာ၀န်', 'ရှိ', '01993556', '2019-10-03', 'အချိန်', 'ရှေးဦးသူနာပြု', 'ရှေးဦးသူနာပြု', 'ဖြစ်စဉ်အကျဉ်း', 'ခန့်မှန်းအလုပ်ပျက်ရက်', '၃၀', 'A', '2', '2', '၂', '၂၁', 'Hello-FactoryLawInstruction-2019-10-1647345276.pdf', NULL, NULL, NULL, NULL, '2019-10-15 20:41:38', '2019-10-16 01:44:19', 0),
(9, '2', '19747', 'shop.com.mm', 'Owner Name', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '0978299202', 'လိပ်စာလိပ်စာ', 'အမည်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ရာထူး နှင့် တာ၀န်', 'ရှိ', 'ဖုန်းနံပါတ်', '2019-11-14', 'အချိန်', 'နေရာ', 'သာမန်', 'ဖြစ်စဉ်အကျဉ်း', 'ခန့်မှန်းအလုပ်ပျက်ရက်', '၃၀', 'A', '2', '2', '၂', '၂၁', NULL, NULL, NULL, NULL, NULL, '2019-11-14 02:50:53', '2019-11-14 02:50:53', 3),
(10, '1', '60799', 'overSeaCompany Ltd', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '097800300', 'address', 'name', 'age', 'ကျား', 'occupation', 'ရှိ', '097829020', '2019-01-01', 'time', 'ရှေးဦးသူနာပြု', 'ရှေးဦးသူနာပြု', 'no', '3', '၃၀', 'A', '2', '2', '၂', '၂၁', 'C:\\xampp1\\tmp\\phpEF52.tmp', NULL, NULL, NULL, NULL, '2019-12-04 22:07:53', '2019-12-04 22:24:46', 3),
(11, '2', '74188', 'TestFor', 'Hla Hla Hla', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '0978022002', 'လှိုင်သာယာမြို့နယ်၊address', 'name', 'age', 'ကျား', 'occupation', 'ရှိ', '089839', '2019-01-01', 'time', 'ရှေးဦးသူနာပြု', 'ရှေးဦးသူနာပြု', 'fdffdfdfdfd', 'd', '၃၀', 'A', '2', '2', '၂', '၂၁', 'screencapture-youtube-watch-2019-12-04-10_41_11.png', NULL, NULL, NULL, NULL, '2019-12-04 22:12:18', '2019-12-23 00:24:01', 3),
(15, '1', '68252', 'ok dollar 2', 'owner  name', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '097882002', 'address', 'df', 'ss', 'ကျား', 'ds', 'ရှိ', 'e', '2020-01-01', '01:00', 'place', 'ရှေးဦးသူနာပြု', 'df', '2', '၂၅', 'C', '3', '2', '၇', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-13 22:47:16', '2020-01-13 22:47:16', 3),
(16, '1', '23599', 'အာရှသမာဓိအထည်ချုပ်', 'ဦးမောင်မောင်ဦး', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '09400424444', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'dfdf', 'dd', 'ကျား', 'fdf9898928e9', 'ရှိ', '9080808', '2020-01-14', '01:00', 'fdf', 'ရှေးဦးသူနာပြု', 'fdd', 'dfd', '၂၀', 'B', '2', '1', '၆', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-14 02:55:17', '2020-01-14 02:55:17', 3),
(17, '1', '68252', 'ok dollar 2', 'owner  name', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '097882002', 'address', 'အမည်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ရာထူး နှင့် တာ၀န်', 'ရှိ', 'ဖုန်းနံပါတ်', '2020-01-17', '01:00', 'နေရာ', 'ရှေးဦးသူနာပြု', 'ဖြစ်စဉ်အကျဉ်း', 'ခန့်မှန်းအလုပ်ပျက်ရက်', '၂၀', 'C', NULL, NULL, '၁', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-17 02:11:30', '2020-01-17 02:11:30', 3),
(18, '1', '68252', 'ok dollar 2', 'owner  name', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '097882002', 'address', 'အမည်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ရာထူး နှင့် တာ၀န်', 'ရှိ', 'ဖုန်းနံပါတ်', '2020-12-18', '01:00', 'သာမန်', 'သာမန်', 'ဖြစ်စဉ်အကျဉ်း', 'ခန့်မှန်းအလုပ်ပျက်ရက်', '၂၀', 'A', NULL, NULL, '၁', NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-17 03:10:23', '2020-01-17 03:14:12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `affected_types`
--

CREATE TABLE `affected_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `affected_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affected_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affected_types`
--

INSERT INTO `affected_types` (`id`, `affected_code`, `affected_name`, `created_at`, `updated_at`) VALUES
(1, '၁၀', 'အရိုးကျိုးခြင်း', NULL, NULL),
(2, '၂၀', 'အဆစ်လွဲခြင်း\r\n', NULL, NULL),
(3, '၂၅', 'အရွတ်ဒဏ်ရာရရှိခြင်းနှင့် ကြွက်သားဒဏ်ဖြစ်ခြင်း', NULL, NULL),
(4, '၃၀', 'ဦးခေါင်းဒဏ်ရာ ရရှိမှုနှင့် အခြား ခန္ဓာကိုယ် အတွင်းပိုင်း ထိခိုက်ဒဏ်ရာရရှိခြင်း', NULL, NULL),
(5, '၄၀', '(ခန္ဓာကိုယ် အင်္ဂါအစိတ်အပိုင်းတခုခု) ပြတ်တောက်ခြင်း/ ပြုတ်ထွက်ခြင်း/ ကျွတ်ထွက်ခြင်း။', NULL, NULL),
(6, '၄၁', 'အခြားဒဏ်ရာ', NULL, NULL),
(7, '၅၀', 'အပေါ် ယံထိခိုက်ရှနာများ', NULL, NULL),
(8, '၅၅', 'အတွင်းကြေဒဏ်ရာနှင့် ဖိမိကြိတ်မိသည့်ဒဏ်ရာများ', NULL, NULL),
(9, '၆၀', 'လောင်ကျွမ်းခြင်း', NULL, NULL),
(10, '၇၀', 'ပြင်းထန်စွာအဆိပ်သင့်ခြင်း', NULL, NULL),
(11, '၈၀', 'ရာသီဥတုနှင့်ဆက်စပ်သည့် အခြေအနေနျားကြောင့်ဖြစ်သည့် ဒဏ်ရာများ', NULL, NULL),
(12, '၈၁', 'အသက်ရှူကြပ်ခြင်း', NULL, NULL),
(13, '၈၂', 'လျှပ်စစ်', NULL, NULL),
(14, '၈၃', 'ရောင်ခြည်သင့်ခြင်း', NULL, NULL),
(15, '၉၀', 'သဘောသဘာသမတူညီသည့် ဒဏ်ရာအမျိုးမျိုး', NULL, NULL),
(16, '၉၉', 'အခြားနှင့် အတိအကျသတ်မှတ်ရန်ခက်ခဲသည့် ထိခိုက်မှုများ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `casereports`
--

CREATE TABLE `casereports` (
  `id` int(10) NOT NULL,
  `factory_type` int(2) NOT NULL,
  `reportinformation` text NOT NULL,
  `case_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ToTownship` int(11) DEFAULT NULL,
  `ToDistrict` int(11) DEFAULT NULL,
  `ToRegion` int(11) DEFAULT NULL,
  `Tominister` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casereports`
--

INSERT INTO `casereports` (`id`, `factory_type`, `reportinformation`, `case_id`, `created_at`, `updated_at`, `ToTownship`, `ToDistrict`, `ToRegion`, `Tominister`) VALUES
(1, 1, 'အချိန်ပို ပိုမိုလုပ်ကိုင်နေခြင်း', 53, '2019-12-11 22:47:42', '2019-12-11 22:47:42', 0, 0, 20, NULL),
(2, 1, 'ifyroute', 53, '2019-12-11 22:50:49', '2019-12-11 22:50:49', 0, 0, 20, NULL),
(3, 1, 'hjl', 54, '2019-12-18 19:48:33', '2019-12-18 19:48:33', 0, 0, 20, NULL),
(4, 1, 'test', 51, '2019-12-26 22:09:37', '2019-12-26 22:09:37', 0, 0, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseid` int(50) NOT NULL,
  `createdate` date NOT NULL,
  `FromUserId` int(11) NOT NULL,
  `InspectedDate` date NOT NULL,
  `LastInspectedDate` date DEFAULT NULL,
  `documentId1` varchar(255) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `documentId2` varchar(100) DEFAULT NULL,
  `documentId3` varchar(100) DEFAULT NULL,
  `documentId4` varchar(100) DEFAULT NULL,
  `documentId5` varchar(100) DEFAULT NULL,
  `documentId6` varchar(100) DEFAULT NULL,
  `documentId7` varchar(100) DEFAULT NULL,
  `documentId8` varchar(100) DEFAULT NULL,
  `documentId9` varchar(100) DEFAULT NULL,
  `instruction_id` int(11) DEFAULT NULL,
  `refcaseno` int(11) DEFAULT NULL,
  `checkid` int(10) NOT NULL,
  `FromTownshipid` int(11) DEFAULT NULL,
  `FromDistrictid` int(11) DEFAULT NULL,
  `factorytype` int(2) NOT NULL,
  `role_id` int(3) NOT NULL,
  `zoneid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `createdate`, `FromUserId`, `InspectedDate`, `LastInspectedDate`, `documentId1`, `Status`, `created_at`, `updated_at`, `documentId2`, `documentId3`, `documentId4`, `documentId5`, `documentId6`, `documentId7`, `documentId8`, `documentId9`, `instruction_id`, `refcaseno`, `checkid`, `FromTownshipid`, `FromDistrictid`, `factorytype`, `role_id`, `zoneid`) VALUES
(51, '2019-12-09', 18, '2019-12-09', NULL, 'အာရှသမာဓိအထည်ချုပ်-FactorySafety-1582045248.pdf', '2', '2019-12-09 04:53:17', '2019-12-08 22:23:17', 'အာရှသမာဓိအထည်ချုပ်-FactoryLabourLaw-1212563744.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, 5, 1, 8, 1),
(52, '2019-12-09', 18, '2019-12-09', NULL, '-shop_safety-1577926244.pdf', '2', '2019-12-09 06:46:09', '2019-12-09 00:16:09', 'Noble Shop-ShopLabourLaw-645774324.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, 5, 2, 8, NULL),
(53, '2019-12-12', 24, '2019-12-03', NULL, 'Best Hubo အထည်ချုပ်-FactorySafety-482325343.pdf', '3', '2019-12-12 05:21:08', '2019-12-11 22:51:08', 'Best Hubo အထည်ချုပ်-FactorySafety-1767499319.pdf', 'Best Hubo အထည်ချုပ်-FactorySafety-486236989.pdf', 'Best Hubo အထည်ချုပ်-FactorySafety-1570384858.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 10, 5, 1, 6, 7),
(54, '2019-12-12', 24, '2019-12-09', NULL, 'blue mountain-FactorySafety-681885774.pdf', '3', '2019-12-19 02:18:57', '2019-12-18 19:48:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 10, 5, 1, 6, 7),
(55, '2020-01-02', 21, '2020-01-02', NULL, 'blue mountain-FactorySafety-1151432760.pdf', '1', '2020-01-01 22:09:44', '2020-01-01 22:09:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 10, 5, 1, 1, 7),
(56, '2020-01-03', 21, '2020-01-02', NULL, 'blue mountain-FactorySafety-1151432760.pdf', '2', '2020-01-10 04:29:12', '2020-01-09 21:59:12', 'blue mountain-FactoryLabourLaw-895641918.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 10, 5, 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `check_out_peoples`
--

CREATE TABLE `check_out_peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectionimpact_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_out_peoples`
--

INSERT INTO `check_out_peoples` (`id`, `factoryinspectionimpact_id`, `name`, `created_at`, `updated_at`) VALUES
(35, 10, 'aung aung', '2019-10-16 00:14:19', '2019-10-16 00:14:19'),
(36, 10, 'mg mg', '2019-10-16 00:14:19', '2019-10-16 00:14:19'),
(37, 12, 'စစ်ဆေးစဉ် လိုက်ပါခဲ့သူများ', '2019-11-13 20:19:57', '2019-11-13 20:19:57'),
(38, 12, 'စစ်ဆေးစဉ် လိုက်ပါခဲ့သူများ 1', '2019-11-13 20:19:57', '2019-11-13 20:19:57'),
(39, 13, 'name', '2019-12-05 00:56:43', '2019-12-05 00:56:43'),
(40, 16, 'name', '2019-12-08 22:28:40', '2019-12-08 22:28:40'),
(41, 16, 'name1', '2019-12-08 22:28:40', '2019-12-08 22:28:40'),
(42, 17, 'ဦးအေးမင်းကို', '2019-12-11 23:23:05', '2019-12-11 23:23:05'),
(43, 17, 'ဒေါ်ဇင်မာဝင်း', '2019-12-11 23:23:05', '2019-12-11 23:23:05'),
(44, 18, 'dfd', '2020-01-13 22:40:12', '2020-01-13 22:40:12'),
(45, 19, 'dfdf', '2020-01-13 22:47:42', '2020-01-13 22:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `region_id` int(11) NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `region_id`, `district_name`, `created_at`, `updated_at`) VALUES
(4, 9, 'အရှေ့ပိုင်းခရိုင်', '2019-09-09 01:54:56', '2019-09-09 01:54:56'),
(5, 9, 'မြောက်ပိုင်းခရိုင်', '2019-09-09 01:55:39', '2019-09-09 01:55:39'),
(6, 9, 'အနောက်ပိုင်းခရိုင်', '2019-09-23 22:36:59', '2019-09-23 22:36:59'),
(7, 9, 'တောင်ပိုင်းခရိုင်', '2019-09-23 22:38:15', '2019-09-23 22:38:15'),
(8, 10, 'mdy', '2020-01-14 01:19:43', '2020-01-14 01:19:43'),
(9, 10, 'mdy', '2020-01-14 01:20:03', '2020-01-14 01:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `ID` int(11) NOT NULL,
  `documentId` varchar(255) DEFAULT NULL,
  `Factory_Type` int(11) DEFAULT NULL,
  `Internal_External` varchar(30) DEFAULT NULL,
  `documentReferenceNo` varchar(255) DEFAULT NULL,
  `documentfileName` varchar(255) NOT NULL,
  `FromDepartment` varchar(50) DEFAULT NULL,
  `entryDate` date NOT NULL,
  `FactoryID` varchar(255) NOT NULL,
  `check_id` varchar(255) DEFAULT NULL,
  `create_date` date NOT NULL,
  `documentTitle` varchar(100) NOT NULL,
  `creator` int(5) NOT NULL,
  `documenttype` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `instructionid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`ID`, `documentId`, `Factory_Type`, `Internal_External`, `documentReferenceNo`, `documentfileName`, `FromDepartment`, `entryDate`, `FactoryID`, `check_id`, `create_date`, `documentTitle`, `creator`, `documenttype`, `created_at`, `updated_at`, `instructionid`) VALUES
(237, '၁၁၆', NULL, NULL, 'ရည်ညွှန်းစာအမှတ်', 'အာရှသမာဓိအထည်ချုပ်-FactoryLawInstruction-2019-12-091373175168.pdf', 'လှိုင်သာယာမြို့နယ်', '2019-12-09', '23599', NULL, '2019-12-09', 'စစ်ဆေးခြင်း', 18, 'သာမန်', '2019-12-08 22:23:55', '2019-12-08 22:23:55', 1),
(238, NULL, 1, NULL, NULL, 'Impact1825650641.pdf', '3', '2019-12-09', '60799', '10', '2019-12-09', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 18, 'သာမန်', '2019-12-08 22:28:41', '2019-12-08 22:28:41', NULL),
(241, '၁၁၆', NULL, NULL, 'ရည်ညွှန်းစာအမှတ်', 'Noble Shop-ShopLawInstruction-2019-12-091643624780.pdf', 'လှိုင်သာယာမြို့နယ်', '2019-12-09', '48108', NULL, '2019-12-09', 'စစ်ဆေးခြင်း', 18, 'သာမန်', '2019-12-09 00:16:44', '2019-12-09 00:16:44', 2),
(248, '၇၈၆', NULL, NULL, '၇၆၈', 'Best Hubo အထည်ချုပ်-FactoryInstruction-2019-12-121379996850.pdf', 'မြောက်ပိုင်းခရိုင်', '2019-12-12', '61125', NULL, '2019-12-12', 'လိုက်နာဆောင်ရွက်ရန်အချက်များ', 24, 'သာမန်', '2019-12-11 22:38:14', '2019-12-11 22:38:14', 3),
(249, '၇၈၆', NULL, NULL, '၇၆၈', 'Best Hubo အထည်ချုပ်-FactoryInstruction-2019-12-121323686920.pdf', 'မြောက်ပိုင်းခရိုင်', '2019-12-12', '61125', NULL, '2019-12-12', 'လိုက်နာဆောင်ရွက်ရန်အချက်များ', 24, 'သာမန်', '2019-12-11 22:40:28', '2019-12-11 22:40:28', 3),
(250, NULL, 1, NULL, NULL, 'Impact455387541.pdf', '5', '2019-12-12', '74188', '11', '2019-12-12', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 24, 'သာမန်', '2019-12-11 23:23:06', '2019-12-11 23:23:06', NULL),
(252, 'စာအမှတ်', NULL, NULL, NULL, 'blue mountain-FactoryLawInstruction-2019-12-131132811797.pdf', 'Ministry', '2019-12-13', '23467', NULL, '2019-12-13', 'fg', 1, 'သာမန်', '2019-12-13 01:21:54', '2019-12-13 01:21:54', 39),
(253, 'dfdfdfdf', NULL, NULL, 'fdf', 'blue mountain-FactoryInstruction-2019-12-19845040444.pdf', 'Ministry', '2019-12-19', '23467', NULL, '2019-12-19', 'dfdf', 21, 'သာမန်', '2019-12-18 19:46:04', '2019-12-18 19:46:04', 40),
(254, 'dfdfdfdf', NULL, NULL, 'fdf', 'blue mountain-FactoryInstruction-2019-12-191202741020.pdf', 'Ministry', '2019-12-19', '23467', NULL, '2019-12-19', 'dfdf', 21, 'သာမန်', '2019-12-23 02:14:33', '2019-12-23 02:14:33', 40),
(264, 'ddd', NULL, NULL, 'ee', 'TestFor-ImpactInstruction-2019-12-231591357985.pdf', 'Ministry', '2019-12-23', '74188', NULL, '2019-12-23', 'dd', 21, 'သာမန်', '2019-12-23 03:32:43', '2019-12-23 03:32:43', 1),
(267, NULL, 1, NULL, NULL, 'blue mountain-FactorySafety-1151432760.pdf', NULL, '2020-01-02', '23467', '4', '2020-01-02', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-01 22:03:27', '2020-01-01 22:03:27', NULL),
(268, 'dfdfdfdf', NULL, NULL, 'fdf', 'blue mountain-FactoryInstruction-2019-12-19909145368.pdf', 'Ministry', '2019-12-19', '23467', NULL, '2019-12-19', 'dfdf', 21, 'သာမန်', '2020-01-01 22:15:50', '2020-01-01 22:15:50', 40),
(269, NULL, 1, NULL, NULL, 'blue mountain-FactoryLabourLaw-895641918.pdf', NULL, '2020-01-02', '23467', '4', '2020-01-02', 'ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-02 02:27:36', '2020-01-02 02:27:36', NULL),
(270, NULL, 2, NULL, NULL, '-shop_safety-958557946.pdf', NULL, '2020-01-02', '89490', '2', '2020-01-02', 'လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-02 02:32:26', '2020-01-02 02:32:26', NULL),
(271, NULL, 2, NULL, NULL, 'Shwe Htike Tan-ShopLabourLaw-156408066.pdf', NULL, '2020-01-02', '89490', '2', '2020-01-02', 'အလုပ်သမားဥပဒေစစ်ဆေးရေး', 21, 'သာမန်', '2020-01-02 02:36:05', '2020-01-02 02:36:05', NULL),
(272, NULL, 1, NULL, NULL, 'test-FactorySafety-480983506.pdf', NULL, '2020-01-03', '9062', '5', '2020-01-03', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-03 03:16:16', '2020-01-03 03:16:16', NULL),
(273, NULL, 1, NULL, NULL, 'test-FactoryLabourLaw-1863230872.pdf', NULL, '2020-01-03', '9062', '5', '2020-01-03', 'ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-03 03:19:14', '2020-01-03 03:19:14', NULL),
(274, NULL, 2, NULL, NULL, '-shop_safety-1904751036.pdf', NULL, '2020-01-03', '29728', '3', '2020-01-03', 'လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-03 03:30:53', '2020-01-03 03:30:53', NULL),
(275, NULL, 2, NULL, NULL, 'testing shop-ShopLabourLaw-2034423515.pdf', NULL, '2020-01-03', '29728', '3', '2020-01-03', 'အလုပ်သမားဥပဒေစစ်ဆေးရေး', 21, 'သာမန်', '2020-01-03 03:33:04', '2020-01-03 03:33:04', NULL),
(276, 'စာအမှတ်', NULL, NULL, 'ရည်ညွှန်းစာအမှတ်', 'blue mountain-FactoryLawInstruction-2020-01-101874863060.pdf', 'မြောက်ပိုင်းခရိုင်', '2020-01-10', '23467', NULL, '2020-01-10', 'အကြောင်းအရာ', 27, 'သာမန်', '2020-01-09 21:59:17', '2020-01-09 21:59:17', 41),
(277, NULL, 1, NULL, NULL, 'Impact511331217.pdf', '3', '2020-01-14', '19747', '9', '2020-01-14', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-13 22:40:12', '2020-01-13 22:40:12', NULL),
(278, NULL, 1, NULL, NULL, 'Impact662550102.pdf', '3', '2020-01-14', '68252', '15', '2020-01-14', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ', 21, 'သာမန်', '2020-01-13 22:47:42', '2020-01-13 22:47:42', NULL),
(279, 'ddddd', NULL, NULL, 'd', 'ok dollar 2-ImpactInstruction-2020-01-14603867430.pdf', 'Ministry', '2020-01-14', '68252', NULL, '2020-01-14', 'dd', 21, 'သာမန်', '2020-01-14 00:08:26', '2020-01-14 00:08:26', 6);

-- --------------------------------------------------------

--
-- Table structure for table `economic_classes`
--

CREATE TABLE `economic_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `class_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economic_classes`
--

INSERT INTO `economic_classes` (`id`, `group_id`, `class_code`, `class_name`, `created_at`, `updated_at`) VALUES
(1, 1, '0111', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', '2019-09-12 21:51:35', '2019-09-12 21:51:35'),
(2, 1, '0112', 'ဆန်စပါးစိုက်ပျိုးခြင်း', '2019-09-12 21:52:06', '2019-09-12 21:52:06'),
(3, 1, '0113', 'ဟင်းသီးဟင်းရွက်နှင့်ဖရဲသီး၊ အမြစ်နှင့် ဥများစိုက်ပျိုးခြင်း', '2019-09-12 21:54:11', '2019-09-12 21:54:11'),
(4, 1, '0114', 'ကြံစိုက်ပျိုးခြင်း', '2019-09-12 21:54:47', '2019-09-12 21:54:47'),
(5, 1, '0115', 'ဆေးရွက်ကြီးစိုက်ပျိုးခြင်း', '2019-09-12 21:55:13', '2019-09-12 21:55:13'),
(6, 1, '0116', 'အမျှင်ပါကောက်ပဲသီးနှံများစိုက်ပျိုးခြင်း', '2019-09-12 21:55:54', '2019-09-12 21:55:54'),
(7, 1, '0119', 'အခြားနှစ်ရှည်ခံမဟုတ်သော ကောက်ပဲသီးနှံများ စိုက်ပျိုးခြင်း', '2019-09-12 21:56:43', '2019-09-12 21:56:43'),
(8, 2, '0121', 'စပျစ်သီးစိုက်ပျိုးခြင်း', '2019-09-12 21:57:26', '2019-09-12 21:57:26'),
(9, 2, '0122', 'အပူပိုင်းနှင့် အပူလျော့ပိုင်း သစ်သီးဝလံများ စိုက်ပျိုးခြင်း', '2019-09-12 21:58:25', '2019-09-12 21:58:25'),
(10, 2, '0123', 'သံပုရာမျိုးဝင် သစ်သီးဝလံများ စိုက်ပျိုးခြင်း', '2019-09-12 21:59:08', '2019-09-12 21:59:08'),
(11, 2, '0124', 'ပွင့်ရင်းသားသစ်သီးများနှင့် ဥသျှစ်သီးများ စိုက်ပျိုးခြင်း', '2019-09-12 21:59:59', '2019-09-12 21:59:59'),
(12, 2, '0125', 'အခြားသောသစ်ပင်၊ ချုံနွယ်သီးပင်နှင့် အခွံမာသီးပင်များ စိုက်ပျိုးခြင်း', '2019-09-12 22:01:58', '2019-09-12 22:01:58'),
(13, 2, '0126', 'ဆီထွက်သီနှံများ စိုက်ပျိုးခြင်း', '2019-09-12 22:02:13', '2019-09-12 22:02:13'),
(14, 2, '0127', 'အဖျော်ယမကာသုံး ကောက်ပဲသီးနှံများ စိုက်ပျိုးခြင်း', '2019-09-12 22:02:18', '2019-09-12 22:02:18'),
(15, 2, '0128', 'ဟင်းခတ်အမွှေးအကြိုင်နှင့် ဆေးဝါးဆိုင်ရာ ကောက်ပဲသီးနှံများ စိုက်ပျိုးခြင်း', '2019-12-06 02:34:02', '2019-12-06 02:34:02'),
(16, 2, '0129', 'အခြားနှစ်ရှည်ခံ ကောက်ပဲသီးနှံများ စိုက်ပျိုးခြင်း', '2019-12-06 02:35:28', '2019-12-06 02:35:28'),
(17, 3, '0130', 'အပင်မျိုးပွားခြင်း', '2019-12-06 02:36:19', '2019-12-06 02:36:19'),
(18, 4, '0141', 'ကျွှဲနွားများ မွေးမြူခြင်း', '2019-12-06 02:37:07', '2019-12-06 02:37:07'),
(19, 4, '0142', 'မြင်းနှင့်အခြားသော မြင်းသဏ္ဌာန်တူ တိရစ္ဆာန်များ မွေးမြူခြင်း', '2019-12-06 02:39:44', '2019-12-06 02:39:44'),
(20, 4, '0143', 'ကုလားအုတ်မွေးမြူခြင်း', '2019-12-06 02:40:32', '2019-12-06 02:40:32'),
(21, 4, '0144', 'သိုးနှင့်ဆိတ်များမွေးမြူခြင်း', '2019-12-06 02:41:13', '2019-12-06 02:41:13'),
(22, 4, '0145', '၀က်များမွေးမြူခြင်း', '2019-12-06 02:41:36', '2019-12-06 02:41:36'),
(23, 4, '0146', 'ကြက်၊ဘဲများမွေးမြူခြင်း', '2019-12-06 02:42:06', '2019-12-06 02:42:06'),
(24, 4, '0149', 'အခြားတိရိစ္ဆာန်များမွေးမြူခြင်း', '2019-12-06 02:43:25', '2019-12-06 02:43:25'),
(25, 5, '0150', 'စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်း', '2019-12-06 02:46:00', '2019-12-06 02:46:00'),
(26, 6, '0161', 'ကောက်ပဲသီးနှံထုတ်လုပ်မှု အထောက်အကူပြုလုပ်ငန်းများ', '2019-12-06 02:46:51', '2019-12-06 02:46:51'),
(27, 6, '0162', 'သားငါးထုတ်လုပ်မှု အထောက်အကူပြုလုပ်ငန်းများ', '2019-12-06 02:47:39', '2019-12-06 02:47:39'),
(28, 6, '0163', 'ကောက်ပဲသီးနှံ ရိတ်သိမ်းခြင်းလုပ်ငန်းများ', '2019-12-06 02:48:49', '2019-12-06 02:48:49'),
(29, 6, '0164', 'မျိုးပွားမျိုးစေ့ပြုလုပ်ခြင်း', '2019-12-06 03:32:41', '2019-12-06 03:32:41'),
(30, 7, '0170', 'အမဲလိုက်ခြင်း ၊ ထောင်ချောက်ဆင်ခြင်းနှင့် ဆက်စပ်ဝန်ဆောင်မှု လုပ်ငန်းများ', '2019-12-06 03:33:40', '2019-12-06 03:33:40'),
(31, 8, '0210', 'သစ်တောပြုစုရေးနှင့် အခြားသစ်တော လုပ်ငန်းများ', '2019-12-06 03:38:05', '2019-12-06 03:38:05'),
(32, 9, '0220', 'သစ်ထုတ်လုပ်ခြင်း', '2019-12-06 03:38:32', '2019-12-06 03:38:32'),
(33, 10, '0230', 'သစ်မဟုတ်သော သစ်တောထွက် ထွက်ကုန်များစုဆောင်းခြင်း', '2019-12-06 03:39:01', '2019-12-06 03:39:01'),
(34, 11, '0240', 'သစ်တောအထောက်အကူပြု ဝန်ဆောင်မှုများ', '2019-12-06 03:39:20', '2019-12-06 03:39:20'),
(35, 12, '0311', 'ပင်လယ်ငါးဖမ်းလုပ်ငန်း', '2019-12-06 03:40:50', '2019-12-06 03:40:50'),
(36, 12, '0312', 'ရေချိုငါးဖမ်းလုပ်ငန်း', '2019-12-06 03:41:27', '2019-12-06 03:41:27'),
(37, 13, '0321', 'ပင်လယ်အဏ္ဏဝါ စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်း', '2019-12-06 03:42:30', '2019-12-06 03:42:30'),
(38, 13, '0322', 'ရေချိုအဏ္ဏဝါ စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်း', '2019-12-06 03:43:03', '2019-12-06 03:43:03'),
(39, 15, '0510', 'သက်ရင့်ကျောက်မီးသွေးတူးဖော်ခြင်း', '2019-12-06 03:58:00', '2019-12-06 03:58:00'),
(40, 16, '0520', 'သက်နုကျောက်မီးသွေးတူးဖော်ခြင်း', '2019-12-06 03:58:32', '2019-12-06 03:58:32'),
(41, 17, '0610', 'ရေနံစိမ်းထုတ်ယူခြင်း', '2019-12-06 03:58:58', '2019-12-06 03:58:58'),
(42, 18, '0620', 'သဘာဝဓာတ်ငွေ့ထုတ်ယူခြင်း', '2019-12-06 03:59:21', '2019-12-06 03:59:21'),
(43, 19, '0710', 'သံရိုင်းတူးဖော်ခြင်း', '2019-12-06 04:00:19', '2019-12-06 04:00:19'),
(44, 20, '0721', 'ယူရေနီယမ်နှင့် သိုရီယမ်အရိုင်းများ တူးဖော်ခြင်း', '2019-12-06 04:30:20', '2019-12-06 04:30:20'),
(45, 20, '0729', 'အခြားသံမပါသတ္တုအရိုင်းများ တူးဖော်ခြင်း', '2019-12-06 04:31:07', '2019-12-06 04:31:07'),
(46, 21, '0810', 'ကျောက်၊သဲနှင့်ရွှံ့စေးတူးဖော်ခြင်း', '2019-12-06 04:31:40', '2019-12-06 04:31:40'),
(47, 22, '0891', 'ဓါတုဗေဒနှင့် ဓာတ်မြေသြဇာသတ္တုများ တူးဖော်ခြင်း', '2019-12-06 04:34:22', '2019-12-06 04:34:22'),
(48, 22, '0892', 'သစ်ဆွေးမြေထုတ်ယူခြင်း', '2019-12-06 04:35:12', '2019-12-06 04:35:12'),
(49, 22, '0893', 'ဆားထုတ်ယူခြင်း', '2019-12-06 04:35:52', '2019-12-06 04:35:52'),
(50, 22, '0899', 'အခြားသတ္တုတူးဖော်ခြင်းနှင့် ကျောက်တူးဖော်ခြင်း', '2019-12-06 04:37:03', '2019-12-06 04:37:03'),
(51, 23, '0910', 'ရေနံနှင့်သဘာဝဓါတ်ငွေ့ ထုတ်ယူမှုအထောက်အကူပြု လုပ်ငန်းများ', '2019-12-06 04:37:25', '2019-12-06 04:37:25'),
(52, 24, '0990', 'အခြားသတ္ထုတူးဖော်ခြင်းနှင့်ကျောက်တူးဖော်မှုအထောက်အကူပြု လုပ်ငန်းများ', '2019-12-06 04:37:49', '2019-12-06 04:37:49'),
(53, 25, '1010', 'ကြာရှည်ခံသားငါးများ ပြုလုပ်ခြင်းနှင့် စီမံပြုလုပ်ခြင်းများ', '2019-12-09 02:29:55', '2019-12-09 02:29:55'),
(54, 26, '1020', 'ကြာရှည်ခံငါး၊ အခွံမာရေသတ္တဝါနှင့် ခရုမျိုးများ စီမံပြုလုပ်ခြင်းများ', '2019-12-09 02:30:44', '2019-12-09 02:30:44'),
(55, 27, '1030', 'ကြာရှည်ခံသစ်သီးဝလံနှင့် ဟင်းသီးဟင်းရွက်များ စီမံပြုလုပ်ခြင်းများ', '2019-12-09 02:31:36', '2019-12-09 02:31:36'),
(56, 28, '1040', 'ဟင်းသီးဟင်းရွက်၊ သားငါးအဆီနှင့် စားသုံးဆီထုတ်လုပ်ခြင်း', '2019-12-09 02:32:04', '2019-12-09 02:32:04'),
(57, 95, '1050', 'နို့ထွက်ပစ္စည်းထုတ်လုပ်ခြင်း', '2019-12-09 02:35:09', '2019-12-09 02:35:09'),
(58, 29, '1061', 'အစေ့ကြိတ်ခွဲထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:35:54', '2019-12-09 02:35:54'),
(59, 29, '1062', 'ကော်မှုန့်နှင့် ကော်မှုန့်ထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:37:19', '2019-12-09 02:37:19'),
(60, 30, '1071', 'မုန့်ဖိုသုံးထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:38:16', '2019-12-09 02:38:16'),
(61, 30, '1072', 'သကြားထုတ်လုပ်ခြင်း', '2019-12-09 02:39:15', '2019-12-09 02:39:15'),
(62, 30, '1073', 'ကိုကိုး၊ ချောကလက်နှင့်သကြား မုန့်ချိုများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:42:30', '2019-12-09 02:42:30'),
(63, 30, '1074', 'ခေါက်ဆွဲပွ၊ ခေါက်ဆွဲနှင့်အလားတူ ခေါက်ဆွဲထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:45:37', '2019-12-09 02:45:37'),
(64, 30, '1075', 'အသင့်စားအသားနှင့်ဟင်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:46:51', '2019-12-09 02:46:51'),
(65, 30, '1079', 'အခြားစားသောက်ကုန် ထုတ်လုပ်ခြင်း', '2019-12-09 02:47:49', '2019-12-09 02:47:49'),
(66, 30, '1080', 'အသင့်စားတိရစ္ဆာန်အစာ ထုတ်လုပ်ခြင်း', '2019-12-09 02:48:28', '2019-12-09 02:48:28'),
(67, 32, '1101', 'အရက်ချက်ခြင်း၊ ပြုပြင်ခြင်းနှင့် ရောစပ်ခြင်း', '2019-12-09 02:49:38', '2019-12-09 02:49:38'),
(68, 32, '1102', 'ဝိုင်ထုတ်လုပ်ခြင်း', '2019-12-09 02:50:33', '2019-12-09 02:50:33'),
(69, 32, '1103', 'မုယောအရက်ပြင်းနှင့် မုယောထုတ်လုပ်ခြင်း', '2019-12-09 02:51:53', '2019-12-09 02:51:53'),
(70, 32, '1104', 'အချိုရည်ထုတ်လုပ်ခြင်း၊ သတ္တုရည်နှင့် အခြားသောရေသန့်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:52:48', '2019-12-09 02:52:48'),
(71, 33, '1200', 'ဆေးရွက်ကြီးနှင့်ဆက်စပ်ထုတ်ကုန်များထုတ်လုပ်ခြင်း', '2019-12-09 02:53:30', '2019-12-09 02:53:30'),
(72, 34, '1311', 'အထည်အလိပ်ချည်မျှင်များ ကြိုတင်ပြင်ဆင်ခြင်းနှင့် ချည်ငင်ခြင်း', '2019-12-09 02:55:06', '2019-12-09 02:55:06'),
(73, 34, '1312', 'အထည်အလိပ်များ ရက်လုပ်ခြင်း', '2019-12-09 02:58:25', '2019-12-09 02:58:25'),
(74, 34, '1313', 'အထည်အလိပ်များ အချောသပ်ခြင်း', '2019-12-09 02:59:08', '2019-12-09 02:59:08'),
(75, 35, '1391', 'သိုးမွှေးနှင့် ဇာထိုးချည်မျှင်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:59:54', '2019-12-09 02:59:54'),
(76, 35, '1392', 'အဆင်ဆန်း အထည်အလိပ်ပစ္စည်းများ ထုတ်လုပ်ခြင်း (အဝတ်အထည်မှ အပ)', '2019-12-09 03:00:57', '2019-12-09 03:00:57'),
(77, 35, '1393', 'ကော်ဇော်နှင့် ခင်နှီးထုတ်လုပ်ခြင်း', '2019-12-09 03:01:59', '2019-12-09 03:01:59'),
(78, 35, '1394', 'ကျစ်ကြိုး ၊ ကြိုး၊ လွန်ကြိုးနှင့် ပိုက်ကွန်ထုတ်လုပ်ခြင်း', '2019-12-09 03:03:03', '2019-12-09 03:03:03'),
(79, 35, '1399', 'အခြားအထည်အလိပ် ထုတ်လုပ်ခြင်း(အခြားမည်သည့်နေရာတွင်မှ သတ်မှတ်ချက် ဖော်ပြမှုမရှိသော)', '2019-12-09 03:04:22', '2019-12-09 03:04:22'),
(80, 36, '1410', 'အဝတ်အထည်ထုတ်လုပ်ခြင်း၊ သားမွှေးအထည်မှအပ', '2019-12-09 03:04:52', '2019-12-09 03:04:52'),
(81, 38, '1420', 'သားမွှေးပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:05:14', '2019-12-09 03:05:14'),
(82, 38, '1430', 'သိုးမွှေးနှင့်ဇာထိုးအထည်များ ထုတ်လုပ်ခြင်း', '2019-12-09 03:05:39', '2019-12-09 03:05:39'),
(83, 39, '1511', 'သားရေနယ်ခြင်းနှင့် အချောသတ်ခြင်း၊ သားမွှေးအချောသတ်ခြင်းနှင့် အရောင်ဆိုးခြင်း', '2019-12-09 03:10:15', '2019-12-09 03:10:15'),
(84, 39, '1512', 'ခရီးဆောင်အိတ်၊ လက်ဆွဲအိတ်၊ မြင်းကုန်းနှီးနှင့် သိုင်းကြိုး ထုတ်လုပ်ခြင်း', '2019-12-09 03:12:23', '2019-12-09 03:12:23'),
(85, 40, '1520', 'ဖိနပ်ထုတ်လုပ်ခြင်း', '2019-12-09 03:12:54', '2019-12-09 03:12:54'),
(86, 41, '1610', 'သစ်ခွဲခြင်းနှင့် အချောထည်ပြုလုပ်ခြင်း', '2019-12-09 03:13:35', '2019-12-09 03:13:35'),
(87, 42, '1621', 'သစ်ပါးလွှာချပ်နှင့် သစ်အခြေခံအထပ်သားများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:16:23', '2019-12-09 03:16:23'),
(88, 42, '1622', 'ဆောက်လုပ်ရေး လက်သမားသုံးပစ္စည်းနှင့် ကျည်းပေါင်များ ထုတ်လုပ်ခြင်း', '2019-12-09 03:17:17', '2019-12-09 03:17:17'),
(89, 42, '1623', 'သစ်သားသေတ္တာများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:18:17', '2019-12-09 03:18:17'),
(90, 42, '1629', 'အခြားသောသစ်ထုတ်ကုန်များ ထုတ်လုပ်ခြင်း၊ ဖော့၊ ကောက်ရိုးပစ္စည်းများနှင့် ဖွတ်မြီးထိုးပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:19:29', '2019-12-09 03:19:29'),
(91, 43, '1701', 'ပျော့ဖတ်၊ စက္ကူနှင့် စက္ကူချပ်ထုတ်လုပ်ခြင်း', '2019-12-09 03:21:03', '2019-12-09 03:21:03'),
(92, 43, '1702', 'ကတ်ထူစက္ကူနှင့် စက္ကူချပ်၊ စက္ကူနှင့် စက္ကူချပ်သေတ္တာများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:22:23', '2019-12-09 03:22:23'),
(93, 43, '1709', 'အခြားသော စက္ကူနှင့် စက္ကူချပ်ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 03:23:11', '2019-12-09 03:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `economic_divisions`
--

CREATE TABLE `economic_divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(11) NOT NULL,
  `division_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economic_divisions`
--

INSERT INTO `economic_divisions` (`id`, `section_id`, `division_code`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 1, '01', 'သီးနှံနှင့် တိရစ္ဆာန်မွေးမြူထုတ်လုပ်ခြင်း ၊ အမဲလိုက်ခြင်းနှင့် ဆက်စပ်လုပ်ငန်းများ', '2019-09-12 20:16:56', '2019-09-12 20:16:56'),
(2, 1, '02', 'သစ်တောဆိုင်ရာနှင့် သစ်ထုတ်ခြင်း', '2019-09-12 20:18:15', '2019-09-12 20:18:15'),
(3, 1, '03', 'ငါးဖမ်းခြင်းနှင့် ရေသတ္တဝါမွေးမြူခြင်း', '2019-09-12 20:19:10', '2019-09-12 20:19:10'),
(4, 2, '05', 'သက်ရင့်နှင့် သက်နုကျောက်မီးသွေးတူးဖော်ခြင်း', '2019-09-12 20:21:25', '2019-09-12 20:21:25'),
(5, 2, '06', 'ရေနံစိမ်းနှင့်သဘာဝဓါတ်ငွေ့များထုတ်ယူခြင်း', '2019-09-12 20:23:14', '2019-09-12 20:23:14'),
(6, 2, '07', 'သတ္တုရိုင်းများတူးဖော်ခြင်း', '2019-09-12 20:24:05', '2019-09-12 20:24:05'),
(7, 2, '08', 'အခြားသတ္တုတူးဖော်ခြင်းနှင့် ကျောက်တူးခြင်း', '2019-09-12 20:24:48', '2019-09-12 20:24:48'),
(8, 2, '09', 'သတ္တုတူးဖော်ခြင်းကို အထောက်အကူပြုသော ဝန်ဆောင်မှုလုပ်ငန်းများ', '2019-09-12 20:25:36', '2019-09-12 20:25:36'),
(9, 3, '10', 'အစားအစာထုတ်လုပ်ခြင်းလုပ်ငန်း', '2019-12-09 00:34:06', '2019-12-09 00:34:06'),
(10, 3, '11', 'အဖျော်ယမကာများ ထုတ်လုပ်ခြင်း', '2019-12-09 00:40:21', '2019-12-09 00:40:21'),
(11, 3, '12', 'ဆေးရွက်ကြီးနှင့် ပတ်သက်သောကုန်ပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 00:41:26', '2019-12-09 00:41:26'),
(12, 3, '13', 'အထည်အလိပ်လုပ်ငန်း', '2019-12-09 00:41:58', '2019-12-09 00:41:58'),
(13, 3, '14', 'ဝတ်ဆင်ရန်အထည်များထုတ်လုပ်ခြင်း', '2019-12-09 00:42:33', '2019-12-09 00:42:33'),
(14, 3, '15', 'သားရေနှင့် ပတ်သက်သောပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 00:43:08', '2019-12-09 00:43:08'),
(15, 3, '16', 'သစ်နှင့် သစ်အချောထည်(ပရိဘောဂမပါ) ထုတ်လုပ်ခြင်း', '2019-12-09 00:43:53', '2019-12-09 00:43:53'),
(16, 3, '17', 'စက္ကူနှင့် စက္ကူထုတ်ကုန်များ', '2019-12-09 00:44:27', '2019-12-09 00:44:27'),
(17, 3, '18', 'ပုံနှိပ်ခြင်းနှင့် မှတ်တမ်းတင်အချက်အလက်များကို ပြန်လည်ထုတ်လုပ်ခြင်း', '2019-12-09 00:45:16', '2019-12-09 00:45:16'),
(18, 3, '19', 'ကျောက်မီးသွေးနှင့် သန့်စင်ပြီးရေနံစိမ်းထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 00:46:18', '2019-12-09 00:46:18'),
(19, 3, '20', 'ဓါတုဗေဒပစ္စည်းများနှင့် ဓါတုဗေဒထုတ်ကုန်များထုတ်လုပ်ခြင်း', '2019-12-09 00:47:09', '2019-12-09 00:47:09'),
(20, 3, '21', 'ဆေးဝါးများ၊ ဆေးဝါးဆိုင်ရာဓါတုဗေဒပစ္စည်းများနှင့် ရုက္ခဗေဒဆိုင်ရာ ထုတ်ကုန်များထုတ်လုပ်ခြင်း', '2019-12-09 00:48:15', '2019-12-09 00:48:15'),
(21, 3, '22', 'ရာဘာနှင့် ပလပ်စတစ်ပစ္စည်းများထုတ်လုပ်မှု', '2019-12-09 00:48:54', '2019-12-09 00:48:54'),
(22, 3, '23', 'အခြားသတ္တုမဟုတ်သော တွင်းထွက်ပစ္စည်းများထုတ်လုပ်မှု', '2019-12-09 00:49:57', '2019-12-09 00:49:57'),
(23, 3, '24', 'အခြေခံသတ္တုပစ္စည်းများထုတ်လုပ်မှု', '2019-12-09 00:50:40', '2019-12-09 00:50:40'),
(24, 3, '25', 'စက်နှင့်စက်ပစ္စည်းများကရိယာမှအပသတ္တုသန့်စင်ပစ္စည်းများထုတ်လုပ်မှု', '2019-12-09 00:52:38', '2019-12-09 00:52:38'),
(25, 3, '26', 'ကွန်ပျူတာ၊ အီလက်ထရောနှစ်နှင့် အလင်းရောင်ဖြင့်ဆက်သွယ်သည့် လုပ်ငန်းသုံးပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 00:54:30', '2019-12-09 00:54:30'),
(26, 3, '27', 'လျှပ်စစ်ကိရိယာများထုတ်လုပ်ခြင်း', '2019-12-09 00:55:10', '2019-12-09 00:55:10'),
(27, 3, '28', 'စက်နှင့် စက်ပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 00:55:42', '2019-12-09 00:55:42'),
(28, 3, '29', 'မော်တော်ယာဉ်အမျိုးမျိုးနှင့် ပစ္စည်းတင်ယာဉ်များထုတ်လုပ်ခြင်း', '2019-12-09 00:56:40', '2019-12-09 00:56:40'),
(29, 3, '30', 'အခြားသယ်ယူပို့ဆောင်ရေးစက်ပစ္စည်းကိရိယာများထုတ်လုပ်ခြင်း', '2019-12-09 00:57:28', '2019-12-09 00:57:28'),
(30, 3, '31', 'ပရိဘောဂထုတ်လုပ်ခြင်း', '2019-12-09 00:57:56', '2019-12-09 00:57:56'),
(31, 3, '32', 'အခြားကုန်ပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 00:58:28', '2019-12-09 00:58:28'),
(32, 3, '33', 'စက်နှင့် စက်ကိရိယာများပြင်ဆင်ခြင်းနှင့် တပ်ဆင်ခြင်း', '2019-12-09 02:25:35', '2019-12-09 02:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `economic_groups`
--

CREATE TABLE `economic_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `group_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economic_groups`
--

INSERT INTO `economic_groups` (`id`, `division_id`, `group_code`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 1, '011', 'နှစ်ရှည်မဟုတ်သော သီးနှံပင်များ စိုက်ပျိုးခြင်း', '2019-09-12 21:08:06', '2019-09-12 21:08:06'),
(2, 1, '012', 'နှစ်ရှည်သီးနှံများ စိုက်ပျိူးခြင်း', '2019-09-12 21:09:02', '2019-09-12 21:09:02'),
(3, 1, '013', 'အပင်မျိုးပွားခြင်း', '2019-09-12 21:10:30', '2019-09-12 21:10:30'),
(4, 1, '014', 'တိရိစ္ဆာန်မွေးမြူရေးထုတ်လုပ်မှု', '2019-09-12 21:11:59', '2019-09-12 21:11:59'),
(5, 1, '015', 'စိုက်ပျိုးမွေးမြူရေးလုပ်ငန်း', '2019-09-12 21:12:47', '2019-09-12 21:12:47'),
(6, 1, '016', 'ရေနံစိမ်းနှင့် သဘာဝဓာတ်ငွေ့များ ထုတ်ယူခြင်း', '2019-09-12 21:18:25', '2019-09-12 21:18:25'),
(7, 1, '017', 'အမဲလိုက်ခြင်း ၊ ထောင်ချောက်ဆင်ခြင်းနှင့် ဆက်စပ်ဝန်ဆောင်မှု လုပ်ငန်းများ', '2019-09-12 21:23:08', '2019-09-12 21:23:08'),
(8, 1, '021', 'သစ်တောပြုစုရေးနှင့် အခြားသစ်တော လုပ်ငန်းများ', '2019-09-12 21:24:29', '2019-09-12 21:24:29'),
(9, 1, '022', 'သစ်ထုတ်လုပ်ခြင်း', '2019-09-12 21:25:07', '2019-09-12 21:25:07'),
(10, 1, '023', 'သစ်မဟုတ်သော သစ်တောထွက် ထွက်ကုန်များစုဆောင်းခြင်း', '2019-09-12 21:26:10', '2019-09-12 21:26:10'),
(11, 1, '024', 'သစ်တောအထောက်အကူပြု ဝန်ဆောင်မှုများ', '2019-09-12 21:26:56', '2019-09-12 21:26:56'),
(12, 1, '031', 'ငါးဖမ်းခြင်း', '2019-09-12 21:27:26', '2019-09-12 21:27:26'),
(13, 1, '032', 'ရေသတ္တဝါမွေးမြူခြင်းလုပ်ငန်း', '2019-09-12 21:32:32', '2019-09-12 21:32:32'),
(15, 4, '051', 'သက်ရင့်ကျောက်မီးသွေးတူးဖော်ခြင်း', '2019-12-06 03:46:18', '2019-12-06 03:46:18'),
(16, 4, '052', 'သက်နုကျောက်မီးသွေးတူးဖော်ခြင်း', '2019-12-06 03:47:03', '2019-12-06 03:47:03'),
(17, 5, '061', 'ရေနံစိမ်းထုတ်ယူခြင်း', '2019-12-06 03:47:44', '2019-12-06 03:47:44'),
(18, 5, '062', 'သဘာဝဓာတ်ငွေ့ထုတ်ယူခြင်း', '2019-12-06 03:48:28', '2019-12-06 03:48:28'),
(19, 6, '071', 'သံရိုင်းတူးဖော်ခြင်း', '2019-12-06 03:50:06', '2019-12-06 03:50:06'),
(20, 6, '072', 'သံမနွယ်သတ္ထုရိုင်းများ တူးဖော်ခြင်း', '2019-12-06 03:51:02', '2019-12-06 03:51:02'),
(21, 7, '081', 'ကျောက်၊သဲနှင့်ရွှံ့စေးတူးဖော်ခြင်း', '2019-12-06 03:51:56', '2019-12-06 03:51:56'),
(22, 7, '089', 'သီးခြားဖော်ပြမထားသော သတ္ထုတူးဖော်ခြင်းနှင့် ကျောက်တူးခြင်း', '2019-12-06 03:53:09', '2019-12-06 03:53:09'),
(23, 8, '091', 'ရေနံနှင့်သဘာဝဓါတ်ငွေ့ ထုတ်ယူမှုအထောက်အကူပြု လုပ်ငန်းများ', '2019-12-06 03:54:28', '2019-12-06 03:54:28'),
(24, 8, '099', 'အခြားသတ္ထုတူးဖော်ခြင်းနှင့်ကျောက်တူးဖော်မှုအထောက်အကူပြု လုပ်ငန်းများ', '2019-12-06 03:55:22', '2019-12-06 03:55:22'),
(25, 9, '101', 'ကြာရှည်ခံသားငါးများ ပြုလုပ်ခြင်းနှင့် စီမံပြုလုပ်ခြင်းများ', '2019-12-09 01:00:35', '2019-12-09 01:00:35'),
(26, 9, '102', 'ကြာရှည်ခံငါး၊ အခွံမာရေသတ္တဝါနှင့် ခရုမျိုးများ စီမံပြုလုပ်ခြင်းများ', '2019-12-09 01:01:31', '2019-12-09 01:01:31'),
(27, 9, '103', 'ကြာရှည်ခံသစ်သီးဝလံနှင့် ဟင်းသီးဟင်းရွက်များ စီမံပြုလုပ်ခြင်းများ', '2019-12-09 01:02:21', '2019-12-09 01:02:21'),
(28, 9, '104', 'ဟင်းသီးဟင်းရွက်၊ သားငါးအဆီနှင့် စားသုံးဆီထုတ်လုပ်ခြင်း', '2019-12-09 01:03:26', '2019-12-09 01:03:26'),
(29, 9, '106', 'ကြိတ်ခွဲပစ္စည်းနှင့် ကော်မှုန့်ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:04:20', '2019-12-09 01:04:20'),
(30, 9, '107', 'အခြားသော စားသောက်ကုန်ပစ္စည်းများ ထုတ်လုပ်မှု', '2019-12-09 01:05:04', '2019-12-09 01:05:04'),
(31, 9, '108', 'အသင့်စားတိရစ္ဆာန်အစာ ထုတ်လုပ်ခြင်း', '2019-12-09 01:05:42', '2019-12-09 01:05:42'),
(32, 10, '109', 'အဖျော်ယမကာများထုတ်လုပ်ခြင်း', '2019-12-09 01:10:07', '2019-12-09 01:10:07'),
(33, 11, '120', 'ဆေးရွက်ကြီးနှင့်ဆက်စပ်ထုတ်ကုန်များထုတ်လုပ်ခြင်း', '2019-12-09 01:11:17', '2019-12-09 01:11:17'),
(34, 12, '131', 'ချည်ငင်ခြင်း၊ ရက်လုပ်ခြင်းနှင့် အချောကိုင်လုပ်ငန်း', '2019-12-09 01:12:08', '2019-12-09 01:12:08'),
(35, 12, '139', 'အခြားအထည်အလိပ်များထုတ်လုပ်ခြင်း', '2019-12-09 01:12:50', '2019-12-09 01:12:50'),
(36, 13, '141', 'အဝတ်အထည်ထုတ်လုပ်ခြင်း၊ သားမွှေးအထည်မှအပ', '2019-12-09 01:13:48', '2019-12-09 01:13:48'),
(37, 13, '142', 'သားမွှေးပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:14:30', '2019-12-09 01:14:30'),
(38, 13, '143', 'သိုးမွှေးနှင့်ဇာထိုးအထည်များ ထုတ်လုပ်ခြင်း', '2019-12-09 01:15:04', '2019-12-09 01:15:04'),
(39, 14, '151', 'သားရေနယ်ခြင်း၊ လက်ကိုင်အိတ်၊ ကုန်းနှီး၊ ထိုင်ခုံနှင့် ယက္ကန်းနှပ်ဘောင်၌ ချည်သည့် သားရေကြိုးများ ထုတ်လုပ်ခြင်း၊ သားမွှေးဝတ်စုံများ ပြုလုပ်ခြင်း', '2019-12-09 01:16:47', '2019-12-09 01:16:47'),
(40, 14, '152', 'ဖိနပ်ထုတ်လုပ်ခြင်း', '2019-12-09 01:17:20', '2019-12-09 01:17:20'),
(41, 15, '161', 'သစ်ခွဲခြင်းနှင့် အချောထည်ပြုလုပ်ခြင်း', '2019-12-09 01:18:00', '2019-12-09 01:18:00'),
(42, 15, '162', 'သစ်သား၊ ဖော့၊ ကောက်ရိုးနှင့် အထပ်ထပ်ခေါက်ထားသော ပစ္စည်းများမှ ထုတ်လုပ်ခြင်း', '2019-12-09 01:19:16', '2019-12-09 01:19:16'),
(43, 16, '163', 'စက္ကူနှင့် စက္ကူထုတ်ကုန်များ', '2019-12-09 01:20:11', '2019-12-09 01:20:11'),
(44, 17, '181', 'ပုံနှိပ်ခြင်းနှင့် ပုံနှိပ်ခြင်းဖြင့်ဆက်စပ်နေသော ဝန်ဆောင်မှုများ', '2019-12-09 01:21:41', '2019-12-09 01:21:41'),
(45, 17, '182', 'မှတ်တမ်းတင်မီဒီယာများ ပြန်လည်ထုတ်ဝေခြင်း', '2019-12-09 01:22:42', '2019-12-09 01:22:42'),
(46, 18, '191', 'ကျောက်မီးသွေး မီးဖိုသုံး ထုတ်ကုန်ထုတ်လုပ်ခြင်း', '2019-12-09 01:24:08', '2019-12-09 01:24:08'),
(47, 18, '192', 'သန့်စင်ပြီး ရေနံထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 01:25:03', '2019-12-09 01:25:03'),
(48, 19, '201', 'အခြေခံဓါတုဗေဒပစ္စည်းများ၊ ဓါတ်မြေသြဇာများ၊ နိုက်ထရိုဂျင် ဒြပ်ပေါင်းများ ပလပ်စတစ်နှင့် မူလပုံစံတူရာဘာအတုများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:27:11', '2019-12-09 01:27:11'),
(49, 19, '202', 'အခြားဓါတုဗေဒပစ္စည်းများထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 01:28:19', '2019-12-09 01:28:19'),
(50, 19, '203', 'လူလုပ်အမျှင်ပါသော ပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 01:29:02', '2019-12-09 01:29:02'),
(51, 20, '210', 'ဆေးဝါး၊ ဆေးဖက်ဝင်ဓာတုဗေဒနှင့် ရုက္ခဗေဒဆိုင်ရာ ထုတ်ကုန်များထုတ်လုပ်ခြင်း', '2019-12-09 01:30:26', '2019-12-09 01:30:26'),
(52, 21, '221', 'ရာဘာပစ္စည်းများထုတ်လုပ်မှု', '2019-12-09 01:31:34', '2019-12-09 01:31:34'),
(53, 21, '222', 'ပလပ်စတစ်ထုတ်ကုန်များ ထုတ်လုပ်ခြင်း', '2019-12-09 01:32:40', '2019-12-09 01:32:40'),
(54, 22, '231', 'ဖန်နှင့်ဖန်ထည်ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:36:35', '2019-12-09 01:36:35'),
(55, 22, '239', 'သတ္တုမဟုတ်သော တွင်းထွက်ပစ္စည်းများ ထုတ်လုပ်မှု', '2019-12-09 01:37:23', '2019-12-09 01:37:23'),
(56, 23, '241', 'သံကြွပ်နှင့်သံမဏိ ထုတ်လုပ်ခြင်း', '2019-12-09 01:38:10', '2019-12-09 01:38:10'),
(57, 23, '242', 'အဖိုးတန်ရတနာနှင့် အခြားသောသံမပါဝင်သည့်သတ္တုများထုတ်လုပ်ခြင်း', '2019-12-09 01:39:24', '2019-12-09 01:39:24'),
(58, 23, '243', 'သတ္တုပုံလောင်းခြင်း', '2019-12-09 01:40:01', '2019-12-09 01:40:01'),
(59, 24, '251', 'တည်ဆောက်မှုဆိုင်ရာ သတ္တုပစ္စည်းများ၊ သတ္တုသိုလှောင်ကန်များ၊ သတ္တုကန်ကြီးနှင့် ရေနွေးငွေ့စက်ပစ္စည်းများထုတ်လုပ်ခြင်း', '2019-12-09 01:41:25', '2019-12-09 01:41:25'),
(60, 24, '252', 'လက်နက်နှင့် ခဲယမ်းမီးကျောက်ထုတ်လုပ်ခြင်း', '2019-12-09 01:42:17', '2019-12-09 01:42:17'),
(61, 24, '259', 'အခြားသန့်စင်ပြီးသတ္တုများ ထုတ်လုပ်ခြင်းနှင့် သတ္တုအစိတ်အပိုင်းများ တပ်ဆင်ဝန်ဆောင်မှုပေးခြင်း', '2019-12-09 01:43:20', '2019-12-09 01:43:20'),
(62, 25, '261', 'အီလက်ထရောနစ်အစိတ်အပိုင်းနှင့် ဘုတ်ချပ်ပြားများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:45:17', '2019-12-09 01:45:17'),
(63, 25, '262', 'ကွန်ပျူတာနှင့် အရံပစ္စည်းကိရိများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:46:48', '2019-12-09 01:46:48'),
(64, 25, '263', 'ဆက်သွယ်ရေးဆိုင်ရာ ပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:47:45', '2019-12-09 01:47:45'),
(65, 25, '264', 'အများသုံးအီလက်ထရောနစ် ထုတ်လုပ်ခြင်း', '2019-12-09 01:48:36', '2019-12-09 01:48:36'),
(66, 25, '265', 'တိုင်းတာခြင်း၊ စစ်ဆေးခြင်း၊ လမ်းကြောင်းပြခြင်းနှင့် ထိန်းချူပ်ကရိယာများ၊ နာရီနှင့် လက်ပတ်နာရီထုတ်လုပ်ခြင်း', '2019-12-09 01:50:42', '2019-12-09 01:50:42'),
(67, 25, '266', 'ဓာတ်ရောင်ခြည်ပေးခြင်း၊ အီလက်ထရောဆေးကုသမှုနှင့် အီလက်ထရောကုသခြင်း ပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:52:35', '2019-12-09 01:52:35'),
(68, 25, '267', 'စက္ခုအာရုံဆိုင်ရာ ကိရိယာများနှင့် ဓာတ်ပုံဆိုင်ရာပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:53:43', '2019-12-09 01:53:43'),
(69, 25, '268', 'သံလိုက်နှင့် စက္ခအာရုံမီဒီယာသုံးပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:54:50', '2019-12-09 01:54:50'),
(70, 26, '271', 'လျှပ်စစ်မော်တာ၊ လျှပ်စစ်ဓာတ်အားပေးစက်၊ ဓာတ်အားမြှင့်စက်နှင့် လျှပ်စစ်ဓာတ်အားဖြန့်ဝေခြင်း၊ ထိန်းချူပ်ကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:58:41', '2019-12-09 01:58:41'),
(71, 26, '272', 'ဘက်ထရီနှင့် ဓာတ်သိုအိုးများ ထုတ်လုပ်ခြင်း', '2019-12-09 01:59:28', '2019-12-09 01:59:28'),
(72, 26, '273', 'ဝါယာနှင့် ဝါယာပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:00:22', '2019-12-09 02:00:22'),
(73, 26, '274', 'လျှပ်စစ်အလင်းပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:01:27', '2019-12-09 02:01:27'),
(74, 26, '275', 'အိမ်သုံးပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:02:03', '2019-12-09 02:02:03'),
(75, 26, '279', 'အခြားလျှပ်စစ်ပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:02:32', '2019-12-09 02:02:32'),
(76, 27, '281', 'အထွေထွေလုပ်ငန်းသုံးစက်ကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:04:08', '2019-12-09 02:04:08'),
(77, 27, '282', 'သီးသန့်လုပ်ငန်းသုံးစက်ကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:04:46', '2019-12-09 02:04:46'),
(78, 28, '291', 'စက်တပ်ယာဉ်ထုတ်လုပ်ခြင်း', '2019-12-09 02:06:45', '2019-12-09 02:06:45'),
(79, 28, '292', 'စက်တပ်ယာဉ်ကိုယ်ထည်ထုတ်လုပ်ခြင်း၊ နောက်တွဲယာဉ်နှင့် နောက်တွဲ ယာဉ်ငယ်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:08:39', '2019-12-09 02:08:39'),
(80, 28, '293', 'စက်တပ်ယာဉ် အစိတ်အပိုင်းနှင့် တွဲဖက်ပစ္စည်း ထုတ်လုပ်ခြင်း', '2019-12-09 02:09:29', '2019-12-09 02:09:29'),
(81, 29, '301', 'သဘောၤနှင့် ရေပေါ်အဆောက်အအုံများ ဆောက်လုပ်ခြင်း', '2019-12-09 02:10:21', '2019-12-09 02:10:21'),
(82, 29, '302', 'မီးရထားစက်ခေါင်းနှင့် တွဲအမျိုးမျိုး ထုတ်လုပ်ခြင်း', '2019-12-09 02:11:23', '2019-12-09 02:11:23'),
(83, 29, '303', 'လေယာဉ်၊ အာကာသယာဉ်နှင့် ဆက်စပ်စက်ယန္တရားများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:12:40', '2019-12-09 02:12:40'),
(84, 29, '304', 'စစ်သုံးတိုက်ခိုက်ရေး ယန္တရားများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:14:13', '2019-12-09 02:14:13'),
(85, 29, '309', 'သယ်ယူပို့ဆောင်ရေးဆိုင်ရာ ကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:15:00', '2019-12-09 02:15:00'),
(86, 30, '310', 'ပရိဘောဂထုတ်လုပ်ခြင်း', '2019-12-09 02:15:43', '2019-12-09 02:15:43'),
(87, 31, '321', 'ကျောက်မျက်ရတနာ၊ ကျောက်မျက်ရတနာနှင့် ပတ်သက်သည့် ဆက်စပ်ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:16:43', '2019-12-09 02:16:43'),
(88, 31, '322', 'တူရိယာပစ္စည်းကိရိယာများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:17:20', '2019-12-09 02:17:20'),
(89, 31, '323', 'အားကစားကုန်ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:17:53', '2019-12-09 02:17:53'),
(90, 31, '324', 'ဂိမ်းနှင့် အရုပ်များ ထုတ်လုပ်ခြင်း', '2019-12-09 02:18:22', '2019-12-09 02:18:22'),
(91, 31, '325', 'ဆေးဖက်နှင့် သွားဖက်ဆိုင်ရာ ပစ္စည်းကိရိယာများ၊ ထောက်ပံ့ပစ္စည်းများ ထုတ်လုပ်ခြင်း', '2019-12-09 02:19:26', '2019-12-09 02:19:26'),
(92, 31, '329', 'အခြားကုန်ထုတ်လုပ်မှု (အခြား မည်သည့်နေရာတွင်မှ သတ်မှတ်ချက် ဖော်ပြမှုမရှိသော)', '2019-12-09 02:21:37', '2019-12-09 02:21:37'),
(93, 32, '331', 'သတ္တုအစစ်မဟုတ်သော ပစ္စည်းများ၊ စက်နှင့်စက်ကိရိယာများတပ်ဆင်ခြင်း', '2019-12-09 02:27:35', '2019-12-09 02:27:35'),
(94, 32, '332', 'စက်ရုံသုံးစက်ယန္တရားကိရိယာများတပ်ဆင်ခြင်း', '2019-12-09 02:28:21', '2019-12-09 02:28:21'),
(95, 9, '105', 'နို့ထွက်ပစ္စည်းထုတ်လုပ်ခြင်း', '2019-12-09 02:34:07', '2019-12-09 02:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `economic_sections`
--

CREATE TABLE `economic_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `Section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SectionName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economic_sections`
--

INSERT INTO `economic_sections` (`id`, `Section`, `SectionName`, `created_at`, `updated_at`) VALUES
(1, 'A', 'စိုက်ပျိုးရေး ၊ သစ်တော၊ တိရိစ္ဆာန်မွေးမြူခြင်းလုပ်ငန်းနှင့် ငါးမွေးမြူခြင်းလုပ်ငန်း', '2019-09-12 03:55:00', '2019-09-12 03:55:00'),
(2, 'B', 'သတ္တုတူးဖော်ခြင်းနှင့် ကျောက်တူးခြင်း', '2019-09-12 03:56:15', '2019-09-12 03:56:15'),
(3, 'C', 'ထုတ်လုပ်ခြင်း', '2019-09-12 03:56:53', '2019-09-12 03:56:53'),
(4, 'D', 'လျှပ်စစ်ဓါတ်အား ၊ ဓါတ်ငွေ့ ၊ ရေနွေးငွေ့နှင့် လေအေးပေးမှု', '2019-09-12 03:58:41', '2019-09-12 03:58:41'),
(11, 'F', 'ဆောက်လုပ်ရေးလုပ်ငန်းများ', '2019-12-06 02:09:47', '2019-12-06 02:09:47'),
(12, 'G', 'လက္ကားနှင့် လက်လီရောင်းဝယ်ရေး (မော်တော်ကား ၊ မော်တော်ဆိုင်ကယ် ပြင်ဆင်ခြင်း)', '2019-12-06 02:10:50', '2019-12-06 02:10:50'),
(13, 'H', 'သယ်ယူပို့ဆောင်ခြင်းနှင့် သိုလှောင်ခြင်း', '2019-12-06 02:11:52', '2019-12-06 02:11:52'),
(14, 'I', 'တည်းခိုခြင်းနှင့် အစားအသောက် ဝန်ဆောင်မှုလုပ်ငန်းများ', '2019-12-06 02:12:52', '2019-12-06 02:12:52'),
(15, 'J', 'သတင်းနှင့် ဆက်သွယ်ရေး', '2019-12-06 02:13:28', '2019-12-06 02:13:28'),
(16, 'K', 'ငွေရေးကြေးရေးနှင့် အာမခံဆိုင်ရာလုပ်ဆောင်မှုများ', '2019-12-06 02:14:50', '2019-12-06 02:14:50'),
(17, 'L', 'အိမ်၊ ခြံ၊ မြေ အကျိုးဆောင်လုပ်ငန်းများ', '2019-12-06 02:15:54', '2019-12-06 02:15:54'),
(18, 'M', 'ဥပဒေနှင့် စာရင်းဆိုင်ရာလုပ်ဆောင်မှုများ', '2019-12-06 02:16:34', '2019-12-06 02:16:34'),
(19, 'N', 'စီမံအုပ်ချုပ်ရေးနှင့် ထောက်ကူမှုဆိုင်ရာလုပ်ငန်းများ', '2019-12-06 02:17:21', '2019-12-06 02:17:21'),
(20, 'O', 'ပြည်သူအုပ်ချုပ်ရေးနှင့် ကာကွယ်ရေး၊ ပြည်သူလူထုလုံခြုံမှုနှင့် ဆိုင်သော မလုပ်မနေရစည်းမျဉ်းစည်းကမ်းများ', '2019-12-06 02:18:31', '2019-12-06 02:18:31'),
(21, 'P', 'ပညာရေး', '2019-12-06 02:19:01', '2019-12-06 02:19:01'),
(22, 'R', 'အနုပညာဆိုင်ရာပညာရပ်များ၊ ဖျော်ဖြေမှုများနှင့် ဖန်တီးမှုများ', '2019-12-06 02:19:49', '2019-12-06 02:19:49'),
(23, 'S', 'အခြားသော ဝန်ဆောင်မှုလုပ်ငန်းများ', '2019-12-06 02:20:14', '2019-12-06 02:20:14'),
(24, 'T', 'အိမ်ထောင်စုနှင့် စပ်ဆိုင်သောလုပ်ငန်းများဆောင်ရွက်သည့် အလုပ်ရှင်များ ခွဲခြားမရသော ကုန်ပစ္စည်းများ (သို့) ဝန်ဆောင်မှုများထုတ်လုပ်သည့် ကိုယ်ပိုင် အသုံးပြုသည့် အိမ်ထောင်စုဆိုင်ရာ လုပ်ငန်းဆောင်ရွက်ချက်များ', '2019-12-06 02:22:58', '2019-12-06 02:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` int(10) UNSIGNED NOT NULL,
  `FactoryId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoticeAddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactPhone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailAdd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FactoryAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NextYearProcess` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StreamHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GasHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotorHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WaterHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ElectricPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PreNoticeDate` date DEFAULT NULL,
  `MenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `WomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `DailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `DailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `PieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `PieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CDailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CDailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CPieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CPieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `AMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `AWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ADailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ADailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `APieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `APieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `MCmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `MCfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CAmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CAfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CCmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `CCfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `totalMaleWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `totalFemaleWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `StartDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeofFactory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TestingDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkTimeType` tinyint(3) UNSIGNED NOT NULL,
  `MToSTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToSTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeInOther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeoutOther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchStartTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchEndTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ManagerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerAddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerPhno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` date NOT NULL,
  `IndustryCategory_Id` int(11) DEFAULT NULL,
  `UsedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Investment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PropertyType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedOthers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoticeStatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `RawMaterials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Goods` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MonthlyAmounts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenMenWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenWomenWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerMenWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerWomenWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SalaryDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MinimumSalary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaximumSalary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OverTime` tinyint(3) UNSIGNED DEFAULT NULL,
  `OTPermit` tinyint(3) UNSIGNED DEFAULT NULL,
  `SafteySide` tinyint(3) UNSIGNED DEFAULT NULL,
  `Welfare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccidentRecordBook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyHealth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSB` tinyint(3) UNSIGNED DEFAULT NULL,
  `ManagementExpert` tinyint(3) UNSIGNED DEFAULT NULL,
  `SignatureName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SignatureRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `township_id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `self_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `FactoryId`, `FactoryName`, `NoticeAddress`, `ContactAddress`, `ContactPhone`, `ContactFax`, `EmailAdd`, `FactoryAddress`, `NextYearProcess`, `StreamHP`, `GasHP`, `MotorHP`, `WaterHP`, `WorkedPower`, `ElectricPower`, `PreNoticeDate`, `MenWorker`, `WomenWorker`, `DailyMenWorker`, `DailyWomenWorker`, `PieceMenWorker`, `PieceWomenWorker`, `CMenWorker`, `CWomenWorker`, `CDailyMenWorker`, `CDailyWomenWorker`, `CPieceMenWorker`, `CPieceWomenWorker`, `AMenWorker`, `AWomenWorker`, `ADailyMenWorker`, `ADailyWomenWorker`, `APieceMenWorker`, `APieceWomenWorker`, `MCmaleworker`, `MCfemaleworker`, `CAmaleworker`, `CAfemaleworker`, `CCmaleworker`, `CCfemaleworker`, `totalMaleWorker`, `totalFemaleWorker`, `StartDate`, `TypeofFactory`, `TestingDate`, `WorkTimeType`, `MToSTimein`, `MToSTimeout`, `MToFTimein`, `MToFTimeout`, `STimein`, `STimeout`, `MToFTimeInOther`, `MToFTimeoutOther`, `LunchStartTime`, `LunchEndTime`, `ManagerName`, `OwnerName`, `OwnerNrc`, `OwnerAddress`, `OwnerPhno`, `OwnerFax`, `OwnerEmail`, `OwnerPassport`, `RegDate`, `IndustryCategory_Id`, `UsedPower`, `Investment`, `PropertyType`, `Contract`, `ProducedProduct`, `ProducedOthers`, `NoticeStatus`, `RawMaterials`, `Goods`, `section_id`, `division_id`, `group_id`, `class_name`, `MonthlyAmounts`, `CitizenMenWorker`, `CitizenWomenWorker`, `ForeignerMenWorker`, `ForeignerWomenWorker`, `SalaryDate`, `MinimumSalary`, `MaximumSalary`, `OverTime`, `OTPermit`, `SafteySide`, `Welfare`, `AccidentRecordBook`, `SafetyHealth`, `SafetyRank`, `SSB`, `ManagementExpert`, `SignatureName`, `SignatureRank`, `SubscriberName`, `SubscriberRank`, `created_at`, `updated_at`, `region_id`, `district_id`, `township_id`, `zone_id`, `status`, `self_id`) VALUES
(35, '23599', 'အာရှသမာဓိအထည်ချုပ်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09400424444', NULL, NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '2019-09-11', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '၂', '၁၁၁', '၁၁၁', '၂၂၂', '၂၂', '၂', '၂', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၄၄၄', '၂၁၃', '2019-09-14', 'ကြီး', '2019-09-12', 1, NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, NULL, '01:00', '01:00', 'ဦးကြည်တင့်', 'ဦးမောင်မောင်ဦး', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', NULL, '2019-10-15', NULL, '၁၀၀Hp', 'LDI', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်တွင်း', 'ပြည်ပ', 1, 1, 1, '0111', NULL, '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', '2019-10-15 00:48:37', '2019-11-18 01:19:37', 9, 5, 3, 1, 0, NULL),
(37, '21655', 'Good Morining Company', 'အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ', 'ဆက်သွယ်ရန် လိပ်စာ', 'ဆက်သွယ်ရန် ဖုန်းနံပါတ်', 'ဆက်သွယ်ရန် ဖက်စ်', 'ဆက်သွယ်ရန် အီးမေး', 'address', NULL, '200k', NULL, NULL, NULL, '10000', 'epc', '2019-10-02', '၂၂', '၂၂', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '၃၉၆', '၃၄၁', '2019-10-11', 'ကြီး', '2019-10-01', 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'မှတ်ပုံတင်နံပါတ်', 'လိပ်စာ', 'ဖုန်းနံပါတ်', 'ဖက်စ်', 'အီးမေး', NULL, '2019-10-12', NULL, NULL, 'LDI', 'နိုင်ငံ', '0', 'ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)', NULL, 0, NULL, NULL, 1, 1, 1, '0111', 'တစ်လထုတ်လုပ်နိုင်မှုပမာဏ', '၂', '၂', '၂', '၂', 'လကုန်ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'ရှိ', 'ရှိ', NULL, 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', '2019-09-10 21:59:45', '2019-10-06 22:00:14', 9, 5, 10, 4, 1, NULL),
(38, '93969', 'InnWa Company', 'notice address', 'contact address', '09780106515', 'testing', NULL, 'address', NULL, '20 Hp', NULL, NULL, NULL, '10000', 'epc', '2019-01-01', '၂၂', '၃၃', '၂၂', '၃၃', '၂၂', '၃၃', '၆၆', '၇၇', '၆၆', '၇၇', '၆၆', '၇၇', '၄၄', '၅၅', '၄၄', '၅၅', '၄၄', '၅၅', NULL, NULL, NULL, NULL, NULL, NULL, '၃၉၆', '၃၄၁', '2019-10-01', 'ကြီး', '2019-01-01', 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', '၀၉၉၆၉၉၉၂၉၂၉', 'fax', 'owner@gmail.com', NULL, '2019-01-01', NULL, 'EPC', 'LDI', 'နိုင်ငံ', '0', 'main', 'other', 0, 'raw materials', 'goods', 1, 1, 1, '0111', '100000', '၂၂', '၂၂', '၂၂', '၂၂', 'လဆန်း(၂)ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'ရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', '2019-09-26 03:11:34', '2019-10-07 03:20:12', 9, 5, 10, 9, 1, NULL),
(43, '23467', 'blue mountain', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09400424444', NULL, NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '2019-09-11', '၂၀', '၂၂', '၂၂', '၂၂', '၂', '၁', '၁၁၁', '၁၁၁', '၂၂၂', '၂၂', '၂', '၂', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၄၄၂', '၂၁၂', '2019-09-14', 'ကြီး', '2019-09-12', 1, NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, NULL, '01:00', '01:00', 'ဦးမောင်ကျော်', 'ဦးမောင်မောင်', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', NULL, '2019-09-14', NULL, '၁၀၀Hp', 'LDI', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်တွင်း', 'ပြည်ပ', 1, 1, 1, '0111', NULL, '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', '2019-09-25 00:48:37', '2019-12-12 00:21:38', 9, 5, 10, 7, 0, NULL),
(44, '12890', 'သမာဓိ', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09400424444', NULL, NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '2019-09-11', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '၂', '၁၁၁', '၁၁၁', '၂၂၂', '၂၂', '၂', '၂', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၄၄၄', '၂၁၃', '2019-09-14', 'ကြီး', '2019-09-12', 1, NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, NULL, '01:00', '01:00', 'ဦးကျော်ဦး', 'ဦးမောင်အေး', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', NULL, '2019-09-14', NULL, '၁၀၀Hp', 'LDI', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်တွင်း', 'ပြည်ပ', 1, 1, 1, '0111', NULL, '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', '2019-09-25 00:48:37', '2019-10-16 01:27:29', 9, 5, 3, 1, 0, NULL),
(45, '36890', 'အာရှအချိုရည်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09400424444', NULL, NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '2019-09-11', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '၂', '၁၁၁', '၁၁၁', '၂၂၂', '၂၂', '၂', '၂', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၄၄၄', '၂၁၃', '2019-09-14', 'ကြီး', '2019-09-12', 1, NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, NULL, '01:00', '01:00', 'ဦးစိုးတင့်', 'ဦးမြအောင်', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', NULL, '2019-09-14', NULL, '၁၀၀Hp', 'LDI', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်တွင်း', 'ပြည်ပ', 1, 1, 1, '0111', NULL, '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', '2019-09-25 00:48:37', '2019-10-16 01:27:29', 9, 5, 3, 1, 0, NULL),
(46, '49005', 'Shwe Pyi Nan', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09400424444', NULL, NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '2019-09-11', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '၂', '၁၁၁', '၁၁၁', '၂၂၂', '၂၂', '၂', '၂', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၄၄၄', '၂၁၃', '2019-09-14', 'ကြီး', '2019-09-12', 1, NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, NULL, '01:00', '01:00', 'ဦးဖြိုးကို', 'ဦးလှအောင်', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', NULL, '2019-09-14', NULL, '၁၀၀Hp', 'LDI', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်တွင်း', 'ပြည်ပ', 1, 1, 1, '0111', NULL, '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', 0, 0, 0, '0', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', '2019-09-25 00:48:37', '2019-10-16 01:27:29', 9, 5, 3, 1, 0, NULL),
(50, '3190', 'ok dollar co ltd', 'kamaryut junciton square', 'junction square kamaryut', '097882002', NULL, NULL, 'address', NULL, 'ရေနွေးငွေ့ဖြင့်လည်သောစက်', NULL, NULL, NULL, NULL, NULL, '2018-01-01', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '၂၀', '၂၀', '2019-02-01', 'ကြီး', '2019-01-01', 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'manager nane', 'owner  name', 'owner nrc', 'owner address', 'owner phone no', NULL, NULL, NULL, '2018-01-01', NULL, NULL, 'LDI', 'သမဝါယမ', '0', NULL, NULL, 0, NULL, NULL, 1, 1, 1, '0111', NULL, '၆', '၆', '0', '0', 'လကုန်ရက်', '200000', '600000', 0, 0, 0, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, NULL, NULL, 'စာရင်းသွင်းသူ အမည်', 'HR manager', '2019-11-12 21:32:32', '2019-11-12 21:32:32', 9, 5, 3, 1, 0, NULL),
(52, '68252', 'ok dollar 2', 'kamaryut junciton square', 'junction square kamaryut', '097882002', NULL, NULL, 'address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-01', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '၂၀', '၂၀', '2019-02-01', 'ကြီး', '2019-01-01', 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'manager nane', 'owner  name', 'owner nrc', 'owner address', 'owner phone no', NULL, NULL, NULL, '2018-01-01', NULL, NULL, 'LDI', 'သမဝါယမ', '0', NULL, NULL, 0, NULL, NULL, 1, 1, 1, '0111', NULL, '0', '0', '0', '0', 'လကုန်ရက်', '200000', '600000', 0, 0, 0, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, NULL, NULL, 'စာရင်းသွင်းသူ အမည်', 'HR manager', '2019-11-12 21:36:55', '2019-11-13 00:36:35', 9, 5, 3, 1, 1, 3),
(55, '92981', 'Asia Co Ltd', 'address', 'address', '097801037383', NULL, NULL, 'address', NULL, NULL, NULL, NULL, NULL, NULL, 'epc', '2019-01-01', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '0', '0', '0', '0', '0', '0', '၁၂', '၁၂', '2019-01-01', 'ကြီး', '2019-01-01', 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'ဦးမော', 'ဦးစိုး', '၅ ခဥန(နိုင) ၂၀၀၄၄', 'addres', '099292920', 'fax', NULL, NULL, '2019-01-01', NULL, NULL, 'LDI', 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, 1, 1, 1, '0111', NULL, '၁၂', '၁၂', '0', '0', 'လကုန်ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, 0, 0, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', '2019-11-17 21:26:36', '2019-11-17 22:03:41', 9, 5, 3, 1, 1, NULL),
(59, '9062', 'test', 'address', 'address', '09292', NULL, NULL, 'address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-01', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '၁၃၂', '၁၃၂', '2019-11-20', 'ကြီး', '2019-11-19', 0, '01:00', '01:00', NULL, NULL, NULL, NULL, NULL, NULL, '01:00', '02:00', 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', 'လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်', 'လုပ်ငန်းပိုင်ရှင် ဖက်စ်', NULL, NULL, '2019-01-01', NULL, NULL, 'LDI', 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, 1, 1, 1, '0111', NULL, '၁၀', '၈', '0', '0', 'လကုန်ရက်', '၂၂၂', '၂၂၂', 0, 0, 0, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, 'ိ', 'ိ', NULL, NULL, '2019-11-18 21:02:40', '2020-01-03 02:52:12', 9, 4, 21, NULL, 1, NULL),
(61, '60799', 'overSeaCompany Ltdrddddd', 'address', 'contact address', '097800300', NULL, NULL, 'address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-12', '၂၂', '၂၂', '၂၂', '၂၂', '0', '0', '၂၂', '၂၂', '၂၂', '၂၂', '0', '0', '၂၂', '၂၂', '၂၂', '၂၂', '0', '0', '0', '0', '0', '0', '0', '0', '၁၃၂', '၁၁၂', '2019-12-12', 'ကြီး', NULL, 0, '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, NULL, '00:00', '13:00', 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', 'လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်', NULL, NULL, NULL, '2019-12-26', NULL, NULL, 'LDI', 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, 1, 1, 1, '0111', NULL, '၉၈', '၇၈', '၂၂', '၂၂', 'လကုန်ရက်', '200000', '5000000', 0, 0, 0, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', '2019-12-03 21:54:29', '2019-12-09 22:41:46', 9, 5, 3, 1, 0, NULL),
(62, '61125', 'Best Hubo အထည်ချုပ်', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', '၀၉၅၆၈၉၆၄၄', NULL, NULL, 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', 'အထည်ချုပ်', '၃', '၅', NULL, NULL, 'တစ်လ အထည်ရေ (၃၀၀၀၀)', 'EPC ၊ ကိုယ်ပိုင်မီးစက်', '2019-12-04', '2', '2', '2', '2', '0', '5', '2', '22', '2', '0', '0', '0', '2', '2', '2', '2', '5', '5', '0', '0', '0', '0', '0', '0', '0', '0', '2020-01-02', 'ကြီး', NULL, 1, NULL, NULL, '08:00', '17:00', '08:00', '00:00', NULL, NULL, NULL, NULL, 'ဒေါ်လဲ့လဲ့', 'Mr.Yan Xiao Ming', '၁၂/အစန(နိုင်)၂၃၅၅၉', 'လှိုင်မြို့နယ်', '၀၉၈၇၆၅၄၄', NULL, NULL, NULL, '2020-01-02', NULL, '300hp', 'FDI', 'ပုဂ္ဂလိက', '1', 'အဝတ်အထည်', NULL, 0, 'ပြည်ပ', 'ပြည်ပ', 3, 12, 35, '1399', NULL, '၁၅', '၄၀', '0', '0', 'လဆန်း(၅)ရက်', '၁၄၄၀၀၀', '၈၀၀၀၀၀', 0, 0, 1, '0', 'ရှိ', 'မရှိ', NULL, 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ(အလုပ်ရုံ)', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ(အလုပ်ရုံ)', '2019-12-11 22:10:22', '2020-01-02 02:21:25', 9, 5, 10, 7, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `factoryinspectioninforms`
--

CREATE TABLE `factoryinspectioninforms` (
  `cid` int(10) UNSIGNED NOT NULL,
  `factory_id` int(11) NOT NULL,
  `inspectedtimes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectiontype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectiondate` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectiontime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastinspectiondate` date DEFAULT NULL,
  `workerownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerowneraddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owneraddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registerownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workertotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manageraddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intervieweename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweerank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producttype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryaddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobopen` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closeddate` date DEFAULT NULL,
  `Mmenworker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mwomenworker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dmenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dwomenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pmenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pwomenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cmenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cwomenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DCmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DCfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCmaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCfemaleworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionid` int(11) NOT NULL,
  `inspection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectorrank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factoryinspectioninforms`
--

INSERT INTO `factoryinspectioninforms` (`cid`, `factory_id`, `inspectedtimes`, `inspectiontype`, `inspectiondate`, `inspectiontime`, `lastinspectiondate`, `workerownername`, `workerowneraddress`, `ownername`, `owneraddress`, `registerownername`, `workertotal`, `managername`, `manageraddress`, `intervieweename`, `intervieweerank`, `machinetype`, `horsepower`, `producttype`, `productquantity`, `factoryaddress`, `jobopen`, `closeddate`, `Mmenworker`, `Mwomenworker`, `Dmenworker`, `Dwomenworker`, `Pmenworker`, `Pwomenworker`, `Cmenworker`, `Cwomenworker`, `MAmaleworker`, `MAfemaleworker`, `DAmaleworker`, `DAfemaleworker`, `PAmaleworker`, `PAfemaleworker`, `CAmaleworker`, `CAfemaleworker`, `MCmaleworker`, `MCfemaleworker`, `DCmaleworker`, `DCfemaleworker`, `PCmaleworker`, `PCfemaleworker`, `CCmaleworker`, `CCfemaleworker`, `inspectionid`, `inspection_name`, `inspectorrank`, `created_at`, `updated_at`) VALUES
(4, 23467, 'ပထမအကြိမ်', 'ပုံမှန်', '2020-01-02', NULL, NULL, 'ဦးမောင်မောင်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးမောင်မောင်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးမောင်မောင်', NULL, 'ဦးမောင်ကျော်', 'မန်နေဂျာလိပ်စာ', NULL, NULL, NULL, NULL, 'အနောက်တိုင်းဝတ်စုံ and ကုတ်', NULL, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', '0', NULL, '၂၀', '၂၂', '၂၂', '၂၂', '၂', '၁', '၁၁၁', '၁၁၁', '၃၃', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂၂၂', '၂၂', '၂', '၂', '၂', '၂', 21, 'U Aung', 'Rank', '2020-01-01 22:03:00', '2020-01-01 22:03:00'),
(5, 9062, 'ပထမအကြိမ်', 'ပုံမှန်', '2020-01-01', NULL, NULL, 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', 'ပိုင်ရှင်အမည်', 'ပိုင်ရှင်လိပ်စာ', 'လုပ်ငန်းပိုင်ရှင်အမည်', NULL, 'မန်နေဂျာအမည်', 'မန်နေဂျာလိပ်စာ', NULL, NULL, NULL, NULL, 'null and null', NULL, 'address', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 21, 'စစ်ဆေးရေးအရာရှိအမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-03 02:52:12', '2020-01-03 02:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `factory_closes`
--

CREATE TABLE `factory_closes` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalWorker` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoticeDate` date NOT NULL,
  `CloseDate` date DEFAULT NULL,
  `DesCloseFactory` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachfile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_closes`
--

INSERT INTO `factory_closes` (`id`, `factory_id`, `FactoryAddress`, `totalWorker`, `NoticeDate`, `CloseDate`, `DesCloseFactory`, `attachfile`, `created_at`, `updated_at`) VALUES
(5, '23599', 'စက်မှန်ဇုန်(၁) ၊ အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '၇၃၇', '2019-09-14', '2019-09-25', 'လုပ်ငန်းသစ်ပြောင်းရန်', NULL, '2019-09-25 00:53:33', '2019-09-25 00:53:33'),
(6, '21655', 'စက်မှန်ဇုန်(၁) ၊ address', '၇၃၇', '2019-10-01', '2019-10-10', NULL, NULL, '2019-10-06 22:00:14', '2019-10-06 22:00:14'),
(7, '93969', 'ဝါးတရာစက်မှုဇုန် ၊ address', '၇၃၇', '2019-10-09', '2019-10-11', 'aa', NULL, '2019-10-07 03:20:23', '2019-10-07 03:20:23'),
(8, '23599', 'ရွှေလင်ပန်းစက်မှုဇုန် ၊ အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊', '၆၅၇', '2019-10-01', '2019-10-25', 's', 'C:\\xampp1\\tmp\\phpF674.tmp', '2019-10-16 01:27:29', '2019-10-16 01:27:29'),
(9, '68252', 'ရွှေလင်ပန်းစက်မှုဇုန် ၊ address', '၄၀', '2019-11-14', '2019-11-09', 'no reason', NULL, '2019-11-13 00:36:35', '2019-11-13 00:36:35'),
(11, '92981', 'ရွှေလင်ပန်းစက်မှုဇုန် ၊ address', '၂၄', '2019-11-19', '2019-11-20', 'no reason', NULL, '2019-11-17 22:03:41', '2019-11-17 22:03:41'),
(12, '9062', '၊ address', '၁၈', '2019-12-10', '2019-12-31', 'dd', NULL, '2019-12-09 20:59:13', '2019-12-09 20:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `factory_document_attachs`
--

CREATE TABLE `factory_document_attachs` (
  `id` int(10) UNSIGNED NOT NULL,
  `FactoryId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerSentNotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkingTimeNotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkStartInform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MICLicense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CompanyNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IndustryLicense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Import_Export_License` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Municipal_License` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_document_attachs`
--

INSERT INTO `factory_document_attachs` (`id`, `FactoryId`, `attach_path`, `OwnerSentNotice`, `WorkingTimeNotice`, `WorkStartInform`, `ec_contract`, `MICLicense`, `CompanyNrc`, `IndustryLicense`, `Import_Export_License`, `Municipal_License`, `other_license1`, `other_license2`, `other_license3`, `other_license4`, `other_license5`, `other_license6`, `created_at`, `updated_at`) VALUES
(22, '88821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'other_license6-09.25.19.pdf', '2019-09-24 21:29:17', '2019-09-24 21:29:17'),
(23, '85465', NULL, 'OwnerSentNotice-09.25.19.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24 21:56:43', '2019-09-24 21:56:43'),
(24, '23599', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-25 00:48:37', '2019-09-25 00:48:37'),
(25, '76573', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-06 21:43:03', '2019-10-06 21:43:03'),
(26, '21655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-06 21:59:45', '2019-10-06 21:59:45'),
(27, '93969', NULL, 'OwnerSentNotice-10.07.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-07 03:11:34', '2019-10-07 03:11:34'),
(28, '44789', NULL, 'OwnerSentNotice-10.15.19.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 08:06:52', '2019-10-15 08:06:52'),
(29, '98256', NULL, 'OwnerSentNotice-10.16.19.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 20:16:33', '2019-10-15 20:16:33'),
(30, '76887', NULL, 'OwnerSentNotice-10.16.19.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 22:42:28', '2019-10-15 22:42:28'),
(31, '89159', NULL, 'OwnerSentNotice-11.13.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-12 21:33:09', '2019-11-12 21:33:09'),
(32, '68252', NULL, 'OwnerSentNotice-11.13.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-12 21:36:55', '2019-11-12 21:36:55'),
(33, '92981', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 21:26:36', '2019-11-17 21:26:36'),
(34, '13964', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 21:42:28', '2019-11-17 21:42:28'),
(35, '9062', NULL, 'OwnerSentNotice-11.19.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-18 21:02:41', '2019-11-18 21:02:41'),
(36, '12809', NULL, 'OwnerSentNotice-11.19.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-19 01:23:56', '2019-11-19 01:23:56'),
(37, '60799', NULL, 'OwnerSentNotice-12.04.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-03 21:54:29', '2019-12-03 22:29:25'),
(38, '61125', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-11 22:10:22', '2019-12-11 22:10:22'),
(39, '23467', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-12 00:21:38', '2019-12-12 00:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `factory_histories`
--

CREATE TABLE `factory_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `FactoryId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoticeAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactPhone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailAdd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NextYearProcess` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StreamHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GasHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotorHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WaterHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ElectricPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceMenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceWomenWorker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StartDate` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TestingDate` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkTimeType` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToSTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToSTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ManagerName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPhno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkTypeId` int(11) DEFAULT NULL,
  `UsedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PropertyType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedOthers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoticeStatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `Goods` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RawMaterials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MonthlyAmounts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SalaryDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MinimumSalary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaximumSalary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkingTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OverTime` tinyint(3) UNSIGNED DEFAULT NULL,
  `OTPermit` tinyint(3) UNSIGNED DEFAULT NULL,
  `SafteySide` tinyint(3) UNSIGNED DEFAULT NULL,
  `Welfare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSB` tinyint(3) UNSIGNED DEFAULT NULL,
  `ManagementExpert` tinyint(3) UNSIGNED DEFAULT NULL,
  `SignatureName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SignatureRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPassport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchStartTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchEndTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccidentRecordBook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyHealth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeInOther` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeoutOther` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeofFactory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PreNoticeDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FactoryAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_histories`
--

INSERT INTO `factory_histories` (`id`, `FactoryId`, `FactoryName`, `NoticeAddress`, `ContactAddress`, `ContactPhone`, `ContactFax`, `EmailAdd`, `NextYearProcess`, `StreamHP`, `GasHP`, `MotorHP`, `WaterHP`, `WorkedPower`, `ElectricPower`, `MenWorker`, `WomenWorker`, `DailyMenWorker`, `DailyWomenWorker`, `PieceMenWorker`, `PieceWomenWorker`, `CMenWorker`, `CWomenWorker`, `CDailyMenWorker`, `CDailyWomenWorker`, `CPieceMenWorker`, `CPieceWomenWorker`, `AMenWorker`, `AWomenWorker`, `ADailyMenWorker`, `ADailyWomenWorker`, `APieceMenWorker`, `APieceWomenWorker`, `StartDate`, `TestingDate`, `WorkTimeType`, `MToSTimein`, `MToSTimeout`, `MToFTimein`, `MToFTimeout`, `STimein`, `STimeout`, `LunchTime`, `ManagerName`, `OwnerName`, `OwnerNrc`, `OwnerAddress`, `OwnerPhno`, `OwnerFax`, `OwnerEmail`, `RegDate`, `WorkTypeId`, `UsedPower`, `PropertyType`, `Contract`, `ProducedProduct`, `ProducedOthers`, `NoticeStatus`, `Goods`, `RawMaterials`, `MonthlyAmounts`, `CitizenMenWorker`, `CitizenWomenWorker`, `ForeignerMenWorker`, `ForeignerWomenWorker`, `SalaryDate`, `MinimumSalary`, `MaximumSalary`, `WorkingTime`, `OverTime`, `OTPermit`, `SafteySide`, `Welfare`, `SSB`, `ManagementExpert`, `SignatureName`, `SignatureRank`, `OwnerPassport`, `LunchStartTime`, `LunchEndTime`, `Investment`, `section_id`, `division_id`, `group_id`, `class_name`, `SubscriberName`, `SubscriberRank`, `AccidentRecordBook`, `SafetyHealth`, `SafetyRank`, `MToFTimeInOther`, `MToFTimeoutOther`, `TypeofFactory`, `PreNoticeDate`, `FactoryAddress`, `region_id`, `district_id`, `township_id`, `zone_id`, `created_at`, `updated_at`) VALUES
(6, '88821', 'VIVO Mobile Company', 'အင်းစိန်', 'အင်းစိန်', '၀၉-၃၉၃၉၀၀၂', '2344', NULL, NULL, '200 Lb', NULL, NULL, NULL, '၁၁၀၀၀', 'epc', '၂၂၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '0', '0', '၂၂၂', '၂၂', '၂၂', '၂၂', '၂၂', '၂', '2019-01-01', '2019-01-01', '0', '08:00', '16:00', NULL, NULL, NULL, NULL, NULL, 'manager', 'ဦးမောင်', '၅/(ခဥန)(နိုင်)၁၀၂၂၀၀', 'ဗဟန်း', '၀၉-၃၃၄၄၂၂', '၂၃၄၄၄', NULL, '2019-01-01', NULL, 'လျှပ်စစ်', 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, '၂၁၁', '၁၁', '၃၃', '၂၂', '0', 'လကုန်ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀ကျပ်', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, NULL, 'LDI', '1', '1', '1', '0111', NULL, NULL, 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ကြီး', '2019-02-02', 'jo kone street', '9', '5', '5', NULL, '2019-09-24 21:29:17', '2019-09-24 21:29:17'),
(7, '85465', 'blue mountain', 'အင်းစိန်မြို့နယ်', 'အင်းစိန်မြို့နယ်', '09876545', '12345', 'bluemountain@gmail.com', 'အချိုရည်', '10HP', NULL, NULL, NULL, '၁လ ၁၀၀၀ပါကင်', 'epc', '၁၀', '၂၀', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-09-25', '2019-09-26', '0', '07:00', '05:30', NULL, NULL, NULL, NULL, NULL, 'U Hla', 'Mr Chou', '၀၉၈၇၆၅၄၃', 'အင်းစိန်', '0923232323', '098765', NULL, '2019-09-25', NULL, 'epc', 'နိုင်ငံခြား', '0', 'အချိုရည်', NULL, 0, 'တရုတ်', 'မြန်မာ', '၁၀၀၀', '၁၀၀', '၅၀', '0', '0', 'လဆန်း(၂)ရက်', '၂၀၀၀', '၄၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'Daw Chan Myae Thu', 'ဦးစီး', '8297800', NULL, NULL, 'LDI', '1', '1', '2', '0121', 'Daw Chan Myae Thu', 'ဦးစီး', 'ရှိ', 'ရှိ', 'မန်နေဂျာ', NULL, NULL, 'ကြီး', '2019-09-18', 'အင်းစိန်မြို့နယ်', '9', '5', '5', NULL, '2019-09-24 21:56:43', '2019-09-24 21:56:43'),
(8, '23599', 'အာရှသမာဓိအထည်ချုပ်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '09 422522096', NULL, NULL, 'အထည်ချုပ်လုပ်ခြင်း', '10HP', '500KVA', '350KVA', NULL, 'တစ်လ ၅၀၀၀၀', 'EPC', '0', '0', '၁၃၉', '၁၆၅၂', '၆၉', '၅၃', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-09-14', '2019-09-12', '1', NULL, NULL, '08:00', '16:30', '08:00', '12:00', NULL, 'ဦးမောင်မောင်ဦး', 'ဦးမောင်မောင်ဦး', '၁၂/အစန(နိုင်)၃၄၄၈၇', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '0923232323', '098765', 'asiathamardi@gmail.com', '2019-09-14', NULL, '၁၀၀Hp', 'ပုဂ္ဂလိက', '1', 'အနောက်တိုင်းဝတ်စုံ', 'ကုတ်', 0, 'ပြည်ပ', 'ပြည်တွင်း', 'အထည် (၅၀၀၀၀)', '၂၀၈', '၁၇၀၅', '၈', '၂', 'လကုန်ရက်', '၁၄၄၀၀', '၅၀၀၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', NULL, NULL, NULL, 'LDI', NULL, NULL, NULL, NULL, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ', 'မရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', NULL, NULL, 'ကြီး', '2019-09-11', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '9', '5', '10', '4', '2019-09-25 00:48:37', '2019-09-25 00:48:37'),
(9, '76573', 'Hello World Company', 'notice address', 'address', '09400529525', NULL, 'hello@gmail.com', NULL, '200klah', NULL, NULL, NULL, '2000', 'epc', '၂', '၃', '၂', '၃', '0', '0', '၆', '၇', '၆', '၇', '0', '0', '၄', '၅', '၄', '၅', '0', '0', '2019-01-01', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'Manager Name', 'Owner Name', '5/khaoona(N)34349', 'Owner Address', '095888599', 'fax', 'owner@gmail.com', '2019-01-01', NULL, 'epc', 'နိုင်ငံ', '0', 'main', 'other', 0, 'goods', 'raw materials', '10000', '0', '0', '0', '0', 'လကုန်ရက်', '200000', '5000000', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '5', '10', '9', '2019-10-06 21:43:03', '2019-10-06 21:43:03'),
(10, '21655', 'test', 'အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ', 'ဆက်သွယ်ရန် လိပ်စာ', 'ဆက်သွယ်ရန် ဖုန်းနံပါတ်', 'ဆက်သွယ်ရန် ဖက်စ်', 'ဆက်သွယ်ရန် အီးမေး', NULL, '200k', NULL, NULL, NULL, '10000', 'epc', '၂၂', '၂၂', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-10-11', '2019-10-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'မှတ်ပုံတင်နံပါတ်', 'လိပ်စာ', 'ဖုန်းနံပါတ်', 'ဖက်စ်', 'အီးမေး', '2019-10-12', NULL, NULL, 'နိုင်ငံ', '0', 'ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)', NULL, 0, NULL, NULL, 'တစ်လထုတ်လုပ်နိုင်မှုပမာဏ', '၂', '၂', '၂', '၂', 'လကုန်ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ကြီး', '2019-10-02', 'address', '9', '5', '10', '4', '2019-10-06 21:59:45', '2019-10-06 21:59:45'),
(11, '93969', 'testing', 'notice address', 'contact address', '09780106515', 'testing', NULL, NULL, '20 Hp', NULL, NULL, NULL, '10000', 'epc', '၂၂', '၃၃', '၂၂', '၃၃', '၂၂', '၃၃', '၆၆', '၇၇', '၆၆', '၇၇', '၆၆', '၇၇', '၄၄', '၅၅', '၄၄', '၅၅', '၄၄', '၅၅', '2019-10-01', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', '၀၉၉၆၉၉၉၂၉၂၉', 'fax', 'owner@gmail.com', '2019-01-01', NULL, 'EPC', 'နိုင်ငံ', '0', 'main', 'other', 0, 'goods', 'raw materials', '100000', '၂၂', '၂၂', '၂၂', '၂၂', 'လဆန်း(၂)ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'ရှိ', 'ကြီးကြပ်ရေးမှူး', NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '5', '10', '9', '2019-10-07 03:11:34', '2019-10-07 03:11:34'),
(12, '44789', 'Testing', 'address', 'address', '0978002002', NULL, NULL, NULL, '2', NULL, NULL, NULL, '223', 'epc', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '2019-10-10', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'ManagerName', 'Owner Name', 'Owner Nrc', 'owner address', '0083348993', NULL, NULL, '2019-01-01', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၆၆', '၆၆', '၂၂', '၂၂', 'လကုန်ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'ရှိ', 'အရာရှိ', NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '5', '10', '8', '2019-10-15 08:06:51', '2019-10-15 08:06:51'),
(13, '98256', 'Hello', 'address', 'address', '09883883', '89765', 'email@gmail.com', 'klllkoko', '22', NULL, NULL, NULL, '100M', '5678M', '၂၂', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-10-16', '2019-10-16', '0', '08:00', '22:00', NULL, NULL, NULL, NULL, NULL, 'ManagerName', 'Owner Name', '၉/ြ်မမခ််မ၅', 'owner add', '၀၉၈၇၆၄၃၄', '၈၇၆၅၄၃', 'email@gmail.com', '2019-10-16', NULL, 'epc', 'နိုင်ငံ', '0', 'main product', 'other product', 0, 'goods', 'raw materials', '10000', '၂၂', '၀', '0', '0', 'လကုန်ရက်', '2000', '4000', NULL, 0, 0, 0, '0', 0, 0, 'Mg Cho', 'position', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'thin nwe su', 'manager', 'ရှိ', 'ရှိ', 'မန်နေဂျာ', NULL, NULL, 'ကြီး', '2019-10-16', 'rrtyyu', '9', '5', '3', '1', '2019-10-15 20:16:33', '2019-10-15 20:16:33'),
(14, '76887', 'GreenHouse', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '092004443', '222356', 'greenhouse@gmail.com', 'သစ်ထုတ်လုပ်ခြင်း', '20', NULL, NULL, NULL, 'တစ်လ ၃၀၀တန်', 'EPC', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '2019-10-01', NULL, '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'ဦးမောင်မောင်', 'ဦးသန့်ထူး', '၁၂/မရက(နိုင်)၀၂၃၄၅၆', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', 'ဖက်စ်', 'ဖက်စ်', '2019-10-01', NULL, 'EPC', 'နိုင်ငံ', '0', 'သစ်', NULL, 0, NULL, NULL, 'တစ်လ ၃၀၀တန်', '၆၆', '၆၆', '၂၂', '၂၂', 'လကုန်ရက်', '၂၈၀၀၀', '၄၈၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'ဦးသူရအောင်', 'ဥပဒေဦးစီးအရာရှိ', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'ဦးသူရအောင်', 'ဥပဒေဦးစီးအရာရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-10-01', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '9', '5', '3', '1', '2019-10-15 22:42:28', '2019-10-15 22:42:28'),
(16, '3190', 'ok dollar co ltd', 'kamaryut junciton square', 'junction square kamaryut', '097882002', NULL, NULL, NULL, 'ရေနွေးငွေ့ဖြင့်လည်သောစက်', NULL, NULL, NULL, NULL, NULL, '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '2019-02-01', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'manager nane', 'owner  name', 'owner nrc', 'owner address', 'owner phone no', NULL, NULL, '2018-01-01', NULL, NULL, 'သမဝါယမ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၆', '၆', '0', '0', 'လကုန်ရက်', '200000', '600000', NULL, 0, 0, 0, '0', 0, 0, NULL, NULL, 'passport', '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'HR manager', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2018-01-01', 'address', '9', '5', '3', '1', '2019-11-12 21:32:32', '2019-11-12 21:32:32'),
(18, '68252', 'ok dollar 2', 'kamaryut junciton square', 'junction square kamaryut', '097882002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-02-01', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'manager nane', 'owner  name', 'owner nrc', 'owner address', 'owner phone no', NULL, NULL, '2018-01-01', NULL, NULL, 'သမဝါယမ', '0', NULL, NULL, 0, NULL, NULL, NULL, '0', '0', '0', '0', 'လကုန်ရက်', '200000', '600000', NULL, 0, 0, 0, '0', 0, 0, NULL, NULL, 'passport', '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'HR manager', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2018-01-01', 'address', '9', '5', '3', '1', '2019-11-12 21:36:55', '2019-11-12 21:36:55'),
(19, '92981', 'Asia Co Ltd', 'address', 'address', '097801037383', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'epc', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '2019-01-01', '2019-01-01', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'ဦးမော', 'ဦးစိုး', '၅ ခဥန(နိုင) ၂၀၀၄၄', 'addres', '099292920', 'fax', NULL, '2019-01-01', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၁၂', '၁၂', '0', '0', 'လကုန်ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '5', '3', '1', '2019-11-17 21:26:36', '2019-11-17 21:26:36'),
(20, '13964', 'Asia Yadanar Co Ltd', 'address', 'address', '09780022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'epc', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '၂', '၂', '0', '0', '2019-01-01', '2018-01-31', '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'ManagerName', 'Owner Name', '၁၂/မရက(နိုင်)၀၂၃၄၅၆', 'Owner address', '09782889229', NULL, NULL, '2019-02-01', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၁၂', '၁၂', '0', '0', 'လကုန်ရက်', '200000', '500000', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '5', '3', '1', '2019-11-17 21:42:28', '2019-11-17 21:42:28'),
(21, '9062', 'test', 'address', 'address', '09292', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '၂', '၂', '၂', '၂', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '၂', '0', '0', '0', '2019-11-20', '2019-11-19', '0', '01:00', '01:00', NULL, NULL, NULL, NULL, NULL, 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', 'လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်', 'လုပ်ငန်းပိုင်ရှင် ဖက်စ်', NULL, '2019-01-01', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၁၀', '၈', '0', '0', 'လကုန်ရက်', '၂၂၂', '၂၂၂', NULL, 0, 0, 0, '0', 0, 0, 'ိ', 'ိ', NULL, '01:00', '02:00', 'LDI', '1', '1', '1', '0111', NULL, NULL, 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-01-01', 'address', '9', '4', '21', NULL, '2019-11-18 21:02:40', '2019-11-18 21:02:40'),
(22, '12809', 'testing', 'address', 'address', '09883883', NULL, NULL, NULL, 'ရေနွေးငွေ့ဖြင့်လည်သောစက်', NULL, NULL, NULL, NULL, NULL, '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '2019-11-20', '2019-11-19', '0', '01:00', '13:00', NULL, NULL, NULL, NULL, NULL, 'မန်နေဂျာ အမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'မှတ်ပုံတင်နံပါတ်', 'address', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', 'ဖက်စ်', 'အီးမေး', '2019-11-20', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၁၈', '၁၈', '0', '0', 'လကုန်ရက်', '200000', '400000', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'နိုင်ငံကူးလက်မှတ်', '01:00', '02:00', 'LDI', '1', '1', '1', '0111', NULL, NULL, 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-11-20', 'address', '9', '5', '3', '1', '2019-11-19 01:23:56', '2019-11-19 01:23:56'),
(23, '60799', 'overSeaCompany Ltd', 'address', 'contact address', '097800300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '၂၂', '၂၂', '၂၂', '၂', '၂', '၂', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '၂၂', '၂၂', '၂', '၂', '၂', '၂', '2019-12-12', NULL, '0', '08:00', '17:00', NULL, NULL, NULL, NULL, NULL, 'မန်နေဂျာအမည်', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်', 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ', 'လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်', NULL, NULL, '2019-12-26', NULL, NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, '၉၈', '၇၈', '၂၂', '၂၂', 'လကုန်ရက်', '200000', '5000000', NULL, 0, 0, 0, '0', 0, 0, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, '00:00', '13:00', 'LDI', '1', '1', '1', '0111', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-12-12', 'address', '9', '5', '6', NULL, '2019-12-03 21:54:29', '2019-12-03 21:54:29'),
(24, '61125', 'Best Hubo အထည်ချုပ်', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', '၀၉၅၆၈၉၆၄၄', NULL, NULL, 'အထည်ချုပ်', '၃', '၅', NULL, NULL, 'တစ်လ အထည်ရေ (၃၀၀၀၀)', 'EPC ၊ ကိုယ်ပိုင်မီးစက်', '၁၅', '၄၀', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-12-09', NULL, '1', NULL, NULL, '08:00', '17:00', '08:00', '00:00', NULL, 'ဒေါ်လဲ့လဲ့', 'Mr.Yan Xiao Ming', '၁၂/အစန(နိုင်)၂၃၅၅၉', 'လှိုင်မြို့နယ်', '၀၉၈၇၆၅၄၄', NULL, NULL, '2019-12-16', NULL, '300hp', 'ပုဂ္ဂလိက', '1', 'အဝတ်အထည်', NULL, 0, 'ပြည်ပ', 'ပြည်ပ', '၃၀၀၀၀', '၁၅', '၄၀', '0', '0', 'လဆန်း(၅)ရက်', '၁၄၄၀၀၀', '၈၀၀၀၀၀', NULL, 0, 0, 1, '0', 0, 0, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ(အလုပ်ရုံ)', NULL, NULL, NULL, 'FDI', '3', '12', '35', '1399', 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ(အလုပ်ရုံ)', 'ရှိ', 'မရှိ', NULL, NULL, NULL, 'ကြီး', '2019-12-03', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', '9', '5', '10', '7', '2019-12-11 22:10:22', '2019-12-11 22:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `factory_inspection_acts`
--

CREATE TABLE `factory_inspection_acts` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectioninform_id` int(10) UNSIGNED NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `sentnotice` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shownotice` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `workingduration` date DEFAULT NULL,
  `repeatitivework` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changenotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informchangenotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equalnotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weeklyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekendholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insteadrelaxdays` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepermit` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workwithpermit` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otpayscale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diffrentotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowtimecalculate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotallow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalottime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twofacbyday` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `definedworktime` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stosworktime` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washusestate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situsestate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalcaretype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watercleanence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffientamount` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooling` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletcategroy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletplace` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletclean` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentcase` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerregistrationbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childregistrationbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wokerofficetimebook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factory_inspection_impacts`
--

CREATE TABLE `factory_inspection_impacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `affected_inform_id` int(10) NOT NULL,
  `workname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeofwork` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `managername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL,
  `region_id` int(15) DEFAULT NULL,
  `zone_id` int(15) DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workermale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerfemale` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieworkername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieworkerage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieworkerex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofsex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimatedloss` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `absentworkday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnworkdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injury` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casecondition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `damageoccur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occurdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occurtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectpart` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofaffect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causehurm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivenoti` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectiondate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkPosition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injurybrief` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullprocess` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `underlyingcauses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basiccauses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessname1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessposition1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessname2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessposition2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessmanagername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_inspection_impacts`
--

INSERT INTO `factory_inspection_impacts` (`id`, `affected_inform_id`, `workname`, `typeofwork`, `ownername`, `managername`, `contactphone`, `contactemail`, `district_id`, `township_id`, `region_id`, `zone_id`, `address`, `workermale`, `workerfemale`, `dieworkername`, `occupation`, `dieworkerage`, `dieworkerex`, `typeofsex`, `estimatedloss`, `absentworkday`, `returnwork`, `returnworkdate`, `injury`, `casecondition`, `coverage`, `damageoccur`, `occurdate`, `occurtime`, `affectpart`, `categoryname`, `typeofaffect`, `causehurm`, `receivenoti`, `inspectiondate`, `check`, `checkName`, `checkPosition`, `injurybrief`, `photo`, `fullprocess`, `underlyingcauses`, `basiccauses`, `review`, `witnessname1`, `witnessposition1`, `witnessname2`, `witnessposition2`, `witnessownername`, `witnessmanagername`, `inspector`, `created_at`, `updated_at`) VALUES
(10, 4, 'အာရှသမာဓိအထည်ချုပ်', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'ဦးမောင်မောင်ဦး', 'ဦးမောင်မောင်ဦး', '09400424444', 'ဆက်သွယ်ရမည့် အီးမေး', NULL, 10, 9, 4, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '၄၄၄', '၂၁၃', 'ထိခိုက်သူ/သေဆုံးသူအမည်', 'အလုပ်အကိုင်', 'ထိခိုက်သူ/သေဆုံးသူ အသက်', 'ထိခိုက်သူ/သေဆုံးသူ လုပ်သက်', 'မ', 'ခန့်မှန်းအလုပ်ပျက်ရက်', 'ပျက်ကွက်ခဲ့သည့်အလုပ်ပျက်ရက်', 'မရှိ', '2019-10-01', 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'မရှိ', 'ထိခိုက်မှုဖြစ်ပွားခဲ့သည့်နေရာ', '2019-10-01', '01:00', 'A.2.2', 'C-2720', '50', '8.81', '2019-10-01', '2019-10-01T01:00', 'စစ်ဆေးခြင်း', 'စစ်ဆေးသူအမည်', 'စစ်ဆေးသူရာထူး', 'f', NULL, 'f', 'f', 'g', 'f', 'f', 'f', NULL, 'f', 'f', 'f', 'f', '2019-10-09 03:57:13', '2019-10-09 03:57:13'),
(11, 4, 'အာရှသမာဓိအထည်ချုပ်', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'ဦးမောင်မောင်ဦး', 'ဦးမောင်မောင်ဦး', '09400424444', NULL, NULL, 10, 9, 4, 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '၄၄၄', '၂၁၃', 'အောင်အောင်', 'စာရေး', '၂၄နှစ်', '၄နှစ်', 'မ', '၂', '၄', 'မရှိ', '2019-10-01', 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'မရှိ', 'dining room', '2019-10-02', '01:00', 'A.2.2', 'C-2720', '50', '8.81', '2019-10-09', '2019-10-09T01:00', 'စစ်ဆေးခြင်း', 'ဥပဒေဦးစီးအရာရှိ', 'ဥပဒေဦးစီးအရာရှိ', 'ထိခိုက်မှုဖြစ်ပွားပုံအကျဉ်', NULL, 'လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဉ် အပြည့်အစုံ ရေးသားရန်', 'ထိခိုက်မှုဖြစ်ပွားရသည့် နောက်ကွယ် အကြောင်းရင်', 'ထိခိုက်မှုဖြစ်ပွားရသည့် အခြေခံ အကြောင်းရင်', 'သုံးသပ်ချက်', 'name', 'manager', 'name', 'assistant manager', 'onwer name', 'သုံးသပ်ချက်', 'ဦးသူရအောင်', '2019-10-16 00:14:19', '2019-10-16 00:14:19'),
(12, 8, 'ok', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'owner', 'manager', '097882002', NULL, NULL, 3, 9, 1, 'address', '၂၀', '၂၀', 'ထိခိုက်သူ/သေဆုံးသူအမည်', 'အလုပ်အကိုင်', 'ထိခိုက်သူ/သေဆုံးသူ အသက်', 'ထိခိုက်သူ/သေဆုံးသူ လုပ်သက်', 'မ', 'ခန့်မှန်းအလုပ်ပျက်ရက်', 'ပျက်ကွက်ခဲ့သည့်အလုပ်ပျက်ရက်', 'မရှိ', '2019-11-14', 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'မရှိ', 'ထိခိုက်မှုဖြစ်ပွားခဲ့သည့်နေရာ', '2019-11-14', '01:00', 'A.2.2', 'C-2720', '50', '8.81', '2019-11-14', '2019-11-14T01:00', 'စစ်ဆေးခြင်း', 'စစ်ဆေးသူအမည်', NULL, 'ထိခိုက်မှုဖြစ်ပွားပုံအကျဉ်း', NULL, 'လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဉ် အပြည့်အစုံ ရေးသားရန်', 'ထိခိုက်မှုဖြစ်ပွားရသည့် နောက်ကွယ် အကြောင်းရင်း(Underlying Causes)', 'ထိခိုက်မှုဖြစ်ပွားရသည့် အခြေခံ အကြောင်းရင်း(Basic/Root Causes)', 'သုံးသပ်ချက်', 'ဖြေဆိုသူ', 'Rank', 'ဖြေဆိုသူ 1', 'Rank 1', 'Owner Name', 'Manager Name', 'စစ်ဆေးရေးအရာရှိ', '2019-11-13 20:19:57', '2019-11-13 20:19:57'),
(16, 10, 'overSeaCompany', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'လုပ်ငန်းပိုင်ရှင်အမည်', 'မန်နေဂျာအမည်', '097800300', NULL, 5, 3, 9, 1, 'address', '၁၃၂', '၁၁၂', 'ထိခိုက်သူ/သေဆုံးသူအမည်', 'အလုပ်အကိုင်', 'ထိခိုက်သူ/သေဆုံးသူ အသက်', 'ထိခိုက်သူ/သေဆုံးသူ လုပ်သက်', 'မ', 'ခန့်မှန်းအလုပ်ပျက်ရက်', 'ပျက်ကွက်ခဲ့သည့်အလုပ်ပျက်ရက်', 'မရှိ', '2019-10-01', 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'မရှိ', 'ထိခိုက်မှုဖြစ်ပွားခဲ့သည့်နေရာ', '2019-10-01', '01:00', 'A.2.2', 'A.0111', 'အရိုးကျိုးခြင်း', '၂.၂၁', '2019-10-01', '2019-10-01T01:00', 'စစ်ဆေးခြင်း', 'စစ်ဆေးသူအမည်', 'စစ်ဆေးသူရာထူး', 'f', NULL, 'f', 'f', 'g', 'f', 'f', 'f', NULL, 'f', 'f', 'f', 'zzz', '2019-12-08 22:28:40', '2019-12-22 22:52:26'),
(17, 11, 'TestFor', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'Owner', 'Manager', '0978022002', NULL, 5, 3, 9, NULL, 'လှိုင်သာယာမြို့နယ်၊လှိုင်သာယာမြို့နယ်၊address', '၆၆', '၆၆', 'u ko', 'labour', '၂၃ နှစ်', '၃ နှစ်', 'မ', '၁၄ ရက်', '၅ ရက်', 'မရှိ', NULL, 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'ရွိ', 'production', '2019-12-02', '08:00', 'A.2.2', 'A.0111', 'အရိုးကျိုးခြင်း', '၂.၂၁', '2019-12-11', '2019-12-09T11:00', NULL, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦး/ရှိ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'owner name', NULL, 'ဒေါ်ချမ်မြေ့သူ', '2019-12-11 23:23:05', '2019-12-22 23:05:23'),
(18, 9, 'shop.com.mm', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'Owner', 'Manager', '0978299202', NULL, 5, 3, 9, NULL, 'လှိုင်သာယာမြို့နယ်၊လိပ်စာ\r\nလိပ်စာ', '၆', '၆', 'အမည်', 'ရာထူး နှင့် တာ၀န်', 'အသက် နှင့် လုပ်သက်', 'အသက် နှင့် လုပ်သက်', 'ကျား', 'ခန့်မှန်းအလုပ်ပျက်ရက်', 'ခန့်မှန်းအလုပ်ပျက်ရက်', 'မရှိ', NULL, 'ဆေးကုသနေဆဲ', 'ပြန်ထန်အဆင့်', 'မရှိ', 'နေရာ', '2019-11-14', NULL, 'A.2.2', 'A.0111', '၃၀', '၂.၂၁', NULL, '2019-10-01T01:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးရေးအရာရှိ', '2020-01-13 22:40:12', '2020-01-13 22:40:12'),
(19, 15, 'ok', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'owner', 'manager', '097882002', NULL, 5, 3, 9, 1, 'address', '၂၀', '၂၀', 'df', 'ds', 'ss', 'ss', 'မ', '2', '2', 'မရှိ', NULL, 'ဆေးကုသနေဆဲ', 'ရှေးဦးသူနာပြု', 'မရှိ', 'place', '2020-01-01', '01:00', 'C.3.2', 'A.0111', '၂၅', '၇.', NULL, '2019-10-01T01:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးရေးအရာရှိ', '2020-01-13 22:47:42', '2020-01-13 22:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `factory_inspection_safeties`
--

CREATE TABLE `factory_inspection_safeties` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectioninform_id` int(10) UNSIGNED NOT NULL,
  `inspection_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspection_datetime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factoryregion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryOwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryOwnerAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `womenworker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workclean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainflow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employmentPaint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircondition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `particals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populationstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwatermana` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiseprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiceprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangerprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protectmach` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machineprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinepieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionentry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinefinding` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearingstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladderstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecoverstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergasuses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escapeman` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firealam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyentrace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleargoway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutfire` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sittingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroomplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursinginstruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinformation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotectwear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safetyhealth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negotiate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safteyhealthcare` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectorrank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_inspection_safeties`
--

INSERT INTO `factory_inspection_safeties` (`id`, `factoryinspectioninform_id`, `inspection_type`, `inspection_datetime`, `factoryname`, `factoryregion`, `ownername`, `owneraddress`, `factoryOwnerNrc`, `factoryOwnerAddress`, `intervieweeName`, `intervieweeAddress`, `energytype`, `horsepower`, `producedProduct`, `workType`, `workTime`, `menworker`, `womenworker`, `medicalticket`, `workclean`, `drainflow`, `employmentPaint`, `aircondition`, `weather`, `particals`, `populationstatus`, `population`, `nature`, `sunlight`, `drinkingwater`, `drinkingwatermana`, `toilet`, `toiletType`, `genderdivide`, `toiletquantity`, `noiseprotect`, `noiceprotection`, `dangerprotect`, `protectmach`, `machinestatus`, `machineprotection`, `machinepieces`, `load`, `inspectionentry`, `machinefinding`, `wearing`, `wearingstatus`, `ladder`, `ladderstatus`, `holecover`, `holecoverstatus`, `dangergas`, `dangergasuses`, `escapeman`, `firealam`, `emergencyentrace`, `cleargoway`, `aboutfire`, `seat`, `sittingplan`, `dinningroom`, `dinningroomplan`, `babysittingroom`, `babysittingplan`, `washing`, `washingplan`, `nursing`, `nursinginstruction`, `accidentinform`, `accidentinformation`, `selfprotectwear`, `selfprotection`, `safetyhealth`, `negotiate`, `training`, `safteyhealthcare`, `change1`, `change2`, `change3`, `change4`, `change5`, `inspectorname`, `inspectorrank`, `created_at`, `updated_at`, `township_id`) VALUES
(4, 4, NULL, NULL, 'blue mountain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'တနင်္လာမှ သောကြာအထိ 08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', '၄၄၂', '၂၁၂', 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-01 22:03:26', '2020-01-01 22:03:26', 0),
(5, 5, NULL, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'တနင်္လာမှ စနေနေ့အထိ 01:00 မှ 01:00အထိ', '2', '2', 'ရှိ', 'ညံ့', 'သင့်', 'သင့်', 'သင့်', 'သင့်', 'သင့်', 'သင့်', NULL, 'ညံ့', 'ညံ့', 'သင့်', NULL, 'ညံ့', 'သင့်', 'သင့်', 'သင့်', 'ညံ့', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-03 03:16:14', '2020-01-03 03:16:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `factory_inspection_wages`
--

CREATE TABLE `factory_inspection_wages` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectioninform_id` int(10) UNSIGNED NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `Mpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ppaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTplan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OTpaymentplan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `miniexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniregularprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxregularprizee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fine` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `illegaldeductedtime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illegaldeductedworkers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illegaldedutedamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentnote` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deductednote` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `allowotnote` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factory_labour_inspection_laws`
--

CREATE TABLE `factory_labour_inspection_laws` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_id` int(11) NOT NULL,
  `factoryinspectioninform_id` int(11) NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `sentnotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shownotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workingduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repeatitivework` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changenotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informchangenotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equalnotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weeklyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekendholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insteadrelaxdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepermit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workwithpermit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otpayscale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diffrentotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowtimecalculate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotallow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalottime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twofacbyday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `definedworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stosworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washusestate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situsestate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalcaretype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watercleanence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffientamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooling` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletcategroy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletclean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentcase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerregistrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childregistrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wokerofficetimebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causalleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annualleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maternity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leavenote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ppaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTpaymentplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniregularprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedworkers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldedutedamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentnote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductednote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowotnote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_labour_inspection_laws`
--

INSERT INTO `factory_labour_inspection_laws` (`id`, `factory_id`, `factoryinspectioninform_id`, `inspection_id`, `sentnotice`, `shownotice`, `workingduration`, `repeatitivework`, `changenotice`, `informchangenotice`, `equalnotice`, `dailyworktime`, `weeklyworktime`, `resttime`, `weekendholiday`, `insteadrelaxdays`, `prepermit`, `workwithpermit`, `otpayscale`, `diffrentotpayment`, `allowtimecalculate`, `illegalotallow`, `illegalottime`, `illegalotpayment`, `twofacbyday`, `definedworktime`, `stosworktime`, `washcategory`, `washamount`, `washusestate`, `sitcategory`, `sitamount`, `situsestate`, `medicalcaretype`, `babysittingroom`, `dinningroom`, `waterplace`, `watercleanence`, `suffientamount`, `cooling`, `tioletcategroy`, `tioletplace`, `tioletclean`, `genderdivide`, `tioletroom`, `mtioletroom`, `ftioletroom`, `accidentcase`, `workerregistrationbook`, `childregistrationbook`, `generalbook`, `wokerofficetimebook`, `otbook`, `causalleave`, `annualleave`, `medicalleave`, `maternity`, `publicholiday`, `weekholiday`, `leavenote`, `Mpaymentduration`, `Dpaymentduration`, `Ppaymentduration`, `Cpaymentduration`, `OTplan`, `OTpaymentplan`, `miniexperprize`, `miniregularprize`, `miniproductprize`, `fine`, `deductamount`, `illegaldeductedtime`, `illegaldeductedworkers`, `illegaldedutedamount`, `paymentnote`, `deductednote`, `allowotnote`, `instruction1`, `instruction2`, `instruction3`, `instruction4`, `instruction5`, `created_at`, `updated_at`, `township_id`) VALUES
(2, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:22:27', '2020-01-02 02:22:27', 3),
(3, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:23:22', '2020-01-02 02:23:22', 3),
(4, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:23:46', '2020-01-02 02:23:46', 3),
(5, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:24:10', '2020-01-02 02:24:10', 3),
(6, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:24:33', '2020-01-02 02:24:33', 3),
(7, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:25:34', '2020-01-02 02:25:34', 3),
(8, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:25:52', '2020-01-02 02:25:52', 3),
(9, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:26:27', '2020-01-02 02:26:27', 3),
(10, 23467, 4, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', 'တနင်္လာမှ သောကြာ08:00 မှ 16:30အထိစနေနေ့08:00 မှ 12:00အထိ', 'တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်', '01:00 မှ 01:00အထိ', 'စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:27:34', '2020-01-02 02:27:34', 3),
(11, 9062, 5, 21, 'ပြု', 'ပြု', NULL, 'ရှိ', 'ရှိ', 'ကြား', 'လုပ်', '01:00 မှ 01:00အထိ', 'တနင်္လာမှ စနေနေ့အထိ', '01:00 မှ 02:00အထိ', 'တနင်္ဂနွေနေ့', NULL, 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, 'ကောင်း', NULL, NULL, 'ကောင်း', 'သူနာပြုဆေးသေတ္တာ', 'ရှိ', 'ရှိ', NULL, NULL, 'ရှိ', 'ရှိ', NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'ရှိ', 'မရှိ', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ပေး', 'ထား', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', 'လဆန်း၅ရက်', NULL, NULL, NULL, NULL, NULL, 'ရှိ', NULL, NULL, NULL, NULL, 'ရှိ', 'ရှိ', 'ရှိ', NULL, NULL, NULL, NULL, NULL, '2020-01-03 03:19:13', '2020-01-03 03:19:13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `factory_leaves`
--

CREATE TABLE `factory_leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectioninform_id` int(10) UNSIGNED NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `causalleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `annualleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `maternity` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicholiday` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekendholiday` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `leavenote` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factory_leave_inspections`
--

CREATE TABLE `factory_leave_inspections` (
  `id` int(10) UNSIGNED NOT NULL,
  `FactoryId` int(11) NOT NULL,
  `testingtime` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `testcondition` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `BusinessOwnerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BusinessOwnerAddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerName` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerNameAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namebyrecord` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkedPower` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccountableName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccountableRank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeofencourage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Horsepower` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductProperty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProducedAmounts` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FactoryAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Factoryopens` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Datelastwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MenWorker` int(11) NOT NULL,
  `WomenWorker` int(11) NOT NULL,
  `DailyMenWorker` int(11) NOT NULL,
  `DailyWomenWorker` int(11) NOT NULL,
  `PieceMenWorker` int(11) NOT NULL,
  `PieceWomenWorker` int(11) NOT NULL,
  `CMenWorker` int(11) NOT NULL,
  `CWomenWorker` int(11) NOT NULL,
  `CDailyMenWorker` int(11) NOT NULL,
  `CDailyWomenWorker` int(11) NOT NULL,
  `CPieceMenWorker` int(11) NOT NULL,
  `CPieceWomenWorker` int(11) NOT NULL,
  `AMenWorker` int(11) NOT NULL,
  `AWomenWorker` int(11) NOT NULL,
  `ADailyMenWorker` int(11) NOT NULL,
  `ADailyWomenWorker` int(11) NOT NULL,
  `APieceMenWorker` int(11) NOT NULL,
  `APieceWomenWorker` int(11) NOT NULL,
  `NMenWorker` int(11) NOT NULL,
  `NWomenWorker` int(11) NOT NULL,
  `ANMenWorker` int(11) NOT NULL,
  `ANWomenWorker` int(11) NOT NULL,
  `NCMenWorker` int(11) NOT NULL,
  `NCWomenWorker` int(11) NOT NULL,
  `NameofinspectorId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factory_prosecuteds`
--

CREATE TABLE `factory_prosecuteds` (
  `id` int(10) UNSIGNED NOT NULL,
  `chooseType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Township` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OwnerAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlaintiffName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlaintiffLvl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlaintiffTownship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlaintiffZone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProsecutedAbout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProsecutedLaw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProsecutedDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CourtName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DecreeDay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getDecreeDay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DecreeID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noOfemp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empGetmoney` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DecreeAct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judgmentDay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judgment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_prosecuteds`
--

INSERT INTO `factory_prosecuteds` (`id`, `chooseType`, `IDno`, `Name`, `Address`, `Township`, `Zone`, `OwnerName`, `OwnerAddress`, `ManagerName`, `ManagerAddress`, `PlaintiffName`, `PlaintiffLvl`, `PlaintiffTownship`, `PlaintiffZone`, `ProsecutedAbout`, `ProsecutedLaw`, `ProsecutedDay`, `CourtName`, `DecreeDay`, `getDecreeDay`, `DecreeID`, `noOfemp`, `empGetmoney`, `DecreeAct`, `judgmentDay`, `judgment`, `created_at`, `updated_at`) VALUES
(2, '1', '23599', 'အာရှသမာဓိအထည်ချုပ်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ရွှေပြည်သာမြို့နယ်', 'စက်မှန်ဇုန်(၁)', 'ဦးမောင်မောင်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးမြ', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'Daw Chan Myae Thu', 'ဦးစီး', 'အင်းစိန်', '၁', 'အချိန်ပို', '၄၅', '2019-09-26', 'Insein', '2019-09-26', '2019-09-27', '၁/၂၀၁၉', '၁၀၀', '၁၀၀၀၀၀', NULL, NULL, NULL, '2019-09-25 03:09:36', '2019-09-25 03:09:36'),
(3, '2', '101', 'G&G', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '10', NULL, 'ဦးအောင်', 'လိပ်စာ', 'ဦးတင့်', 'အမှတ်(၁၅၂/၁၅၃)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးအောင်စိုး', 'ဥပဒေဦးစီးအရာရှိ', 'မြို့နယ်', 'ဇုန်', 'အချိန်ပို', 'ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ', '2019-10-03', 'တရားရုံးအမည်', '2019-10-04', '2019-10-09', 'ကြီး', NULL, NULL, NULL, NULL, NULL, '2019-10-04 02:05:46', '2019-10-04 02:05:46'),
(4, '2', '48108', 'One Stop Mark', 'ရွှေပြည်သာမြို့နယ်၊address', '10', NULL, 'ဦးစိုး', 'လိပ်စာ', 'ဦးမြ', 'အမှတ်(၁၅၄/၁၅၅)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးသန့်ဇင်ထူး', 'ဥပဒေဦးစီးအရာရှိ', 'မြို့နယ်', 'ဇုန်', 'အချိန်ပို', 'ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ', '2019-10-03', 'တရားရုံးအမည်', '2019-10-02', '2019-10-01', 'အမှုအမှတ်(ပြစ်မှုကြီး)', '၂၂', '၂၀၀၀၀၀', 'မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန်', '2019-10-01', 'စီရင်ချက်', '2019-10-15 20:52:22', '2019-12-27 01:35:30'),
(5, '1', '23599', 'အာရှသမာဓိအထည်ချုပ်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', '10', '4', 'ဦးအေး', 'လိပ်စာ', 'ဦးကြည်', 'အမှတ်(၁၅၀/၁၅၁)၊ ဦးထွန်းညိုလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၃)', 'ဦးသန့်ဇင်ထူး', 'ဥပဒေဦးစီးအရာရှိ', 'မြို့နယ်', 'ဇုန်', 'အချိန်ပို', 'ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ', '2019-10-01', 'တရားရုံးအမည်', '2019-10-10', '2019-10-12', 'အမှုအမှတ်(ပြစ်မှုကြီး)', '၂၂', '၁၀၀၀၀၀၀၀', 'မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန်', '2019-10-02', 'စီရင်ချက်', '2019-10-16 00:17:11', '2019-10-16 00:17:11'),
(6, '1', '60799', 'overSeaCompany Ltd', 'address', '3', '1', 'U Kyaw', 'address', 'manager name', 'address', 'name', 'occupatin', 'township', 'zone', 'gg', 'gg', '2019-12-11', 'ggwp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-05 01:32:14', '2019-12-27 01:35:17'),
(7, '1', '61125', 'Best Hubo အထည်ချုပ်', 'အမှတ်(၇/၈)၊ ကင်းဝန်မင်းကြီးလမ်း၊ ရွှေပြည်သာစက်မှုဇုန်(၄)', '10', '7', 'U  Tun Tun', 'လှိုင်မြို့နယ်', 'ဒေါ်လဲ့လဲ့', 'အင်းစိန်', 'ဒေါ်ချမ်မြေ့သု', 'ဦး/ရှိ', 'အင်းစိန်', 'ရွှေပြည်သာဇုန်(၄)', 'အချိန်ပိုလုပ်ကိုင်ခြင်း', 'ပုဒ်မ (၈၅)', '2019-12-01', 'မြောက်ပိုင်းခရိုင်', '2019-12-28', '2019-12-18', '၆/၂၀၁၉', '၃၃', '၇၈၉၀၀၀', NULL, '2019-12-29', 'ဒဏ်ငွေ သိန်း(၄၀)', '2019-12-11 22:58:52', '2019-12-27 01:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `impact_instructions`
--

CREATE TABLE `impact_instructions` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_type` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `factory_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `lastdodate` date NOT NULL,
  `instructiontitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructiondep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructiondate` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `docmentno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refdoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspected_date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documenttype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `township_id` int(11) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `instructor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `impact_instructions`
--

INSERT INTO `impact_instructions` (`id`, `factory_type`, `case_id`, `factory_id`, `create_date`, `lastdodate`, `instructiontitle`, `instructiondep`, `instructiondate`, `user_id`, `docmentno`, `refdoc`, `inspected_date`, `name`, `documenttype`, `instruction1`, `instruction2`, `instruction3`, `instruction4`, `instruction5`, `role_id`, `township_id`, `district_id`, `instructor`, `instructor_rank`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 11, '60799', '2019-12-23', '2019-12-23', 'dd', 'Ministry', '2019-12-11', 21, 'fff', 'test', '2019-12-09', 'TestFor', 'သာမန်', 'aa', 'ff', 'zz', 'yy', 'aa', 1, 3, 5, 'dfd', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2019-12-23 03:32:42', '2019-12-27 01:22:30'),
(2, 1, 15, '68252', '2020-01-14', '2020-01-14', 'ss', 'Ministry', '2020-01-23', 21, 'fff', 'ရည်ညွှန်းစာအမှတ်', '2019-12-11', 'ok dollar 2', 'သာမန်', 'fd', 'fdf', 'fdf', 'fd', 'fd', 1, 3, 5, 'fdf', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2020-01-13 22:55:34', '2020-01-13 22:55:34'),
(3, 2, 11, '74188', '2020-01-14', '2020-01-14', 'fdf', 'Ministry', '2020-01-22', 21, 'fff', 'ရည်ညွှန်းစာအမှတ်', '2019-12-09', 'TestFor', 'သာမန်', 'fdf', NULL, NULL, NULL, NULL, 1, 3, 5, 'fd', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2020-01-13 22:56:15', '2020-01-13 22:56:15'),
(4, 2, 11, '74188', '2020-01-14', '2020-01-14', 'fdf', 'Ministry', '2020-01-22', 21, 'fff', 'ရည်ညွှန်းစာအမှတ်', '2019-12-09', 'TestFor', 'သာမန်', 'fdf', NULL, NULL, NULL, NULL, 1, 3, 5, 'fd', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2020-01-13 22:56:37', '2020-01-13 22:56:37'),
(5, 1, 15, '68252', '2020-01-14', '2020-01-07', 'dd', 'Ministry', '2020-01-30', 21, 'ddddd', 'd', '2019-10-01', 'ok dollar 2', 'သာမန်', 'ddd', 'dd', NULL, NULL, NULL, 1, 3, 5, 'dd', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2020-01-14 00:04:57', '2020-01-14 00:04:57'),
(6, 1, 15, '68252', '2020-01-14', '2020-01-07', 'dd', 'Ministry', '2020-01-30', 21, 'ddddd', 'd', '2019-10-01', 'ok dollar 2', 'သာမန်', 'ddd', 'dd', 'dd', NULL, NULL, 1, 3, 5, 'dd', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0, '2020-01-14 00:08:25', '2020-01-14 00:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `impact_types`
--

CREATE TABLE `impact_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `impact_no` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `impact_types`
--

INSERT INTO `impact_types` (`id`, `impact_no`, `impact_name`, `created_at`, `updated_at`) VALUES
(1, '၁', 'လူပြုတ်ကျခြင်း', NULL, NULL),
(2, '၂', 'အမြင့်မှကျသည့် အရာတစ်ခုခုဖြင့် ရိုက်မိခြင်း', NULL, NULL),
(3, '၃', 'အမြင့်မှကျလာသည့် အရာတစ်ခုခုကြောင့် မဟုတ်ဘဲ အခြားအရာ တစ်ခုခုကို တက်နင်းမိခြင်း၊ ခလုတ်တိုက်မိခြင်း ၊ ရိုက်မိခြင်း', NULL, NULL),
(4, '၄', 'အရာတစ်ခုခုဖြင့် သို့မဟုတ် ဝတ္တုပစ္စည်းများ အကြား ညပ်မိခြင်း', NULL, NULL),
(5, '၅', 'အင်အားစိုက်ထုတ်၍ သို့မဟုတ် ပြင်းထန်စွာ ဆောင်ရွက်ရခြင်း', NULL, NULL),
(6, '၆', 'လွန်ကဲသည့် အပူချိန်နှင့် ထိတွေ့ခြင်း သို့မဟုတ် ထိတွေ့ခံစားရခြင်း', NULL, NULL),
(7, '၇', 'လျှပ်စစ်ဓာတ်အား သက်ရောက်ခံရခြင်း (သို့မဟုတ်) ဓါတ်လိုက်ခြင်း', NULL, NULL),
(8, '၈', 'အန္တရယ်ရှိသော အရာများနှင့်ဖြစ်စေ၊ ဓာတ်ရောင်ခြည်နှင့်ဖြစ်စေ ထိတွေ့ခံစားရခြင်း သို့်မဟုတ် သက်ရောက်ခြင်း', NULL, NULL),
(9, '၉', 'ပြည့်စုံလုံလောက်သည့် အချက်အလက် မရရှိခြင်းကြောင့် အမျိုးအစားခွဲခြားဖော်ပြခြင်း မပြုလုပ်နိုင်သည့် လုပ်ငန်းခွင်ထိခိုက်မှု အပါအဝင် အခြားနေရာ တစ်ခုခုတွင် သတ်မှတ်ဖော်ပြထားခြင်း မရှိသည့် အခြားလုပ်ငန', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `industrialzones`
--

CREATE TABLE `industrialzones` (
  `id` int(11) NOT NULL,
  `industrialzone_name` varchar(255) NOT NULL,
  `township_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industrialzones`
--

INSERT INTO `industrialzones` (`id`, `industrialzone_name`, `township_id`, `created_at`, `updated_at`) VALUES
(1, 'ရွှေလင်ပန်းစက်မှုဇုန်', 3, '2019-09-11 02:51:09', '2019-09-11 02:51:09'),
(4, 'စက်မှန်ဇုန်(၁)', 10, '2019-09-24 21:42:15', '2019-09-24 21:42:15'),
(5, 'စက်မှုဇုန်(၂)', 10, '2019-09-25 03:12:39', '2019-09-25 03:12:39'),
(6, 'စက်မှုဇုန်(၃)', 10, '2019-09-25 03:13:19', '2019-09-25 03:13:19'),
(7, 'စက်မှုဇုန်(၄)', 10, '2019-09-25 03:13:34', '2019-09-25 03:13:34'),
(8, 'သာဓုကန်စက်မှုဇုန်', 10, '2019-09-25 03:14:07', '2019-09-25 03:14:07'),
(9, 'ဝါးတရာစက်မှုဇုန်', 10, '2019-09-25 03:14:31', '2019-09-25 03:14:31'),
(10, 'test', 3, '2020-01-14 01:24:28', '2020-01-14 01:24:28'),
(11, 'test', 3, '2020-01-14 01:24:37', '2020-01-14 01:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `industry_categories`
--

CREATE TABLE `industry_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `IndustryCategoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `township_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspectiontype`
--

CREATE TABLE `inspectiontype` (
  `id` int(10) UNSIGNED NOT NULL,
  `inspectiontypename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_type` int(2) NOT NULL,
  `case_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `factory_id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `lastdodate` date DEFAULT NULL,
  `instructiontitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructiondep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructiondate` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `docmentno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refdoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspected_date` date NOT NULL,
  `factoryname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documenttype` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspectiontype_id` int(11) NOT NULL,
  `a_leave` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_wages` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_note` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_worktime` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_other` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `f_safety` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `f_health` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `f_welfare` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `f_note` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `f_other` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `a_leavedesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_wagedesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_notedesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_worktimedesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_otherdesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_safetydesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_healthdesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_welfaredesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_otherdesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_notedesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(3) NOT NULL,
  `township_id` int(5) DEFAULT NULL,
  `district_id` int(4) NOT NULL,
  `instructor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_rank` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `factory_type`, `case_id`, `created_at`, `updated_at`, `factory_id`, `create_date`, `lastdodate`, `instructiontitle`, `instructiondep`, `instructiondate`, `user_id`, `docmentno`, `refdoc`, `inspected_date`, `factoryname`, `documenttype`, `inspectiontype_id`, `a_leave`, `a_wages`, `a_note`, `a_worktime`, `a_other`, `f_safety`, `f_health`, `f_welfare`, `f_note`, `f_other`, `a_leavedesc`, `a_wagedesc`, `a_notedesc`, `a_worktimedesc`, `a_otherdesc`, `f_safetydesc`, `f_healthdesc`, `f_welfaredesc`, `f_otherdesc`, `f_notedesc`, `role_id`, `township_id`, `district_id`, `instructor`, `instructor_rank`, `status`) VALUES
(1, 1, 51, '2019-12-08 22:23:17', '2019-12-08 22:24:20', 23599, '2019-12-09', '2019-12-31', 'စစ်ဆေးခြင်း', 'လှိုင်သာယာမြို့နယ်', '2019-12-31', 18, '၁၁၆', 'ရည်ညွှန်းစာအမှတ်', '2019-12-09', 'အာရှသမာဓိအထည်ချုပ်', 'သာမန်', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'ခွင့်ပိတ်', 'လုပ်ခ/လစာ', 'မှတ်တမ်း', NULL, 'အခြား', NULL, NULL, NULL, NULL, NULL, 8, 3, 5, 'U Nyi Nyi', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0),
(2, 2, 52, '2019-12-09 00:16:09', '2019-12-09 00:16:09', 48108, '2019-12-09', '2019-12-09', 'စစ်ဆေးခြင်း', 'လှိုင်သာယာမြို့နယ်', '2019-12-09', 18, '၁၁၆', 'ရည်ညွှန်းစာအမှတ်', '2019-12-09', 'Noble Shop', 'သာမန်', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'ခွင့်ပိတ်', 'လုပ်ခ/လစာ', 'မှတ်တမ်း', 'အလုပ်ချိန်', 'အခြား', NULL, NULL, NULL, NULL, NULL, 8, 3, 5, 'U Soe', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0),
(3, 1, 53, '2019-12-11 22:37:59', '2019-12-11 22:43:35', 61125, '2019-12-12', '2019-12-27', 'လိုက်နာဆောင်ရွက်ရန်အချက်များ', 'မြောက်ပိုင်းခရိုင်', '2019-12-23', 24, '၇၈၆', '၇၆၈', '2019-12-03', 'Best Hubo အထည်ချုပ်', 'သာမန်', 2, '0', '0', '0', '0', '0', '၂', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, 'စက်များတွင်လည်ပတ်နေသော ပူလီကြိုးများကာရံထားရန်၊\r\nCutting တွင် အလုပ်လုပ်ကိုင်သူများအား စတီးလက်အိတ်များထုတ်ပေးထားရန်၊', 'သောက်သုံးရေများလုံလောက်အောင်ထားရှိပေးရန်', NULL, NULL, NULL, 6, 10, 5, 'ဒေါ်ချမ်းမြေ့သူ', 'ဦးစီးအရာရှိ(အလုပ်ရုံ)', 0),
(40, 1, 54, '2019-12-18 19:45:54', '2020-01-01 22:48:44', 23467, '2019-12-19', '2019-12-19', 'dfdf', 'Ministry', '2019-12-19', 21, 'dfdfdfdf', 'fdf', '2019-12-09', 'blue mountain', 'သာမန်', 2, '0', '0', '0', '0', '0', '2', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '1 , fkdhfkdf', NULL, NULL, 'other', NULL, 1, 10, 5, 'U Nyi Nyi', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0),
(41, 1, 56, '2020-01-09 21:59:12', '2020-01-09 21:59:12', 23467, '2020-01-10', '2019-10-01', 'အကြောင်းအရာ', 'မြောက်ပိုင်းခရိုင်', '2020-01-10', 27, 'စာအမှတ်', 'ရည်ညွှန်းစာအမှတ်', '2020-01-02', 'blue mountain', 'သာမန်', 1, '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', 'ခွင့်ပိတ်', 'လုပ်ခ/လစာ', 'မှတ်တမ်း', 'အလုပ်ချိန်', 'အခြား', NULL, NULL, NULL, NULL, NULL, 5, 10, 5, 'စစ်ဆေးသူအမည်', 'လက်ထောက်ညွှန်ကြားရေးမှူး', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interview_peoples`
--

CREATE TABLE `interview_peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `factoryinspectionimpact_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interview_peoples`
--

INSERT INTO `interview_peoples` (`id`, `factoryinspectionimpact_id`, `name`, `position`, `contactphone`, `created_at`, `updated_at`) VALUES
(33, 10, 'aung', 'manager', '09879282', '2019-10-16 00:14:19', '2019-10-16 00:14:19'),
(34, 10, 'mg', 'owner', '0992793333', '2019-10-16 00:14:19', '2019-10-16 00:14:19'),
(35, 12, 'အမည်', 'ရာထူး', 'ဖုန်းနံပါတ်', '2019-11-13 20:19:57', '2019-11-13 20:19:57'),
(36, 12, 'အမည် 1', 'ရာထူး 1', 'ဖုန်းနံပါတ် 1', '2019-11-13 20:19:57', '2019-11-13 20:19:57'),
(37, 13, 'name', 'occupation', 'phone', '2019-12-05 00:56:43', '2019-12-05 00:56:43'),
(38, 16, 'name', 'position', '0978028892', '2019-12-08 22:28:40', '2019-12-08 22:28:40'),
(39, 16, 'name1', 'position', '097792922', '2019-12-08 22:28:40', '2019-12-08 22:28:40'),
(40, 17, 'ဦးကျော်', 'မန်နေဂျာ', '၀၇၆၅၄၃', '2019-12-11 23:23:06', '2019-12-11 23:23:06'),
(41, 18, 'fd', 'f', 'fd', '2020-01-13 22:40:12', '2020-01-13 22:40:12'),
(42, 19, 'fdf', 'fdf', 'fd', '2020-01-13 22:47:42', '2020-01-13 22:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_06_024406_create_roles_table', 1),
(3, '2019_08_08_041007_create_regions_table', 1),
(4, '2019_08_08_041617_create_districts_table', 1),
(5, '2019_08_08_041704_create_townships_table', 1),
(6, '2019_08_09_00000_create_users_table', 1),
(7, '2019_08_13_051418_create_industry_categories_table', 1),
(8, '2019_08_13_072939_create_factory_leave_inspections_table', 1),
(9, '2019_08_13_082109_create_factories_table', 1),
(10, '2019_08_26_040442_create_factoryinspectioninforms_table', 1),
(11, '2019_08_27_102316_create_inspectiontype_table', 1),
(12, '2019_08_27_102645_create_factory_leaves_table', 1),
(13, '2019_08_27_102755_create_factory_wages_table', 1),
(14, '2019_08_27_102811_create_factory_factoryacts_table', 1),
(15, '2019_08_29_063023_create_instructions_table', 1),
(16, '2019_09_12_093420_create_economic_sections_table', 1),
(17, '2019_09_13_021749_create_economic_divisions_table', 2),
(18, '2019_09_13_025642_create_economic_groups_table', 3),
(19, '2019_09_13_040935_create_economic_classes_table', 4),
(20, '2019_09_12_102535_create_affected_informations_table', 5),
(23, '2019_09_18_064107_create_factory_histories_table', 6),
(24, '2019_09_18_094343_create_factory_closes_table', 7),
(25, '2019_09_18_100432_create_seminars_table', 8),
(26, '2019_09_19_050656_create_permission_ot_factories_table', 8),
(27, '2019_09_19_042410_add_helddate_to_seminars', 9),
(28, '2019_09_23_095405_create_temp_shop_inspection_leaves_table', 10),
(29, '2019_09_19_085048_create_factory_prosecuteds_table', 11),
(30, '2019_09_24_041823_create_o_t_reports_table', 12),
(31, '2019_09_26_024832_create_factory_labour_inspection_laws_table', 13),
(32, '2019_09_26_051513_create_temp_factory_labour_inspection_laws_table', 13),
(33, '2019_09_27_070828_create_shop_labour_inspection_laws_table', 13),
(34, '2019_09_27_075708_create_temp_shop_labour_inspection_laws_table', 13),
(35, '2019_09_27_083658_create_shop_inspection_safeties_table', 13),
(36, '2019_09_30_022115_create_temp_shop_inspection_safeties_table', 13),
(38, '2019_10_02_035243_create_other_shop_names_table', 14),
(41, '2019_11_06_093831_create_selfregistrations_table', 15),
(42, '2019_11_06_093832_create_selfregistration_password_resets_table', 15),
(43, '2019_11_13_073047_add_factory_id_to_selfregistrations_table', 16),
(44, '2019_11_13_081525_add_self_id_to_permission_ot_factories_table', 17),
(46, '2019_11_14_035815_add_self_id_to_shops_table', 18),
(47, '2019_11_14_051308_create_shop_closes_table', 19),
(48, '2019_11_14_064000_add_status_to_shops_table', 20),
(50, '2019_11_15_041726_add_status_instructions_table', 21),
(51, '2019_10_24_075302_create_share_table', 22),
(52, '2019_10_24_081011_create_shares_table', 22),
(53, '2019_11_15_103748_add_self_id_o_t_reports_table', 23),
(56, '2019_11_18_033127_create_activity_log_table', 24),
(57, '2019_12_04_071407_add_region_id_to_temp_shop_registers', 25),
(58, '2019_12_18_025415_create_affected_types_table', 26),
(59, '2019_12_18_032003_create_affected_bodies_table', 27),
(61, '2019_12_18_041002_create_affected_body_pieces_table', 28),
(62, '2019_12_18_055307_create_impact_types_table', 29),
(66, '2019_12_18_073802_create_impact_type_des_table', 30),
(67, '2019_12_18_083557_add_pain_fields_to_affected_informations_table', 31),
(68, '2019_12_18_090918_add_pain_case_des_to_affected_informations_table', 32),
(69, '2019_12_23_071916_create_impact_instructions_table', 33),
(70, '2020_01_03_091345_change_data_type_to_temp_factory_inspection_safeties', 34),
(73, '2020_01_09_045256_change_totalmaleworker_to_factories_table', 35),
(74, '2020_01_14_045034_change_type_to_temp_factory_inspection_impacts_table', 36),
(75, '2020_01_14_091949_add_township_id__to_affected_informations_table', 37),
(76, '2020_01_14_093702_add_township_id__to_factory_labour_inspection_laws_table', 38),
(77, '2020_01_14_095314_add_township_id__to_shop_labour_inspection_laws_table', 39),
(78, '2020_01_15_024535_add_township_id_to_factory_inspection_safeties_table', 40),
(79, '2020_01_15_024631_add_township_id_to_shop_inspection_safeties_table', 40),
(80, '2020_01_15_030353_add_township_id_to_temp_factory_inspection_safeties_table', 41),
(81, '2020_01_15_030427_add_township_id_to_temp_factory_labour_inspection_laws_table', 41),
(82, '2020_01_15_030524_add_township_id_to_temp_shop_labour_inspection_laws_table', 41),
(83, '2020_01_15_030917_add_township_id_to_temp_shop_inspection_safeties_table', 41);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_shop_names`
--

CREATE TABLE `other_shop_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_inform_id` int(11) DEFAULT NULL,
  `othershopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othershopaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_shop_names`
--

INSERT INTO `other_shop_names` (`id`, `shop_inform_id`, `othershopname`, `othershopaddress`, `created_at`, `updated_at`) VALUES
(8, 61, NULL, NULL, '2019-10-15 08:39:11', '2019-10-15 08:39:11'),
(9, 62, 'sa', 'dd', '2019-10-16 00:56:44', '2019-10-16 00:56:44'),
(10, 63, 'd', 'd', '2019-10-16 00:58:44', '2019-10-16 00:58:44'),
(11, 64, NULL, NULL, '2019-11-14 22:20:13', '2019-11-14 22:20:13'),
(12, 65, NULL, NULL, '2019-11-18 00:34:43', '2019-11-18 00:34:43'),
(13, 66, 'shop1', 'address', '2019-12-04 02:50:53', '2019-12-04 02:50:53'),
(14, 66, 'shop2', 'address', '2019-12-04 02:50:53', '2019-12-04 02:50:53'),
(15, 1, 'shop1', 'shop address', '2019-12-05 20:36:38', '2019-12-05 20:36:38'),
(16, 1, 'shop2', 'shop2 address', '2019-12-05 20:36:38', '2019-12-05 20:36:38'),
(17, 1, NULL, NULL, '2019-12-08 22:44:33', '2019-12-08 22:44:33'),
(18, 2, NULL, NULL, '2020-01-02 02:28:41', '2020-01-02 02:28:41'),
(19, 3, NULL, NULL, '2020-01-03 03:22:04', '2020-01-03 03:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `o_t_reports`
--

CREATE TABLE `o_t_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `fromuser` int(11) DEFAULT NULL,
  `touser` int(11) NOT NULL,
  `ot_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `self_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `o_t_reports`
--

INSERT INTO `o_t_reports` (`id`, `fromuser`, `touser`, `ot_id`, `status`, `created_at`, `updated_at`, `self_id`) VALUES
(1, 18, 20, 1, 0, '2019-12-08 22:52:19', '2019-12-08 22:52:19', NULL),
(2, 1, 19, 2, 1, '2019-12-09 20:43:41', '2020-01-09 21:14:07', NULL),
(3, 1, 19, 3, 1, '2019-12-10 01:34:28', '2020-01-09 21:14:03', NULL),
(4, 21, 19, 4, 1, '2020-01-09 20:34:56', '2020-01-09 21:02:52', NULL),
(5, 21, 20, 5, 0, '2020-01-14 01:05:15', '2020-01-14 01:05:15', NULL),
(6, NULL, 19, 6, 0, '2020-01-17 02:29:02', '2020-01-17 02:29:02', 3),
(7, NULL, 19, 7, 0, '2020-01-17 03:21:50', '2020-01-17 03:21:50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_ot_factories`
--

CREATE TABLE `permission_ot_factories` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_id` int(11) NOT NULL,
  `FromDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ToDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalWorker` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalOthour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `factorytype` int(11) NOT NULL,
  `township` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `touser_id` int(11) NOT NULL,
  `self_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_ot_factories`
--

INSERT INTO `permission_ot_factories` (`id`, `factory_id`, `FromDay`, `ToDay`, `TotalWorker`, `Othour`, `totalOthour`, `user_id`, `created_at`, `updated_at`, `factorytype`, `township`, `district`, `touser_id`, `self_id`) VALUES
(2, 23599, '2019-12-10', '2019-12-10', '၂', '၂', '၄', 1, '2019-12-09 20:43:41', '2019-12-09 20:43:41', 1, 3, 5, 19, NULL),
(3, 23599, '2019-12-10', '2019-12-11', '၂', '၅', '၁၀', 1, '2019-12-10 01:34:28', '2019-12-10 01:34:28', 1, 3, 5, 19, NULL),
(4, 92981, '2020-01-10', '2020-01-20', '3', '30', '၉၀', 21, '2020-01-09 20:34:56', '2020-01-09 20:34:56', 1, 3, 5, 19, NULL),
(6, 68252, '2020-01-01', '2020-01-31', '22', '2', '၄၄', NULL, '2020-01-17 02:29:02', '2020-01-17 02:29:02', 1, 3, 5, 19, 3),
(7, 68252, '2020-01-17', '2020-01-19', '22', '2', '၄၄', NULL, '2020-01-17 03:21:50', '2020-01-17 03:21:50', 1, 3, 5, 19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `region_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region_name`, `created_at`, `updated_at`) VALUES
(9, 'ရန်ကုန်တိုင်းဒေသကြီး', NULL, NULL),
(10, 'မန္တလေးတိုင်းဒေသကြီး', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'superadmin', '', '2019-08-08 02:54:28', '2019-08-08 02:54:28'),
(2, 'Minister', 'minister', '', '2019-08-08 02:54:28', '2019-08-08 02:54:28'),
(3, 'Region AD', 'Region AD', '', '2019-08-08 02:54:28', '2019-08-08 02:54:28'),
(4, 'Region Officer', 'Region Officer', '', '2019-08-08 02:54:28', '2019-08-08 02:54:28'),
(5, 'District AD', 'District AD', NULL, NULL, NULL),
(6, 'District Officer', 'District Officer', NULL, NULL, NULL),
(7, 'Township AD', 'Township AD', NULL, NULL, NULL),
(8, 'Township Officer', 'Township Officer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(13, 3, NULL, NULL),
(18, 8, NULL, NULL),
(19, 7, NULL, NULL),
(20, 3, NULL, NULL),
(21, 1, NULL, NULL),
(22, 8, NULL, NULL),
(23, 7, NULL, NULL),
(24, 6, NULL, NULL),
(25, 5, NULL, NULL),
(26, 1, NULL, NULL),
(27, 5, NULL, NULL),
(28, 8, NULL, NULL),
(29, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `selfregistrations`
--

CREATE TABLE `selfregistrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `factory_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selfregistrations`
--

INSERT INTO `selfregistrations` (`id`, `name`, `phone`, `email`, `company_name`, `type`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `factory_id`, `shop_id`) VALUES
(1, 'testing', '9380200', 'testtest@gmail.com', 'testtest', 'factory', '$2y$10$7Bd/9G.96O0ZP2LeR5qnBuPIWctCxjn0sS5cTmfdhwAPLJ8o2.dAy', 0, 'ZojqL5O81oEokgM9t9KBBN6oiBuUIdtzQEYzIppqPajngVZ1Je51N6mbI7Gj', '2019-11-07 04:27:21', '2019-11-07 04:27:43', NULL, NULL),
(3, 'Htet Nyi Aung', '09799195212', 'nyinyi@gmail.com', 'dfdf', 'factory', '$2y$10$rRY2EKp/tDY9X0edCdNwDeeYx3zH5ywWJin4UnDBlb5kF8G9x1iJe', 0, 'Qbh6WKT8BFVTGJV7kenKIGb4hsYxEL7GTelW54QX5eFMHtBkp2uuZQBSDPlq', '2019-11-07 22:04:00', '2020-01-17 02:48:51', 68252, NULL),
(4, 'Shop', '09799330', 'shop@gmail.com', 'sho.com.mm', 'shop', '$2y$10$d/CtRT1XmtL/rBUWdsp8UOnpY3hf7cg0cE198c0aTEXZqjTp5EqGi', 0, 'xWUZ0wHGnQ2c7a9cUEhLwTi4JPrZ50VRlgrCZrHdeCxJThEbNyyBY0fq4SQJ', '2019-11-13 20:33:21', '2019-11-13 20:33:52', NULL, 19747),
(5, 'htert', '009933', 'factory@gmai.com', 'Factory', 'factory', '$2y$10$n05YgunNWz6i7jA5nCBhB.M812Y0E3KsS1W.rdZsOhqmur24oL6M6', 0, 'c0Q6edU1KuYmD3M9u1lguW61KEQpq5fbCG7J2ZW3TalQmkND1oezKlKQgw8m', '2019-11-15 02:26:58', '2019-11-15 02:27:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `selfregistration_password_resets`
--

CREATE TABLE `selfregistration_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` int(10) UNSIGNED NOT NULL,
  `ftype` int(11) NOT NULL,
  `s_leader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_leaderrank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_contributor1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contributor1rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contributor2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contributor2rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contributor3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_contributor3rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `township_id` int(11) NOT NULL,
  `factory_id` int(11) NOT NULL,
  `factoryname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainingclass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emen` int(11) NOT NULL,
  `ewomen` int(11) NOT NULL,
  `mmen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mwomen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_times` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `helddate` date DEFAULT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `ftype`, `s_leader`, `s_leaderrank`, `s_contributor1`, `s_contributor1rank`, `s_contributor2`, `s_contributor2rank`, `s_contributor3`, `s_contributor3rank`, `s_place`, `township_id`, `factory_id`, `factoryname`, `trainingclass`, `emen`, `ewomen`, `mmen`, `mwomen`, `s_times`, `user_id`, `created_at`, `updated_at`, `helddate`, `district_id`) VALUES
(4, 1, 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်', 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး', 'ဆွေးနွေးသူ၁', 'ဆွေးနွေးသူ ရာထူး', 'ဆွေးနွေးသူ ၂', 'ဆွေးနွေးသူ ရာထူး', 'ဆွေးနွေးသူ ၃', 'ဆွေးနွေးသူ ရာထူး', 'ကျင်းပပြုလုပ်သည့်နေရာ', 3, 23599, 'အာရှသမာဓိအထည်ချုပ်', 'သင်တန်းကျောင်းအမည်', 22, 22, '၂၂', '၂၂', 'ဒုတိယအကြိမ်', 1, '2019-10-03 22:02:36', '2019-10-03 22:02:36', '2019-10-01', 5),
(5, 2, 'ဦးသူရအောင်', 'ဥပဒေဦးစီးအရာရှိ', NULL, NULL, NULL, NULL, NULL, NULL, 'Shwe Pyi Thar', 3, 48108, 'Blue Mountain', 'သင်တန်းကျောင်း', 2, 2, '၂', '၂', 'ပထမအကြိမ်', 18, '2019-10-16 00:08:27', '2019-10-16 00:08:27', '2019-10-01', 5),
(6, 1, 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်', 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး', NULL, NULL, NULL, NULL, NULL, NULL, 'hlaing thar yar', 3, 23599, 'အာရှသမာဓိအထည်ချုပ်', NULL, 2, 2, '၂', '၂', 'တတိယအကြိမ်', 18, '2019-10-16 01:49:18', '2019-10-16 01:49:18', '2019-10-01', 5),
(7, 1, 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်', 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး', 'ဆွေးနွေးသူ၁', 'ဆွေးနွေးသူ ရာထူး', NULL, NULL, NULL, NULL, 'hlaing thar yar', 3, 68252, 'ok dollar 2', 'သင်တန်းကျောင်းအမည်', 22, 22, '၂၂', '၂၂', 'second time', 1, '2019-11-18 00:47:42', '2019-11-18 00:47:42', '2019-11-18', 5),
(8, 1, 'U Ba', 'gg', NULL, NULL, NULL, NULL, NULL, NULL, 'office', 5, 60799, 'overSeaCompany Ltd', 'gg', 22, 22, '22', '22', 'second', 21, '2019-12-04 21:13:14', '2019-12-04 21:13:14', '2019-12-05', 4),
(9, 1, 'U Soe Nyi Nyi', 'ဥပဒေဦးစီးအရာရှိ', NULL, NULL, NULL, NULL, NULL, NULL, 'test', 3, 23599, 'အာရှသမာဓိအထည်ချုပ်', 'test', 22, 22, '၂၂', '၂၂', 'second', 1, '2019-12-09 23:00:35', '2019-12-09 23:00:35', '2019-12-10', 5),
(10, 1, 'ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်', 'fdf', NULL, NULL, NULL, NULL, NULL, NULL, 'place', 15, 92981, 'Asia Co Ltd', 'fdf', 22, 22, '22', '22', 'ddf', 21, '2020-01-14 00:16:04', '2020-01-14 00:16:04', '2020-01-14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_inform_id` int(11) NOT NULL,
  `share` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_inform_id` int(11) NOT NULL,
  `share` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `ShopId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shoptype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownernrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owneraddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneremail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mangername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `managernrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manageraddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `managerphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `managerfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageremail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operate24hr` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loacationaddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyMenWorker` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MForeignerMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MForeignerWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyForeignerMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyForeignerWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PForeignerMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PForeignerWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalforeignmen` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalforeignwomen` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalMaleWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalFemaleWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PropertyType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UsedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedOthers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MonthlyAmounts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RawMaterials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Goods` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OverTime` tinyint(3) UNSIGNED NOT NULL,
  `OTPermit` tinyint(3) UNSIGNED NOT NULL,
  `SSB` tinyint(3) UNSIGNED NOT NULL,
  `SafteySide` tinyint(3) UNSIGNED NOT NULL,
  `ManagementExpert` tinyint(3) UNSIGNED NOT NULL,
  `StartDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Welfare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccidentRecordBook` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyHealth` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyRank` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerMenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerWomenWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SalaryDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MinimumSalary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaximumSalary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkTimeType` tinyint(3) UNSIGNED NOT NULL,
  `StartWorkTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EndWorkTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freetimefrom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freetimeto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closeworkdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` date NOT NULL,
  `PreNoticeDate` date DEFAULT NULL,
  `SignatureName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SignatureRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `township_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `self_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `ShopId`, `shopname`, `shopemail`, `shopfax`, `shopphone`, `ownername`, `shoptype`, `ownernrc`, `owneraddress`, `ownerphone`, `ownerfax`, `owneremail`, `mangername`, `managernrc`, `manageraddress`, `managerphone`, `managerfax`, `manageremail`, `OwnerPassport`, `operate24hr`, `loacationaddress`, `MenWorker`, `WomenWorker`, `DailyMenWorker`, `DailyWomenWorker`, `PieceMenWorker`, `PieceWomenWorker`, `CMenWorker`, `CWomenWorker`, `CDailyMenWorker`, `CDailyWomenWorker`, `CPieceMenWorker`, `CPieceWomenWorker`, `AMenWorker`, `AWomenWorker`, `ADailyMenWorker`, `ADailyWomenWorker`, `APieceMenWorker`, `APieceWomenWorker`, `MForeignerMenWorker`, `MForeignerWomenWorker`, `DailyForeignerMenWorker`, `DailyForeignerWomenWorker`, `PForeignerMenWorker`, `PForeignerWomenWorker`, `totalforeignmen`, `totalforeignwomen`, `totalMaleWorker`, `totalFemaleWorker`, `PropertyType`, `UsedPower`, `Investment`, `ProducedProduct`, `ProducedOthers`, `MonthlyAmounts`, `RawMaterials`, `Goods`, `WorkType`, `Contract`, `OverTime`, `OTPermit`, `SSB`, `SafteySide`, `ManagementExpert`, `StartDate`, `Welfare`, `AccidentRecordBook`, `SafetyHealth`, `SafetyRank`, `CitizenMenWorker`, `CitizenWomenWorker`, `ForeignerMenWorker`, `ForeignerWomenWorker`, `section_id`, `division_id`, `group_id`, `class_name`, `SalaryDate`, `MinimumSalary`, `MaximumSalary`, `WorkTimeType`, `StartWorkTime`, `EndWorkTime`, `freetimefrom`, `freetimeto`, `closeworkdays`, `RegDate`, `PreNoticeDate`, `SignatureName`, `SignatureRank`, `SubscriberName`, `SubscriberRank`, `region_id`, `district_id`, `township_id`, `created_at`, `updated_at`, `self_id`, `status`) VALUES
(5, '48108', 'Noble Shop', 'noble@gmail.com', NULL, '0925737399', 'ဦးအောင်စိုး', 'ကြီး', '၁၂/မရက(နိုင်)၀၂၃၄၅၇', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '၀၉၃၈၉၉၀၃', NULL, 'd', 'ဦးသန့်', 'd', 'd', 'd', NULL, 'd', NULL, '0', 'လှိုင်သာယာမြို့နယ်၊address', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '၆၆', '၆၆', 'နိုင်ငံ', NULL, 'LDI', 's', 'd', NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-01-01', '1', 'ရှိ', 'ရှိ', NULL, '၆၆', '၆၆', '၂၂', '၂၂', 1, 1, 1, '0111', 'လဆန်း(၉)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-01-01', NULL, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-10-15 08:34:33', '2019-12-08 22:44:33', NULL, 0),
(8, '80049', 'One Stop Mark', NULL, NULL, '၀၉၇၈၀၁၉၈၈၃', 'ဦးစိုးတင့်', 'ကြီး', '၅/မရက(နိုင်)၀၂၃၄၅၇', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '၀၉၃၈၈၀၀၄', NULL, 'd', 'ဦးထူး', 'd', 'd', 'd', NULL, 'd', NULL, '0', 'address', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '၆၆', '၆၆', 'နိုင်ငံ', NULL, 'LDI', 's', 'd', NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-01-01', '1', 'ရှိ', 'ရှိ', NULL, '၆၆', '၆၆', '၂၂', '၂၂', 1, 1, 1, '0111', 'လဆန်း(၉)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-01-01', NULL, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-10-15 08:34:33', '2019-10-16 02:35:05', NULL, 0),
(9, '49039', 'ABC', '', NULL, '097865432', 'ဦးမောင်မောင်', 'ကြီး', '၁၂/မရက(နိုင်)၀၂၃၄၅၆', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '၀၉၂၅၆၁၆၁၄', NULL, 'mgmg@gmail.com', 'ဦးသန့်ထူး', '၁၂/မရက(နိုင်)၀၂၂၃၄၅', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', '', NULL, '', NULL, '0', 'လှိုင်သာယာမြို့နယ်၊ဗဟန်းမြို့နယ်', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '၂၆', '၆', 'နိုင်ငံ', NULL, 'LDI', 's', 'd', NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-01-01', '1', 'ရှိ', 'ရှိ', NULL, '၆၆', '၆၆', '၂၂', '၂၂', 1, 1, 1, '0111', 'လဆန်း(၉)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-01-01', NULL, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-10-15 08:34:33', '2019-11-18 00:34:43', NULL, 0),
(10, '58906', 'G & G ', 'gg @gmail.com', NULL, '0978300499', 'U Maung', 'ကြီး', '5/khaoonaing(1032840', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '၀၉၄၀၀၅၂၉၅၁၅', NULL, 'd', 'ဦးအေးအောင်', 'd', 'd', 'd', NULL, 'd', NULL, '0', 'address', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '၆၆', '၆၆', 'နိုင်ငံ', NULL, 'LDI', 's', 'd', NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-01-01', '1', 'ရှိ', 'ရှိ', NULL, '၆၆', '၆၆', '၂၂', '၂၂', 1, 1, 1, '0111', 'လဆန်း(၉)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-01-01', NULL, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-10-15 08:34:33', '2019-10-16 00:59:54', NULL, 0),
(11, '89490', 'Shwe Htike Tan', '', NULL, '097865432', 'ဦးမောင်', 'ကြီး', '၁၂/မရက(နိုင်)၀၂၃၄၅၆', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', '097865432', NULL, 'mgmg@gmail.com', 'ဦးငွေအောင်', '၁၂/မရက(နိုင်)၀၂၂၃၄၅', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', '', NULL, '', NULL, '0', 'လှိုင်သာယာမြို့နယ်၊ဗဟန်းမြို့နယ်', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂', '0', '0', '0', '0', '၂၂', '၂၂', '0', '0', '0', '0', '၂၂', '၂၂', '၆၆', '၆၆', 'နိုင်ငံ', NULL, 'LDI', 's', 'd', NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-01-01', '1', 'ရှိ', 'ရှိ', NULL, '၆၆', '၆၆', '၂၂', '၂၂', 1, 1, 1, '0111', 'လဆန်း(၉)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-01-01', NULL, 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-10-15 08:34:33', '2020-01-02 02:28:41', NULL, 0),
(12, '19747', 'shop.com.mm', NULL, NULL, '0978299202', 'Owner Name', 'ကြီး', '5/Nrc 93043', 'owner add', '0928239930', NULL, NULL, 'Manager Name', 'manager nrc', 'manager address', 'manager phone', NULL, NULL, NULL, '0', 'လှိုင်သာယာမြို့နယ်၊လိပ်စာ\r\nလိပ်စာ', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '၂', '၂', '၂', '၂', NULL, NULL, '၆', '၆', 'နိုင်ငံ', NULL, 'LDI', NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-11-15', '1', 'ရှိ', 'ရှိ', NULL, '၆', '၆', '၆', '၆', 1, 1, 1, '0111', 'လဆန်း(၂)ရက်', '၂၀၀၀၀၀', '၄၀၀၀၀၀', 0, '08:00', '17:00', '00:00', '13:00', 'Sunday', '2019-11-21', '2019-11-14', NULL, NULL, 'name', 'HR Manager', 9, 5, 3, '2019-11-13 21:32:37', '2019-11-14 22:20:13', 4, 1),
(14, '29728', 'testing shop', NULL, NULL, '0979793', 'owner name', 'ကြီး', 'nrc', 'adddress', 'phone', 'fax', 'email', 'managername', 'nrc', 'address', 'phone', 'fax', 'email@gmail.ocm', NULL, '0', 'လှိုင်သာယာမြို့နယ်၊address', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂', '၂၂၂', '၂', '၂', '၂', '၂', '၂', '၂၂၆', '၆', '၆', '၆', 'နိုင်ငံ', NULL, 'LDI', NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-11-19', '1', 'ရှိ', 'မရှိ', NULL, '၁၈', '၁၈', '၂၂၆', '၆', 1, 1, 1, '0111', 'လကုန်ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀', 0, '01:00', '01:01', '01:01', '01:00', 'sunday', '2019-01-01', '2019-01-01', 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', NULL, NULL, 9, 5, 3, '2019-11-19 01:31:01', '2020-01-03 03:22:04', NULL, 0),
(15, '74188', 'TestFor', NULL, NULL, '0978022002', 'Owner Name', 'ကြီး', '5/khaoona(N)193939', 'Ownere address', '0937883993', NULL, NULL, 'Manager', '5/khaoona(N)330030', 'manager address', '0978939399', NULL, NULL, NULL, '0', 'လှိုင်သာယာမြို့နယ်၊လှိုင်သာယာမြို့နယ်၊address', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '0', '0', '0', '0', '၂', '၂', '၂', '၂', '၂', '၂', '၆', '၆', '၆၆', '၆၆', 'နိုင်ငံ', NULL, 'LDI', NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, 1, 1, 1, 1, '2019-12-12', '1', 'ရှိ', 'မရှိ', NULL, '၆', '၆', '၆', '၆', 1, 1, 1, '0111', 'လကုန်ရက်', '၂၀၀၀၀၀', '၅၀၀၀၀၀၀', 0, '09:00', '17:00', '00:00', '13:00', 'sunday', '2019-01-01', '2019-01-01', 'စစ်ဆေးသူ အမည်', 'စစ်ဆေးသူ ရာထူး', 'စာရင်းသွင်းသူ အမည်', 'စာရင်းသွင်းသူ ရာထူး', 9, 5, 3, '2019-12-04 01:01:05', '2019-12-05 20:36:38', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_closes`
--

CREATE TABLE `shop_closes` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ShopAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalWorker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoticeDate` date NOT NULL,
  `CloseDate` date DEFAULT NULL,
  `DesCloseShop` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_closes`
--

INSERT INTO `shop_closes` (`id`, `shop_id`, `ShopAddress`, `totalWorker`, `NoticeDate`, `CloseDate`, `DesCloseShop`, `attachfile`, `created_at`, `updated_at`) VALUES
(1, '19747', 'လှိုင်သာယာမြို့နယ် ၊ လိပ်စာ\r\nလိပ်စာ', '၁၂', '2019-11-15', '2019-11-15', NULL, NULL, '2019-11-14 00:18:41', '2019-11-14 00:18:41'),
(2, '679', 'လှိုင်သာယာမြို့နယ်၊address', '၃၆', '2019-11-19', '2019-11-19', NULL, NULL, '2019-11-17 22:23:45', '2019-11-17 22:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `shop_document_attachs`
--

CREATE TABLE `shop_document_attachs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ShopId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerSentNotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkingTimeNotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkStartInform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec_contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MICLicense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CompanyNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IndustryLicense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Import_Export_License` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Municipal_License` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_license6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_document_attachs`
--

INSERT INTO `shop_document_attachs` (`id`, `ShopId`, `attach_path`, `OwnerSentNotice`, `WorkingTimeNotice`, `WorkStartInform`, `ec_contract`, `MICLicense`, `CompanyNrc`, `IndustryLicense`, `Import_Export_License`, `Municipal_License`, `other_license1`, `other_license2`, `other_license3`, `other_license4`, `other_license5`, `other_license6`, `created_at`, `updated_at`) VALUES
(7, '101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-30 20:54:32', '2019-09-30 20:54:32'),
(8, '54556', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-08 02:50:11', '2019-10-08 02:50:11'),
(9, '15822', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-08 02:52:14', '2019-10-08 02:52:14'),
(10, '26717', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-08 20:45:56', '2019-10-08 20:45:56'),
(11, '48108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 08:34:33', '2019-10-15 08:34:33'),
(12, '53618', NULL, 'OwnerSentNotice-10.16.19.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-15 21:29:22', '2019-10-15 21:29:22'),
(13, '78246', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-16 00:33:20', '2019-10-16 00:33:20'),
(14, '80049', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-16 02:35:05', '2019-10-16 02:35:05'),
(15, '19747', NULL, 'OwnerSentNotice-11.14.19.png', 'WorkingTimeNotice-11.14.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-13 21:32:37', '2019-11-13 22:11:03'),
(16, '679', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-17 22:18:30', '2019-11-17 22:18:30'),
(17, '29728', NULL, 'OwnerSentNotice-11.19.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-19 01:31:01', '2019-11-19 01:31:01'),
(18, '74188', NULL, 'OwnerSentNotice-12.04.19.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-04 01:01:06', '2019-12-04 01:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `shop_inspection_1951_laws`
--

CREATE TABLE `shop_inspection_1951_laws` (
  `id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `numholidays` varchar(255) NOT NULL,
  `opportunityhol` varchar(255) NOT NULL,
  `paidwage` varchar(255) NOT NULL,
  `vacationdays` varchar(255) NOT NULL,
  `workerfrees` varchar(255) NOT NULL,
  `annual` varchar(255) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `registrationbook` varchar(255) NOT NULL,
  `medicalticketqan` varchar(191) DEFAULT NULL,
  `passionremark` varchar(191) DEFAULT NULL,
  `generalremark` varchar(191) DEFAULT NULL,
  `officeremark` varchar(191) DEFAULT NULL,
  `inspectionname` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop_inspection_2016_laws`
--

CREATE TABLE `shop_inspection_2016_laws` (
  `id` int(11) NOT NULL,
  `shop_id` int(255) DEFAULT NULL,
  `check_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `work_duration` varchar(255) DEFAULT NULL,
  `worktime_notice` varchar(255) DEFAULT NULL,
  `SSB` varchar(255) DEFAULT NULL,
  `salary_time` varchar(25) DEFAULT NULL,
  `weekend_holiday` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop_inspection_informs`
--

CREATE TABLE `shop_inspection_informs` (
  `id` int(11) NOT NULL,
  `inspectionid` int(11) DEFAULT NULL,
  `inspection_name` varchar(50) NOT NULL,
  `inspectorrank` varchar(25) DEFAULT NULL,
  `ShopId` int(25) NOT NULL,
  `inspectiondate` varchar(25) NOT NULL,
  `lastinspectiondate` varchar(25) DEFAULT NULL,
  `inspectedtime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspection_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopaddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workcategory` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageraddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweenamerank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above18m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above15m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above13m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalm` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above18f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above15f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above13f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalf` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shares` mediumtext DEFAULT NULL,
  `other_shops` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_inspection_informs`
--

INSERT INTO `shop_inspection_informs` (`id`, `inspectionid`, `inspection_name`, `inspectorrank`, `ShopId`, `inspectiondate`, `lastinspectiondate`, `inspectedtime`, `inspection_type`, `shopname`, `shopaddress`, `property`, `ownername`, `owneraddress`, `workcategory`, `managername`, `manageraddress`, `intervieweename`, `intervieweenamerank`, `above18m`, `above15m`, `above13m`, `totalm`, `above18f`, `above15f`, `above13f`, `totalf`, `shares`, `other_shops`, `created_at`, `updated_at`) VALUES
(2, 21, 'စစ်ဆေးရေးအရာရှိအမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', 89490, '2020-01-02', NULL, 'ပထမအကြိမ်', 'ပုံမှန်', 'Shwe Htike Tan', 'လှိုင်သာယာမြို့နယ်၊ဗဟန်းမြို့နယ်', 'နိုင်ငံ', 'ဦးမောင်', '၅ ပြည်လမ်း လှိုင်သာယာမြို့နယ်', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'ဦးငွေအောင်', 'အမှတ်(၂၀၃ဘီ)  ရွှေတောင်ကြားလမ်း ဗဟန်းမြို့နယ်', NULL, NULL, '0', '0', '0', NULL, '0', '0', '0', NULL, NULL, NULL, '2020-01-02 08:58:41', '2020-01-02 08:58:41'),
(3, 21, 'စစ်ဆေးရေးအရာရှိအမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', 29728, '2020-01-03', NULL, 'ပထမအကြိမ်', 'ပုံမှန်', 'testing shop', 'လှိုင်သာယာမြို့နယ်၊address', 'နိုင်ငံ', 'owner name', 'adddress', 'နှံစားပင်(ဆန်စပါးမှအပ)၊ ပဲတောင့်ရှည် ကောက်ပဲသီးနှံနှင့် ဆီထွက်အစေ့များ စိုက်ပျိုးခြင်း', 'managername', 'address', NULL, NULL, '2', '2', '2', '၆', '2', '2', '2', '၆', NULL, NULL, '2020-01-03 09:52:04', '2020-01-03 09:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `shop_inspection_safeties`
--

CREATE TABLE `shop_inspection_safeties` (
  `id` int(10) UNSIGNED NOT NULL,
  `check_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopregion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopOwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopOwnerAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `womenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workclean` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainflow` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employmentPaint` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workenvironment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircondition` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `particals` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accomodation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populationstatus` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunlight` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `natureandlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwater` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwatermana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletfinding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiseprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiceprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangerprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protectmach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machineprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinepieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionentry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinefinding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearingstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladderstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecoverstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergasuses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escapeman` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firealam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyentrace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleargoway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutfire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sittingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroomplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursinginstruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinformation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotectwear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safetyhealth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negotiate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safteyhealthcare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorrank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_inspection_safeties`
--

INSERT INTO `shop_inspection_safeties` (`id`, `check_id`, `shop_id`, `user_id`, `shopname`, `shopregion`, `ownername`, `owneraddress`, `shopOwnerNrc`, `shopOwnerAddress`, `intervieweeName`, `intervieweeAddress`, `energytype`, `horsepower`, `producedProduct`, `producedPower`, `workType`, `workTime`, `menworker`, `womenworker`, `totalworker`, `medicalticket`, `workclean`, `drainflow`, `employmentPaint`, `workenvironment`, `aircondition`, `weather`, `particals`, `accomodation`, `populationstatus`, `population`, `nature`, `sunlight`, `natureandlight`, `drinkingwater`, `drinkingwatermana`, `toilet`, `toiletType`, `genderdivide`, `toiletquantity`, `tioletfinding`, `noiseprotect`, `noiceprotection`, `dangerprotect`, `protectmach`, `machinestatus`, `machineprotection`, `machinepieces`, `load`, `inspectionentry`, `machinefinding`, `wearing`, `wearingstatus`, `ladder`, `ladderstatus`, `holecover`, `holecoverstatus`, `dangergas`, `dangergasuses`, `escapeman`, `firealam`, `emergencyentrace`, `cleargoway`, `aboutfire`, `seat`, `sittingplan`, `dinningroom`, `dinningroomplan`, `babysittingroom`, `babysittingplan`, `washing`, `washingplan`, `nursing`, `nursinginstruction`, `accidentinform`, `accidentinformation`, `selfprotectwear`, `selfprotection`, `safetyhealth`, `negotiate`, `training`, `safteyhealthcare`, `change1`, `change2`, `change3`, `change4`, `change5`, `inspectorname`, `inspectorrank`, `created_at`, `updated_at`, `township_id`) VALUES
(2, 2, 89490, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sd', NULL, NULL, 'ပိတ်ရက်Sunday 08:00မှ17:00အထိ', '22', '22', NULL, 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02 02:30:39', '2020-01-02 02:30:39', 0),
(3, 2, 89490, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sd', NULL, NULL, 'ပိတ်ရက်Sunday 08:00မှ17:00အထိ', '22', '22', NULL, 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-02 02:31:19', '2020-01-02 02:31:19', 0),
(4, 2, 89490, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sd', NULL, NULL, 'ပိတ်ရက်Sunday 08:00မှ17:00အထိ', '22', '22', NULL, 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-02 02:32:00', '2020-01-02 02:32:00', 0),
(5, 2, 89490, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sd', NULL, NULL, 'ပိတ်ရက်Sunday 08:00မှ17:00အထိ', '22', '22', NULL, 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-02 02:32:25', '2020-01-02 02:32:25', 0),
(6, 3, 29728, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'ပိတ်ရက်sunday 01:00မှ01:01အထိ', '၆', '၆', NULL, 'ရှိ', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ညံ့', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', NULL, 'ကောင်း', 'ကောင်း', 'ကောင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိ အမည်', 'စစ်ဆေးသူအရာရှိ ရာထူး', '2020-01-03 03:30:53', '2020-01-03 03:30:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_labour_inspection_laws`
--

CREATE TABLE `shop_labour_inspection_laws` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_duration` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worktime_notice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSB` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_holiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numholidays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opportunityhol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paidwage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacationdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerfrees` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticketqan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passionremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_labour_inspection_laws`
--

INSERT INTO `shop_labour_inspection_laws` (`id`, `shop_id`, `check_id`, `user_id`, `work_duration`, `worktime_notice`, `SSB`, `salary_time`, `weekend_holiday`, `numholidays`, `opportunityhol`, `paidwage`, `vacationdays`, `workerfrees`, `annual`, `contract`, `registrationbook`, `medicalticketqan`, `passionremark`, `generalremark`, `officeremark`, `inspectionname`, `created_at`, `updated_at`, `township_id`) VALUES
(1, 48108, 1, 18, 'အလုပ်စသည့်အချိန် - 08:00 ၊ အလုပ်ပြီးသည့်အချိန် - 17:00၊ အားလပ်ချိန် - 00:00မှ13:00အထိ', 'မပြု', 'ထား', 'မပေး', 'Sunday', 'ရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', 'တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော ဆေးလက်မှတ် အရေအတွက်', 'd', NULL, NULL, 'U Nyi Nyi', '2019-12-08 22:45:50', '2019-12-30 03:08:11', 3),
(2, 89490, 2, 21, 'အလုပ်စသည့်အချိန် - 08:00 ၊ အလုပ်ပြီးသည့်အချိန် - 17:00၊ အားလပ်ချိန် - 00:00မှ13:00အထိ', 'မပြု', 'ထား', 'မပေး', 'Sunday', 'မရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိအမည်', '2020-01-02 02:34:33', '2020-01-02 02:34:33', 3),
(3, 89490, 2, 21, 'အလုပ်စသည့်အချိန် - 08:00 ၊ အလုပ်ပြီးသည့်အချိန် - 17:00၊ အားလပ်ချိန် - 00:00မှ13:00အထိ', 'မပြု', 'ထား', 'မပေး', 'Sunday', 'မရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိအမည်', '2020-01-02 02:35:19', '2020-01-02 02:35:19', 3),
(4, 89490, 2, 21, 'အလုပ်စသည့်အချိန် - 08:00 ၊ အလုပ်ပြီးသည့်အချိန် - 17:00၊ အားလပ်ချိန် - 00:00မှ13:00အထိ', 'မပြု', 'ထား', 'မပေး', 'Sunday', 'မရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိအမည်', '2020-01-02 02:35:45', '2020-01-02 02:35:45', 3),
(5, 89490, 2, 21, 'အလုပ်စသည့်အချိန် - 08:00 ၊ အလုပ်ပြီးသည့်အချိန် - 17:00၊ အားလပ်ချိန် - 00:00မှ13:00အထိ', 'မပြု', 'ထား', 'မပေး', 'Sunday', 'မရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိအမည်', '2020-01-02 02:36:04', '2020-01-02 02:36:04', 3),
(6, 29728, 3, 21, 'အလုပ်စသည့်အချိန် - 01:00 ၊ အလုပ်ပြီးသည့်အချိန် - 01:01၊ အားလပ်ချိန် - 01:01မှ01:00အထိ', 'မပြု', 'ထား', 'မပေး', 'sunday', 'မရှိ', 'ပြု', 'မရှိ', 'မပေး', 'ရှိ', 'မရှိ', 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, 'စစ်ဆေးသူအရာရှိအမည်', '2020-01-03 03:33:04', '2020-01-03 03:33:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shop_workers`
--

CREATE TABLE `shop_workers` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `shop_inform_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `daily_work_hours` varchar(20) DEFAULT NULL,
  `break_time` varchar(20) DEFAULT NULL,
  `weekly_off_day` varchar(20) DEFAULT NULL,
  `joning_date` date DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_workers`
--

INSERT INTO `shop_workers` (`id`, `type`, `shop_inform_id`, `name`, `position`, `salary`, `daily_work_hours`, `break_time`, `weekly_off_day`, `joning_date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(32, NULL, 62, 'name1', 'q', 'q', 'q', 'q', 'q', '2019-10-16', 'q', NULL, '2019-10-16', '2019-10-16'),
(33, NULL, 63, 'ိ', 'ိ', '်ိ်ိ', '်ိ်ိ', '်ိ်', 'ိ်', '2019-10-02', 'ိ်', NULL, '2019-10-16', '2019-10-16'),
(34, NULL, 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-15', '2019-11-15'),
(35, NULL, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-18', '2019-11-18'),
(36, NULL, 66, 'name', 'occupation', 'wage', 'daily works', 'relax time', 'weekends', '2019-01-01', 'address', NULL, '2019-12-04', '2019-12-04'),
(37, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-06', '2019-12-06'),
(38, NULL, 1, 'name', 'occupation', 'wage', 'work time', 'relax', 'holiday', '2019-01-01', 'dd', NULL, '2019-12-09', '2019-12-09'),
(39, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-02', '2020-01-02'),
(40, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-03', '2020-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_inspection_acts`
--

CREATE TABLE `temp_factory_inspection_acts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `factoryinspectioninform_id` int(11) DEFAULT NULL,
  `inspection_id` int(11) DEFAULT NULL,
  `sentnotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shownotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workingduration` date DEFAULT NULL,
  `repeatitivework` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changenotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informchangenotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equalnotice` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weeklyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekendholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insteadrelaxdays` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepermit` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workwithpermit` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otpayscale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diffrentotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowtimecalculate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotallow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalottime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twofacbyday` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `definedworktime` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stosworktime` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washusestate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situsestate` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalcaretype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watercleanence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffientamount` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooling` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletcategroy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletplace` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletclean` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentcase` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerregistrationbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childregistrationbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otbook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wokerofficetimebook` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_inspection_impacts`
--

CREATE TABLE `temp_factory_inspection_impacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `affected_inform_id` int(11) DEFAULT NULL,
  `workname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL,
  `region_id` int(15) DEFAULT NULL,
  `zone_id` int(15) DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workermale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `workerfemale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `dieworkername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieworkerage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieworkerex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofsex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimatedloss` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `absentworkday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnworkdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injury` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casecondition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `damageoccur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occurdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occurtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affectpart` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofaffect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causehurm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivenoti` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectiondate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkPosition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injurybrief` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullprocess` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `underlyingcauses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basiccauses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessname1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessposition1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessname2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessposition2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witnessmanagername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspector` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_inspection_informs`
--

CREATE TABLE `temp_factory_inspection_informs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectedtimes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectiontype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectiondate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastinspectiondate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerowneraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registerownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workertotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweerank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producttype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobopen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closeddate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mmenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mwomenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dmenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dwomenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pmenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pwomenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cmenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cwomenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DCmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DCfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PCfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCmaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCfemaleworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspection_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorrank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `factory_inspection_inform_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_inspection_safeties`
--

CREATE TABLE `temp_factory_inspection_safeties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `factoryinspectioninform_id` int(11) DEFAULT NULL,
  `inspection_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspection_datetime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryregion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryOwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factoryOwnerAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `womenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workclean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainflow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employmentPaint` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircondition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `particals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populationstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwatermana` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiseprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiceprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangerprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protectmach` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machineprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinepieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionentry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinefinding` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearingstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladderstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecoverstatus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergasuses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escapeman` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firealam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyentrace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleargoway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutfire` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sittingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroomplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washingplan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursinginstruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinformation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotectwear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotection` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safetyhealth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negotiate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safteyhealthcare` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorrank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_inspection_wages`
--

CREATE TABLE `temp_factory_inspection_wages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `factoryinspectioninform_id` int(11) DEFAULT NULL,
  `inspection_id` int(11) DEFAULT NULL,
  `Mpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ppaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTpaymentplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniregularprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxregularprizee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedworkers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldedutedamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentnote` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductednote` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowotnote` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_labour_inspection_laws`
--

CREATE TABLE `temp_factory_labour_inspection_laws` (
  `id` int(10) UNSIGNED NOT NULL,
  `factory_id` int(11) NOT NULL,
  `factoryinspectioninform_id` int(11) NOT NULL,
  `inspection_id` int(11) NOT NULL,
  `sentnotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shownotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workingduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repeatitivework` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changenotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informchangenotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equalnotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weeklyworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekendholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insteadrelaxdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepermit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workwithpermit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otpayscale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diffrentotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowtimecalculate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotallow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalottime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegalotpayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twofacbyday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `definedworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stosworktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washusestate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitcategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situsestate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalcaretype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `watercleanence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffientamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cooling` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletcategroy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletclean` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mtioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftioletroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentcase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerregistrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childregistrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wokerofficetimebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causalleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annualleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalleave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maternity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekholiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leavenote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ppaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cpaymentduration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTpaymentplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniexperprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniregularprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniproductprize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldeductedworkers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `illegaldedutedamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentnote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deductednote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowotnote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_leaves`
--

CREATE TABLE `temp_factory_leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `factoryinspectioninform_id` int(11) DEFAULT NULL,
  `inspection_id` int(11) DEFAULT NULL,
  `causalleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `annualleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicalleave` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `maternity` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicholiday` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekendholiday` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `leavenote` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_factory_registers`
--

CREATE TABLE `temp_factory_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `FactoryName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `NoticeAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactPhone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailAdd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NextYearProcess` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StreamHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GasHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MotorHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WaterHP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ElectricPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PreNoticeDate` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MCfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CAfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCmaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CCfemaleworker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalMaleWorker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalFemaleWorker` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StartDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TestingDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkTimeType` tinyint(3) UNSIGNED DEFAULT NULL,
  `MToSTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToSTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimein` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STimeout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LunchTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ManagerName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerAddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPhno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerFax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` date DEFAULT NULL,
  `IndustryCategory_Id` int(11) DEFAULT NULL,
  `Investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UsedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PropertyType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedOthers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoticeStatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `RawMaterials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Goods` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MonthlyAmounts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SalaryDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MinimumSalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaximumSalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OverTime` tinyint(3) UNSIGNED DEFAULT NULL,
  `OTPermit` tinyint(3) UNSIGNED DEFAULT NULL,
  `SafteySide` tinyint(3) UNSIGNED DEFAULT NULL,
  `Welfare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSB` tinyint(3) UNSIGNED DEFAULT NULL,
  `ManagementExpert` tinyint(3) UNSIGNED DEFAULT NULL,
  `SignatureName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SignatureRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccidentRecordBook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyHealth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeInOther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MToFTimeoutOther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FactoryAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `township_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeofFactory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_factory_registers`
--

INSERT INTO `temp_factory_registers` (`id`, `FactoryName`, `user_id`, `NoticeAddress`, `ContactAddress`, `ContactPhone`, `ContactFax`, `EmailAdd`, `NextYearProcess`, `StreamHP`, `GasHP`, `MotorHP`, `WaterHP`, `WorkedPower`, `ElectricPower`, `PreNoticeDate`, `MenWorker`, `WomenWorker`, `DailyMenWorker`, `DailyWomenWorker`, `PieceMenWorker`, `PieceWomenWorker`, `CMenWorker`, `CWomenWorker`, `CDailyMenWorker`, `CDailyWomenWorker`, `CPieceMenWorker`, `CPieceWomenWorker`, `AMenWorker`, `AWomenWorker`, `ADailyMenWorker`, `ADailyWomenWorker`, `APieceMenWorker`, `APieceWomenWorker`, `MCmaleworker`, `MCfemaleworker`, `CAmaleworker`, `CAfemaleworker`, `CCmaleworker`, `CCfemaleworker`, `totalMaleWorker`, `totalFemaleWorker`, `StartDate`, `TestingDate`, `WorkTimeType`, `MToSTimein`, `MToSTimeout`, `MToFTimein`, `MToFTimeout`, `STimein`, `STimeout`, `LunchTime`, `ManagerName`, `OwnerName`, `OwnerNrc`, `OwnerAddress`, `OwnerPhno`, `OwnerFax`, `OwnerEmail`, `RegDate`, `IndustryCategory_Id`, `Investment`, `UsedPower`, `PropertyType`, `Contract`, `ProducedProduct`, `ProducedOthers`, `NoticeStatus`, `RawMaterials`, `Goods`, `section_id`, `division_id`, `group_id`, `class_name`, `MonthlyAmounts`, `CitizenMenWorker`, `CitizenWomenWorker`, `ForeignerMenWorker`, `ForeignerWomenWorker`, `SalaryDate`, `MinimumSalary`, `MaximumSalary`, `OverTime`, `OTPermit`, `SafteySide`, `Welfare`, `SSB`, `ManagementExpert`, `SignatureName`, `SignatureRank`, `SubscriberName`, `SubscriberRank`, `AccidentRecordBook`, `SafetyHealth`, `SafetyRank`, `MToFTimeInOther`, `MToFTimeoutOther`, `FactoryAddress`, `region_id`, `district_id`, `township_id`, `zone_id`, `TypeofFactory`, `created_at`, `updated_at`) VALUES
(1, 'လှိုင်သာယာ စက်မှုဇုန်ရုံး', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LDI', NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', 'လကုန်ရက်', NULL, NULL, 0, 0, 0, '0', 0, 0, NULL, NULL, NULL, NULL, 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ကြီး', '2019-12-09 22:12:23', '2019-12-09 22:12:23'),
(3, 'Yangon Pan-Pacific Absolon Co.,Ltd', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LDI', NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', 'လကုန်ရက်', NULL, NULL, 0, 0, 0, '0', 0, 0, NULL, NULL, NULL, NULL, 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ကြီး', '2019-12-12 00:30:54', '2019-12-12 00:30:54'),
(4, 'helo', 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LDI', NULL, 'နိုင်ငံ', '0', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', 'လကုန်ရက်', NULL, NULL, 0, 0, 0, '0', 0, 0, NULL, NULL, NULL, NULL, 'ရှိ', 'မရှိ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ကြီး', '2019-12-18 19:40:49', '2019-12-18 19:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_inspection_1951_laws`
--

CREATE TABLE `temp_shop_inspection_1951_laws` (
  `id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL,
  `numholidays` tinyint(1) DEFAULT NULL,
  `opportunityhol` tinyint(1) DEFAULT NULL,
  `paidwage` tinyint(1) DEFAULT NULL,
  `vacationdays` tinyint(1) DEFAULT NULL,
  `workerfrees` tinyint(1) DEFAULT NULL,
  `annual` tinyint(1) DEFAULT NULL,
  `contract` tinyint(1) DEFAULT NULL,
  `registrationbook` tinyint(1) DEFAULT NULL,
  `medicalticketqan` varchar(191) DEFAULT NULL,
  `passionremark` varchar(191) DEFAULT NULL,
  `generalremark` varchar(191) DEFAULT NULL,
  `officeremark` varchar(191) DEFAULT NULL,
  `inspectionname` varchar(191) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_inspection_2016_laws`
--

CREATE TABLE `temp_shop_inspection_2016_laws` (
  `id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL,
  `work_duration` int(11) DEFAULT NULL,
  `worktime_notice` tinyint(1) DEFAULT NULL,
  `SSB` tinyint(1) DEFAULT NULL,
  `salary_time` tinyint(1) DEFAULT NULL,
  `weekend_holiday` varchar(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_inspection_informs`
--

CREATE TABLE `temp_shop_inspection_informs` (
  `id` int(11) NOT NULL,
  `ShopId` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `inspection_name` varchar(50) DEFAULT NULL,
  `inspectorrank` varchar(25) DEFAULT NULL,
  `inspectiondate` varchar(25) DEFAULT NULL,
  `lastinspectiondate` varchar(25) DEFAULT NULL,
  `inspectedtime` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspection_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopaddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workcategory` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageraddress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweenamerank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above18m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above15m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above13m` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalm` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above18f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above15f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above13f` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalf` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shares` mediumtext DEFAULT NULL,
  `other_shops` mediumtext DEFAULT NULL,
  `shop_inspection_inform_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_inspection_leaves`
--

CREATE TABLE `temp_shop_inspection_leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `check_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `numholidays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opportunityhol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paidwage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacationdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerfrees` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticketqan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passionremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_inspection_safeties`
--

CREATE TABLE `temp_shop_inspection_safeties` (
  `id` int(10) UNSIGNED NOT NULL,
  `check_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopregion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopOwnerNrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopOwnerAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervieweeAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `womenworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalworker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workclean` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainflow` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employmentPaint` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workenvironment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircondition` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `particals` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accomodation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populationstatus` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `population` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunlight` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `natureandlight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwater` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drinkingwatermana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toilet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genderdivide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toiletquantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tioletfinding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiseprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiceprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangerprotect` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protectmach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machineprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinepieces` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionentry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinefinding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wearingstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ladderstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holecoverstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangergasuses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escapeman` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firealam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergencyentrace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cleargoway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutfire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sittingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinningroomplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `babysittingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `washingplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nursinginstruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accidentinformation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotectwear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfprotection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safetyhealth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negotiate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safteyhealthcare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectorrank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_labour_inspection_laws`
--

CREATE TABLE `temp_shop_labour_inspection_laws` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_duration` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worktime_notice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSB` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_holiday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numholidays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opportunityhol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paidwage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacationdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerfrees` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrationbook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalticketqan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passionremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generalremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeremark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inspectionname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_shop_registers`
--

CREATE TABLE `temp_shop_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shopemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shoptype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownernrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneraddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownerphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownerfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owneremail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OwnerPassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mangername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managernrc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageraddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managerphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managerfax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manageremail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operate24hr` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `townshipid` int(11) DEFAULT NULL,
  `loacationaddress` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CDailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADailyWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APieceWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DailyForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalforeignmen` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalforeignwomen` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalMaleWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalFemaleWorker` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PropertyType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UsedPower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Investment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedProduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProducedOthers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MonthlyAmounts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RawMaterials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Goods` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OverTime` tinyint(3) UNSIGNED DEFAULT NULL,
  `OTPermit` tinyint(3) UNSIGNED DEFAULT NULL,
  `SSB` tinyint(3) UNSIGNED DEFAULT NULL,
  `SafteySide` tinyint(3) UNSIGNED DEFAULT NULL,
  `ManagementExpert` tinyint(3) UNSIGNED DEFAULT NULL,
  `StartDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Welfare` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccidentRecordBook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyHealth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SafetyRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CitizenWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerMenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeignerWomenWorker` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SalaryDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MinimumSalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaximumSalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkTimeType` tinyint(3) UNSIGNED DEFAULT NULL,
  `StartWorkTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EndWorkTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freetimefrom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freetimeto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closeworkdays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegDate` date DEFAULT NULL,
  `SignatureName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SignatureRank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenoticedate` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `township_id` int(11) DEFAULT NULL,
  `SubscriberName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscriberRank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `township_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`id`, `district_id`, `township_name`, `created_at`, `updated_at`) VALUES
(3, 5, 'လှိုင်သာယာမြို့နယ်', '2019-09-09 02:03:14', '2019-09-09 02:03:14'),
(5, 5, 'အင်းစိန်မြို့နယ်', '2019-09-23 22:39:39', '2019-09-23 22:39:39'),
(6, 5, 'လှိုင်မြို့နယ်', '2019-09-23 22:40:45', '2019-09-23 22:40:45'),
(7, 5, 'ကမာရွတ်မြို့နယ်', '2019-09-23 22:41:20', '2019-09-23 22:41:20'),
(8, 5, 'မရမ်းကုန်းမြို့နယ်', '2019-09-23 22:41:45', '2019-09-23 22:41:45'),
(9, 5, 'မင်္ဂလာဒုံမြို့နယ်', '2019-09-23 22:45:51', '2019-09-23 22:45:51'),
(10, 5, 'ရွှေပြည်သာမြို့နယ်', '2019-09-23 22:46:16', '2019-09-23 22:46:16'),
(12, 6, 'အလုံမြို့နယ်', '2019-09-23 22:50:33', '2019-09-23 22:50:33'),
(13, 6, 'ဗဟန်းမြို့နယ်', '2019-09-23 22:52:21', '2019-09-23 22:52:21'),
(14, 6, 'ဒဂုံမြို့နယ်', '2019-09-23 22:53:08', '2019-09-23 22:53:08'),
(15, 4, 'ဗိုလ်တထောင်မြို့နယ်', '2019-10-15 21:35:24', '2019-10-15 21:35:24'),
(16, 4, 'ဒဂုံဆိပ်ကမ်းမြို့နယ်', '2019-10-15 21:36:28', '2019-10-15 21:36:28'),
(17, 4, 'ဒေါပုံမြို့နယ်', '2019-10-15 21:37:06', '2019-10-15 21:37:06'),
(18, 4, 'မင်္ဂလာတောင်ညွန့်မြို့နယ်', '2019-10-15 21:39:43', '2019-10-15 21:39:43'),
(19, 4, 'မြောက်ဥက္ကလာပမြို့နယ်', '2019-10-15 21:40:25', '2019-10-15 21:40:25'),
(20, 4, 'တောင်ဥက္ကလာပမြို့နယ်', '2019-10-15 21:40:43', '2019-10-15 21:40:43'),
(21, 4, 'ပုဇွန်တောင်မြို့နယ်', '2019-10-15 21:41:24', '2019-10-15 21:41:24'),
(22, 4, 'တာမွေမြို့နယ်', '2019-10-15 21:41:56', '2019-10-15 21:41:56'),
(23, 4, 'သာကေတမြို့နယ်', '2019-10-15 21:42:12', '2019-10-15 21:42:12'),
(24, 4, 'သင်္ဃန်းကျွန်းမြို့နယ်', '2019-10-15 21:44:04', '2019-10-15 21:44:04'),
(25, 4, 'ရန်ကင်းမြို့နယ်', '2019-10-15 21:44:24', '2019-10-15 21:44:24'),
(26, 7, 'ဒလမြို့နယ်', '2019-10-15 22:00:40', '2019-10-15 22:00:40'),
(27, 7, 'ခရမ်းမြို့နယ်', '2019-10-15 22:01:03', '2019-10-15 22:01:03'),
(28, 7, 'ကော့မှုးမြို့နယ်', '2019-10-15 22:02:05', '2019-10-15 22:02:05'),
(29, 4, 'test', '2020-01-14 01:22:00', '2020-01-14 01:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `township_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessibletwonship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `township_id`, `district_id`, `region_id`, `phoneno`, `accessibletwonship`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HrA7qbFklwM6wTdXc7oJxeredWRAoELdmBFT4GC7L0222dKLajggS', NULL, NULL, NULL, '959402552147', '3,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'EWuivMFoXATXPEE7XWHAPCMZpgG0P2S0KAA034643Bp7rDbSo4KtpDdQFbdq', '2019-08-09 00:10:46', '2019-12-08 20:30:48'),
(18, 'U Thura Aung', 'thuraaung@gmail.com', NULL, '$2y$10$eQwpe.0wie9YVfAS2Me.eeOQyDZiD49ch5KaY0pbr7F8.jEGiV4sy', 3, NULL, NULL, '0978106515', '3', 'cziHUuI7dNUWfcWnSc0GgaoMoPpl2nZF4tPqBVF8NmYOB0abpvF44nvEdiGW', '2019-10-15 08:02:55', '2019-10-15 08:02:55'),
(19, 'U Soe Nyi Nyi', 'soenyinyi@gmail.com', NULL, '$2y$10$eQwpe.0wie9YVfAS2Me.eeOQyDZiD49ch5KaY0pbr7F8.jEGiV4sy', 3, NULL, NULL, '0925082892', '3', 'prsZMrhUPR8WWjejTCvRW5fC6hlgw0PDfPDegsuBOm9hLhim50EPHpY1MfyE', '2019-10-16 00:24:56', '2019-10-16 00:24:56'),
(20, 'U Nyi Thura Aung', 'nyithuraaung@gmail.com', NULL, '$2y$10$eQwpe.0wie9YVfAS2Me.eeOQyDZiD49ch5KaY0pbr7F8.jEGiV4sy', NULL, NULL, 9, '09499393003', '3,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'hqe6w3AHhVMiw0b8pYfvXB4KPMIPGaN4ZG6B6Bdc0n4Oj6uWzjX71YkwLgNI', '2019-10-16 00:54:58', '2019-10-16 00:54:58'),
(21, 'test', 'lwinthaungtin@gmail.com', NULL, '$2y$10$Lz0lsqxW48oRoCKq80XPZ.T0jP4dfv.ld8i6RiSybpDvoOXpUSLue', 3, NULL, NULL, '9989349343743', '3,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'VDLn9WtxggAN4BILXM8uBae8NUHamROuHhTh7ZuUvfDRmhYC6uIWcxZcaSyb', '2019-12-04 04:22:24', '2020-01-14 01:13:10'),
(22, 'Than Htike Aung', 'thanhtikeaung.fgllid@gmail.com', NULL, '$2y$10$SBRanfQY75s3YUSXW.xbVeRAd2/p0rZHWWA5YBJbNodMl4X4a.cOm', 3, NULL, NULL, '09258807788', '3', 'j1jw2pGup7QW8hOiYkjBJo8m7kATGSAvKwooQZHG46peuiwpOd1R1v1AZMAS', '2019-12-10 01:57:33', '2019-12-10 01:57:33'),
(23, 'U Soe Nyi Nyi', 'soenyinyi.ho9@gmail.com', NULL, '$2y$10$xj0CoWtzzwOB9e0Lc.ITVuOKW.7WUALBK.fiyTftL6RH95AoYsjaq', 3, NULL, NULL, '09970701875', '3', NULL, '2019-12-10 02:12:08', '2019-12-10 02:12:08'),
(24, 'Chan myae Thu', 'chanmyaethu@gmail.com', NULL, '$2y$10$eQwpe.0wie9YVfAS2Me.eeOQyDZiD49ch5KaY0pbr7F8.jEGiV4sy', NULL, 5, NULL, '09969632992', '5,10', NULL, '2019-12-11 21:51:10', '2019-12-11 21:51:10'),
(25, 's', 'test@gmail.com', NULL, '$2y$10$QBHr71DM6kXtvBbkmHdAo..3940RRIeQOOF/ZEufm57uAmSNm8An2', NULL, 5, NULL, 'rtr', '3,5,6,7,8,9,10', NULL, '2019-12-13 03:22:36', '2019-12-13 03:22:36'),
(26, 'admin', 'admin@yangon.gov.mm', NULL, '$2y$10$.1fZz6TWx9.yfv94vPy3rOBz8zy/kjNkUsBkeWTrj/lIb1uoGZrw2', NULL, NULL, NULL, NULL, '3,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', NULL, '2019-12-18 04:10:27', '2019-12-18 04:10:27'),
(27, 'North district AD', 'districtad@yangon.gov.mm', NULL, '$2y$10$p2nl/Svi5fe62Or0iKVJNew4gUoKq4W.kS7iX4na3VURG948E.s9S', NULL, 5, NULL, NULL, '3,5,6,7,8,9,10', 'zipAdnzdJn9s0peuks0kSxBXCBmL0Sn5e7Mg2QsDOfZoAfNnpUzlYuvioFsT', '2019-12-18 04:11:18', '2019-12-18 04:11:18'),
(28, 'North Towship AD', 'townshipad@yangon.gov.mm', NULL, '$2y$10$VnBIjWKGkgALqlG9Yy3OI.tACgBnVEm6QGrHzRiboybj8.NV2enyS', NULL, NULL, NULL, NULL, '3,5,6,7,8,9,10', 'bP8mjmRynVAc5rx4necHcMnRc4GuE9fM90TFgTZy1s4GDpcZgKkuAKpF3TMY', '2019-12-18 04:13:48', '2019-12-18 04:13:48'),
(29, 'name', 'test1@gmail.com', NULL, '$2y$10$QEVVW69rVQJeAdq1G4XmW.l4Vj8.zWjEoGIYSfquXO7ZryVDQ57ke', 15, NULL, NULL, NULL, '15', NULL, '2020-01-14 01:34:15', '2020-01-14 01:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `affected_bodies`
--
ALTER TABLE `affected_bodies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affected_body_pieces`
--
ALTER TABLE `affected_body_pieces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affected_informations`
--
ALTER TABLE `affected_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affected_types`
--
ALTER TABLE `affected_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casereports`
--
ALTER TABLE `casereports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `check_out_peoples`
--
ALTER TABLE `check_out_peoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_out_peoples_factoryinspectionimpact_id_foreign` (`factoryinspectionimpact_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `economic_classes`
--
ALTER TABLE `economic_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economic_divisions`
--
ALTER TABLE `economic_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economic_groups`
--
ALTER TABLE `economic_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economic_sections`
--
ALTER TABLE `economic_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `FactoryId` (`FactoryId`);

--
-- Indexes for table `factoryinspectioninforms`
--
ALTER TABLE `factoryinspectioninforms`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `factory_closes`
--
ALTER TABLE `factory_closes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_document_attachs`
--
ALTER TABLE `factory_document_attachs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_histories`
--
ALTER TABLE `factory_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_inspection_acts`
--
ALTER TABLE `factory_inspection_acts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_inspection_acts_factoryinspectioninform_id_foreign` (`factoryinspectioninform_id`);

--
-- Indexes for table `factory_inspection_impacts`
--
ALTER TABLE `factory_inspection_impacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `factory_inspection_safeties`
--
ALTER TABLE `factory_inspection_safeties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_inspection_safeties_factoryinspectioninform_id_foreign` (`factoryinspectioninform_id`);

--
-- Indexes for table `factory_inspection_wages`
--
ALTER TABLE `factory_inspection_wages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_inspection_wages_factoryinspectioninform_id_foreign` (`factoryinspectioninform_id`);

--
-- Indexes for table `factory_labour_inspection_laws`
--
ALTER TABLE `factory_labour_inspection_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_leaves`
--
ALTER TABLE `factory_leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_leaves_factoryinspectioninform_id_foreign` (`factoryinspectioninform_id`);

--
-- Indexes for table `factory_leave_inspections`
--
ALTER TABLE `factory_leave_inspections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_prosecuteds`
--
ALTER TABLE `factory_prosecuteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impact_instructions`
--
ALTER TABLE `impact_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impact_types`
--
ALTER TABLE `impact_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impact_type_des`
--
ALTER TABLE `impact_type_des`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrialzones`
--
ALTER TABLE `industrialzones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_categories`
--
ALTER TABLE `industry_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspectiontype`
--
ALTER TABLE `inspectiontype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_peoples`
--
ALTER TABLE `interview_peoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interview_peoples_factoryinspectionimpact_id_foreign` (`factoryinspectionimpact_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_shop_names`
--
ALTER TABLE `other_shop_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_t_reports`
--
ALTER TABLE `o_t_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permission_ot_factories`
--
ALTER TABLE `permission_ot_factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`);

--
-- Indexes for table `selfregistrations`
--
ALTER TABLE `selfregistrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selfregistrations_email_unique` (`email`),
  ADD UNIQUE KEY `selfregistrations_company_name_unique` (`company_name`);

--
-- Indexes for table `selfregistration_password_resets`
--
ALTER TABLE `selfregistration_password_resets`
  ADD KEY `selfregistration_password_resets_email_index` (`email`),
  ADD KEY `selfregistration_password_resets_token_index` (`token`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ShopId` (`ShopId`);

--
-- Indexes for table `shop_closes`
--
ALTER TABLE `shop_closes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_document_attachs`
--
ALTER TABLE `shop_document_attachs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_inspection_1951_laws`
--
ALTER TABLE `shop_inspection_1951_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_inspection_2016_laws`
--
ALTER TABLE `shop_inspection_2016_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_inspection_informs`
--
ALTER TABLE `shop_inspection_informs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_inspection_safeties`
--
ALTER TABLE `shop_inspection_safeties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_labour_inspection_laws`
--
ALTER TABLE `shop_labour_inspection_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_workers`
--
ALTER TABLE `shop_workers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_inspection_acts`
--
ALTER TABLE `temp_factory_inspection_acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_inspection_impacts`
--
ALTER TABLE `temp_factory_inspection_impacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_inspection_informs`
--
ALTER TABLE `temp_factory_inspection_informs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_inspection_safeties`
--
ALTER TABLE `temp_factory_inspection_safeties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_inspection_wages`
--
ALTER TABLE `temp_factory_inspection_wages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_labour_inspection_laws`
--
ALTER TABLE `temp_factory_labour_inspection_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_leaves`
--
ALTER TABLE `temp_factory_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_factory_registers`
--
ALTER TABLE `temp_factory_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_inspection_1951_laws`
--
ALTER TABLE `temp_shop_inspection_1951_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_inspection_2016_laws`
--
ALTER TABLE `temp_shop_inspection_2016_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_inspection_informs`
--
ALTER TABLE `temp_shop_inspection_informs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_inspection_leaves`
--
ALTER TABLE `temp_shop_inspection_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_inspection_safeties`
--
ALTER TABLE `temp_shop_inspection_safeties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_labour_inspection_laws`
--
ALTER TABLE `temp_shop_labour_inspection_laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_shop_registers`
--
ALTER TABLE `temp_shop_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `affected_bodies`
--
ALTER TABLE `affected_bodies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `affected_body_pieces`
--
ALTER TABLE `affected_body_pieces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `affected_informations`
--
ALTER TABLE `affected_informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `affected_types`
--
ALTER TABLE `affected_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `casereports`
--
ALTER TABLE `casereports`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `check_out_peoples`
--
ALTER TABLE `check_out_peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `economic_classes`
--
ALTER TABLE `economic_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `economic_divisions`
--
ALTER TABLE `economic_divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `economic_groups`
--
ALTER TABLE `economic_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `economic_sections`
--
ALTER TABLE `economic_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `factoryinspectioninforms`
--
ALTER TABLE `factoryinspectioninforms`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factory_closes`
--
ALTER TABLE `factory_closes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `factory_document_attachs`
--
ALTER TABLE `factory_document_attachs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `factory_histories`
--
ALTER TABLE `factory_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `factory_inspection_acts`
--
ALTER TABLE `factory_inspection_acts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `factory_inspection_impacts`
--
ALTER TABLE `factory_inspection_impacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `factory_inspection_safeties`
--
ALTER TABLE `factory_inspection_safeties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factory_inspection_wages`
--
ALTER TABLE `factory_inspection_wages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `factory_labour_inspection_laws`
--
ALTER TABLE `factory_labour_inspection_laws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `factory_leaves`
--
ALTER TABLE `factory_leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `factory_leave_inspections`
--
ALTER TABLE `factory_leave_inspections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factory_prosecuteds`
--
ALTER TABLE `factory_prosecuteds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `impact_instructions`
--
ALTER TABLE `impact_instructions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `impact_types`
--
ALTER TABLE `impact_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `impact_type_des`
--
ALTER TABLE `impact_type_des`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `industrialzones`
--
ALTER TABLE `industrialzones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `industry_categories`
--
ALTER TABLE `industry_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspectiontype`
--
ALTER TABLE `inspectiontype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `interview_peoples`
--
ALTER TABLE `interview_peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_shop_names`
--
ALTER TABLE `other_shop_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `o_t_reports`
--
ALTER TABLE `o_t_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permission_ot_factories`
--
ALTER TABLE `permission_ot_factories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `selfregistrations`
--
ALTER TABLE `selfregistrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shop_closes`
--
ALTER TABLE `shop_closes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_document_attachs`
--
ALTER TABLE `shop_document_attachs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shop_inspection_1951_laws`
--
ALTER TABLE `shop_inspection_1951_laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shop_inspection_2016_laws`
--
ALTER TABLE `shop_inspection_2016_laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `shop_inspection_informs`
--
ALTER TABLE `shop_inspection_informs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop_inspection_safeties`
--
ALTER TABLE `shop_inspection_safeties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop_labour_inspection_laws`
--
ALTER TABLE `shop_labour_inspection_laws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop_workers`
--
ALTER TABLE `shop_workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `temp_factory_inspection_acts`
--
ALTER TABLE `temp_factory_inspection_acts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_factory_inspection_impacts`
--
ALTER TABLE `temp_factory_inspection_impacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp_factory_inspection_informs`
--
ALTER TABLE `temp_factory_inspection_informs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `temp_factory_inspection_safeties`
--
ALTER TABLE `temp_factory_inspection_safeties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temp_factory_inspection_wages`
--
ALTER TABLE `temp_factory_inspection_wages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_factory_labour_inspection_laws`
--
ALTER TABLE `temp_factory_labour_inspection_laws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_factory_leaves`
--
ALTER TABLE `temp_factory_leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_factory_registers`
--
ALTER TABLE `temp_factory_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_shop_inspection_1951_laws`
--
ALTER TABLE `temp_shop_inspection_1951_laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_shop_inspection_2016_laws`
--
ALTER TABLE `temp_shop_inspection_2016_laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp_shop_inspection_informs`
--
ALTER TABLE `temp_shop_inspection_informs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `temp_shop_inspection_leaves`
--
ALTER TABLE `temp_shop_inspection_leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_shop_inspection_safeties`
--
ALTER TABLE `temp_shop_inspection_safeties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_shop_labour_inspection_laws`
--
ALTER TABLE `temp_shop_labour_inspection_laws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_shop_registers`
--
ALTER TABLE `temp_shop_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `factory_inspection_acts`
--
ALTER TABLE `factory_inspection_acts`
  ADD CONSTRAINT `factory_inspection_acts_factoryinspectioninform_id_foreign` FOREIGN KEY (`factoryinspectioninform_id`) REFERENCES `factoryinspectioninforms` (`cid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
