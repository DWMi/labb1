<?php get_header();?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    while (have_posts()) {
                        the_post(); ?>
                        <article>
                        <?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] );?>
                            <h1 class="title"><?php echo wp_title(''); ?> </h1>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="<?php echo get_permalink(); ?>"><?php the_tags(''); ?></a>
                                </li>
                            </ul>


                            <p><?php the_content(); ?></p>
                        </article>


                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>