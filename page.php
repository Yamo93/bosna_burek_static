<?php 
    get_header(); 

?>

    
    <section class="page">
        <div class="page__img"></div>
        <div class="page__info">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <p class="page__date"><i class="fas fa-clock icon"></i><?php the_date(); ?></p>
            <p class="page__user"><i class="fas fa-user icon"></i>Av <?php the_author(); ?></p>
        </div>
        <h1 class="page__title"><?php the_title(); ?></h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <p class="page__text"><?php the_content(); ?></p>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="related">
        <h1 class="related__title">Relaterade artiklar</h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <!-- Relaterad loop -->
    </section>

    <?php get_footer(); ?>