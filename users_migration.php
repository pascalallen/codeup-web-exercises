<?php
require_once 'users_logins.php';
require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop_table = "DROP TABLE IF EXISTS contacts";

$dbc->exec($drop_table);

$create_table = 'CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($create_table);

