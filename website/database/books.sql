-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `stock`, `image`, `description`) VALUES
(67, 'To Kill a Mockingbird', 'Harper Lee', 300.00, NULL, 'img/to-kill-a-mockingbird.jfif', 'A novel about the serious issues of rape and racial inequality.'),
(68, '1984', 'George Orwell', 350.00, NULL, 'img/1984.jfif', 'A dystopian novel set in a totalitarian society under constant surveillance.'),
(69, 'The Great Gatsby', 'F. Scott Fitzgerald', 320.00, NULL, 'images/the_great_gatsby.jpg', 'A story of the young and mysterious millionaire Jay Gatsby and his passion for the beautiful Daisy Buchanan.'),
(70, 'Pride and Prejudice', 'Jane Austen', 330.00, NULL, 'images/pride_and_prejudice.jpg', 'A romantic novel that explores the issues of class and marriage in early 19th-century England.'),
(71, 'Moby-Dick', 'Herman Melville', 340.00, NULL, 'images/moby_dick.jpg', 'The narrative of Captain Ahab\'s obsessive quest to seek revenge on Moby Dick.'),
(72, 'War and Peace', 'Leo Tolstoy', 400.00, NULL, 'images/war_and_peace.jpg', 'An epic novel that intertwines the lives of several families during the Napoleonic Wars.'),
(73, 'The Catcher in the Rye', 'J.D. Salinger', 310.00, NULL, 'images/catcher_in_the_rye.jpg', 'A story about teenage rebellion and the challenges of adolescence.'),
(74, 'The Hobbit', 'J.R.R. Tolkien', 350.00, NULL, 'images/the_hobbit.jpg', 'A fantasy novel about Bilbo Baggins\' adventure in Middle-Earth.'),
(75, 'Fahrenheit 451', 'Ray Bradbury', 320.00, NULL, 'images/fahrenheit_451.jpg', 'A dystopian novel about a future society where books are banned.'),
(76, 'Jane Eyre', 'Charlotte Brontë', 330.00, NULL, 'images/jane_eyre.jpg', 'A story of a young orphan girl overcoming adversity and finding love.'),
(77, 'Wuthering Heights', 'Emily Brontë', 300.00, NULL, 'images/wuthering_heights.jpg', 'A tragic love story set on the Yorkshire moors.'),
(78, 'Brave New World', 'Aldous Huxley', 340.00, NULL, 'images/brave_new_world.jpg', 'A futuristic novel about a society conditioned to be happy.'),
(79, 'Crime and Punishment', 'Fyodor Dostoevsky', 380.00, NULL, 'images/crime_and_punishment.jpg', 'A psychological novel exploring guilt and redemption.'),
(80, 'The Odyssey', 'Homer', 360.00, NULL, 'images/the_odyssey.jpg', 'An ancient Greek epic about the journey of Odysseus.'),
(81, 'Les Misérables', 'Victor Hugo', 400.00, NULL, 'images/les_miserables.jpg', 'A story about poverty, justice, and redemption in 19th-century France.'),
(82, 'The Brothers Karamazov', 'Fyodor Dostoevsky', 450.00, NULL, 'images/brothers_karamazov.jpg', 'A philosophical novel exploring faith, doubt, and morality.'),
(83, 'Alice\'s Adventures in Wonderland', 'Lewis Carroll', 290.00, NULL, 'images/alice_in_wonderland.jpg', 'A fantasy tale of Alice\'s journey through Wonderland.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
