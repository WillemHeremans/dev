
# _*Les bases de données*_

#connection vers bd

mysql

ou

mysql -u root -p mysql

#connection vers bd XAMPP
/opt/lampp/bin/mysql (-u root)


# import BD en ligne de commande
mysql -u root -p TEST_becode < TEST_becode.sql

# export BD en ligne de commande
mysql -u root -p TEST_becode > TEST_becode.sql




#phpMyAdmin
(vim) /etc/phpMyAdmin/config.inc.php

> $cfg['Servers'][$i]['AllowNoPassword'] = TRUE

(vim) /etc/httpd/conf.d/phpMyAdmin.conf

> require IP (allow IP)



