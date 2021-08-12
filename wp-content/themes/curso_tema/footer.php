	<footer>
		<div class="container">
			<div class="row">
				<div class="copyrght col-sm-7 col-4">
					<p>Copyright</p> 
				</div>
				<nav class="footer-menu col-sm-5 col-8 text-end">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_menu'
						)
						);
					?>
				</nav>
				<div class="autora text-end">
				<p>Luciara Abbreu 01/08/2021 <3</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>