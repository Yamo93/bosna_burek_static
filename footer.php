<footer class="footer">
        <p class="footer__text">Följ oss på <a href="#">Facebook.</a></p>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        <ul class="footer__menu">
            <li class="footer__menu-item"><a href="#">Om oss</a></li>
            <li class="footer__menu-item"><a href="#">Senaste nytt</a></li>
            <li class="footer__menu-item"><a href="#">Vår meny</a></li>
            <li class="footer__menu-item"><a href="#">Kontakta oss</a></li>
        </ul>
        <p class="footer__copy">Copyright &copy; 2019 av <strong>Yamo Gebrewold</strong></p>
        <?php print_r(bloginfo()); ?>
        <?php wp_footer(); ?>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>