pgrep /usr/bin/telegraf

if [ $? -gt 0 ]
then
        exit 1
fi