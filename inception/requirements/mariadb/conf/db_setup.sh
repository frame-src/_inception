#!/bin/bash

service mysql start

# databasename
mysql -u root -e "CREATE DATABASE wordpress;" 
# user name, user password
mysql -u root -e "CREATE USER 'frmessin'@'%' IDENTIFIED BY 'coffee';"
# databasename, user name
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'frmessin'@'%';"
# reloads the MySQL privilege tables
mysql -u root -e "FLUSH PRIVILEGES;"
# admin root, password for root
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'coffee';"