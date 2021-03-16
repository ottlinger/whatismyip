# whatismyip
Simple webapp that shows the caller's IP information for remote backup et.al.

[![GPL v3.0](https://img.shields.io/github/license/ottlinger/whatismyip.svg)](https://www.gnu.org/licenses/gpl.html)

[![StyleCI](https://github.styleci.io/repos/248326026/shield?branch=master)](https://github.styleci.io/repos/248326026?branch=master)

## Purpose

This webapp is a little helper to show

* browser information
* caller's IP address

in order to start remote sessions or SSH into boxes :)

## Local setup
If you start the application with the delivered docker-compose file will yield a running instance at

http://localhost:8888

## Launch locally

```
$ docker-compose up
Starting whatismyip_php-apache_1 ... done
Attaching to whatismyip_php-apache_1
php-apache_1  | AH00558: apache2: Could not reliably determine the server's fully qualified domain name, using 172.20.0.2. Set the 'ServerName' directive globally to suppress this message
php-apache_1  | AH00558: apache2: Could not reliably determine the server's fully qualified domain name, using 172.20.0.2. Set the 'ServerName' directive globally to suppress this message
php-apache_1  | [Tue Mar 16 14:50:30.660308 2021] [mpm_prefork:notice] [pid 1] AH00163: Apache/2.4.38 (Debian) PHP/8.0.0 configured -- resuming normal operations
php-apache_1  | [Tue Mar 16 14:50:30.660904 2021] [core:notice] [pid 1] AH00094: Command line: 'apache2 -D FOREGROUND'

```
