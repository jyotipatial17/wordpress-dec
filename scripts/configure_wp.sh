#!/bin/bash
echo "Configuring wp-config.php..."
# Modify wp-config.php here, if needed.
sudo sed -i 's/DB_NAME/jyoti/g' /var/www/html/wordpress/wp-config.php
sudo sed -i 's/DB_USER/jyoti_user/g' /var/www/html/wordpress/wp-config.php
sudo sed -i 's/DB_PASSWORD/shpreety2013./g' /var/www/html/wordpress/wp-config.php
sudo sed -i 's/DB_HOST/localhost/g' /var/www/html/wordpress/wp-config.php
