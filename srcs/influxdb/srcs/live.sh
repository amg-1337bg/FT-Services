pgrep telegraf

if [ $? -gt 0 ]
then
        exit 1
fi

pgrep /usr/sbin/influxd

if [ $? -gt 0 ]
then
        exit 1
fi