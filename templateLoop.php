<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php echo wp_title('');?> </h1>
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
                                    <i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="<?php echo get_permalink(); ?>"><?php the_tags(''); ?></a>
                                </li>
                            </ul>


                            <p><?php echo wp_trim_excerpt(); ?></p>
                        </article>
                        <?php
                    }
                    ?>
                        <?php get_template_part('pagination');?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>