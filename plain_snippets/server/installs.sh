#! /bin/bash

sudo apt-get install google-chrome-stable pencil gimp inkscape zsh terminator adobe-flashplugin opera evolution deluge krusader k3b vlc rhythmbox pianobar gwibber pidgin xchat redshift skype pidgin-skype synapse libreoffice dropbox gparted git firefox calibre
echo "Installation finished"
read -p "Move uppercase directories to lowercase?" yn
case $yn in
	[Yy]* ) mv ~/Documents/ ~/documents;echo "Documents=>documents";mv ~/Downloads/ ~/downloads;echo "Downloads=>downloads";mv ~/Music/ ~/music;echo "Music=>music";mv ~/Pictures/ ~/pictures;echo "Pictures=>pictures"; break;;
	[Nn]* ) break;;
read -p "Remove template and video directories?" yn
case $yn in
	[Yy]* ) rm -rf ~/Templates/;echo "Removed templates";rm -rf ~/Videos/;echo "Removed videos"; break;;
	[Nn]* ) break;;
read -p "Create web and source directories?" yn
case $yn in
	[Yy]* ) mkdir ~/src;echo "Source directory created"mkdir ~/web;echo "Web directory created"; break;;
	[Nn]* ) break;;


git clone https://github.com/mjdugan14/Code_Repo.git ~/src
echo "Code repo cloned"
cp ~/src/Code_Repo/Bash/zshrc ~/.zshrc
echo "====>> Done importing zshrc from code repo"
cp ~/src/Code_Repo/Bash/bashrc ~/.bashrc
echo "====>> Done importing bashrc from code repo"


