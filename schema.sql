-- schema.sql

-- Drop the table if it exists (for development purposes)
DROP TABLE IF EXISTS tabela;

-- Create the tabela table
CREATE TABLE tabela (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Imie VARCHAR(255) NOT NULL,
    Nazwisko VARCHAR(255) NOT NULL,
    Data_Urodzenia DATE NOT NULL,
    Plec CHAR(1) NOT NULL,
    Miasto_Zamieszkania VARCHAR(255) NOT NULL
);