<?php 
    get_header(); 

?>

    
    <section class="page">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
        <h1 class="page__title"><?php the_title(); ?></h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <p class="page__text"><?php the_content(); ?></p>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="related">
        <h1 class="related__title">Läsvärda artiklar</h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <?php
            // Query random posts
            $the_query = new WP_Query( array(
                'post_type'      => 'post',
                'orderby'        => 'rand',
                'posts_per_page' => 3,
            ) ); ?>

            <?php
            // If we have posts lets show them
            if ( $the_query->have_posts() ) : ?>
                    <div class="related__articles">

                        <?php
                        // Loop through the posts
                        while ( $the_query->have_posts() ) : $the_query->the_post();  ?>

                        <article class="related__article">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                            <a href="<?php the_permalink(); ?>"><h2 class="related__article-title"><?php echo get_the_title(); ?></h2></a>
                            <a href="<?php the_permalink(); ?>" class="related__article-permalink">Läs mer</a>
                        </article>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>

            <?php endif; ?>
    </section>

    <?php get_footer(); ?>