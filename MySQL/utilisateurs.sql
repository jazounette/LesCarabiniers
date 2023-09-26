CREATE TABLE `utilisateurs` (
   `id_user`      INT NOT NULL AUTO_INCREMENT,
   `nom`          VARCHAR(55),
   `prenom`       VARCHAR(55),
   `licence`      INT,
   `adresse`      VARCHAR(99),
   `tel`          VARCHAR(10),
   `acces`        TINYINT,
   `email`        VARCHAR(55),
   `motpass`      VARCHAR(99),
   PRIMARY KEY(`id_user`)
);