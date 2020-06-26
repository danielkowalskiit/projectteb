-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Cze 2020, 21:51
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `website2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `city`
--

CREATE TABLE `city` (
  `id` int(200) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Poznań');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id` int(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `city` int(200) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(5) NOT NULL,
  `access` tinyint(1) UNSIGNED ZEROFILL NOT NULL,
  `date_create_account` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id`, `name`, `lastname`, `address`, `postcode`, `city`, `phone`, `email`, `password`, `role`, `access`, `date_create_account`, `last_login`) VALUES
(9, 'Aś', 'Ąę', 'Garbary 1a', '11-111', 1, '222333444', 'test@test.pl', '$argon2id$v=19$m=65536,t=4,p=1$eHZQWHI0OXN6MmkyRWVJVA$xRvjz1QsZryS7eP9oPOhF8oSEgKjTCMIrG+GoPeJtwE', 1, 0, '2020-06-24 19:47:45', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id_picture` int(100) NOT NULL,
  `url` varchar(15) NOT NULL,
  `alt` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`id_picture`, `url`, `alt`) VALUES
(1, 'baner.png', 'Baner Mobilna Kasia, salon kosmetyczny'),
(2, 'baner-xs.png', 'Baner Mobilna Kasia, salon kosmetyczny'),
(3, 'logo.png', 'Logo Mobilna Kasia, salon kosmetyczny'),
(4, 'favicon.png', ''),
(5, 'me.png', 'Mobilna Kasia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `information`
--

CREATE TABLE `information` (
  `id` int(1) NOT NULL,
  `avatar` int(100) NOT NULL,
  `about_me` varchar(800) NOT NULL,
  `about_me_tips` varchar(240) NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `instagram` varchar(25) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `youtube` varchar(25) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `information`
--

INSERT INTO `information` (`id`, `avatar`, `about_me`, `about_me_tips`, `facebook`, `instagram`, `twitter`, `youtube`, `phone`, `email`) VALUES
(1, 5, '<p>\r\nJestem dyplomowaną kosmetyczką. Moją pasją jest kosmetyka oraz manicure. Posiadam wielo letnie doświadczenie w branży kosmetycznej. Do każdego Klienta podchodzę w sposób profesjonalny i indywidualny.\r\n</p>\r\n<p>\r\nUżywam profesjonalnych produktów kosmetycznych znanych marek. Do pielęgnacji paznokci wykorzystuję produkty Indigo Nails, Semilac, NeoNail, Mistero Milano. W trosce o pielęgnację twarzy korzystam z najlepszych produktów takich jak Clarena, Norel, Jadwiga, Bielenda Professional.\r\n</p>\r\n<p>\r\nDbam o higienę i sterylizację narzędzi za pomocą AUTOKLAW KLASAY B jest to jeden z najbardziej zaawansowanych sterylizatorów parowo-ciśnieniowych.\r\n</p>', 'Jestem dyplomowaną kosmetyczką. Moją pasją jest kosmetyka oraz manicure. Posiadam wieloletnie doświadczenie w branży kosmetycznej. Do każdego Klienta podchodzę w sposób profesjonalny i indywidualny. Dbam o higienę i sterylizację narzędzi.', '#', '#', '#', '#', '222222222', 'kontakt@mobilnakasia.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `meta_tag`
--

CREATE TABLE `meta_tag` (
  `name_site` varchar(20) NOT NULL,
  `description` varchar(170) NOT NULL,
  `keywords` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `meta_tag`
--

INSERT INTO `meta_tag` (`name_site`, `description`, `keywords`) VALUES
('cennik', 'Cennik Mobilna Kasia, salon kosmetyczny', 'cennik'),
('galeria', 'Galeria Mobilna Kasia, salon kosmetyczny', 'galeria'),
('home', 'Salon kosmetyczny Mobilna Kasia, salon kosmetyczny', 'salon kosmetyczny'),
('kontakt', 'Kontakt Mobilna Kasia, salon kosmetyczny', 'kontakt'),
('o-mnie', 'O mnie Mobilna Kasia, salon kosmetyczny', 'mobilna kasia'),
('oferta', 'Oferta Mobilna Kasia, salon kosmetyczny', 'oferta'),
('polityka-prywatnosci', '', ''),
('recenzje', 'Mobilna komsetyczka. Recenzje naszych klientów', 'Recenzja mobilna kosmetyczka, opinnie kosmetyczka poznań, najlepsza mobilna kosmetyczka'),
('regulamin', '', ''),
('zapisz-sie', 'Mobilna komsetyczka. Zarezerwuj wizytę', 'Mobilna komsetyczka, Rezerwacja wizyty u kosmetyczki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(200) NOT NULL,
  `id_client` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_role` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_role`, `name`, `description`) VALUES
(1, 'client', 'Klienci prowadzonej działalności\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `site`
--

CREATE TABLE `site` (
  `id` int(1) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `title_business` varchar(30) NOT NULL,
  `logo` int(100) NOT NULL,
  `favicon` int(100) NOT NULL,
  `baner` int(100) NOT NULL,
  `baner_mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `site`
--

INSERT INTO `site` (`id`, `title`, `title_business`, `logo`, `favicon`, `baner`, `baner_mobile`) VALUES
(1, 'Mobilna Kasia', 'Salon Kosmetyczny', 3, 4, 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tag_offer`
--

CREATE TABLE `tag_offer` (
  `id` int(40) NOT NULL,
  `title` varchar(60) NOT NULL,
  `url` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tag_offer`
--

INSERT INTO `tag_offer` (`id`, `title`, `url`) VALUES
(1, 'zdobienie paznokci', 'zdobienie-paznokci'),
(2, 'IBX SYSTEM', 'ibx-system'),
(3, 'peeling kawitacyjny', 'peeling-kawitacyjny'),
(4, 'mezoterapia bezigłowa', 'mezoterapia-beziglowa'),
(5, 'mikrodermabrazja', 'mikrodermabrazja');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `city` (`city`),
  ADD KEY `role` (`role`);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indeksy dla tabeli `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avatar` (`avatar`);

--
-- Indeksy dla tabeli `meta_tag`
--
ALTER TABLE `meta_tag`
  ADD PRIMARY KEY (`name_site`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baner` (`baner`),
  ADD KEY `baner_mobile` (`baner_mobile`),
  ADD KEY `logo` (`logo`),
  ADD KEY `favicon` (`favicon`);

--
-- Indeksy dla tabeli `tag_offer`
--
ALTER TABLE `tag_offer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `city`
--
ALTER TABLE `city`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id_picture` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `site`
--
ALTER TABLE `site`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `tag_offer`
--
ALTER TABLE `tag_offer`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `clients_ibfk_2` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Ograniczenia dla tabeli `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_2` FOREIGN KEY (`avatar`) REFERENCES `images` (`id_picture`);

--
-- Ograniczenia dla tabeli `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `site_ibfk_1` FOREIGN KEY (`baner_mobile`) REFERENCES `images` (`id_picture`),
  ADD CONSTRAINT `site_ibfk_2` FOREIGN KEY (`baner`) REFERENCES `images` (`id_picture`),
  ADD CONSTRAINT `site_ibfk_3` FOREIGN KEY (`logo`) REFERENCES `images` (`id_picture`),
  ADD CONSTRAINT `site_ibfk_4` FOREIGN KEY (`favicon`) REFERENCES `images` (`id_picture`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
