CREATE DATABASE tasks;
USE tasks;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    task VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL DEFAULT 'General',
    status ENUM('pending', 'completed') DEFAULT 'pending',
    due_date DATE DEFAULT NULL,
    starred BOOLEAN DEFAULT FALSE
);