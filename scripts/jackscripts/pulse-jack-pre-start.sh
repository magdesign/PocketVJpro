#!/bin/bash
pactl unload-module module-alsa-card
pactl unload-module module-jack-sink
pactl unload-module module-jack-source
sleep 1
pacmd suspend true

