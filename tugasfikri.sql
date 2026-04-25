CREATE DATABASE tugasfikri;
USE tugasfikri;

CREATE TABLE perlengkapan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(100) NOT NULL
);

INSERT INTO perlengkapan (nama_barang) VALUES 
('Jaket Waterproof'),
('Sepatu Gunung'),
('Celana Cargo'),
('Carrier 60L'),
('Headlamp');