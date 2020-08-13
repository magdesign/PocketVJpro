<?php

//# Shortcuts




//# Video  Section

//# Stop

if ($_GET['action'] == 'stop') {
	$outputtext =  "stop";
	system ("sudo /var/www/html/sync/./stop.sh");
	
	//system ("sudo su - pocketvjpro -c 'sudo killall -9 mpv'");
	//system ("sudo su - pocketvjpro -c 'sudo killall -9 mplayer'");
	//system ("sudo su - pocketvjpro -c 'sudo killall -9 feh'");
}

//# Pause

if ($_GET['action'] == 'pause') {
	$outputtext =  "pause/unpause";
	//system ("sudo /var/www/html/sync/./pause.sh");
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/./pause.sh &' > /dev/null 2>&1 ");
}


//# Deutsch
if ($_GET['action'] == 'start_de1') {
	$outputtext =  "start video DE_01.mov/DE_01.mp4 ";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_DE1.sh &' > /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_de2') {
	$outputtext =  "start video DE_02.mov / DE_02.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_DE2.sh &'> /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_de3') {
	$outputtext =  "start video DE_02.mov/DE_02.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_DE3.sh &'> /dev/null 2>&1 ");

}

//# French
if ($_GET['action'] == 'start_fr1') {
	$outputtext =  "start video FR_01.mov/FR_01.mp4 ";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_FR1.sh &' > /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_fr2') {
	$outputtext =  "start video FR_02.mov / FR_02.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_FR2.sh &'> /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_fr3') {
	$outputtext =  "start video FR_03.mov/FR_03.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_FR3.sh &'> /dev/null 2>&1 ");

}

//#English

if ($_GET['action'] == 'start_en1') {
	$outputtext =  "start video EN_01.mov/EN_01.mp4 ";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_EN1.sh & ' > /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_en2') {
	$outputtext =  "start video EN_02.mov / EN_02.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_EN2.sh &'> /dev/null 2>&1 ");

}

if ($_GET['action'] == 'start_en3') {
	$outputtext =  "start video EN_03.mov/EN_03.mp4";
    system ("sudo su - pocketvjpro -c '/var/www/html/sync/./START_EN3.sh &'> /dev/null 2>&1 ");

}






//# power, reboot

if ($_GET['action'] == 'reboot') {
	$outputtext =  "reboot";
    system ("sudo reboot");

}

if ($_GET['action'] == 'shutdown') {
	$outputtext =  "shutdown";
    system ("sudo poweroff");

}



//# testscreen

if ($_GET['action'] == 'testscreen') {
	$outputtext =  "testscreen";
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/testscreen.sh &'>  /dev/null 2>&1 ");

}

//# Volume

if ($_GET['action'] == 'volume_up') {
	$outputtext =  "volume_up";
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/volumeup.sh &'>  /dev/null 2>&1 ");

}

if ($_GET['action'] == 'volume_down') {
	$outputtext =  "volume_down";
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/volumedown.sh &'>  /dev/null 2>&1 ");

}

if ($_GET['action'] == 'volume_mute') {
	$outputtext =  "volume_mute";
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/volumemute.sh &'>  /dev/null 2>&1 ");

}

if ($_GET['action'] == 'volume_save') {
	$outputtext =  "not coded yet";

}

//#Filehandling


if ($_GET['action'] == 'diskspace') {
    $output = shell_exec('df -H --output=used,avail /dev/nvme0n1p2');
	$preoutputtext =  "<pre>$output</pre>";
	//$outputtext = wordwrap($preoutputtext, 124, "<br />\n");
    $outputtext = $preoutputtext;
}

if ($_GET['action'] == 'codecinfo') {
	$output = shell_exec('mediainfo --Inform="General;%CompleteName%  Format: %Format% Codec: %CodecID%  Bitrate: %OverallBitRate%  " /home/pocketvjpro/Videos/*');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 50, "<br />\n");
}

if ($_GET['action'] == 'movieinfo') {
	$output = shell_exec('mediainfo --Inform="Video;Videosize: %Width%x%Height% pixel  " /home/pocketvjpro/Videos/*');
	$preoutputtext2 = "<pre>$output</pre>";
	$newtext = wordwrap($preoutputtext2, 32, "<br />\n");
	$outputtext = "$newtext\n";
}

if ($_GET['action'] == 'eject') {
	$outputtext =  "usb stick unmounted";
	system("sudo umount /dev/sda1");
	system("sudo umount /dev/sdb1");
}

if ($_GET['action'] == 'mount') {
	$outputtext =  "usb stick mounted";
	system("sudo mount /dev/sda1 /home/pocketvjpro/Videos/sdcard/");
	system("sudo mount /dev/sdb1 /home/pocketvjpro/Videos/usb/");
}

if ($_GET['action'] == 'clean') {
	$outputtext =  "clean hidden files";
	system("sudo rm -R /home/pocketvjpro/Videos/.[DTf_]*");
	system("sudo rm -R /home/pocketvjpro/Videos/__MACOSX");
	system("sudo rm -Rf /home/pocketvjpro/Videos/.Spotlight-V100/");
}


if ($_GET['action'] == 'fixpermission') {
	$outputtext =  "fix permission";
	system("sudo chmod 755 -R /var/www/html");
	system("sudo chmod 777 -R /home/pocketvjpro/Videos/");
}

//#scripts


if ($_GET['action'] == 'udp_restart') {
	$outputtext =  "restart udp listener";
	system("sudo killall -9 socat");
	system("sleep 2");
        system ("sudo su - pocketvjpro -c 'socat udp-l:5000,fork system:/var/www/html/sync/./commandmapping.sh'>  /dev/null 2>&1");
}

if ($_GET['action'] == 'jack_restart') {
	system("sudo killall -9 jackdbus");
	system ("sudo su - pocketvjpro -c 'jack_control  start &'>  /dev/null 2>&1");
	$outputtext =  "restart audiointerface jackdbus";
}

if ($_GET['action'] == 'remote_start') {
	$outputtext =  "starting remote ssh login, not implemented yet";
}

if ($_GET['action'] == 'getgpu') {
	$output = shell_exec('sudo nvidia-smi');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'gettemp') {
	$output = shell_exec('sudo sensors');
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}


//# Display IP

if ($_GET['action'] == 'ipwifi') {
    $output = shell_exec("sudo /sbin/ifconfig -a wlp2s0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'iplan') {
    $output = shell_exec("sudo /sbin/ifconfig -a enp6s0 | awk '/(cast)/ { print $2 }' | cut -d':' -f2 | head -1");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = wordwrap($preoutputtext, 40, "<br />\n");
}

if ($_GET['action'] == 'macid') {
    $output = shell_exec("sudo /sbin/ifconfig");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}


//#parse resolutions of connected screens:
if ($_GET['action'] == 'parse') {
//#$output = shell_exec("export DISPLAY=:0 |sudo get-edid | parse-edid");
    $output = shell_exec("sudo get-edid | parse-edid");
	$preoutputtext =  "<pre>$output</pre>";
	$outputtext = "$preoutputtext";
}

if ($_GET['action'] == 'customfunction1') {
	$outputtext =  "Surround Testfile";
	system ("sudo su - pocketvjpro -c '/var/www/html/sync/surroundtest.sh &'>  /dev/null 2>&1 ");

}

//#set volume to

if ($_GET['action'] == 'setvolume_100') {
	$outputtext =  "set volume to 100";
	system ("sudo /var/www/html/sync/./stop.sh");
	system("sudo cp /var/www/html/sync/START_DE1_100.sh /var/www/html/sync/START_DE1.sh");
	system("sudo cp /var/www/html/sync/START_EN1_100.sh /var/www/html/sync/START_EN1.sh");
	system("sudo cp /var/www/html/sync/START_FR1_100.sh /var/www/html/sync/START_FR1.sh");
	system("sudo cp /var/www/html/sync/START_DE2_100.sh /var/www/html/sync/START_DE2.sh");
	system("sudo cp /var/www/html/sync/START_EN2_100.sh /var/www/html/sync/START_EN2.sh");
	system("sudo cp /var/www/html/sync/START_FR2_100.sh /var/www/html/sync/START_FR2.sh");
	system("sudo cp /var/www/html/sync/START_DE3_100.sh /var/www/html/sync/START_DE3.sh");
	system("sudo cp /var/www/html/sync/START_EN3_100.sh /var/www/html/sync/START_EN3.sh");
	system("sudo cp /var/www/html/sync/START_FR3_100.sh /var/www/html/sync/START_FR3.sh");


}

if ($_GET['action'] == 'setvolume_75') {
	$outputtext =  "set volume to 75";
	system ("sudo /var/www/html/sync/./stop.sh");
	system("sudo cp /var/www/html/sync/START_DE1_75.sh /var/www/html/sync/START_DE1.sh");
	system("sudo cp /var/www/html/sync/START_EN1_75.sh /var/www/html/sync/START_EN1.sh");
	system("sudo cp /var/www/html/sync/START_FR1_75.sh /var/www/html/sync/START_FR1.sh");
	system("sudo cp /var/www/html/sync/START_DE2_75.sh /var/www/html/sync/START_DE2.sh");
	system("sudo cp /var/www/html/sync/START_EN2_75.sh /var/www/html/sync/START_EN2.sh");
	system("sudo cp /var/www/html/sync/START_FR2_75.sh /var/www/html/sync/START_FR2.sh");
	system("sudo cp /var/www/html/sync/START_DE3_75.sh /var/www/html/sync/START_DE3.sh");
	system("sudo cp /var/www/html/sync/START_EN3_75.sh /var/www/html/sync/START_EN3.sh");
	system("sudo cp /var/www/html/sync/START_FR3_75.sh /var/www/html/sync/START_FR3.sh");	


}

if ($_GET['action'] == 'setvolume_60') {
	$outputtext =  "set volume to 60";
	system ("sudo /var/www/html/sync/./stop.sh");
	system("sudo cp /var/www/html/sync/START_DE1_60.sh /var/www/html/sync/START_DE1.sh");
	system("sudo cp /var/www/html/sync/START_EN1_60.sh /var/www/html/sync/START_EN1.sh");
	system("sudo cp /var/www/html/sync/START_FR1_60.sh /var/www/html/sync/START_FR1.sh");
	system("sudo cp /var/www/html/sync/START_DE2_60.sh /var/www/html/sync/START_DE2.sh");
	system("sudo cp /var/www/html/sync/START_EN2_60.sh /var/www/html/sync/START_EN2.sh");
	system("sudo cp /var/www/html/sync/START_FR2_60.sh /var/www/html/sync/START_FR2.sh");
	system("sudo cp /var/www/html/sync/START_DE3_60.sh /var/www/html/sync/START_DE3.sh");
	system("sudo cp /var/www/html/sync/START_EN3_60.sh /var/www/html/sync/START_EN3.sh");
	system("sudo cp /var/www/html/sync/START_FR3_60.sh /var/www/html/sync/START_FR3.sh");	


}

if ($_GET['action'] == 'setvolume_50') {
	$outputtext =  "set volume to 50";
	system ("sudo /var/www/html/sync/./stop.sh");
	system("sudo cp /var/www/html/sync/START_DE1_50.sh /var/www/html/sync/START_DE1.sh");
	system("sudo cp /var/www/html/sync/START_EN1_50.sh /var/www/html/sync/START_EN1.sh");
	system("sudo cp /var/www/html/sync/START_FR1_50.sh /var/www/html/sync/START_FR1.sh");
	system("sudo cp /var/www/html/sync/START_DE2_50.sh /var/www/html/sync/START_DE2.sh");
	system("sudo cp /var/www/html/sync/START_EN2_50.sh /var/www/html/sync/START_EN2.sh");
	system("sudo cp /var/www/html/sync/START_FR2_50.sh /var/www/html/sync/START_FR2.sh");
	system("sudo cp /var/www/html/sync/START_DE3_50.sh /var/www/html/sync/START_DE3.sh");
	system("sudo cp /var/www/html/sync/START_EN3_50.sh /var/www/html/sync/START_EN3.sh");
	system("sudo cp /var/www/html/sync/START_FR3_50.sh /var/www/html/sync/START_FR3.sh");


}


echo $outputtext;
?>
