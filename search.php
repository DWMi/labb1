<?php get_header();?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>Söktes på: <?php the_search_query();?></h1>
                    <div class="searchform-wrap">
                        <?php get_search_form();?>
                    </div>

                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <article>
                            <?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                            <h2 class="title">
                                <a href="<?php the_permalink();?>">
                                    <h1><?php the_title();?></h1>
                                </a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i><?php the_time(get_option('date_format'));?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>"><?php the_author();?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i>
                                    <a href="<?php echo get_permalink(); ?>"><?php the_tags(''); ?></a>
                                </li>
                            </ul>
                            <p><?php echo wp_trim_excerpt(''); ?></p>
                        </article>
                        <?php
                    }?>

                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="#">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Nästa</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>