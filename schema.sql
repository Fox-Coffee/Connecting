-- schema.sql

-- Drop the table if it exists (for development purposes)
DROP TABLE IF EXISTS people;

-- Create the table
CREATE TABLE people (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    DateOfBirth DATE NOT NULL,
    Gender CHAR(1) NOT NULL,
    CityOfResidence VARCHAR(255) NOT NULL
);