<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<!-- fixar responsiviteten för mobil enheter, P.S skaffa en uppdaterad version nästa gång :)  -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!------------------------------------------------------------------------------->
	<title><?php echo wp_title(''); ?></title>
    <?php wp_head()?>
</head>
<body>

	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- skickar dig tillbaka till startsidan och hämtar titeln namn -->
					<a class="logo" href="<?php get_template_directory_uri();?>/index.php" > <?php echo get_bloginfo('name');?></a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- hämtar "sök funktion" med searchform.👇 -->
						<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<!-- Hämtar Sök funktion -->
			<?php get_search_form();?>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- hämtar navbar meny -->
						<?php wp_nav_menu(array(
							"theme_location" => "header",
							"menu_class" => "menu"
						));
						?>
					</div>
				</div>
			</div>
		</nav>