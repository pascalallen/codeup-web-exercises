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













