#!/bin/bash

rm latest*

wget https://wordpress.org/latest.tar.gz

tar -xvzf latest.tar.gz

sudo cp -R /home/vagrant/wordpress/* /home/vagrant/

sudo rm -rf wordpress