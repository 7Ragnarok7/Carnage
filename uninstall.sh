#!/bin/bash

if [ $(whoami) != 'root' ]; then
	echo "Please run this script using sudo."
	exit
fi

rm /usr/bin/carnage
rm -rf /usr/share/carnage/
echo -e "\n.......................Carnage UNINSTALLED............................"
echo -e "\nIt's sad to see you leave :(\n"
