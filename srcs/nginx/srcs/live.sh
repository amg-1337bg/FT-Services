pgrep nginx:

if [ $? -gt 0 ]
then
        exit 1
fi

pgrep telegraf

if [ $? -gt 0 ]
then
        exit 1
fi

pgrep sshd:

if [ $? -gt 0 ]
then
        exit 1
fi