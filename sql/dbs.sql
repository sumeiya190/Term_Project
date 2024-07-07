DROP DATABASE IF EXISTS hamsy_biotech_inc;
CREATE DATABASE IF NOT EXISTS hamsy_biotech_inc;

USE hamsy_biotech_inc;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  userId BIGINT(10) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  PRIMARY KEY (userId),
  UNIQUE KEY email (email)
);

DROP TABLE IF EXISTS services;
CREATE TABLE IF NOT EXISTS services (
  serviceId INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  description TEXT DEFAULT NULL,
  price DECIMAL(10,2) NOT NULL,
  availability ENUM('available', 'not_available') NOT NULL,
  PRIMARY KEY (serviceId)
);

DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
  productId INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  description TEXT DEFAULT NULL,
  price DECIMAL(10,2) NOT NULL,
  availability ENUM('in_stock', 'out_of_stock', 'pre_order') NOT NULL,
  quantity INT(11) NOT NULL,
  PRIMARY KEY (productId)
);

DROP TABLE IF EXISTS orders;
CREATE TABLE IF NOT EXISTS orders (
  orderId INT(11) NOT NULL AUTO_INCREMENT,
  userId BIGINT(20) NOT NULL,
  totalPrice DECIMAL(10,2) NOT NULL,
  orderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (orderId),
  FOREIGN KEY (userId) REFERENCES users (userId)
);

DROP TABLE IF EXISTS orderItems;
CREATE TABLE IF NOT EXISTS orderItems (
  orderItemId INT(11) NOT NULL AUTO_INCREMENT,
  orderId INT(11) NOT NULL,
  productId INT(11) DEFAULT NULL,
  serviceId INT(11) DEFAULT NULL,
  quantity INT(11) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (orderItemId),
  FOREIGN KEY (orderId) REFERENCES orders (orderId),
  FOREIGN KEY (productId) REFERENCES products (productId),
  FOREIGN KEY (serviceId) REFERENCES services (serviceId)
);
