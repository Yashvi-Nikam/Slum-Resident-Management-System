CREATE DATABASE IF NOT EXISTS slum_project_db;
USE slum_project_db;

-- Create the residents table
CREATE TABLE residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slum_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    owner_name VARCHAR(255) NOT NULL,
    wife_name VARCHAR(255) NOT NULL,
    hut_number VARCHAR(50) NOT NULL,
    husband_aadhaar VARCHAR(20) NOT NULL,
    wife_aadhaar VARCHAR(20) NOT NULL,
    husband_photo_path VARCHAR(255) NOT NULL,
    husband_fingerprint_path VARCHAR(255) NOT NULL,
    wife_photo_path VARCHAR(255) NOT NULL,
    wife_fingerprint_path VARCHAR(255) NOT NULL,
    UNIQUE KEY unique_husband_aadhaar (husband_aadhaar),
    UNIQUE KEY unique_wife_aadhaar (wife_aadhaar)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;