¥Dˆb<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:201;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-20 04:40:25";s:13:"post_date_gmt";s:19:"2014-06-20 04:40:25";s:12:"post_content";s:2614:"<h1>Translating Double Action to other languages</h1>

We are in need of help translating Double Action into other languages. If you are a native speaker of a non-English language, you may be able to help us. Here's what we need from you:
<ol>
	<li>You need to be a native speaker.</li>
	<li>Familiarize yourself with the game and what each thing means that you'll be translating. You can download the game for free from our front page. You should know the context for the things you'll be translating, to avoid such mistakes as translating "Launch" to Spanish as "Lanzar" (to launch e.g. a rocket) when it should be translated "Comenzar" (to start/begin/commence).</li>
	<li><a href="mailto:bs.vino@gmail.com">Send me</a> a writing sample in either English or your native language, preferably both. It must be something that you wrote and something non-trivial. We're looking for good grammar and punctuation. (Don't worry, we won't sweat grammar or spelling mistakes in English if that's not your first language.)</li>
</ol>

<h2>Translating</h2>

Once everything is in place, here's how you do the translation:

You'll always find the most recent English strings file here:

<a href="http://sync.doubleactiongame.com/dab/resource/dab_english.txt">http://sync.doubleactiongame.com/dab/resource/dab_english.txt</a>

Make a copy of this file in the resource directory and rename it dab_yourlanguage.txt In the file, where it says:

<code>"Language" "English"</code>

Change this to:

<code>"Language" "YourLanguage"</code>

For each line in this file you will see a key and a value, like this:

<code>"DA_Weapon_M1911" "Stallion .45"</code>

In this case, the key is "DA_Weapon_M1911" and the value is "Stallion .45". The key should be left alone and not translated. The value should be translated.

<h3>Special Characters</h3>

You may see special characters string to be translated.

<strong>\n</strong> This creates a new line. It doesn't need to be translated and should be left alone.
<strong>%s1 and %s2</strong> These will be replaced with another string by the game. They are numbered so that they can be re-ordered, in case the sentence order is different in your language.
<strong>%buy%</strong> This will automatically be replaced by the game with the button that is currently bound to "buy". You should leave these alone.

Don't forget to save your file as a Unicode file so that accents are preserved. When you're done attach the file in an <a href="mailto:bs.vino@gmail.com">email it to me</a> and include how you want yourself to be listed in the credits file.";s:10:"post_title";s:12:"Translations";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:12:"translations";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-06-20 04:52:12";s:17:"post_modified_gmt";s:19:"2014-06-20 04:52:12";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=201";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}