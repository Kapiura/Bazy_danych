-- Tworzenie tabeli klientów
CREATE TABLE Klienci (
    id_klienta INT PRIMARY KEY AUTO_INCREMENT,
    imię VARCHAR(50),
    nazwisko VARCHAR(50),
    adres VARCHAR(100),
    numer_telefonu VARCHAR(15),
    email VARCHAR(100),
    data_rejestracji DATE,
    inne_dane_identyfikacyjne TEXT
);

-- Tworzenie tabeli przedmiotów
CREATE TABLE Przedmioty (
    id_przedmiotu INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100),
    opis TEXT,
    wartość DECIMAL(10, 2),
    stan_przedmiotu VARCHAR(50),
    data_dodania_do_lombardu DATE,
    inne_szczegóły TEXT
);

-- Tworzenie tabeli umów zastawu
CREATE TABLE UmowyZastawu (
    id_umowy INT PRIMARY KEY AUTO_INCREMENT,
    id_klienta INT,
    id_przedmiotu INT,
    kwota_pożyczki DECIMAL(10, 2),
    data_zastawu DATE,
    data_spłaty DATE,
    status_umowy VARCHAR(50),
    FOREIGN KEY (id_klienta) REFERENCES Klienci(id_klienta),
    FOREIGN KEY (id_przedmiotu) REFERENCES Przedmioty(id_przedmiotu)
);

-- Tworzenie tabeli transakcji
CREATE TABLE Transakcje (
    id_transakcji INT PRIMARY KEY AUTO_INCREMENT,
    rodzaj_transakcji VARCHAR(50),
    id_klienta INT,
    id_przedmiotu INT,
    kwota_transakcji DECIMAL(10, 2),
    data_transakcji DATE,
    inne_informacje_dodatkowe TEXT,
    FOREIGN KEY (id_klienta) REFERENCES Klienci(id_klienta),
    FOREIGN KEY (id_przedmiotu) REFERENCES Przedmioty(id_przedmiotu)
);

-- Tworzenie tabeli pracowników
CREATE TABLE Pracownicy (
    id_pracownika INT PRIMARY KEY AUTO_INCREMENT,
    imię VARCHAR(50),
    nazwisko VARCHAR(50),
    stanowisko VARCHAR(100),
    data_zatrudnienia DATE,
    wynagrodzenie DECIMAL(10, 2),
    inne_informacje TEXT
);

-- Tworzenie tabeli raportów
CREATE TABLE Raporty (
    id_raportu INT PRIMARY KEY AUTO_INCREMENT,
    rodzaj_raportu VARCHAR(50),
    data_raportu DATE,
    przychody DECIMAL(10, 2),
    wydatki DECIMAL(10, 2),
    zyski DECIMAL(10, 2),
    inne_statystyki TEXT
);

