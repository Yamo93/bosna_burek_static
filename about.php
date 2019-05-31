<?php 
    /* Template Name: Om oss-sida */
    get_header(); 

?>

    <section class="about">
        <div class="about__img"></div>
        <h1 class="about__title">Om verksamheten</h1>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
        <p class="about__text">Vår verksamhet har som mål att tillföra en god upplevelse som kund. Vi utvidgar ständigt vårt urval och ser till att servicen är på topp.</p>
    </section>

    <div class="newsletter">
        <p class="newsletter__text">Prenumera gärna på vårt nyhetsbrev.</p>
        <form action="post">
            <input type="email" name="email" id="email" class="newsletter__email" placeholder="Ange din e-postadress">
            <input type="submit" value="Skicka" name="emailsubmit">
        </form>
    </div>

<?php get_footer(); ?>