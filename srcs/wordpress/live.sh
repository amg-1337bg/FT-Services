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

pgrep php-fpm:

if [ $? -gt 0 ]
then
        exit 1
fi