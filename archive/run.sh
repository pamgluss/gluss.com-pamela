#!/bin/sh

## Using FTP with Bash is... not recommended but let's see if we can do it

echo "*** Install Linuxbrew ***"
sh -c "$(curl -fsSL https://raw.githubusercontent.com/Linuxbrew/install/master/install.sh)"

test -d ~/.linuxbrew && eval $(~/.linuxbrew/bin/brew shellenv)
test -d /home/linuxbrew/.linuxbrew && eval $(/home/linuxbrew/.linuxbrew/bin/brew shellenv)
test -r ~/.bash_profile && echo "eval \$($(brew --prefix)/bin/brew shellenv)" >>~/.bash_profile
echo "eval \$($(brew --prefix)/bin/brew shellenv)" >>~/.profile

echo '** Installing inetutils which gives us access to FTP**'
brew install inetutils

HOST=$GODADDY_HOST
USER=$GODADDY_USER
PASSWD=$GODADDY_PASSWORD

ftp -pinv $HOST <<END_SCRIPT
quote USER $USER
quote PASS $PASSWD
hash

mput *.html
mput *.md

mkdir css/
cd css/
lcd css/
mput *.css

mkdir ../js/
cd ../js/
lcd ../js/
mput *.js

mkdir ../img/
cd ../img/
lcd ../img/
mput *.*

bye
END_SCRIPT
exit 0