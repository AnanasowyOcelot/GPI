DELETE FROM `db_version`
WHERE 1 = 1;
INSERT INTO `db_version` (`version`) VALUES
  (3);

CREATE TABLE auction_disable_reason (
  id INT AUTO_INCREMENT NOT NULL,
  auction_id INT DEFAULT NULL,
  content LONGTEXT NOT NULL,
  created DATETIME NOT NULL,
  INDEX IDX_5678128957B8F0DE (auction_id),
  PRIMARY KEY (id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;

ALTER TABLE auction_disable_reason ADD CONSTRAINT FK_5678128957B8F0DE FOREIGN KEY (auction_id) REFERENCES auction (id);

CREATE TABLE offer_disable_reason (
  id INT AUTO_INCREMENT NOT NULL,
  offer_id INT DEFAULT NULL,
  content LONGTEXT NOT NULL,
  created DATETIME NOT NULL,
  INDEX IDX_300586B753C674EE (offer_id),
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;

ALTER TABLE offer_disable_reason ADD CONSTRAINT FK_300586B753C674EE FOREIGN KEY (offer_id) REFERENCES offer (id);