#! /bin/bash

sudo apt-get install google-chrome-stable pencil gimp inkscape zsh terminator adobe-flashplugin opera evolution deluge krusader k3b vlc rhythmbox pianobar gwibber pidgin xchat redshift skype pidgin-skype synapse libreoffice dropbox gparted git firefox calibre vim openssh-server openvpn

git clone https://github.com/mjdugan14/Code_Repo.git ~/src
echo "Code repo cloned"
cp ~/src/Code_Repo/Bash/zshrc ~/.zshrc
echo "====>> Done importing zshrc from code repo"
cp ~/src/Code_Repo/Bash/bashrc ~/.bashrc
echo "====>> Done importing bashrc from code repo"


