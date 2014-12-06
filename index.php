<?php

//  ERRORZ
	ini_set('display_errors', TRUE);
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

//  Turn on Zlib output compression - regular OB fallback if not supported
	if (!ob_start('ob_gzhandler')) {
		ob_start();
	}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
<!--
     _  ___   ___                    _       _
    / |/ _ \ / _ \    __ _  ___   __| |   __| | __ _ _ __ ___  _ __    _   _  ___ _ __
    | | | | | | | |  / _` |/ _ \ / _` |  / _` |/ _` | '_ ` _ \| '_ \  | | | |/ _ \ '_ \
    | | |_| | |_| | | (_| | (_) | (_| | | (_| | (_| | | | | | | | | | | |_| |  __/ | | |
    |_|\___/ \___/   \__, |\___/ \__,_|  \__,_|\__,_|_| |_| |_|_| |_|  \__, |\___|_| |_|
                      |___/                                             |___/
-->

		<meta charset="utf-8">

		<title>100yen. Website design and development for cool people by Jonic Linley.</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="p:domain_verify" content="3326370413a8d08eb9f47fb7a6302557">

		<script src="/public/vendor/html5shiv/dist/html5shiv.js" type="application/javascript"></script>

		<link href="/public/styles/master.min.css" rel="stylesheet" type="text/css">

		<link rel="apple-touch-icon-precomposed" href="/public/images/icons/apple-touch-icon.png">
		<link rel="shortcut icon" href="/public/images/icons/favicon.ico">
	</head>

	<?php ob_flush() ?>

	<body>
		<header class="site-header" role="banner">
			<h1>100yen</h1>

			<p>Website design and development by&nbsp;Jonic&nbsp;Linley.</p>
			<p><strong>New website launching soon. <del>Maybe</del>.</strong></p>
		</header>

		<footer class="site-footer" role="contentinfo">
			<ul class="social-list">
				<li class="social-item"><a href="http://twitter.com/Jonic"    class="social-link">Twitter</a></li>
				<li class="social-item"><a href="http://tumblr.100yen.co.uk/" class="social-link">Tumblr</a></li>
				<li class="social-item"><a href="http://github.com/Jonic"     class="social-link">Github</a></li>
				<li class="social-item"><a href="http://instagram.com/Jonic"  class="social-link">Instagram</a></li>
				<li class="social-item"><a href="http://dribbble.com/Jonic"   class="social-link">Dribbble</a></li>
				<li class="social-item"><a href="http://soundcloud.com/jonic" class="social-link">SoundCloud</a></li>
			</ul>
		</footer>

		<canvas class="bg-canvas" height="100%" id="dots" width="100%"></canvas>

		<script src="/public/scripts/master.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			var _gauges = _gauges || [];

			(function() {
				var t   = document.createElement('script');
				t.type  = 'text/javascript';
				t.async = true;
				t.id    = 'gauges-tracker';
				t.setAttribute('data-site-id', '4f27dc54613f5d3dc7000003');
				t.src = '//secure.gaug.es/track.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(t, s);
			})();
		</script>
	</body>
</html>
<?php

	//  Flush and return output buffer
	while (@ob_end_flush());
