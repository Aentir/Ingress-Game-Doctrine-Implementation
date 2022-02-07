-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2022 a las 22:55:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingress_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(11) NOT NULL,
  `agent_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `faction` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agent`
--

INSERT INTO `agent` (`id_agent`, `agent_name`, `password`, `faction`) VALUES
(1, 'Blackcherry1976', '$P$BjeFU1EwiWaWQGTkWGCLlAWvEIaMRD0', 'Resistance'),
(2, 'MrFlamingo13', '$P$BjeFU1EwiWaWQGTkWGCLlAWvEIaMRD0', 'Resistance'),
(3, 'rastalejoo', '$P$BjeFU1EwiWaWQGTkWGCLlAWvEIaMRD0', 'Resistance'),
(4, 'elfobcn', '$P$BjeFU1EwiWaWQGTkWGCLlAWvEIaMRD0', 'Resistance'),
(5, 'Coloso10', '$P$BjeFU1EwiWaWQGTkWGCLlAWvEIaMRD0', 'Resistance'),
(6, 'ferdiado', '$2y$10$kpQUbORNw4EmihuQ5X8EweeqG8.kbJbneWFin.crBTP2mpann3.Si', 'Resistance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alias_event` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descrip_event` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_event` date NOT NULL,
  `place_event` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_event`, `name_event`, `alias_event`, `descrip_event`, `date_event`, `place_event`) VALUES
(1, 'Recursion Prime Palma de Mallorca', 'RP118PMI', 'Anomaly of the series Recursion Prime Day 2 in Palma de Mallorca', '2018-10-19', 'Palma de Mallorca, Spain'),
(2, 'Recursion Prime Barcelona', 'RP218BCN', 'Anomaly of the series Recursion Prime Day 2 in Barcelona', '2018-11-16', 'Barcelona, Spain'),
(3, 'Ingress First Saturday Valencia 11-2019', 'IFS1119VLC', 'First Saturday November 2019', '2019-11-02', 'Valencia, Spain'),
(4, 'Ingress First Saturday Valencia 12-2019', 'IFS1219VLC', 'First Saturday December 2019', '2019-12-07', 'Valencia, Spain');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `span`
--

CREATE TABLE `span` (
  `id_span` int(11) NOT NULL,
  `time_span` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `span`
--

INSERT INTO `span` (`id_span`, `time_span`) VALUES
(1, 'ALL TIME'),
(2, 'MONTH'),
(4, 'NOW'),
(3, 'WEEK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stats`
--

CREATE TABLE `stats` (
  `id_stats` int(11) NOT NULL,
  `id_upload` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `lifetime_ap` int(11) NOT NULL,
  `current_ap` int(11) NOT NULL,
  `unique_portals_visited` int(11) DEFAULT NULL,
  `unique_portals_drone_visited` int(11) DEFAULT NULL,
  `furthest_drone_distance` int(11) DEFAULT NULL,
  `seer` int(11) DEFAULT NULL,
  `portals_discovered` int(11) DEFAULT NULL,
  `xm_collected` int(11) DEFAULT NULL,
  `opr_agreements` int(11) DEFAULT NULL,
  `portal_scans_uploaded` int(11) DEFAULT NULL,
  `uniques_scout_controlled` int(11) DEFAULT NULL,
  `resonators_deployed` int(11) DEFAULT NULL,
  `links_created` int(11) DEFAULT NULL,
  `control_fields_created` int(11) DEFAULT NULL,
  `mind_units_captured` int(11) DEFAULT NULL,
  `longest_link_ever_created` int(11) DEFAULT NULL,
  `largest_control_field` int(11) DEFAULT NULL,
  `xm_recharged` int(11) DEFAULT NULL,
  `portals_captured` int(11) DEFAULT NULL,
  `unique_portals_captured` int(11) DEFAULT NULL,
  `mods_deployed` int(11) DEFAULT NULL,
  `hacks` int(11) DEFAULT NULL,
  `drone_hacks` int(11) DEFAULT NULL,
  `glyph_hack_points` int(11) DEFAULT NULL,
  `completed_hackstreaks` int(11) DEFAULT NULL,
  `longest_sojourner_streak` int(11) DEFAULT NULL,
  `resonators_destroyed` int(11) DEFAULT NULL,
  `portals_neutralized` int(11) DEFAULT NULL,
  `enemy_links_destroyed` int(11) DEFAULT NULL,
  `enemy_fields_destroyed` int(11) DEFAULT NULL,
  `battle_beacon_combatant` int(11) DEFAULT NULL,
  `drones_returned` int(11) DEFAULT NULL,
  `max_time_portal_held` int(11) DEFAULT NULL,
  `max_time_link_maintained` int(11) DEFAULT NULL,
  `max_link_length_x_days` int(11) DEFAULT NULL,
  `max_time_field_held` int(11) DEFAULT NULL,
  `largest_field_mus_x_days` int(11) DEFAULT NULL,
  `forced_drone_recalls` int(11) DEFAULT NULL,
  `distance_walked` int(11) DEFAULT NULL,
  `kinetic_capsules_completed` int(11) DEFAULT NULL,
  `unique_missions_completed` int(11) DEFAULT NULL,
  `mission_day(s)_attended` int(11) DEFAULT NULL,
  `nl-1331_meetup(s)_attended` int(11) DEFAULT NULL,
  `first_saturday_events` int(11) DEFAULT NULL,
  `agents_recruited` int(11) DEFAULT NULL,
  `recursions` int(11) DEFAULT NULL,
  `months_subscribed` int(11) DEFAULT NULL,
  `links_active` int(11) DEFAULT NULL,
  `portals_owned` int(11) DEFAULT NULL,
  `control_fields_active` int(11) DEFAULT NULL,
  `mind_unit_control` int(11) DEFAULT NULL,
  `current_hackstreak` int(11) DEFAULT NULL,
  `current_sojourner_streak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `stats`
--

INSERT INTO `stats` (`id_stats`, `id_upload`, `id_agent`, `level`, `lifetime_ap`, `current_ap`, `unique_portals_visited`, `unique_portals_drone_visited`, `furthest_drone_distance`, `seer`, `portals_discovered`, `xm_collected`, `opr_agreements`, `portal_scans_uploaded`, `uniques_scout_controlled`, `resonators_deployed`, `links_created`, `control_fields_created`, `mind_units_captured`, `longest_link_ever_created`, `largest_control_field`, `xm_recharged`, `portals_captured`, `unique_portals_captured`, `mods_deployed`, `hacks`, `drone_hacks`, `glyph_hack_points`, `completed_hackstreaks`, `longest_sojourner_streak`, `resonators_destroyed`, `portals_neutralized`, `enemy_links_destroyed`, `enemy_fields_destroyed`, `battle_beacon_combatant`, `drones_returned`, `max_time_portal_held`, `max_time_link_maintained`, `max_link_length_x_days`, `max_time_field_held`, `largest_field_mus_x_days`, `forced_drone_recalls`, `distance_walked`, `kinetic_capsules_completed`, `unique_missions_completed`, `mission_day(s)_attended`, `nl-1331_meetup(s)_attended`, `first_saturday_events`, `agents_recruited`, `recursions`, `months_subscribed`, `links_active`, `portals_owned`, `control_fields_active`, `mind_unit_control`, `current_hackstreak`, `current_sojourner_streak`) VALUES
(1, 1, 2, 16, 40000065, 40000065, 3613, 487, 18, NULL, 54, 114597948, 7656, 1680, 1033, 39351, 7357, 4331, 2990343, 114, 57222, 69207789, 8697, 3060, 4752, 14955, 3192, 32819, 27, 528, 18604, 3675, 3939, 3271, NULL, 11, 237, 104, 1286, 52, 188467, 40, 1461, 134, 144, 3, 1, 16, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, 16, 120368059, 58150998, 5836, 147, 4, NULL, 5, 450702360, 255, NULL, NULL, 71386, 9985, 8940, 15922597, 1130, 2026772, 335526313, 6558, 3261, 10899, 33157, 420, 6674, 26, 239, 42344, 6821, 9924, 5804, 42, 13, 684, 684, 98143, 111, 470868, 10, 1651, 65, 273, 2, 2, 22, NULL, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 4, 12, 333798593, 11140969, 13331, 9750, 53, NULL, 183, 888015247, 20821, 8210, 5118, 258176, 56379, 49583, 152228719, 557, 1045998, 647246063, 49821, 11069, 39919, 162897, 11144, 501753, 29, 1301, 146671, 25988, 37469, 24484, 29, 30, 668, 428, 23466, 223, 6789153, 38, 7647, 456, 1206, 6, 3, 31, 2, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 3, 14, 145401349, 17453799, 9145, 235, 2, NULL, 58, 814338702, 918, 1373, 1164, 145054, 24892, 15408, 18952247, 307, 3084388, 566980184, 30706, 7433, 19487, 86949, 918, 283088, 29, 412, 219653, 34206, 44533, 22551, NULL, 34, 1409, 345, 10959, 226, 15043802, 24, 6747, 145, 394, 12, 2, 30, 17, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 5, 15, 28196611, 28196611, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 23, 8, 63, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stats_events`
--

CREATE TABLE `stats_events` (
  `id_stats` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_upload` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `lifetime_ap` int(11) NOT NULL,
  `unique_portals_visited` int(11) DEFAULT NULL,
  `resonators_deployed` int(11) DEFAULT NULL,
  `links_created` int(11) DEFAULT NULL,
  `control_fields_created` int(11) DEFAULT NULL,
  `xm_recharged` int(11) DEFAULT NULL,
  `portals_captured` int(11) DEFAULT NULL,
  `hacks` int(11) DEFAULT NULL,
  `resonators_destroyed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `stats_events`
--

INSERT INTO `stats_events` (`id_stats`, `id_event`, `id_upload`, `id_agent`, `lifetime_ap`, `unique_portals_visited`, `resonators_deployed`, `links_created`, `control_fields_created`, `xm_recharged`, `portals_captured`, `hacks`, `resonators_destroyed`) VALUES
(1, 3, 6, 6, 103160000, 5000, 135000, 30000, 20000, 72500000, 18000, 50000, 45000),
(2, 3, 7, 6, 103195000, 5103, 135700, 31750, 21574, 72598756, 18967, 59879, 47897),
(3, 4, 8, 6, 103205000, 5133, 136700, 32025, 21674, 72614156, 20467, 60229, 47997),
(4, 4, 9, 6, 103359687, 5283, 138200, 32125, 21689, 72629556, 20567, 60797, 48032);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploads`
--

CREATE TABLE `uploads` (
  `id_upload` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id_agent` int(11) NOT NULL,
  `time_span` int(11) NOT NULL,
  `id_event` tinyint(1) NOT NULL COMMENT 'True = corresponde a un evento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uploads`
--

INSERT INTO `uploads` (`id_upload`, `date`, `time`, `id_agent`, `time_span`, `id_event`) VALUES
(1, '2021-11-09', '07:16:27', 2, 1, 0),
(2, '2021-11-09', '10:52:33', 1, 1, 0),
(3, '2021-11-09', '14:10:25', 4, 1, 0),
(4, '2021-11-09', '18:07:10', 3, 1, 0),
(5, '2021-11-09', '16:30:56', 5, 4, 0),
(6, '2019-11-02', '10:00:00', 6, 1, 1),
(7, '2019-11-02', '12:00:00', 6, 1, 1),
(8, '2019-12-07', '10:00:00', 6, 1, 1),
(9, '2019-12-07', '12:00:00', 6, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`),
  ADD UNIQUE KEY `agent_name` (`agent_name`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `name_event` (`name_event`);

--
-- Indices de la tabla `span`
--
ALTER TABLE `span`
  ADD PRIMARY KEY (`id_span`),
  ADD UNIQUE KEY `time_span` (`time_span`);

--
-- Indices de la tabla `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id_stats`),
  ADD UNIQUE KEY `id_upload_stats` (`id_upload`),
  ADD KEY `id_agent_stats` (`id_agent`);

--
-- Indices de la tabla `stats_events`
--
ALTER TABLE `stats_events`
  ADD PRIMARY KEY (`id_stats`),
  ADD UNIQUE KEY `id_upload_event` (`id_upload`) USING BTREE,
  ADD KEY `id_event_stats` (`id_event`),
  ADD KEY `id_agent_event` (`id_agent`) USING BTREE;

--
-- Indices de la tabla `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `id_agent_upload` (`id_agent`),
  ADD KEY `id_time_span` (`time_span`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `span`
--
ALTER TABLE `span`
  MODIFY `id_span` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `stats`
--
ALTER TABLE `stats`
  MODIFY `id_stats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `stats_events`
--
ALTER TABLE `stats_events`
  MODIFY `id_stats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `id_agent_stats` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `id_upload_stats` FOREIGN KEY (`id_upload`) REFERENCES `uploads` (`id_upload`);

--
-- Filtros para la tabla `stats_events`
--
ALTER TABLE `stats_events`
  ADD CONSTRAINT `id_agent_up_event` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `id_event_stats` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`),
  ADD CONSTRAINT `id_upload_stats_event` FOREIGN KEY (`id_upload`) REFERENCES `uploads` (`id_upload`);

--
-- Filtros para la tabla `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `id_agent_upload` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `id_time_span` FOREIGN KEY (`time_span`) REFERENCES `span` (`id_span`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
