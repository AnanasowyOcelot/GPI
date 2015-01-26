DELETE FROM `db_version`
WHERE 1 = 1;
INSERT INTO `db_version` (`version`) VALUES
  (4);

ALTER TABLE auction ADD is_finished TINYINT(1) NOT NULL;

ALTER TABLE auction_audit ADD is_finished TINYINT(1) DEFAULT NULL;

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
  (527, 'SYSTEM', 'system', 'lukaszworoniecki@gmail.com', 'lukaszworoniecki@gmail.com', 1, 'm2vs2kmshxc4gg8cwcowcks48cgwo8w', '86afb742a4ac5b95c3920b9591a2cd86f884803e8f661f1b29a23a659c11134ffbe7d6bdf44bd44e110ea84e9362c1100325c85040432a82a99b887ec571bf03', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2015-01-20 16:13:29', '2015-01-20 16:13:29', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);


CREATE TABLE
    auction_attribute
    (
      id INT AUTO_INCREMENT NOT NULL,
      name VARCHAR(255) NOT NULL,
      PRIMARY KEY(id)
    )
    DEFAULT CHARACTER SET utf8
    COLLATE utf8_unicode_ci
    ENGINE = InnoDB;
CREATE TABLE
    auction_attributes_group
    (
      id INT AUTO_INCREMENT NOT NULL,
      category_id INT DEFAULT NULL,
      INDEX IDX_8A668B7112469DE2 (category_id),
      PRIMARY KEY(id)
    )
    DEFAULT CHARACTER SET utf8
    COLLATE utf8_unicode_ci
    ENGINE = InnoDB;
CREATE TABLE
    auctionattributesgroup_auctionattribute
    (
      auctionattributesgroup_id INT NOT NULL,
      auctionattribute_id INT NOT NULL,
      INDEX IDX_6CCCFF11DA2B9CE4 (auctionattributesgroup_id),
      INDEX IDX_6CCCFF11B7FF8298 (auctionattribute_id),
      PRIMARY KEY(auctionattributesgroup_id, auctionattribute_id)
      )
    DEFAULT CHARACTER SET utf8
    COLLATE utf8_unicode_ci
    ENGINE = InnoDB;
ALTER TABLE
    auction_attributes_group
    ADD
      CONSTRAINT FK_8A668B7112469DE2
      FOREIGN KEY (category_id) REFERENCES classification__category (id);
ALTER TABLE
    auctionattributesgroup_auctionattribute
    ADD
      CONSTRAINT FK_6CCCFF11DA2B9CE4 FOREIGN KEY (auctionattributesgroup_id)
        REFERENCES auction_attributes_group (id)
        ON DELETE CASCADE;
ALTER TABLE auctionattributesgroup_auctionattribute
    ADD
      CONSTRAINT FK_6CCCFF11B7FF8298 FOREIGN KEY (auctionattribute_id)
        REFERENCES auction_attribute (id)
        ON DELETE CASCADE;

CREATE TABLE auction_attribute_audit (id INT NOT NULL, rev INT NOT NULL, name VARCHAR(255) DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY (id, rev))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE auction_attributes_group_audit (id          INT                                  NOT NULL, rev INT NOT NULL,
                                             category_id INT DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY (id, rev))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;


CREATE TABLE add_auction_command
(id          INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, max_price NUMERIC(10, 2) DEFAULT NULL,
 time_period INT                NOT NULL, max_realization_date DATETIME DEFAULT NULL, PRIMARY KEY (id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE addnewauctioncommand_category (addnewauctioncommand_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_E8E03A2C3A75D8E5 (addnewauctioncommand_id), INDEX IDX_E8E03A2C12469DE2 (category_id), PRIMARY KEY (addnewauctioncommand_id, category_id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE addnewauctioncommand_document (addnewauctioncommand_id INT NOT NULL, document_id INT NOT NULL, INDEX IDX_36C5A99B3A75D8E5 (addnewauctioncommand_id), INDEX IDX_36C5A99BC33F7837 (document_id), PRIMARY KEY (addnewauctioncommand_id, document_id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
ALTER TABLE addnewauctioncommand_category ADD CONSTRAINT FK_E8E03A2C3A75D8E5 FOREIGN KEY (addnewauctioncommand_id) REFERENCES add_auction_command (id)
  ON DELETE CASCADE;
ALTER TABLE addnewauctioncommand_category ADD CONSTRAINT FK_E8E03A2C12469DE2 FOREIGN KEY (category_id) REFERENCES classification__category (id)
  ON DELETE CASCADE;
ALTER TABLE addnewauctioncommand_document ADD CONSTRAINT FK_36C5A99B3A75D8E5 FOREIGN KEY (addnewauctioncommand_id) REFERENCES add_auction_command (id)
  ON DELETE CASCADE;
ALTER TABLE addnewauctioncommand_document ADD CONSTRAINT FK_36C5A99BC33F7837 FOREIGN KEY (document_id) REFERENCES document (id)
  ON DELETE CASCADE;

ALTER TABLE add_auction_command CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE content content LONGTEXT DEFAULT NULL, CHANGE time_period time_period INT DEFAULT NULL;

ALTER TABLE add_auction_command CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE content content LONGTEXT DEFAULT NULL, CHANGE time_period time_period INT DEFAULT NULL;

ALTER TABLE add_auction_command ADD created_by INT DEFAULT NULL;
ALTER TABLE add_auction_command ADD CONSTRAINT FK_CD53254CDE12AB56 FOREIGN KEY (created_by) REFERENCES fos_user_user (id);

CREATE TABLE aucition_command_add_attribute_value (id INT AUTO_INCREMENT NOT NULL, command_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, INDEX IDX_3183585933E1689A (command_id), PRIMARY KEY (id))
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
ALTER TABLE aucition_command_add_attribute_value ADD CONSTRAINT FK_3183585933E1689A FOREIGN KEY (command_id) REFERENCES add_auction_command (id);




