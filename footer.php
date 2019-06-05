<footer class="footer">
        <!-- Länk till sociala medier -->
        <p class="footer__text">Följ oss på <a href="https://www.facebook.com/Bosnaburek/" target="_blank">Facebook.</a></p>
        <!-- Fotmeny -->
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        
        <!-- Copyright -->
        <p class="footer__copy">Copyright &copy; 2019 av <strong>Yamo Gebrewold</strong></p>
        <?php wp_footer(); ?>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>