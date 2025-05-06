CREATE DATABASE IF NOT EXISTS omurcars_db;
USE omurcars_db;

CREATE TABLE elanlar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ad VARCHAR(100),
  soyad VARCHAR(100),
  elaqe VARCHAR(100),
  kategoriya VARCHAR(100),
  qiymet VARCHAR(100),
  melumat TEXT,
  sekiller TEXT,
  tarix TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
