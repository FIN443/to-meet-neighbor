-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-05-06 13:49
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
  `c_option` varchar(1) NOT NULL,
  `c_user_no` int(11) NOT NULL,
  `c_post_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `posts`
--

CREATE TABLE `posts` (
  `p_num` int(11) NOT NULL,
  `p_title` varchar(50) NOT NULL,
  `p_content` varchar(2000) NOT NULL,
  `p_option` varchar(1) NOT NULL,
  `p_user_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `scores`
--

CREATE TABLE `scores` (
  `s_num` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_score` varchar(3) NOT NULL,
  `s_credit` float NOT NULL,
  `s_user_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `u_num` int(11) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_nickname` varchar(20) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_num`),
  ADD KEY `comment_user_no` (`c_user_no`),
  ADD KEY `comment_post_no` (`c_post_no`);

--
-- 테이블의 인덱스 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_num`),
  ADD KEY `post_user_no` (`p_user_no`);

--
-- 테이블의 인덱스 `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`s_num`),
  ADD KEY `score_user_no` (`s_user_no`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_num`);

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
-- 테이블의 AUTO_INCREMENT `scores`
--
ALTER TABLE `scores`
  MODIFY `s_num` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `comment_post_no` FOREIGN KEY (`c_post_no`) REFERENCES `posts` (`p_num`),
  ADD CONSTRAINT `comment_user_no` FOREIGN KEY (`c_user_no`) REFERENCES `users` (`u_num`);

--
-- 테이블의 제약사항 `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_user_no` FOREIGN KEY (`p_user_no`) REFERENCES `users` (`u_num`);

--
-- 테이블의 제약사항 `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `score_user_no` FOREIGN KEY (`s_user_no`) REFERENCES `users` (`u_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
