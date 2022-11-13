CREATE DATABASE data_mahasiswa;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
  
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` VARCHAR(50) NOT NULL,
  `nama` VARCHAR(50) NOT NULL,
  `alamat` VARCHAR(50) NOT NULL,
  `fakultas` VARCHAR(50) NOT NULL
) ;


ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);


ALTER TABLE `mahasiswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
