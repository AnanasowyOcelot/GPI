DELETE FROM `db_version` WHERE 1 = 1;
INSERT INTO `db_version` (`version`) VALUES
  (2);

ALTER TABLE auction ADD max_realization_date DATETIME DEFAULT NULL;
ALTER TABLE auction_audit ADD max_realization_date DATETIME DEFAULT NULL;

CREATE TABLE auction_comments (id INT AUTO_INCREMENT NOT NULL, auction_id INT DEFAULT NULL, content LONGTEXT NOT NULL, created DATETIME NOT NULL, INDEX IDX_EA1648C457B8F0DE (auction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE auction_comments ADD CONSTRAINT FK_EA1648C457B8F0DE FOREIGN KEY (auction_id) REFERENCES auction (id);

