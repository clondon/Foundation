	<footer>
	
	</footer>
	
	<!-- Fallback to local copy of jQuery if Google's CDN Fails --> 
	<script type="text/javascript">!window.jQuery && document.write('<script src="<?php bloginfo ("template_url"); ?>/javascripts/libs/jquery-1.6.4.min.js"><\/script>')</script>
	
	<!-- scripts concatenated and minified via ant build script-->
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/jquery.orbit-1.3.0.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/app.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/forms.jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/jquery.customforms.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/jquery.reveal.js"></script>
	<script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/javascripts/mylibs/tooltip.js"></script>
	<!-- end scripts-->
		
	<!-- Change UA-XXXXX-X to be your site's Google Analytics ID (this is an optimised version, see: http://mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXX-X']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6. Chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
    	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>

</body>
</html>