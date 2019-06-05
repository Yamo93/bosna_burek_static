<?php 
    /* Template Name: Kontakt-sida */
    get_header(); 

?>

    <div class="contact">
        <section class="contact__left">
            <h1 class="contact__title">Kontaktinformation</h1>
            <div class="line">
                <div class="fill"></div>
            </div>
            <p class="contact__text">Passa på och sväng förbi vårt konditori eller kontakta oss via e-post alternativt telefon.</p>
            <div class="contact__means">
                <div class="iconwrapper">
                    <i class="fas fa-home icon"></i>
                </div>
                    <p class="contact__info">Bennets väg 9, Malmö</p>
            </div>
            <div class="contact__means">
                <div class="iconwrapper">
                    <i class="far fa-envelope icon"></i>
                </div>
                    <p class="contact__info">kontakt@bosnaburek.se</p>
            </div>
            <div class="contact__means lastmeans">
                <div class="iconwrapper">
                    <i class="fas fa-phone icon"></i>
                </div>
                    <p class="contact__info">0700 00 00 00</p>
            </div>

            <h1 class="contact__title">Kontaktformulär</h1>
            <div class="line">
                <div class="fill"></div>
            </div>
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                    the_content();
                    ?>

                <?php
                } // end while
            } // end if
            ?>
            <!-- <form method="post">
                <input type="text" name="name" id="name" placeholder="Namn">
                <input type="email" name="email" id="email" placeholder="E-postadress">
                <input type="text" name="address" id="address" placeholder="Adress">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Meddelande"></textarea>
                <input type="submit" value="Skicka meddelande" name="submit">
            </form> -->
        </section>
        <div class="contact__right">
            <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
        </div>

    </div>
    
    <?php get_footer(); ?>