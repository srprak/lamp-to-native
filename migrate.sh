# remove default website
#------------------
cd /opt/bitnami/apache2/htdocs
rm -rf *

# clone github repo
git clone -b loft https://github.com/srprak/lamp-to-native

# create database
#------------------

cat /home/bitnami/htdocs/data/init.sql | /opt/bitnami/mysql/bin/mysql -u root -p$(cat /home/bitnami/bitnami_credentials)

