-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 01. 22:18
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutyak`
--

CREATE TABLE `kutyak` (
  `id` int(10) NOT NULL,
  `neve` varchar(50) NOT NULL,
  `neme` varchar(10) NOT NULL,
  `eletkor` int(11) NOT NULL,
  `nyilvantartasba_vetel` date DEFAULT NULL,
  `ivartalanitott` enum('igen','nem') NOT NULL DEFAULT 'nem'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `kutyak`
--

INSERT INTO `kutyak` (`id`, `neve`, `neme`, `eletkor`, `nyilvantartasba_vetel`, `ivartalanitott`) VALUES
(1, 'Lia', 'Szuka', 7, '2023-12-28', 'igen'),
(2, 'Rogi', 'Kan', 14, '2023-09-01', 'nem'),
(3, 'Tacsi', 'Szuka', 1, '2023-10-31', 'igen'),
(4, 'Blöki', 'Kan', 4, '2023-12-20', 'nem'),
(5, 'George', 'Kan', 10, '2023-12-25', 'igen'),
(6, 'Puffancs', 'Szuka', 6, '2023-11-30', 'nem'),
(7, 'Lizi', 'Szuka', 2, '2023-12-30', 'nem');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kutyak`
--
ALTER TABLE `kutyak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kutyak`
--
ALTER TABLE `kutyak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
