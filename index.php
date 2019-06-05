<?php get_header(); ?>
    
    <!-- Index-sidan (om ingen annan sida laddas) -->
    <section class="about">
        <h1 class="about__title">Välkommen till Bosna Burek!</h1>
        <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <p class="about__text">
                        <?php the_content(); ?>
                    </p>
                    
                <?php 
                } // end while
            } // end if
        ?>
    </section>

    <!-- Nyhetsboxar -->
    <section class="frontinfo">
        <h1 class="frontinfo__title">Ett konditori för alla</h1>
        <div class="frontinfo__wrapper">
            <div class="frontinfo__box">
                <div class="frontinfo__box-img"></div>
                <div class="info">
                    <h2 class="frontinfo__box-title">Läs senaste nytt</h2>
                    <p class="frontinfo__box-text">Vår verksamhet söker ständigt nya lösningar för att bidra med en trevligare upplevelse för våra kunder.</p>
                    <a href="<?php echo home_url(); ?>" class="frontinfo__box-link">Läs mer</a>
                </div>
            </div>
            <div class="frontinfo__box">
                <div class="frontinfo__box-img"></div>
                <div class="info">
                    <h2 class="frontinfo__box-title">Läs senaste nytt</h2>
                    <p class="frontinfo__box-text">Vår verksamhet söker ständigt nya lösningar för att bidra med en trevligare upplevelse för våra kunder.</p>
                    <a href="<?php echo home_url(); ?>" class="frontinfo__box-link">Läs mer</a>
                </div>
            </div>
            <div class="frontinfo__box">
                <div class="frontinfo__box-img"></div>
                <div class="info">
                    <h2 class="frontinfo__box-title">Läs senaste nytt</h2>
                    <p class="frontinfo__box-text">Vår verksamhet söker ständigt nya lösningar för att bidra med en trevligare upplevelse för våra kunder.</p>
                    <a href="<?php echo home_url(); ?>" class="frontinfo__box-link">Läs mer</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>