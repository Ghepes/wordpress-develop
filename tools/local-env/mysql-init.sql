/**
 * MySQL server init.
 *
 * SQL queries in this file will be executed the first time the MySQL server is started.
 */

CREATE DATABASE IF NOT EXISTS wordpress_develop;
CREATE DATABASE IF NOT EXISTS wordpress_develop_tests;

CREATE USER IF NOT EXISTS 'wordpress'@'localhost' IDENTIFIED BY 'wordpress';
GRANT ALL PRIVILEGES ON wordpress_develop.* TO 'wordpress'@'localhost';
GRANT ALL PRIVILEGES ON wordpress_develop_tests.* TO 'wordpress'@'localhost';

FLUSH PRIVILEGES;

