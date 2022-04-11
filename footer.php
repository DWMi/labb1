	<footer id="footer">
		<div class="container">
			<div class="row top">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- hämtar sidebarfooter för "kort om oss" -->
					<?php dynamic_sidebar('kort1'); ?>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<!-- hämtar sidebarfooter för "kontaktuppgifter" -->
					<?php dynamic_sidebar('kon2'); ?>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<!-- hämtar sidebarfooter för "socialamedier" -->
					<ul class="social">
						<?php dynamic_sidebar('soc3'); ?>
					</ul>
				</div>
			</div>
			<div class="row bottom">
				<div class="col-xs-12">
					<!-- hämtar siderbarfooter för "copyright" -->
					<?php dynamic_sidebar('cop4'); ?>
				</div>
			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>