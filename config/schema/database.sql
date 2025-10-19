-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2025 at 01:59 AM
-- Server version: 9.4.0
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit2104_community_link-cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int NOT NULL,
  `first_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `replied_to` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int NOT NULL,
  `name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `partner_organisation_id` int DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `host_organisation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `participants` int DEFAULT NULL,
  `contact_person_full_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `required_crews` int DEFAULT NULL,
  `status` enum('preparing','ready to go','archive','failed') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'preparing',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_equipment`
--

CREATE TABLE `event_equipment` (
  `event_id` int NOT NULL,
  `equipment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_skill`
--

CREATE TABLE `event_skill` (
  `event_id` int NOT NULL,
  `skill_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int NOT NULL,
  `name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_organisations`
--

CREATE TABLE `partner_organisations` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_full_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person_phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `services` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_organisation_equipment`
--

CREATE TABLE `partner_organisation_equipment` (
  `partner_organisation_id` int NOT NULL,
  `equipment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_organisation_industry`
--

CREATE TABLE `partner_organisation_industry` (
  `partner_organisation_id` int NOT NULL,
  `industry_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nonce` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nonce_expiry` datetime DEFAULT NULL,
  `role` enum('admin','volunteer','assistant') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `volunteer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int NOT NULL,
  `first_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(127) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_picture_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `self_intro` text COLLATE utf8mb4_general_ci NOT NULL,
  `official_document_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'inactive',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_availability`
--

CREATE TABLE `volunteer_availability` (
  `id` int NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `volunteer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_event`
--

CREATE TABLE `volunteer_event` (
  `volunteer_id` int NOT NULL,
  `event_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_skill`
--

CREATE TABLE `volunteer_skill` (
  `volunteer_id` int NOT NULL,
  `skill_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_partner_organisations_events` (`partner_organisation_id`);

--
-- Indexes for table `event_equipment`
--
ALTER TABLE `event_equipment`
  ADD PRIMARY KEY (`event_id`,`equipment_id`) USING BTREE,
  ADD KEY `fk_equipments_events` (`equipment_id`);

--
-- Indexes for table `event_skill`
--
ALTER TABLE `event_skill`
  ADD PRIMARY KEY (`event_id`,`skill_id`),
  ADD KEY `fk_skills_events` (`skill_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_organisations`
--
ALTER TABLE `partner_organisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_organisation_equipment`
--
ALTER TABLE `partner_organisation_equipment`
  ADD PRIMARY KEY (`partner_organisation_id`,`equipment_id`),
  ADD KEY `fk_equipments_partner_organisations` (`equipment_id`);

--
-- Indexes for table `partner_organisation_industry`
--
ALTER TABLE `partner_organisation_industry`
  ADD PRIMARY KEY (`partner_organisation_id`,`industry_id`),
  ADD KEY `fk_industry_partner_organisations` (`industry_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_volunteers_users` (`volunteer_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_availability`
--
ALTER TABLE `volunteer_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_volunteer_availability_volunteers` (`volunteer_id`);

--
-- Indexes for table `volunteer_event`
--
ALTER TABLE `volunteer_event`
  ADD PRIMARY KEY (`volunteer_id`,`event_id`),
  ADD KEY `fk_events_volunteers` (`event_id`);

--
-- Indexes for table `volunteer_skill`
--
ALTER TABLE `volunteer_skill`
  ADD PRIMARY KEY (`volunteer_id`,`skill_id`),
  ADD KEY `fk_skills_volunteers` (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_organisations`
--
ALTER TABLE `partner_organisations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer_availability`
--
ALTER TABLE `volunteer_availability`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_partner_organisations_events` FOREIGN KEY (`partner_organisation_id`) REFERENCES `partner_organisations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `event_equipment`
--
ALTER TABLE `event_equipment`
  ADD CONSTRAINT `fk_equipments_events` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_events_equipments` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_skill`
--
ALTER TABLE `event_skill`
  ADD CONSTRAINT `fk_events_skills` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_skills_events` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partner_organisation_equipment`
--
ALTER TABLE `partner_organisation_equipment`
  ADD CONSTRAINT `fk_equipments_partner_organisations` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_partner_organisations_equipments` FOREIGN KEY (`partner_organisation_id`) REFERENCES `partner_organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partner_organisation_industry`
--
ALTER TABLE `partner_organisation_industry`
  ADD CONSTRAINT `fk_industry_partner_organisations` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_partner_organisations_industry` FOREIGN KEY (`partner_organisation_id`) REFERENCES `partner_organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_volunteers_users` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_availability`
--
ALTER TABLE `volunteer_availability`
  ADD CONSTRAINT `fk_volunteer_availability_volunteers` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_event`
--
ALTER TABLE `volunteer_event`
  ADD CONSTRAINT `fk_events_volunteers` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_volunteers_events` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_skill`
--
ALTER TABLE `volunteer_skill`
  ADD CONSTRAINT `fk_skills_volunteers` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_volunteers_skills` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
