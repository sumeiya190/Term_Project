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


INSERT INTO products (productId, name, description, price, availability, quantity) VALUES
(NULL, Advanced Imaging Systems, High-resolution imaging systems used for detailed internal examinations, including MRI, CT, and ultrasound machines., 50000.00, in_stock, 10),
(NULL, Surgical Robotics, Robotic systems that assist surgeons in performing precise and minimally invasive surgeries., 150000.00, pre_order, 5),
(NULL, Patient Monitoring Devices, Devices that continuously monitor patients vital signs and provide real-time data to healthcare providers., 10000.00, in_stock, 50),
(NULL, Diagnostic Equipment, Equipment used for diagnosing medical conditions including X-ray machines, ECG machines, and lab analyzers., 30000.00, out_of_stock, 0),
(NULL, Remote Consultation Devices, Devices that enable healthcare providers to conduct remote consultations with patients including telemedicine carts and video conferencing tools., 8000.00, in_stock, 20),
(NULL, Rehabilitation Robots, Robotic devices that assist patients in their rehabilitation exercises helping them regain movement and strength., 20000.00, pre_order, 15),
(NULL, Assisted Living Devices, Devices designed to assist elderly or disabled individuals in their daily activities, such as mobility aids and smart home devices., 5000.00, in_stock, 30);

INSERT INTO services (serviceId, name, description, price, availability) VALUES
(NULL, Electronic Health Record Systems, A comprehensive electronic system for managing patient health records, ensuring secure and easy access to patient data for healthcare providers., 10000.00, available),
(NULL, Practice Management Software, Software designed to streamline administrative and clinical operations for medical practices, including appointment scheduling, billing, and patient management., 50000.00, available),
(NULL, Health Analytics Software, Software that utilizes data analysis and predictive analytics to provide insights into patient health trends, outcomes, and resource utilization., 60000.00, available),
(NULL, Remote Monitoring Devices, Devices used for monitoring patients health conditions remotely, providing real-time data to healthcare providers for timely interventions., 20000.00, available),
(NULL, AI-powered Diagnosis Assistance, Advanced AI algorithms that assist healthcare providers in diagnosing medical conditions based on patient data and medical literature., 40000.00, available);


INSERT INTO users (userId, name, email, password) VALUES
(1, Alex, alexkamu@gmail.com,  123456@),
(2, Kamau, kamuu124@gmail.com, 123456#),
(3, Jane, janee345@gmail.com, 123456$),
(4, Kevin, kevoq234@gmail.com, 123456%);
