-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-06-03 07:50
-- 서버 버전: 10.4.17-MariaDB
-- PHP 버전: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `to_meet_neighbor`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comments`
--

CREATE TABLE `comments` (
  `c_num` int(11) NOT NULL,
  `c_content` varchar(400) NOT NULL,
  `c_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_nickname` varchar(20) NOT NULL,
  `c_post_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `posts`
--

CREATE TABLE `posts` (
  `p_num` int(11) NOT NULL,
  `p_title` varchar(50) NOT NULL,
  `p_content` text NOT NULL,
  `p_image_url` text NOT NULL,
  `p_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `u_num` int(11) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_nickname` varchar(20) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_num`),
  ADD KEY `c_foreign_nickname` (`c_nickname`),
  ADD KEY `c_foreign_post_no` (`c_post_no`);

--
-- 테이블의 인덱스 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_num`),
  ADD KEY `p_foreign_nickname` (`p_nickname`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_num`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `u_nickname` (`u_nickname`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `c_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `p_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `u_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `c_foreign_nickname` FOREIGN KEY (`c_nickname`) REFERENCES `users` (`u_nickname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_foreign_post_no` FOREIGN KEY (`c_post_no`) REFERENCES `posts` (`p_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_nickname` FOREIGN KEY (`c_nickname`) REFERENCES `users` (`u_nickname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 테이블의 제약사항 `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `p_foreign_nickname` FOREIGN KEY (`p_nickname`) REFERENCES `users` (`u_nickname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
