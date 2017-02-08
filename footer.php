			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrapper">
					<div class="section group">
					<!-- copyright -->
					<div id="copy" class="col span_2_of_3">
						<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by ', 'alda'); ?><a href="//wordpress.org" title="WordPress">WordPress</a> and the theme <a href="https://github.com/mkmeese/mkm-alda" target="_blank">Alda.</a>
						</p>
					</div>
				<!-- /copyright -->
				
				<!-- social nav -->
						<div id="soc-foot" class="col span_1_of_3">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
						</div>
					
				<!-- social nav-->
					</div>
				</div>
				<!-- /wrapper -->
			
			</footer>
			<!-- /footer -->
			
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-91353050-1', 'http://mkmeese.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
