CREATE DATABASE data_akademik;

CREATE TABLE mahasiswa (
    id BIGINT auto_increment unsigned,
    nim varchar(10) unique not null,
    nama varchar(100) not null,
    alamat varchar(100), 
    fakultas varchar(50),
    primary key(id)
);