# Laggron
Web interface to manage routes to working with multiple LAN access.

Infos about the context: https://lilian.bazille.me/dualWan/

## Installation
Instructions for Debian 9.

Install Apache2 and PHP7.

```# apt update ```

```# apt install apache2 php7 ```

Laggron needs to execute ```ip``` commands with root rights (to add/remove routes, etc.). Add the following line in ```/etc/sudoers```:

```www-data ALL=(ALL) NOPASSWD: /bin/ip```

Put files to ```/var/www/html``` (or other folder, ajust your Apache config).

Modify your Apache VirtualHost to point to the correct DocumentRoot (public folder):

```DocumentRoot /var/www/html/public```
