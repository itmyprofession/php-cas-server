php-cas-server
==============

Pure PHP server that partially implements CAS 2.0, SAML 2.x. If tomcat gives you headaches, this might be for you.

Prereqs
=======

- PHP 5.2+
- memcached
- OCI for Oracle auth if you need Oracle backend

Ubuntu 10.10 Quick Install
==========================

apt-get install php5-memcached libapache2-mod-php5 php5-dev libaio1
wget -np -qc http://oss.oracle.com/el4/RPM-GPG-KEY-oracle -O - | apt-key add -
 - download basic and SKD packages from http://www.oracle.com/technology/tech/oci/instantclient/instantclient.html if you need Oracle backend
mkdir -p /opt/oracle/
cd /opt/oracle/
unzip instantclient-basic-linux-x86-64-11.2.0.2.0.zip
unzip instantclient-sdk-linux-x86-64-11.2.0.2.0.zip
ln -s instantclient_11_2/ instantclient
echo /opt/oracle/instantclient >> /etc/ld.so.conf
ldconfig
cd instantclient
ln -s libclntsh.so.11.1 libclntsh.so
ln -s libocci.so.11.1 libocci.so
pecl install oci8
 - for lib path use instantclient,/opt/oracle/instantclient
echo 'extension=oci8.so' > /etc/php5/apache2/conf.d/oci8.ini
/etc/init.d/apache2 restart
echo '<?phpinfo();?>' > /var/www/phpinfo.php
 - point browser to http://server/phpinfo.php and check that oci8 extension is loaded

Federation and proxy install
===========================
view README_FEDERATION and README_PROXY files for information.


Authors
=======
Piere-Gilles Levallois <pgl@erasme.org>
Michel Blanc <mblanc@erasme.org> (but kick the above guy if that thing doesn't work)

