#!/bin/bash
if ! command -v php > /dev/null; then
   echo "php is !installed"
   exit
fi
php -f ./db/create.php