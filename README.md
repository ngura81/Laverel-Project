# Laverel-Project
Learn Laverel

Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
## Install Composer through Mac terminal--Paste the command below

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

## Make Composer Globally --Write the command below
$ mv composer.phar /usr/local/bin/composer

Note: If the above fails due to permissions, you may need to run it again with sudo.

Note: On some versions of macOS the /usr directory does not exist by default. If you receive the error "/usr/local/bin/composer: No such file or directory" then you must create the directory manually before proceeding: 
$ mkdir -p /usr/local/bin.

Install Nodejs and NPM

Install Laveral PHP framework
Visit laveral website and paste the command below
$composer global require laravel/installer

How to place the ~/.composer/vendor/bin directory in your PATH?

$ echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc

In order to check if it worked, logout and login again or execute

$ source ~/.bashrc

