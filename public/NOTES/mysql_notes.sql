-- TO GET TO MYSQL FROM VAGRANT SSH
mysql -u vagrant -p

-- MySQL/Language/Definitions: what are DDL, DML and DQL?
DDL (Data Definition Language): CREATE, ALTER and DROP
DML (Data Manipulation Language): INSERT, UPDATE and DELETE
DQL (Data Query Language): SELECT, SHOW and HELP
DCL (Data Control Language): GRANT and REVOKE
DTL (Data Transaction Language): START TRANSACTION, SAVEPOINT, COMMIT and ROLLBACK [TO SAVEPOINT]

-- PAGER INITIATE
pager less -~SFX
-- PAGER UNDO
nopager

-- USERNAME AND HOSTNAME
root@localhost

-- FINDING CURRENT USER
SELECT current_user;
+----------------+
| current_user   |
+----------------+
| root@localhost |
+----------------+


-- LISTING USERS
SELECT user, host, password FROM mysql.user;
+------------------+---------------+-------------------------------------------+
| user             | host          | password                                  |
+------------------+---------------+-------------------------------------------+
| root             | localhost     |                                           |
| root             | codeup-trusty |                                           |
| root             | 127.0.0.1     |                                           |
| root             | ::1           |                                           |
| debian-sys-maint | localhost     | *5A1820595E9530E1259AAC41E5C86B51ED5D6815 |
| vagrant          | localhost     | *04E6E1273D1783DF7D57DC5479FE01CFFDFD0058 |
+------------------+---------------+-------------------------------------------+

-- CREATING USER
CREATE USER 'billy'@'localhost' IDENTIFIED BY 'billysSecretP@ass123';
CREATE USER 'sally'@'192.168.77.1' IDENTIFIED BY 'passwordForSally321';

-- Host Wildcards
'office_user'@'%'

-- PRIVILEGES (EXAMPLES:)
GRANT ALL ON *.* TO 'billy'@'localhost';
GRANT SELECT ON *.* TO 'read_only'@'%';
GRANT SELECT, INSERT, UPDATE, DELETE ON sally_db.sallys_table TO 'sally'@'192.168.77.1';
GRANT CREATE, ALTER, INSERT, DROP ON office_db.* TO 'office_user'@'192.168.77.%';
GRANT ALL ON *.* TO 'billy'@'localhost' WITH GRANT OPTION;

-- DROPPING USERS
DROP USER 'sally'@'192.168.77.1';

-- FLUSH PRIVILEGES
FLUSH PRIVILEGES;

-- CREATING DATABASES
CREATE DATABASE database_name;
CREATE DATABASE IF NOT EXISTS database_name;

-- LISTING DATABASES
SHOW DATABASES;

-- SELECTING DATABASES
USE database_name;

-- SHOW CURRENT DATABASE
SELECT database();

-- INSPECTING A DATABASES
SHOW CREATE DATABASE database_name;

-- DELETING A DATABASE
DROP DATABASE database_name;
DROP DATABASE IF EXISTS database_name;

-- TO CREATE A DATABASE WITH ANSIBLE
ansible-playbook ansible/playbooks/vagrant/mysql/database.yml

-- NUMERIC TYPES IN MYSQL
-- ALWAYS STORE PHONE NUMBERS IN CHAR(10)
INT
FLOAT
DOUBLE
DECIMAL(TOTAL LENGTH, PRECISION)
INT UNSIGNED      (FOR POSITIVE NUMBERS)

-- BOOLEAN IN MYSQL
TINYINT: data type that goes from -128 to 127 and treats 0 as false and 1 as true

-- STRING TYPES
CHAR(length): length can be from 1 to 255
VARCHAR(length): lengths can go up to 65,535, if you need more than 255 characters consider using TEXT instead
TEXT: A large block of characters than can be any length

-- DATE TYPES
DATE: YYYY-MM-DD
TIME: 24-hour
DATETIME: YYYY-MM-DD HH:MM:SS

-- NULL
NULL REPRESENTS A LACK OF A VALUE

-- CREATING TABLES
CREATE TABLE quotes (
    author_first_name VARCHAR(50),
    author_last_name  VARCHAR(100) NOT NULL,
    content TEXT NOT NULL
);

-- PRIMARY KEYS: way to identify a single row in a table
CREATE TABLE quotes (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    author_first_name VARCHAR(50),
    author_last_name  VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    PRIMARY KEY (id)
);
-- ONLY ONE COLUMN HAS "AUTO_INCREMENT"

-- SHOW TABLES
SHOW TABLES;

-- DESCRIBE TABLES
DESCRIBE quotes;

-- DROP TABLES
DROP TABLE quotes;
DROP TABLE IF EXISTS quotes;
CREATE TABLE IF NOT EXISTS quotes (
    ...
);

--  To run the script from your vagrant box, use the following command:
mysql -u codeup -p -t < filename.sql

-- INSERT
INSERT INTO quotes (author_first_name, author_last_name, content)
VALUES ('Douglas', 'Adams',    'Time is an illusion. Lunchtime doubly so.'),
       ('Mark',    'Twain',    'Clothes make the man. Naked people have little or no influence on society.'),
       ('Kurt',    'Vonnegut', 'The universe is a big place, perhaps the biggest.');

-- SELECT
SELECT column1, column2, ... FROM table_name;
SELECT author_last_name, content FROM quotes;
'+------------------+----------------------------------------------------------------------------+
| author_last_name | content                                                                    |
+------------------+----------------------------------------------------------------------------+
| Adams            | I love deadlines. I love the whooshing noise they make as they go by.      |
| Adams            | Dont\'t Panic.                                                             |
| Adams            | Time is an illusion. Lunchtime doubly so.                                  |
| Twain            | Clothes make the man. Naked people have little or no influence on society. |
| Vonnegut         | The universe is a big place, perhaps the biggest.                          |
+------------------+----------------------------------------------------------------------------+'
-- TO RETRIEVE ALL
SELECT * FROM quotes;

-- WHERE CLAUSE
SELECT column1, column2, ...
FROM table_name
WHERE column_name = 'value';
SELECT * FROM quotes WHERE author_last_name = 'Adams';
SELECT * FROM quotes WHERE id = 5;

-- MYSQL OPERATORS
=	Equal
!= or <>	Not equal
<	Less than
>	Greater than
<=	Less than or equal to
>=	Greater than or equal to
BETWEEN value1 AND value2	Greater than or equal to value1 and less than or equal to value2

-- Miscellaneous Output
SELECT 'I am output!' AS 'Info';
+----------------+
| Info           |
+----------------+
| I am a output! |
+----------------+

-- MIGRATION: CREATES STRUCTURE FOR TABLE
-- SEEDER: DATA WE USE TO SEE TABLE
-- CRUD: CREATE, READ, UPDATE, DESTROY
-- STRUCTURED QUERYING LANGUAGE

-- ***** ORDER TO RUN MYSQL ON VAGRANT SSH ***** --
-- 1: RUN MIGRATION FILE
mysql -u codeup -p -t < albums_migration.sql;
-- 2: RUN SEEDER FILE
mysql -u codeup -p -t < albums_seeder.sql;
-- RUN FILE ITSELF
mysql -u codeup -p -t < select_exercise.sql;

-- UPDATE
UPDATE table_name
SET column1 = 'value1', column2 = 'value2', ...
WHERE columnA = 'valueA';

UPDATE quotes
SET author_first_name = 'Samuel', author_last_name = 'Clemens'
WHERE id = 4;


select first_name
from employees
where first_name in ('Irena', 'Vidya', 'Maya');

SELECT first_name, last_name
FROM employees
WHERE last_name LIKE 'E%';

-- LIMIT RESULTS
SELECT columns FROM table LIMIT count [OFFSET count];


-- OFFSET IS WHERE TO START IN SEARCH RESULTS
SELECT emp_no, first_name, last_name
FROM employees
WHERE first_name LIKE 'M%'
LIMIT 25 OFFSET 50;

-- ASSIGNING FUNCTIONS IN MYSQL
-- NOW
SELECT NOW() as time_now;
-- CURDATE
SELECT CURDATE() as date_now;
-- CURTIME
SELECT CURTIME() as time_now;
-- UNIX_TIMESTAMP(), UNIX_TIMESTAMP(date)
SELECT UNIX_TIMESTAMP() as timestamp_now;
-- COUNT NUMBER OF PEOPLE THAT DONT HAVE 'A' IN THEIR NAME
SELECT COUNT(first_name)
FROM employees
WHERE first_name NOT LIKE '%a%';
-- COUNT NUMBER OF PEOPLE THAT DONT HAVE 'A' IN THEIR NAME
-- (DOESNT COUNT DUPLICATES)
SELECT COUNT(DISTINCT first_name)
FROM employees
WHERE first_name NOT LIKE '%a%';

-- SUBQUERIES
SELECT column_a, column_b, column_c
FROM table_a
WHERE column_a IN (
    SELECT column_a
    FROM table_b
    WHERE column_b = true
);

SELECT first_name, last_name, birth_date
FROM employees
WHERE emp_no IN (
    SELECT emp_no
    FROM dept_manager
)
LIMIT 10;

-- Using PDO to Execute Queries
-- // Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'codeup', 'password');
-- // Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
-- // Create the query and assign to var
$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(240) NOT NULL,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';
-- // Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

-- EXEC RETURNS NUMBER OF ROWS
-- // Create INSERT query
$query = "INSERT INTO users (email, name) VALUES ('ben@codeup.com', 'Ben Batschelet')";

-- // Execute Query
$numRows = $dbc->exec($query);
echo "Inserted $numRows row." . PHP_EOL;

-- LAST INSERT ID
$users = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($users as $user) {
    $query = "INSERT INTO users (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}












