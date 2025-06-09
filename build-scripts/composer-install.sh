#!/bin/bash

#Install a composer dependency without development packages.
#Arguments:
#  $1: package name.
#  $2: package version.
COMPOSER=composer.local.json php composer.phar require --no-update $1:$2
php composer.phar update $1 --no-dev
