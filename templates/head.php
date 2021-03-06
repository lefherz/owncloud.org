<!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Organization" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta itemprop="name" content="ownCloud">
	<meta itemprop="description" content="ownCloud is an open source, self-hosted file sync and share app platform. Access  &amp; sync your files, contacts, calendars  &amp; bookmarks across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta name="description" content="ownCloud is an open source, self-hosted file sync and share app platform. Access  &amp; sync your files, contacts, calendars  &amp; bookmarks across your devices. You decide what happens with your data, where it is and who can access it!">
	<meta itemprop="image" content="https://owncloud.org/wp-content/themes/owncloudorgnew/assets/img/home/ocsplash.png">
  <meta name="theme-color" content="#1d2d44">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<?php wp_head(); ?>
	<?php if(is_page('5years') || is_page('conf') || is_page('federation') || is_page('register') || is_page('thankyou')) { ?><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/conf.css"><?php } ?>
	<?php if(is_page('news')) { ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.infinitescroll.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.masonry.min.js"></script>
	<?php } ?>
  <!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.owncloud.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>



