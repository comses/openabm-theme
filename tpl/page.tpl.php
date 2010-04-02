<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  </head>
<body>
	<div class="Wrapper">
		<div class="MainContent">
			<div class="Header">
				<div class="Logo">
					<h1><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php if ($site_name): ?><span><?php print $site_name; ?></span><?php endif; ?><img src="<?php print base_path().path_to_theme() ?>/images/logo.gif" alt="Open ABM | a node in the CoMSES Research Network" /></a></h1>
					<?php if ($site_slogan): ?>
						<p><?php print $site_slogan; ?></p>
					<?php endif; ?>
				</div>
				<?php print $header ?>
				<? if($search_box): ?>
					<div class="Search">
						<?php print $search_box; ?>
					</div>
				<? endif; ?>
			</div>
			<div class="hrLine"></div>
			<div class="Content">
				<div class="LeftColumn">
					<?php 
					if ($left) : 
						print $left; 
					endif; 
					?>
				</div>
				<div class="MainColumn">
					<div class="TopNav">
						<ul>
							<li><a class="home" href="<?php print $base_path ?>"><span>Home</span></a></li>
							<li><a class="about" href="<?php print $base_path ?>about"><span>about</span></a></li>
							<li><a class="contact" href="<?php print $base_path ?>contact"><span>contact</span></a></li>
						</ul>	
					</div>
					<?
					/*
					-------------------------------------------------------------
						If you want the front page to run normal remove the $is_front variable and all contents inside it.
						The idea here is that the layout is standard without using panels, so that proper formatting can work.
						Instead of panels standard blocks on information are put in place. 
					-------------------------------------------------------------
					*/
					?>
					<?php if ($is_front) : ?>
						<div class="MainColumnLeft">
							<div class="Welcome">
								<h2>Welcome</h2>
								<?php if ($mission) : ?>
									<p><?php print $mission; ?></p>
								<?php endif; ?>
							</div>
							<div class="GeneralBox">
								<?php print $mainLeftColumn; ?>				
							</div>
						</div>
						<div class="MainColumnRight">
							<? print $mainRightColumn?>
						</div>
					<? else : ?>
						<div class="MainColumnFull">
							<?php /*if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } //*/ ?>
							<?php if ($title): ?><h2 class="title"><?php print $title ?></h2><?php endif; ?>
							<?php //print $breadcrumb ?>						
							<?php if ($tabs): ?><div class="tabs"><?php print $tabs ?></div><?php endif; ?>
							<?php print $help ?>
							<?php if ($show_messages) { print $messages; } ?>
							<?php //print $help ?>
							<?php print $content; ?>
							<?php //print $feed_icons; ?>
						</div>
					<? endif; ?>
				</div>
			</div>
			<div class="hrLine"></div>
			<div class="Footer">
				<ul>
					<li><a href="http://www.nsf.gov/"><img src="<?php print base_path().path_to_theme(); ?>/images/logoNSF.jpg" alt="National Science Foundation" /></a></li>
					<li><a href="http://www.asu.edu"><img class="imgAlignTop" src="<?php print base_path().path_to_theme(); ?>/images/logoASU.jpg" alt="Arizona State University" /></a></li>
					<li><a href="http://creativecommons.org/licenses/by-nc/3.0/"><img class="imgAlignTop" src="<?php print base_path().path_to_theme(); ?>/images/logoCC.jpg" alt="Creative Commons" /></a></li>
				</ul>
				<p>&copy;CoMSES Open ABM | Terms of Use | Privacy Policy</p>
				<?php print $footer_message ?>
				<?php print $footer ?>
			</div>
		</div>
	</div>
	<div class="Base"></div>
	<?php //print $closure ?>
</body>
</html>


    
    <!-- <td id="menu">
      <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
    
    <td colspan="2"><div><?php print $header ?></div></td> -->
