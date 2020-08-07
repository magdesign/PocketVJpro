#!/bin/bash

#we read all the messages received from UDP and parse them to a function

read MESSAGE


##############
# STOP Command
##############


if [ "$MESSAGE" = "stop" ]
  then
  ( /var/www/html/sync/stop.sh & )
    echo "player killed"
    exit
  fi



##########################
# Commands to start Videos:
###########################


if [ "$MESSAGE" = "START_DE1" ]
  then
    ( /var/www/html/sync/START_DE1.sh & )
    echo "we start in german"
    exit
  fi


if [ "$MESSAGE" = "START_DE2" ]
  then
    ( /var/www/html/sync/START_DE2.sh & )
    echo "we start in german 02"
    exit
  fi


if [ "$MESSAGE" = "START_DE3" ]
  then
    ( /var/www/html/sync/START_DE3.sh & )
    echo "we start in german 03"
    exit
  fi



# french

if [ "$MESSAGE" = "START_FR1" ]
  then
    ( /var/www/html/sync/START_FR1.sh & )
    echo "we start in french"
    exit
  fi 

if [ "$MESSAGE" = "START_FR2" ]
  then
    ( /var/www/html/sync/START_FR2.sh & )
    echo "we start in french 02"
    exit
  fi 

if [ "$MESSAGE" = "START_FR3" ]
  then
    ( /var/www/html/sync/START_FR3.sh & )
    echo "we start in french 03"
    exit
  fi 



#english

if [ "$MESSAGE" = "START_EN1" ]
  then
    ( /var/www/html/sync/START_EN1.sh & )
    echo "we start in english"
    exit
  fi 

if [ "$MESSAGE" = "START_EN2" ]
  then
    ( /var/www/html/sync/START_EN2.sh & )
    echo "we start in english 02"
    exit
  fi 

if [ "$MESSAGE" = "START_EN3" ]
  then
    ( /var/www/html/sync/START_EN3.sh & )
    echo "we start in english 03"
    exit
  fi 



#################
# shutdown, reboot
##################


if [ "$MESSAGE" = "reboot" ]
  then
    sudo reboot
    #echo "reboot"
    exit
  fi


if [ "$MESSAGE" = "shutdown" ]
  then
    sudo poweroff
    #echo "poweroff"
    exit
  fi

##################
# testscreen
################

if [ "$MESSAGE" = "test" ]
  then
    ( /var/www/html/sync/testscreen.sh & )
    echo "testscreen"
    exit
  fi

#########
# Volume
#########

if [ "$MESSAGE" = "volumeup" ]
  then
    ( /var/www/html/sync/volumeup.sh & )
    echo "volumeup"
    exit
  fi

if [ "$MESSAGE" = "volumedown" ]
  then
    ( /var/www/html/sync/volumedown.sh & )
    echo "volumeup"
    exit
  fi

if [ "$MESSAGE" = "volumemute" ]
  then
    ( /var/www/html/sync/volumemute.sh & )
    echo "volumeup"
    exit
  fi

if [ "$MESSAGE" = "volumeunmute" ]
  then
    ( /var/www/html/sync/volumemute.sh & )
    echo "volumeup"
    exit
  fi

if [ "$MESSAGE" = "volume100" ]
  then
    ( /var/www/html/sync/stop.sh & )
    ( sleep 2 )
    ( sudo cp /var/www/html/sync/START_DE1_100.sh /var/www/html/sync/START_DE1.sh & )
    ( sudo cp /var/www/html/sync/START_EN1_100.sh /var/www/html/sync/START_EN1.sh & )
    ( sudo cp /var/www/html/sync/START_FR1_100.sh /var/www/html/sync/START_FR1.sh & )
    echo "volume100"
    exit
  fi

if [ "$MESSAGE" = "volume75" ]
  then
    ( /var/www/html/sync/stop.sh & )
    ( sleep 2 )
    ( sudo cp /var/www/html/sync/START_DE1_75.sh /var/www/html/sync/START_DE1.sh & )
    ( sudo cp /var/www/html/sync/START_EN1_75.sh /var/www/html/sync/START_EN1.sh & )
    ( sudo cp /var/www/html/sync/START_FR1_75.sh /var/www/html/sync/START_FR1.sh & )
    echo "volume75"
    exit
  fi

if [ "$MESSAGE" = "volume60" ]
  then
    ( /var/www/html/sync/stop.sh & )
    ( sleep 2 )
    ( sudo cp /var/www/html/sync/START_DE1_60.sh /var/www/html/sync/START_DE1.sh & )
    ( sudo cp /var/www/html/sync/START_EN1_60.sh /var/www/html/sync/START_EN1.sh & )
    ( sudo cp /var/www/html/sync/START_FR1_60.sh /var/www/html/sync/START_FR1.sh & )
    echo "volume60"
    exit
  fi

if [ "$MESSAGE" = "volume50" ]
  then
    ( /var/www/html/sync/stop.sh & )
    ( sleep 2 )
    ( sudo cp /var/www/html/sync/START_DE1_50.sh /var/www/html/sync/START_DE1.sh & )
    ( sudo cp /var/www/html/sync/START_EN1_50.sh /var/www/html/sync/START_EN1.sh & )
    ( sudo cp /var/www/html/sync/START_FR1_50.sh /var/www/html/sync/START_FR1.sh & )
    echo "volume50"
    exit
  fi





########
# ping #
########

if [ "$MESSAGE" = "ping" ]
  then
    echo "yes, pocketvjpro is alive"
    exit
  fi

