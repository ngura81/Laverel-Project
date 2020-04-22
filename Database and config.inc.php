mysql -u root
mysql> USE mysql;
mysql> UPDATE user SET password=PASSWORD("NEWPASSWORD") WHERE User='root';
mysql> FLUSH PRIVILEGES;
mysql> quit
 
 
 
 cd ../opt/lampp/phpmyadmin
  sudo nano config.inc.php
  change false
  remove password
