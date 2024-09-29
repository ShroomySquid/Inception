#!/bin/bash

sudo service mysql start 

echo "CREATE DATABASE IF NOT EXISTS $db1_name ;" > db1.sql
echo "CREATE USER IF NOT EXISTS '$db1_user'@'%' IDENTIFIED BY '$db1_pwd' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON $db1_name.* TO '$db1_user'@'%' ;" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql -uroot -p"$MYSQL_ROOT_PASSWORD" < db1.sql

echo "running mysqld..."

mysqld_safe --sjip-grant-tables

echo "mysqld done"
