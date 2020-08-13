#!/bin/bash

# prevents from opening more than one instance amd removes imageplayer

/var/www/html/sync/stop.sh &

#is started via ssh, set the screen parameter
export DISPLAY=:0

sleep 1

#VLC, has a slight white flicker at start
#vlc --no-video-title  --no-osd --aout jack -f /home/pocketvjpro/Videos/DE_01*

#mplayer does not support all codecs
mplayer -channels 6 -osdlevel 0 -volume 100 -fs /home/pocketvjpro/Videos/DE_02* >/dev/null &
#play dbox
#mpv /home/pocketvjpro/Videos/DBOX.wav


#clean desktop
wmctrl -c konsole &

wmctrl -k on &

#mpv does not goe fullscreen when started from cmd
#mpv --ao=jack --audio-channels 8 -osd-level 0 -fs /home/pocketvjpro/Videos/DE_01*
#mpv --ao=jack --audio-channels 8 -fs /home/pocketvjpro/Videos/DE_01*

#ffplay does not support jack audio





exit



