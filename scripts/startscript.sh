#!/bin/bash


#disconnect standard pulse outputs
#pactl unload-module module-alsa-card
#pactl unload-module module-jack-sink
#pactl unload-module module-jack-source
#sleep 1
#pacmd suspend true

#start jack server in background, pipe output
#in gui set to start minimized!!

#qjackctl -s &

#do the post scfript to genarte jack-sink
#sleep 5
#/var/www/html/sync/jackscripts/pulse-jack-post-start.sh 

#>  /dev/null 2>&1 


#hide mouse pointer

#unclutter -idle 1 &

#start udp listener

#socat -u udp-l:5000,fork system:/var/www/html/sync/./commandmapping.sh >  /dev/null 2>&1 &
sudo su - pocketvjpro -c 'socat udp-l:5000,fork system:/var/www/html/sync/./commandmapping.sh'>  /dev/null 2>&1

#hide all open windows on desktop
sudo su - pocketvjpro -c 'wmctrl -k on &'>  /dev/null 2>&1 &

#set screentearing
#for all 3 screens
#nvidia-settings --assign CurrentMetaMode="DP-0: nvidia-auto-select +0+0 {ForceCompositionPipeline=On}, HDMI-0: nvidia-auto-select +3840+0 {ForceCompositionPipeline=On}, HDMI-1: nvidia-auto-select +0+0 {ForceCompositionPipeline=On},"


#hide OSD on mplayer
#Add “osdlevel=0” to your ~/.mplayer/config file or add -osdlevel 0 on the mplayer command line
