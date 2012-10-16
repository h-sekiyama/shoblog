<!DOCTYPE html>  
<html lang="ja">  
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
<meta name="viewport" content="user-scalable=yes, width=500" />

<title>
<?php if (function_exists('is_tag') && is_tag()) {
  echo 'Tag Archive for &quot;'.$tag.'&quot; - '; }
  elseif (is_archive()) { wp_title('');
  echo ' Archive - '; }
  elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title('');
  echo ' - '; }
  elseif (is_404()) {
    echo 'Not Found - '; }
    if (is_home()) { bloginfo('name');
    echo ' - '; bloginfo('description'); }
    else { bloginfo('name'); } ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/light.css">
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/ie.css"><![endif]-->

<?php $feedburner = get_option('mmminimal_feedburner'); ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php if ($feedburner != '') { echo 'http://feeds.feedburner.com/'.$feedburner; } else { bloginfo('rss2_url'); } ?>" />
<?php wp_head(); ?>
<script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav-dropdown.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/thumbnail-fade.js"></script>
</head>
<body>

<div id="header">
<div id="logo">
<a href="/wordpress/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="http://shobon.hotcom-web.com/wordpress/wp-content/themes/simplydelicious/img/img_05.png" width="680" height="106"></a>
</div>
</div>

<div id="container">

<ul id="navigation">
	<li><a href="<?php bloginfo('url'); ?>/" title="Go to <?php bloginfo('name'); ?> home page">Home</a></li>
	<li><a href="#">Category</a>
	<ul>
	<?php wp_list_categories('orderby=name&title_li=&depth=-1'); ?>
	</ul>
	</li>
	</ul>
	</li>
</ul>
<img src="http://shobon.hotcom-web.com/wordpress/wp-content/themes/simplydelicious/img/nav_shadow.gif">
</div>