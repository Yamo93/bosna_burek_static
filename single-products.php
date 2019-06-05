<?php 
    get_header(); 

?>

    
    <section class="single">
        <?php if ( has_post_thumbnail() ) {the_post_thumbnail('large');} ?>

        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                            <div class="single__info">
                                <p class="single__date"><i class="fas fa-clock icon"></i><?php the_date(); ?></p>
                                <p class="single__user"><i class="fas fa-user icon"></i>Av <?php the_author(); ?></p>
                            </div>
                    <h1 class="single__title"><?php the_title(); ?></h1>
                    <div class="line">
                        <div class="fill"></div>
                    </div>
                    <p class="single__text"><?php the_content(); ?></p>
                <?php } // end while
            } // end if
        ?>

    </section>

    <section class="related">
        <h1 class="related__title">Produkter från kategorin "<?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?>"</h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <!-- Relaterad loop -->
        <div class="related__articles">
        <?php foreach((get_the_category()) as $category) { $productcategory = $category->cat_name; };
        
        $currentproduct_query = new WP_Query( array(
                'post_type' => 'products',
                'orderby' => 'rand',
                'posts_per_page' => 3,
                'category_name' => $productcategory
            ) );
            
            while ( $currentproduct_query->have_posts() ) {
                $currentproduct_query->the_post();
                ?>
                <article class="related__article">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <a href="<?php the_permalink(); ?>"><h2 class="related__article-title"><?php echo get_the_title(); ?></h2></a>
                    <a href="<?php the_permalink(); ?>" class="related__article-permalink">Läs mer</a>
                </article>
                <?php 
                    }
                    // Restore original post data
                    wp_reset_postdata();
                ?>
                </div>
    </section>

<?php get_footer(); ?>