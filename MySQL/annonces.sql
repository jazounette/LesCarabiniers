CREATE TABLE `annonces` (
   `id_ann`       INT NOT NULL AUTO_INCREMENT,
   `id_user`      INT,
   `descrip`      TEXT,
   `urlphoto`     VARCHAR(299),
   PRIMARY KEY(`id_ann`)
);