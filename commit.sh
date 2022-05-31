#!/bin/bash

git add .
read version < './version.txt';
git commit -m "Build $version"