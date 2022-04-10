<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
					<?php while (have_posts()) {
						the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<p><?php the_content();?></p>
                        </div>


                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] );?>
                        </div>				
                        <?php
                } ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>