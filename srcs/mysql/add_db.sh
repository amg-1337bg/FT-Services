mysql -e "create database wordpress;
grant all privileges on wordpress.* to 'u_wordpress'@'localhost' identified by 'p_wordpress';
flush privileges;"
