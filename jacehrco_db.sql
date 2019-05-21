-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2019 at 07:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jacehrco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jace_posts`
--

CREATE TABLE `jace_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postSlug` varchar(150) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` varchar(255) DEFAULT NULL,
  `postTime` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='holds all posts';

-- --------------------------------------------------------

--
-- Table structure for table `jace_posts_categories`
--

CREATE TABLE `jace_posts_categories` (
  `catID` int(11) UNSIGNED NOT NULL,
  `catTitle` varchar(255) DEFAULT NULL,
  `catSlug` varchar(255) DEFAULT NULL,
  `catDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='holds all category titiles and slugs';

--
-- Dumping data for table `jace_posts_categories`
--

INSERT INTO `jace_posts_categories` (`catID`, `catTitle`, `catSlug`, `catDate`) VALUES
(47, 'Facebook Ads', 'facebook-ads', '2019-04-17 06:34:57'),
(48, 'Virtual Assistant', 'virtual-assistant', '2019-04-17 06:35:16'),
(49, 'Website Design', 'website-design', '2019-04-17 07:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `jace_posts_categories_ids`
--

CREATE TABLE `jace_posts_categories_ids` (
  `id` int(11) NOT NULL,
  `postID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='holds all post ids and categery ids';

--
-- Dumping data for table `jace_posts_categories_ids`
--

INSERT INTO `jace_posts_categories_ids` (`id`, `postID`, `catID`) VALUES
(2, 1, 47),
(3, 2, 47),
(4, 3, 47),
(5, 4, 47),
(6, 5, 47);

-- --------------------------------------------------------

--
-- Table structure for table `pcomment`
--

CREATE TABLE `pcomment` (
  `comment_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_address` varchar(255) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `rid` varchar(20) NOT NULL,
  `web_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='holds all forum comments';

--
-- Dumping data for table `pcomment`
--

INSERT INTO `pcomment` (`comment_id`, `comment_text`, `created_by`, `created_date`, `email_address`, `ip_address`, `pid`, `rid`, `web_address`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>', 'Tacman', '2018-12-19 16:15:09', '', '', '4', '0', ''),
(2, '<p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>', 'Tacman', '2018-12-20 03:59:38', '', '', '3', '1', ''),
(3, '<p>At the end of the path, insert a semi-colon and add the paths to the executables for MinGW and MSYS. Use semi-colons between the paths and do not use any spaces. Be careful not to remove anything already on your PATH or your computer might not work correctly. When you are finished, your path should look similar to the following</p>', 'Tacman', '2018-12-20 04:19:54', '', '', '3', '0', ''),
(4, '<p>On Oracle Solaris platforms, you can use GNU tools or Oracle Solaris Studio tools. The GNU tools are included in Oracle Solaris 11 in the <tt>/usr/sfw/bin</tt> directory by default. The Oracle Solaris Studio software is a suite of developer tools that are free to download. The Oracle Solaris Studio compilers are optimized for Oracle Sun hardware, and make it easier to produce performance tuned Oracle Solaris binaries. NetBeans IDE 8.0 has been tested with the following compilers and tools.</p>', 'Tacman', '2018-12-20 04:25:32', '', '', '3', '0', ''),
(5, '<p><span class=\"commenter\"><span class=\"comment_date\">At the end of the path, insert a semi-colon and add the paths to the executables for MinGW and MSYS. Use semi-colons between the paths and do not use any spaces. Be careful not to remove anything already on your PATH or your computer might not work correctly. When you are finished, your path should look similar to the following</span></span></p>', 'Tacman', '2018-12-20 04:27:25', '', '', '3', '0', ''),
(6, '<p>Whether you use the Oracle Solaris Studio compilers and Solaris <tt>make</tt> or the GNU compilers and GNU <tt>make</tt>, you must have the <tt>gdb</tt> debugger to debug applications in NetBeans IDE. You can download <tt>gdb</tt> from</p>', 'Tacman', '2018-12-20 04:29:01', '', '', '3', '0', ''),
(7, '<p>To display this page, Firefox must send information that will repeat any action (such as a search or order confirmation) that was performed earlier.</p>', 'Tacman', '2018-12-20 04:30:07', '', '', '3', '0', ''),
(8, '<p>Nullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.</p>', 'Tacman', '2018-12-20 04:32:52', '', '', '3', '0', ''),
(9, '<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.</p>', 'Tacman', '2018-12-20 04:35:55', '', '', '3', '0', ''),
(10, '<p>Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>', 'Tacman', '2018-12-20 04:38:01', '', '', '3', '0', ''),
(11, '<p><span class=\"commenter\"><span class=\"comment_date\">Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.</span></span></p>', 'Tacman', '2018-12-20 04:41:30', '', '', '3', '0', ''),
(12, '<p><span class=\"commenter\"><span class=\"comment_date\">Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</span></span></p>', 'Tacman', '2018-12-20 04:47:04', '', '', '3', '0', ''),
(13, '<p><span class=\"commenter\"><span class=\"comment_date\">Nullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.</span></span></p>', 'Tacman', '2018-12-20 04:53:17', '', '', '3', '0', ''),
(14, '<p><span class=\"commenter\"><span class=\"comment_date\">Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</span></span></p>', 'Tacman', '2018-12-20 04:54:21', '', '', '3', '13', ''),
(15, '<p><span class=\"commenter\"><span class=\"comment_date\">Nullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.</span></span></p>', 'Tacman', '2018-12-20 05:00:59', '', '', '3', '0', ''),
(16, 'This is nice man', 'Tacman', '2019-04-13 17:53:52', '', '', '4', '0', ''),
(17, 'Cool blog', 'Tacman', '2019-04-13 17:54:20', '', '', '4', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_level` int(2) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'unknown.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `email`, `password`, `admin_level`, `img`) VALUES
(1, 'Tacman', 'Tacman', 'tacticshustle@gmail.com', '12345', 1, 'unknown.jpg'),
(2, 'cptngood', 'Captain ', 'va@jacehr.com', '00000', 1, 'unknown.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jace_posts`
--
ALTER TABLE `jace_posts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `postSlug` (`postSlug`),
  ADD KEY `username` (`username`(191)),
  ADD KEY `active` (`active`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `jace_posts_categories`
--
ALTER TABLE `jace_posts_categories`
  ADD PRIMARY KEY (`catID`),
  ADD KEY `catID` (`catID`),
  ADD KEY `catSlug` (`catSlug`(191)),
  ADD KEY `catTitle` (`catTitle`(191));

--
-- Indexes for table `jace_posts_categories_ids`
--
ALTER TABLE `jace_posts_categories_ids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postID` (`postID`),
  ADD KEY `catID` (`catID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pcomment`
--
ALTER TABLE `pcomment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`),
  ADD KEY `admin_level` (`admin_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jace_posts`
--
ALTER TABLE `jace_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jace_posts_categories`
--
ALTER TABLE `jace_posts_categories`
  MODIFY `catID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `jace_posts_categories_ids`
--
ALTER TABLE `jace_posts_categories_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pcomment`
--
ALTER TABLE `pcomment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
