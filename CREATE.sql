-- MySQL
/* 
  Using 000webhost database
  Database to save staff applications
  Table to save staff applications
  Table for admin logins
*/
/* 
-- Table to save staff applications
*/

-- Create Table staff_applications
DROP TABLE IF EXISTS staff_applications;

CREATE TABLE IF NOT EXISTS staff_applications (
  id INT NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NULL,
  email VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  discord_tag VARCHAR(255) NOT NULL,
  discord_id VARCHAR(255) NOT NULL,
  minecraft_username VARCHAR(255) NOT NULL,
  position VARCHAR(255) NOT NULL,
  timezone VARCHAR(255) NOT NULL,
  previous_experience TEXT(2000) NOT NULL,
  minecraft_start_date DATE NOT NULL,
  contribution_time INT NOT NULL,
  why_staff TEXT(2000) NOT NULL,
  why_choose TEXT(2000) NOT NULL,
  scenario_1 TEXT(2000) NOT NULL,
  scenario_2 TEXT(2000) NOT NULL,
  scenario_3 TEXT(2000) NOT NULL,
  scenario_4 TEXT(2000) NOT NULL,
  scenario_5 TEXT(2000) NOT NULL,
  scenario_6 TEXT(2000) NOT NULL,
  scenario_7 TEXT(2000) NOT NULL,
  opinion TEXT(2000) NULL,
  rating INT NULL,
  change_anything TEXT(2000) NULL,
  reviewed BOOLEAN NOT NULL,
  reviewed_by VARCHAR(255) NULL,
  accepted BOOLEAN NOT NULL,
  accepted_by VARCHAR(255) NULL,
  PRIMARY KEY (id)
);

-- Insert into Table staff_applications
INSERT INTO staff_applications (first_name, last_name, email, age, discord_tag, discord_id, minecraft_username, position, timezone, previous_experience, minecraft_start_date, contribution_time, why_staff, why_choose, scenario_1, scenario_2, scenario_3, scenario_4, scenario_5, scenario_6, scenario_7, opinion, rating, change_anything, reviewed, accepted) 
VALUES (
  "John", 
  "Doe", 
  "Johndoe@fake.email", 
  28, 
  "Wumpus#0000", 
  "123456789", 
  "Wumpus", 
  "Administrator", 
  "CEST", 
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.", 
  "2017-04-27", 
  46, 
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.", 
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.", 
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.", 
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.", 
  "Lorem ipsum dolor sit amet, consectetur adipiscing el",
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  4,
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus est pellentesque elit ullamcorper. Lobortis elementum nibh tellus molestie nunc non blandit. Porta lorem mollis aliquam ut porttitor leo a. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus.",
  false,
  false);

/* 
-- Table for admin logins
*/

-- Create Table Users
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  image longblob,
  PRIMARY KEY (id)
);

-- Insert into Users
INSERT INTO users (username, password) VALUES ("Gigi", "UpToP0ll0sStandards"), ("Ruby", "kasspille05"), ("Rescore", "VdsL1uEx&q!a"), ("Unminn", "X0!098eCH");