pgrep telegraf

if [ $? -gt 0 ]
then
        exit 1
fi

pgrep vsftpd

if [ $? -gt 0 ]
then
        exit 1
fi