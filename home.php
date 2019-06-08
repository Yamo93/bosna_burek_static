<?php 
    /* Template Name: Nyheter-sida */
    get_header(); 

?>


    <div class="news">
        <section class="news__left">
            <h1 class="news__title">Nyheter</h1>
            <div class="line">
                <div class="fill"></div>
            </div>
            <!-- Skriver ut ett nyhetsflöde av de senaste artiklarna -->
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <article class="news__article">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-large'); ?></a>
                            <div class="news__article-info">
                                <p class="news__article-date"><i class="fas fa-clock icon"></i><?php echo get_the_date(); ?></p>
                                <p class="news__article-user"><i class="fas fa-user icon"></i>Av <?php the_author(); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>"><h2 class="news__article-title"><?php the_title(); ?></h2></a>
                            <p class="news__article-excerpt"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="news__article-readmore">Läs mer</a>
                        </article>


                    <?php
                    } // end while ?>
                    	
                    <?php pagination_nav(); ?>
                    
                    <?php 
                    } // end if
            ?>
        </section>
        <section class="news__right">
            <h1 class="news__title">Urval av artiklar</h1>
            <div class="line">
                <div class="fill"></div>
            </div>
            <!-- Skriver ut tre slumpmässiga artiklar -->
            <ul class="news__latest">
            <?php
                // Query random posts
                $the_query = new WP_Query( array(
                    'post_type'      => 'post',
                    'orderby'        => 'rand',
                    'posts_per_page' => 3,
                ) ); ?>

                <?php
                // If we have posts lets show them
                if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
                    <li class="news__latest-item">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                        <div class="news__latest-info">
                            <p class="news__latest-date"><i class="fas fa-clock icon"></i><?php echo get_the_date(); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="news__latest-title"><?php the_title(); ?></h2>
                            </a>
                            <p class="news__latest-user"><i class="fas fa-user icon"></i>Av <span><?php the_author(); ?></span></p>
                        </div>
                    </li>
                    <?php wp_reset_postdata(); ?>
                <?php } } ?>
 
            </ul>

            <!-- Facebook-widget -->
            <section class="news__widget">
                <h1 class="news__title">Senaste nytt på Facebook</h1>
                <div class="line">
                    <div class="fill"></div>
                </div>

                <?php dynamic_sidebar( 'home_right_1' ); ?>
            </section>

        </section>
    </div>

    <?php get_footer(); ?>