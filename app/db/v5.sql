DELETE FROM `db_version`
WHERE 1 = 1;
INSERT INTO `db_version` (`version`) VALUES
  (5);


ALTER TABLE add_auction_command ADD subcategories LONGTEXT NOT NULL COMMENT '(DC2Type:json_array)';

