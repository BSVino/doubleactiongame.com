r|nb<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:136;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-19 23:57:12";s:13:"post_date_gmt";s:19:"2014-06-19 23:57:12";s:12:"post_content";s:2009:"<h1>Server Setup Guide</h1>
<ol>
	<li>Download SteamCMD here: <a href="https://developer.valvesoftware.com/wiki/SteamCMD">https://developer.valvesoftware.com/wiki/SteamCMD</a></li>
	<li>Make a directory for the Source Dedicated Server, I called mine "srcds".</li>
	<li>Put SteamCMD inside that folder and run it. On Windows to run it you just a double click, on Linux it's ./steamcmd.sh</li>
	<li>Type "login anonymous" but without the quotes, or you can use your own Steam login if you like.</li>
	<li>Type "force_install_dir ./sdk2013" but without the quotes.</li>
	<li>Type "app_update 317800" but without the quotes. This will download a whole bunch of crap.</li>
	<li>Type "quit" but without the quotes.</li>
	<li>Go into the "sdk2013" folder that should now exist inside your "srcds" folder.</li>
	<li>Your setup should look like this: <a href="https://dl.dropboxusercontent.com/u/4205810/dab/serversetup.png">https://dl.dropboxusercontent.com/u/4205810/dab/serversetup.png</a></li>
</ol>
<h2>Windows instructions</h2>
From here on the instructions are different for each platform. On Windows:
<ol>
	<li>Type Windowskey-R. (Windowskey is the button between ctrl and alt on the bottom left of your keyboard.) Type "cmd" and press enter. This should open a command prompt.</li>
	<li>Type "cd \srcds\sdk2013" or whatever the directory you made is called.</li>
	<li>Type "srcds -game dab" but, of course, without the quotes.</li>
	<li>Press the "Start server" button.</li>
</ol>
<h2>Linux instructions</h2>
<ol>
	<li>In a command prompt, type "cd ~/srcds/sdk2013" or whatever the directory you made is called.</li>
	<li>Type "./dabds +map da_rooftops"</li>
</ol>

Note: This is the setup guide for the Steam version of the game. If you're making a new server you should follow this guide. If for some odd reason you want to find the setup guide for the old non-Steam version of the game, <a href="http://www.doubleactiongame.com/serverguideold/">it's here</a>. Don't use it though.";s:10:"post_title";s:18:"Server Setup Guide";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:11:"serverguide";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-10-22 00:37:02";s:17:"post_modified_gmt";s:19:"2014-10-22 00:37:02";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=136";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}