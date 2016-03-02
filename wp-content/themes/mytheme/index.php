
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Timeless   
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110825

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Timeless by FCT</title>
<link href= "<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />

<!--meta name="viewport" content="width=device-width" /-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<link href="responsive.css" rel="stylesheet" type="text/css" media="screen" />

<script src="jquery.js"></script>
<script src="jquerymenu.js"></script>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('Title'); ?> </a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<?php wp_list_pages("title_li="); ?>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php if(have_posts()){
						while (have_posts()) {
							the_post();
						?>
						<div class="post">
						<h2 class="title"><a href="#"><?php the_title(); ?></a></h2>
						<p class="meta">Posted by <a href="#">Someone</a> on August 10, 2011
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
						<div class="entry">
							<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">read more...</a>
						</div>
					</div>
					<?php
						}
						posts_nav_link();
					}
					?>

					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Custom Menu</h2>
								<ul>
									<?php wp_nav_menu('MyMenu'); ?>
								</ul>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<?php wp_list_categories('title_li='); ?>
							</ul>
						</li>
						<li>
							<h2>Plan</h2>
							<ul>
								<?php get_calendar(); ?>
							</ul>
						</li>
						<li>
							<h2>Logout</h2>
							<ul>
								<?php wp_loginout(); ?>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">FCT</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
