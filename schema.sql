-- Create a new database
CREATE DATABASE xtreme;

-- Select the newly created database
USE xtreme;

-- Generating database schema which contains a table namely xtreme
CREATE TABLE `xtreme` (
    `id` INT AUTO_INCREMENT,
    `link` VARCHAR(31) NOT NULL,
    `genre` VARCHAR(255) NOT NULL DEFAULT 'xtreme-home',
    `description` TEXT,
    PRIMARY KEY(id)
);
