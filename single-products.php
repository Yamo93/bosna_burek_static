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
        <h1 class="related__title">Andra intressanta produkter</h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <!-- Relaterad loop -->
    </section>

<?php get_footer(); ?>