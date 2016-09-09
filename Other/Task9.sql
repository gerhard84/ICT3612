#Create and select the database
DROP DATABASE IF EXISTS ICT3612;
CREATE DATABASE ICT3612;
USE ICT3612;
#Create or drop table if exists
DROP TABLE IF EXISTS `Player_Team`;
CREATE TABLE Player_Team (
Player VARCHAR(50) NOT NULL,
BirthCountry VARCHAR(30) NOT NULL,
Team VARCHAR(25),
PRIMARY KEY (Player)
);
#Insert values into Player_Team
INSERT INTO Player_Team (Player,BirthCountry,Team)
VALUES
('Cristiano Ronaldo','Portugal','Portugal'),
('Franz Beckenbauer','Germany','Germany'),
('Diego Maradona','Argentina','Argentina'),
('Lionel Messi','Argentina','Argentina'),
('Pelé','Brazil','Brazil'),
('Johan Cruyff','Netherlands','Netherlands'),
('Zinedine Zidane','France','France'),
('Alfredo di Stefano','Argentina','Argentina');