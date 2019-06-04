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

    <section class="related">
        <h1 class="related__title">Relaterade artiklar</h1>
        <div class="line">
            <div class="fill"></div>
        </div>
        <!-- Relaterad loop -->
    </section>

    <footer class="footer">
        <p class="footer__text">Följ oss på <span>Facebook.</span></p>
        <ul class="footer__menu">
            <li class="footer__menu-item"><a href="#">Om oss</a></li>
            <li class="footer__menu-item"><a href="#">Senaste nytt</a></li>
            <li class="footer__menu-item"><a href="#">Vår meny</a></li>
            <li class="footer__menu-item"><a href="#">Kontakta oss</a></li>
        </ul>
<?php get_footer(); ?>