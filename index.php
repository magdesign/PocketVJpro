<!DOCTYPE html>
 
<!--  Last Published: Tue Jul 14 2020 10:05:38 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5f05972eeb8ac9df0d7a20a8" data-wf-site="5f05972eeb8ac956167a20a6">
<head>
  <meta charset="utf-8">
  <title>PocketVJ CP</title>
  <meta content="Used to control the awesome PocketVJ" name="description">
  <meta content="PocketVJ CP" property="og:title">
  <meta content="Used to control the awesome PocketVJ" property="og:description">
  <meta content="PocketVJ CP" property="twitter:title">
  <meta content="Used to control the awesome PocketVJ" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/pocketvj-cp-exhibition-463fa250d63710f5.webflow.css" rel="stylesheet" type="text/css">
  <script src="../js/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <!-- [if lt IE 9]><script src="../js/placeholders.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <!-- 
Code  below is for button tooltips
 -->
  <link rel="stylesheet" type="text/css" href="../themes/tooltipster.bundle.min.css">
  <link rel="stylesheet" type="text/css" href="../themes/tooltipster-sideTip-borderless.css">
  <!-- 
Code  below loads custom js for form submission without reload -->
  <script src="js/submitcppw.js"></script>
  <!-- Code  below is for beamer IP infos -->
  <script src="js/submitbeamerip.js"></script>
</head>
<body class="body">
  <div class="container w-container">
    <div>
      <div class="w-row">
        <div class="w-col w-col-6"><a href="https://pocketvj.com/" target="_blank" class="w-inline-block"><img src="images/PVJ_2019.svg" height="50" alt="" class="logo"></a></div>
        <div class="w-col w-col-6">
          <div class="release">PocketVJ Pro CP 0.1</div>
        </div>
      </div>
    </div>
    <div class="w-clearfix">
      <div class="shortcutsheader"><a href="?action=stop" id="action" tooltipster="top" title="Stop All" class="action w-inline-block"><img src="images/stop_icon.svg" width="30" alt="Stop All"></a></div>
      <div class="shortcutsheader"><a href="/extplorer/" tooltipster="top" title="FIlebrowser" target="_blank" class="w-inline-block"><img src="images/filebrowser_icon.svg" width="30" alt="Filebrowser"></a></div>
      <div class="shortcutsheader"><a href="?action=testscreen" tooltipster="top" title="Testscreen" class="action w-inline-block"><img src="images/testscreen_icon.svg" width="30" alt="" class="action"></a></div>
      <div class="shortcutsheader"><a href="?action=reboot" tooltipster="top" title="Reboot" class="action w-inline-block"><img src="images/power_icon.svg" width="30" alt="" class="action"></a></div>
      <div class="shortcutsheader"><a href="?action=shutdown" tooltipster="top" title="Shutdown" class="action w-inline-block"><img src="images/power_off_icon.svg" width="30" alt=""></a></div>
    </div>
    <div>
      <div class="html-embed w-embed">
        <div style="height:100%; overflow-y: auto; overflow-x: hidden;">
          <table width="90%" height="70" border="1" align="center">
            <tr>
              <td id="actions_output" width="360" height="88"></td>
              </tr><tr>
          </tr></table>
        </div>
      </div>
    </div>
    <div>
      <div data-duration-in="300" data-duration-out="100" data-easing="linear" class="w-tabs">
        <div class="tabs-menu w-tab-menu"><a data-w-tab="Filehandling" class="tab-link yellow1 w-inline-block w-tab-link"><img src="images/Filehandling_icon_01.svg" alt="" class="image_register"></a><a data-w-tab="Video" class="tab-link blue1 w-inline-block w-tab-link w--current"><img src="images/Video_icon_01.svg" alt="" class="image_register"></a><a data-w-tab="Aux" class="tab-link violett3 w-inline-block w-tab-link"><img src="images/aux_icons2..svg" alt="" class="image_register"></a><a data-w-tab="System" class="tab-link red1 w-inline-block w-tab-link"><img src="images/settings_icon_04.svg" alt="" class="image_register"></a></div>
        <div class="tabs-content w-tab-content">
          <div data-w-tab="Filehandling" class="yellow_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="heading">  <br>File Handling:</div>
              </div>
              <div class="w-col w-col-4">
                <div class="heading">  <br>USB:</div>
              </div>
              <div class="w-col w-col-4">
                <div class="heading"> <br>Info about stored files:</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4"><a href="?action=mount" class="button_orange action w-button">Mount USB</a></div>
              <div class="w-col w-col-4"><a href="?action=codecinfo" class="button_orange action w-button">Movie Codec Info</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4"><a href="?action=eject" class="button_orange action w-button">Eject USB</a></div>
              <div class="w-col w-col-4"><a href="?action=movieinfo" class="button_orange action w-button">Movie Resolution</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="/extplorer/" target="_blank" class="button_orange w-button">Filebrowser</a></div>
              <div class="w-col w-col-4">
                <div class="regular-text">for large files, use Filezilla via sftp://</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=diskspace" class="button_orange action w-button">Diskspace</a></div>
              <div class="w-col w-col-4"></div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=clean" class="button_orange action w-button">Clean hidden Files</a></div>
              <div class="w-col w-col-4">
                <div class="regular-text">Removes unwanted files mostly generated by osx computers.</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=fixpermission" target="_blank" class="button_orange w-button">Fix Permissions</a></div>
              <div class="w-col w-col-4">
                <div class="regular-text">Fixes read/write errors</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
          </div>
          <div data-w-tab="Video" class="blue1_pane w-tab-pane w--tab-active">
            <div class="w-row">
              <div class="w-col w-col-3">
                <div class="heading"> <br>Video:</div>
              </div>
              <div class="column w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=start_de1" class="buttonblue action w-button">START_DE1</a></div>
              <div class="w-col w-col-4"><a href="?action=start_de2" class="buttonblue action w-button">START_DE2</a></div>
              <div class="w-col w-col-4"><a href="?action=start_de3" class="buttonblue action w-button">START_DE3</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: DE_01</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: DE_02</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: DE_03</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=start_fr1" class="buttonblue action w-button">START_FR1</a></div>
              <div class="w-col w-col-4"><a href="?action=start_fr2" class="buttonblue action w-button">START_FR2</a></div>
              <div class="w-col w-col-4"><a href="?action=start_fr3" class="buttonblue action w-button">START_FR3</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: FR_01</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: FR_02</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: FR_03</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=start_en1" class="buttonblue action w-button">START_EN1</a></div>
              <div class="w-col w-col-4"><a href="?action=start_en2" class="buttonblue action w-button">START_EN2</a></div>
              <div class="w-col w-col-4"><a href="?action=start_en3" class="buttonblue action w-button">START_EN3</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: EN_01</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: EN_02</div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">Videoname: EN_03</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="regular-text"></div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text"></div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">For naming the videos, make sure that caption is UPPERCASE!<br>e.g. DE_01.mov</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4"><a href="?action=stop" class="buttonred action w-button">STOP</a></div>
              <div class="w-col w-col-4"><a href="?action=pause" class="buttonred action w-button">PAUSE / UNPAUSE</a></div>
              <div class="w-col w-col-4"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <div class="regular-text"></div>
              </div>
              <div class="w-col w-col-4">
                <div class="regular-text">only works when video is running</div>
              </div>
              <div class="w-col w-col-4"></div>
            </div>
          </div>
          <div data-w-tab="Aux" class="violett3_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white">  <br><br>Custom Buttons:</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6"><a href="?action=customfunction1" class="buttonviolett2 action w-button">Custom Function #1</a></div>
              <div class="w-col w-col-6"><a href="?action=customfunction2" class="buttonviolett2 action w-button">Custom Function #2</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="regular-text">these are free buttons for custom code...<br><br>‍<br>‍</div>
              </div>
              <div class="w-col w-col-6"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3">
                <div class="heading_white"> <br>Projector (unused!):</div>
              </div>
              <div class="column w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="http://192.168.2.254" target="_blank" class="buttonviolett2 w-button">Projector Interface</a></div>
              <div class="w-col w-col-3"><a href="?action=beameron" class="buttonviolett2 action w-button">Projector Power ON</a></div>
              <div class="w-col w-col-3"><a href="?action=beameroff" class="buttonviolett2 action w-button">Projector Power OFF</a></div>
              <div class="w-col w-col-3"><a href="?action=beamerstatus" class="buttonviolett2 action w-button">Projector Status</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3">
                <div class="w-embed">
                  <form id="beameripform" method="post">
                    <input name="beamerip" class="inputfields" id="beamerip" type="text" placeholder="192.168.2.254"><br>
                    <input type="button" class="buttonviolett2" id="submitbeameripFormData" onclick="SubmitbeameripFormData();" value="Set IP">
                  </form>
                </div>
              </div>
              <div class="w-col w-col-3">
                <div class="regular-text">ENTER IP / or Broadcast<br>must be same net as PVJ!</div>
              </div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
          </div>
          <div data-w-tab="System" class="red_pane w-tab-pane">
            <div class="w-row">
              <div class="w-col w-col-3">
                <div class="heading_white"><br>Scripts:</div>
              </div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=udp_restart" class="buttonred action w-button">Restart UDP Listen</a></div>
              <div class="w-col w-col-3"><a href="?action=jack_restart" class="buttonred action w-button">Restart Jackd</a></div>
              <div class="w-col w-col-3"><a href="?action=remote_start" class="buttonred action w-button">Start Remote Service</a></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3">
                <div class="heading_white"><br>Info:</div>
              </div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=ipwifi" class="buttonred action w-button">Show Wifi IP Address</a></div>
              <div class="w-col w-col-3"><a href="?action=iplan" class="buttonred action w-button">Show RJ45 IP Address</a></div>
              <div class="w-col w-col-3"><a href="?action=getgpu" class="buttonred action w-button">GPU Ram usage</a></div>
              <div class="w-col w-col-3"><a href="?action=gettemp" class="buttonred action w-button">CPU Temperature</a></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=macid" class="buttonred action w-button">Show MAC Address</a></div>
              <div class="w-col w-col-3"><a href="?action=parse" class="buttonred action w-button">Parse Resolutions</a></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="heading_white"> <br>Audio:</div>
              </div>
              <div class="w-col w-col-6">
                <div class="regular-text">All Audio buttons only work when a video is playing !</div>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=volume_up" class="action buttonred w-button">Volume Up</a></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"><a href="?action=volume_mute" class="action buttonred w-button">Volume Mute</a></div>
              <div class="w-col w-col-3"></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-3"><a href="?action=volume_down" class="action buttonred w-button">Volume Down</a></div>
              <div class="w-col w-col-3"></div>
              <div class="w-col w-col-3"><a href="?action=volume_mute" class="action buttonred w-button">Volume Unmute</a></div>
              <div class="w-col w-col-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="footer">© 2020 <a target="_blank" href="https://www.magdesign.ch" class="link">magdesign.ch</a></div>
    </div>
  </div>
  <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
 
 
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="../js/placeholders.min.js"></script><![endif] -->
  <!--  Code below sets the "Set Time" button function -->
  <script type="text/javascript">
 function settime() {
    window.open('time_change.php');
    document.getElementById('actions_output').innerHTML = ("time set");
  } 
</script>
  <!-- 
Code below this line checks if user is online
 -->
  <script src="js/offline.min.js"></script>
  <link rel="stylesheet" href="../themes/offline-theme-chrome.css">
  <link rel="stylesheet" href="../themes/offline-language-english.css">
  <script>
  var run = function(){
  var req = new XMLHttpRequest();
  req.timeout = 5000;
  req.open('GET', 'http://localhost:8888/walter/0', true);
  req.send();
}
setInterval(run, 3000);
        Offline.options = {
        requests: false
        }
</script>
  <!-- 
Code below is for button actions
 -->
  <script type="text/javascript">
   $("a.action").on("click", function(event) { 
       event.preventDefault();
       $.get( "backend.php" + $(this).attr('href'), function(data) {
          $("#actions_output").html(data);
       });
   });
   </script>
  <!-- 
Code  below is for button tooltips
 -->
  <script src="../themes/tooltipster.bundle.min.js"></script>
  <script src="../themes/tooltipster-for-webflow.js"></script>
  <!--  
Code  below is for cron / Scheduler generator
  -->
  <link rel="stylesheet" href="js/gentleSelect/jquery-gentleSelect.css">
  <link rel="stylesheet" href="js/cron/jquery-cron.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/gentleSelect/jquery-gentleSelect-min.js"></script>
  <script src="js/cron/jquery-cron.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#example1b').cron({
            initial: "9 21 * * *",
            onChange: function() {
                $('#example1b-val').text($(this).cron("value"));
            },
            useGentleSelect: true
        });
    });
    </script>
</body>
</html>