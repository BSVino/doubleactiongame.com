t|nb<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:190;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-20 04:09:41";s:13:"post_date_gmt";s:19:"2014-06-20 04:09:41";s:12:"post_content";s:6099:"<h1>All in a Boogaloo: Modeling for Double Action</h1>
<p>In modelling for Double Action, I have tried to adhere to a specific style. I guess the best way to put it is 'almost-realistic'. I'm no pro and we're dealing with the source engine here so I have tried to favour work speed over model complexity - because try as you might, it's just not going to look like UE4. That said, all models are high quality. Normal and specular maps are used liberally and there's no limits to the amount of texture maps you can use for shader maps (phongexponent, rimlightmask, etc). but we'll cover this all below.</p>

<h2>Material definition</h2>
<p>Double Action is a fast paced game, environments are traversed very quickly and small details often get lost. Too many small details muddy the water - we want the players to spot each other easily. It is also easy to get lost in adding grunge to a texture, or modelling details that are unnecesary. DA is based in a modern city, where things haven't had time to degrade much. To this end I try to keep the materials very clear on the models I make. Take these sawhorses (props_construction/sawhorse_02) for instance.</p>
<img src="http://www.modelsforthemasses.com/images/dab/sawhorse.jpg" alt="sawhorse" />
<p>All the materials are clearly different and have appropriate specular values. There is a little wear and tear, but nothing that breaks the material up. When this prop is used in a map, it provides more variation in colour and material than a monochrome prop would. I find it helps create more visual interest in the envinronment at a lower time cost and with a distinct style.</p>

<h2>Texture complexity</h2>
<p>Although we want to use clear materials and not much grunge, that doesn't mean our materials are simple. In order to increase fidelity with a simple diffuse map, I use a <a href="https://developer.valvesoftware.com/wiki/$phong">$phong</a> or an <a href-"https://developer.valvesoftware.com/wiki/$envmap">$envmap</a> mask on most materials. On materials that need it, I also use <a href="https://developer.valvesoftware.com/wiki/$selfillum">$selfillum</a>, <a href="https://developer.valvesoftware.com/wiki/$rimlight">$rimlight</a> and sometimes use a $phongexponenttexture for further control. In general I keep any texture masks used by these last few shaders at half the size of the diffuse.</p>
<p>I try to keep textures high quality as opposed to low resolution, but don't go overboard. For instance those sawhorses are on a 512*256 texture map, but busting that down to 256*128 might be acceptable. 1024*512 for a prop that size would be overkill.</p>
<p>I'll usually keep the normal map at the same resolution as the diffuse map, but if it is a small prop or a particularly large texture I sometimes srink it to half size. In the source engine the phong mask is traditionally the alpha channel of the normal map - which means that your specular map is the same resolution as your normal map by default. That means you can afford to do some extra fiddling with the materials in the specular map as well.</p>
<p>The rendering feature that is all the rage in new engines is the roughness term, which scales the reflectance of a surface by blurring the reflected image. I have been faking this in source using cubemap reflections. It's a bit of a convoluted process that gives out slightly better results so feel free to not do this, but here is what I do.</p>
<p>The important part of this fake is to put your environment map values very low on materials that would be less shiney (ie leather, rough plastics or metals) and to add a noisy overlay to your normal map. I make a noise overlay by adding noise to a new image with a noise filter, and running the result through a normal map filter. I then overlay that onto the normal map and mask out the areas that I don't want to be fuzzy. If you fiddle with the noise settings in photoshop, as well as scaling and rotating and otherwise distorting the result before running it throught the normal map filter, you can get some pretty good results.</p>

<h2>Naked Mormal Naps</h2>
<p>As a rule, I make all of my props with baked normal maps. Highpoly meshes should have attention payed to edge highlights (ie: edge bevels and control loops) and floating geometery can be baked down in order to make the most use of the texture memory we are using for our normal map.</p>

<h2>Mesh complexity</h2>
<p>In general, we want to keep polycounts as low as necessary, but we're not picky. If the geometry affects the silhouette of the model then it should be geometry - anything that could be baked into the normal map should be. As a rule I model bolts and bake rivets. Take those sawhorses up there for example. You can see the bolts on the underside of the wooden strut are floating geometry, as well as the cross supports and anchors.</p>
<p>The source engine does not light per-vertex on models that use a normal map in their material, so if you are using a normal map (which you should) then there is no point having control loops for vertex lighting. We are using a lot of texture memory in our art approach so we want to keep all other aspects as low cost as possible. Polygons are cheap to render these days so don't feel too bad about modeling an extra few bolts, just make sure that there aren't lots of ambiguous edgeloops in your game mesh.</p>

<h2>Rules of thumb</h2>
<ul>
    <li>Baked normal maps</li>
    <li>Clearly varied materials</li>
    <li>Not much grunge/wear and tear</li>
    <li>Use cubemap reflection values for material definition</li>
    <li>Model bolts and bake rivets</li>
</ul>

<h1>Resources</h1>
<ul>
	<li><a href="/art-wish-list/">Wish List</a></li>
        <li><a href="https://developer.valvesoftware.com/wiki/Materials">Valve docs</a></li>
</ul>
Information on making Animations for Double Action:
<ul>
	<li><a href="https://www.youtube.com/watch?v=U8yYfDCDnCs">Youtube Animation Tutorial - Max 2012</a></li>
	<li><a href="http://youtu.be/ccBNo95XfGU">Youtube Animation Tutorial - Source FilmMaker</a></li>
</ul>";s:10:"post_title";s:26:"Modeling for Double Action";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:8:"modeling";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2014-10-13 04:10:34";s:17:"post_modified_gmt";s:19:"2014-10-13 04:10:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=190";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}