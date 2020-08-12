service mysql start

#Создание БД
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password

#Создание ssl
mkdir /etc/skarry
openssl req -newkey rsa:4096 \
 -x509 \
 -sha256 \
 -days 365 \
 -nodes \
 -out /etc/skarry/localhost.crt \
 -keyout /etc/skarry/localhost.key \
 -subj "/C=RU/ST=Tatarstan/L=Kazan/O=21School/OU=IT Department/CN=localhost"

service php7.3-fpm start
service nginx start
bash
