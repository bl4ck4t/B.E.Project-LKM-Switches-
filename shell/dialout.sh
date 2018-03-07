#!/bin/sh
sudo adduser www-data dialout
service apache2 restart
