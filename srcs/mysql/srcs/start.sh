/etc/init.d/mariadb setup
service mariadb start
sh add_db.sh
telegraf -config /etc/telegraf.conf