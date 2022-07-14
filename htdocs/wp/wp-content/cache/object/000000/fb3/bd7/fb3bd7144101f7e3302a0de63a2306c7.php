‰Uçb<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":24:{s:2:"ID";i:175;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2014-06-20 03:51:59";s:13:"post_date_gmt";s:19:"2014-06-20 03:51:59";s:12:"post_content";s:9348:"<h1>Doors and How to Use Them</h1>
<div class="post-header"></div>
Doors are a bit of an <a href='http://www.lizengland.com/blog/2014/04/the-door-problem/'>in joke</a> for game designers. For something so simple there are a million variables to consider. In DA we have a similar situation. Considering what we <a href="/map-design-principles-1/">already know</a> about DA's gameplay mechanics, we find that we need to use doors in order to <i>enhance</i> the probability of an uninterrupted boogaloo, which is contrary to the very idea of a door: to stop people.

<a name="more"></a>
<h2>Door width</h2>
The regular size of a door in the mapping scope-o-sphere is about enough for our heroes to walk through with little interference. In DA the likelihood of a casual walk is akin to that of your mum hitting the treadmill. We don't want no stinky walking here, we want to see the glorious flight of a boogalooer in mid dive. As such, single width doors are a pain in my airborne ass and need to be done away with.

So lets turn our attention back to our hallway scene and run a leather gloved finger along our door.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://1.bp.blogspot.com/-7ZohRAkEpE4/U6OCg0zuLNI/AAAAAAAAA8A/1yhu5Ey0ViU/s1600/door_01.png"><img src="http://1.bp.blogspot.com/-7ZohRAkEpE4/U6OCg0zuLNI/AAAAAAAAA8A/1yhu5Ey0ViU/s320/door_01.png" alt="" border="0" /></a></div>
<i>The devious, narrow culprit</i>

Doubling this particular doors width allows us to do away with (or repurpose) some of the detail props surrounding it.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://4.bp.blogspot.com/-hVzbAGD5X_8/U6OCzLCVRII/AAAAAAAAA8I/IUIg3mEQTyA/s1600/door_02.png"><img src="http://4.bp.blogspot.com/-hVzbAGD5X_8/U6OCzLCVRII/AAAAAAAAA8I/IUIg3mEQTyA/s320/door_02.png" alt="" border="0" /></a></div>
<i>Check these doubles</i>

If you don't want to widen your door, consider a career at the Q-mart. If you are still adamant that a disgusting single door will supply more action than its clearly superior double counterpart, you can just make your door a little wider. Make sure that if you are using a brush to define your door that you make the textures line up. Play with the texture scale on the X axis until it looks nice. While double doors is not a rule, I really truly urge you not to use a narrow, scummy single door. We need nice wide open spaces in our map, and double the doors directly equals double the action.

But our nice wide doors here are still closed, and this procrastinant tutorial maker has yet to provide a doorway for all our epic, midair, akimbos blazing entry needs. Fortunately that segues nicely into our next topic of principilization.
<h2>Open em or close em, but don't tease me like this, <i>please</i></h2>
You may think it's totally whizzbang coolaliciously radical dude to have some super fancy door setups, but if playtests have taught anything to our most valuable high latency boogalooers, they are more like a birthday cake full of rabies-laced razorblades. Physics based doors that the swing on their hinges are pretty cool in local servers, but with a ping of over 150 they become a pain in the ass as even the slightest delay is distracting and sometimes lags the client out. Next option is player activated doors, and the solution is easy. Simply do not use doors that require the player to activate them. DA is all about constant movement and having to stop to open a door is lunacy. The next option, doors that open based on proximity, are only slightly more effective. But if you just can't sleep at night without having a super happy funtime technical door setup in your map then you should opt for this approach - just make sure they open when the player is far enough away and they open very fast to prevent the server from mismatching with the client when the player goes for a superman entry through the doorway. The most efficient and fun to play door assembly is a totally static func_detail or prop_static, as I have in my map.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://2.bp.blogspot.com/-D3tQpIuz6lg/U6OC17mEL7I/AAAAAAAAA8Q/aS129Q03XQ0/s1600/door_03.png"><img src="http://2.bp.blogspot.com/-D3tQpIuz6lg/U6OC17mEL7I/AAAAAAAAA8Q/aS129Q03XQ0/s320/door_03.png" alt="" border="0" /></a></div>
<i>Are you sure it was the same cat?</i>

There are more advantages to this than just helping our high latency players though. For starters a static door gives us more freedom to add detail to our level. It also gives us a way to cover up blank walls, but the best and most important bonus is this:
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://1.bp.blogspot.com/-RO65NXc1HeU/U6OC3WESJpI/AAAAAAAAA8w/hKFngsm-mfc/s1600/door_04.png"><img src="http://1.bp.blogspot.com/-RO65NXc1HeU/U6OC3WESJpI/AAAAAAAAA8w/hKFngsm-mfc/s320/door_04.png" alt="" border="0" /></a></div>
<i>Bonk</i>

As you can see here, our angled door will funnel our heroes trajectory right into the doorway, allowing our players to think less about the linear algebra of their antics and more about the splodey bang bang.

On a side note, it's better to place doors like this on the hallway side of the wall. If the hallway opens to a larger area and the doors are angled out into an empty space, they have the propensity to block our heroes escape route if the situation gets too hot. Allow me to switch mediums and explain:
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://2.bp.blogspot.com/-I6HDwudbQyE/U6OC7bbxPRI/AAAAAAAAA8o/QikKOuVclQE/s1600/door_05.png"><img src="http://2.bp.blogspot.com/-I6HDwudbQyE/U6OC7bbxPRI/AAAAAAAAA8o/QikKOuVclQE/s320/door_05.png" alt="" border="0" /></a></div>
<i>That's a certified nut knockin'</i>
<h2>Door frame clipping</h2>
If you are paying attention to the doors believeability here, you'll notice that there is a wooden door frame surrounding our door. Doors and windows are actually quite a large structural consideration in real life building. You need to make sure that having such a large opening won't cause the rest of the wall to collapse. As such there is always a form of reinforcement around large openings in walls. Doorframes serve this purpose.

When you put a doorframe in your door, make sure it is a func_illusionary. Usually a doorframe will prorude out of the wall and we don't want our wonderfully coneptualized and flawlessly executed doorway hindering our heroes shenannigans due to an oversight. My doorframe here is func_illusionary and it's GLORIOUS.
<h2>If in doubt, cut it out</h2>
If playtests tell you one set of data but your gut feeling tells you another, go with playtests. If the door just isn't working in practice, feel free to get rid of it entirely. If it's not supporting our movement system and gameplay, just drop the doors off - you can place them in the environment elsewhere if you like, or maybe even get rid of the door way entirely, as so:
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://3.bp.blogspot.com/-4Q8MsxQN_l8/U6OC_Xt_syI/AAAAAAAAA80/p3Z7yivu4kw/s1600/door_07.png"><img src="http://3.bp.blogspot.com/-4Q8MsxQN_l8/U6OC_Xt_syI/AAAAAAAAA80/p3Z7yivu4kw/s320/door_07.png" alt="" border="0" /></a></div>
<i>Nothin wrong with that</i>

So you think we're done here? WRONG. We haven't even looked at:
<h2>The greater door area</h2>
We have spent so much time making the door itself play so nicely, we need to consider the surrounding area. Once the player is through the door, travelling in either direction, we need to ensure they will continue to sail salaciously through our environment. In my map, I want to put a stairway with rails on the outside of the door, but I don't want to prematurely halt the players line of travel. This is only one example but always try to think of ways to clear the path after a chokepoint such as doors. When the player enters a wide area (or 'hot spot' - more on that later) they want to keep moving, not be halted and possibly stuck on static props.
<div class="separator" style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://3.bp.blogspot.com/-TOuHS_f-vXI/U6ODC2Yu0NI/AAAAAAAAA88/pZ88z2cVBNs/s1600/door_08.png"><img src="http://3.bp.blogspot.com/-TOuHS_f-vXI/U6ODC2Yu0NI/AAAAAAAAA88/pZ88z2cVBNs/s320/door_08.png" alt="" border="0" /></a></div>
<i>Smoooooooth</i>

Ok, NOW we're done. But there is still a lot to think about with all aspects of tailoring maps to DA. You just wait till I get to diving through windows. And don't even get me started on sliding UNDER stuff. I am really looking forward to sliding UNDER stuff.
<p style="text-align: left;"><a href="http://www.doubleactiongame.com/map-design-principles-1/">Previously: Divey Wivey and Smoothin the Moovin</a></p>
<p style="text-align: right;"><a href="http://www.doubleactiongame.com/map-design-principles-3/">Next up: Continuous Boogaloo and Hotspot Distribution</a></p>
&nbsp;";s:10:"post_title";s:23:"Map Design Principles 2";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:23:"map-design-principles-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-01-13 01:06:05";s:17:"post_modified_gmt";s:19:"2015-01-13 01:06:05";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:44:"http://www.doubleactiongame.com/?page_id=175";s:10:"menu_order";i:0;s:9:"post_type";s:4:"page";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}