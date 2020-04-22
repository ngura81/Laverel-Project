mysql -u root
mysql> USE mysql;
mysql> UPDATE user SET password=PASSWORD("NEWPASSWORD") WHERE User='root';
mysql> FLUSH PRIVILEGES;
mysql> quit

login to database
mysql -u root -p root;
enter: password
 
 
 
 cd ../opt/lampp/phpmyadmin
  sudo nano config.inc.php
  change false
  remove password


php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear
