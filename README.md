Documentation start project 
- Linux 

- Windows 
- XAMPP Control Panel
- Config
- ----------------
    #<VirtualHost url ////.com:80> 
    # DocumentRoot cd path..to..you..comp\dev-custom\public
    # ServerName url ////.com
    # <Directory "cd path..to..you..comp\dev-custom\public">
    #  Options Indexes FollowSymLinks
    #  Allow from all
    #  Require all granted
    #  IndexIgnore /
    #  RewriteEngine on
    #  RewriteCond %{REQUEST_FILENAME} !-f
    #  RewriteCond %{REQUEST_FILENAME} !-d
    #  RewriteRule . index.php
    # </Directory>
    #</VirtualHost>
------------------
- Hosts file
- 127.0.0.1 you url address
- Restart xampp (apache)
- Database mysql name create:
------------------
    # CREATE DATABASE name;
    # USE name;
    # mysql -u root -p > home/name.sql;
    # enter password;
------------------
- config/config_db.php - изменяем на свою DB,root,pass;
------------------
    # 'dsn' => 'mysql:host=localhost;dbname=;charset=utf8';
    # 'user' => '';
    # 'pass' => '';
------------------

-
- composer install -o
-
- login: admin
- pass: 123
-
