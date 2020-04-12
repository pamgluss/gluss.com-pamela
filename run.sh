## Using FTP with Bash is... not recommended but let's see if we can do it

brew install inetutils

HOST=$GODADDY_HOST
USER=$GODADDY_USER
PASSWD=$GODADDY_PASSWORD
FILE='file.txt'

ftp -n $HOST <<END_SCRIPT
quote USER $USER
quote PASS $PASSWD
binary
put $FILE
quit
END_SCRIPT
exit 0