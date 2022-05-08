-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Maj 2022, 17:17
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `edytor`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `znaczniki`
--

CREATE TABLE `znaczniki` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wartosc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `znacznik` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `znaczniki`
--

INSERT INTO `znaczniki` (`id`, `nazwa`, `wartosc`, `znacznik`) VALUES
(1, 'p', 'p', '<p></p>'),
(2, 'h1', 'H1', '<h1></h1>'),
(3, 'h2', 'H2', '<h2></h2>'),
(4, 'h3', 'H3', '<h3></h3>'),
(5, 'h4', 'H4', '<h4></h4>'),
(6, 'h5', 'H5', '<h5></h5>'),
(7, 'h6', 'H6', '<h6></h6>'),
(8, 'div', 'div', '<div></div>'),
(9, 'section', 'section', '<section></section>'),
(10, 'article', 'article', '<article></article>'),
(11, 'aside', 'aside', '<aside></aside>'),
(12, 'nav', 'nav', '<nav></nav>'),
(13, 'footer', 'footer', '<footer></footer>'),
(14, 'header', 'header', '<header></header>'),
(15, 'main', 'main', '<main></main>');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `znaczniki`
--
ALTER TABLE `znaczniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `znaczniki`
--
ALTER TABLE `znaczniki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
