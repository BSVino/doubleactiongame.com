¹SŒb<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:238;s:11:"post_author";s:1:"3";s:9:"post_date";s:19:"2014-06-30 19:23:32";s:13:"post_date_gmt";s:19:"2014-06-30 19:23:32";s:12:"post_content";s:8901:"<h1>Blend textures to add subtle wear and tear</h1>
I want to talk about tiles. Tiles are a nice texture to use because they have a lot of innate detail. They have grout, which provides opportunities for nice normal maps and variations in phong/envmap specularity, they can have cracks on them which looks cool, and the tiles themselves can have cool designs or just alternating colours. The problem with tiles though is that this inherent detail is misinterpreted for ease of use. As nice as it is to slap a tile texture down and give yourself a pat on the back as you sip you freshly prepared congratulatory cognac on the rocks, it's not at all that simple - as usual, como siempre.

Tiles are actually a pain in the ass to lay down in real life. I tiled my toilet and bathroom once. It was <i>horrible</i>. You have to cut here, lay there, measure this, and it's all such <i>work</i>. This experience led me to look at game tiles in a different light. No longer can I drop a tile texture down, rotate it 45 degrees and think no one will look twice.

<!-- more -->
<h4>Edging</h4>
Let's start with a nice hallway, again.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://2.bp.blogspot.com/-j8r9EvuRevo/U7G1rfnJV4I/AAAAAAAAA90/TVZMUkzj2aA/s1600/tiles_01.jpg"><img src="http://2.bp.blogspot.com/-j8r9EvuRevo/U7G1rfnJV4I/AAAAAAAAA90/TVZMUkzj2aA/s320/tiles_01.jpg" alt="" border="0" /></a></div>
<p style="text-align: center;"><i>Just slap it down, yo</i></p>
So yeah, this has a bit of detail, and with some props could be passable, but it's not good <i>enough</i>, and taking a bit more time can give us some much nicer results. So lets do some basic edging and see if we can improve the general look with minimal effort.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://1.bp.blogspot.com/-oDFiL6fqDuI/U7G1rXOTS3I/AAAAAAAAA94/LjJm2RwQqIs/s1600/tiles_02.jpg"><img src="http://1.bp.blogspot.com/-oDFiL6fqDuI/U7G1rXOTS3I/AAAAAAAAA94/LjJm2RwQqIs/s320/tiles_02.jpg" alt="" border="0" /></a></div>
<p style="text-align: center;"><i>Starting to improve a bit</i></p>
So making a tile edge looks a bit nicer, and is more in line with real world tile construction methods. But what happens when people use our tiles?
<h4>Ground wear and tear</h4>
Tiles have a tendency to be walked on, and if our boogalooing goes to plan, dived, slid and bled on. With all that corrosive denim jeans slide action, our tiles will get worn. They also may get cracked and broken. The wearing doesn't take place uniformly though, think about the parts of your floor that get walked on the most, this is where the tiles will become worn. Usually you'll see that the tiles in the center of the hallway are lighter and smoother than those at the edges, where they get less erosion from peoples feet. We can add these details with a little bit of advanced thinking, and a bit of computer trickery. It's time to get your creative wicks wet, seatbelts on.
<h3>TUTORIAL TIME!!!!</h3>
We're going to rip out that tile texture from hl2, adjust it a bit and then make a new, cooler tile texture, and put it all back in. First youre going to need <a href="http://www.gimp.org/">GIMP </a>(or photoshop if you're that way inclined) and <a href="http://nemesis.thewavelength.net/index.php?c=238">VTFedit</a>, as well as a text editor, but notepad will do (textedit for our microsoft brothers).

First, lets find our tile texture, here it is: C:\Program Files\steam\steamapps\common\SourceFilmmaker\game\hl2\materials\tile\tilefloor001a.vtf. Let's just copy it over to our DA directory, for posterity: C:\Program Files\steam\steamapps\sourcemods\DAB\materials\tile\ (keep that directory open , we'll be coming back). Open it in VTFEdit, and save it out as a png. To do that you'll need to select 'export', as VTFEdit only 'saves' vtf files. Now, open your png in GIMP or PS, and fiddle with the brightness, saturation and contrast. What we're trying to do here is adjust the texture so it looks more worn and faded. I also ran it through a 'selective gaussian blur' to make it look a bit smoother. It helps to have the original texture on one layer and your adjusted output on another, for easy switching and comparison. Here's what I did:
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://4.bp.blogspot.com/-08POveNoOBQ/U7G1rVkQs9I/AAAAAAAAA98/KIG7fEYUt70/s1600/tiles_03.jpg"><img src="http://4.bp.blogspot.com/-08POveNoOBQ/U7G1rVkQs9I/AAAAAAAAA98/KIG7fEYUt70/s320/tiles_03.jpg" alt="" border="0" /></a></div>
<p style="text-align: center;"><i>Hey that's smooth</i></p>
Now crack open VTFEdit again, import your png (ctrl+i) and save it out as a .vtf into the DA directory, but rename it to tilefloor001a_blend01.vtf. We're going to make a fancy blend texture to have the worn parts fade in nicely, and we're going to do that through some tricky source engine sorcery (or SOURCE-ery get it??). Copy and paste tilefloor001a.vmt from and into its own directory, and rename it to "tilefloor001a_blend.vmt". Now open that sucker in your text editor. Now go read <a href="https://developer.valvesoftware.com/wiki/WorldVertexTransition">this</a>, I'll be right here.

Back? Good. We're going to be using that puppy for our fade from nice to worn. You should be able to write the vmt yourself, but just in case, here is mine: (I didn't use the blendmodulate texture but feel free)
<blockquote>"WorldVertexTransition"

{

"$basetexture" "tile/tilefloor001a"

"$basetexture2" "tile/tilefloor001a_blend01"

"%tooltexture" "tile/tilefloor001a_blend01_tooltexture"

"$surfaceprop" "tile"

"$surfaceprop2" "tile"

}</blockquote>
Our alert boogalooers would have noticed the use of a tool texture there. Tooltextures are nice to make for your fellow mappers, but aren't completely necessary. If you want to make one, it won't be seen in game so keep it low res. Mine is 128x128 pixels. In order to make it, have both the new and old textures on seperate layers, select half of the image (usually in a diagonal line from bottom left to top right) and feather your selection by 50. Delete the selected half of the top layer and then resize your image and save it out. It also needs to be converted to vtf.

Finally, we're ready to use our texture in game. Blend textures can only be used on displacements so go read <a href="https://developer.valvesoftware.com/wiki/Displacement#Blended_displacement_materials_.28alpha_channel_painting.29">this</a>. Also when using displacements try to have your displacement brush as close to a square as you can, to get nice even subdivisions. For my oblong hallway I'm going to split it up into two so I can get closer to the squares I want.

To make a displacement, shift+a into texture mode, select your faces, click across to the displacements tab and hit 'create'. I'm going to leave the power at 3, and even that is a bit overkill for our little hallway. Make sure you have applied our blend texture to the displacement faces.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://3.bp.blogspot.com/-Nnvi-3O9jhQ/U7G1sMVgK_I/AAAAAAAAA-E/fFbKg5U5GGI/s1600/tiles_04.jpg"><img src="http://3.bp.blogspot.com/-Nnvi-3O9jhQ/U7G1sMVgK_I/AAAAAAAAA-E/fFbKg5U5GGI/s320/tiles_04.jpg" alt="" border="0" /></a></div>
<p style="text-align: center;"><i>Note the subdivisions aren't too stretched</i></p>
Now hit the 'paint alpha' button and get painting.

I think tutorial time can be over now. You can play around with the displacement material all you like, and maybe go back to GIMP or PS and adjust the texture as you see fit. Here's what I did with my little scene:
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://2.bp.blogspot.com/-KfMQsAmo-80/U7G1sR1To5I/AAAAAAAAA-Q/5W9P8Fbqkuk/s1600/tiles_05.jpg"><img src="http://2.bp.blogspot.com/-KfMQsAmo-80/U7G1sR1To5I/AAAAAAAAA-Q/5W9P8Fbqkuk/s320/tiles_05.jpg" alt="" border="0" /></a></div>
<p style="text-align: center;"><i>Simple</i></p>
So this is a quick little example of how to edit existing assets and add just a bit more detail to your environment. It beats decalling everything and with a little work and a critical eye you'll be able to add life to your environments. Stuff gets worn in real life and an old tile floor is a good example of this. Other examples are wooden floors that lose their shine, dirt gets walked over floors, concrete floors change colour a lot over time. Consider using this in your maps where relevant.

<a href="http://www.doubleactiongame.com/map-design-principles-4/">Previously: Simple hallways aren't at all Simple</a>";s:10:"post_title";s:23:"Map Design Principles 5";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:23:"map-design-principles-5";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-06-30 19:23:32";s:17:"post_modified_gmt";s:19:"2014-06-30 19:23:32";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=238";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}