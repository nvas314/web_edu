-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 22 Ιουλ 2024 στις 15:07:18
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `ergasia_acropolis_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `quiz_grades`
--

CREATE TABLE `quiz_grades` (
  `quiz_grade_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `current_level` enum('1','2','3','') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `current_level`) VALUES
(7, 'panos', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(8, 'panos1', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(10, 'panos12', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(11, 'panos1235', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(13, 'panos1235123', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(14, 'panos12351231', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panos@gmail.com', '1'),
(15, 'panos12351545714212', '12345678', 'Παναγιώτης', 'Ανδρέου', 'panosandreou90@gmail.com', '1');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `quiz_grades`
--
ALTER TABLE `quiz_grades`
  ADD PRIMARY KEY (`quiz_grade_id`),
  ADD KEY `user_id_constraint` (`user_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `usernames` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `quiz_grades`
--
ALTER TABLE `quiz_grades`
  MODIFY `quiz_grade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `quiz_grades`
--
ALTER TABLE `quiz_grades`
  ADD CONSTRAINT `user_id_constraint` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
