<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=258413367597001";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wedding-content" class="content-focus">
	<div id="wedding-cover">
		<h1>Gunawan Sasongko & Rizki Amalia</h1>
		<a href="#">Watch Live Streaming</a>
	</div>
	
	<div id="wedding-focus">
		<div id="wedding-content-left">
			<div id="wedding-words">
				<h2>Hi there,</h2>
				<img src="<?=base_url();?>theme/img/mount.jpg" width="580"/>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div id="wedding-gallery">
				<h2>Wedding Gallery</h2>
				<a href="#" class="nav-more">Show more</a>
				<div id="photo-list">
					<?php for ($i=0; $i < 24; $i++) { ?>
					<img />
					<?php } ?>
				</div>
			</div>
			<div id="wedding-gallery">
				<h2>Comments</h2>
				<div class="fb-comments" data-href="http://example.com" data-num-posts="1" data-width="580"></div>
			</div>
		</div>
		<div id="wedding-content-right">
			<div id="wedding-info">
				<h2>Wedding Info</h2>
				<strong>Date</strong><br />
				Sunday, 15 August 2012, 14.00 WIB till drop<br />
				<strong>Location</strong><br />
				Graha Manggala Siliwangi, Jl. Antakusuma 34 Bandung
				<iframe width="350" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=-6.890554,107.610612&amp;spn=0.005326,0.00751&amp;z=16&amp;output=embed"></iframe>
			</div>
			<div id="wedding-video-comment">
				<h2>Video Comments</h2>
				<a href="#" class="nav-more">Show more</a>
				<div id="video-list">
					<?php for ($i=0; $i < 8; $i++) { ?>
					<img />
					<?php } ?>
				</div>
				<a id="upload-video" href="#">Add yours</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>