pgrep telegraf

if [ $? -gt 0 ]
then
        exit 1
fi

pgrep influxd

if [ $? -gt 0 ]
then
        exit 1
fi