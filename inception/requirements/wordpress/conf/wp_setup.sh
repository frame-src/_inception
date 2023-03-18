#!bin/bash

cd /var/www/wordpress

wp core config	--dbhost=mariadb \
				--dbname=wordpress \
				--dbuser=frmessin \
				--dbpass=coffee \
				--allow-root

wp core install --title=Inception \
				--admin_user=wp \
				--admin_password=pass \
				--admin_email=iframe@mail.com \
				--url=frmessin.42.fr \
				--allow-root

wp user create author random@gmail.com --role=author --user_pass=pass --allow-root

cd -

php-fpm7.3 -F