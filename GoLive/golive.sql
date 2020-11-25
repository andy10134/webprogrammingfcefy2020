-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 01:05:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `golive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `currentDay` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplines`
--

CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dues`
--

CREATE TABLE `dues` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `inscriptionId` int(11) NOT NULL,
  `paumentDay` date NOT NULL,
  `expirationDate` date NOT NULL,
  `amount` float NOT NULL,
  `month` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'Masculi'),
(2, 'Femenin'),
(3, 'Na');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` int(11) NOT NULL,
  `dueId` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `idDisciplines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutions`
--

CREATE TABLE `institutions` (
  `id` int(11) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `schedule` datetime NOT NULL,
  `staff` varchar(250) NOT NULL,
  `socialMedia` varchar(250) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rolName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rolName`) VALUES
(1, 'Administracion'),
(2, 'Usuario'),
(3, 'Administrador de Institución'),
(4, 'Entrenador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `institutionId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `trainersId` int(11) NOT NULL,
  `disciplineId` int(11) NOT NULL,
  `schedule` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roleId` int(11) NOT NULL,
  `genderId` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `roleId`, `genderId`, `name`, `lastName`, `phoneNum`, `email`, `username`, `password`) VALUES
(16, 2, 2, 'Ana', 'Carbajo', '2644636436', 'aniic.1701@gmail.com', 'anacarbajo17', '$2a$07$asxx54ahjppf45sd87a5au.oN8fCpmgc3ccW1Tmi2p3jzZrRyqNYi'),
(17, 2, 1, 'pepito', 'hongito', '2644158762', 'gdfgfd@gmail.com', 'elpepe', '$2a$07$asxx54ahjppf45sd87a5aubCwEL5ItHj/a/0pgDqhsxoGZfT6ANwG'),
(18, 2, 2, 'lola', 'mento', '2644158762', 'lolamento@gmail.com', 'lolamento', '$2a$07$asxx54ahjppf45sd87a5au4MDyxXUQ/1TR2kvy8yihDSTQWeUs7ZO'),
(27, 2, 1, 'luis', 'gomez', '2644554665', 'luisgomez2@gmail.com', 'luisgomez', '$2a$07$asxx54ahjppf45sd87a5auAzAgw0JSt092xCmGge/iyNCu8y/LZdS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`userId`),
  ADD KEY `ScheduleId` (`scheduleId`);

--
-- Indices de la tabla `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ScheduleId` (`scheduleId`);

--
-- Indices de la tabla `dues`
--
ALTER TABLE `dues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `InscriptionId` (`inscriptionId`),
  ADD KEY `CustomerId` (`customerId`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdDisciplines` (`idDisciplines`),
  ADD KEY `DueId` (`dueId`);

--
-- Indices de la tabla `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`userId`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `InstitutionId` (`institutionId`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RoomId` (`roomId`),
  ADD KEY `TrainersId` (`trainersId`),
  ADD KEY `DisciplineId` (`disciplineId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genderId` (`genderId`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dues`
--
ALTER TABLE `dues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`scheduleId`) REFERENCES `schedules` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `disciplines`
--
ALTER TABLE `disciplines`
  ADD CONSTRAINT `disciplines_ibfk_1` FOREIGN KEY (`scheduleId`) REFERENCES `schedules` (`id`);

--
-- Filtros para la tabla `dues`
--
ALTER TABLE `dues`
  ADD CONSTRAINT `dues_ibfk_1` FOREIGN KEY (`inscriptionId`) REFERENCES `inscriptions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dues_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `inscriptions_ibfk_1` FOREIGN KEY (`dueId`) REFERENCES `dues` (`id`),
  ADD CONSTRAINT `inscriptions_ibfk_2` FOREIGN KEY (`idDisciplines`) REFERENCES `disciplines` (`id`);

--
-- Filtros para la tabla `institutions`
--
ALTER TABLE `institutions`
  ADD CONSTRAINT `institutions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`institutionId`) REFERENCES `institutions` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`genderId`) REFERENCES `genders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`roleId`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
