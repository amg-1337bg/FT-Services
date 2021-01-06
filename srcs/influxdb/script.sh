service influxdb start
sh create_databases.sh
telegraf -config /etc/telegraf.conf
