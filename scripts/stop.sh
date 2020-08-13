#!/bin/bash



# stop every videoplayer

killall -9 cvlc &
killall -9 vlc &
killall -9 mplayer &
killall -9 mpv &

#stop testscreen

killall -9 feh &

#hide every window on desktop
export DISPLAY=:0
sudo su - pocketvjpro -c 'wmctrl -k on &'>  /dev/null 2>&1

#hide mouse pointer
unclutter -idle 0 &

sleep 1


exit



