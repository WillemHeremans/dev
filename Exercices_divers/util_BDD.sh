#!/bin/bash

# _*Les bases de données*_

#connection vers BDD

mysql

ou

mysql -u root -p mysql

#connection vers BDD XAMPP
/opt/lampp/bin/mysql (-u root)



# import BDD en ligne de commande
mysql -u root (-p) TEST_becode < TEST_becode.sql

# export BDD en ligne de commande
mysql -u root (-p) TEST_becode > TEST_becode.sql




#phpMyAdmin
(vim) /etc/phpMyAdmin/config.inc.php

> $cfg['Servers'][$i]['AllowNoPassword'] = TRUE

(vim) /etc/httpd/conf.d/phpMyAdmin.conf

> require IP (allow IP)



