#!/bin/bash

#Install a package from gerrit.wikimedia.org using git.
#Shallow cloning is used to save space. This includes the main repository and all of its submodules.
#Arguments:
#  $1: package name, as a relative location (apples for both repository URL and local directory).
#  $2: required version, in the form of a branch or tag name.
rm -rf $1 && \
git clone --depth 1 -b $2 --recurse-submodules --shallow-submodules\
    https://gerrit.wikimedia.org/r/mediawiki/$1 $1
