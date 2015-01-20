DELETE FROM `db_version`
WHERE 1 = 1;
INSERT INTO `db_version` (`version`) VALUES
  (4);

ALTER TABLE auction ADD is_finished TINYINT(1) NOT NULL;

ALTER TABLE auction_audit ADD is_finished TINYINT(1) DEFAULT NULL;



INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
  (527, 'SYSTEM', 'system', 'lukaszworoniecki@gmail.com', 'lukaszworoniecki@gmail.com', 1, 'm2vs2kmshxc4gg8cwcowcks48cgwo8w', '86afb742a4ac5b95c3920b9591a2cd86f884803e8f661f1b29a23a659c11134ffbe7d6bdf44bd44e110ea84e9362c1100325c85040432a82a99b887ec571bf03', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2015-01-20 16:13:29', '2015-01-20 16:13:29', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

