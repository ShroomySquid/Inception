#!/bin/bash

mkdir -p /var/run/mysql
chown -R mysql:mysql /var/lib/mysql

mysql_install_db --datadir=/var/lib/mysql --user=mysql --skip-test-db >> /dev/null

echo "FLUSH PRIVILEGES;" >> db1.sql
echo "CREATE DATABASE IF NOT EXISTS $db_name ;" > db1.sql
echo "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_pwd' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON $db_name.* TO '$db_user'@'%' ;" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysqld --user=mysql --bootstrap < db1.sql

rm -f db1.sql

exec mysqld_safe
