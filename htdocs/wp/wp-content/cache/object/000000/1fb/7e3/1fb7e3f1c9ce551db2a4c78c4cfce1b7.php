²“b<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:154;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-20 03:30:09";s:13:"post_date_gmt";s:19:"2014-06-20 03:30:09";s:12:"post_content";s:4654:"<h1>Coding for Double Action</h1>
<h2>Getting the Code</h2>

The source code for Double Action is stored in a Git repository on GitHub. Git is a version control system that helps programmers merge their code changes together. If you're not familiar with Git or with version control systems, you should <a href="https://www.google.com/search?q=git+tutorial">learn about them</a> before beginning.

The GitHub page is: https://github.com/BSVino/DoubleAction
The Git remote is: git@github.com:BSVino/DoubleAction.git

<h2>Building the Code</h2>

<ol>
<li>You need a compiler. On Windows this is Visual Studio 2010 Express. On Linux you need g++, and you may also need multilib if you're running x64. On Mac you need XCode and clang. You also need Git. TortoiseGit will do on Windows. You then need to download the Source SDK Base 2013 from Steam.</li>
<li>Use Git (or TortoiseGit) to download the source to your hard drive.</li>
<li>Make sure that you have the latest testing build installed in \Dropbox\ActionBoogaloo\dab for Windows or ~\Dropbox\ActionBoogaloo\dab on Mac and Linux</li>
<li>Navigate to the directory mp/src inside the source code tree. If you're on Windows, double click creategameprojects.bat. If you're on Linux or Mac, run ./creategameprojects. This creates a project file/makefiles for Double Action. Open that project file.</li>
</ol>

<h3>Visual Studio instructions</h3>

<ol>
<li>Right click on "Client SDK" and tell it "Set startup project". This specifies which project in your solution that Visual Studio will try to run when you hit F5.</li>
<li>Right click "Client SDK" and go to properties. Then go to "Debugging" Set "Configuration" (at the top) to "Debug" Set the following variables:

<code>Command: C:\Steam\steamapps\common\Source SDK Base 2013 Multiplayer\hl2.exe
Command arguments: -allowdebug -dev -sw -game "D:\Dropbox\ActionBoogaloo\dab"
Working directory: C:\Steam\steamapps\common\Source SDK Base 2013 Multiplayer</code>

You may need to modify these to point to the proper directories.</li>

<li>Verify that the "Build Events" > "Post-Build Event" also points to your correct Steam directory.</li>
<li>In the top of the screen there's a dropdown next to the green "run" arrow that lets you choose the build configuration. Make sure it's set to "Debug"</li>
<li>Press F7 to build it. This takes a while.</li>
<li>Press F5 to run it.</li>
</ol>

Hopefully everything will work and you will be in the debugger running the game. Load up a map and have at it.

<h3>Linux instructions</h3>
<ol>
<li>Type "make -f DoubleAction.mak"</li>
<li>Run: "~/.steam/steam/steamapps/common/Source\ SDK\ Base\ 2013\ Multiplayer/hl2.sh -game ~/Dropbox/ActionBoogaloo/dab"</li>
</ol>

<h3>Mac OSX instructions</h3>

<ol>
<li>Delete the folder "mp/src/thirdparty/curl-7.31.0"</li>
<li>Open the XCode project that was generated and build it.</li>
<li>Run: "~/.steam/steam/steamapps/common/Source\ SDK\ Base\ 2013\ Multiplayer/hl2.sh -game ~/Dropbox/ActionBoogaloo/dab"</li>
</ol>

<h2>Coding Guidelines</h2>

We have few rules here on the Double Action team, but remember that you are on a team with other programmers. That means you should take some things into consideration:

<ol>
<li><strong>Don't start features that you won't finish.</strong> This means not just implementing the feature, but plugging in animations, sounds, playtesting, usability work, user interface code, etc etc etc. If you don't complete an entire feature, don't be surprised when nobody else wants to pick up the slack. It's much easier to remove an unfinished feature than it is to complete it.</li>
<li><strong>Adhere to the project's coding conventions.</strong> Source uses Microsoft's Hungarian Notation in most areas. Valve wasn't exactly strict about maintaining this, but the code is at least mostly consistent. If one programmer decides to use a different notation, it will make the code base a confused mess. (Note: I am definitely not an advocate for the systems-style Hungarian Notation that Source uses, but I'm even less interested in having multiple coding styles in one project, and even less yet interested in rewriting the Source SDK to a different coding style.)</li>
<li><strong>Assume that things are there for a reason.</strong> Three years of development means that there are many old bits of code that haven't been touched for a while. Could be they've been forgotten and can be improved, or could be they're like that for a reason. If you want to change something, great! But it's probably a good idea to ask around and figure out why it is the way it is first.</li>
</ol>";s:10:"post_title";s:24:"Coding for Double Action";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:6:"coding";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-11-02 00:58:04";s:17:"post_modified_gmt";s:19:"2014-11-02 00:58:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=154";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}