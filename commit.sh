#!/bin/sh

git add *
git commit -m "$1"
echo "Commit message: $1"
git push -u origin master
