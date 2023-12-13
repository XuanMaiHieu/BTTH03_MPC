CREATE DATABASE BTTH03_LMS
USE BTTH03_LMS
DROP DATABASE BTTH03_LMS
CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	email VARCHAR(50),
	PASSWORD VARCHAR(50),	
	created_at DATETIME,
	updated_at DATETIME 
);
CREATE TABLE courses(
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50),
	DESCRIPTION VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME 
);
CREATE TABLE course_user(
	course_id INT ,
	user_id INT,
	created_at DATETIME,
	updated_at DATETIME,
	PRIMARY KEY (course_id, user_id),
	Foreign KEY (course_id) REFERENCES  courses(id),
	Foreign KEY (user_id) REFERENCES users(id)
);
CREATE TABLE lessons(
	id INT AUTO_INCREMENT PRIMARY KEY,
	course_id INT ,
	title VARCHAR(50),
	DESCRIPTION VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME,
	Foreign KEY (course_id) REFERENCES  courses(id)
);
CREATE TABLE materials(
	id INT AUTO_INCREMENT PRIMARY KEY,
	lesson_id INT,
	title VARCHAR(50),
	file_path VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME,
	Foreign KEY (lesson_id) REFERENCES lessons(id)
);
CREATE TABLE quizzes(
	id INT AUTO_INCREMENT PRIMARY KEY,
	lesson_id INT ,
	title VARCHAR(50),
	created_at DATETIME,
	updated_at DATETIME,
	Foreign KEY (lesson_id) REFERENCES lessons(id)
);
CREATE TABLE questions(
	id INT AUTO_INCREMENT PRIMARY KEY,
	quiz_id INT,
	question VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME,
	Foreign KEY (quiz_id) REFERENCES quizzes(id)
);
CREATE TABLE OPTIONS(
	id INT AUTO_INCREMENT PRIMARY KEY,
	question_id INT,
	OPTION VARCHAR(255),
	is_correct BOOLEAN,
	created_at DATETIME,
	updated_at DATETIME,
	Foreign KEY (question_id) REFERENCES questions(id)
);


INSERT INTO users (name, email, password, created_at, updated_at) 
VALUES
	('Alice', 'alice@example.com', 'pass1', '2023-12-01 08:00:00', '2023-12-02 09:00:00'),
	('Bob', 'bob@example.com', 'pass2', '2023-12-02 09:30:00', '2023-12-03 10:45:00'),
	('Charlie', 'charlie@example.com', 'pass3', '2023-12-03 10:20:00', '2023-12-04 11:10:00'),
	('David', 'david@example.com', 'pass4', '2023-12-04 11:45:00', '2023-12-05 12:30:00'),
	('Emma', 'emma@example.com', 'pass5', '2023-12-05 12:15:00', '2023-12-06 13:20:00'),
	('Frank', 'frank@example.com', 'pass6', '2023-12-06 13:40:00', '2023-12-07 14:25:00'),
	('Grace', 'grace@example.com', 'pass7', '2023-12-07 14:55:00', '2023-12-08 15:35:00'),
	('Hannah', 'hannah@example.com', 'pass8', '2023-12-08 15:25:00', '2023-12-09 16:40:00'),
	('Ian', 'ian@example.com', 'pass9', '2023-12-09 16:05:00', '2023-12-10 17:15:00'),
	('Jack', 'jack@example.com', 'pass10', '2023-12-10 17:55:00', '2023-12-11 18:50:00'),
	('Katie', 'katie@example.com', 'pass11', '2023-12-11 18:35:00', '2023-12-12 19:55:00'),
	('Liam', 'liam@example.com', 'pass12', '2023-12-12 19:25:00', '2023-12-13 20:05:00'),
	('Mia', 'mia@example.com', 'pass13', '2023-12-13 20:50:00', '2023-12-14 21:30:00'),
	('Nathan', 'nathan@example.com', 'pass14', '2023-12-14 21:15:00', '2023-12-15 22:20:00'),
	('Olivia', 'olivia@example.com', 'pass15', '2023-12-15 22:10:00', '2023-12-16 23:00:00');


SELECT * FROM users

