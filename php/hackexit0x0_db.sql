
/*Create database*/

CREATE DATABASE hackexit0x0_db;

/*Create tables*/

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
  token VARCHAR(50) NOT NULL UNIQUE,
  token_date DATETIME DEFAULT NULL
);

/* Dummy data for 5 users */
INSERT INTO users (username, password, role, token, token_date) VALUES
('admin1', 'hashed_password_1', 'admin', 'HSV123', '2024-11-08 10:00:00'),
('user1', 'hashed_password_2', 'user', 'H65155', '2024-11-08 11:00:00'),
('user2', 'hashed_password_3', 'user', '626262', '2024-11-08 12:00:00'),
('admin2', 'hashed_password_4', 'admin', 'FDF451', '2024-11-08 13:00:00'),
('user3', 'hashed_password_5', 'user', 'H62E3F', '2024-11-08 14:00:00');
