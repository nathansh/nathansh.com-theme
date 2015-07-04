<footer class="site-footer l-flush">
	<div class="l-container">

		<?php nsh_social(); ?>

		<p class="site-footer__legaalese">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>

	</div>

</footer>

<!--
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

<?php wp_footer(); ?>

</body>
</html>
