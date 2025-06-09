#!/bin/bash

#Install a package from github.com using git.
#Shallow cloning is used to save space. This includes the main repository and all of its submodules.
#Arguments:
#  $1: Repository name, in the form of a relative URL
#  $2: Target directory
#  $3: required version, in the form of a branch or tag name.
rm -rf $2 && \
git clone --depth 1 -b $3 --recurse-submodules --shallow-submodules https://github.com/$1 $2
