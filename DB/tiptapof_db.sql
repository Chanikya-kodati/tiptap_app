-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2022 at 05:38 AM
-- Server version: 10.2.37-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiptapof_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_aboutus`
--

CREATE TABLE `tiptap_aboutus` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `contentar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_aboutus`
--

INSERT INTO `tiptap_aboutus` (`id`, `content`, `contentar`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n'),
(2, '<h1>Privacy Policy for TipTap</h1>\r\n\r\n<p>At TipTap, accessible from https://tiptapofficial.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by TipTap and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in TipTap. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Free Privacy Policy Generator</a>.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>TipTap follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of TipTap.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on TipTap, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that TipTap has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>TipTap&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>TipTap does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n', '<h1>Privacy Policy for TipTap</h1>\r\n\r\n<p>At TipTap, accessible from https://tiptapofficial.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by TipTap and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in TipTap. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Free Privacy Policy Generator</a>.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>TipTap follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of TipTap.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on TipTap, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that TipTap has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>TipTap&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>TipTap does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n'),
(3, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_adminmenu`
--

CREATE TABLE `tiptap_adminmenu` (
  `id` int(11) NOT NULL,
  `menuname` varchar(225) NOT NULL,
  `corder` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_adminmenu`
--

INSERT INTO `tiptap_adminmenu` (`id`, `menuname`, `corder`, `status`) VALUES
(1, 'Banner Control ', 1, 1),
(2, 'About Us', 2, 1),
(3, 'Privacy Policy', 11, 1),
(4, 'Registered Users', 0, 0),
(5, 'Contact us Requests', 10, 1),
(6, 'Amount Mgmt', 6, 1),
(7, 'Companies Joined ', 5, 1),
(8, 'Terms of Use', 12, 1),
(9, 'Top Up Amount Mgmt', 7, 0),
(10, 'Payment Transactions', 8, 1),
(11, 'Transfer Requests', 9, 1),
(12, 'Industry Type', 13, 1),
(13, 'Recipients', 4, 1),
(14, 'Notifications', 15, 1),
(15, 'Service Charge Settings', 14, 1),
(16, 'Payers', 3, 1),
(17, 'Badges', 16, 0),
(18, 'Job Types', 0, 1),
(19, 'Banks Management', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_adminsubmenu`
--

CREATE TABLE `tiptap_adminsubmenu` (
  `id` int(11) NOT NULL,
  `adminmenuid` int(11) NOT NULL,
  `submenuname` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_adminsubmenu`
--

INSERT INTO `tiptap_adminsubmenu` (`id`, `adminmenuid`, `submenuname`, `link`, `status`) VALUES
(1, 1, 'Landing banners', 'viewlandingbanners.php', 1),
(2, 2, 'View Content', 'viewaboutus.php', 1),
(3, 3, 'View Privacy Policy', 'viewprivacypolicy.php', 1),
(4, 4, 'View Registered Users', 'viewregusers.php', 1),
(5, 5, 'View Contact requests', 'contactpagerequests.php', 1),
(6, 1, 'Welcome page', 'welcomebannertext.php', 1),
(7, 6, 'Tips Amount list', 'tipamounts.php', 1),
(8, 7, 'View all ', 'viewregcompanies.php', 1),
(9, 8, 'View Terms of use', 'viewtermsofuse.php', 1),
(10, 9, 'View Wallet money list', 'walletmoneymgmt.php', 0),
(11, 10, 'Top-up Transactions', 'walletrechargetrans.php', 1),
(12, 11, 'Transfer requests', 'viewwithdrawrequests.php', 1),
(13, 12, 'View Industry Types', 'industrytypes.php', 1),
(14, 13, 'Individual Tip Receivers', 'individualtipreceivers.php', 0),
(15, 13, 'Reg. Company Tip Receivers', 'regcomptipreceivers.php', 0),
(16, 13, 'View all recipients', 'viewalltipreceivers.php', 1),
(17, 14, 'Add new Notification', 'notification_addnew.php', 1),
(18, 14, 'View Notifications', 'viewallnotifications.php', 1),
(19, 15, 'View service charge', 'viewservicecharge.php', 1),
(20, 16, 'View all payers', 'viewalltipgivers.php', 1),
(21, 10, 'Activity Reports', 'giverreceiveerreport.php', 1),
(22, 17, 'View Badges', 'viewbadges.php', 0),
(23, 1, 'User homepage ', 'giverreceiverbanners.php', 1),
(24, 18, 'View Job Types', 'jobtypes.php', 1),
(25, 19, 'View Banks', 'viewbanks.php', 1),
(26, 6, 'Wallet Amount List', 'walletmoneymgmt.php', 1),
(27, 11, 'Transfer Limit Amount', 'transferlimitamount.php', 1),
(28, 1, 'User Profile page banners', 'giverreceiverprofileimages.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_adminuser`
--

CREATE TABLE `tiptap_adminuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(225) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(225) CHARACTER SET utf8 NOT NULL,
  `username` varchar(225) CHARACTER SET utf8 NOT NULL,
  `password` varchar(225) NOT NULL,
  `secretcode` varchar(225) NOT NULL,
  `email` varchar(225) CHARACTER SET utf8 NOT NULL,
  `userype` int(11) NOT NULL COMMENT '1-admin;2-company',
  `companyid` int(11) NOT NULL,
  `lastseen` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `profilepic` varchar(225) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_adminuser`
--

INSERT INTO `tiptap_adminuser` (`id`, `firstname`, `lastname`, `username`, `password`, `secretcode`, `email`, `userype`, `companyid`, `lastseen`, `status`, `profilepic`, `country`) VALUES
(1, 'tiptap', '', 'tiptapadmin', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'admin@gmail.com', 1, 0, '0000-00-00 00:00:00', 1, 'uploads/userprofiles/bargain11603092725.png', 2),
(2, 'Mc Donalds Company', '', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'test@gmail.com', 2, 2, '0000-00-00 00:00:00', 1, '', 0),
(3, 'dfsdfg', '', 'jabbar.orchid@gmail.com', '7bb2e9c776b1169a8330dc6beccc2ee3', 'whLd8Qbz', 'jabbar.orchid@gmail.com', 2, 3, '0000-00-00 00:00:00', 1, '', 0),
(4, 'Sheraton Luxury Collection', '', 'dsouza@sheraton.com', '21a2d6d443b0b40a10a15642054358a2', 'BeZtRbIp', 'dsouza@sheraton.com', 2, 4, '0000-00-00 00:00:00', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_badges`
--

CREATE TABLE `tiptap_badges` (
  `id` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_badges`
--

INSERT INTO `tiptap_badges` (`id`, `image`, `status`) VALUES
(1, 'uploads/banners/ecommerce1608198198.jpg', 1),
(2, 'uploads/banners/ecommerce1608198218.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_banks`
--

CREATE TABLE `tiptap_banks` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `titlear` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_banks`
--

INSERT INTO `tiptap_banks` (`id`, `title`, `titlear`, `status`) VALUES
(1, 'HDFC', 'HDFC', 1),
(2, 'ICICI', 'ICICI', 1),
(3, 'AXIS', 'AXIS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_companies`
--

CREATE TABLE `tiptap_companies` (
  `id` int(11) NOT NULL,
  `industrytype` int(11) NOT NULL,
  `companyname` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `branchlocation` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `representativename` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noofemp` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `secretcode` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_companies`
--

INSERT INTO `tiptap_companies` (`id`, `industrytype`, `companyname`, `mobile`, `branchlocation`, `representativename`, `noofemp`, `date`, `status`, `secretcode`, `email`, `password`, `image`) VALUES
(2, 4, 'Mais Alghanim', '3423423', '', 'chanikya', 0, '2020-10-27 13:15:28', 1, '123456', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 2, 'The Breakfast Club', '66996658', '', 'jab', 0, '2020-12-07 14:12:20', 1, 'whLd8Qbz', 'jabbar.orchid@gmail.com', '7bb2e9c776b1169a8330dc6beccc2ee3', ''),
(4, 0, 'Sheraton Luxury Collection', '1828000', '', 'Jacob Dszouza', 0, '2020-12-16 08:54:22', 1, 'BeZtRbIp', 'dsouza@sheraton.com', '21a2d6d443b0b40a10a15642054358a2', ''),
(5, 2, 'Parle', '669988', 'test', 'Test Name', 10, '2021-01-12 07:58:49', 0, '', 'parle@gmail.com', '', ''),
(6, 2, 'khgjlfl ', '12344567 ', 'hjgdl ', 'kjbhkj', 0, '2021-01-18 17:25:10', 0, '', 'anson@test.com ', '', ''),
(7, 2, 'khgjlfl ', '+96512344567 ', 'hjgdl ', 'kjbhkj', 0, '2021-01-18 18:09:43', 0, '', 'anson@tes1t.com ', '', ''),
(8, 6, 'afaffd', '12345678', 'fagh', 'wdjgjd', 2, '2021-01-18 19:19:11', 0, '', 'anon@trrrr.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_companybranch`
--

CREATE TABLE `tiptap_companybranch` (
  `id` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `companybranchname` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_companybranch`
--

INSERT INTO `tiptap_companybranch` (`id`, `companyid`, `companybranchname`, `status`) VALUES
(3, 2, 'Kuwait City', 1),
(4, 2, 'Hawali', 1),
(5, 2, 'Al Asimah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_contactus`
--

CREATE TABLE `tiptap_contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `comments` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_contactus`
--

INSERT INTO `tiptap_contactus` (`id`, `name`, `mobile`, `comments`, `date`) VALUES
(1, 'test', '2342343', 'this is a test message', '2020-10-20 00:00:00'),
(2, 'rest test', '4234234234', 'API test', '2020-12-30 11:45:20'),
(3, 'trtwrwer', '5345345345', 'sfsfsd fsdfsdfsdfsdf', '2020-12-31 10:38:20'),
(4, 'f8808d0e5f96829fec9b7b07b6', '9992828', '101', '2020-12-31 10:38:33'),
(5, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 11:29:09'),
(6, 'f8808d0e5f96829fec9b7b07b6', '9992828', '101', '2020-12-31 11:32:45'),
(7, 'paddle', '56347347', 'Messagesdfxzbz', '2020-12-31 11:49:04'),
(8, 'Pradeep', '2345666', 'Message good to see ', '2020-12-31 12:12:30'),
(9, 'Pradeep', '2345666', 'Message good to see ', '2020-12-31 12:12:45'),
(10, 'Pradeep', '8227273', 'Message hello ', '2020-12-31 12:16:11'),
(11, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:28'),
(12, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:42'),
(13, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:47'),
(14, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:48'),
(15, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:49'),
(16, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:49'),
(17, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:50'),
(18, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:50'),
(19, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:51'),
(20, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:51'),
(21, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:52'),
(22, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:52'),
(23, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:53'),
(24, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:53'),
(25, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:54'),
(26, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:54'),
(27, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:55'),
(28, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:55'),
(29, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:56'),
(30, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:56'),
(31, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:56'),
(32, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:57'),
(33, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:57'),
(34, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:57:59'),
(35, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:58:06'),
(36, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:58:07'),
(37, 'chan', '894593459', 'klasdfnkalsdj', '2020-12-31 12:58:08'),
(38, 'kjnakjfna', 'kklmlk', 'kjbnk;jfvav', '2021-01-05 08:01:18'),
(39, 'kid', '54733473', 'dsgnfsdh', '2021-02-04 11:13:07'),
(40, 'mustafa', '65081410', 'Haha ', '2022-06-10 04:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_customers`
--

CREATE TABLE `tiptap_customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `countryid` varchar(225) DEFAULT NULL,
  `mobile` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `location` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobtype` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `secretcode` varchar(225) DEFAULT NULL,
  `tipcode` varchar(225) DEFAULT NULL,
  `profilepic` varchar(225) DEFAULT NULL,
  `auth` varchar(225) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL COMMENT '1-normal;2-company',
  `companyid` int(11) DEFAULT NULL,
  `branchid` int(11) DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `giverorreceiver` int(11) DEFAULT NULL COMMENT '1-giver;2-receiver',
  `balance` varchar(225) DEFAULT '0',
  `bankname` varchar(225) DEFAULT NULL,
  `accountnumber` varchar(225) DEFAULT NULL,
  `ibannum` varchar(225) DEFAULT NULL,
  `swiftcode` varchar(225) DEFAULT NULL,
  `singleorgroup` int(11) DEFAULT NULL COMMENT '1-single;2-group',
  `qrscannerimage` varchar(225) DEFAULT NULL,
  `joblocation` varchar(225) DEFAULT NULL,
  `birthday` varchar(225) DEFAULT NULL,
  `changepassotp` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_customers`
--

INSERT INTO `tiptap_customers` (`id`, `fullname`, `countryid`, `mobile`, `email`, `location`, `jobtype`, `password`, `secretcode`, `tipcode`, `profilepic`, `auth`, `date`, `usertype`, `companyid`, `branchid`, `roleid`, `status`, `giverorreceiver`, `balance`, `bankname`, `accountnumber`, `ibannum`, `swiftcode`, `singleorgroup`, `qrscannerimage`, `joblocation`, `birthday`, `changepassotp`) VALUES
(1, 'test user', '', '32242423', '', 'kuwait', 'waiter', '1231231', '131231231', NULL, '', '', '2020-10-20 00:00:00', 1, 0, 0, 0, 0, 2, '0', '', '', '', '', 0, '', '', '', ''),
(3, 'waiter 11', '+965', '45345563', 'wiater1@gmail.com', '', '2', '815ee2bfe736a7f6899c3211b5279e49', '7ce64e', '7ce64e', 'uploads/userprofiles/tiptap19099218221631530510.png', '', '2020-11-17 07:20:22', 2, 2, 4, 1, 1, 2, '6.1', '2', '7877', '899888', '0999', 0, 'uploads/receiverQRscanners/Receiver_3.png', '29.362729866553124,77.84867852926253', '14-09-2000', '9276'),
(4, 'Giver 1', '', '453455635', 'giver1@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '', '2020-11-17 07:20:22', 1, 0, 0, 0, 1, 1, '27.95', '', '', '', '', 0, 'uploads/receiverQRscanners/Receiver_4.png', '', '', ''),
(10, 'Chanikya', '', '888993', 'chanikya@design-master.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '8366', '2021-01-04 13:07:53', 1, 0, 0, 0, 1, 1, '20.000', 'ICICI', '36456456456', 'AP784', 'XYZ', 0, '', '', '', '8468'),
(11, 'Anson', '', '96642632', 'anson@test.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '2668', '2021-01-05 09:33:38', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(12, 'Anson', '', '96642635', 'anson@test1.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '0871', '2021-01-05 18:42:12', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(13, 'anson@gmail.com', '', '96642656', 'anson@erttk.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '0710', '2021-01-05 18:44:43', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(14, 'Anson', '', '966426322', 'anson@tes4t.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '1201', '2021-01-05 19:03:27', 1, 0, 0, 0, 1, 1, '5.000', '', '', '', '', 0, '', '', '', ''),
(15, 'pradeep', '+965', '65120208', 'kp@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '3034', '2021-01-07 09:16:17', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(16, 'pradeep', '+965', '651202084', 'kpk@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '0983', '2021-01-07 09:23:38', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(17, 'pradeep', '+965', '6512028', 'p@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '8783', '2021-01-07 09:28:20', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(18, 'pa', '+965', '462626', 'k@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '4025', '2021-01-07 09:35:53', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(19, 'pradeep', '+965', '78787878', 'p@g.com', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '12345', NULL, '', '6360', '2021-01-13 07:25:34', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(20, 'p', '+965', '878787', 'pk@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '8698', '2021-01-13 07:59:20', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(21, 'lunar', '+965', '65347', 'pradeep@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '4864', '2021-01-13 08:09:30', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(22, 'pradeepkumark', '+965', '96762377', 'pradeepk@g.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '9125', '2021-01-13 08:47:19', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(23, 'Single receiver', ' 965', '588996221', '', 'secunderabad', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '7433', '2021-01-17 11:07:11', 1, 0, 0, 0, 0, 2, '0', '', '', '', '', 1, '', '', '', ''),
(24, 'John Kelly', '+965', '9891333990', 'd@gmail.com', '', '', 'c33367701511b4f6020ec61ded352059', '654321', NULL, 'uploads/userprofiles/tiptap18792721391635529581.jpg', '8832', '2021-01-18 07:40:01', 1, 0, 0, 0, 1, 1, '8.9', '', '', '', '', 0, 'uploads/receiverQRscanners/Receiver_24.png', ',', '14-09-2000', '2278'),
(25, 'kumar6', '965', '12345678', '', '', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '8194', '2021-01-18 07:57:51', 1, 0, 0, 0, 0, 2, '0', '', '', '', '', 1, '', '', '', ''),
(27, 'he', '+965', '4567890', '', '', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '3797', '2021-01-18 09:33:38', 1, 0, 0, 0, 0, 2, '63.4', '1', '54734734574357', 'dfh466', '96759567', 1, 'uploads/receiverQRscanners/Receiver_27.png', '', '', ''),
(28, '', '\"+965\"', '98777', '', 'jgdwc', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '7870', '2021-01-19 20:05:33', 1, 0, 0, 0, 0, 2, '0', '', '', '', '', 1, '', ',', '', ''),
(29, 'Anson', '%2B965', '12345677', '', 'lkjlasdj', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '0466', '2021-01-19 20:58:32', 1, 0, 0, 0, 1, 2, '0', '', '', '', '', 1, '', '', '', ''),
(30, 'anson', '+965', '123456778', '', 'oljasdlcj', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '9418', '2021-01-19 21:14:49', 1, 0, 0, 0, 1, 2, '0', '', '', '', '', 1, '', '', '', ''),
(31, 'aqnson', '+965', '96642662', '', 'liughiud', '1', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '6616', '2021-01-19 21:24:33', 1, 0, 0, 0, 1, 2, '0', '1', '12345678', '12345', '12345', 1, '', '', '', ''),
(32, 'anson', '+965', '12345679', 'anson@test5.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '2327', '2021-01-24 18:13:03', 1, 0, 0, 0, 1, 1, '0', '', '', '', '', 0, '', '', '', ''),
(33, 'Anson Giver', '+965', '9664263', 'anson@test1.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, '', '6384', '2021-02-17 22:24:15', 1, 0, 0, 0, 0, 1, '0', '', '', '', '', 0, '', '', '', ''),
(42, 'Chani', NULL, '', 'google@design-master.com', NULL, NULL, '', '', NULL, NULL, NULL, '2021-09-14 11:42:41', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 'ios', NULL, '', 'ios@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2021-09-15 05:09:45', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'social', NULL, '', 'social@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2021-09-15 06:29:20', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Nazakat Ali', NULL, '', 'nazakatamu@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2021-09-15 06:36:49', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Anson Test1', '+965', '98745612', '', 'Salmiya', '2', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '6546', '2021-09-27 16:17:27', 1, NULL, NULL, NULL, 1, 2, '0.5', NULL, NULL, NULL, NULL, 1, 'uploads/receiverQRscanners/Receiver_46.png', NULL, NULL, NULL),
(47, 'anson giver', '+965', '98745613', 'anson@test12.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '6913', '2021-09-27 16:44:05', 1, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Anson Test1', '+965', '96642655', 'anson@test34.com', 'Haweli', '', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '7011', '2021-10-18 13:48:46', 1, NULL, NULL, NULL, 1, 2, '2', NULL, NULL, NULL, NULL, 1, 'uploads/receiverQRscanners/Receiver_48.png', ',', '02/02/1991', NULL),
(49, 'ansonatlabglo@gmail.com', NULL, '', 'anson labglo', NULL, NULL, '', '', NULL, NULL, NULL, '2021-10-30 12:42:31', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'anson.kv@gmail.com', NULL, '', 'Anson Varghese Koottiparampil', NULL, NULL, '', '', NULL, NULL, NULL, '2021-10-30 14:08:10', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Mustafa ', '+965', '65081212', 'mbaiwala@gmail.com', NULL, NULL, '25d55ad283aa400af464c76d713c07ad', '12345678', NULL, NULL, '2959', '2021-12-14 07:17:36', 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'upendar', '+965', '8686123121', 'upendar@design-master.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '0967', '2021-12-21 10:18:02', 1, NULL, NULL, NULL, 1, 1, '125.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'hey', '+965', '65081410', 'b@b.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '2932', '2022-03-14 08:49:16', 1, NULL, NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, 'uploads/receiverQRscanners/Receiver_53.png', NULL, NULL, NULL),
(54, 'Mustafa Sidhpurwala', NULL, '', 'mustafa.sidhpur@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-03-14 08:51:19', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5082'),
(55, 'workers', '+965', '65081411', '', '', '1', '202cb962ac59075b964b07152d234b70', '123', NULL, NULL, '9893', '2022-03-14 09:45:12', 1, NULL, NULL, NULL, NULL, 2, '0', NULL, NULL, NULL, NULL, 1, 'uploads/receiverQRscanners/Receiver_55.png', NULL, NULL, NULL),
(56, 'mustafasidhpur', '+965', '12312312', 'mustafa.1sidhpur@gmail.co', NULL, NULL, '202cb962ac59075b964b07152d234b70', '123', NULL, NULL, '8687', '2022-04-07 12:05:16', 1, NULL, NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'mustafa Sidhpur', '+965', '66554433', 'mustafasidhpur@gmail.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '5722', '2022-04-10 08:44:21', 1, NULL, NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'mustafasidhpur', '+965', '67702261', 'ams@design-master.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '7888', '2022-04-10 08:44:58', 1, NULL, NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'wa', '+965', '67015304', 'h@h.com', NULL, NULL, '202cb962ac59075b964b07152d234b70', '123', NULL, NULL, '1551', '2022-04-10 09:47:25', 1, NULL, NULL, NULL, 1, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'AppleJohn', NULL, '', 'vygw924ycc@privaterelay.appleid.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-04-10 19:52:57', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'AppleJohn', NULL, '', 'qg4fmh4mz6@privaterelay.appleid.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-09 10:10:13', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'MustafaBaiwala', NULL, '', 'mustafa@design-master.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-10 04:21:34', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Reem Alyacoub', NULL, '', 'rzalyacoub@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-10 08:25:57', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'mustafa.sidhpur@gmail.com', NULL, '', 'Mustafa Sidhpurwala', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-12 08:18:27', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Jan Madziarowicz', NULL, '', 'jan.madziarowicz@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-12 09:21:23', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Raghad Al-Tuwaijri', NULL, '', 'altuwaijriraghad@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, '2022-06-15 18:49:44', NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'mustafaidhpur', '+965', '65081415', 'mustafa.sidhpur@gmail.comme', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, '4723', '2022-06-23 14:45:43', 1, NULL, NULL, NULL, NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_devicetokens`
--

CREATE TABLE `tiptap_devicetokens` (
  `id` int(11) NOT NULL,
  `deviceid` text CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `type` int(11) NOT NULL COMMENT '1:iphone;2:Android'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_devicetokens`
--

INSERT INTO `tiptap_devicetokens` (`id`, `deviceid`, `date`, `type`) VALUES
(1, 'thisistesttoken', '1899-11-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_giverreceiverbanners`
--

CREATE TABLE `tiptap_giverreceiverbanners` (
  `id` int(11) NOT NULL,
  `giverbanner` varchar(225) NOT NULL,
  `receiverbanner` varchar(225) NOT NULL,
  `giverprofilepageimage` varchar(225) DEFAULT NULL,
  `receiverprofilepageimage` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_giverreceiverbanners`
--

INSERT INTO `tiptap_giverreceiverbanners` (`id`, `giverbanner`, `receiverbanner`, `giverprofilepageimage`, `receiverprofilepageimage`) VALUES
(1, 'uploads/banners/ecommerce1655035706.png', 'uploads/banners/ecommerce11655035636.png', 'uploads/banners/ecommerce1642445524.png', 'uploads/banners/ecommerce11642445524.png');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_industrytype`
--

CREATE TABLE `tiptap_industrytype` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `titlear` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_industrytype`
--

INSERT INTO `tiptap_industrytype` (`id`, `title`, `titlear`, `status`) VALUES
(2, 'Transport', 'Transport Ar', 1),
(3, 'Hotel', 'Holtels ar', 1),
(4, 'Restaurants', 'Restaurants ar', 1),
(5, 'Petrol Pumps', 'Petrol Pumps ar', 1),
(6, 'Advertising', 'Advertising ar', 1),
(7, 'Spa & Salon', 'Ø³Ø¨Ø§ Ùˆ ØµÙˆÙ„ÙˆÙ†Ø§Øª', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_jobtypes`
--

CREATE TABLE `tiptap_jobtypes` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `titlear` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_jobtypes`
--

INSERT INTO `tiptap_jobtypes` (`id`, `title`, `titlear`, `status`) VALUES
(1, 'Waiter', 'Waiter ar', 1),
(2, 'Worker', 'Worker ar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_landingbanners`
--

CREATE TABLE `tiptap_landingbanners` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `titlear` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text NOT NULL,
  `descriptionar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_landingbanners`
--

INSERT INTO `tiptap_landingbanners` (`id`, `title`, `titlear`, `description`, `descriptionar`, `image`, `status`) VALUES
(2, 'Cashless Tipping', 'Ø§ÙƒØ±Ø§Ù…ÙŠØ© Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©', '<p>We are TipTap.&nbsp;Give or Receive Tips.</p>\r\n', '<p>Ø³Ù„Ù… Ø§Ùˆ Ø§Ø³ØªÙ„Ù….</p>\r\n', 'uploads/banners/ecommerce1641312550.png', 0),
(3, 'Give or Receive. ', 'Ø§ÙƒØ±Ø§Ù…ÙŠØ© Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠØ©', '<p>WE ARE TIPTAP</p>\r\n', '<p>WE ARE TIPTAP</p>\r\n', 'uploads/banners/ecommerce1642444166.png', 1),
(4, 'TipTap For Business', 'Scan QR code', '<p>Single Collection, Pool Tipping, Non-Contact Tipping, Employee of the Month and much more.. Join now</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.</p>\r\n', 'uploads/banners/ecommerce1642444145.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_notificationmessages`
--

CREATE TABLE `tiptap_notificationmessages` (
  `id` int(11) NOT NULL,
  `notificationid` int(11) NOT NULL,
  `devicetoken` text CHARACTER SET utf8 NOT NULL,
  `message` varchar(225) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_notificationmessages`
--

INSERT INTO `tiptap_notificationmessages` (`id`, `notificationid`, `devicetoken`, `message`, `date`, `type`, `userid`) VALUES
(1, 2, 'thisistesttoken', 'this is to receiver!', '2020-12-02 12:15:58', 1, 0),
(2, 3, 'thisistesttoken', 'this is for sender!', '2020-12-02 12:19:26', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_notifications`
--

CREATE TABLE `tiptap_notifications` (
  `id` int(11) NOT NULL,
  `giverorreceiver` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_notifications`
--

INSERT INTO `tiptap_notifications` (`id`, `giverorreceiver`, `message`, `date`) VALUES
(3, 1, 'this is for sender!', '2020-12-02 12:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_ordersmaster`
--

CREATE TABLE `tiptap_ordersmaster` (
  `order_id` int(11) NOT NULL,
  `reference_orderid` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_ordersmaster`
--

INSERT INTO `tiptap_ordersmaster` (`order_id`, `reference_orderid`, `date`) VALUES
(1, '10_1631091736_10.000_2', '2021-09-08 09:02:16'),
(2, '10_1631091914_10.000_2', '2021-09-08 09:05:14'),
(3, '10_1631092048_10.000_2', '2021-09-08 09:07:28'),
(4, '24_1631101500_10.000_2', '2021-09-08 11:45:00'),
(5, '3_1631102306_5.000_1', '2021-09-08 11:58:26'),
(6, '24_1631115189_10.000_2', '2021-09-08 15:33:09'),
(7, '_1631115329__', '2021-09-08 15:35:29'),
(8, '24_1631164745_5.000_1', '2021-09-09 05:19:05'),
(9, '3_1631168761_5.000_1', '2021-09-09 06:26:01'),
(10, '24_1631173810_10.000_2', '2021-09-09 07:50:10'),
(11, '24_1631180078_5.000_1', '2021-09-09 09:34:38'),
(12, '24_1631180798_5.000_1', '2021-09-09 09:46:38'),
(13, '24_1631180915_5.000_1', '2021-09-09 09:48:35'),
(14, '24_1631182087_5.000_1', '2021-09-09 10:08:07'),
(15, '24_1631182297_5.000_1', '2021-09-09 10:11:37'),
(16, '24_1631182378_5.000_1', '2021-09-09 10:12:58'),
(17, '24_1631182736_5.000_1', '2021-09-09 10:18:56'),
(18, '24_1631184377_5.000_1', '2021-09-09 10:46:17'),
(19, '24_1631189375_5.000_1', '2021-09-09 12:09:35'),
(20, '10_1631190910_10.000_2', '2021-09-09 12:35:10'),
(21, '10_1631191106_10.000_2', '2021-09-09 12:38:26'),
(22, '10_1632592412_10.000_2', '2021-09-25 17:53:32'),
(23, '10_1632826931_10.000_2', '2021-09-28 11:02:11'),
(24, '10_1632834344_10.000_2', '2021-09-28 13:05:44'),
(25, '10_1634566557_10.000_2', '2021-10-18 14:15:57'),
(26, '10_1634571548_10.000_2', '2021-10-18 15:39:08'),
(27, '10_1634897660_10.000_2', '2021-10-22 10:14:20'),
(28, '24_1634898183_5.000_1', '2021-10-22 10:23:03'),
(29, '24_1634898202_5.000_1 ', '2021-10-22 10:23:22'),
(30, '24_1634898232_5.000_1 ', '2021-10-22 10:23:52'),
(31, '24_1634898255_5.000_1', '2021-10-22 10:24:15'),
(32, '24_1634899064_5.000_1', '2021-10-22 10:37:44'),
(33, '24_1634899120_5.000_1', '2021-10-22 10:38:40'),
(34, '24_1634899355_5.000_1', '2021-10-22 10:42:35'),
(35, '24_1634899459_5.000_1', '2021-10-22 10:44:19'),
(36, '24_1635054689_5.000_1', '2021-10-24 05:51:29'),
(37, '10_1635056079_10.000_2', '2021-10-24 06:14:39'),
(38, '10_1635056143_10.000_2', '2021-10-24 06:15:43'),
(39, '10_1635056293_10.000_2', '2021-10-24 06:18:13'),
(40, '24_1635594421_10.000_2', '2021-10-30 11:47:01'),
(41, '24_1636213056_5.000_1 ', '2021-11-06 15:37:36'),
(42, '24_1637880099_25.000_5', '2021-11-25 22:41:39'),
(43, '51_1639466797_5.000_1', '2021-12-14 07:26:37'),
(44, '51_1639592616_15.000_3', '2021-12-15 18:23:36'),
(45, '51_1639592652_5.000_1', '2021-12-15 18:24:12'),
(46, '24_1639633028_5.000_1', '2021-12-16 05:37:08'),
(47, '24_1639633271_5.000_1', '2021-12-16 05:41:11'),
(48, '10_1639634048_10.000_2', '2021-12-16 05:54:08'),
(49, '10_1639634053_10.000_2', '2021-12-16 05:54:13'),
(50, '10_1639634069_10.000_2', '2021-12-16 05:54:29'),
(51, '10_1639634153_10.000_2', '2021-12-16 05:55:53'),
(52, '10_1639634194_10.000_2', '2021-12-16 05:56:34'),
(53, '10_1639634206_10.000_2', '2021-12-16 05:56:46'),
(54, '10_1639635119_10.000_2', '2021-12-16 06:11:59'),
(55, '24_1639644912_5.000_1', '2021-12-16 08:55:12'),
(56, '24_1639645944_5.000_1', '2021-12-16 09:12:24'),
(57, '24_1639646133_5.000_1', '2021-12-16 09:15:33'),
(58, '24_1639646454_5.000_1', '2021-12-16 09:20:54'),
(59, '24_1639654594_5.000_1', '2021-12-16 11:36:34'),
(60, '24_1639655240_5.000_1', '2021-12-16 11:47:20'),
(61, '24_1639655299_10.000_2', '2021-12-16 11:48:19'),
(62, '24_1639658190_5.000_1', '2021-12-16 12:36:30'),
(63, '51_1639801791_5.000_1', '2021-12-18 04:29:51'),
(64, '24_1639813862_5.000_1', '2021-12-18 07:51:02'),
(65, '24_1639983476_5.000_1', '2021-12-20 06:57:56'),
(66, '24_1639983578_5.000_1', '2021-12-20 06:59:38'),
(67, '24_1639984034_5.000_1', '2021-12-20 07:07:14'),
(68, '51_1639985827_25.000_5', '2021-12-20 07:37:07'),
(69, '24_1639988766_5.000_1', '2021-12-20 08:26:06'),
(70, '24_1639988851_5.000_1', '2021-12-20 08:27:31'),
(71, '24_1639988896_5.000_1', '2021-12-20 08:28:16'),
(72, '24_1639996195_10.000_2', '2021-12-20 10:29:55'),
(73, '24_1639996230_10.000_2', '2021-12-20 10:30:30'),
(74, '_1639996233__', '2021-12-20 10:30:33'),
(75, '24_1640080306_15.000_3', '2021-12-21 09:51:46'),
(76, '24_1640080337_5.000_1', '2021-12-21 09:52:17'),
(77, '52_1640081924_5.000_1', '2021-12-21 10:18:44'),
(78, '52_1640081992_5.000_1', '2021-12-21 10:19:52'),
(79, '52_1640082076_15.000_3', '2021-12-21 10:21:16'),
(80, '52_1640082112_10.000_2', '2021-12-21 10:21:52'),
(81, '52_1640082287_5.000_1', '2021-12-21 10:24:47'),
(82, '52_1640082331_5.000_1', '2021-12-21 10:25:31'),
(83, '52_1640082380_5.000_1', '2021-12-21 10:26:20'),
(84, '52_1640082472_5.000_1', '2021-12-21 10:27:52'),
(85, '52_1640082567_5.000_1', '2021-12-21 10:29:27'),
(86, '52_1640082656_5.000_1', '2021-12-21 10:30:56'),
(87, '52_1640082832_5.000_1', '2021-12-21 10:33:52'),
(88, '52_1640082916_5.000_1', '2021-12-21 10:35:16'),
(89, '52_1640083539_5.000_1', '2021-12-21 10:45:39'),
(90, '52_1640083560_5.000_1', '2021-12-21 10:46:00'),
(91, '52_1640084292_5.000_1', '2021-12-21 10:58:12'),
(92, '52_1640084298_5.000_1', '2021-12-21 10:58:18'),
(93, '52_1640084363_5.000_1', '2021-12-21 10:59:23'),
(94, '52_1640084367_5.000_1', '2021-12-21 10:59:27'),
(95, '24_1640084799_5.000_1', '2021-12-21 11:06:39'),
(96, '52_1640084854_5.000_1', '2021-12-21 11:07:34'),
(97, '24_1640084920_5.000_1', '2021-12-21 11:08:40'),
(98, '52_1640088058_10.000_2', '2021-12-21 12:00:58'),
(99, '52_1640088085_10.000_2', '2021-12-21 12:01:25'),
(100, '52_1640088109_15.000_3', '2021-12-21 12:01:49'),
(101, '52_1640088113_15.000_3', '2021-12-21 12:01:53'),
(102, '52_1640088247_25.000_5', '2021-12-21 12:04:07'),
(103, '52_1640088264_25.000_5', '2021-12-21 12:04:24'),
(104, '52_1640088596_30.000_6', '2021-12-21 12:09:56'),
(105, '52_1640088607_30.000_6', '2021-12-21 12:10:07'),
(106, '52_1640089037_10.000_2', '2021-12-21 12:17:17'),
(107, '52_1640089042_10.000_2', '2021-12-21 12:17:22'),
(108, '52_1640089066_20.000_4', '2021-12-21 12:17:46'),
(109, '52_1640089071_20.000_4', '2021-12-21 12:17:51'),
(110, '52_1640089185_10.000_2', '2021-12-21 12:19:45'),
(111, '52_1640089190_10.000_2', '2021-12-21 12:19:50'),
(112, '52_1640089263_10.000_2', '2021-12-21 12:21:03'),
(113, '52_1640089268_10.000_2', '2021-12-21 12:21:08'),
(114, '52_1640089700_10.000_2', '2021-12-21 12:28:20'),
(115, '52_1640089705_10.000_2', '2021-12-21 12:28:25'),
(116, '52_1640089811_30.000_6', '2021-12-21 12:30:11'),
(117, '52_1640089816_30.000_6', '2021-12-21 12:30:16'),
(118, '52_1640090858_15.000_3', '2021-12-21 12:47:38'),
(119, '52_1640090862_15.000_3', '2021-12-21 12:47:42'),
(120, '51_1640420069_5.000_1', '2021-12-25 08:14:29'),
(121, '51_1640577793_5.000_1', '2021-12-27 04:03:13'),
(122, '24_1640627820_5.000_1', '2021-12-27 17:57:00'),
(123, '_1640627821__', '2021-12-27 17:57:01'),
(124, '24_1640672100_5.000_1', '2021-12-28 06:15:00'),
(125, '24_1640672107_5.000_1', '2021-12-28 06:15:07'),
(126, '24_1640672201_5.000_1', '2021-12-28 06:16:41'),
(127, '24_1640672206_5.000_1', '2021-12-28 06:16:46'),
(128, '24_1640672231_5.000_1', '2021-12-28 06:17:11'),
(129, '24_1640672235_5.000_1', '2021-12-28 06:17:15'),
(130, '24_1640672268_5.000_1', '2021-12-28 06:17:48'),
(131, '24_1640672474_5.000_1', '2021-12-28 06:21:14'),
(132, '24_1640672860_5.000_1', '2021-12-28 06:27:40'),
(133, '24_1640673227_5.000_1', '2021-12-28 06:33:47'),
(134, '24_1640673237_5.000_1', '2021-12-28 06:33:57'),
(135, '51_1641203696_5.000_1', '2022-01-03 09:54:56'),
(136, '51_1641203701_5.000_1', '2022-01-03 09:55:01'),
(137, '51_1641203729_10.000_2', '2022-01-03 09:55:29'),
(138, '51_1641203733_10.000_2', '2022-01-03 09:55:33'),
(139, '24_1641280094_5.000_1.0', '2022-01-04 07:08:14'),
(140, '24_1641280205_5.000_1.0', '2022-01-04 07:10:05'),
(141, '24_1641281531_5.000_1.0', '2022-01-04 07:32:11'),
(142, '24_1641281647_5.000_1', '2022-01-04 07:34:07'),
(143, '24_1641281656_5.000_1', '2022-01-04 07:34:16'),
(144, '24_1641283017_10.000_2', '2022-01-04 07:56:57'),
(145, '24_1641283022_10.000_2', '2022-01-04 07:57:02'),
(146, '_1641283025__', '2022-01-04 07:57:05'),
(147, '24_1641283038_5.000_1', '2022-01-04 07:57:18'),
(148, '24_1641283043_5.000_1', '2022-01-04 07:57:23'),
(149, '24_1641302819_5.000_1', '2022-01-04 13:26:59'),
(150, '24_1641302827_5.000_1', '2022-01-04 13:27:07'),
(151, '24_1641303368_30.000_6', '2022-01-04 13:36:08'),
(152, '24_1641305626_5.000_1', '2022-01-04 14:13:46'),
(153, '24_1641305632_5.000_1', '2022-01-04 14:13:52'),
(154, '24_1641305645_30.000_6', '2022-01-04 14:14:05'),
(155, '24_1641305649_30.000_6', '2022-01-04 14:14:09'),
(156, '24_1641571004_5.000_1', '2022-01-07 15:56:44'),
(157, '24_1641571009_5.000_1', '2022-01-07 15:56:49'),
(158, '_1641571013__', '2022-01-07 15:56:53'),
(159, '54_1647250967_5.000_1', '2022-03-14 09:42:47'),
(160, '54_1647250972_5.000_1', '2022-03-14 09:42:52'),
(161, '10_1648641210_10.000_2', '2022-03-30 11:53:30'),
(162, '10_1648641211_10.000_2', '2022-03-30 11:53:31'),
(163, '10_1648641212_10.000_2', '2022-03-30 11:53:32'),
(164, '10_1648641213_10.000_2', '2022-03-30 11:53:33'),
(165, '10_1648641213_10.000_2', '2022-03-30 11:53:33'),
(166, '10_1648641214_10.000_2', '2022-03-30 11:53:34'),
(167, '10_1648641215_10.000_2', '2022-03-30 11:53:35'),
(168, '10_1648641216_10.000_2', '2022-03-30 11:53:36'),
(169, '10_1648641217_10.000_2', '2022-03-30 11:53:37'),
(170, '10_1648641217_10.000_2', '2022-03-30 11:53:37'),
(171, '10_1648641218_10.000_2', '2022-03-30 11:53:38'),
(172, '10_1648641219_10.000_2', '2022-03-30 11:53:39'),
(173, '10_1648641220_10.000_2', '2022-03-30 11:53:40'),
(174, '10_1648641221_10.000_2', '2022-03-30 11:53:41'),
(175, '10_1648641221_10.000_2', '2022-03-30 11:53:41'),
(176, '10_1648641222_10.000_2', '2022-03-30 11:53:42'),
(177, '10_1648641223_10.000_2', '2022-03-30 11:53:43'),
(178, '10_1648641224_10.000_2', '2022-03-30 11:53:44'),
(179, '10_1648641225_10.000_2', '2022-03-30 11:53:45'),
(180, '10_1648641226_10.000_2', '2022-03-30 11:53:46'),
(181, '10_1648641226_10.000_2', '2022-03-30 11:53:46'),
(182, '10_1648641236_10.000_2', '2022-03-30 11:53:56'),
(183, '10_1648641237_10.000_2', '2022-03-30 11:53:57'),
(184, '10_1648641238_10.000_2', '2022-03-30 11:53:58'),
(185, '10_1648641239_10.000_2', '2022-03-30 11:53:59'),
(186, '10_1648641239_10.000_2', '2022-03-30 11:53:59'),
(187, '10_1648641240_10.000_2', '2022-03-30 11:54:00'),
(188, '10_1648641241_10.000_2', '2022-03-30 11:54:01'),
(189, '10_1648641242_10.000_2', '2022-03-30 11:54:02'),
(190, '10_1648641242_10.000_2', '2022-03-30 11:54:02'),
(191, '10_1648641243_10.000_2', '2022-03-30 11:54:03'),
(192, '10_1648641244_10.000_2', '2022-03-30 11:54:04'),
(193, '10_1648641245_10.000_2', '2022-03-30 11:54:05'),
(194, '10_1648641245_10.000_2', '2022-03-30 11:54:05'),
(195, '10_1648641246_10.000_2', '2022-03-30 11:54:06'),
(196, '10_1648641247_10.000_2', '2022-03-30 11:54:07'),
(197, '10_1648641248_10.000_2', '2022-03-30 11:54:08'),
(198, '10_1648641248_10.000_2', '2022-03-30 11:54:08'),
(199, '10_1648641249_10.000_2', '2022-03-30 11:54:09'),
(200, '10_1648641250_10.000_2', '2022-03-30 11:54:10'),
(201, '10_1648641251_10.000_2', '2022-03-30 11:54:11'),
(202, '10_1648641252_10.000_2', '2022-03-30 11:54:12'),
(203, '10_1648641315_10.000_2', '2022-03-30 11:55:15'),
(204, '10_1648641316_10.000_2', '2022-03-30 11:55:16'),
(205, '10_1648641317_10.000_2', '2022-03-30 11:55:17'),
(206, '10_1648641318_10.000_2', '2022-03-30 11:55:18'),
(207, '10_1648641318_10.000_2', '2022-03-30 11:55:18'),
(208, '10_1648641319_10.000_2', '2022-03-30 11:55:19'),
(209, '10_1648641320_10.000_2', '2022-03-30 11:55:20'),
(210, '10_1648641321_10.000_2', '2022-03-30 11:55:21'),
(211, '10_1648641322_10.000_2', '2022-03-30 11:55:22'),
(212, '10_1648641323_10.000_2', '2022-03-30 11:55:23'),
(213, '10_1648641323_10.000_2', '2022-03-30 11:55:23'),
(214, '10_1648641324_10.000_2', '2022-03-30 11:55:24'),
(215, '10_1648641325_10.000_2', '2022-03-30 11:55:25'),
(216, '10_1648641326_10.000_2', '2022-03-30 11:55:26'),
(217, '10_1648641329_10.000_2', '2022-03-30 11:55:29'),
(218, '10_1648641491_10.000_2', '2022-03-30 11:58:11'),
(219, '10_1648641493_10.000_2', '2022-03-30 11:58:13'),
(220, '10_1648641495_10.000_2', '2022-03-30 11:58:15'),
(221, '10_1648641497_10.000_2', '2022-03-30 11:58:17'),
(222, '10_1648641499_10.000_2', '2022-03-30 11:58:19'),
(223, '10_1648641501_10.000_2', '2022-03-30 11:58:21'),
(224, '10_1648641502_10.000_2', '2022-03-30 11:58:22'),
(225, '10_1648641504_10.000_2', '2022-03-30 11:58:24'),
(226, '10_1648641506_10.000_2', '2022-03-30 11:58:26'),
(227, '10_1648641508_10.000_2', '2022-03-30 11:58:28'),
(228, '10_1648641509_10.000_2', '2022-03-30 11:58:29'),
(229, '10_1648641511_10.000_2', '2022-03-30 11:58:31'),
(230, '10_1648641513_10.000_2', '2022-03-30 11:58:33'),
(231, '10_1648641515_10.000_2', '2022-03-30 11:58:35'),
(232, '10_1648641517_10.000_2', '2022-03-30 11:58:37'),
(233, '10_1648641518_10.000_2', '2022-03-30 11:58:38'),
(234, '10_1648641520_10.000_2', '2022-03-30 11:58:40'),
(235, '10_1648641522_10.000_2', '2022-03-30 11:58:42'),
(236, '10_1648641523_10.000_2', '2022-03-30 11:58:43'),
(237, '10_1648641525_10.000_2', '2022-03-30 11:58:45'),
(238, '10_1648641527_10.000_2', '2022-03-30 11:58:47'),
(239, '10_1648641529_10.000_2', '2022-03-30 11:58:49'),
(240, '10_1648641530_10.000_2', '2022-03-30 11:58:50'),
(241, '10_1648641532_10.000_2', '2022-03-30 11:58:52'),
(242, '10_1648641534_10.000_2', '2022-03-30 11:58:54'),
(243, '10_1648641557_10.000_2', '2022-03-30 11:59:17'),
(244, '10_1648641558_10.000_2', '2022-03-30 11:59:18'),
(245, '10_1648641560_10.000_2', '2022-03-30 11:59:20'),
(246, '10_1648641562_10.000_2', '2022-03-30 11:59:22'),
(247, '10_1648641563_10.000_2', '2022-03-30 11:59:23'),
(248, '10_1648641565_10.000_2', '2022-03-30 11:59:25'),
(249, '10_1648641566_10.000_2', '2022-03-30 11:59:26'),
(250, '10_1648641568_10.000_2', '2022-03-30 11:59:28'),
(251, '10_1648641570_10.000_2', '2022-03-30 11:59:30'),
(252, '10_1648641572_10.000_2', '2022-03-30 11:59:32'),
(253, '10_1648641573_10.000_2', '2022-03-30 11:59:33'),
(254, '10_1648641575_10.000_2', '2022-03-30 11:59:35'),
(255, '10_1648641577_10.000_2', '2022-03-30 11:59:37'),
(256, '10_1648641578_10.000_2', '2022-03-30 11:59:38'),
(257, '10_1648641580_10.000_2', '2022-03-30 11:59:40'),
(258, '10_1648641582_10.000_2', '2022-03-30 11:59:42'),
(259, '10_1648641583_10.000_2', '2022-03-30 11:59:43'),
(260, '10_1648641585_10.000_2', '2022-03-30 11:59:45'),
(261, '10_1648641586_10.000_2', '2022-03-30 11:59:46'),
(262, '10_1648641588_10.000_2', '2022-03-30 11:59:48'),
(263, '10_1648641590_10.000_2', '2022-03-30 11:59:50'),
(264, '54_1649320222_5.000_1', '2022-04-07 08:30:22'),
(265, '54_1649320224_5.000_1', '2022-04-07 08:30:24'),
(266, '63_1654834928_5.000_1', '2022-06-10 04:22:08'),
(267, '63_1654834930_5.000_1', '2022-06-10 04:22:10'),
(268, '63_1654835515_5.000_1', '2022-06-10 04:31:55'),
(269, '63_1654835517_5.000_1', '2022-06-10 04:31:57'),
(270, '54_1654835561_5.000_1', '2022-06-10 04:32:41'),
(271, '54_1654835563_5.000_1', '2022-06-10 04:32:43'),
(272, '54_1654836306_10.000_2', '2022-06-10 04:45:06'),
(273, '54_1654836308_10.000_2', '2022-06-10 04:45:08'),
(274, '63_1654836869_5.000_1', '2022-06-10 04:54:29'),
(275, '63_1654836871_5.000_1', '2022-06-10 04:54:31'),
(276, '24_1654847962_15.000_3', '2022-06-10 07:59:22'),
(277, '24_1654847964_15.000_3', '2022-06-10 07:59:24'),
(278, '64_1654849566_5.000_1', '2022-06-10 08:26:06'),
(279, '64_1654849568_5.000_1', '2022-06-10 08:26:08'),
(280, '_1654849569__', '2022-06-10 08:26:09'),
(281, '64_1654849629_5.000_1', '2022-06-10 08:27:09'),
(282, '64_1654849631_5.000_1', '2022-06-10 08:27:11'),
(283, '64_1654852802_5.000_1', '2022-06-10 09:20:02'),
(284, '64_1654852804_5.000_1', '2022-06-10 09:20:04'),
(285, '64_1654852881_5.000_1', '2022-06-10 09:21:21'),
(286, '64_1654852883_5.000_1', '2022-06-10 09:21:23'),
(287, '24_1654959596_5.000_1', '2022-06-11 14:59:56'),
(288, '24_1654959646_5.000_1', '2022-06-11 15:00:46'),
(289, '24_1655007492_5.000_1', '2022-06-12 04:18:12'),
(290, '24_1655007619_5.000_1', '2022-06-12 04:20:19'),
(291, '24_1655007651_5.000_1', '2022-06-12 04:20:51'),
(292, '24_1655007663_5.000_1', '2022-06-12 04:21:03'),
(293, '24_1655007674_5.000_1', '2022-06-12 04:21:14'),
(294, '24_1655007782_5.000_1', '2022-06-12 04:23:02'),
(295, '24_1655007857_5.000_1', '2022-06-12 04:24:17'),
(296, '24_1655007872_5.000_1', '2022-06-12 04:24:32'),
(297, '24_1655007917_5.000_1', '2022-06-12 04:25:17'),
(298, '24_1655007927_5.000_1', '2022-06-12 04:25:27'),
(299, '24_1655008129_5.000_1', '2022-06-12 04:28:49'),
(300, '24_1655008285_5.000_1', '2022-06-12 04:31:25'),
(301, '24_1655008296_5.000_1', '2022-06-12 04:31:36'),
(302, '24_1655008972_5.000_1', '2022-06-12 04:42:52'),
(303, '24_1655008990_5.000_1', '2022-06-12 04:43:10'),
(304, '10_1655011525_10.000_2', '2022-06-12 05:25:25'),
(305, '10_1655011526_10.000_2', '2022-06-12 05:25:26'),
(306, '10_1655011528_10.000_2', '2022-06-12 05:25:28'),
(307, '10_1655011530_10.000_2', '2022-06-12 05:25:30'),
(308, '10_1655011532_10.000_2', '2022-06-12 05:25:32'),
(309, '10_1655011534_10.000_2', '2022-06-12 05:25:34'),
(310, '10_1655011535_10.000_2', '2022-06-12 05:25:35'),
(311, '10_1655011537_10.000_2', '2022-06-12 05:25:37'),
(312, '10_1655011539_10.000_2', '2022-06-12 05:25:39'),
(313, '10_1655011540_10.000_2', '2022-06-12 05:25:40'),
(314, '10_1655011542_10.000_2', '2022-06-12 05:25:42'),
(315, '10_1655011544_10.000_2', '2022-06-12 05:25:44'),
(316, '10_1655011546_10.000_2', '2022-06-12 05:25:46'),
(317, '10_1655011547_10.000_2', '2022-06-12 05:25:47'),
(318, '10_1655011549_10.000_2', '2022-06-12 05:25:49'),
(319, '10_1655011551_10.000_2', '2022-06-12 05:25:51'),
(320, '10_1655011553_10.000_2', '2022-06-12 05:25:53'),
(321, '10_1655011554_10.000_2', '2022-06-12 05:25:54'),
(322, '10_1655011556_10.000_2', '2022-06-12 05:25:56'),
(323, '10_1655011558_10.000_2', '2022-06-12 05:25:58'),
(324, '10_1655011559_10.000_2', '2022-06-12 05:25:59'),
(325, '4_1655011686_10.000_2', '2022-06-12 05:28:06'),
(326, '4_1655011694_10.000_2', '2022-06-12 05:28:14'),
(327, '4_1655011696_10.000_2', '2022-06-12 05:28:16'),
(328, '4_1655011698_10.000_2', '2022-06-12 05:28:18'),
(329, '4_1655011699_10.000_2', '2022-06-12 05:28:19'),
(330, '4_1655011701_10.000_2', '2022-06-12 05:28:21'),
(331, '4_1655011703_10.000_2', '2022-06-12 05:28:23'),
(332, '4_1655011705_10.000_2', '2022-06-12 05:28:25'),
(333, '4_1655011706_10.000_2', '2022-06-12 05:28:26'),
(334, '4_1655011708_10.000_2', '2022-06-12 05:28:28'),
(335, '4_1655011710_10.000_2', '2022-06-12 05:28:30'),
(336, '4_1655011712_10.000_2', '2022-06-12 05:28:32'),
(337, '4_1655011713_10.000_2', '2022-06-12 05:28:33'),
(338, '4_1655011715_10.000_2', '2022-06-12 05:28:35'),
(339, '4_1655011717_10.000_2', '2022-06-12 05:28:37'),
(340, '4_1655011719_10.000_2', '2022-06-12 05:28:39'),
(341, '4_1655011721_10.000_2', '2022-06-12 05:28:41'),
(342, '4_1655011722_10.000_2', '2022-06-12 05:28:42'),
(343, '4_1655011724_10.000_2', '2022-06-12 05:28:44'),
(344, '4_1655011726_10.000_2', '2022-06-12 05:28:46'),
(345, '4_1655011727_10.000_2', '2022-06-12 05:28:47'),
(346, '4_1655011729_10.000_2', '2022-06-12 05:28:49'),
(347, '10_1655011814_10.000_2', '2022-06-12 05:30:14'),
(348, '10_1655011816_10.000_2', '2022-06-12 05:30:16'),
(349, '10_1655011817_10.000_2', '2022-06-12 05:30:17'),
(350, '10_1655011819_10.000_2', '2022-06-12 05:30:19'),
(351, '10_1655011821_10.000_2', '2022-06-12 05:30:21'),
(352, '10_1655011823_10.000_2', '2022-06-12 05:30:23'),
(353, '10_1655011825_10.000_2', '2022-06-12 05:30:25'),
(354, '10_1655011826_10.000_2', '2022-06-12 05:30:26'),
(355, '10_1655011828_10.000_2', '2022-06-12 05:30:28'),
(356, '10_1655011830_10.000_2', '2022-06-12 05:30:30'),
(357, '10_1655011832_10.000_2', '2022-06-12 05:30:32'),
(358, '10_1655011833_10.000_2', '2022-06-12 05:30:33'),
(359, '10_1655011835_10.000_2', '2022-06-12 05:30:35'),
(360, '10_1655011837_10.000_2', '2022-06-12 05:30:37'),
(361, '10_1655011839_10.000_2', '2022-06-12 05:30:39'),
(362, '10_1655011840_10.000_2', '2022-06-12 05:30:40'),
(363, '10_1655011842_10.000_2', '2022-06-12 05:30:42'),
(364, '10_1655011844_10.000_2', '2022-06-12 05:30:44'),
(365, '10_1655011846_10.000_2', '2022-06-12 05:30:46'),
(366, '10_1655011848_10.000_2', '2022-06-12 05:30:48'),
(367, '10_1655011849_10.000_2', '2022-06-12 05:30:49'),
(368, '10_1655012083_10.000_2', '2022-06-12 05:34:43'),
(369, '10_1655012084_10.000_2', '2022-06-12 05:34:44'),
(370, '10_1655012085_10.000_2', '2022-06-12 05:34:45'),
(371, '10_1655012086_10.000_2', '2022-06-12 05:34:46'),
(372, '10_1655012086_10.000_2', '2022-06-12 05:34:46'),
(373, '10_1655012087_10.000_2', '2022-06-12 05:34:47'),
(374, '10_1655012088_10.000_2', '2022-06-12 05:34:48'),
(375, '10_1655012089_10.000_2', '2022-06-12 05:34:49'),
(376, '10_1655012090_10.000_2', '2022-06-12 05:34:50'),
(377, '10_1655012090_10.000_2', '2022-06-12 05:34:50'),
(378, '10_1655012091_10.000_2', '2022-06-12 05:34:51'),
(379, '10_1655012092_10.000_2', '2022-06-12 05:34:52'),
(380, '10_1655012093_10.000_2', '2022-06-12 05:34:53'),
(381, '10_1655012094_10.000_2', '2022-06-12 05:34:54'),
(382, '10_1655012094_10.000_2', '2022-06-12 05:34:54'),
(383, '10_1655012095_10.000_2', '2022-06-12 05:34:55'),
(384, '10_1655012096_10.000_2', '2022-06-12 05:34:56'),
(385, '10_1655012097_10.000_2', '2022-06-12 05:34:57'),
(386, '10_1655012098_10.000_2', '2022-06-12 05:34:58'),
(387, '10_1655012098_10.000_2', '2022-06-12 05:34:58'),
(388, '10_1655012099_10.000_2', '2022-06-12 05:34:59'),
(389, '10_1655018418_10.000_2', '2022-06-12 07:20:18'),
(390, '10_1655018419_10.000_2', '2022-06-12 07:20:19'),
(391, '10_1655018420_10.000_2', '2022-06-12 07:20:20'),
(392, '10_1655018421_10.000_2', '2022-06-12 07:20:21'),
(393, '10_1655018421_10.000_2', '2022-06-12 07:20:21'),
(394, '10_1655018422_10.000_2', '2022-06-12 07:20:22'),
(395, '10_1655018423_10.000_2', '2022-06-12 07:20:23'),
(396, '10_1655018424_10.000_2', '2022-06-12 07:20:24'),
(397, '10_1655018424_10.000_2', '2022-06-12 07:20:24'),
(398, '10_1655018425_10.000_2', '2022-06-12 07:20:25'),
(399, '10_1655018426_10.000_2', '2022-06-12 07:20:26'),
(400, '10_1655018427_10.000_2', '2022-06-12 07:20:27'),
(401, '10_1655018427_10.000_2', '2022-06-12 07:20:27'),
(402, '10_1655018428_10.000_2', '2022-06-12 07:20:28'),
(403, '10_1655018429_10.000_2', '2022-06-12 07:20:29'),
(404, '10_1655018429_10.000_2', '2022-06-12 07:20:29'),
(405, '10_1655018430_10.000_2', '2022-06-12 07:20:30'),
(406, '10_1655018431_10.000_2', '2022-06-12 07:20:31'),
(407, '10_1655018431_10.000_2', '2022-06-12 07:20:31'),
(408, '10_1655018432_10.000_2', '2022-06-12 07:20:32'),
(409, '10_1655018433_10.000_2', '2022-06-12 07:20:33'),
(410, '10_1655018439_10.000_2', '2022-06-12 07:20:39'),
(411, '10_1655018439_10.000_2', '2022-06-12 07:20:39'),
(412, '10_1655018440_10.000_2', '2022-06-12 07:20:40'),
(413, '10_1655018441_10.000_2', '2022-06-12 07:20:41'),
(414, '10_1655018441_10.000_2', '2022-06-12 07:20:41'),
(415, '10_1655018442_10.000_2', '2022-06-12 07:20:42'),
(416, '10_1655018443_10.000_2', '2022-06-12 07:20:43'),
(417, '10_1655018443_10.000_2', '2022-06-12 07:20:43'),
(418, '10_1655018444_10.000_2', '2022-06-12 07:20:44'),
(419, '10_1655018445_10.000_2', '2022-06-12 07:20:45'),
(420, '10_1655018446_10.000_2', '2022-06-12 07:20:46'),
(421, '10_1655018446_10.000_2', '2022-06-12 07:20:46'),
(422, '10_1655018447_10.000_2', '2022-06-12 07:20:47'),
(423, '10_1655018448_10.000_2', '2022-06-12 07:20:48'),
(424, '10_1655018449_10.000_2', '2022-06-12 07:20:49'),
(425, '10_1655018449_10.000_2', '2022-06-12 07:20:49'),
(426, '10_1655018450_10.000_2', '2022-06-12 07:20:50'),
(427, '10_1655018451_10.000_2', '2022-06-12 07:20:51'),
(428, '10_1655018451_10.000_2', '2022-06-12 07:20:51'),
(429, '10_1655018452_10.000_2', '2022-06-12 07:20:52'),
(430, '10_1655018453_10.000_2', '2022-06-12 07:20:53'),
(431, '10_1655018496_10.000_2', '2022-06-12 07:21:36'),
(432, '10_1655018497_10.000_2', '2022-06-12 07:21:37'),
(433, '10_1655018498_10.000_2', '2022-06-12 07:21:38'),
(434, '10_1655018499_10.000_2', '2022-06-12 07:21:39'),
(435, '10_1655018499_10.000_2', '2022-06-12 07:21:39'),
(436, '10_1655018500_10.000_2', '2022-06-12 07:21:40'),
(437, '10_1655018501_10.000_2', '2022-06-12 07:21:41'),
(438, '10_1655018502_10.000_2', '2022-06-12 07:21:42'),
(439, '10_1655018502_10.000_2', '2022-06-12 07:21:42'),
(440, '10_1655018503_10.000_2', '2022-06-12 07:21:43'),
(441, '10_1655018504_10.000_2', '2022-06-12 07:21:44'),
(442, '10_1655018504_10.000_2', '2022-06-12 07:21:44'),
(443, '10_1655018505_10.000_2', '2022-06-12 07:21:45'),
(444, '10_1655018506_10.000_2', '2022-06-12 07:21:46'),
(445, '10_1655018507_10.000_2', '2022-06-12 07:21:47'),
(446, '10_1655018507_10.000_2', '2022-06-12 07:21:47'),
(447, '10_1655018508_10.000_2', '2022-06-12 07:21:48'),
(448, '10_1655018509_10.000_2', '2022-06-12 07:21:49'),
(449, '10_1655018510_10.000_2', '2022-06-12 07:21:50'),
(450, '10_1655018510_10.000_2', '2022-06-12 07:21:50'),
(451, '10_1655018511_10.000_2', '2022-06-12 07:21:51'),
(452, '24_1655021965_5.000_1', '2022-06-12 08:19:25'),
(453, '10_1655029798_10.000_2', '2022-06-12 10:29:58'),
(454, '10_1655029799_10.000_2', '2022-06-12 10:29:59'),
(455, '10_1655029800_10.000_2', '2022-06-12 10:30:00'),
(456, '10_1655029801_10.000_2', '2022-06-12 10:30:01'),
(457, '10_1655029802_10.000_2', '2022-06-12 10:30:02'),
(458, '10_1655029803_10.000_2', '2022-06-12 10:30:03'),
(459, '10_1655029803_10.000_2', '2022-06-12 10:30:03'),
(460, '10_1655029804_10.000_2', '2022-06-12 10:30:04'),
(461, '10_1655029805_10.000_2', '2022-06-12 10:30:05'),
(462, '10_1655029806_10.000_2', '2022-06-12 10:30:06'),
(463, '10_1655029807_10.000_2', '2022-06-12 10:30:07'),
(464, '10_1655029808_10.000_2', '2022-06-12 10:30:08'),
(465, '10_1655029809_10.000_2', '2022-06-12 10:30:09'),
(466, '10_1655029809_10.000_2', '2022-06-12 10:30:09'),
(467, '10_1655029810_10.000_2', '2022-06-12 10:30:10'),
(468, '10_1655029811_10.000_2', '2022-06-12 10:30:11'),
(469, '10_1655029812_10.000_2', '2022-06-12 10:30:12'),
(470, '10_1655029813_10.000_2', '2022-06-12 10:30:13'),
(471, '10_1655029813_10.000_2', '2022-06-12 10:30:13'),
(472, '10_1655029814_10.000_2', '2022-06-12 10:30:14'),
(473, '10_1655029815_10.000_2', '2022-06-12 10:30:15'),
(474, '10_1655029855_10.000_2', '2022-06-12 10:30:55'),
(475, '10_1655029889_10.000_2', '2022-06-12 10:31:29'),
(476, '10_1655029892_10.000_2', '2022-06-12 10:31:32'),
(477, '10_1655035699_10.000_2', '2022-06-12 12:08:19'),
(478, '24_1655102567_5.000_1', '2022-06-13 06:42:47'),
(479, '24_1655102569_5.000_1', '2022-06-13 06:42:49'),
(480, '24_1655118257_5.000_1', '2022-06-13 11:04:17'),
(481, '24_1655118259_5.000_1', '2022-06-13 11:04:19'),
(482, '10_1655183176_10.000_2', '2022-06-14 05:06:16'),
(483, '10_1655186785_10.000_2', '2022-06-14 06:06:25'),
(484, '10_1655186832_10.000_2', '2022-06-14 06:07:12'),
(485, '10_1655186833_10.000_2', '2022-06-14 06:07:13'),
(486, '10_1655186835_10.000_2', '2022-06-14 06:07:15'),
(487, '10_1655186837_10.000_2', '2022-06-14 06:07:17'),
(488, '10_1655186838_10.000_2', '2022-06-14 06:07:18'),
(489, '10_1655186840_10.000_2', '2022-06-14 06:07:20'),
(490, '10_1655186842_10.000_2', '2022-06-14 06:07:22'),
(491, '10_1655186843_10.000_2', '2022-06-14 06:07:23'),
(492, '10_1655186845_10.000_2', '2022-06-14 06:07:25'),
(493, '10_1655186847_10.000_2', '2022-06-14 06:07:27'),
(494, '10_1655186849_10.000_2', '2022-06-14 06:07:29'),
(495, '10_1655186850_10.000_2', '2022-06-14 06:07:30'),
(496, '10_1655186852_10.000_2', '2022-06-14 06:07:32'),
(497, '10_1655186854_10.000_2', '2022-06-14 06:07:34'),
(498, '10_1655186855_10.000_2', '2022-06-14 06:07:35'),
(499, '10_1655186857_10.000_2', '2022-06-14 06:07:37'),
(500, '10_1655186859_10.000_2', '2022-06-14 06:07:39'),
(501, '10_1655186860_10.000_2', '2022-06-14 06:07:40'),
(502, '10_1655186860_10.000_2', '2022-06-14 06:07:40'),
(503, '10_1655186862_10.000_2', '2022-06-14 06:07:42'),
(504, '10_1655186864_10.000_2', '2022-06-14 06:07:44'),
(505, '10_1655186866_10.000_2', '2022-06-14 06:07:46'),
(506, '10_1655186867_10.000_2', '2022-06-14 06:07:47'),
(507, '10_1655186869_10.000_2', '2022-06-14 06:07:49'),
(508, '10_1655186871_10.000_2', '2022-06-14 06:07:51'),
(509, '10_1655186872_10.000_2', '2022-06-14 06:07:52'),
(510, '10_1655186874_10.000_2', '2022-06-14 06:07:54'),
(511, '10_1655186876_10.000_2', '2022-06-14 06:07:56'),
(512, '10_1655186877_10.000_2', '2022-06-14 06:07:57'),
(513, '10_1655186879_10.000_2', '2022-06-14 06:07:59'),
(514, '10_1655186881_10.000_2', '2022-06-14 06:08:01'),
(515, '10_1655186882_10.000_2', '2022-06-14 06:08:02'),
(516, '10_1655186884_10.000_2', '2022-06-14 06:08:04'),
(517, '10_1655186886_10.000_2', '2022-06-14 06:08:06'),
(518, '10_1655186888_10.000_2', '2022-06-14 06:08:08'),
(519, '10_1655186889_10.000_2', '2022-06-14 06:08:09'),
(520, '10_1655186891_10.000_2', '2022-06-14 06:08:11'),
(521, '10_1655186893_10.000_2', '2022-06-14 06:08:13'),
(522, '10_1655186894_10.000_2', '2022-06-14 06:08:14'),
(523, '10_1655187670_10.000_2', '2022-06-14 06:21:10'),
(524, '24_1655205871_5.000_1', '2022-06-14 11:24:31'),
(525, '24_1655205875_5.000_1', '2022-06-14 11:24:35'),
(526, '64_1656193612_5.000_1', '2022-06-25 21:46:52'),
(527, '64_1656193617_5.000_1', '2022-06-25 21:46:57'),
(528, '64_1656193658_10.000_2', '2022-06-25 21:47:38'),
(529, '64_1656193662_10.000_2', '2022-06-25 21:47:42'),
(530, '64_1656193948_5.000_1', '2022-06-25 21:52:28'),
(531, '64_1656193953_5.000_1', '2022-06-25 21:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_payments`
--

CREATE TABLE `tiptap_payments` (
  `id` int(11) NOT NULL,
  `paidname` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `Status` int(11) NOT NULL COMMENT 'Payment status (1 - success 0 - failure )',
  `PaymentToken` varchar(225) NOT NULL,
  `PaymentId` varchar(225) NOT NULL,
  `PaidOn` varchar(225) NOT NULL,
  `Loginid` varchar(225) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT 0,
  `companyid` int(11) NOT NULL DEFAULT 0,
  `OrderID` varchar(225) NOT NULL,
  `NewOrderID` varchar(225) NOT NULL,
  `cartcount` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `amountpaid` varchar(225) NOT NULL,
  `Method` int(11) NOT NULL COMMENT 'KNET=1 and MIGs =2)',
  `transactionnumber` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_payments`
--

INSERT INTO `tiptap_payments` (`id`, `paidname`, `mobile`, `Status`, `PaymentToken`, `PaymentId`, `PaidOn`, `Loginid`, `userid`, `companyid`, `OrderID`, `NewOrderID`, `cartcount`, `email`, `amountpaid`, `Method`, `transactionnumber`) VALUES
(1, 'Chanikya', '888993', 1, '', '100202125146040264', '2021-09-08 09:08:19', '125110000475', 0, 0, '3', '1631092048', '0', 'chanikya@design-master.com', '10.000', 0, '202125153946059'),
(2, 'Chanikya', '888993', 1, '', '100202125254529917', '2021-09-09 12:36:00', '125210000669', 0, 0, '20', '1631190910', '0', 'chanikya@design-master.com', '10.000', 0, '202125245484758'),
(3, 'nazakat ios', '987654321', 0, '', '100202129549681839', '2021-10-22 10:43:29', '129510000537', 0, 0, '34', '1634899355', '0', 'd@g.com', '5.000', 0, '202129549697400'),
(4, 'nazakat ios', '987654321', 0, '', '100202129549681839', '2021-10-22 10:43:50', '129510000537', 0, 0, '34', '1634899355', '0', 'd@g.com', '5.000', 0, '202129549697400'),
(5, 'nazakat ios', '987654321', 0, '', '100202129549732994', '2021-10-22 10:45:03', '129510000540', 0, 0, '35', '1634899459', '0', 'd@g.com', '5.000', 0, '202129549745202'),
(6, 'Chanikya', '888993', 0, '', '100202129728045248', '2021-10-24 06:15:30', '129710000085', 0, 0, '37', '1635056079', '0', 'chanikya@design-master.com', '10.000', 0, '202129728059509'),
(7, 'Chanikya', '888993', 0, '', '100202129771923925', '2021-10-24 06:16:23', '129710000086', 0, 0, '38', '1635056143', '0', 'chanikya@design-master.com', '10.000', 0, '202129771913440'),
(8, 'Chanikya', '888993', 1, '', '100202129728151658', '2021-10-24 06:19:02', '129710000088', 0, 0, '39', '1635056293', '0', 'chanikya@design-master.com', '10.000', 0, '202129771833405'),
(9, 'upendar', '8686123121', 1, '', '100202135541419503', '2021-12-21 10:38:25', '135510000588', 0, 0, '87', '1640082832', '0', 'upendar@design-master.com', '5.000', 0, '202135541539934'),
(10, 'upendar', '8686123121', 1, '', '100202135558216906', '2021-12-21 10:49:30', '135510000602', 0, 0, '90', '1640083560', '0', 'upendar@design-master.com', '5.000', 0, '202135541821941'),
(11, 'upendar', '8686123121', 1, '', '100202135557847462', '2021-12-21 10:59:06', '135510000616', 0, 0, '92', '1640084298', '0', 'upendar@design-master.com', '5.000', 0, '202135557836716'),
(12, 'upendar', '8686123121', 1, '', '100202135557815415', '2021-12-21 11:00:10', '135510000620', 0, 0, '94', '1640084367', '0', 'upendar@design-master.com', '5.000', 0, '202135557805310'),
(13, 'upendar', '8686123121', 1, '', '100202135544061964', '2021-12-21 12:03:30', '135510000718', 0, 0, '101', '1640088113', '0', 'upendar@design-master.com', '15.000', 0, '202135544077313'),
(14, 'upendar', '8686123121', 1, '', '100202135544136975', '2021-12-21 12:05:46', '135510000723', 0, 0, '103', '1640088264', '0', 'upendar@design-master.com', '25.000', 0, '202135555846931'),
(15, 'upendar', '8686123121', 1, '', '100202135555691534', '2021-12-21 12:11:35', '135510000733', 0, 0, '105', '1640088607', '0', 'upendar@design-master.com', '30.000', 0, '202135544319729'),
(16, 'upendar', '8686123121', 1, '', '100202135544634941', '2021-12-21 12:21:52', '135510000755', 0, 0, '113', '1640089268', '0', 'upendar@design-master.com', '10.000', 0, '202135555354284'),
(17, 'upendar', '8686123121', 1, '', '100202135544853846', '2021-12-21 12:29:08', '135510000769', 0, 0, '115', '1640089705', '0', 'upendar@design-master.com', '10.000', 0, '202135555136004'),
(18, 'upendar', '8686123121', 1, '', '100202135545432276', '2021-12-21 12:48:32', '135510000799', 0, 0, '119', '1640090862', '0', 'upendar@design-master.com', '15.000', 0, '202135545445803'),
(19, 'nazakat ios', '987654321', 0, '', '100202136263942995', '2021-12-28 06:16:18', '136210000184', 0, 0, '125', '1640672107', '0', 'd@g.com', '5.000', 0, '202136263925521'),
(20, 'nazakat ios', '987654321', 0, '', '100202136236361022', '2021-12-28 06:27:19', '136210000206', 0, 0, '131', '1640672474', '0', 'd@g.com', '5.000', 0, '202136236402518'),
(21, 'nazakat ios', '987654321', 0, '', '100202136236435840', '2021-12-28 06:30:23', '136210000215', 0, 0, '132', '1640672860', '0', 'd@g.com', '5.000', 0, '202136263503733'),
(22, 'nazakat ios', '987654321', 1, '', '100202136263368420', '2021-12-28 06:35:53', '136210000225', 0, 0, '134', '1640673237', '0', 'd@g.com', '5.000', 0, '202136236662194'),
(23, 'Reem Alyacoub', '', 0, '', '101202217746983797', '2022-06-25 21:53:25', '217750001978', 0, 0, '531', '1656193953', '0', 'rzalyacoub@gmail.com', '5.000', 0, '202217746991278');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_roles`
--

CREATE TABLE `tiptap_roles` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `companyid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_roles`
--

INSERT INTO `tiptap_roles` (`id`, `title`, `companyid`, `status`) VALUES
(1, 'Manager', 2, 1),
(2, 'Sales Executive', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_servicecharge`
--

CREATE TABLE `tiptap_servicecharge` (
  `id` int(11) NOT NULL,
  `amount` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_servicecharge`
--

INSERT INTO `tiptap_servicecharge` (`id`, `amount`) VALUES
(1, '10'),
(2, '1.000');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_tipamounts`
--

CREATE TABLE `tiptap_tipamounts` (
  `id` int(11) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_tipamounts`
--

INSERT INTO `tiptap_tipamounts` (`id`, `amount`, `status`) VALUES
(1, '0.500', 1),
(2, '1.000', 1),
(3, '1.500', 1),
(4, '2.000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_tipsamttoreceivers`
--

CREATE TABLE `tiptap_tipsamttoreceivers` (
  `id` int(11) NOT NULL,
  `giverid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `amountid` int(11) NOT NULL,
  `amountvalue` varchar(225) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_tipsamttoreceivers`
--

INSERT INTO `tiptap_tipsamttoreceivers` (`id`, `giverid`, `receiverid`, `amountid`, `amountvalue`, `date`) VALUES
(1, 4, 3, 2, '1.000', '2021-01-25 12:21:55'),
(2, 24, 3, 2, '1.000', '2021-02-01 10:09:12'),
(3, 24, 3, 2, '1.000', '2021-02-01 10:14:29'),
(4, 24, 3, 4, '2.000', '2021-02-01 10:15:01'),
(5, 24, 3, 4, '2.000', '2021-02-01 10:17:15'),
(6, 24, 3, 2, '1.000', '2021-02-01 10:18:21'),
(7, 24, 3, 3, '1.500', '2021-09-08 13:54:10'),
(8, 24, 3, 4, '2.000', '2021-09-09 13:35:06'),
(9, 24, 3, 1, '0.500', '2021-09-09 13:38:13'),
(10, 24, 46, 1, '0.500', '2021-09-28 12:47:58'),
(11, 24, 48, 1, '0.500', '2021-10-18 14:09:28'),
(12, 24, 48, 2, '1.000', '2021-10-18 14:51:32'),
(13, 24, 48, 2, '1.000', '2021-10-18 14:51:51'),
(14, 24, 48, 2, '1.000', '2021-10-18 14:54:50'),
(15, 24, 48, 4, '2.000', '2021-10-18 14:57:42'),
(16, 24, 48, 4, '2.000', '2021-10-18 15:07:15'),
(17, 24, 3, 1, '0.500', '2021-12-16 05:36:46'),
(18, 24, 3, 4, '2.000', '2021-12-28 06:36:52'),
(19, 24, 3, 2, '1.000', '2022-01-04 15:45:43'),
(20, 24, 3, 2, '1.000', '2022-01-04 15:46:57'),
(21, 24, 3, 3, '1.500', '2022-01-04 15:49:50'),
(22, 24, 3, 1, '0.500', '2022-06-12 12:45:59'),
(23, 24, 9999, 1, '0.500', '2022-06-12 12:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_tipswithdraw`
--

CREATE TABLE `tiptap_tipswithdraw` (
  `id` int(11) NOT NULL,
  `receiverid` varchar(225) NOT NULL,
  `amountvalue` varchar(225) NOT NULL,
  `transactionnumber` text NOT NULL,
  `date` datetime NOT NULL,
  `comissoinpercentage` varchar(225) NOT NULL,
  `commissionvalue` varchar(225) NOT NULL,
  `finalamoutaftercommission` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_tipswithdraw`
--

INSERT INTO `tiptap_tipswithdraw` (`id`, `receiverid`, `amountvalue`, `transactionnumber`, `date`, `comissoinpercentage`, `commissionvalue`, `finalamoutaftercommission`) VALUES
(4, '4', '1', '0', '2021-09-08 10:12:27', '5', '0.05', '0.95'),
(5, '3', '1', '0', '2021-09-09 13:24:04', '10', '0.1', '0.9'),
(6, '3', '1', '0', '2021-09-09 13:39:30', '10', '0.1', '0.9'),
(7, '48', '5.000', '0', '2021-10-29 15:37:28', '10', '0.5', '4.5'),
(8, '3', '1', '0', '2021-11-01 12:47:31', '10', '0.1', '0.9'),
(9, '3', '1', '0', '2021-12-28 06:39:57', '10', '0.1', '0.9'),
(10, '27', '6', '0', '2022-01-22 12:17:54', '10', '0.6', '5.4'),
(11, '24', '1', '0', '2022-06-10 04:30:16', '10', '0.1', '0.9');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_topupsbycustomers`
--

CREATE TABLE `tiptap_topupsbycustomers` (
  `id` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `amountid` int(11) NOT NULL,
  `updatedbal` varchar(225) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_topupsbycustomers`
--

INSERT INTO `tiptap_topupsbycustomers` (`id`, `custid`, `amount`, `amountid`, `updatedbal`, `date`) VALUES
(2, 4, '15.000', 3, '30.000', '2021-01-17 12:37:40'),
(3, 0, '', 0, '0.000', '2021-01-18 07:54:15'),
(4, 0, '', 0, '0.000', '2021-01-18 08:02:07'),
(5, 0, '', 0, '0.000', '2021-01-18 08:04:30'),
(6, 0, '', 0, '0.000', '2021-01-18 08:30:39'),
(7, 0, '', 0, '0.000', '2021-01-18 08:40:42'),
(8, 0, '', 0, '0.000', '2021-01-18 08:41:22'),
(9, 24, '25.000', 5, '25.000', '2021-01-18 08:59:54'),
(10, 24, '10.000', 2, '35.000', '2021-01-18 09:02:27'),
(11, 14, '5.000', 1, '5.000', '2021-01-18 22:00:32'),
(12, 27, '5.000', 1, '5.000', '2021-01-20 07:24:14'),
(13, 27, '15.000', 3, '20.000', '2021-01-20 07:25:11'),
(14, 27, '20.000', 4, '40.000', '2021-01-20 07:25:29'),
(15, 27, '25.000', 5, '65.000', '2021-01-20 07:31:28'),
(16, 0, '', 0, '0.000', '2021-01-20 08:33:29'),
(17, 27, '5.000', 1, '70.000', '2021-01-25 13:41:53'),
(18, 27, '', 1, '70.000', '2021-09-07 13:46:15'),
(19, 10, '10.000', 2, '10.000', '2021-09-08 09:08:19'),
(20, 10, '10.000', 2, '10.000', '2021-09-09 12:36:00'),
(21, 10, '10.000', 2, '20.000', '2021-10-24 06:19:02'),
(22, 52, '5.000', 1, '5.000', '2021-12-21 10:38:25'),
(23, 52, '5.000', 1, '10.000', '2021-12-21 10:49:30'),
(24, 52, '5.000', 1, '15.000', '2021-12-21 10:59:06'),
(25, 52, '5.000', 1, '20.000', '2021-12-21 11:00:10'),
(26, 52, '15.000', 3, '35.000', '2021-12-21 12:03:30'),
(27, 52, '25.000', 5, '60.000', '2021-12-21 12:05:47'),
(28, 52, '30.000', 6, '90.000', '2021-12-21 12:11:35'),
(29, 52, '10.000', 2, '100.000', '2021-12-21 12:21:52'),
(30, 52, '10.000', 2, '110.000', '2021-12-21 12:29:08'),
(31, 52, '15.000', 3, '125.000', '2021-12-21 12:48:32'),
(32, 24, '5.000', 1, '20.500', '2021-12-28 06:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_usermenulist`
--

CREATE TABLE `tiptap_usermenulist` (
  `id` int(11) NOT NULL,
  `adminmenuid` int(11) NOT NULL,
  `menusubmenurel` int(11) NOT NULL,
  `adminsubmenuid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_usermenulist`
--

INSERT INTO `tiptap_usermenulist` (`id`, `adminmenuid`, `menusubmenurel`, `adminsubmenuid`, `userid`, `status`) VALUES
(1, 1, 0, 0, 1, 1),
(2, 0, 1, 1, 1, 1),
(3, 2, 0, 0, 1, 1),
(4, 0, 2, 2, 1, 1),
(5, 3, 0, 0, 1, 1),
(6, 0, 3, 3, 1, 1),
(7, 4, 0, 0, 1, 0),
(8, 0, 4, 4, 1, 1),
(9, 5, 0, 0, 1, 1),
(10, 0, 5, 5, 1, 1),
(11, 0, 1, 6, 1, 1),
(12, 6, 0, 0, 1, 1),
(13, 0, 6, 7, 1, 1),
(14, 7, 0, 0, 1, 1),
(15, 0, 7, 8, 1, 1),
(16, 8, 0, 0, 1, 1),
(17, 0, 8, 9, 1, 1),
(18, 9, 0, 0, 1, 0),
(19, 0, 9, 10, 1, 1),
(20, 10, 0, 0, 1, 1),
(21, 0, 10, 11, 1, 1),
(22, 11, 0, 0, 1, 1),
(23, 0, 11, 12, 1, 1),
(24, 12, 0, 0, 1, 1),
(25, 0, 12, 13, 1, 1),
(26, 13, 0, 0, 1, 1),
(27, 0, 13, 14, 1, 0),
(28, 0, 13, 15, 1, 0),
(29, 0, 13, 16, 1, 1),
(30, 14, 0, 0, 1, 1),
(31, 0, 14, 17, 1, 1),
(32, 0, 14, 18, 1, 1),
(33, 15, 0, 0, 1, 1),
(34, 0, 15, 19, 1, 1),
(35, 16, 0, 0, 1, 1),
(36, 0, 16, 20, 1, 1),
(37, 0, 10, 21, 1, 1),
(38, 17, 0, 0, 1, 0),
(39, 0, 17, 22, 1, 0),
(40, 0, 1, 23, 1, 1),
(41, 18, 0, 0, 1, 1),
(42, 0, 18, 24, 1, 1),
(43, 19, 0, 0, 1, 1),
(44, 0, 19, 25, 1, 1),
(45, 0, 6, 26, 1, 1),
(46, 0, 11, 27, 1, 1),
(47, 0, 1, 28, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_walletamounts`
--

CREATE TABLE `tiptap_walletamounts` (
  `id` int(11) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_walletamounts`
--

INSERT INTO `tiptap_walletamounts` (`id`, `amount`, `status`) VALUES
(1, '5.000', 1),
(2, '10.000', 1),
(3, '15.000', 1),
(4, '20.000', 1),
(5, '25.000', 1),
(6, '30.000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiptap_welcomecontent`
--

CREATE TABLE `tiptap_welcomecontent` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiptap_welcomecontent`
--

INSERT INTO `tiptap_welcomecontent` (`id`, `content`, `image`) VALUES
(1, '<p>Choose your language</p>\r\n', 'uploads/banners/ecommerce16032582521.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiptap_aboutus`
--
ALTER TABLE `tiptap_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_adminmenu`
--
ALTER TABLE `tiptap_adminmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_adminsubmenu`
--
ALTER TABLE `tiptap_adminsubmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_adminuser`
--
ALTER TABLE `tiptap_adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_badges`
--
ALTER TABLE `tiptap_badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_banks`
--
ALTER TABLE `tiptap_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_companies`
--
ALTER TABLE `tiptap_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_companybranch`
--
ALTER TABLE `tiptap_companybranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_contactus`
--
ALTER TABLE `tiptap_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_customers`
--
ALTER TABLE `tiptap_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_devicetokens`
--
ALTER TABLE `tiptap_devicetokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_giverreceiverbanners`
--
ALTER TABLE `tiptap_giverreceiverbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_industrytype`
--
ALTER TABLE `tiptap_industrytype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_jobtypes`
--
ALTER TABLE `tiptap_jobtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_landingbanners`
--
ALTER TABLE `tiptap_landingbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_notificationmessages`
--
ALTER TABLE `tiptap_notificationmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_notifications`
--
ALTER TABLE `tiptap_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_ordersmaster`
--
ALTER TABLE `tiptap_ordersmaster`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tiptap_payments`
--
ALTER TABLE `tiptap_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_roles`
--
ALTER TABLE `tiptap_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_servicecharge`
--
ALTER TABLE `tiptap_servicecharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_tipamounts`
--
ALTER TABLE `tiptap_tipamounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_tipsamttoreceivers`
--
ALTER TABLE `tiptap_tipsamttoreceivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_tipswithdraw`
--
ALTER TABLE `tiptap_tipswithdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_topupsbycustomers`
--
ALTER TABLE `tiptap_topupsbycustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_usermenulist`
--
ALTER TABLE `tiptap_usermenulist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_walletamounts`
--
ALTER TABLE `tiptap_walletamounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiptap_welcomecontent`
--
ALTER TABLE `tiptap_welcomecontent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiptap_aboutus`
--
ALTER TABLE `tiptap_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiptap_adminmenu`
--
ALTER TABLE `tiptap_adminmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tiptap_adminsubmenu`
--
ALTER TABLE `tiptap_adminsubmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tiptap_adminuser`
--
ALTER TABLE `tiptap_adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiptap_badges`
--
ALTER TABLE `tiptap_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiptap_banks`
--
ALTER TABLE `tiptap_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiptap_companies`
--
ALTER TABLE `tiptap_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tiptap_companybranch`
--
ALTER TABLE `tiptap_companybranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tiptap_contactus`
--
ALTER TABLE `tiptap_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tiptap_customers`
--
ALTER TABLE `tiptap_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tiptap_devicetokens`
--
ALTER TABLE `tiptap_devicetokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiptap_giverreceiverbanners`
--
ALTER TABLE `tiptap_giverreceiverbanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiptap_industrytype`
--
ALTER TABLE `tiptap_industrytype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tiptap_jobtypes`
--
ALTER TABLE `tiptap_jobtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiptap_landingbanners`
--
ALTER TABLE `tiptap_landingbanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiptap_notificationmessages`
--
ALTER TABLE `tiptap_notificationmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiptap_notifications`
--
ALTER TABLE `tiptap_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tiptap_ordersmaster`
--
ALTER TABLE `tiptap_ordersmaster`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;

--
-- AUTO_INCREMENT for table `tiptap_payments`
--
ALTER TABLE `tiptap_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tiptap_roles`
--
ALTER TABLE `tiptap_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiptap_servicecharge`
--
ALTER TABLE `tiptap_servicecharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiptap_tipamounts`
--
ALTER TABLE `tiptap_tipamounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiptap_tipsamttoreceivers`
--
ALTER TABLE `tiptap_tipsamttoreceivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tiptap_tipswithdraw`
--
ALTER TABLE `tiptap_tipswithdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tiptap_topupsbycustomers`
--
ALTER TABLE `tiptap_topupsbycustomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tiptap_usermenulist`
--
ALTER TABLE `tiptap_usermenulist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tiptap_walletamounts`
--
ALTER TABLE `tiptap_walletamounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiptap_welcomecontent`
--
ALTER TABLE `tiptap_welcomecontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
