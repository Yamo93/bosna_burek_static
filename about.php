<?php 
    /* Template Name: Om oss-sida */
    get_header(); 

?>

    <!-- Om oss-sektion -->
    <section class="about">
        <div class="about__img"></div>
        <h1 class="about__title">Om verksamheten</h1>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
    </section>

    <!-- Sektion för att prenumera på nyhetsbrev -->
    <div class="newsletter">
    <p class="newsletter__text">Prenumera gärna på vårt nyhetsbrev.</p>
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            the_content();
        }
    }
    ?>
        
    </div>

<?php get_footer(); ?>