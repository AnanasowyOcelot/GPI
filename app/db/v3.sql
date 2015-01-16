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