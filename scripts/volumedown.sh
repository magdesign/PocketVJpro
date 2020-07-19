#!/bin/bash

# volume down for mplayer

#is started via ssh, set the screen parameter
#test without!
export DISPLAY=:0

#xdotool key 0

mplayerid=`xwininfo -name MPlayer |grep 'Window id:' |cut -d" " -f4`
if [ -n "$mplayerid" ]; then
wmctrl -i -a "$mplayerid"
fi
xdotool key 9

exit



