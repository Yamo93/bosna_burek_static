<?php 
    get_header(); 

?>

    
    <section class="single">
        <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
            <?php the_post_thumbnail('large'); ?>

                    <div class="single__info">
                    <p class="single__date"><i class="fas fa-clock icon"></i><?php the_date(); ?></p>
                    <p class="single__user"><i class="fas fa-user icon"></i>Av <?php the_author(); ?></p>
                </div>
                <h1 class="single__title"><?php the_title(); ?></h1>
                <div class="line">
                    <div class="fill"></div>
                </div>
                <?php the_content(); ?>
            <?php 
            } // end while
        } // end if
        ?>
    </section>

    <!-- Sektion för artiklar från samma kategori -->
    <section class="related">
        <?php $orig_post = $post;
            global $post;
            $categories = get_the_category($post->ID);
            if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

            // Skriver ut alla artiklar från kategorin FÖRUTOM den specifika artikeln i sig
            $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=> 3, // Number of related posts that will be shown.
            'caller_get_posts'=>1
            );

            $my_query = new wp_query( $args );
            if( $my_query->have_posts() ) {
                ?>
            <h1 class="related__title">Relaterade artiklar</h1>
            <div class="line">
                <div class="fill"></div>
            </div>

            <div class="related__articles">
            <?php while( $my_query->have_posts() ) {
            $my_query->the_post();?>

            <article class="related__article">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <a href="<?php the_permalink(); ?>"><h2 class="related__article-title"><?php echo get_the_title(); ?></h2></a>
                <a href="<?php the_permalink(); ?>" class="related__article-permalink">Läs mer</a>
            </article>
            <?php
            }
            } 
            }
            $post = $orig_post;
            wp_reset_query(); ?>
        </div>

    </section>

<?php get_footer(); ?>