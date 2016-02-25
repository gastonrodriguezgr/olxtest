# olxtest
test de listado para olx


**REQUIREMENTS**
Php 5.6 or higher
More details requirements [Symfony 2.8.2](http://symfony.com/doc/current/book/installation.html)

## INSTALATION AND CONFIGURATION
_**Creating the proyect**_
1. Do Git co from https://github.com/gastonrodriguezgr/olxtest.git to your local (E.G /var/www/olxapp)
2. Set apache permissions on log and cache folders. http://symfony.es/documentacion/como-solucionar-el-problema-de-los-permisos-de-symfony2/

_**Configuration**_
> If you are on local, set a virtualhost
	
        ServerAdmin webmaster@localhost
        ServerName dev.olxtest.com.ar
        DocumentRoot "/var/www/TU_DIRECTORIO_PROYECTO/web/"
        DirectoryIndex index.php
        <Directory "/var/www/TU_DIRECTORIO_PROYECTO/web/">
                Require all granted
        </Directory>
        ErrorLog /var/log/apache2/olx.err

        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
        LogLevel warn

        CustomLog /var/log/apache2/olx.log combined
	

> Dont forget to setup your /etc/hosts

### RUNNING THE SYSTEM
1. If you are in local, in your browser just enter to http://dev.olxtest.com.ar/app_dev.php
2. If you had installed all the system on a remote server , you can access to http://dev.olxtest.com.ar
