mysql -e "create database wordpress;
grant all privileges on wordpress.* to 'root'@'%' identified by 'toor';
flush privileges;"
