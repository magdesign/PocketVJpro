#!/bin/bash

# prevents from opening more than one instance
killall -9 mplayer
killall -9 mpv
killall -9 feh
#is started via ssh, set the screen parameter
export DISPLAY=:0

sleep 1

feh -Z -q -Y /home/pocketvjpro/Pictures/testscreen.png &

exit



