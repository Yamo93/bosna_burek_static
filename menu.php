<?php 
    /* Template Name: Meny-sida */
    get_header(); 

?>

    <!-- Skriver ut produkterna i menylistan i alfabetisk ordning -->
    <div class="ourmenu">
        <section class="ourmenu__left">
                <h1 class="ourmenu__title">Meny</h1>
                <div class="line">
                    <div class="fill"></div>
                </div>
                <ul class="ourmenu__list">
                <?php $loop = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC') ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li class="ourmenu__list-item">
                    
                        <a href="<?php the_permalink(); ?>">
                        <!-- <div class="ourmenu__list-item--img"></div> -->
                        <div class="wrap">
                        <?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>
                        <div class="ourmenu__list-item--info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                        <h1 class="ourmenu__list-item--price"><?php 
                            echo get_post_meta(get_the_ID(), 'Pris', TRUE) . ' kr';
                        ?></h1>
                    </a>
                </li>
                <?php endwhile; wp_reset_query(); ?>
                    
                </ul>
            </section>
        <div class="ourmenu__right">
            <!-- En slumpmässig produkt som skrivs ut i "rekommendationssektionen" -->
            <div class="ourmenu__currentproduct">
                <h1 class="ourmenu__currentproduct-bigtitle">Vår rekommendation</h1>
                <div class="line">
                    <div class="fill"></div>
                </div>
                <?php 
                if ( post_type_exists( 'products' ) ) { 
 
                    $currentproduct_query = new WP_Query( array(
                        'post_type' => 'products',
                        'orderby' => 'rand',
                        'posts_per_page' => 1
                    ) );
                  
                    if ( $currentproduct_query->have_posts() ) {
                       $currentproduct_query->the_post();     
                  
                       // do something with post - e.g. the_excerpt(), the_content(), etc.
                       ?>

                <?php the_post_thumbnail('medium_large'); ?>
                <div class="ourmenu__currentproduct-desc">
                    <p class="ourmenu__currentproduct-date"><i class="fas fa-clock icon"></i> <?php the_date('Y-m-d'); ?></p>
                    <p class="ourmenu__currentproduct-user"><i class="fas fa-user icon"></i> Av <?php the_author(); ?></p>
                </div>
                <div class="flexwrapper">
                    <div class="ourmenu__currentproduct-info">
                        <h2 class="ourmenu__currentproduct-title"><?php the_title(); ?></h2>
                        <p class="ourmenu__currentproduct-text"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="ourmenu__currentproduct-link">Läs mer</a>
                    </div>
                    <h1 class="ourmenu__currentproduct-price">
                        <?php 
                            echo get_post_meta(get_the_ID(), 'Pris', TRUE) . ' kr';
                        ?>
                    </h1>
                </div>
                    <?php 
                    }
                    // Restore original post data
                    wp_reset_postdata();
                }
                ?>

            </div>

            <!-- De senaste produkterna (senast kommer först i listan) -->
            <section class="ourmenu__latest">
                <h1 class="ourmenu__latest-title">De senaste delikatesserna</h1>
                <div class="line">
                    <div class="fill"></div>
                </div>

                <ul class="ourmenu__latest-list">
                    <?php $latest_loop = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => -1) ); ?>
                    <?php while ( $latest_loop->have_posts() ) : $latest_loop->the_post(); ?>
                    <li class="ourmenu__latest-item">
                        
                        <div class="ourmenu__latest-item--info">
                            <?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');} ?>
                            <div>
                                <p class="ourmenu__latest-item--date"><i class="fas fa-clock icon"></i><?php echo get_the_date(); ?></p>
                                <h2 class="ourmenu__latest-item--title"><?php the_title(); ?></h2>
                                <p class="ourmenu__latest-item--desc"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                        <div class="ourmenu__latest-item--price">
                            <h1>
                            <?php 
                                echo get_post_meta(get_the_ID(), 'Pris', TRUE) . ' kr';
                            ?>
                            </h1>
                            <a href="<?php the_permalink(); ?>">Läs mer</a>
                        </div>
                    </li>
                    <?php endwhile; wp_reset_query(); ?>

                </ul>

            </section>
        </div>
    </div>

    <?php get_footer(); ?>