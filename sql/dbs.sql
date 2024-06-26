DROP DATABASE IF EXISTS hamsy_biotech_inc;
CREATE DATABASE IF NOT EXISTS hamsy_biotech_inc;

USE hamsy_biotech_inc;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users(
  userId bigint(10) NOT NULL AUTO_INCREMENT,
  fullname varchar(50) DEFAULT NULL,
  email varchar(50) NOT NULL DEFAULT '',
  username varchar(50) NOT NULL DEFAULT '',
  passsword varchar(60) DEFAULT NULL,
  roleId tinyint(1) NOT NULL DEFAULT 0,
  genderId tinyint(1) NOT NULL DEFAULT 0,
  datecreated datetime DEFAULT current_timestamp(),
  PRIMARY KEY (userId),
  UNIQUE KEY email (email),
  UNIQUE KEY username (username)
);

DROP TABLE IF EXISTS articles;
CREATE TABLE IF NOT EXISTS articles (
  ArticleID int(11) NOT NULL AUTO_INCREMENT,
  Title varchar(255) NOT NULL,
  Content text NOT NULL,
  AuthorID int(11) DEFAULT NULL,
  CreatedAt timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (ArticleID),
  UNIQUE KEY AuthorID (AuthorID)
);

DROP TABLE IF EXISTS genders;
CREATE TABLE IF NOT EXISTS genders (
  roleId int(1) NOT NULL AUTO_INCREMENT,
  role varchar(20) NOT NULL DEFAULT '',
  datecreated datetime NOT NULL DEFAULT current_timestamp(),
  dateupdated datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (roleId),
  UNIQUE KEY role (role)
);

DROP TABLE IF EXISTS role;
CREATE TABLE IF NOT EXISTS role (
  roleId int(1) NOT NULL AUTO_INCREMENT,
  role varchar(20) NOT NULL DEFAULT '',
  datecreated datetime NOT NULL DEFAULT current_timestamp(),
  dateupdated datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (roleId),
  UNIQUE KEY role (role)
);

DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
  ProductID int(11) NOT NULL AUTO_INCREMENT,
  Name varchar(50) NOT NULL,
  Description varchar(100) DEFAULT NULL,
  Price decimal(10,2) NOT NULL,
  CreatedAt timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (ProductID)
);