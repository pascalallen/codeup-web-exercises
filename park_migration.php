<?php
require_once 'parks_logins.php';

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop_table = "DROP TABLE IF EXISTS national_parks";
$drop_column = "ALTER TABLE national_parks DROP COLUMN IF EXISTS description";

$dbc->exec($drop_table);
$dbc->exec($drop_column);

$create_table = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE(10, 2) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($create_table);

$add_description = 'ALTER TABLE national_parks ADD description COLUMN';

$dbc->exec($add_description);
