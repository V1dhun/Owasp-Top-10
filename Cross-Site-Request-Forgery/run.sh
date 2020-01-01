#!/bin/bash
if ! command -v php > /dev/null; then
   echo "php is !installed"
   exit
fi
php -S 0.0.0.0:8000