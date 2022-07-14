n�b<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:160;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-20 03:37:14";s:13:"post_date_gmt";s:19:"2014-06-20 03:37:14";s:12:"post_content";s:8442:"<h1>Double Action Mapping Setup Guide</h1>
Double Action comes bundled with all the SDK tools you'll need to make maps. The preconfigured map editor (Hammer) is found here: [steamdir]\SteamApps\common\Double Action\bin
<blockquote style="font-size: 85%;">[steamdir] refers to your steam directory (ie C:\Program Files (x86)\Steam)</blockquote>
Open up hammer.exe and you're ready to make some cool maps! All DA's custom content is now available for you to utilize. You can find the .vmf files for all our current maps <a href="http://sync.doubleactiongame.com/Maps/Current/">here,</a> as well as a heap of other ones <a href="http://sync.doubleactiongame.com/Maps/">here</a>.

If you haven't used hammer before, there are a bajillion tutorials on <a href="https://www.youtube.com/results?search_query=hammer+tutorial">youtube</a> and plenty of info on the net to learn. A good place to start is <a href="http://www.interlopers.net">Interlopers</a> or <a href="http://twhl.info">The Whole Half Life</a>.

The next few guides here will not cover how to use Hammer, but are guidelines on how to design your maps around the unique gameplay in Double Action.
<p style="text-align: right;"><a href="http://www.doubleactiongame.com/map-design-principles-1/">Next up: Divey Wivey and Smoothin the Moovin</a></p>
<p style="text-align: left;">OR scroll down for instructions on how to manually configure Hammer for Double Action.</p>

<p style="text-align: center; line-height: 2000%;">.</p>

If you don't want to use the preconfigured hammer then below are some old instructions on configuring Hammer manually. These instructions are old and should be taken with a grain of salt, and if you don't know specifically that you need these instructions then you probably don't. Just use the preconfigured Hammer above.
<h1>Configuring Double Action for Hammer</h1>
<span style="font-weight: bold;"><span style="font-size: 115%; line-height: normal;">WARNING!!! IGNORE THESE INSTRUCTIONS AND JUST USE THE PRECONFIGURED HAMMER AS ABOVE, UNLESS YOU KNOW WHAT YOU'RE DOING. THESE ARE JUST HERE FOR POSTERITY.
</span></span>
<h2>Step #1 (Action Hammer!)</h2>
We are an SDK multiplayer 2013 mod, so we use the tools provided in [steamdir]\SteamApps\common\Source SDK Base 2013 Multiplayer\bin
<blockquote>[steamdir] refers to your steam directory (ie C:\Program Files (x86)\Steam)</blockquote>
You can save shortcuts to the desktop or pin them to your taskbar. Do this for hammer.exe
<h2>Step #2 (Action Configuration!)</h2>
Run Hammer. Select the Half-Life 2 Deathmatch config (we're about to add Double Action).

Go to Tools &gt; Options

Next to the configuration selection box, hit Edit

<img class="alignnone" src="http://www.modelsforthemasses.com/images/dab/mapping_guide/1.png" alt="" width="444" height="516" />

Hit Add, type in the games name and hit OK, then close

<img class="alignnone" src="http://www.modelsforthemasses.com/images/dab/mapping_guide/2.png" alt="" width="447" height="531" />

Now from the configuration selection box, select your newly created Double Action configuration. You'll see everything is now blank.

<img class="alignnone" src="http://www.modelsforthemasses.com/images/dab/mapping_guide/3.png" alt="" width="444" height="516" />

Now we have to fill all that in. Next to the Game Data Files field, hit Add. Navigate to the dab base directory ([steamdir]\SteamApps\sourcemods\dab) and select da.fgd

That should automatically fill out some of the fields but you might want to change them. Make sure that Default PointEntity Class is set to prop_static, and Default SolidEntity Class is set to func_detail. I also like to change my default lightmap scale to 8 but that's preference.

Two of the three fields down the bottom take the dab base directory, or you can copy paste this: $SteamDir\SteamApps\sourcemods\dab

The third (maps directory) takes $SteamDir\SteamApps\sourcemods\dab\maps

After all is said, your configurations should look something like this:

<a href="http://www.modelsforthemasses.com/images/dab/mapping_guide/4.png"><img class="alignnone" src="http://www.modelsforthemasses.com/images/dab/mapping_guide/4.png" alt="" width="444" height="516" /></a>

If all went to plan, you can now load up any of the dab .vmf files and everything should be there. You can now start mapping using our assets. Any other assets you want to use will need to be moved into the DA directory.
<h2>Step #3 (Action Compiling!)</h2>
We aren't quite done with the preferences screen yet. Change over to the Build Programs tab (top far right), and make sure Double Action is still the selected mod. It's blank!

Since this all uses relative directories, you should be able to copy and paste this stuff:

<strong>Game Executable:</strong>
$SteamUserDir\Source SDK Base 2013 Multiplayer\hl2.exe

<strong>BSP Executable:</strong>
$SteamUserDir\Source SDK Base 2013 Multiplayer\bin\vbsp.exe

<strong>VIS Executable:</strong>
$SteamUserDir\Source SDK Base 2013 Multiplayer\bin\vvis.exe

<strong>RAD Executable:</strong>
$SteamUserDir\Source SDK Base 2013 Multiplayer\bin\vrad.exe

<strong>The bottom one:</strong>
$SteamDir\SteamApps\sourcemods\dab\maps

I would provide a screenshot but the field cuts the paths off.

You can now compile your map and hammer will build it all nicely, just like any other source engine game.
<h2>Step #4 (Action Cubemaps!)</h2>
This is where most of the frustration comes in, as I have personally felt a bit of stress from, luckily I have the solution.
So you have your cool map all ready and it has broken pink n black cubemaps right? Well first let's download this <a class="postlink" href="https://dl.dropboxusercontent.com/u/16218991/hammer/sdk_reep_assets_1.2_11.27.13.zip">toolset</a> that has a custom VBSP.exe which allows us to compile maps without [broken] cubemaps to begin with!

When you have that zip file opened, get into the FGDs and Tools folder and drag the vbsp.exe file into this directory and overwrite: <span style="font-style: italic;">C:\Program Files (x86)\Steam\SteamApps\common\Source SDK Base 2013 Multiplayer\bin</span>
Now you will want to compile your map in <span style="font-weight: bold;">Expert </span>mode and all you do is add this parameter: <span style="font-weight: bold;">-nocubemap</span> to <span style="font-style: italic;">$bsp_exe</span> before the -game parameter. Should look like this:

<img src="http://i.imgur.com/aX5VX3V.jpg" alt="Image" />

1. Once that is done your map will be empty of cubemaps and is ready to be packed with new cubemap textures, now we will jump in the game and load up the map!
2. After your map loads up go to console and type <span style="font-weight: bold;">mat_specular 0</span> (Check Video options and make sure HDR is Off)
3. Then do <span style="font-weight: bold;">buildcubemaps</span>
4. After it builds, go back to Video Options and turn HDR on Full, then hit Apply and OK to restart the map.
5. Type in <span style="font-weight: bold;">buildcubemaps</span> again. This is so we have both LDR and HDR cubemaps.
6. Disconnect and type in <span style="font-weight: bold;">mat_specular 1</span> then Quit.
7. Go to this folder: <span style="font-style: italic;">C:\Program Files (x86)\Steam\SteamApps\sourcemods\da_info\maps</span>
8. Copy your map and compare it with your same map in <span style="font-style: italic;">..\sourcemods\dab\maps\</span> it should be larger in size, if so, overwrite!
9. Go back in game and load your map, and HOPEFULLY your cubemaps will have worked and your beautiful Colt 1911 is acting as a mirror to your level.

(I usually delete the "maps" folder found in dab/materials and also da_info/materials because they are unnecessary and could cause messy texture browsing in hammer.)

<strong>YOU ARE NOW READY FOR DOUBLE ACTION MAPPING, MAY THE ACTION LORDS BE AMONG YOU.</strong>

If you have any questions, drop by the <a href="http://forums.doubleactiongame.com/">forums </a>and ask!

<span style="font-weight: bold;">Extras:</span>

☻<a class="postlink" href="https://github.com/ValveSoftware/source-sdk-2013/issues/186">Fix for Low Resolution Textures and Models.</a>

<span style="font-weight: bold;">Sources:</span>

☻Personal experience.
☻<a class="postlink" href="http://facepunch.com/showthread.php?t=1308695">This thread from Facepunch for the custom tools.</a>";s:10:"post_title";s:19:"Mapping Setup Guide";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:19:"mapping-setup-guide";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-11-29 18:59:40";s:17:"post_modified_gmt";s:19:"2014-11-29 18:59:40";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:143;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=160";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}