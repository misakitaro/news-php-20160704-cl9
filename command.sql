DROP database if EXISTS phpdb;
CREATE DATABASE phpdb DEFAULT CHARACTER SET utf8;
CREATE USER 'dbuser'@'%' IDENTIFIED BY 'dbuserpassword';
GRANT ALL PRIVILEGES ON *.* TO 'dbuser'@'%' WITH GRANT OPTION;

use phpdb;

CREATE TABLE articles(
  id      INT AUTO_INCREMENT PRIMARY KEY,
  title   VARCHAR(255),
  detail  TEXT,
  created DATETIME
);
