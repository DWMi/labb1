<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- hämtar titeln Arkiv + datum för bara arkiv sidan tyvärr blev "arkiv" hårdkodat hittade inte någon tydlig lösning --> 
                <?php if(is_archive() && !is_tag() && !is_category() && !is_author() && !is_home()){ ?>
				<h1>Arkiv: <?php wp_title(''); ?></h1>
				<?php } else { ?>
					<h1><?php wp_title(''); ?></h1>
				<?php }?>
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                        <article>
                            <?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <h2 class="title"><?php the_title(); ?>
                                </h2>
                            </a>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"><?php the_time(get_option('date_format')); ?></i>
                                </li>
                                <li>
                                    <!-- hämtar författarens namn + id så att det displayar författarens inlägg bara -->
                                    <i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                    <?php the_author(); ?></a>
                                </li>
                                <li>
                                    <!-- tar dig till alla inlägg som har samma tags -->
                                    <i class="fa fa-tag"></i> <a href="<?php echo get_permalink(); ?>"><?php the_tags(''); ?></a>
                                </li>
                            </ul>

                        <!-- utdrag av text från blogginlägg -->
                            <p><?php echo wp_trim_excerpt(); ?></p>
                        </article>
                        <?php
                    }
                    ?>
                    <!-- hämtar pagination <-123-> -->
                        <?php get_template_part('pagination');?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>