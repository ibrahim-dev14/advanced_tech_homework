-- إنشاء قاعدة البيانات
CREATE DATABASE userspace DEFAULT CHARACTER SET = 'utf8mb4';

-- استخدام قاعدة البيانات
USE userspace;

-- جدول المستخدمين
CREATE TABLE User (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user VARCHAR(30) NOT NULL,
  password VARCHAR(80) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- جدول الطلاب مع عمود Gender
CREATE TABLE Student (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_user INT NOT NULL,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  email VARCHAR(60) NOT NULL,
  age INT NULL,
  gender VARCHAR(20) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES User(id)
);