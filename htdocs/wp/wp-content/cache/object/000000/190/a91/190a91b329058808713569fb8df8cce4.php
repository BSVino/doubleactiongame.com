n‘b<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:345;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-10-22 00:37:33";s:13:"post_date_gmt";s:19:"2014-10-22 00:37:33";s:12:"post_content";s:2072:"<h1>Old Server Setup Guide</h1>
Hi. I'm old. Don't use me. Use the <a href="/serverguide">current version</a> instead.
<ol>
	<li>Download SteamCMD here: <a href="https://developer.valvesoftware.com/wiki/SteamCMD">https://developer.valvesoftware.com/wiki/SteamCMD</a></li>
	<li>Make a directory for srcds, I called mine "srcds".</li>
	<li>Put SteamCMD inside that folder and run it. On Windows it's just a double click, on Linux it's ./steamcmd</li>
	<li>Type "login anonymous" but without the quotes, or you can use your own Steam login if you like.</li>
	<li>Type "force_install_dir ./sdk2013" but without the quotes.</li>
	<li>Type "app_update 244310 validate" but without the quotes. This will download a whole bunch of crap.</li>
	<li>Type "quit" but without the quotes.</li>
	<li>Go into the "sdk2013" folder that should now exist inside your "srcds" folder.</li>
	<li>Unpack the dab.zip or dab.tgz (either is fine) into the sdk2013 directory such that the dab directory is in the sdk2013 directory. Your setup should look like this: <a href="https://dl.dropboxusercontent.com/u/4205810/dab/serversetup.png">https://dl.dropboxusercontent.com/u/4205810/dab/serversetup.png</a></li>
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
	<li>In a command prompt, type "cd ~/srcds/sdk2013/bin" or whatever the directory you made is called.</li>
	<li>Type these two commands:
<code>ln -s soundemittersystem_srv.so soundemittersystem.so
ln -s scenefilecache_srv.so scenefilecache.so</code></li>
	<li>Type "cd .." and then "./srcds_run -game dab +map da_rooftops"</li>
</ol>";s:10:"post_title";s:22:"Old Server Setup Guide";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"serverguideold";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-10-22 00:38:11";s:17:"post_modified_gmt";s:19:"2014-10-22 00:38:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=345";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}