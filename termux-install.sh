#!/bin/bash

echo -e "\n.....................INSTALLING Carnage..........................\n"
chmod +x carnage
apt-get update
apt-get install python3 python3-pip figlet
pip3 install -U pip
pip3 install -r requirements.txt
pyfiglet -L fonts/Bloody.flf
mkdir -p ~/../usr/share/carnage/
cp -f carnage ~/../usr/share/carnage/
ln -sf ~/../usr/share/carnage/carnage ~/../usr/bin/carnage
echo -e "\n......................INSTALLATION FINISHED......................"
echo -e "\nThanks for installing carnage.\nUse carnage -h or --help for usage instructions.\n"
