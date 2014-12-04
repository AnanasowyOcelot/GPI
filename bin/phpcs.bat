@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/instaclick/php-code-sniffer/scripts/phpcs
php "%BIN_TARGET%" %*
