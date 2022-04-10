<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <!-- hämtar searhform.php -->
                <?php get_template_part('searchform');?>                
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
            <!-- hämtar sidebar widget "rubrik" och "navbar" meny med sidor-->
                    <?php dynamic_sidebar('sidor');
                    wp_nav_menu(array(
                        'theme_location' => 'sidenavbarSidor',
                        'menu_class'=> 'menu',
                    )); ?>
                <li>
                    <!-- hämtar sidebar widget "rubrik" -->
                    <?php dynamic_sidebar('arkiv');?>
                </li>
                <li class="categories">
                    <!-- hämtar sidebar widget "rubrik" och "navbar" meny med katergorier -->
                    <?php dynamic_sidebar('kategori');?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'sidenavbarKat',
                        'menu_class' => 'menu'
                    ));
                    ?>
                </li>
            </li>
        </ul>
    </div>
</aside>